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
 * The guide of the theme (docs/<language>/accessible-theme-guide.md), found by language and rendered as HTML.
 *
 * The file is chosen from a fixed list of language codes, never from a path in the request, and it is shipped with
 * the theme, so it is rendered without further cleaning.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class guide {
    /** @var string Language of the original guide, used when there is none in the user's language. */
    public const DEFAULT_LANGUAGE = 'en';

    /** @var string[] Languages of the theme: each one may have docs/<code>/accessible-theme-guide.md. */
    public const LANGUAGES = ['en', 'ca', 'de', 'es', 'fr', 'it', 'pt_br'];

    /** @var string File name of the guide in every language folder. */
    public const FILE = 'accessible-theme-guide.md';

    /**
     * Language of the guide to show: the user's language (or its parent, as for es_mx) when the theme has a guide in
     * it, English otherwise.
     *
     * @param string|null $lang Moodle language code; the current language when null.
     * @return string One of self::LANGUAGES.
     */
    public static function language(?string $lang = null): string {
        $lang = clean_param($lang ?? current_language(), PARAM_LANG);
        $candidates = [$lang];
        $parent = $lang === '' ? '' : get_parent_language($lang);
        if ($parent !== '') {
            $candidates[] = $parent;
        }
        foreach ($candidates as $candidate) {
            if (in_array($candidate, self::LANGUAGES, true) && file_exists(self::path($candidate))) {
                return $candidate;
            }
        }
        return self::DEFAULT_LANGUAGE;
    }

    /**
     * Path of the guide in a language of the list.
     *
     * @param string $language One of self::LANGUAGES.
     * @return string
     */
    public static function path(string $language): string {
        if (!in_array($language, self::LANGUAGES, true)) {
            $language = self::DEFAULT_LANGUAGE;
        }
        return __DIR__ . '/../docs/' . $language . '/' . self::FILE;
    }

    /**
     * Name of the file offered for download, with the language code, as in accessible-theme-guide.es.md.
     *
     * @param string $language One of self::LANGUAGES.
     * @return string
     */
    public static function download_name(string $language): string {
        return 'accessible-theme-guide.' . $language . '.md';
    }

    /**
     * The guide as HTML, without its first level heading: headings get the ids the guide's own links expect, and
     * tables use Moodle's table look.
     *
     * @param string $language One of self::LANGUAGES.
     * @return string
     */
    public static function html(string $language): string {
        $path = self::path($language);
        if (!is_readable($path)) {
            throw new \moodle_exception('guidemissing', 'theme_accessible');
        }
        $html = markdown_to_html(file_get_contents($path));

        $doc = new \DOMDocument();
        $internal = libxml_use_internal_errors(true);
        $doc->loadHTML('<?xml encoding="UTF-8"><body>' . $html . '</body>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        libxml_use_internal_errors($internal);

        $used = [];
        $xpath = new \DOMXPath($doc);
        foreach ($xpath->query('//h2|//h3|//h4|//h5|//h6') as $heading) {
            $base = self::slug($heading->textContent);
            $id = $base;
            for ($n = 1; isset($used[$id]); $n++) {
                $id = $base . '-' . $n;
            }
            $used[$id] = true;
            $heading->setAttribute('id', $id);
        }
        foreach ($xpath->query('//h1') as $title) {
            // The page prints the title as its own heading (see title()), so the guide's first level heading goes.
            $title->parentNode->removeChild($title);
        }
        foreach ($xpath->query('//table') as $table) {
            $table->setAttribute('class', 'table generaltable');
        }

        $body = $doc->getElementsByTagName('body')->item(0);
        $out = '';
        foreach ($body->childNodes as $node) {
            $out .= $doc->saveHTML($node);
        }
        return $out;
    }

    /**
     * Text of the first level heading of the guide, used as the title of the page.
     *
     * @param string $language One of self::LANGUAGES.
     * @return string
     */
    public static function title(string $language): string {
        foreach (file(self::path($language), FILE_IGNORE_NEW_LINES) as $line) {
            if (str_starts_with($line, '# ')) {
                return trim(substr($line, 2));
            }
        }
        return get_string('guidetitle', 'theme_accessible');
    }

    /**
     * Anchor of a heading, built like GitHub does (the guide's links were written for it): lower case, punctuation
     * removed, spaces turned into hyphens.
     *
     * @param string $text Text of the heading.
     * @return string
     */
    public static function slug(string $text): string {
        $text = \core_text::strtolower(trim($text));
        $text = preg_replace('/[^\p{L}\p{N}\s_-]/u', '', $text);
        return preg_replace('/\s/u', '-', $text);
    }
}
