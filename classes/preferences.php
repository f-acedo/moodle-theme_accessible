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
 * Accessibility preferences of the user: the allowed values, their defaults and the body classes they produce.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_accessible;

/**
 * Single source of truth for the per-user accessibility preferences.
 *
 * Values are stored as Moodle user preferences named theme_accessible_<key>. The first value of each list is the
 * default. The user's theme choice is not here: it lives in Moodle's own user.theme field.
 */
class preferences {
    /** @var string[][] Allowed values per preference; the first one is the default. */
    public const OPTIONS = [
        'font' => ['lexenddeca', 'atkinson', 'opendyslexic'],
        'fontsize' => ['100', '125', '150', '200'],
        'spacing' => ['normal', 'wide', 'extrawide'],
        // Contrast: the normal black on white, or high contrast (white on black with yellow and cyan accents).
        'contrast' => ['normal', 'high'],
        'motion' => ['normal', 'reduced'],
        'focus' => ['normal', 'thick'],
        // Colour vision: weak or missing red (protan), green (deutan) or blue (tritan) cones, or no colour at all (mono).
        // The strength goes from the "-anomaly" types (mild) to the "-anopia" ones (strong); mono ignores it.
        'colortype' => ['none', 'protan', 'deutan', 'tritan', 'mono'],
        'colorstrength' => ['medium', 'mild', 'strong'],
    ];

    /** @var string[] Preferences that the site administrator can give a default value (not the personal colour vision). */
    public const SITE_DEFAULTS = ['font', 'fontsize', 'spacing', 'contrast', 'motion', 'focus'];

    /** @var string[] Preferences that change the page. */
    public const APPLIED = ['font', 'fontsize', 'spacing', 'contrast', 'motion', 'focus', 'colortype'];

    /**
     * Name of the Moodle user preference that holds a setting.
     *
     * @param string $key Key of {@see self::OPTIONS}.
     * @return string
     */
    public static function name(string $key): string {
        return 'theme_accessible_' . $key;
    }

    /**
     * Whether the choices are kept in the user's account (logged in) or only in a cookie (visitors and guests).
     *
     * @return bool
     */
    private static function uses_account(): bool {
        return isloggedin() && !isguestuser();
    }

    /**
     * Name of the cookie that keeps the choices of visitors; the Moodle session cookie suffix keeps sites apart.
     *
     * @return string
     */
    private static function cookie_name(): string {
        global $CFG;
        return 'MoodleAccessible' . ($CFG->sessioncookie ?? '');
    }

    /**
     * Choices kept in the cookie, each one checked against the allowed values (the cookie comes from the browser).
     *
     * @return string[] Value per key; keys with no valid value are left out.
     */
    private static function cookie_values(): array {
        // Moodle has no API to read a cookie: the raw value is only JSON-decoded, then whitelisted against OPTIONS below.
        $decoded = json_decode($_COOKIE[self::cookie_name()] ?? '', true);
        $values = [];
        foreach (is_array($decoded) ? $decoded : [] as $key => $value) {
            if (isset(self::OPTIONS[$key]) && in_array($value, self::OPTIONS[$key], true)) {
                $values[$key] = $value;
            }
        }
        return $values;
    }

    /**
     * Value the user chose for a setting, or an empty string when they have not chosen one (the theme default applies).
     *
     * @param string $key Key of {@see self::OPTIONS}.
     * @return string
     */
    public static function stored(string $key): string {
        if (!self::uses_account()) {
            return self::cookie_values()[$key] ?? '';
        }
        $value = get_user_preferences(self::name($key), '');
        return in_array($value, self::OPTIONS[$key], true) ? $value : '';
    }

    /**
     * Saves the choices: in the account of a logged in user, and always in the cookie, which lets the login page show
     * them before anyone logs in (until the user logs out: see forget_visitor_choices()).
     *
     * @param string[] $values Value per key of {@see self::OPTIONS}; an empty string means "theme default".
     */
    public static function save(array $values): void {
        $values = array_filter($values, fn($value, $key) => isset(self::OPTIONS[$key]) &&
            in_array($value, self::OPTIONS[$key], true), ARRAY_FILTER_USE_BOTH);
        if (self::uses_account()) {
            foreach (array_keys(self::OPTIONS) as $key) {
                if (isset($values[$key])) {
                    set_user_preference(self::name($key), $values[$key]);
                } else {
                    unset_user_preference(self::name($key));
                }
            }
        } else {
            self::mark_choices_this_visit((bool) $values);
        }
        self::set_cookie($values ? json_encode($values) : '');
    }

    /**
     * Notes in the session that the visitor chose options in this visit (or cleared them), so only those are copied
     * into the account at login, never a cookie left days ago by someone else on a shared computer.
     *
     * @param bool $chosen Whether there are choices to keep.
     */
    private static function mark_choices_this_visit(bool $chosen): void {
        global $SESSION;
        if ($chosen) {
            $SESSION->theme_accessible_choicesthisvisit = true;
        } else {
            unset($SESSION->theme_accessible_choicesthisvisit);
        }
    }

    /**
     * Removes the visitor cookie at logout, so the next person on a shared computer does not see (or get at their own
     * login) the options of the previous one, which may tell about their sight.
     */
    public static function forget_visitor_choices(): void {
        self::set_cookie('');
    }

    /**
     * Writes the visitor cookie, or deletes it when the value is empty.
     *
     * @param string $json Choices as JSON, or an empty string.
     */
    private static function set_cookie(string $json): void {
        global $CFG;
        if ($json === '') {
            // Also drop it from this request, so cookie_values() no longer sees the deleted cookie.
            unset($_COOKIE[self::cookie_name()]);
        }
        setcookie(self::cookie_name(), $json, [
            'expires' => $json === '' ? time() - DAYSECS : time() + YEARSECS,
            'path' => $CFG->sessioncookiepath,
            'domain' => $CFG->sessioncookiedomain,
            'secure' => is_moodle_cookie_secure(),
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
    }

    /**
     * Copies the choices kept in the visitor cookie into a user's account, when the account has none of its own yet.
     *
     * Called at login, when the account preferences still hold nothing for this theme. Only choices made in this visit
     * (before logging in) are copied: a cookie left by an earlier visitor of a shared computer is not. Restoring the
     * defaults also clears the cookie, so it is not copied back.
     *
     * @param int $userid The user who logged in.
     * @return bool Whether any choice was copied.
     */
    public static function import_visitor_choices(int $userid): bool {
        global $SESSION;
        $thisvisit = !empty($SESSION->theme_accessible_choicesthisvisit);
        unset($SESSION->theme_accessible_choicesthisvisit);
        $values = self::cookie_values();
        if (!$thisvisit || !$values) {
            return false;
        }
        foreach (array_keys(self::OPTIONS) as $key) {
            if (get_user_preferences(self::name($key), null, $userid) !== null) {
                return false;
            }
        }
        foreach ($values as $key => $value) {
            set_user_preference(self::name($key), $value, $userid);
        }
        return true;
    }

    /**
     * Value used when the user has not chosen one: the site default if the administrator set one, else the first value.
     *
     * @param string $key Key of {@see self::OPTIONS}.
     * @return string
     */
    public static function site_default(string $key): string {
        if (in_array($key, self::SITE_DEFAULTS, true)) {
            $value = get_config('theme_accessible', 'default_' . $key);
            if (in_array($value, self::OPTIONS[$key], true)) {
                return $value;
            }
        }
        return self::OPTIONS[$key][0];
    }

    /**
     * Value in force for the current user: their own choice, else the theme default.
     *
     * @param string $key Key of {@see self::OPTIONS}.
     * @return string
     */
    public static function get(string $key): string {
        return self::stored($key) ?: self::site_default($key);
    }

    /**
     * Body classes for the settings that differ from the stylesheet's base (the first value), e.g. accessible-font-opendyslexic.
     *
     * @return string[]
     */
    public static function body_classes(): array {
        $classes = [];
        foreach (self::APPLIED as $key) {
            if (self::get($key) !== self::OPTIONS[$key][0]) {
                $classes[] = 'accessible-' . $key . '-' . self::get($key);
            }
        }
        // The colour filter is chosen by type and strength together (see the colorfilters template).
        if (!in_array(self::get('colortype'), ['none', 'mono'], true)) {
            $classes[] = 'accessible-colorstrength-' . self::get('colorstrength');
        }
        return $classes;
    }

    /**
     * Attribute that switches Bootstrap's own components (cards, dropdowns, modals, forms...) to its dark colour mode
     * while high contrast is on; the theme CSS then only overrides the palette. Empty otherwise.
     *
     * @return string Attribute for the body tag, with a leading space.
     */
    public static function body_theme_attribute(): string {
        return self::get('contrast') === 'high' ? ' data-bs-theme="dark"' : '';
    }

    /**
     * Human readable label of a value, from the lang strings option_<key>_<value>.
     *
     * @param string $key Key of {@see self::OPTIONS}.
     * @param string $value One of the allowed values.
     * @return string
     */
    public static function label(string $key, string $value): string {
        return get_string('option_' . $key . '_' . $value, 'theme_accessible');
    }

    /**
     * Address of the options page with the page the user came from, so the page can take them back there.
     *
     * @param \moodle_url|null $from The page the link is shown in (the current page when null and it is set).
     * @return \moodle_url
     */
    public static function options_url(?\moodle_url $from = null): \moodle_url {
        global $PAGE;
        $url = new \moodle_url('/theme/accessible/preferences.php');
        $from = $from ?? ($PAGE->has_set_url() ? $PAGE->url : null);
        if ($from) {
            $url->param('returnurl', $from->out(false));
        }
        return $url;
    }

    /**
     * Where the options page goes after "Save and return" or "Cancel": the page the user came from when it is a page
     * of this site (and not the options page itself), otherwise their preferences page, or the home page for visitors.
     *
     * @param string $returnurl The address passed to the options page.
     * @return \moodle_url
     */
    public static function return_destination(string $returnurl): \moodle_url {
        $returnurl = clean_param($returnurl, PARAM_LOCALURL);
        if ($returnurl !== '' && !str_contains($returnurl, '/theme/accessible/preferences.php')) {
            return new \moodle_url($returnurl);
        }
        return isloggedin() && !isguestuser() ? new \moodle_url('/user/preferences.php') : new \moodle_url('/');
    }
}
