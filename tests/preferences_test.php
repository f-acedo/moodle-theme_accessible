<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace theme_accessible;

/**
 * Tests for the per-user accessibility preferences.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
#[\PHPUnit\Framework\Attributes\CoversClass(\theme_accessible\preferences::class)]
final class preferences_test extends \advanced_testcase {
    /**
     * Name of the visitor cookie.
     *
     * @return string
     */
    private function cookie_name(): string {
        global $CFG;
        return 'MoodleAccessible' . $CFG->sessioncookie;
    }

    protected function tearDown(): void {
        unset($_COOKIE[$this->cookie_name()]);
        parent::tearDown();
    }

    public function test_defaults_give_no_body_classes(): void {
        $this->resetAfterTest();
        $this->setUser($this->getDataGenerator()->create_user());
        $this->assertSame([], preferences::body_classes());
        $this->assertSame('', preferences::body_theme_attribute());
        foreach (preferences::OPTIONS as $key => $values) {
            $this->assertSame($values[0], preferences::get($key));
        }
    }

    public function test_body_classes_only_for_values_that_differ_from_base(): void {
        $this->resetAfterTest();
        $this->setUser($this->getDataGenerator()->create_user());
        set_user_preference(preferences::name('font'), 'opendyslexic');
        set_user_preference(preferences::name('fontsize'), '125');
        set_user_preference(preferences::name('spacing'), 'normal');
        $classes = preferences::body_classes();
        $this->assertContains('accessible-font-opendyslexic', $classes);
        $this->assertContains('accessible-fontsize-125', $classes);
        $this->assertNotContains('accessible-spacing-normal', $classes);
    }

    public function test_high_contrast_sets_dark_attribute(): void {
        $this->resetAfterTest();
        $this->setUser($this->getDataGenerator()->create_user());
        set_user_preference(preferences::name('contrast'), 'high');
        $this->assertContains('accessible-contrast-high', preferences::body_classes());
        $this->assertSame(' data-bs-theme="dark"', preferences::body_theme_attribute());
    }

    public function test_colour_strength_class_only_for_filtering_types(): void {
        $this->resetAfterTest();
        $this->setUser($this->getDataGenerator()->create_user());
        set_user_preference(preferences::name('colorstrength'), 'strong');

        set_user_preference(preferences::name('colortype'), 'deutan');
        $classes = preferences::body_classes();
        $this->assertContains('accessible-colortype-deutan', $classes);
        $this->assertContains('accessible-colorstrength-strong', $classes);

        set_user_preference(preferences::name('colortype'), 'mono');
        $classes = preferences::body_classes();
        $this->assertContains('accessible-colortype-mono', $classes);
        $this->assertNotContains('accessible-colorstrength-strong', $classes);

        set_user_preference(preferences::name('colortype'), 'none');
        $this->assertSame([], preferences::body_classes());
    }

    public function test_invalid_stored_value_is_ignored(): void {
        $this->resetAfterTest();
        $this->setUser($this->getDataGenerator()->create_user());
        set_user_preference(preferences::name('fontsize'), '999');
        $this->assertSame('', preferences::stored('fontsize'));
        $this->assertSame('100', preferences::get('fontsize'));
    }

    public function test_site_default_and_user_choice_precedence(): void {
        $this->resetAfterTest();
        $this->setUser($this->getDataGenerator()->create_user());
        set_config('default_fontsize', '150', 'theme_accessible');
        $this->assertSame('150', preferences::site_default('fontsize'));
        $this->assertContains('accessible-fontsize-150', preferences::body_classes());

        // An explicit choice equal to the base value still beats the site default.
        set_user_preference(preferences::name('fontsize'), '100');
        $this->assertSame('100', preferences::get('fontsize'));
        $this->assertNotContains('accessible-fontsize-150', preferences::body_classes());
    }

    public function test_site_default_ignores_invalid_and_non_default_keys(): void {
        $this->resetAfterTest();
        set_config('default_fontsize', '777', 'theme_accessible');
        set_config('default_colortype', 'deutan', 'theme_accessible');
        $this->assertSame('100', preferences::site_default('fontsize'));
        $this->assertSame('none', preferences::site_default('colortype'));
    }

    public function test_site_default_applies_to_visitors(): void {
        $this->resetAfterTest();
        $this->setUser(0);
        set_config('default_contrast', 'high', 'theme_accessible');
        $this->assertContains('accessible-contrast-high', preferences::body_classes());
    }

    public function test_visitor_reads_valid_cookie_values(): void {
        $this->resetAfterTest();
        $this->setUser(0);
        $_COOKIE[$this->cookie_name()] = json_encode(['font' => 'atkinson', 'motion' => 'reduced']);
        $this->assertSame('atkinson', preferences::stored('font'));
        $this->assertSame('atkinson', preferences::get('font'));
        $this->assertContains('accessible-motion-reduced', preferences::body_classes());
    }

    public function test_guest_uses_cookie_not_account(): void {
        $this->resetAfterTest();
        $this->setGuestUser();
        $_COOKIE[$this->cookie_name()] = json_encode(['spacing' => 'wide']);
        $this->assertSame('wide', preferences::stored('spacing'));
    }

    public function test_tampered_cookie_is_ignored(): void {
        $this->resetAfterTest();
        $this->setUser(0);
        $_COOKIE[$this->cookie_name()] = json_encode(['font' => 'comicsans', 'unknown' => 'x', 'focus' => 'thick']);
        $this->assertSame('', preferences::stored('font'));
        $this->assertSame('thick', preferences::stored('focus'));

        foreach (['not json', '"string"', '', '[1,2]'] as $bad) {
            $_COOKIE[$this->cookie_name()] = $bad;
            $this->assertSame('', preferences::stored('font'));
        }
    }

    public function test_import_visitor_choices_copies_into_empty_account(): void {
        global $SESSION;
        $this->resetAfterTest();
        $SESSION->theme_accessible_choicesthisvisit = true;
        $user = $this->getDataGenerator()->create_user();
        $_COOKIE[$this->cookie_name()] = json_encode(['font' => 'opendyslexic', 'fontsize' => '200', 'bad' => 'x']);

        $this->assertTrue(preferences::import_visitor_choices($user->id));
        $this->assertSame('opendyslexic', get_user_preferences(preferences::name('font'), null, $user->id));
        $this->assertSame('200', get_user_preferences(preferences::name('fontsize'), null, $user->id));
        $this->assertNull(get_user_preferences('theme_accessible_bad', null, $user->id));
    }

    public function test_import_visitor_choices_never_overwrites_the_account(): void {
        global $SESSION;
        $this->resetAfterTest();
        $SESSION->theme_accessible_choicesthisvisit = true;
        $user = $this->getDataGenerator()->create_user();
        set_user_preference(preferences::name('motion'), 'reduced', $user->id);
        $_COOKIE[$this->cookie_name()] = json_encode(['font' => 'opendyslexic']);

        $this->assertFalse(preferences::import_visitor_choices($user->id));
        $this->assertNull(get_user_preferences(preferences::name('font'), null, $user->id));
    }

    public function test_import_visitor_choices_without_cookie(): void {
        global $SESSION;
        $this->resetAfterTest();
        $SESSION->theme_accessible_choicesthisvisit = true;
        $user = $this->getDataGenerator()->create_user();
        $this->assertFalse(preferences::import_visitor_choices($user->id));
    }

    public function test_import_visitor_choices_ignores_a_cookie_from_an_earlier_visit(): void {
        $this->resetAfterTest();
        $user = $this->getDataGenerator()->create_user();
        // A shared computer: the cookie was left by someone else, not chosen in this visit.
        $_COOKIE[$this->cookie_name()] = json_encode(['font' => 'opendyslexic']);

        $this->assertFalse(preferences::import_visitor_choices($user->id));
        $this->assertNull(get_user_preferences(preferences::name('font'), null, $user->id));
    }

    public function test_every_option_value_has_a_label(): void {
        foreach (preferences::OPTIONS as $key => $values) {
            foreach ($values as $value) {
                $this->assertTrue(
                    get_string_manager()->string_exists('option_' . $key . '_' . $value, 'theme_accessible'),
                    "Missing label for $key = $value"
                );
            }
        }
    }

    public function test_options_url_carries_the_page_it_is_shown_in(): void {
        $from = new \moodle_url('/mod/book/view.php', ['id' => 5]);
        $url = preferences::options_url($from);
        $this->assertStringEndsWith('/theme/accessible/preferences.php', $url->get_path());
        $this->assertSame($from->out(false), $url->get_param('returnurl'));
    }

    public function test_return_destination_accepts_a_page_of_the_site(): void {
        global $CFG;
        $this->resetAfterTest();
        $this->setUser(0);
        $page = $CFG->wwwroot . '/mod/book/view.php?id=5';
        $this->assertSame($page, preferences::return_destination($page)->out(false));
    }

    public function test_return_destination_ignores_other_sites_and_the_options_page(): void {
        global $CFG;
        $this->resetAfterTest();
        $this->setUser(0);
        $home = (new \moodle_url('/'))->out(false);
        $this->assertSame($home, preferences::return_destination('https://example.com/')->out(false));
        $this->assertSame($home, preferences::return_destination('//example.com/x')->out(false));
        $this->assertSame($home, preferences::return_destination($CFG->wwwroot . '/theme/accessible/preferences.php')->out(false));
        $this->assertSame($home, preferences::return_destination('')->out(false));
    }

    public function test_return_destination_defaults_to_the_preferences_page_of_a_user(): void {
        $this->resetAfterTest();
        $this->setUser($this->getDataGenerator()->create_user());
        $this->assertSame(
            (new \moodle_url('/user/preferences.php'))->out(false),
            preferences::return_destination('')->out(false)
        );
    }
}
