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
 * Form for the user's accessibility options.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_accessible\form;

use theme_accessible\preferences;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');

/**
 * Accessibility options of the logged in user.
 */
class preferences_form extends \moodleform {
    /**
     * Form definition.
     */
    protected function definition() {
        global $CFG;
        $mform = $this->_form;

        $mform->addElement('header', 'reading', get_string('readingoptions', 'theme_accessible'));
        $mform->setExpanded('reading', true);
        $this->add_select('font');
        $this->add_select('fontsize');
        $this->add_select('spacing');

        $mform->addElement('header', 'display', get_string('displayoptions', 'theme_accessible'));
        $mform->setExpanded('display', true);
        // The theme is a setting of the account, so visitors do not get it.
        if (isloggedin() && !isguestuser()) {
            if (!empty($CFG->allowuserthemes)) {
                // Every theme the site offers to its users (the same list as the profile form), so a user can go back to
                // Boost, Classic or any other installed theme.
                $sitetheme = get_string('pluginname', 'theme_' . $CFG->theme);
                $choices = ['' => get_string('sitedefaulttheme', 'theme_accessible', $sitetheme)];
                foreach (array_keys(get_list_of_themes()) as $themename) {
                    $choices[$themename] = get_string('pluginname', 'theme_' . $themename);
                }
                $mform->addElement('select', 'theme', get_string('theme', 'theme_accessible'), $choices);
            } else {
                $mform->addElement(
                    'static',
                    'themedisabled',
                    get_string('theme', 'theme_accessible'),
                    get_string('userthemesdisabled', 'theme_accessible')
                );
            }
        }
        $this->add_select('contrast');
        $this->add_select('motion');
        $this->add_select('focus');

        $mform->addElement('header', 'vision', get_string('visionoptions', 'theme_accessible'));
        $mform->setExpanded('vision', true);
        $this->add_select('colortype');
        $mform->addHelpButton('colortype', 'colortype', 'theme_accessible');
        $this->add_select('colorstrength');
        $mform->hideIf('colorstrength', 'colortype', 'in', ['none', 'mono']);

        // The page the user came from, so "Save and return" and "Cancel" can take them back there.
        $mform->addElement('hidden', 'returnurl');
        $mform->setType('returnurl', PARAM_LOCALURL);

        $buttons = [
            $mform->createElement('submit', 'submitbutton', get_string('saveandreturn', 'theme_accessible')),
            $mform->createElement('submit', 'savestaybutton', get_string('saveandstay', 'theme_accessible')),
            $mform->createElement('cancel'),
            $mform->createElement('submit', 'resetbutton', get_string('restoredefaults', 'theme_accessible')),
        ];
        $mform->addGroup($buttons, 'buttonar', '', ' ', false);
        $mform->closeHeaderBefore('buttonar');
    }

    /**
     * Adds a select for one of the preferences, with its allowed values.
     *
     * @param string $key Key of {@see preferences::OPTIONS}.
     */
    private function add_select(string $key): void {
        $choices = [];
        if (in_array($key, preferences::SITE_DEFAULTS, true)) {
            $sitelabel = preferences::label($key, preferences::site_default($key));
            $choices[''] = get_string('themedefault', 'theme_accessible', $sitelabel);
        }
        foreach (preferences::OPTIONS[$key] as $value) {
            $choices[$value] = preferences::label($key, $value);
        }
        $this->_form->addElement('select', $key, get_string($key, 'theme_accessible'), $choices);
    }
}
