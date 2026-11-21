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
 * Page where users choose their accessibility options.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use theme_accessible\form\preferences_form;
use theme_accessible\preferences;

// Visitors and guests can set the options too: they are kept in a cookie. Accounts also keep them as preferences.
$hasaccount = isloggedin() && !isguestuser();
if ($hasaccount) {
    require_login(null, false);
    // The same check Moodle applies when a user changes their own preferences.
    require_capability('moodle/user:editownprofile', \context_system::instance());
}

// The page that opened this one (see preferences::options_url()): "Save and return" and "Cancel" go back to it.
$returnurl = optional_param('returnurl', '', PARAM_LOCALURL);
$destination = preferences::return_destination($returnurl);
$url = new \moodle_url('/theme/accessible/preferences.php', $returnurl !== '' ? ['returnurl' => $returnurl] : []);
$title = get_string('accessibilityoptions', 'theme_accessible');
$PAGE->set_context(\context_system::instance());
$PAGE->set_url($url);
// Visitors without a session get the login page's layout: no blocks, custom menu or navigation of a site that may be
// closed to them (forcelogin). Guests and users keep the standard layout.
$PAGE->set_pagelayout(isloggedin() ? 'standard' : 'login');
$PAGE->set_title($title);
$PAGE->set_heading($title);

$form = new preferences_form($url);

if ($form->is_cancelled()) {
    redirect($destination);
}

if ($data = $form->get_data()) {
    $reset = !empty($data->resetbutton);
    $values = [];
    foreach (array_keys(preferences::OPTIONS) as $key) {
        $values[$key] = $reset ? '' : ($data->$key ?? '');
    }
    preferences::save($values);
    if ($hasaccount && !empty($CFG->allowuserthemes)) {
        $theme = $reset ? '' : $data->theme;
        if ($theme !== (string) $USER->theme) {
            user_update_user((object) ['id' => $USER->id, 'theme' => $theme], false);
            $USER->theme = $theme;
        }
    }
    // The "Save and return" button goes back to the page the user came from; "Save and stay" and "Restore defaults" stay here.
    $next = !empty($data->submitbutton) ? $destination : $url;
    redirect($next, get_string('changessaved', 'theme_accessible'), null, \core\output\notification::NOTIFY_SUCCESS);
}

$current = ['theme' => (string) ($USER->theme ?? ''), 'returnurl' => $returnurl];
foreach (array_keys(preferences::OPTIONS) as $key) {
    $current[$key] = in_array($key, preferences::SITE_DEFAULTS, true) ? preferences::stored($key) : preferences::get($key);
}
$form->set_data($current);

echo $OUTPUT->header();
if (!isloggedin()) {
    // The login layout has no page header, so the page heading goes here.
    echo $OUTPUT->heading($title, 1);
}
echo $form->render();
echo $OUTPUT->footer();
