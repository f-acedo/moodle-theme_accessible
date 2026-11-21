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
 * Hook callbacks of the Accessible theme.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {
    /**
     * Warns site administrators, on the admin notifications page, that the users' own configuration is disabled.
     *
     * The options of each user (and the choice of this theme) need "Allow user themes". This runs whenever the plugin is
     * installed, whatever the site theme is.
     *
     * @param before_http_headers $hook The hook.
     */
    public static function before_http_headers(before_http_headers $hook): void {
        global $CFG, $PAGE;

        if ($PAGE->pagetype !== 'admin-index' || !is_siteadmin() || !empty($CFG->allowuserthemes)) {
            return;
        }
        $url = new \moodle_url('/admin/search.php', ['query' => 'allowuserthemes']);
        \core\notification::add(
            get_string('userthemesnotice', 'theme_accessible', $url->out(false)),
            \core\notification::WARNING,
        );
    }

    /**
     * Gives a user the accessibility options they chose as a visitor, the first time they log in.
     *
     * Only when the account has no option of its own yet, so a choice saved in the account is never overwritten.
     *
     * @param \core\event\user_loggedin $event The event.
     */
    public static function user_loggedin(\core\event\user_loggedin $event): void {
        if (isguestuser($event->objectid)) {
            return;
        }
        $copied = preferences::import_visitor_choices((int) $event->objectid);
        if ($copied) {
            $url = new \moodle_url('/theme/accessible/preferences.php');
            \core\notification::add(
                get_string('visitorchoicesapplied', 'theme_accessible', $url->out(false)),
                \core\notification::INFO,
            );
        }
    }

    /**
     * Deletes the visitor cookie with the accessibility options when a user logs out.
     *
     * @param \core\event\user_loggedout $event The event.
     */
    public static function user_loggedout(\core\event\user_loggedout $event): void {
        preferences::forget_visitor_choices();
    }
}
