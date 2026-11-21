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

use core\hook\output\before_http_headers;

/**
 * Tests for the hook and event callbacks of the theme.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
#[\PHPUnit\Framework\Attributes\CoversClass(\theme_accessible\hook_callbacks::class)]
final class hook_callbacks_test extends \advanced_testcase {
    protected function tearDown(): void {
        unset($_COOKIE['MoodleAccessible' . $GLOBALS['CFG']->sessioncookie]);
        parent::tearDown();
    }

    /**
     * Runs the before_http_headers callback and returns the notifications it added.
     *
     * @param string $pagetype Page type.
     * @param bool $admin Whether the current user is a site administrator.
     * @param bool $allowuserthemes Value of the allowuserthemes setting.
     * @return \core\output\notification[]
     */
    private function run_headers(string $pagetype, bool $admin, bool $allowuserthemes): array {
        global $CFG, $PAGE;
        $admin ? $this->setAdminUser() : $this->setUser($this->getDataGenerator()->create_user());
        $CFG->allowuserthemes = $allowuserthemes;
        $PAGE->set_pagetype($pagetype);
        \core\notification::fetch();
        hook_callbacks::before_http_headers(new before_http_headers($PAGE->get_renderer('core')));
        return \core\notification::fetch();
    }

    public function test_admin_index_warns_when_user_themes_are_off(): void {
        $this->resetAfterTest();
        $notifications = $this->run_headers('admin-index', true, false);
        $this->assertCount(1, $notifications);
        $this->assertSame(\core\notification::WARNING, $notifications[0]->get_message_type());
        $this->assertStringContainsString('allowuserthemes', $notifications[0]->get_message());
    }

    public function test_no_warning_when_user_themes_are_on(): void {
        $this->resetAfterTest();
        $this->assertCount(0, $this->run_headers('admin-index', true, true));
    }

    public function test_no_warning_for_non_admins(): void {
        $this->resetAfterTest();
        $this->assertCount(0, $this->run_headers('admin-index', false, false));
    }

    public function test_no_warning_on_other_pages(): void {
        $this->resetAfterTest();
        $this->assertCount(0, $this->run_headers('site-index', true, false));
    }

    public function test_login_copies_visitor_choices_and_informs(): void {
        global $CFG, $SESSION;
        $this->resetAfterTest();
        $user = $this->getDataGenerator()->create_user();
        $this->setUser($user);
        // After setUser(), which starts an empty session.
        $SESSION->theme_accessible_choicesthisvisit = true;
        $_COOKIE['MoodleAccessible' . $CFG->sessioncookie] = json_encode(['fontsize' => '150']);
        \core\notification::fetch();

        hook_callbacks::user_loggedin($this->login_event($user));

        $this->assertSame('150', get_user_preferences(preferences::name('fontsize'), null, $user->id));
        $notifications = \core\notification::fetch();
        $this->assertCount(1, $notifications);
        $this->assertSame(\core\notification::INFO, $notifications[0]->get_message_type());
    }

    public function test_login_without_cookie_is_silent(): void {
        $this->resetAfterTest();
        $user = $this->getDataGenerator()->create_user();
        $this->setUser($user);
        \core\notification::fetch();

        hook_callbacks::user_loggedin($this->login_event($user));

        $this->assertCount(0, \core\notification::fetch());
    }

    public function test_login_of_guest_is_ignored(): void {
        global $CFG;
        $this->resetAfterTest();
        $guest = guest_user();
        $_COOKIE['MoodleAccessible' . $CFG->sessioncookie] = json_encode(['fontsize' => '150']);

        hook_callbacks::user_loggedin($this->login_event($guest));

        $this->assertNull(get_user_preferences(preferences::name('fontsize'), null, $guest->id));
    }

    /**
     * Builds the event the core fires after a login.
     *
     * @param \stdClass $user User.
     * @return \core\event\user_loggedin
     */
    private function login_event(\stdClass $user): \core\event\user_loggedin {
        return \core\event\user_loggedin::create([
            'userid' => $user->id,
            'objectid' => $user->id,
            'other' => ['username' => $user->username],
        ]);
    }
}
