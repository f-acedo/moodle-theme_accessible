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
 * Accessible theme configuration.
 *
 * Page layouts are inherited from Boost. layout/drawers.php and layout/login.php of this theme take precedence
 * over Boost's files of the same name, so only the layouts whose options differ from Boost are listed here.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'accessible';
$THEME->sheets = [];
$THEME->editor_scss = ['editor'];
$THEME->parents = ['boost'];

$THEME->scss = function ($theme) {
    return theme_accessible_get_main_scss_content($theme);
};

// Pre and extra SCSS, including the custom SCSS saved in the theme settings.
$THEME->prescsscallback = 'theme_accessible_get_pre_scss';
$THEME->extrascsscallback = 'theme_accessible_get_extra_scss';

$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;
$THEME->haseditswitch = true;
$THEME->usescourseindex = true;

// Load plain JavaScript file.
$THEME->javascripts = ['accessible'];

// Layouts that differ from Boost: the breadcrumb (navbar) is kept visible, and blocks are allowed on 'base'.
$THEME->layouts = [
    'base' => [
        'file' => 'drawers.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ],
    'frontpage' => [
        'file' => 'drawers.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
        'options' => ['nonavbar' => false],
    ],
    'mydashboard' => [
        'file' => 'drawers.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
        'options' => ['nonavbar' => false, 'langmenu' => true],
    ],
    'mycourses' => [
        'file' => 'drawers.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
        'options' => ['nonavbar' => false, 'langmenu' => true],
    ],
    'login' => [
        'file' => 'login.php',
        'regions' => [],
        'options' => ['langmenu' => true, 'nonavbar' => true, 'nofooter' => false, 'nocustommenu' => true],
    ],
];
