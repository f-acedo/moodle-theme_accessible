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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Admin settings for the Accessible theme.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {
    // Boost provides a nice settings page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingaccessible', get_string('configtitle', 'theme_accessible'));

    /*
     * ----------------------
     * General settings tab
     * ----------------------
     */
    $page = new admin_settingpage('theme_accessible_general', get_string('generalsettings', 'theme_accessible'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode(
        'theme_accessible/scsspre',
        get_string('rawscsspre', 'theme_accessible'),
        get_string('rawscsspre_desc', 'theme_accessible'),
        '',
        PARAM_RAW
    );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode(
        'theme_accessible/scss',
        get_string('rawscss', 'theme_accessible'),
        get_string('rawscss_desc', 'theme_accessible'),
        '',
        PARAM_RAW
    );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

    /*
     * ----------------------
     * User defaults tab
     * ----------------------
     */
    $page = new admin_settingpage('theme_accessible_userdefaults', get_string('userdefaults', 'theme_accessible'));
    $page->add(new admin_setting_heading(
        'theme_accessible/userdefaultsintro',
        '',
        get_string('userdefaults_desc', 'theme_accessible')
    ));
    foreach (\theme_accessible\preferences::SITE_DEFAULTS as $key) {
        $choices = [];
        foreach (\theme_accessible\preferences::OPTIONS[$key] as $value) {
            $choices[$value] = \theme_accessible\preferences::label($key, $value);
        }
        $page->add(new admin_setting_configselect(
            'theme_accessible/default_' . $key,
            get_string($key, 'theme_accessible'),
            '',
            \theme_accessible\preferences::OPTIONS[$key][0],
            $choices
        ));
    }
    $settings->add($page);

    /*
     * ----------------------
     * Advanced settings tab
     * ----------------------
     */
    $page = new admin_settingpage('theme_accessible_advanced', get_string('advancedsettings', 'theme_accessible'));

    // Raw initial SCSS setting.
    $setting = new admin_setting_scsscode(
        'theme_accessible/scssimport',
        get_string('rawimportsass', 'theme_accessible'),
        get_string('rawimportsass_desc', 'theme_accessible'),
        '',
        PARAM_RAW
    );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

    // Information tab: colour vision test, fonts and licences.
    require(__DIR__ . '/settings/about.php');
}
