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
 * Privacy Subsystem implementation for theme_accessible.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_accessible\privacy;

use core_privacy\local\metadata\collection;
use theme_accessible\preferences;

/**
 * The theme stores the user's accessibility choices as user preferences.
 */
class provider implements
    \core_privacy\local\metadata\provider,
    \core_privacy\local\request\user_preference_provider {
    /**
     * Describes the user preferences the theme stores.
     *
     * @param collection $collection The collection to add the metadata to.
     * @return collection
     */
    public static function get_metadata(collection $collection): collection {
        foreach (array_keys(preferences::OPTIONS) as $key) {
            $collection->add_user_preference(preferences::name($key), 'privacy:metadata:preference:' . $key);
        }
        return $collection;
    }

    /**
     * Exports the user's accessibility choices.
     *
     * @param int $userid The user to export for.
     */
    public static function export_user_preferences(int $userid) {
        foreach (array_keys(preferences::OPTIONS) as $key) {
            $value = get_user_preferences(preferences::name($key), null, $userid);
            if ($value !== null) {
                \core_privacy\local\request\writer::export_user_preference(
                    'theme_accessible',
                    preferences::name($key),
                    $value,
                    get_string('privacy:metadata:preference:' . $key, 'theme_accessible'),
                );
            }
        }
    }
}
