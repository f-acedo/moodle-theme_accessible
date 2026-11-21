# Accessible: a Moodle theme for blind, low-vision and colour-blind users

**Languages:** English · [Español](docs/es/README.md) · [Català](docs/ca/README.md) · [Français](docs/fr/README.md) · [Italiano](docs/it/README.md) · [Português (Brasil)](docs/pt_br/README.md) · [Deutsch](docs/de/README.md)

**_Moodle should work for everyone who has to use it, not only for people with perfect eyesight._**

Accessible is a theme for Moodle 5.2 and above, based on Boost. It was designed from the start for three groups of users who are usually left to fend for themselves:

- **People who are totally blind** and use a screen reader.
- **People with low vision** who use magnifiers, browser zoom or special lenses.
- **People with colour vision deficiency** (colour blindness), for whom "the red button" or "the green field" means nothing.

The goal is that students, teachers and administrators with these needs can really *perceive and navigate* Moodle, not just that the pages pass a checklist.

## Why it is different

Most themes start from a visual design and fix accessibility afterwards. Accessible works the other way round: every decision about colour, size, order and wording was made for its users first.

- **Plain by design.** White background, black text, black underlined links, large targets and a strong focus ring. Nothing decorative to switch off.
- **Colour never carries meaning alone.** Alerts have a coloured frame, a pattern, a symbol *and* a written word ("Error:", "Warning:").
- **Everything scales with the text.** Sizes are relative, so a larger text size gives a larger Moodle: icons, buttons and fields grow along with the text.
- **The user decides.** Each person sets their own font, text size, spacing, contrast, motion, focus and colour vision, and can do it before logging in.
- **Measured, not assumed.** Text contrast targets WCAG 2.1 level AAA (7:1 for normal text, 4.5:1 for large text), checked with automated scans in normal and high contrast, at several text sizes, in Chromium and Firefox.

## Features

### For every user

- **Personal accessibility options** on one page, reached from the accessibility button that is always in the top bar:
  - **Font:** Lexend Deca (default), Atkinson Hyperlegible or OpenDyslexic. All three are bundled with the theme.
  - **Text size:** 100%, 125%, 150% or 200%. The whole layout scales with it, icons and buttons included.
  - **Text spacing:** normal, wide or extra wide.
  - **Contrast:** normal (black on white) or high (white on black, with yellow kept for hover and focus).
  - **Motion:** normal or reduced (the system setting is also respected).
  - **Focus outline:** normal or thick.
  - **Colour vision filters** for red (protan), green (deutan) and blue (tritan) deficiencies, each in three strengths, plus a no-colour view. White, grey and black never change.
- **Large, forgiving controls:** 44 px minimum targets for buttons, 55 px form fields, large checkboxes and radio buttons, and large, high-contrast scrollbars (in Chrome, Edge and other Chromium browsers; Firefox keeps its own width).
- **A page that makes sense when read aloud:** the main content comes before the blocks, every navigation area has a name, the password field has a "Show password" button that says whether it is on, and a "Back to top" button appears when you scroll.
- **Options before logging in:** the accessibility button is also on the login page. At the first login, those choices are copied into the account, unless the account already has its own.

### For administrators

- **Use it as the site theme, or offer it as a choice** next to your main theme (with "Allow user themes" on). Users can switch back to another theme from the same page.
- **Site defaults** for font, text size, spacing, contrast, motion and focus, for everybody, visitors included.
- **An Information tab** in the theme settings with a colour vision test image, font specimens, licences and a support summary you can copy into a bug report.
- **A status check** (Reports > System status) that warns when users cannot choose the theme or their options.
- **Privacy built in:** preferences are declared and exported through Moodle's Privacy API. Visitors' choices are stored in a cookie that holds display options only.
- **No external font requests:** the fonts are bundled with the theme.
- **Seven languages:** English, Spanish, Catalan, French, Italian, German and Brazilian Portuguese. The translations are available in Moodle's language packs.

## Good to know

- The look is **deliberately plain**. If you need strong branding or custom colours, this is not the theme for you.
- The theme cannot change content it does not control: **H5P activities, embedded iframes and text coloured by hand** in course content.
- At 200% text size a few wide Moodle pages (the gradebook, the course management page and the quiz attempt page) can still scroll sideways.
- Some limits come from Moodle itself, such as heading levels that skip in some core pages.
- The theme has **not been formally audited or certified**. No theme can make a site accessible on its own: course content matters just as much.

## Requirements and installation

- Moodle 5.2 and above, and the Boost theme (included with Moodle).
- On Moodle 5.3 the theme uses the classic main menu, not the new one introduced in 5.3.
- Copy the theme into `public/theme/accessible` (the folder must be named `accessible`; if you download the ZIP from GitHub, rename the folder first), or install it from *Site administration > Plugins > Install plugins*, then finish the installation from *Site administration > Notifications*.
- To make it the site theme: *Site administration > Appearance > Themes*.
- To let each user choose it and set their own options, turn on **Allow user themes** (*Site administration > Appearance > Advanced theme settings*).
- When it is a user choice, the login page uses the site theme. To give users a login link that opens Accessible, turn on **Allow theme changes in the URL** and share `https://your.site/login/index.php?theme=accessible` (see the [guide](docs/en/accessible-theme-guide.md#a-login-link-that-opens-accessible) for the trade-off).

There is no build step: no Grunt, npm or webpack.

## Changelog

Version 1.0.0 (2026-11-11): Initial version.

## Versioning

**Semantic Versioning (SemVer) is a standardized versioning system designed to bring clarity and predictability to software development by assigning a structured three-part number (MAJOR.MINOR.PATCH) to each release.** For Moodle plugins and themes, its primary purpose is to communicate the exact nature of code and structural changes to system administrators before they update a production site. By distinguishing between minor visual fixes, safe feature additions, and breaking architectural overhauls, SemVer ensures that platform maintenance remains secure, upgrades are predictable, and automated deployments do not inadvertently disrupt the user experience or corrupt database configurations.

### Accessible theme versioning reference (SemVer)

| Type of release | Version increment | What it implies for a Moodle theme | Examples and Moodle technical details |
| :--- | :--- | :--- | :--- |
| **Patch** | `0.0.Z` | **Minor style adjustments and bug fixes.** Purely cosmetic or internal fixes that do not change how the theme is configured or structurally used. | • Fixing a CSS padding or responsive layout bug.<br>• Adjusting a button colour or typography contrast.<br>• Resolving a minor PHP notice in the server logs.<br>• *Changes only the last digits of `$plugin->version` in `version.php`.* |
| **Minor** | `0.Y.0` | **New features or safe platform adaptations.** Adding options that do not structurally overhaul the theme, or updating the code to support a new Moodle version while maintaining compatibility with the current ones. | • Adding a new layout option or block region without removing old ones.<br>• Introducing a new custom setting in `settings.php` (for example, a header toggle).<br>• Updating the theme to support a new Moodle minor release.<br>• *Safe to automate; does not break existing course layouts.* |
| **Major** | `X.0.0` | **Breaking structural changes or major upgrades.** Significant functional overhauls that require admin attention, database modifications, or dropped support for older Moodle versions that could break the site upon upgrading. | • Completely redesigning the layout structure (removing or renaming old block regions).<br>• Changing configuration variable names (causing old theme settings in `config_plugins` to be lost).<br>• Upgrading the theme exclusively for a major new Moodle version while dropping support for older ones (requires incrementing `$plugin->requires`). |

## More information

The [complete guide](docs/en/accessible-theme-guide.md) explains why the theme exists, the standards it follows, every feature in detail, the fonts and their history, and its known limits. The technical details of the colour vision filters, the limits of high contrast and the history of the fonts are in Appendix A of the guide.

[Source code and releases](https://github.com/f-acedo/moodle-theme_accessible). Bug reports and suggestions: [issue tracker](https://github.com/f-acedo/moodle-theme_accessible/issues).

## Credits and licence

Developed by Fernando Acedo and the former Koditik dev team. Claude Code helped to write parts of the theme, reviewed it and helped to test the theme. Claude is a trademark of Anthropic, PBC.

Licensed under the **GNU GPL v3 or later** (see `LICENSE.txt`). The bundled fonts (Lexend Deca, Atkinson Hyperlegible and OpenDyslexic) are licensed under the **SIL Open Font License 1.1**.
