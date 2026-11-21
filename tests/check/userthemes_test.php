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

namespace theme_accessible\check;

use core\check\result;

/**
 * Tests for the "user themes" status check.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
#[\PHPUnit\Framework\Attributes\CoversClass(\theme_accessible\check\userthemes::class)]
final class userthemes_test extends \advanced_testcase {
    public function test_ok_when_user_themes_are_allowed(): void {
        global $CFG;
        $this->resetAfterTest();
        $CFG->allowuserthemes = 1;
        $this->assertSame(result::OK, (new userthemes())->get_result()->get_status());
    }

    public function test_warning_when_user_themes_are_off(): void {
        global $CFG;
        $this->resetAfterTest();
        $CFG->allowuserthemes = 0;
        $this->assertSame(result::WARNING, (new userthemes())->get_result()->get_status());
    }

    public function test_action_link_points_to_the_setting(): void {
        $link = (new userthemes())->get_action_link();
        $this->assertStringContainsString('allowuserthemes', $link->url->out(false));
    }

    public function test_check_is_registered(): void {
        global $CFG;
        require_once($CFG->dirroot . '/theme/accessible/lib.php');
        $checks = \theme_accessible_status_checks();
        $this->assertInstanceOf(userthemes::class, $checks[0]);
    }
}
