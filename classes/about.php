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
 * Data for the Information tab of the theme settings.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_accessible;

use core\output\notification;

/**
 * Builds the context of templates/about.mustache: colour vision test, font specimens and licence texts.
 *
 * To list another licence, add an entry to {@see self::licences()}.
 */
class about {
    /** @var string[] Colours of the test image: name key => hex. Fixed on purpose: they must not follow the theme palette. */
    private const COLORS = [
        'red' => '#C8281E',
        'orange' => '#E07B00',
        'olive' => '#7A8B1E',
        'green' => '#3F8F2F',
        'cyan' => '#17A2B8',
        'blue' => '#2B50AA',
        'purple' => '#7B3FA0',
        'pink' => '#E58CA8',
        'brown' => '#7A4A1E',
        'grey' => '#9A9A9A',
    ];

    /** @var string[][] Pairs of colours that are easy to confuse. */
    private const PAIRS = [['red', 'green'], ['orange', 'olive'], ['blue', 'purple'], ['pink', 'grey'], ['brown', 'green']];

    /** @var string Issues page of the theme repository (an empty value would leave the button disabled). */
    public const ISSUES_URL = 'https://github.com/f-acedo/moodle-theme_accessible/issues';

    /** @var string[] Spectrum bar, left to right. */
    private const SPECTRUM = ['#FF0000', '#FF8000', '#FFE600', '#40C000', '#00B8B8', '#0040FF', '#8000FF'];

    /** @var string[][] Font option => [file part of fonts/LICENSE-<part>.txt, copyright holder]. */
    private const FONTS = [
        'lexenddeca' => ['lexend-deca', 'Copyright 2019 The Lexend Project Authors'],
        'atkinson' => ['atkinson-hyperlegible', 'Copyright 2020 Braille Institute of America, Inc.'],
        'opendyslexic' => ['opendyslexic', 'Copyright (c) 2019-07-29, Abbie Gonzalez'],
    ];

    /**
     * Context for the template.
     *
     * @return array
     */
    public static function export_context(): array {
        global $CFG, $OUTPUT;
        $plugin = \core_plugin_manager::instance()->get_plugin_info('theme_accessible');

        $swatches = [];
        $legend = [];
        $i = 0;
        foreach (self::COLORS as $key => $hex) {
            $swatches[] = ['x' => $i * 60, 'hex' => $hex];
            $legend[] = ['name' => get_string('colorname_' . $key, 'theme_accessible'), 'hex' => $hex];
            $i++;
        }
        $pairs = [];
        $pairlegend = [];
        foreach (self::PAIRS as $i => [$first, $second]) {
            $pairs[] = [
                'x1' => $i * 120, 'hex1' => self::COLORS[$first],
                'x2' => $i * 120 + 60, 'hex2' => self::COLORS[$second],
            ];
            $pairlegend[] = get_string('colortestpair', 'theme_accessible', [
                'first' => get_string('colorname_' . $first, 'theme_accessible'),
                'second' => get_string('colorname_' . $second, 'theme_accessible'),
            ]);
        }
        $stops = [];
        foreach (self::SPECTRUM as $i => $hex) {
            $stops[] = ['offset' => round($i * 100 / (count(self::SPECTRUM) - 1)), 'hex' => $hex];
        }

        $previews = [['label' => get_string('colortestoriginal', 'theme_accessible'), 'filter' => '']];
        $previews[] = ['label' => preferences::label('colortype', 'mono'), 'filter' => 'accessible-colortype-mono'];
        foreach (['protan', 'deutan', 'tritan'] as $type) {
            foreach (['mild', 'medium', 'strong'] as $strength) {
                $previews[] = [
                    'label' => preferences::label('colortype', $type) . ' - ' . preferences::label('colorstrength', $strength),
                    'filter' => "accessible-colortype-$type-$strength",
                ];
            }
        }
        foreach ($previews as &$preview) {
            $preview['alt'] = get_string('colortestimagealt', 'theme_accessible', $preview['label']);
        }
        unset($preview);

        // Samples of the four alert types, through the theme's notification templates (type word, pattern and icon).
        // Not announced: they are examples, so screen readers must not read them out as alerts when the tab opens.
        $alerts = [];
        $types = [
            notification::NOTIFY_SUCCESS,
            notification::NOTIFY_INFO,
            notification::NOTIFY_WARNING,
            notification::NOTIFY_ERROR,
        ];
        foreach ($types as $type) {
            $alert = new notification(get_string('alertsample', 'theme_accessible'), $type, false);
            $alert->set_announce(false);
            $alerts[] = $OUTPUT->render($alert);
        }

        $fonts = [];
        foreach (array_keys(self::FONTS) as $key) {
            $fonts[] = ['key' => $key, 'name' => preferences::label('font', $key)];
        }

        return [
            'versiontext' => get_string('infoversion', 'theme_accessible', [
                'release' => $plugin->release ?? '',
                'version' => $plugin->versiondisk ?? '',
            ]),
            'guideurl' => (new \moodle_url('/theme/accessible/guide.php'))->out(false),
            'preferencesurl' => preferences::options_url(
                new \moodle_url('/admin/settings.php', ['section' => 'themesettingaccessible'])
            )->out(false),
            'defaultsurl' => (new \moodle_url(
                '/admin/settings.php',
                ['section' => 'themesettingaccessible'],
                'theme_accessible_userdefaults'
            ))->out(false),
            'colorfilteractive' => preferences::get('colortype') !== 'none',
            'swatches' => $swatches,
            'pairs' => $pairs,
            'stops' => $stops,
            'legend' => $legend,
            'pairlegend' => $pairlegend,
            'previews' => $previews,
            'alerts' => $alerts,
            'fonts' => $fonts,
            'licences' => self::licences(),
            'supportinfo' => self::support_info(),
            'issuesurl' => self::ISSUES_URL,
            // Shown by javascript/accessible.js under the copy button.
            'copiedalert' => $OUTPUT->notification(get_string('supportcopied', 'theme_accessible'), 'info', false),
            'failedalert' => $OUTPUT->notification(get_string('supportcopyfailed', 'theme_accessible'), 'error', false),
        ];
    }

    /**
     * Environment details for a support request, as plain English text (it is pasted into an issue, so it is not
     * translated). It has no site address, paths or personal data; the browser details are added by accessible.js.
     *
     * @return string
     */
    public static function support_info(): string {
        global $CFG, $DB;
        $plugin = \core_plugin_manager::instance()->get_plugin_info('theme_accessible');
        $lines = [
            'Accessible version: ' . ($plugin->release ?? '') . ' (' . ($plugin->versiondisk ?? '') . ')',
            'Moodle: ' . $CFG->release . ' (' . $CFG->version . ')',
            'PHP: ' . PHP_VERSION,
            'Database: ' . $DB->get_dbfamily() . ' ' . ($DB->get_server_info()['description'] ?? ''),
            // Read-only server name for the support text (no Moodle API for it); the template escapes it.
            'Web server: ' . ($_SERVER['SERVER_SOFTWARE'] ?? 'unknown'),
            'Theme in use: ' . $CFG->theme,
            'Allow user themes: ' . (empty($CFG->allowuserthemes) ? 'no' : 'yes'),
            'Site language: ' . $CFG->lang,
            'Language in use: ' . current_language(),
        ];
        $labels = ['font' => 'Font', 'fontsize' => 'Text size', 'spacing' => 'Spacing', 'contrast' => 'Contrast',
            'motion' => 'Motion', 'focus' => 'Focus', 'colortype' => 'Colour vision', 'colorstrength' => 'Colour strength'];
        foreach (array_keys(preferences::OPTIONS) as $key) {
            $lines[] = $labels[$key] . ': ' . preferences::get($key);
        }
        return implode("\n", $lines);
    }

    /**
     * Licences of what the theme includes, the theme's own first. Each one links to its official text and to the copy
     * shipped with the theme, which is what the licences ask for.
     *
     * @return array
     */
    private static function licences(): array {
        $gpl = [
            'subject' => get_string('configtitle', 'theme_accessible'),
            'copyright' => '',
            'copyurl' => self::url('LICENSE.txt'),
            'copyfile' => 'LICENSE.txt',
        ];
        $fonts = [];
        foreach (self::FONTS as $key => [$file, $copyright]) {
            $fonts[] = [
                'subject' => preferences::label('font', $key),
                'copyright' => $copyright,
                'copyurl' => self::url("fonts/LICENSE-$file.txt"),
                'copyfile' => "LICENSE-$file.txt",
            ];
        }
        return [
            [
                'name' => get_string('licencegpl', 'theme_accessible'),
                'appliesto' => get_string('licencegplapplies', 'theme_accessible'),
                'officialurl' => 'https://www.gnu.org/licenses/gpl-3.0.html',
                'officialhost' => 'gnu.org',
                'items' => [$gpl],
            ],
            [
                'name' => get_string('licenceofl', 'theme_accessible'),
                'appliesto' => get_string('licenceoflapplies', 'theme_accessible'),
                'officialurl' => 'https://openfontlicense.org/open-font-license-official-text/',
                'officialhost' => 'openfontlicense.org',
                'items' => $fonts,
            ],
        ];
    }

    /**
     * Web address of a file of the theme.
     *
     * @param string $path Path inside the theme.
     * @return string
     */
    private static function url(string $path): string {
        return (new \moodle_url('/theme/accessible/' . $path))->out(false);
    }
}
