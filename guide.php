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
 * The guide of the theme, shown on a page of its own (opened from the Information tab) or offered as a download.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use theme_accessible\guide;

// Only administrators reach the Information tab, so only they get the guide.
require_login();
$context = \context_system::instance();
require_capability('moodle/site:config', $context);

$language = guide::language();

if (optional_param('download', 0, PARAM_BOOL)) {
    send_file(guide::path($language), guide::download_name($language), 0, 0, false, true, 'text/markdown');
}

$url = new \moodle_url('/theme/accessible/guide.php');
$title = guide::title($language);
$PAGE->set_context($context);
$PAGE->set_url($url);
$PAGE->set_pagelayout('standard');
$PAGE->set_title($title);
$PAGE->set_heading($title);

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_accessible/guide', [
    // The guide is in English when the theme has none in the user's language yet: say so.
    'notranslation' => ($language !== current_language() && $language !== get_parent_language(current_language()))
        ? $OUTPUT->notification(get_string('guidenotranslation', 'theme_accessible'), 'info', false) : '',
    'downloadurl' => (new \moodle_url($url, ['download' => 1]))->out(false),
    'content' => guide::html($language),
]);
echo $OUTPUT->footer();
