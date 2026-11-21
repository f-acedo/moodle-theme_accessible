# Accessible theme for Moodle: the complete guide

Version 1.0.0 (stable), for Moodle 5.2 and above.

This guide explains what the Accessible theme is, why it exists, the standards it follows, every feature it adds, the
fonts it ships and why they were chosen, how it was tested and what it cannot do. It is written for anyone who has to
decide whether to try it: site administrators, accessibility coordinators, teachers, support staff and the users
themselves.

## Contents

1. [What Accessible is](#1-what-accessible-is)
2. [Why this theme exists](#2-why-this-theme-exists)
3. [Design principles](#3-design-principles)
4. [Standards and legal context](#4-standards-and-legal-context)
5. [Personal accessibility options](#5-personal-accessibility-options)
6. [Visual design: what every user sees](#6-visual-design-what-every-user-sees)
7. [Screen readers and keyboard users](#7-screen-readers-and-keyboard-users)
8. [High contrast mode](#8-high-contrast-mode)
9. [Colour vision filters](#9-colour-vision-filters)
10. [Fonts: why these three](#10-fonts-why-these-three)
11. [Features for administrators](#11-features-for-administrators)
12. [Privacy and data](#12-privacy-and-data)
13. [Languages](#13-languages)
14. [How the theme was tested](#14-how-the-theme-was-tested)
15. [Known limits](#15-known-limits)
16. [Is Accessible right for your site?](#16-is-accessible-right-for-your-site)
17. [Installation and configuration](#17-installation-and-configuration)
18. [Credits, licences and sources](#18-credits-licences-and-sources)

Appendix A. [Technical reference](#appendix-a-technical-reference)

---

## 1. What Accessible is

Accessible is a theme for **Moodle 5.2 and above**. It is a child theme of **Boost**, the standard Moodle theme, so it keeps
Boost's layout, navigation and behaviour, and changes how they look, how they scale and how they are announced.

It is built for three groups of people:

- **People who are blind** and use a screen reader (such as NVDA, JAWS, VoiceOver or TalkBack). For them, what matters
  is the order in which the page is read, the names of buttons and navigation areas, and being able to do everything
  from the keyboard.
- **People with low vision**, for example someone with about 30% of normal vision who uses a screen magnifier, browser
  zoom or special lenses. For them, what matters is contrast, size, a clear focus indicator, and a layout that does not
  break when everything is enlarged.
- **People with colour vision deficiency** (colour blindness or "daltonism"). For them, what matters is that no
  information is given by colour alone, and that colours that look alike can be made to look different.

The aim is that these people can genuinely **perceive and navigate** Moodle on their own, not just that the pages pass
an automated checklist.

Accessible can be used in two ways: as the **site theme** for everybody, or as an **alternative theme** that each user
can choose for themselves, while everybody else keeps the site's usual look.

---

## 2. Why this theme exists

### The users

Vision problems are common. The World Health Organization's [*World report on vision*](https://www.who.int/publications/i/item/9789241516570) (2019) estimates that **at least
2.2 billion people** worldwide have a near or distance vision impairment. Colour vision deficiency affects about
**1 in 12 men and 1 in 200 women**, according to [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/). In any school, university or company that uses
Moodle, some students, teachers and staff are in these groups, whether or not they have told anyone.

### Moodle and accessibility

Moodle takes accessibility seriously: its core is developed with accessibility in mind and checked against WCAG.
Boost, its default theme, is a solid base. But a general-purpose theme has to balance many goals at once: branding,
visual design, information density and the needs of the average user. Some choices that suit most people are hard for
the users this theme is made for:

- Light grey text and thin borders that do not reach the higher contrast levels.
- Pale blue or grey fills to show state (selected, hover, disabled) that are hard to see with low vision or under a
  magnifier.
- Small targets (icons, links in rows) that are hard to hit with a tremor or under magnification.
- Pixel-based sizes and breakpoints that do not grow when the user chooses a larger text size.
- Alerts whose meaning depends largely on their colour.

Most themes start from a visual design and fix accessibility problems afterwards, one complaint at a time. Accessible
works the other way round: **the audience came first**, and every decision about colour, size, order and wording was
made for them.

### Not a replacement for good content

A theme controls the frame around the content: menus, buttons, forms, alerts, navigation. It cannot rewrite what
teachers put in their courses. An image without a text alternative, a PDF scanned as a picture or a video without
captions stays inaccessible whatever the theme. Accessible makes the platform as clear as it can be; course content
still needs care from its authors (see [Known limits](#15-known-limits)).

---

## 3. Design principles

Five rules guide every part of the theme.

1. **Plain and high contrast by default.** The background is white everywhere and text is black. Links are black and
   underlined (with a thicker underline on hover), not blue or purple. Decoration that does not help is removed, and
   what is necessary is made more prominent.
2. **Colour is never the only signal.** Every state that Moodle shows with colour also has a shape, a pattern, a symbol
   or a word. Alerts, for example, combine a coloured frame, a pattern strip, a symbol and the written type of message.
3. **Coloured frames, not coloured fills.** Alerts and status messages keep the white background and show their colour
   as a frame (border). A pale coloured fill lowers the contrast of the text on it; a frame does not.
4. **Everything scales with the text.** Sizes are relative (in `rem`), so a larger text size gives a larger Moodle,
   with icons, buttons, form fields, drawers and touch targets growing along with the text.
5. **The person decides.** Font, text size, spacing, contrast, motion, focus and colour vision are personal options.
   The site administrator sets sensible defaults, and each user can change them.

---

## 4. Standards and legal context

### WCAG 2.1

The [**Web Content Accessibility Guidelines (WCAG) 2.1**](https://www.w3.org/TR/WCAG21/) are the international reference for web accessibility. They are
published by the [World Wide Web Consortium (W3C)](https://www.w3.org/WAI/) and organised around four principles: content must be *perceivable*,
*operable*, *understandable* and *robust*. Each success criterion has a level:

- **Level A**: the minimum.
- **Level AA**: the level that most laws and public-sector rules require.
- **Level AAA**: the highest level. The W3C [does not recommend](https://www.w3.org/WAI/WCAG21/Understanding/conformance) requiring AAA for whole sites, because some criteria
  cannot be met for all content.

[WCAG 2.2](https://www.w3.org/TR/WCAG22/) (2023) adds criteria to 2.1, but many laws still refer to WCAG 2.1 level AA.

### What Accessible aims at

Accessible takes **WCAG 2.1 level AAA** as its target for everything the theme draws. In practice that means:

| WCAG criterion | What it asks | What the theme does |
|---|---|---|
| [1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced), AAA | 7:1 for normal text, 4.5:1 for large text | All theme colours are chosen for 7:1 or more, in normal and high contrast. Measured with automated scans (see [section 14](#14-how-the-theme-was-tested)). |
| [1.4.11 Non-text Contrast](https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast), AA | 3:1 for borders of controls, focus indicators and graphics that carry meaning | Black 2 px frames on fields, checkboxes and radio buttons; black focus ring with a white halo. |
| [1.4.1 Use of Colour](https://www.w3.org/WAI/WCAG21/Understanding/use-of-color), A | Colour is not the only way to convey information | Alerts have frame + pattern + symbol + word; disabled controls have a dashed border; selected items are bold or inverted. |
| [1.4.4 Resize Text](https://www.w3.org/WAI/WCAG21/Understanding/resize-text), AA, and [1.4.10 Reflow](https://www.w3.org/WAI/WCAG21/Understanding/reflow), AA | Text can be enlarged to 200% and the page reflows | Text size option up to 200%, everything in `rem`, rows allowed to wrap. Some Moodle pages still scroll sideways at 200% (see [Known limits](#15-known-limits)). |
| [1.4.8 Visual Presentation](https://www.w3.org/WAI/WCAG21/Understanding/visual-presentation), AAA | Line spacing, no justified text, user-selectable colours | Line height 1.6, spacing options, justified text shown start-aligned, high contrast option. |
| [1.4.12 Text Spacing](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing), AA | The page survives larger line, letter and word spacing | The "extra wide" spacing option applies exactly the WCAG values (0.12em letters, 0.16em words) and more line height. |
| [2.3.3 Animation from Interactions](https://www.w3.org/WAI/WCAG21/Understanding/animation-from-interactions), AAA | Motion can be turned off | Reduced motion option; the system setting `prefers-reduced-motion` is also respected. |
| [2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/Understanding/bypass-blocks), A | Skip repeated content | "Skip to main content" link first on every page; main content before the blocks. |
| [2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/Understanding/focus-visible), AA | Keyboard focus can be seen | 4 px focus ring (8 px with the thick option) in place of the browser default. |
| [2.5.5 Target Size](https://www.w3.org/WAI/WCAG21/Understanding/target-size), AAA | Targets of at least 44 × 44 CSS pixels | Buttons and form controls are at least 44 px; fields are 55 px. A few Moodle link rows are still smaller (see [Known limits](#15-known-limits)). |
| [4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/Understanding/name-role-value), A | Controls and regions have names | Every navigation area has a name; the password toggle reports its state. |

### Laws and public-sector rules

Many accessibility laws are based on WCAG 2.1 level AA, usually through other standards:

- **European Union.** The [*Web Accessibility Directive*](https://eur-lex.europa.eu/eli/dir/2016/2102/oj) (Directive (EU) 2016/2102) covers public-sector websites and
  apps. The [*European Accessibility Act*](https://eur-lex.europa.eu/eli/dir/2019/882/oj) (Directive (EU) 2019/882) applies to many private products and services from
  28 June 2025. Both rely on the harmonised standard [**EN 301 549**](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility), which includes WCAG 2.1 level AA for web content.
- **United States.** [**Section 508**](https://www.access-board.gov/ict/) of the Rehabilitation Act covers federal agencies and refers to WCAG 2.0 level AA.
  In April 2024 the Department of Justice [adopted](https://www.ada.gov/resources/2024-03-08-web-rule/) **WCAG 2.1 level AA** as the technical standard for state and local
  government websites under Title II of the Americans with Disabilities Act (ADA). An interim final rule of April 2026
  moved the compliance dates one year later (April 2027 for entities that serve 50,000 people or more, April 2028 for
  smaller ones); check [ada.gov](https://www.ada.gov/) for the current dates.
- Other countries have similar rules, most of them based on WCAG.

**What this means for you:** Accessible is built towards WCAG 2.1 AAA for the parts it controls, which is above the AA
level these laws ask for. However, **the theme has not been formally audited or certified**, and compliance is a property
of a whole site (platform, plugins and content), not of a theme. Accessible gives you a strong base; it does not replace
an accessibility audit of your own site and courses.

---

## 5. Personal accessibility options

Every user, including visitors who are not logged in, has an **accessibility options page**. It is reached from:

- the **accessibility button** (the universal access symbol), always present in the top bar of every page;
- the same button in the top right corner of the **login page**;
- the user's **profile** ("Accessibility" link) and the **Preferences** page.

Each option explains what it does. You can save and go back, save and stay, cancel, or restore the site defaults.

### Font

Three fonts, all bundled with the theme: **Lexend Deca** (the default), **Atkinson Hyperlegible** and **OpenDyslexic**.
See [section 10](#10-fonts-why-these-three) for why these three.

### Text size

**100%, 125%, 150% or 200%.** The option changes the root font size, and because every size in the theme is in `rem`,
the whole page grows with it: text, icons, buttons, form fields, checkboxes, drawers, scrollbars and touch targets.
This is different from browser zoom, which also works: the text size option keeps the window width and lets the layout
reflow, so it suits people who want larger text without losing the layout.

At larger sizes the layout adapts: the top bar wraps onto two rows and, when it would take more than a quarter of the
window, slides away as you scroll down and comes back at the top of the page or when the focus moves into it. The main
menu moves into the menu button (☰) sooner, so the bar keeps room for the page. Form labels move above their fields,
menus wrap, profile cards become one column, long menus get a maximum height so they stay on the screen, the Save and
Cancel bar of long forms stays at the end of the form instead of covering it, and long words in form section headings
are hyphenated instead of making the page scroll sideways.

On small screens the text size is capped so that each line still holds enough words: up to 150% on screens narrower
than 768 px (small tablets) and up to 125% below 480 px (phones). Larger screens get the size chosen.

### Text spacing

- **Normal:** line height 1.6.
- **Wide:** line height 1.8, slightly wider letter and word spacing.
- **Extra wide:** line height 2, letter spacing 0.12em, word spacing 0.16em and more space after paragraphs. These are
  the values of [WCAG 1.4.12 (Text Spacing)](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing).

Wider spacing helps many readers with low vision or dyslexia keep their place in the line.

### Contrast

- **Normal:** black text on a white background, with yellow used for hover and focus (the default).
- **High:** white text on a black background, with yellow kept for hover and focus. See
  [section 8](#8-high-contrast-mode).

### Motion

- **Normal** or **Reduced.** Reduced motion turns off animations and transitions and smooth scrolling. If the operating
  system is set to reduce motion, the theme does the same even when the option is "Normal". This helps people with
  vestibular disorders, and magnifier users, who can lose their place when the page moves.

### Focus outline

- **Normal:** a 4 px ring around the element that has keyboard focus: black with a white halo, or yellow with a black
  halo in high contrast.
- **Thick:** the ring becomes 8 px, easier to find under a magnifier or with low vision.

### Colour vision

A type (**protan**, **deutan**, **tritan** or **no colour**) and a strength (**mild**, **medium** or **strong**). The
page colours are shifted so that colours that look alike to the user become different. See
[section 9](#9-colour-vision-filters).

### Where the choices are kept

- **Logged-in users:** as Moodle user preferences, so they follow the user to any computer.
- **Visitors and guests:** in a cookie (see [section 12](#12-privacy-and-data)).
- **At the first login:** if the account has no options of its own yet, the choices made as a visitor are copied into
  the account, and a message says so. If the account already has its own options, the account wins.
  Only choices made in the same visit, just before logging in, are copied: options left in the browser by someone
  else on a shared computer are not.

### Changing theme

If the site allows users to choose their theme, the same page has a theme selector that lists every installed theme.
Users can try Accessible and leave it again without asking anyone.

---

## 6. Visual design: what every user sees

These changes apply to everybody using the theme, whatever their options.

### Colours and links

- White background everywhere, black text.
- Links are black and underlined; the underline gets thicker on hover. There is no blue or purple, and visited links
  look the same, so the colour of a link never has to be decoded.
- Muted (secondary) text is a dark grey that still reaches 7:1, never the pale greys of a standard theme.
- Inline code is shown in a dark magenta that reaches 7:1 (Bootstrap's pink is about 4.8:1).
- Text that an author justified is shown aligned to the start of the line: justified text creates uneven gaps that
  are hard to read for many people with dyslexia or low vision.

### Focus

Every interactive element shows a 4 px black ring when it has keyboard focus (8 px with the thick option); buttons and
form fields also get a white halo, which keeps the ring visible on any background. Buttons, menu items and pagination
links also fill with yellow, with black text, on focus and hover. In high contrast the ring itself is yellow, with a
black halo. Bootstrap's pale blue "glow" is removed. The page also
leaves space at the top when it scrolls to a focused element, so the fixed top bar never covers it.

### Buttons and targets

- Every button has a minimum size of **44 × 44 px** (the WCAG AAA target size) and generous padding.
- Pagination bars, such as the A to Z initials filter in the participants page, have 44 px targets with a 2 px frame;
  the current item is white on black and bold; hover gives a yellow fill.
- Disabled controls have a grey fill **and** a dashed border, so they are not shown by colour alone.

### Forms

- Text fields, drop-down menus, text areas and buttons are all **55 px** high.
- Checkboxes and radio buttons are drawn by the theme: **28 px**, with a 2 px black border. Checked means black with a
  white tick or dot; disabled means a dashed border and grey fill.
- Required fields keep a clear asterisk, and validation messages are shown only when there is an error, framed and
  next to the field.
- The edit mode switch in the top bar is a white track with a black knob when off, and a black track with a white knob
  when on, so its state is shown by position and shape as well as colour.

### Alerts and notifications

Moodle's alerts (error, warning, success, information) are redesigned so that their meaning never depends on colour:

- a **white background** (no tinted fill), so the text keeps full contrast;
- a **coloured frame** in the alert's colour;
- a **pattern strip** on the left, different for each type;
- a **symbol** next to the first line of text;
- the **type written in bold** before the message: "Error:", "Warning:", "Success:", "Information:";
- a tooltip over the strip and symbol with the type of alert.

A person who sees no colour at all, or who uses a screen reader, still gets the type of message. Alerts written by
other plugins with plain alert markup also get the frame, pattern and symbol (but not the written word, which comes
from the theme's own alert templates).

### Scrollbars

Scrollbars are **24 px** wide, with a black thumb on a framed white track, everywhere: page, drawers and tables. They
have no hover or drag effect on purpose: a scrollbar that changes size or colour under the pointer jumps around for
people with a tremor or a magnifier. The width works in Chrome, Edge and other Chromium browsers; Firefox keeps its own
width but uses the colours.

### Header and footer

- The top bar shows only what matters and is black with white text in every mode.
- The footer is always visible and short: the floating help and communication buttons, the "logged in as" line and the
  Moodle version are removed. Links added by plugins (for example the data retention summary)
  are kept.
- Initials avatars (the coloured circles with letters) are hidden, except where they are the link to a profile; user
  photos stay.

---

## 7. Screen readers and keyboard users

Accessible was checked with the browser's accessibility tree and keyboard scans (see
[section 14](#14-how-the-theme-was-tested)). The changes are:

- **Skip link first.** "Skip to main content" is the first thing on every page.
- **Accessibility options second.** The accessibility button is the next item in the keyboard order, so a user can
  reach their options in two key presses. (It is shown at the right of the top bar.)
- **Main content before the blocks.** In Boost, the blocks drawer comes before the main content in the page code. In
  Accessible it comes after, so a screen reader reads the page content first. The visual layout does not change.
- **Every navigation area has a name**: "Main menu", "Page menu", "Course index" and the menus inside pages, so a user
  who lists the landmarks of a page knows what each one is.
- **The password field** has a "Show password" button that tells the screen reader whether the password is visible
  (pressed or not pressed).
- **Back to top.** A button appears at the bottom right once the page has been scrolled about one screen. It takes the
  user back to the top and puts the focus on the skip link, so keyboard and screen reader users really go back to the
  start, not only the visual page. It hides while the focus is on content underneath it, so it never covers the focused
  element.
- **"← Back to the course" button** at the top of the course index inside an activity, to go back to the course page.
- **The course index opens and closes in the same place.** In Boost, the button that closes the course index is at the
  far end of its header, away from the button that opens it. In Accessible it appears exactly where the open button was,
  so the drawer opens and closes without moving the pointer or the magnified view, and it is the first item of the drawer
  for the keyboard.

---

## 8. High contrast mode

High contrast is a personal option (and can be the site default). It turns the page into **white text on a black
background**:

- Secondary text is a very light grey (#E0E0E0), still above 7:1 on black.
- Links are white and underlined, like the text.
- **Yellow** (#FFE600) is used only for hover and focus: hover fills and the focus ring, with black text on yellow.
- Alerts keep their frames, patterns and symbols, in brighter colours that reach the contrast level on black.
- Moodle's cards, menus, dialogs and forms switch to dark through Bootstrap's own dark mode, so they are consistent.
- The top bar keeps its usual look, and the editor's editing area (TinyMCE) is turned dark with a filter.

Normal mode is not affected: the light palette is exactly the same with or without this option available.

What high contrast cannot change (H5P, iframes, teacher content with its own colours) is listed in
[Known limits](#15-known-limits).

---

## 9. Colour vision filters

### What they do

Colour vision deficiency means that some colours that look different to most people look the same to the user, most
often reds and greens. The colour vision option applies a filter over the whole window that **moves the colours the user
cannot tell apart into colours they can**, so differences become visible again.

### The options

- **Type:**
  - **Protan:** weak or missing sensitivity to red.
  - **Deutan:** weak or missing sensitivity to green.
  - **Tritan:** weak or missing sensitivity to blue.
  - **No colour:** the page is shown in greys.
- **Strength:** **mild** (the "-anomaly" types, where the cone works partly), **medium**, or **strong** (the "-anopia"
  types, where the cone is missing). The no-colour view ignores strength.

If a user does not know their type, they can try each one and keep the one where red, green and blue things look most
different. It is an aid, not a medical test.

### How it works

Each filter is an SVG colour matrix applied through a layer over the whole window, built in two steps:

1. **Simulation:** what a person with that deficiency sees, using the [published model](https://doi.org/10.1109/TVCG.2009.113) of Machado, Oliveira and
   Fernandes (2009), scaled by the chosen strength.
2. **Correction:** the part of the colour the user cannot see is moved into the channels they can still see (red into
   green and blue for protan and deutan; blue into red and green for tritan). This technique is known as
   "daltonizing".

**White, grey and black do not change**, so text and backgrounds keep their contrast.

### How it was checked

Coloured swatches were drawn over a page with each combination of type and strength, and their pixel colours were
read back. White, black and grey were unchanged in every case; each strength moved the colours further than the
previous one; the no-colour view turned every swatch into a pure grey.

### Limits

- The matrices come from published values. They have **not been clinically validated**, and only people with colour
  vision deficiency can confirm that they help. Testing with real users on real course content is recommended.
- Images and videos are filtered too, because the filter covers the whole window. This includes H5P and third-party
  embeds such as YouTube and Vimeo in Chrome, Edge and Firefox. In a browser that cannot apply the layer, the filter is
  applied to the page instead and third-party embeds keep their own colours.
- **Fullscreen video** and native modal dialogs are drawn by the browser above everything and are not filtered. The
  colour filters of the operating system (Windows, macOS, iOS and Android) cover them.
- The effect of a filter over the whole window on the speed of slow computers has not been measured.

### Colour vision test for administrators

The **Information** tab of the theme settings shows the same test image eleven times: the original, the no-colour view
and each type in each strength. Administrators can see how the site's colours look to each user. The image is the
theme's own drawing, not an Ishihara plate, and it is not a medical test.

---

## 10. Fonts: why these three

### Why offer a choice

No single font is best for everybody. Reading comfort depends on the person, their eyes and the task. The theme
therefore bundles three fonts with different design aims, lets each user try them and keep the one that works, and
lets the administrator choose the default for the site.

All three are bundled with the theme as web font files: **no request is sent to Google Fonts or any other external
service**, which is better for privacy and works on networks without internet access. All three are licensed under the
**SIL Open Font License 1.1**. The Information tab of the theme settings shows a specimen of each font, in regular and
bold, including the characters that are most easily confused: `I / l / 1`, `O / 0`, `rn / m`, `cl / d`.

| Font | Made by | Main idea |
|---|---|---|
| [**Lexend Deca**](https://www.lexend.com/) (default) | Dr Bonnie Shaver-Troup and Thomas Jockin | Wide, even letter spacing to make reading more fluent |
| [**Atkinson Hyperlegible**](https://www.brailleinstitute.org/freefont/) | Braille Institute of America, designed with Applied Design Works | Letter shapes that are easy to tell apart, for low vision |
| [**OpenDyslexic**](https://opendyslexic.org/) | Abbie Gonzalez | Heavier letter bottoms, meant to help readers with dyslexia |

### Lexend Deca (the default)

**History.** Lexend is the work of Dr Bonnie Shaver-Troup, an educational therapist, and the type designer Thomas
Jockin. From her work with struggling readers she proposed that reading improves with a sans-serif font, expanded
proportions and wider character spacing. They developed it around 2018 and it was released on
[Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) in 2019. Lexend is based on [Quicksand](https://fonts.google.com/specimen/Quicksand), a typeface started by Andrew
Paglinawan in 2008. The family has seven widths, from **Deca** (the narrowest) to Zetta (the widest); in 2021 a weight
axis was added.

**Why it is the default.** Lexend Deca is a clean, open sans-serif with generous spacing that stays compact enough for
a dense interface like Moodle, and it reads well at small and large sizes.

### Atkinson Hyperlegible

**History.** Atkinson Hyperlegible was created for the **Braille Institute of America** and released in 2019, the year
of the institute's centenary. It was designed by the agency Applied Design Works as part of the institute's new brand,
and it is named after the institute's founder, J. Robert Atkinson. It won Fast Company's 2019 Innovation by Design award
and, in 2024, entered the permanent collection of the Cooper Hewitt, Smithsonian Design Museum. In 2025 the Braille
Institute released **Atkinson Hyperlegible Next**, with more weights and wider language support, and a monospaced
version.

**The idea.** Most typefaces aim for uniform letters. Atkinson Hyperlegible does the opposite: it gives priority to the
**differences between characters** so that readers with low vision can tell them apart, with open shapes and distinct
forms for pairs that are easy to confuse, such as capital I, lowercase l and the number 1, or O and 0.

**Why it is offered.** It is the font most directly designed for the low-vision users this theme serves. The theme
bundles the original version in regular and bold.

### OpenDyslexic

**History.** OpenDyslexic was created by Abbie Gonzalez, who has dyslexia, and was first released in 2011. It is open
source and was originally derived from Bitstream Vera Sans.

**The idea.** Its letters have **heavier bottoms**. The author says that the weight shows which way is down, which
helps readers recognise letters and can keep them from mentally flipping or rotating them (for example b, d, p and q).
Letter shapes are also made more distinct, and spacing is wider.

### What the fonts cover

Lexend Deca and Atkinson Hyperlegible are bundled with the Latin and extended Latin character sets, the same files that
Google Fonts serves, which cover the seven languages of the theme and most European languages; these two fonts have no
Greek or Cyrillic characters. OpenDyslexic is bundled complete, as its author publishes it: besides Latin it covers
Greek, Cyrillic and the International Phonetic Alphabet. Characters a font does not have (for example Arabic or Asian
scripts, or Greek and Cyrillic in Lexend Deca and Atkinson Hyperlegible) are shown in the system's sans-serif font.

---

## 11. Features for administrators

### Theme settings

- **User defaults** tab: the default font, text size, spacing, contrast, motion and focus for the whole site,
  including visitors and the login page. A user's own choice always wins over the default. (Colour vision has no site
  default, because it is personal.)
- **Information** tab (last tab):
  - the theme version, read from the plugin information;
  - a **Documentation** button, at the top, that opens this guide in a new tab, in the language of the user when the
    guide has been translated into it and in English otherwise. The page also offers the guide as a Markdown file to
    download. Only administrators can open it;
  - a **support summary** with plain-text lines (theme, Moodle, PHP, database and web server versions, theme in use,
    language and the administrator's own accessibility options). The browser adds its window size, pixel ratio, root
    font size and its reduced motion, contrast and forced colours settings. A **Copy** button copies everything to the
    clipboard for a bug report. The summary never contains the site address, file paths or personal data;
  - links to the accessibility options page and to the User defaults tab;
  - the **colour vision test** (see [section 9](#9-colour-vision-filters));
  - a sample of the four **alert** types (success, information, warning and error), as users see them with the current
    options (see [section 6](#6-visual-design-what-every-user-sees)). Screen readers read them as normal text, not as
    alerts;
  - the **font specimens** (see [section 10](#10-fonts-why-these-three));
  - the **licences** of the theme and the fonts, with a link to the official text and to the copy shipped with the
    theme.

### Favicon

The theme brings its own favicon (the small icon in the browser tab), `pix/favicon.ico`. To use your own, upload it
in *Site administration > Appearance > Logos* (**Favicon**): Moodle then shows it instead of the theme's. Replacing
the file `pix/favicon.ico` also works, but the next update of the theme brings the original back.

### Site theme or user choice

- **As the site theme:** everybody gets Accessible, with the site defaults you set.
- **As a choice:** keep your usual site theme and turn on **Allow user themes**. Each user can then choose Accessible
  (and go back) from their accessibility options page, and everybody else keeps the usual look.

### A login link that opens Accessible

When Accessible is a user choice and not the site theme, the login page that people reach from the site address uses
the site theme. A user who relies on Accessible has to log in through a page that may be hard for them to use.

If **Allow theme changes in the URL** is on (`allowthemechangeonurl`), you can give these users a login link that opens
Accessible straight away: `https://your.site/login/index.php?theme=accessible`. The theme is kept in the session, so it
stays after logging in, and until the user logs out it takes priority over the theme chosen in their profile.

Trade-off: the setting must stay on for the link to work, and while it is on anyone can change the theme of their own
session with the parameter. They cannot change it for other people.

### Warnings when users cannot use their options

If **Allow user themes** is off, users cannot choose the theme for themselves. The theme warns about this in two places:

- an alert on the administration notifications page, with a link to the setting;
- a check in **Reports > System status** (Moodle's system status page).

---

## 12. Privacy and data

- **Logged-in users:** each option is stored as a Moodle user preference (`theme_accessible_font`,
  `theme_accessible_fontsize`, and so on). They are declared in the theme's **Privacy API** provider and included in
  the user's data export.
- **Visitors and guests:** the choices are stored in a cookie named `MoodleAccessible` followed by the site's session
  cookie name. It holds the display options only (as JSON), is `HttpOnly` and `SameSite=Lax`, lasts one year, and is
  checked against the list of valid values every time it is read. When options are saved by a logged-in user, the cookie
  mirrors them so the login page shows the last choice. The cookie is deleted when the user logs out, so on a shared
  computer the next person neither sees nor inherits those options. A visitor who never logs in keeps the cookie,
  so on public computers (libraries, classrooms) set the browser to clear its data on exit or to open guest or
  private windows; otherwise the next person sees the page with those options until they change them. **Mention this cookie in your site's privacy and
  cookie policy.**
- **Options page without logging in:** the accessibility options page opens without a session even when **Force users
  to log in** is on, so people can set up the page before they log in. Visitors see only the options form, in the
  login page's layout (no blocks, menus or navigation), and their choices go only to the cookie of their own browser.
- **No external requests:** fonts, icons and filters are all served by your own site.
- **No tracking:** the theme does not collect usage data.

---

## 13. Languages

The theme's texts are available in **seven languages**: English, Spanish, Catalan, French, Italian, German and Brazilian
Portuguese. The translations are available in Moodle's language packs: when a site has the language pack of a language
installed, the theme is shown in that language. The texts and translations were written with AI (Claude). The English,
Spanish and Catalan texts have been reviewed by humans. This guide is available in the same languages.

---

## 14. How the theme was tested

Accessibility claims are only worth what was checked. This is what was checked and how.

### Automated scans

Three scripts using Playwright (a browser automation tool) were run on Moodle 5.2 and Moodle 5.3,
in **Chromium** and **Firefox**:

- A **full scan** over 27 pages (dashboard, course, activities, forums, quiz and quiz attempt, participants,
  gradebook, calendar, administration, forms, login...) at **100%, 125% and 200%** text size, in **normal and high
  contrast**. It checks the contrast of every visible piece of text against its real background (7:1, or 4.5:1 for
  large text), accessible names, landmarks, duplicate ids, heading order and target size.
- A **keyboard scan**: Tab order, focus traps, visible focus indicator and focus hidden behind fixed elements.
- A **contrast scan** of a shorter list of pages, used after every style change.

**Result:** no contrast failures on any page, size, mode or browser. The scans on
Moodle 5.2 and Moodle 5.3 found none at 100%, 125% and 200% text size, in normal or high contrast. The other findings
are listed in [Known limits](#15-known-limits).

The colour vision filters were checked by reading back pixel colours (see [section 9](#9-colour-vision-filters)).

### Automated tests

The theme includes PHPUnit tests (preferences, defaults and cookie validation, hooks, status check, privacy provider,
the support summary, SCSS compilation) and Behat scenarios (the options page for
users and visitors, the administration warning, the Information tab).

They were run on both versions:

| | Moodle 5.2 | Moodle 5.3 |
| --- | --- | --- |
| PHPUnit (61 tests, 332 assertions) | all passed | all passed |
| Behat (17 scenarios, 124 steps) | all passed | **15 passed, 2 failed** |

The two Behat scenarios that fail on Moodle 5.3 are the ones of the administration warning. They fail on the step that
opens *Reports > System status* through the top navigation bar, not on what they check. Moodle 5.3 draws that bar with a
new component and the theme still uses the classic markup (see [Known limits](#15-known-limits)). Pages and
options work; only the test step cannot find the bar.

### Code checks

- **Moodle's plugin checks** (moodle-plugin-ci 4.5), run on Moodle 5.2 and again on 5.3: plugin validation, PHP lint,
  PHPDoc, upgrade savepoints, Mustache templates (rendering and HTML validation), all with no errors or warnings.
- **Coding style:** `phpcs` with Moodle's standard is clean; ESLint reports no errors or warnings on
  `javascript/accessible.js`; stylelint reports none on the SCSS, with a handful of documented exceptions
  (`!important` is deliberate, to beat Boost's styles).
- **Style refactors** are proved harmless with a comparison tool: it compares the computed styles of well over 100,000
  elements before and after a change, and checks that no pair of competing rules changed order.

### WAVE

The main pages were checked with the [WAVE](https://wave.webaim.org/) extension by WebAIM, in Chrome. All of them score
10 out of 10 on WAVE's automated AIM score. The AIM score compares a page with other web pages; as WebAIM itself says, a
high score does not prove that a page is accessible or compliant, which is why the theme was also tested by hand.

### What has not been done

- **Screen readers:** the theme was tested by hand with NVDA. It has not yet been tested with JAWS, VoiceOver or
  TalkBack. The page structure was also checked through the browser's accessibility tree, which is what screen readers
  read.
- **The browser tests did not cover Safari**, and on Moodle 5.3 two Behat scenarios fail (see above).
- **The video player has been checked in Chromium and Firefox without a window**, not by hand in a normal Chrome or
  Firefox window, and not with every kind of content (local video files, audio only, captions, live streams).
- **No testing with users** who are blind, have low vision or have colour vision deficiency.
- **Internal audits only;** no external audit or certification.

Feedback from users and accessibility specialists is the most valuable contribution the project can get.

---

## 15. Known limits

### Content the theme does not control

- **H5P activities** and other **embedded iframes** (videos, external tools, LTI, embedded documents) have their own
  page and styles. The theme cannot change their colours, so high contrast does not reach them. The colour vision filter
  does cover them, with the exceptions listed in [section 9](#9-colour-vision-filters).
- **Text coloured by hand** in course content (colours set in the editor, text pasted from Word or the web) keeps its
  colours, because inline colours beat the theme. A teacher who sets dark text on a pale fill keeps it, even in high
  contrast. Teachers should leave text colour to the theme.
- **Images** keep their pixels: text inside an image is not enlarged, and high contrast does not recolour it (only the
  colour vision filter shifts its colours, as it does for the whole window). Images need a text alternative.
- **The editor's editing area** (TinyMCE) is a separate document. In high contrast it is darkened with a filter, which
  keeps colours roughly right but changes how images look while editing. The saved content is not changed.

### Limits from Moodle itself

- Some core pages skip heading levels (for example from h1 to h3 or h4), and some iframes from H5P, TinyMCE and
  administration pages have no title. These come from Moodle's own markup.
- At 200% text size, the gradebook and the quiz attempt page can still scroll sideways, by Moodle's design.
- At 200% text size, the course management page can scroll sideways, more so with the drawers open.

### Moodle 5.3

Moodle 5.3 draws the primary and secondary navigation bars with a new component (`core/nav`) and the edit-mode switch
with the design system's Switch. The theme still uses the classic markup of Moodle 5.2 for them. It works and is
accessible, but it does not use Moodle's new components yet, and tests that navigate through the top bar with the
standard Behat step ("I select ... from primary navigation") fail with this theme on 5.3. This is planned for a coming
version of the theme.

### Target size

Breadcrumb links, forum post actions (Permalink, Edit, Reply), the previous and next activity links and the course
index links are 31 to 34 px high, below the 44 px of WCAG AAA. Making them larger would make those lists much longer;
this is still being considered.

### Browsers

- The wide scrollbars work in Chromium-based browsers (Chrome, Edge, Opera, Brave). Firefox keeps its own width.
- The theme was tested in Chromium and Firefox. Safari was not tested.

---

## 16. Is Accessible right for your site?

### Choose Accessible when

- Your site has, or may have, **students, teachers or staff who are blind, have low vision or have colour vision
  deficiency**, and you want them to work on their own.
- You have **accessibility obligations** and want a platform built towards WCAG, the standard behind most accessibility
  laws.
- You want to **offer an alternative look** next to your main theme, so that anyone who needs it can switch.
- You want a **calm, readable Moodle** for everybody: no clutter, strong contrast, predictable layout.

### Think twice when

- You need **strong branding**, custom colours, background images or a visual identity: the look of Accessible is
  deliberately plain, and its colours are fixed for contrast.
- Your courses rely mostly on **H5P or external tools**: the theme cannot restyle what runs inside them, so those parts
  keep their own colours and sizes.

### Try it without risk

Install it and turn on **Allow theme changes in the URL** (*Site administration > Appearance > Advanced theme settings*,
setting `allowthemechangeonurl`). Then open your site with `?theme=accessible` added to the address (for example
`https://your.site/my/?theme=accessible`): the theme applies to your session only. Try the options, open your courses at
200% and in high contrast, then **turn the setting off again**, because while it is on anyone who knows the parameter
can change the theme. If you want to keep a login link that opens Accessible, see
[A login link that opens Accessible](#a-login-link-that-opens-accessible): in that case the setting stays on.

---

## 17. Installation and configuration

### Requirements

- **Moodle 5.2 and above.**
- The **Boost** theme, which comes with Moodle.
- No other plugins. No build tools.

### Installation

1. Copy the theme folder into `public/theme/accessible` of your Moodle code (the folder must be named `accessible`; if you
   download the ZIP from GitHub, rename the folder first), or upload the ZIP file from
   *Site administration > Plugins > Install plugins*.
2. Go to *Site administration > Notifications* to finish the installation.
3. Purge the caches if you update the theme by hand.

### Configuration

- **As the site theme:** *Site administration > Appearance > Themes*, then choose Accessible.
- **As a user choice:** turn on **Allow user themes** in *Site administration > Appearance > Advanced theme settings*.
- **Defaults:** in the theme settings, tab **User defaults**, choose the font, text size, spacing, contrast, motion and
  focus for the site.
- **Privacy:** add the visitor cookie to your privacy or cookie policy (see [section 12](#12-privacy-and-data)).

### Updating

Install the new version over the old one and visit *Site administration > Notifications*. Users keep their options.

---

## 18. Credits, licences and sources

### Credits

By **Fernando Acedo** and the former **Koditik dev team**. Claude Code helped to write parts of the theme, reviewed it and helped to
test the theme. Claude is a trademark of Anthropic, PBC.

[Source code and releases](https://github.com/f-acedo/moodle-theme_accessible). Bug reports and suggestions: [issue tracker](https://github.com/f-acedo/moodle-theme_accessible/issues).

### Licences

- Accessible theme: **GNU General Public License v3 or later** ([official text](https://www.gnu.org/licenses/gpl-3.0.html); copy in `LICENSE.txt`).
- Accessible fonts: **SIL Open Font License 1.1** ([official text](https://openfontlicense.org/open-font-license-official-text/); copies in `fonts/LICENSE-*.txt`).
  - Lexend Deca: Copyright 2019 The Lexend Project Authors.
  - Atkinson Hyperlegible: Copyright 2020 Braille Institute of America, Inc.
  - OpenDyslexic: Copyright 2019 Abbie Gonzalez, Reserved Font Name OpenDyslexic.

### Sources

Standards and laws:

- [Web Content Accessibility Guidelines (WCAG) 2.1](https://www.w3.org/TR/WCAG21/), W3C.
- [Understanding WCAG 2.1: conformance levels](https://www.w3.org/WAI/WCAG21/Understanding/conformance), W3C.
- [Web Accessibility Directive (EU) 2016/2102](https://eur-lex.europa.eu/eli/dir/2016/2102/oj).
- [European Accessibility Act, Directive (EU) 2019/882](https://eur-lex.europa.eu/eli/dir/2019/882/oj).
- [EN 301 549, ETSI](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility).
- [Section 508 standards](https://www.access-board.gov/ict/), US Access Board.
- [ADA Title II web rule (2024)](https://www.ada.gov/resources/2024-03-08-web-rule/), US Department of Justice.

Users:

- [World report on vision](https://www.who.int/publications/i/item/9789241516570), World Health Organization, 2019.
- [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/).

Fonts:

- [Lexend](https://www.lexend.com/) and [Lexend on GitHub](https://github.com/googlefonts/lexend).
- [Atkinson Hyperlegible, Braille Institute](https://www.brailleinstitute.org/freefont/).
- [OpenDyslexic](https://opendyslexic.org/about) and
  [OpenDyslexic on Wikipedia](https://en.wikipedia.org/wiki/OpenDyslexic).

Colour vision:

- Machado, G. M., Oliveira, M. M. and Fernandes, L. A. F. (2009), [*A physiologically-based model for simulation of
  color vision deficiency*](https://doi.org/10.1109/TVCG.2009.113), IEEE Transactions on Visualization and Computer Graphics.

---

## Appendix A. Technical reference

For specialists who want the details before installing the theme: how the colour vision filters are built and what the
checks showed, how far the high contrast checks went, and where the bundled fonts come from and what the research says
about them. Sections 8, 9, 10 and 15 give the same information in plain terms.

### A.1 Colour vision filters: implementation and checks

User option at `/theme/accessible/preferences.php`: **Colour vision** (type) and **Strength**.

#### How it works

- Types: none, protan (red-weak or red-blind), deutan (green-weak or green-blind), tritan (blue-weak or blue-blind) and mono (no colour, only greys).
- Strength: mild (the "-anomaly" types), medium, strong (the "-anopia" types). Mono ignores it.
- The choice is stored as the user preferences `theme_accessible_colortype` and `theme_accessible_colorstrength`
  (`classes/preferences.php`) and reaches the page as body classes: `accessible-colortype-X` and
  `accessible-colorstrength-Y`.
- `templates/colorfilters.mustache` holds nine SVG filters (3 types x 3 strengths) and the mono one. It is included in
  `templates/drawers.mustache`. The CSS (end of `scss/styles.scss`) applies the matching filter through a layer.
- The layer is `body::after`: a fixed box that covers the window, with `pointer-events: none` and
  `backdrop-filter: url(#accessible-colortype-X-Y)`. It recolours everything drawn below it: the page, images, video
  elements, H5P and **third-party embeds** (YouTube, Vimeo, LTI). It adds no markup, clicks go through it, it has no
  content for assistive technology, and it is hidden when printing.
- Why not a filter on the page itself: a filter on `<html>` does not reach cross-origin iframes in Chromium (a paused
  YouTube frame came out identical with and without it), and a filter on `<body>` would make it the containing block of
  the fixed navbar and drawers and break their position.
- Where the browser cannot use `url()` in `backdrop-filter`, the old rule applies (`filter` on `<html>`). In that case
  third-party embeds keep their own colours.
- What the layer does not recolour, because the browser draws it above everything: **fullscreen video** and native
  `<dialog>` modals opened with `showModal()`. Moodle's own modals are normal elements and are covered. Screenshots
  taken by browser tools (not by the operating system) may also leave the effect out.

#### The matrices

Each filter is one 3x3 `feColorMatrix` (applied in linear RGB, the SVG default):

1. Simulation of the missing cone: the Machado et al. (2009) matrix for full dichromacy, scaled by strength
   `S = (1 - s) * I + s * M`, with s = 0.4 (mild), 0.7 (medium), 1.0 (strong).
2. Correction (the usual "daltonize" step): the part of the colour the user cannot see, `I - S`, is moved into the
   channels they can still see: red error into green and blue for protan and deutan, blue error into red and green for
   tritan. Result: `C = I + shift * (I - S)`.

Every row of `C` sums to 1, so white, grey and black are unchanged. The matrices were computed by hand (there is no
build step); recompute them if the maths changes.

The matrices come from published values, not from a clinical validation. Treat the filter as an aid, not a medical
tool.

#### Test

Eight swatches (white, black, grey, red, green, blue, yellow, orange-red) were drawn over the dashboard for each
combination and their pixels read from a screenshot. Values are RGB.

| Type | Result |
|---|---|
| None | Unchanged: red (255,0,0), green (0,255,0), blue (0,0,255) |
| Protan | Red becomes pink: mild (255,121,134), medium (255,157,173), strong (255,184,203). Green gets darker. |
| Deutan | Red becomes pink-magenta: mild (255,72,118), medium (255,95,153), strong (255,112,180). |
| Tritan | Blue becomes light purple: mild (141,103,255), medium (182,134,255), strong (213,158,255). Yellow shifts towards green. |
| Mono | All swatches grey (R = G = B), e.g. red (127,127,127), green (220,220,220), blue (76,76,76). |

- White (255,255,255), black (0,0,0) and grey (128,128,128) were unchanged in every combination.
- Each strength level moves the colours further than the previous one.
- The shifts make colours that look alike to the user differ in lightness or hue.

#### Not done

- No clinical validation of the matrices.
- No per-colour exceptions: images and video are filtered too.
- Fullscreen video and native modal dialogs are not filtered (see above). The operating system's own colour filters
  (Windows, macOS, iOS, Android) cover them.
- Performance on weak machines (a layer over the whole window) was not measured. On a desktop test the scroll rate was
  about 54 frames per second with the layer, 59 with the old filter and 61 with no colour option.

### A.2 High contrast: scope of the checks

What high contrast cannot change is listed in [section 15](#15-known-limits).

The contrast was checked with an automated scan (text at 7:1, large text at 4.5:1) at 100%, 125% and 200% text size,
with the colour vision filter on, in modals, and on the dashboard, course, calendar, participants, quiz and quiz attempt
pages.

### A.3 Fonts: history and research

The Accessible theme bundles three fonts and lets each user choose one: **Lexend Deca** (the default), **Atkinson
Hyperlegible** and **OpenDyslexic**. This part tells where each one comes from, what its designers wanted to achieve,
what the research says, and why fonts like these are offered on sites for people with low vision or dyslexia. All three
are bundled with the theme (no request to an external font service) and licensed under the SIL Open Font License 1.1.

#### What makes a font easier to read

No font makes reading easy for everybody, and the research on "accessible fonts" is smaller and more mixed than the
marketing around it. These are the design ideas that appear again and again, with what is known about each:

- **Letters that cannot be confused.** Many typefaces draw capital **I**, lowercase **l** and the number **1** almost
  the same, and the same happens with **O** and **0**, **B** and **8**, or **rn** and **m**. A reader with low vision, who
  sees the shapes blurred or enlarged, cannot use the context to guess. Drawing these characters differently is the
  main idea of Atkinson Hyperlegible.
- **Open shapes.** Wide openings in letters such as **a**, **c**, **e** and **s** stay readable when the image is blurred
  or magnified.
- **Generous spacing.** Letters that are too close interfere with each other, an effect called *crowding*. In a
  2012 study of 74 dyslexic children aged 8 to 14 (Zorzi and colleagues, published in PNAS), extra-large letter spacing
  made reading about 20% faster and halved the errors, while extra line spacing alone had no effect. Wide spacing is
  also the starting point of Lexend, and the theme offers it as a separate option, apart from the font.
- **Sans-serif, upright letters.** Guidance for dyslexia, such as the British Dyslexia Association's style guide,
  usually recommends plain sans-serif fonts, and an eye-tracking study of 48 dyslexic readers (Rello and Baeza-Yates,
  2013) found that sans-serif, monospaced and roman (not italic) fonts performed better than serif, proportional and
  italic ones. Later reviews are more careful: Dyslexia Scotland reports no consistent advantage of sans-serif over serif
  fonts, and says spacing is a stronger factor than the letter shapes.
- **Preference counts.** Readers often read best in the font they are used to and like. That is why the theme offers a
  choice instead of one prescribed font.

Font is only one part of legibility. Size, spacing, contrast and the freedom to change them matter at least as much, and
the theme has an option for each (see the options page and sections 5 and 8 of the guide).

#### Lexend Deca (the default)

**History.** Lexend is the work of Dr Bonnie Shaver-Troup, an educational therapist, and the type designer Thomas
Jockin. They developed it around 2018 from her work with struggling readers, and it was released on
[Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) in 2019. It is based on
[Quicksand](https://fonts.google.com/specimen/Quicksand), a typeface started by Andrew Paglinawan in 2008. The family has
seven widths, from **Deca** (the narrowest) to Zetta (the widest), so that the letter spacing can be changed without
changing the font. Since June 2021 all the fonts are variable fonts with a weight axis.

**The idea.** Wide, even letter spacing and simple, open shapes, to make reading more fluent. Moodle is a dense
interface, so the theme uses **Deca**, which keeps the generous spacing but stays compact enough for menus and forms.

**What the evidence says.** The designers report better reading speed in their own tests. The best-known study is small
(20 third-grade pupils reading for one minute in five fonts) and comes from the designers' side. We found no independent
replication. The theme therefore offers Lexend Deca as a readable default, not as a proven aid.

#### Atkinson Hyperlegible

**History.** The Braille Institute of America created it for people with low vision and released it in 2019, the year of
the institute's centenary. It was designed by the agency Applied Design Works as part of the institute's new brand, and
it is named after the institute's founder, J. Robert Atkinson. It won Fast Company's 2019 Innovation by Design award and
entered the permanent collection of the Cooper Hewitt, Smithsonian Design Museum. It later became available on Google
Fonts, and in 2025 the institute released **Atkinson Hyperlegible Next**, with more weights and wider language support,
and a monospaced version. The theme bundles the original version in regular and bold.

**The idea.** Most typefaces aim for uniform letters. Atkinson Hyperlegible does the opposite: it keeps a conventional
sans-serif base and adds differences only where two characters are easy to mix up:

- the lowercase **l** gets a tail and the number **1** a hook, so they differ from each other and from the capital **I**,
  which has serifs;
- **B** and **8**, **O** and **0** and other pairs get different shapes, wider openings and angled endings;
- letters are spaced so that their edges do not touch.

The price is an irregular look: serifs appear in some letters and not in others, and some angles are exaggerated. For
reading the theme's interface that is the point, because the letters are meant to be told apart, not to be elegant.

**What the evidence says.** It is the font most directly designed for the low-vision users this theme serves, and its
design logic is easy to understand. We found no published study that measures its effect on reading with a group of
readers, so the claim rests on the design and on the institute's own work.

#### OpenDyslexic

**History.** Abbie Gonzalez, who has dyslexia, created OpenDyslexic and released it in 2011 as an open-source font,
derived from Bitstream Vera Sans.

**The idea.** The letters have **heavier bottoms**. The author says that the weight gives each letter a clear "down", which
helps readers recognise it and keeps them from mentally flipping or rotating letters such as b, d, p and q. Letter
shapes are also made more distinct, and the spacing is wider.

**What the evidence says.** The studies we found do not support the claim that it improves reading: a study of reading
rate and accuracy (Wery and Diliberto, 2017) found no improvement over other fonts, and a later eye-tracking study by
Rello and Baeza-Yates (2016) found that it did not do better than common sans-serif fonts such as Arial or Verdana. Many
people with dyslexia still prefer it, and preference matters, so the theme offers it as a choice and not as a
recommendation.

#### Why fonts like these are offered on sites for low vision and dyslexia

1. **The cost is small and the benefit can be large for some people.** Changing the font costs nothing in a theme. For a
   person who finds one font clearly easier, it can be the difference between reading and giving up.
2. **People differ.** Low vision has many causes (loss of the centre or the edge of the field, blur, sensitivity to glare),
   and dyslexia does not look the same in every reader. A single "best" font does not exist, so the sensible answer is
   a short list of well-designed fonts that each person can try.
3. **The three fonts cover three approaches:** open, evenly spaced letters (Lexend Deca), letters that are told apart by
   design (Atkinson Hyperlegible) and letters with a distinct "weight" (OpenDyslexic). A user can compare them on the
   same page.
4. **Honesty about the evidence.** Only the effect of spacing is well supported. For each font the theme says what its
   designers intended and what is known, and it does not promise a result.

The user decides, and the administrator can set the default font for the whole site (tab **User defaults** of the theme
settings). The Information tab shows a specimen of every font, including the confusable characters.

#### Sources

- Braille Institute: [press release about Atkinson Hyperlegible](https://prnewswire.com/news-releases/braille-institute-launches-new-award-winning-typeface-designed-to-improve-legibility-for-readers-with-low-vision-301012698.html)
  and [its availability on Google Fonts](https://prnewswire.com/news-releases/braille-institutes-atkinson-hyperlegible-typeface-now-available-on-google-fonts-301349120.html);
  [Atkinson Hyperlegible on GitHub](https://github.com/googlefonts/atkinson-hyperlegible).
- Cooper Hewitt, Smithsonian Design Museum: [Atkinson Hyperlegible in the collection](https://collection.cooperhewitt.org/objects/2318809952).
- [Lexend on GitHub](https://github.com/googlefonts/lexend/) and [lexend.com](https://www.lexend.com/).
- Gonzalez, A.: [OpenDyslexic](https://opendyslexic.org/about).
- Wery, J. J. and Diliberto, J. A. (2017), [The effect of a specialized dyslexia font, OpenDyslexic, on reading rate and accuracy](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5629233/), Annals of Dyslexia.
- Rello, L. and Baeza-Yates, R. (2013), [Good fonts for dyslexia](https://doi.org/10.1145/2513383.2513447), ACM ASSETS.
- Rello, L. and Baeza-Yates, R. (2016), [The effect of font type on screen readability by people with dyslexia](https://doi.org/10.1145/2897736), ACM Transactions on Accessible Computing.
- Zorzi, M. and others (2012), [Extra-large letter spacing improves reading in dyslexia](https://pubmed.ncbi.nlm.nih.gov/22665803/), PNAS.
- Dyslexia Scotland: [Dyslexia-friendly typed formats](https://dyslexiascotland.org.uk/dyslexia-friendly-typed-formats).
- Dezeen: [Atkinson Hyperlegible](https://www.dezeen.com/awards/2020/longlists/atkinson-hyperlegible-typeface-for-people-with-low-vision/).
