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

use core\check\check;
use core\check\result;

/**
 * Status check: whether users can set their own accessibility options.
 *
 * The options of each user, and the choice of this theme, need "Allow user themes". It is the same condition as the
 * warning on the admin notifications page.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class userthemes extends check {
    /**
     * Link to the setting that fixes a warning.
     *
     * @return \action_link
     */
    public function get_action_link(): ?\action_link {
        return new \action_link(
            new \moodle_url('/admin/search.php', ['query' => 'allowuserthemes']),
            get_string('checkuserthemes_action', 'theme_accessible'),
        );
    }

    /**
     * Result of the check: OK when "Allow user themes" is on, a warning when it is off.
     *
     * @return result
     */
    public function get_result(): result {
        global $CFG;

        if (!empty($CFG->allowuserthemes)) {
            return new result(result::OK, get_string('checkuserthemes_ok', 'theme_accessible'));
        }
        return new result(result::WARNING, get_string('checkuserthemes_warning', 'theme_accessible'));
    }
}
