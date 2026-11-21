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

namespace theme_accessible\privacy;

use core_privacy\local\metadata\collection;
use core_privacy\local\request\writer;
use theme_accessible\preferences;

/**
 * Privacy tests for theme_accessible.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
#[\PHPUnit\Framework\Attributes\CoversClass(\theme_accessible\privacy\provider::class)]
final class provider_test extends \core_privacy\tests\provider_testcase {
    public function test_get_metadata_declares_every_preference(): void {
        $items = provider::get_metadata(new collection('theme_accessible'))->get_collection();
        $names = array_map(fn($item) => $item->get_name(), $items);
        $expected = array_map(fn($key) => preferences::name($key), array_keys(preferences::OPTIONS));
        $this->assertEqualsCanonicalizing($expected, $names);
    }

    public function test_every_preference_description_exists(): void {
        foreach (array_keys(preferences::OPTIONS) as $key) {
            $this->assertTrue(
                get_string_manager()->string_exists('privacy:metadata:preference:' . $key, 'theme_accessible'),
                "Missing privacy string for $key"
            );
        }
    }

    public function test_export_user_preferences(): void {
        $this->resetAfterTest();
        $user = $this->getDataGenerator()->create_user();
        set_user_preference(preferences::name('font'), 'atkinson', $user);
        set_user_preference(preferences::name('contrast'), 'high', $user);

        provider::export_user_preferences($user->id);

        $writer = writer::with_context(\context_user::instance($user->id));
        $this->assertTrue($writer->has_any_data());
        $exported = $writer->get_user_preferences('theme_accessible');
        $this->assertSame('atkinson', $exported->theme_accessible_font->value);
        $this->assertSame('high', $exported->theme_accessible_contrast->value);
        $this->assertFalse(isset($exported->theme_accessible_fontsize));
    }

    public function test_export_without_preferences_exports_nothing(): void {
        $this->resetAfterTest();
        $user = $this->getDataGenerator()->create_user();

        provider::export_user_preferences($user->id);

        $this->assertFalse(writer::with_context(\context_user::instance($user->id))->has_any_data());
    }
}
