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
 * Accessible theme scripts (plain JS loaded through $THEME->javascripts, no AMD build).
 *
 * Small fixes the templates cannot do: hides an empty "More" menu, names navigation landmarks, publishes the navbar
 * height, "Back to top" button, password toggle state, accessibility options link and the Information tab support block.
 *
 * @package   theme_accessible
 * @copyright 2022-2023 Koditik Dev team
 * @copyright 2023-2026 Fernando Acedo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

(function() {
    'use strict';

    /**
     * Run a function once the document is parsed (theme scripts load in the head, so the markup does not exist before).
     *
     * @param {Function} fn
     */
    function ready(fn) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', fn);
        } else {
            fn();
        }
    }

    /**
     * Call fn at most once per animation frame, however many events ask for it.
     *
     * @param {Function} fn
     * @return {Function}
     */
    function perFrame(fn) {
        var queued = false;
        return function() {
            if (!queued) {
                queued = true;
                window.requestAnimationFrame(function() {
                    queued = false;
                    fn();
                });
            }
        };
    }

    // Hide the secondary navigation "More" button when its dropdown has no visible items.
    function hideEmptyMoreMenu() {
        var nav = document.querySelector('.secondary-navigation');
        if (!nav) {
            return;
        }
        var update = function() {
            nav.querySelectorAll('.nav-item.dropdown').forEach(function(navItem) {
                var hasItems = navItem.querySelector('.dropdown-menu a.dropdown-item:not(.d-none)') !== null;
                // Only hide, never show: Moodle's moremenu decides when the button appears.
                if (!hasItems && !navItem.classList.contains('d-none')) {
                    navItem.classList.add('d-none');
                }
            });
        };
        update();
        // Moodle's moremenu moves items in and out of the dropdown on load and on resize.
        new MutationObserver(update).observe(nav, {childList: true, subtree: true});
    }

    // Expose the state of the "Show password" toggle (core/togglesensitive) to screen readers.
    // Core only swaps the eye icon, so mirror the input type into aria-pressed.
    function syncPasswordToggles() {
        var sync = function(button) {
            var input = button.parentNode.querySelector('input');
            if (input) {
                button.setAttribute('aria-pressed', input.getAttribute('type') === 'text' ? 'true' : 'false');
            }
        };
        document.addEventListener('click', function(e) {
            var button = e.target.closest('.toggle-sensitive-btn');
            if (button) {
                // Core changes the input type in its own click handler; read it once that has run.
                setTimeout(function() {
                    sync(button);
                }, 0);
            }
        });
        // Core forces the field back to a password when the screen grows past the small breakpoint.
        window.addEventListener('resize', function() {
            setTimeout(function() {
                document.querySelectorAll('.toggle-sensitive-btn').forEach(sync);
            }, 0);
        });
    }

    // Publish the real height of the fixed top bar: it grows to two rows at larger text sizes, and the page content and
    // drawers are offset by it (see the navbar section of styles.scss).
    function publishNavbarHeight() {
        var navbar = document.querySelector('nav.navbar');
        if (!navbar || !window.ResizeObserver) {
            return;
        }
        new ResizeObserver(function() {
            document.documentElement.style.setProperty('--accessible-navbar-height', navbar.offsetHeight + 'px');
        }).observe(navbar);
    }

    // Short screens and large text: the fixed top bar took up to half of a phone or XGA screen. When it takes more than a
    // quarter of the window it slides away as soon as the page is scrolled, and comes back at the top of the page or while
    // the focus is inside it (navbar section of styles.scss).
    function autoHideNavbar() {
        var navbar = document.querySelector('nav.navbar.fixed-top');
        if (!navbar) {
            return;
        }
        var update = function() {
            var tall = navbar.offsetHeight > window.innerHeight / 4;
            var hide = tall && window.scrollY > 0 && !navbar.contains(document.activeElement);
            document.body.classList.toggle('accessible-navbar-hidden', hide);
        };
        window.addEventListener('scroll', update, {passive: true});
        window.addEventListener('resize', update);
        navbar.addEventListener('focusin', update);
        navbar.addEventListener('focusout', function() {
            setTimeout(update, 0);
        });
        update();
    }

    // Moodle's sticky Save/Cancel footer grows with its buttons at larger text sizes (page footer section of styles.scss).
    // When it would take more than a quarter of the window (large text on a short screen, where the top bar is tall too) it
    // stops being fixed and stays at the end of the form, so the page keeps room for its content. Its height is published
    // for the page footer, "Back to top" and the scroll padding (0 when it is not fixed).
    function fitStickyFooter() {
        var footer = document.querySelector('.stickyfooter');
        if (!footer || !window.ResizeObserver) {
            return;
        }
        var update = function() {
            var inflow = footer.offsetHeight > window.innerHeight / 4;
            document.body.classList.toggle('accessible-stickyfooter-static', inflow);
            document.documentElement.style.setProperty('--accessible-stickyfooter-height',
                (inflow ? 0 : footer.offsetHeight) + 'px');
        };
        new ResizeObserver(update).observe(footer);
        window.addEventListener('resize', update);
    }

    // Admin notifications page: the theme's own warning (about "Allow user themes") is queued as a session notification, so
    // it is printed above the page heading. Move it under the "Notifications" heading, with the other admin warnings.
    function moveAdminWarning() {
        var warning = document.querySelector('#page-admin-index #user-notifications .alert a[href*="query=allowuserthemes"]');
        var heading = document.querySelector('#page-admin-index #region-main h2');
        if (warning && heading) {
            heading.after(warning.closest('.alert'));
        }
    }

    // Course index: Boost puts the close button at the far end of the drawer header, about 220px from the open button, so the
    // pointer (or the magnified view) had to move to close the drawer. Moved first in the header, where styles.scss places it
    // exactly over the open button; first in the code too, so the keyboard order matches what is seen.
    function placeCourseIndexClose() {
        var header = document.querySelector('#theme_boost-drawers-courseindex .drawerheader');
        var close = header && header.querySelector('[data-action="closedrawer"]');
        if (close) {
            header.prepend(close);
            // Its tooltip (below, drawers.mustache) is placed while the drawer is still sliding in from off screen, so Bootstrap
            // flipped it to the right, over "Back to the course". Keep it below.
            close.setAttribute('data-bs-fallback-placements', '["bottom"]');
        }
    }

    // Notifications and messages panels: styles.scss anchors them to the whole user area of the bar (#usernavigation), so they
    // never leave the screen; but that area also holds the user menu and the edit switch, so the panel opened far to the right
    // of its icon. Put it under its own icon, right edges aligned as in Boost (left edges in RTL), moved only as far as needed to
    // stay inside the window. Not when the bar shows the burger: there the panel is fixed across the whole width.
    function placePopoverPanels() {
        var regions = [].slice.call(document.querySelectorAll('.navbar #usernavigation [data-region="popover-region"]'));
        if (!regions.length) {
            return;
        }
        var margin = 8;
        var place = function(region) {
            var panel = region.querySelector('.popover-region-container');
            var toggle = region.querySelector('[data-region="popover-region-toggle"]');
            if (!panel || !toggle) {
                return;
            }
            panel.style.removeProperty('left');
            panel.style.removeProperty('right');
            if (region.classList.contains('collapsed') || getComputedStyle(panel).position !== 'absolute') {
                return;
            }
            var area = panel.offsetParent;
            if (!area) {
                return;
            }
            var width = panel.offsetWidth;
            var max = document.documentElement.clientWidth - margin - width;
            var icon = toggle.getBoundingClientRect();
            // Right-to-left languages: the mirror image, left edges aligned.
            var wanted = document.documentElement.dir === 'rtl' ? icon.left : icon.right - width;
            var left = Math.max(margin, Math.min(wanted, max));
            panel.style.setProperty('left', (left - area.getBoundingClientRect().left) + 'px', 'important');
            panel.style.setProperty('right', 'auto', 'important');
        };
        var update = perFrame(function() {
            regions.forEach(place);
        });
        regions.forEach(function(region) {
            new MutationObserver(update).observe(region, {attributes: true, attributeFilter: ['class']});
        });
        window.addEventListener('resize', update);
        update();
    }

    // Link to the accessibility options next to the theme selector (profile form and the options page), shown while
    // "Accessible" is the selected theme. Taken from the navbar button, so the address and the text come from the server.
    function addOptionsLink() {
        var button = document.querySelector('.accessible-options-link');
        var select = document.querySelector('select#id_theme');
        if (!button || !select) {
            return;
        }
        var link = document.createElement('a');
        link.href = button.href;
        link.className = 'ms-3';
        link.textContent = button.textContent.trim();
        select.after(link);
        var toggle = function() {
            link.hidden = select.value !== 'accessible';
        };
        select.addEventListener('change', toggle);
        toggle();
    }

    // Redundant text alternatives (WAVE "redundant title text" / "redundant alternative text"): Moodle repeats the same words as
    // title, aria-label, hidden text or alt next to visible text on many controls (grade tables, course index, popovers).
    // A title equal to the element's own text, its aria-label or the alt of an image inside it is removed (the name stays);
    // an image whose alt repeats, as a whole word, the text of its link or of the next/previous link is made decorative (alt="").
    // Trade-off: the tooltip of those icon buttons goes; the accessible name is unchanged.
    function norm(text) {
        return (text || '').replace(/\s+/g, ' ').trim().toLowerCase();
    }

    function tidyRedundant(root) {
        var scope = root.querySelectorAll ? root : document;
        var items = [].slice.call(scope.querySelectorAll('[title], img[alt]'));
        if (root.matches && root.matches('[title], img[alt]')) {
            items.push(root);
        }
        // <noscript> blocks never show when scripts run (WAVE lists them as alerts); iframes get the name of their field or, for
        // an embedded activity (H5P), the page heading.
        var found = function(selector) {
            var list = [].slice.call(scope.querySelectorAll(selector));
            if (root.matches && root.matches(selector)) {
                list.push(root);
            }
            return list;
        };
        found('noscript').forEach(function(node) {
            node.remove();
        });
        found('iframe:not([title]):not([aria-label])').forEach(function(frame) {
            var label = frame.id && document.querySelector('label[for="' + frame.id.replace(/_ifr$/, '') + '"]');
            var heading = document.querySelector('h1');
            var name = label ? label.textContent.trim() : (heading ? heading.textContent.trim() : '');
            if (name) {
                frame.title = name;
            }
        });
        // A label that wraps its field is already associated; WAVE does not see that, so the explicit "for" is added
        // (rows per page of the grade table, "Show" selectors).
        var labels = [].slice.call(scope.querySelectorAll('label:not([for])'));
        if (root.matches && root.matches('label:not([for])')) {
            labels.push(root);
        }
        labels.forEach(function(label) {
            var field = label.querySelector('input[id], select[id], textarea[id]');
            if (field) {
                label.htmlFor = field.id;
            }
        });
        items.forEach(function(el) {
            var title = norm(el.getAttribute('title'));
            var control = el.closest('a, button, [role="button"]');
            var text = norm(el.textContent);
            var alts = [].map.call(el.querySelectorAll('img[alt]'), function(img) {
                return norm(img.alt);
            }).filter(Boolean);
            if (el.tagName === 'IMG') {
                alts.push(norm(el.alt));
            }
            if (title && (title === text || title === norm(el.getAttribute('aria-label')) || alts.indexOf(title) !== -1 ||
                    // An icon whose title repeats the hidden text of its button (grade table: "Cell actions", "Expand column").
                    (control && control !== el && (title === norm(control.textContent) ||
                        title === norm(control.getAttribute('aria-label')))) ||
                    // A link whose title only adds to its image alt and text ("Activity Forum <name>" over alt "Forum" + "<name>").
                    (text && alts.length && title.indexOf(text) !== -1 && alts.every(function(alt) {
                        return title.indexOf(alt) !== -1;
                    })))) {
                el.removeAttribute('title');
            }
            if (el.tagName === 'IMG' && el.alt.trim()) {
                var alt = norm(el.alt);
                var context = el.closest('a, button') || el.parentElement;
                var clone = context.cloneNode(true);
                [].forEach.call(clone.querySelectorAll('img'), function(img) {
                    img.remove();
                });
                var neighbours = [context.previousElementSibling, context.nextElementSibling];
                // The type word already inside the name ("Assignment" in "Online text assignment") makes the icon redundant.
                var holds = function(text) {
                    return (' ' + text + ' ').indexOf(' ' + alt + ' ') !== -1;
                };
                if (holds(norm(clone.textContent)) || neighbours.some(function(n) {
                    return n && holds(norm(n.textContent));
                })) {
                    el.alt = '';
                }
            }
        });
    }

    function watchRedundant() {
        tidyRedundant(document);
        new MutationObserver(function(records) {
            records.forEach(function(record) {
                record.addedNodes.forEach(function(node) {
                    if (node.nodeType === 1) {
                        tidyRedundant(node);
                    }
                });
            });
        }).observe(document.body, {childList: true, subtree: true});
    }

    // Participants table: Moodle pads it with empty rows (tr.emptyrow, never shown) whose row headers are empty <th>, and the
    // filter keeps hidden <select>s with no label. The padding rows are removed and the selects named after their field.
    // The table is rebuilt when the filter changes, so it runs again on every change of the main region.
    function tidyParticipants() {
        document.querySelectorAll('tr.emptyrow').forEach(function(row) {
            row.remove();
        });
        document.querySelectorAll('select[data-field-title]:not([aria-label])').forEach(function(select) {
            select.setAttribute('aria-label', select.getAttribute('data-field-title'));
        });
        var named = document.querySelector('select[data-filterfield="type"][id]');
        var label = named && document.querySelector('label[for="' + named.id + '"]');
        document.querySelectorAll('select[data-filterfield="type"]:not([id]):not([aria-label])').forEach(function(select) {
            if (label) {
                select.setAttribute('aria-label', label.textContent.trim());
            }
        });
    }

    function watchParticipants() {
        var region = document.getElementById('region-main');
        var participants = '#page-user-index, #participants, [data-table-uniqueid^="user-index-participants"]';
        if (!region || !document.querySelector(participants)) {
            return;
        }
        tidyParticipants();
        new MutationObserver(perFrame(tidyParticipants)).observe(region, {childList: true, subtree: true});
    }

    // "Back to top" button (theme_accessible/footer): shown once the page is scrolled, scrolls up and moves keyboard focus
    // to the skip link (or the first link of the page), so the focus does not stay stuck at the bottom.
    function initBackToTop() {
        var button = document.querySelector('[data-action="accessible-totop"]');
        if (!button) {
            return;
        }
        // The button is hidden while the focused element is under it, so keyboard focus is never obscured (WCAG 2.4.12).
        var covers = function() {
            var focused = document.activeElement;
            if (!focused || focused === document.body || focused === button) {
                return false;
            }
            var a = focused.getBoundingClientRect();
            var b = button.getBoundingClientRect();
            return a.left < b.right && a.right > b.left && a.top < b.bottom && a.bottom > b.top;
        };
        var update = perFrame(function() {
            button.hidden = window.scrollY < window.innerHeight || covers();
        });
        // Focusout too: when focus leaves the covered element for the page body no focusin follows.
        ['focusin', 'focusout', 'resize'].forEach(function(type) {
            window.addEventListener(type, update);
        });
        window.addEventListener('scroll', update, {passive: true});
        update();

        button.addEventListener('click', function() {
            window.scrollTo(0, 0);
            var target = document.querySelector('a[href="#maincontent"]') ||
                document.querySelector('#page-wrapper a, #page-wrapper button');
            if (target) {
                target.focus({preventScroll: true});
            }
        });
    }

    // Information tab of the theme settings: add the browser details to the support block and copy it on request.
    function initSupportBlock() {
        var pre = document.getElementById('accessible-about-support');
        if (!pre) {
            return;
        }
        var media = function(query) {
            return window.matchMedia(query).matches ? 'yes' : 'no';
        };
        pre.textContent += '\n' + [
            'Browser: ' + navigator.userAgent,
            'Window: ' + window.innerWidth + 'x' + window.innerHeight + ' px, pixel ratio ' + window.devicePixelRatio,
            'Root font size: ' + window.getComputedStyle(document.documentElement).fontSize,
            'Browser asks for reduced motion: ' + media('(prefers-reduced-motion: reduce)'),
            'Browser asks for more contrast: ' + media('(prefers-contrast: more)'),
            'Forced colours: ' + media('(forced-colors: active)')
        ].join('\n');

        // Resolves when the text is on the clipboard and rejects when it cannot be copied.
        var copyText = async function(text) {
            if (navigator.clipboard && window.isSecureContext) {
                await navigator.clipboard.writeText(text);
                return;
            }
            // Plain http (not localhost): the clipboard API is not available, select the text and use the old command.
            var range = document.createRange();
            range.selectNodeContents(pre);
            var selection = window.getSelection();
            selection.removeAllRanges();
            selection.addRange(range);
            if (!document.execCommand('copy')) {
                throw new Error('copy failed');
            }
        };

        document.addEventListener('click', async function(e) {
            var button = e.target.closest('[data-action="accessible-copy-support"]');
            if (!button) {
                return;
            }
            var status = button.closest('.accessible-about').querySelector('.accessible-about-copystatus');
            // The alert (info or error, rendered by the server) is copied into the status region; its own role is
            // dropped so that the region alone announces it.
            var show = function(result) {
                if (!status) {
                    return;
                }
                var clone = document.querySelector('template[data-copy-result="' + result + '"]').content.cloneNode(true);
                clone.querySelector('.alert').removeAttribute('role');
                status.replaceChildren(clone);
            };
            try {
                await copyText(pre.textContent);
                show('copied');
            } catch (error) {
                show('failed');
            }
        });
    }

    // Navigation landmarks Moodle leaves without a name (every <nav> needs one): the A-Z filter bars of the participants list
    // and the grader report take the "First name" / "Last name" label before them, the tertiary navigation selector its own
    // menu label. Trailing dots and colons are removed from every landmark name.
    function nameNavLandmarks() {
        // Some names come from Moodle already named with a trailing dot (lang string "Participants tertiary navigation.").
        document.querySelectorAll('nav[aria-label]').forEach(function(nav) {
            var label = nav.getAttribute('aria-label');
            var clean = label.replace(/[\s.:]+$/, '');
            if (clean && clean !== label) {
                nav.setAttribute('aria-label', clean);
            }
        });
        document.querySelectorAll('nav:not([aria-label]):not([aria-labelledby])').forEach(function(nav) {
            var before = nav.previousElementSibling;
            var label = before && before.classList.contains('initialbarlabel') ?
                before : nav.querySelector('.select-menu [id$="-label"]');
            var name = label ? label.textContent.trim().replace(/[\s.:]+$/, '') : '';
            if (name) {
                nav.setAttribute('aria-label', name);
            }
        });
    }

    /**
     * Copy the font, text size and spacing classes of the page body to the body of every TinyMCE editing area, so the
     * text is written with the same options it is read with (scss/editor.scss has the rules). The iframe is created after
     * the page loads, hence the observer; it is same-origin, so its document can be reached.
     */
    function syncEditorFrames() {
        var wanted = /^accessible-(font|fontsize|spacing)-/;
        var copy = function(frame) {
            var body = frame.contentDocument && frame.contentDocument.body;
            if (!body) {
                return;
            }
            Array.prototype.slice.call(body.classList).forEach(function(name) {
                if (wanted.test(name)) {
                    body.classList.remove(name);
                }
            });
            Array.prototype.slice.call(document.body.classList).forEach(function(name) {
                if (wanted.test(name)) {
                    body.classList.add(name);
                }
            });
        };
        var scan = perFrame(function() {
            document.querySelectorAll('iframe.tox-edit-area__iframe').forEach(function(frame) {
                if (!frame.dataset.accessibleSynced) {
                    frame.dataset.accessibleSynced = '1';
                    frame.addEventListener('load', function() {
                        copy(frame);
                    });
                }
                copy(frame);
            });
        });
        new MutationObserver(scan).observe(document.body, {childList: true, subtree: true});
        scan();
    }

    // Escape closes a Video.js menu (speed, captions...) but its hidden item still held the focus, which fell to the page: back to
    // the menu's button, like choosing an item does.
    function initVideoMenus() {
        document.addEventListener('keydown', function(e) {
            var menu = e.key === 'Escape' && e.target.closest ? e.target.closest('.video-js .vjs-menu') : null;
            var button = menu && menu.parentNode.querySelector('button.vjs-menu-button');
            if (button) {
                // Chromium drops the focus a moment after the menu is hidden, so wait for it.
                window.setTimeout(function() {
                    if (document.activeElement === document.body) {
                        button.focus();
                    }
                }, 100);
            }
        }, true);
    }

    syncPasswordToggles();
    ready(function() {
        syncEditorFrames();
        hideEmptyMoreMenu();
        publishNavbarHeight();
        autoHideNavbar();
        fitStickyFooter();
        moveAdminWarning();
        placeCourseIndexClose();
        placePopoverPanels();
        addOptionsLink();
        watchParticipants();
        watchRedundant();
        initBackToTop();
        initSupportBlock();
        nameNavLandmarks();
        initVideoMenus();
    });
})();
