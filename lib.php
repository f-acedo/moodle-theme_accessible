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
 * Theme functions for the Accessible theme.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Returns the main SCSS content: the raw SCSS imports setting, then Boost's main SCSS (its default preset).
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_accessible_get_main_scss_content($theme): string {
    global $CFG;
    require_once($CFG->dirroot . '/theme/boost/lib.php');

    $scss = '';
    if (!empty($theme->settings->scssimport)) {
        $scss .= $theme->settings->scssimport . "\n";
    }

    return $scss . theme_boost_get_main_scss_content($theme);
}

/**
 * Get SCSS to prepend: the drawer widths, then the raw initial SCSS setting. Boost's own pre SCSS (brand colour, Behat flag) is
 * already applied through the parent theme.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_accessible_get_pre_scss($theme): string {
    // Boost fixes its drawers at 285px / 315px; in rem they follow the user's text size and the block drawer is wider.
    $scss = "\$drawer-left-width: 18rem;\n\$drawer-right-width: 22rem;\n";
    // File picker drop area: Boost's #bbb / #fb7979 / #6c8cd3 borders are about 2 to 3:1 on white; dark grey is 7:1.
    $scss .= "\$filemanager-dnd-border-color: #595959;\n\$filemanager-dnd-upload-target-border-color: #595959;\n" .
        "\$filemanager-dnd-upload-over-border-color: #000;\n";
    // Select arrow: Bootstrap draws it at 16px by 12px whatever the text size; the same at 100%, in rem.
    $scss .= "\$form-select-bg-size: 1rem 0.75rem;\n";
    return $scss . ($theme->settings->scsspre ?? '');
}

/**
 * Get SCSS to append: styles.scss and the raw SCSS setting, in that order.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_accessible_get_extra_scss($theme): string {
    return file_get_contents($theme->dir . '/scss/styles.scss') . "\n" . ($theme->settings->scss ?? '');
}

/**
 * Registers the accessibility preferences so Moodle can store and validate them as user preferences.
 *
 * @return array
 */
function theme_accessible_user_preferences(): array {
    $definitions = [];
    foreach (\theme_accessible\preferences::OPTIONS as $key => $values) {
        $definitions[\theme_accessible\preferences::name($key)] = [
            'type' => PARAM_ALPHANUM,
            'null' => NULL_NOT_ALLOWED,
            'default' => $values[0],
            'permissioncallback' => [\core_user::class, 'is_current_user'],
        ];
    }
    return $definitions;
}

/**
 * Adds an "Accessibility" section to the user's own profile page, with the current choices and a link to change them.
 *
 * Moodle calls this whenever the plugin is installed; it only adds the section while the page uses this theme.
 *
 * @param \core_user\output\myprofile\tree $tree The profile tree.
 * @param stdClass $user The user whose profile is shown.
 * @param bool $iscurrentuser Whether it is the logged in user's own profile.
 * @param stdClass|null $course The course the profile is shown in, if any.
 */
function theme_accessible_myprofile_navigation(\core_user\output\myprofile\tree $tree, $user, $iscurrentuser, $course) {
    global $PAGE;
    // The options belong to the theme: shown only while the page is rendered with it.
    if (!$iscurrentuser || isguestuser() || $PAGE->theme->name !== 'accessible') {
        return;
    }
    $url = \theme_accessible\preferences::options_url();
    $tree->add_category(new \core_user\output\myprofile\category(
        'theme_accessible',
        get_string('accessibilityoptions', 'theme_accessible'),
        'contact',
    ));

    $summary = [];
    foreach (['font', 'fontsize', 'spacing'] as $key) {
        $summary[] = get_string($key, 'theme_accessible') . ': ' .
            \theme_accessible\preferences::label($key, \theme_accessible\preferences::get($key));
    }
    $content = \html_writer::alist($summary) .
        \html_writer::link($url, get_string('changeaccessibilityoptions', 'theme_accessible'));
    $tree->add_node(new \core_user\output\myprofile\node(
        'theme_accessible',
        'accessibilitysummary',
        get_string('currentchoices', 'theme_accessible'),
        null,
        null,
        $content,
    ));
}

/**
 * Adds a link to the accessibility options in the Preferences page, under "User account".
 *
 * @param navigation_node $navigation The "User account" node of the preferences page.
 * @param stdClass $user The user whose preferences are shown.
 * @param context_user $usercontext Context of that user.
 * @param stdClass $course The course, if any.
 * @param context_course $coursecontext Context of that course.
 */
function theme_accessible_extend_navigation_user_settings(
    navigation_node $navigation,
    $user,
    $usercontext,
    $course,
    $coursecontext,
) {
    global $USER, $PAGE;
    if ($user->id != $USER->id || isguestuser() || $PAGE->theme->name !== 'accessible') {
        return;
    }
    $navigation->add(
        get_string('accessibilityoptions', 'theme_accessible'),
        \theme_accessible\preferences::options_url(),
        navigation_node::TYPE_SETTING,
        null,
        'theme_accessible_preferences',
    );
}

/**
 * Adds the theme's checks to the administrators' status report (Site administration > Reports > Status).
 *
 * @return \core\check\check[]
 */
function theme_accessible_status_checks(): array {
    return [new \theme_accessible\check\userthemes()];
}
