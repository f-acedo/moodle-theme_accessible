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

/**
 * Tests for the guide shown from the Information tab.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
#[\PHPUnit\Framework\Attributes\CoversClass(\theme_accessible\guide::class)]
final class guide_test extends \advanced_testcase {
    public function test_the_english_guide_exists(): void {
        $this->assertFileExists(guide::path('en'));
    }

    public function test_every_language_resolves_to_a_guide_that_exists(): void {
        foreach (guide::LANGUAGES as $lang) {
            $this->assertFileExists(guide::path(guide::language($lang)));
        }
    }

    public function test_a_language_without_guide_falls_back_to_english(): void {
        $this->assertSame('en', guide::language('xx'));
        $this->assertSame('en', guide::language(''));
    }

    public function test_a_path_in_the_language_is_never_followed(): void {
        $this->assertSame('en', guide::language('../../config'));
        $this->assertSame(guide::path('en'), guide::path('../../config'));
    }

    public function test_download_name_carries_the_language(): void {
        $this->assertSame('accessible-theme-guide.pt_br.md', guide::download_name('pt_br'));
    }

    public function test_slug_matches_the_anchors_of_the_guide(): void {
        $this->assertSame('9-colour-vision-filters', guide::slug('9. Colour vision filters'));
        $this->assertSame('appendix-a-technical-reference', guide::slug('Appendix A. Technical reference'));
    }

    public function test_html_gives_headings_the_ids_the_contents_link_to(): void {
        foreach (guide::LANGUAGES as $lang) {
            if (!file_exists(guide::path($lang))) {
                continue;
            }
            $html = guide::html($lang);
            $this->assertStringNotContainsString('<h1', $html, $lang);
            preg_match_all('/\]\(#([^)]+)\)/', file_get_contents(guide::path($lang)), $links);
            $this->assertNotEmpty($links[1], $lang);
            foreach (array_unique($links[1]) as $anchor) {
                $this->assertStringContainsString('id="' . $anchor . '"', $html, "No heading for #$anchor in $lang");
            }
        }
    }

    public function test_html_uses_the_moodle_table_look(): void {
        $this->assertStringContainsString('<table class="table generaltable">', guide::html('en'));
    }

    public function test_title_is_the_first_level_heading(): void {
        $this->assertStringContainsString('Accessible', guide::title('en'));
    }

    public function test_information_tab_links_to_the_guide(): void {
        $this->resetAfterTest();
        $this->assertStringEndsWith('/theme/accessible/guide.php', about::export_context()['guideurl']);
    }
}
