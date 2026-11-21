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

/**
 * Compile test for the theme stylesheet.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_accessible;

/**
 * Checks that the theme SCSS compiles, so a typo in styles.scss is caught before it reaches users.
 *
 */
#[\PHPUnit\Framework\Attributes\CoversFunction('theme_accessible_get_extra_scss')]
final class scss_test extends \advanced_testcase {
    public function test_theme_css_compiles(): void {
        $css = \theme_config::load('accessible')->get_css_content();
        $this->assertStringContainsString('forced-colors', $css);
        $this->assertStringContainsString('.accessible-footer', $css);
        // The high contrast palette and its colour tokens must survive compilation.
        $this->assertStringContainsString('body.accessible-contrast-high', $css);
        $this->assertStringContainsString('--accessible-', $css);
        $this->assertStringContainsString('--accessible-code', $css);
    }
}
