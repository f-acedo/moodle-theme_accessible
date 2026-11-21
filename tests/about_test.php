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
 * Tests for the data of the Information tab.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
#[\PHPUnit\Framework\Attributes\CoversClass(\theme_accessible\about::class)]
final class about_test extends \advanced_testcase {
    public function test_licences_start_with_gpl_then_the_fonts(): void {
        $licences = about::export_context()['licences'];
        $this->assertCount(2, $licences);
        $this->assertStringContainsString('gnu.org', $licences[0]['officialurl']);
        $this->assertCount(1, $licences[0]['items']);
        $this->assertCount(count(preferences::OPTIONS['font']), $licences[1]['items']);
    }

    public function test_licence_copies_exist_in_the_theme(): void {
        foreach (about::export_context()['licences'] as $licence) {
            foreach ($licence['items'] as $item) {
                $path = str_starts_with($item['copyfile'], 'LICENSE-') ? 'fonts/' . $item['copyfile'] : $item['copyfile'];
                $this->assertFileExists(__DIR__ . '/../' . $path);
            }
        }
    }

    public function test_every_font_option_has_a_specimen(): void {
        $keys = array_column(about::export_context()['fonts'], 'key');
        $this->assertSame(preferences::OPTIONS['font'], $keys);
    }

    public function test_previews_cover_original_mono_and_each_strength(): void {
        $this->resetAfterTest();
        $previews = about::export_context()['previews'];
        $this->assertCount(11, $previews);
        $this->assertSame('', $previews[0]['filter']);
        $filters = array_column($previews, 'filter');
        $this->assertContains('accessible-colortype-mono', $filters);
        $this->assertContains('accessible-colortype-deutan-strong', $filters);
    }

    public function test_notice_only_when_the_admin_has_a_colour_filter(): void {
        $this->resetAfterTest();
        $this->setAdminUser();
        $this->assertFalse(about::export_context()['colorfilteractive']);
        set_user_preference(preferences::name('colortype'), 'tritan');
        $this->assertTrue(about::export_context()['colorfilteractive']);
    }

    public function test_template_renders(): void {
        global $OUTPUT;
        $this->resetAfterTest();
        $html = $OUTPUT->render_from_template('theme_accessible/about', about::export_context());
        $this->assertStringContainsString('accessible-about-colortest', $html);
        $this->assertStringContainsString('url(#accessible-colortype-protan-mild)', $html);
    }

    public function test_alert_samples_cover_the_four_types_and_are_not_announced(): void {
        global $OUTPUT, $PAGE;
        $this->resetAfterTest();
        // PHPUnit runs on the command line, where notifications are plain text ("++ message ++"): use the web renderer,
        // as the settings page does. The reset after the test restores $OUTPUT.
        $OUTPUT = $PAGE->get_renderer('core', null, RENDERER_TARGET_GENERAL);
        $alerts = about::export_context()['alerts'];
        $this->assertCount(4, $alerts);
        foreach (['success', 'info', 'warning', 'danger'] as $i => $class) {
            $this->assertStringContainsString('alert-' . $class, $alerts[$i]);
            $this->assertStringContainsString(get_string('alertsample', 'theme_accessible'), $alerts[$i]);
            $this->assertStringNotContainsString('role="alert"', $alerts[$i]);
        }
    }

    public function test_support_info_has_environment_and_no_site_details(): void {
        global $CFG;
        $info = about::support_info();
        $this->assertStringContainsString('Accessible version: ', $info);
        $this->assertStringContainsString('Moodle: ' . $CFG->release, $info);
        $this->assertStringContainsString('PHP: ' . PHP_VERSION, $info);
        $this->assertStringContainsString('Contrast: normal', $info);
        $this->assertStringNotContainsString($CFG->wwwroot, $info);
        $this->assertStringNotContainsString($CFG->dirroot, $info);
        $this->assertStringNotContainsString($CFG->dataroot, $info);
    }

    public function test_report_button_links_to_the_issues_page(): void {
        global $OUTPUT;
        $this->assertSame('https://github.com/f-acedo/moodle-theme_accessible/issues', about::ISSUES_URL);
        $html = $OUTPUT->render_from_template('theme_accessible/about', about::export_context());
        $this->assertStringContainsString('data-action="accessible-copy-support"', $html);
        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="[^"]*moodle-theme_accessible\/issues"[^>]*>\s*Report an issue/',
            $html
        );
    }
}
