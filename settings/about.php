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
 * Information tab of the theme settings: colour vision test, fonts and licences.
 *
 * Included by settings.php, so $settings and $OUTPUT are in scope.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $OUTPUT;

$page = new admin_settingpage('theme_accessible_information', get_string('informationsettings', 'theme_accessible'));
$page->add(new admin_setting_heading(
    'theme_accessible/information',
    '',
    $OUTPUT->render_from_template('theme_accessible/about', \theme_accessible\about::export_context())
));
$settings->add($page);
