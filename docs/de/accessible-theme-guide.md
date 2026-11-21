# Das Theme Accessible für Moodle: der vollständige Leitfaden

Version 1.0.0 (stabil), für Moodle 5.2 und höher.

Dieser Leitfaden erklärt, was das Theme Accessible ist, warum es existiert, welchen Standards es folgt, jede Funktion, die es hinzufügt, die mitgelieferten Schriften und warum sie gewählt wurden, wie es getestet wurde und was es nicht leisten kann. Er richtet sich an alle, die entscheiden müssen, ob sie es ausprobieren: Administrierende der Website, Barrierefreiheitsbeauftragte, Lehrkräfte, Supportpersonal und die Nutzenden selbst.

## Inhalt

1. [Was Accessible ist](#1-was-accessible-ist)
2. [Warum es dieses Theme gibt](#2-warum-es-dieses-theme-gibt)
3. [Gestaltungsprinzipien](#3-gestaltungsprinzipien)
4. [Standards und rechtlicher Rahmen](#4-standards-und-rechtlicher-rahmen)
5. [Persönliche Barrierefreiheitsoptionen](#5-persönliche-barrierefreiheitsoptionen)
6. [Visuelles Design: was alle Nutzenden sehen](#6-visuelles-design-was-alle-nutzenden-sehen)
7. [Screenreader und Tastaturnutzung](#7-screenreader-und-tastaturnutzung)
8. [Modus mit hohem Kontrast](#8-modus-mit-hohem-kontrast)
9. [Farbsehfilter](#9-farbsehfilter)
10. [Schriften: warum diese drei](#10-schriften-warum-diese-drei)
11. [Funktionen für Administrierende](#11-funktionen-für-administrierende)
12. [Datenschutz und Daten](#12-datenschutz-und-daten)
13. [Sprachen](#13-sprachen)
14. [Wie das Theme getestet wurde](#14-wie-das-theme-getestet-wurde)
15. [Bekannte Grenzen](#15-bekannte-grenzen)
16. [Ist Accessible das Richtige für Ihre Website?](#16-ist-accessible-das-richtige-für-ihre-website)
17. [Installation und Konfiguration](#17-installation-und-konfiguration)
18. [Credits, Lizenzen und Quellen](#18-credits-lizenzen-und-quellen)

Anhang A. [Technische Referenz](#anhang-a-technische-referenz)

---

## 1. Was Accessible ist

Accessible ist ein Theme für **Moodle 5.2 und höher**. Es ist ein Kind-Theme von **Boost**, dem Standard-Theme von Moodle. Es behält also Layout, Navigation und Verhalten von Boost bei und ändert, wie sie aussehen, wie sie skalieren und wie sie angesagt werden.

Es ist für drei Gruppen von Menschen gemacht:

- **Blinde Menschen**, die einen Screenreader verwenden (etwa NVDA, JAWS, VoiceOver oder TalkBack). Für sie zählen die Reihenfolge, in der die Seite vorgelesen wird, die Namen von Schaltflächen und Navigationsbereichen und die Möglichkeit, alles mit der Tastatur zu bedienen.
- **Menschen mit Sehbehinderung**, zum Beispiel jemand mit etwa 30 % des normalen Sehvermögens, der eine Bildschirmlupe, den Browser-Zoom oder Speziallinsen verwendet. Für sie zählen Kontrast, Größe, eine klare Fokusanzeige und ein Layout, das nicht auseinanderfällt, wenn alles vergrößert wird.
- **Menschen mit Farbsehschwäche** (Farbenblindheit oder „Daltonismus“). Für sie zählt, dass keine Information allein durch Farbe vermittelt wird und dass Farben, die ähnlich aussehen, unterscheidbar gemacht werden können.

Das Ziel ist, dass diese Menschen Moodle selbstständig **wahrnehmen und bedienen** können, und nicht nur, dass die Seiten eine automatisierte Prüfliste bestehen.

Accessible lässt sich auf zwei Arten einsetzen: als **Theme der Website** für alle oder als **alternatives Theme**, das jede Person für sich wählen kann, während alle anderen das gewohnte Aussehen der Website behalten.

---

## 2. Warum es dieses Theme gibt

### Die Nutzenden

Sehprobleme sind häufig. Der [*World report on vision*](https://www.who.int/publications/i/item/9789241516570) (2019) der Weltgesundheitsorganisation schätzt, dass **mindestens 2,2 Milliarden Menschen** weltweit eine Seheinschränkung in der Nähe oder in der Ferne haben. Eine Farbsehschwäche betrifft laut [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/) etwa **1 von 12 Männern und 1 von 200 Frauen**. In jeder Schule, Hochschule oder Firma, die Moodle nutzt, gehören einige Studierende, Lehrende und Mitarbeitende zu diesen Gruppen, ob sie es jemandem gesagt haben oder nicht.

### Moodle und Barrierefreiheit

Moodle nimmt Barrierefreiheit ernst: Der Kern wird mit Blick auf Barrierefreiheit entwickelt und gegen die WCAG geprüft. Boost, das Standard-Theme, ist eine solide Grundlage. Ein Allzweck-Theme muss jedoch viele Ziele gleichzeitig abwägen: Branding, visuelle Gestaltung, Informationsdichte und die Bedürfnisse der durchschnittlichen Nutzenden. Manche Entscheidungen, die für die meisten Menschen passen, sind für die Nutzenden, für die dieses Theme gemacht ist, schwierig:

- Hellgrauer Text und dünne Rahmen, die die höheren Kontraststufen nicht erreichen.
- Hellblaue oder graue Füllungen zur Anzeige von Zuständen (ausgewählt, Hover, deaktiviert), die bei Sehbehinderung oder unter einer Lupe schwer zu erkennen sind.
- Kleine Ziele (Symbole, Links in Zeilen), die bei Tremor oder unter Vergrößerung schwer zu treffen sind.
- Pixelbasierte Größen und Breakpoints, die nicht mitwachsen, wenn die Nutzenden eine größere Textgröße wählen.
- Hinweise, deren Bedeutung weitgehend von ihrer Farbe abhängt.

Die meisten Themes gehen von einem visuellen Entwurf aus und beheben Barrierefreiheitsprobleme hinterher, Beschwerde für Beschwerde. Accessible geht umgekehrt vor: **Die Zielgruppe stand an erster Stelle**, und jede Entscheidung über Farbe, Größe, Reihenfolge und Wortwahl wurde für sie getroffen.

### Kein Ersatz für gute Inhalte

Ein Theme steuert den Rahmen um die Inhalte: Menüs, Schaltflächen, Formulare, Hinweise, Navigation. Es kann nicht umschreiben, was Lehrkräfte in ihre Kurse stellen. Ein Bild ohne Textalternative, ein als Bild gescanntes PDF oder ein Video ohne Untertitel bleibt unabhängig vom Theme unzugänglich. Accessible macht die Plattform so klar wie möglich; die Kursinhalte erfordern weiterhin Sorgfalt ihrer Autorinnen und Autoren (siehe [Bekannte Grenzen](#15-bekannte-grenzen)).

---

## 3. Gestaltungsprinzipien

Fünf Regeln leiten jeden Teil des Themes.

1. **Schlicht und kontrastreich als Standard.** Der Hintergrund ist überall weiß und der Text schwarz. Links sind schwarz und unterstrichen (beim Hover mit dickerer Linie), nicht blau oder violett. Dekoration, die nicht hilft, wird entfernt, und was notwendig ist, wird deutlicher gemacht.
2. **Farbe ist nie das einzige Signal.** Jeder Zustand, den Moodle mit Farbe zeigt, hat auch eine Form, ein Muster, ein Symbol oder ein Wort. Hinweise kombinieren zum Beispiel einen farbigen Rahmen, einen Musterstreifen, ein Symbol und die ausgeschriebene Art der Meldung.
3. **Farbige Rahmen, keine farbigen Füllungen.** Hinweise und Statusmeldungen behalten den weißen Hintergrund und zeigen ihre Farbe als Rahmen. Eine helle farbige Füllung senkt den Kontrast des Textes darauf; ein Rahmen tut das nicht.
4. **Alles skaliert mit dem Text.** Größen sind relativ (in `rem`), sodass eine größere Textgröße ein größeres Moodle ergibt, in dem Symbole, Schaltflächen, Formularfelder, Drawer und Touch-Ziele mit dem Text mitwachsen.
5. **Die Person entscheidet.** Schriftart, Textgröße, Abstand, Kontrast, Bewegung, Fokus und Farbsehen sind persönliche Optionen. Die Administration der Website legt sinnvolle Standardwerte fest, und jede Person kann sie ändern.

---

## 4. Standards und rechtlicher Rahmen

### WCAG 2.1

Die [**Web Content Accessibility Guidelines (WCAG) 2.1**](https://www.w3.org/TR/WCAG21/) sind der internationale Maßstab für Barrierefreiheit im Web. Sie werden vom [World Wide Web Consortium (W3C)](https://www.w3.org/WAI/) veröffentlicht und folgen vier Prinzipien: Inhalte müssen *wahrnehmbar*, *bedienbar*, *verständlich* und *robust* sein. Jedes Erfolgskriterium hat eine Stufe:

- **Stufe A**: das Minimum.
- **Stufe AA**: die Stufe, die die meisten Gesetze und Vorschriften für den öffentlichen Sektor verlangen.
- **Stufe AAA**: die höchste Stufe. Das W3C [empfiehlt nicht](https://www.w3.org/WAI/WCAG21/Understanding/conformance), AAA für ganze Websites zu verlangen, weil manche Kriterien nicht für alle Inhalte erfüllt werden können.

[WCAG 2.2](https://www.w3.org/TR/WCAG22/) (2023) ergänzt 2.1 um weitere Kriterien, aber viele Gesetze verweisen noch auf WCAG 2.1 Stufe AA.

### Woran sich Accessible orientiert

Accessible nimmt **WCAG 2.1 Stufe AAA** als Ziel für alles, was das Theme darstellt. In der Praxis bedeutet das:

| WCAG-Kriterium | Was es verlangt | Was das Theme tut |
|---|---|---|
| [1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced), AAA | 7:1 für normalen Text, 4,5:1 für großen Text | Alle Farben des Themes sind für 7:1 oder mehr gewählt, im normalen und im hohen Kontrast. Mit automatisierten Scans gemessen (siehe [Abschnitt 14](#14-wie-das-theme-getestet-wurde)). |
| [1.4.11 Non-text Contrast](https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast), AA | 3:1 für Ränder von Bedienelementen, Fokusanzeigen und Grafiken, die Bedeutung tragen | Schwarze 2-px-Rahmen an Feldern, Kontrollkästchen und Optionsfeldern; schwarzer Fokusring mit weißem Lichthof. |
| [1.4.1 Use of Colour](https://www.w3.org/WAI/WCAG21/Understanding/use-of-color), A | Farbe ist nicht das einzige Mittel zur Vermittlung von Information | Hinweise haben Rahmen + Muster + Symbol + Wort; deaktivierte Bedienelemente haben einen gestrichelten Rand; ausgewählte Elemente sind fett oder invertiert. |
| [1.4.4 Resize Text](https://www.w3.org/WAI/WCAG21/Understanding/resize-text), AA, und [1.4.10 Reflow](https://www.w3.org/WAI/WCAG21/Understanding/reflow), AA | Text lässt sich auf 200 % vergrößern und die Seite wird neu umbrochen | Option für die Textgröße bis 200 %, alles in `rem`, Zeilen dürfen umbrechen. Einige Moodle-Seiten scrollen bei 200 % noch seitwärts (siehe [Bekannte Grenzen](#15-bekannte-grenzen)). |
| [1.4.8 Visual Presentation](https://www.w3.org/WAI/WCAG21/Understanding/visual-presentation), AAA | Zeilenabstand, kein Blocksatz, vom Nutzenden wählbare Farben | Zeilenhöhe 1,6, Abstandsoptionen, Blocksatz wird linksbündig (am Zeilenanfang) dargestellt, Option für hohen Kontrast. |
| [1.4.12 Text Spacing](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing), AA | Die Seite übersteht größere Zeilen-, Buchstaben- und Wortabstände | Die Abstandsoption „Extra weit“ wendet genau die WCAG-Werte an (0,12 em Buchstaben, 0,16 em Wörter) und mehr Zeilenhöhe. |
| [2.3.3 Animation from Interactions](https://www.w3.org/WAI/WCAG21/Understanding/animation-from-interactions), AAA | Bewegung lässt sich abschalten | Option für reduzierte Bewegung; die Systemeinstellung `prefers-reduced-motion` wird ebenfalls beachtet. |
| [2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/Understanding/bypass-blocks), A | Wiederkehrende Inhalte überspringen | Link „Zum Hauptinhalt springen“ auf jeder Seite an erster Stelle; Hauptinhalt vor den Blöcken. |
| [2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/Understanding/focus-visible), AA | Der Tastaturfokus ist sichtbar | 4-px-Fokusring (8 px mit der Option „Dick“) anstelle der Browser-Vorgabe. |
| [2.5.5 Target Size](https://www.w3.org/WAI/WCAG21/Understanding/target-size), AAA | Ziele von mindestens 44 × 44 CSS-Pixeln | Schaltflächen und Formularelemente sind mindestens 44 px groß; Felder 55 px. Einige Linkzeilen von Moodle sind noch kleiner (siehe [Bekannte Grenzen](#15-bekannte-grenzen)). |
| [4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/Understanding/name-role-value), A | Bedienelemente und Bereiche haben Namen | Jeder Navigationsbereich hat einen Namen; die Schaltfläche zum Anzeigen des Kennworts meldet ihren Zustand. |

### Gesetze und Vorschriften für den öffentlichen Sektor

Viele Barrierefreiheitsgesetze beruhen auf WCAG 2.1 Stufe AA, meist über andere Standards:

- **Europäische Union.** Die [*Richtlinie über den barrierefreien Zugang zu den Websites und mobilen Anwendungen öffentlicher Stellen*](https://eur-lex.europa.eu/eli/dir/2016/2102/oj) (Richtlinie (EU) 2016/2102) betrifft Websites und Apps des öffentlichen Sektors. Der [*European Accessibility Act*](https://eur-lex.europa.eu/eli/dir/2019/882/oj) (Richtlinie (EU) 2019/882) gilt ab dem 28. Juni 2025 für viele private Produkte und Dienstleistungen. Beide stützen sich auf die harmonisierte Norm [**EN 301 549**](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility), die für Webinhalte WCAG 2.1 Stufe AA einschließt.
- **Vereinigte Staaten.** [**Section 508**](https://www.access-board.gov/ict/) des Rehabilitation Act betrifft Bundesbehörden und verweist auf WCAG 2.0 Stufe AA. Im April 2024 hat das Justizministerium [**WCAG 2.1 Stufe AA**](https://www.ada.gov/resources/2024-03-08-web-rule/) als technischen Standard für die Websites von Bundesstaaten und Kommunen nach Title II des Americans with Disabilities Act (ADA) übernommen. Eine Interim Final Rule vom April 2026 hat die Fristen um ein Jahr verschoben (April 2027 für Einrichtungen, die 50.000 oder mehr Menschen versorgen, April 2028 für kleinere); die aktuellen Fristen finden Sie auf [ada.gov](https://www.ada.gov/).
- Andere Länder haben ähnliche Regeln, die meisten davon auf Grundlage der WCAG.

**Was das für Sie bedeutet:** Accessible ist für die Teile, die es steuert, auf WCAG 2.1 AAA ausgerichtet, also über der Stufe AA, die diese Gesetze verlangen. **Das Theme wurde jedoch weder formal geprüft noch zertifiziert**, und Konformität ist eine Eigenschaft einer ganzen Website (Plattform, Plugins und Inhalte), nicht eines Themes. Accessible bietet Ihnen eine starke Grundlage; es ersetzt keine Barrierefreiheitsprüfung Ihrer eigenen Website und Ihrer Kurse.

---

## 5. Persönliche Barrierefreiheitsoptionen

Jede nutzende Person, auch nicht angemeldete Besucherinnen und Besucher, hat eine **Seite mit Barrierefreiheitsoptionen**. Sie ist erreichbar über:

- die **Barrierefreiheit-Schaltfläche** (das Symbol für universellen Zugang), die immer in der oberen Leiste jeder Seite vorhanden ist;
- dieselbe Schaltfläche in der oberen rechten Ecke der **Anmeldeseite**;
- das **Profil** der Person (Link „Barrierefreiheit“) und die Seite **Einstellungen**.

Jede Option erklärt, was sie bewirkt. Sie können speichern und zurückkehren, speichern und auf der Seite bleiben, abbrechen oder die Standardwerte der Website wiederherstellen.

### Schriftart

Drei Schriften, alle mit dem Theme mitgeliefert: **Lexend Deca** (die Vorgabe), **Atkinson Hyperlegible** und **OpenDyslexic**. Warum gerade diese drei, steht in [Abschnitt 10](#10-schriften-warum-diese-drei).

### Textgröße

**100 %, 125 %, 150 % oder 200 %.** Die Option ändert die Schriftgröße des Wurzelelements, und weil jede Größe im Theme in `rem` angegeben ist, wächst die ganze Seite mit: Text, Symbole, Schaltflächen, Formularfelder, Kontrollkästchen, Drawer, Bildlaufleisten und Touch-Ziele. Das unterscheidet sich vom Browser-Zoom, der ebenfalls funktioniert: Die Option für die Textgröße behält die Fensterbreite bei und lässt das Layout neu umbrechen. Sie eignet sich daher für Menschen, die größeren Text wollen, ohne das Layout zu verlieren.

Bei größeren Stufen passt sich das Layout an: Die obere Leiste umbricht in zwei Zeilen und blendet sich, wenn sie mehr als ein Viertel des Fensters einnehmen würde, beim Scrollen nach unten aus; sie kehrt oben auf der Seite zurück oder wenn der Fokus in sie wechselt. Das Hauptmenü wandert früher in die Menüschaltfläche (☰), damit die Leiste Platz für die Seite lässt. Formularbeschriftungen rücken über ihre Felder, Menüs umbrechen, Profilkarten werden einspaltig, lange Menüs erhalten eine maximale Höhe, damit sie auf dem Bildschirm bleiben, die Leiste mit Speichern und Abbrechen langer Formulare bleibt am Ende des Formulars, statt es zu verdecken, und lange Wörter in den Abschnittsüberschriften von Formularen werden mit Bindestrich getrennt, statt die Seite seitwärts scrollen zu lassen.

Auf kleinen Bildschirmen ist die Textgröße begrenzt, damit jede Zeile noch genug Wörter enthält: bis 150 % auf Bildschirmen schmaler als 768 px (kleine Tablets) und bis 125 % unter 480 px (Smartphones). Größere Bildschirme erhalten die gewählte Größe.

### Textabstand

- **Normal:** Zeilenhöhe 1,6.
- **Weit:** Zeilenhöhe 1,8, leicht größerer Buchstaben- und Wortabstand.
- **Extra weit:** Zeilenhöhe 2, Buchstabenabstand 0,12 em, Wortabstand 0,16 em und mehr Platz nach Absätzen. Das sind die Werte von [WCAG 1.4.12 (Text Spacing)](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing).

Größere Abstände helfen vielen Lesenden mit Sehbehinderung oder Legasthenie, die Zeile nicht zu verlieren.

### Kontrast

- **Normal:** schwarzer Text auf weißem Hintergrund, mit Gelb für Hover und Fokus (die Vorgabe).
- **Hoch:** weißer Text auf schwarzem Hintergrund, mit Gelb für Hover und Fokus. Siehe [Abschnitt 8](#8-modus-mit-hohem-kontrast).

### Bewegung

- **Normal** oder **Reduziert.** Reduzierte Bewegung schaltet Animationen, Übergänge und sanftes Scrollen ab. Ist das Betriebssystem auf reduzierte Bewegung eingestellt, tut das Theme dasselbe, auch wenn die Option „Normal“ ist. Das hilft Menschen mit vestibulären Störungen und Lupennutzenden, die den Überblick verlieren können, wenn sich die Seite bewegt.

### Fokusrahmen

- **Normal:** ein 4-px-Ring um das Element, das den Tastaturfokus hat: schwarz mit weißem Lichthof oder, im hohen Kontrast, gelb mit schwarzem Lichthof.
- **Dick:** Der Ring wird 8 px breit und ist unter einer Lupe oder bei Sehbehinderung leichter zu finden.

### Farbsehen

Ein Typ (**Protan**, **Deutan**, **Tritan** oder **keine Farbe**) und eine Stärke (**leicht**, **mittel** oder **stark**). Die Farben der Seite werden so verschoben, dass Farben, die für die Person ähnlich aussehen, unterscheidbar werden. Siehe [Abschnitt 9](#9-farbsehfilter).

### Wo die Auswahl gespeichert wird

- **Angemeldete Nutzende:** als Moodle-Nutzereinstellungen, sodass sie der Person an jeden Computer folgen.
- **Besucherinnen, Besucher und Gäste:** in einem Cookie (siehe [Abschnitt 12](#12-datenschutz-und-daten)).
- **Bei der ersten Anmeldung:** Hat das Konto noch keine eigenen Optionen, wird die als Besuchende getroffene Auswahl in das Konto kopiert, und eine Meldung weist darauf hin. Hat das Konto bereits eigene Optionen, gelten die des Kontos. Kopiert wird nur eine Auswahl aus demselben Besuch, kurz vor der Anmeldung: Optionen, die eine andere Person an einem gemeinsam genutzten Computer im Browser hinterlassen hat, nicht.

### Theme wechseln

Erlaubt die Website den Nutzenden, ihr Theme zu wählen, hat dieselbe Seite eine Theme-Auswahl, die jedes installierte Theme auflistet. Nutzende können Accessible ausprobieren und wieder verlassen, ohne jemanden fragen zu müssen.

---

## 6. Visuelles Design: was alle Nutzenden sehen

Diese Änderungen gelten für alle, die das Theme verwenden, unabhängig von ihren Optionen.

### Farben und Links

- Überall weißer Hintergrund, schwarzer Text.
- Links sind schwarz und unterstrichen; die Linie wird beim Hover dicker. Es gibt kein Blau und kein Violett, und besuchte Links sehen gleich aus, sodass die Farbe eines Links nie entschlüsselt werden muss.
- Gedämpfter (sekundärer) Text ist ein dunkles Grau, das weiterhin 7:1 erreicht, nie die blassen Grautöne eines Standard-Themes.
- Inline-Code wird in einem dunklen Magenta dargestellt, das 7:1 erreicht (das Pink von Bootstrap liegt bei etwa 4,8:1).
- Text, den Autorinnen oder Autoren im Blocksatz gesetzt haben, wird am Zeilenanfang ausgerichtet dargestellt: Blocksatz erzeugt ungleichmäßige Lücken, die für viele Menschen mit Legasthenie oder Sehbehinderung schwer zu lesen sind.

### Fokus

Jedes interaktive Element zeigt bei Tastaturfokus einen schwarzen 4-px-Ring (8 px mit der Option „Dick“); Schaltflächen und Formularfelder erhalten zusätzlich einen weißen Lichthof, der den Ring auf jedem Hintergrund sichtbar hält. Schaltflächen, Menüeinträge und Seitenzahl-Links füllen sich außerdem bei Fokus und Hover gelb, mit schwarzem Text. Im hohen Kontrast ist der Ring selbst gelb, mit schwarzem Lichthof. Das blasse blaue „Leuchten“ von Bootstrap wird entfernt. Die Seite lässt außerdem oben Platz, wenn sie zu einem fokussierten Element scrollt, sodass die feste obere Leiste es nie verdeckt.

### Schaltflächen und Ziele

- Jede Schaltfläche hat eine Mindestgröße von **44 × 44 px** (die WCAG-AAA-Zielgröße) und großzügigen Innenabstand.
- Seitenleisten, etwa der A-bis-Z-Initialenfilter auf der Seite der Teilnehmenden, haben 44-px-Ziele mit einem 2-px-Rahmen; das aktuelle Element ist weiß auf Schwarz und fett; beim Hover erscheint eine gelbe Füllung.
- Deaktivierte Bedienelemente haben eine graue Füllung **und** einen gestrichelten Rand, sie werden also nicht allein durch Farbe gezeigt.

### Formulare

- Textfelder, Dropdown-Menüs, Textbereiche und Schaltflächen sind alle **55 px** hoch.
- Kontrollkästchen und Optionsfelder werden vom Theme gezeichnet: **28 px**, mit einem 2-px-Rand in Schwarz. Aktiviert heißt schwarz mit weißem Haken oder Punkt; deaktiviert heißt gestrichelter Rand und graue Füllung.
- Pflichtfelder behalten ein deutliches Sternchen, und Validierungsmeldungen erscheinen nur bei einem Fehler, mit Rahmen und neben dem Feld.
- Der Schalter für den Bearbeitungsmodus in der oberen Leiste ist ausgeschaltet eine weiße Schiene mit schwarzem Knopf und eingeschaltet eine schwarze Schiene mit weißem Knopf, sodass sein Zustand außer durch Farbe auch durch Position und Form gezeigt wird.

### Hinweise und Benachrichtigungen

Die Hinweise von Moodle (Fehler, Warnung, Erfolg, Information) sind so umgestaltet, dass ihre Bedeutung nie von der Farbe abhängt:

- ein **weißer Hintergrund** (keine getönte Füllung), sodass der Text den vollen Kontrast behält;
- ein **farbiger Rahmen** in der Farbe des Hinweises;
- ein **Musterstreifen** links, für jede Art anders;
- ein **Symbol** neben der ersten Textzeile;
- die **Art in Fettschrift** vor der Meldung: „Fehler:“, „Warnung:“, „Erfolg:“, „Information:“;
- ein Tooltip über Streifen und Symbol mit der Art des Hinweises.

Wer gar keine Farben sieht oder einen Screenreader verwendet, erhält trotzdem die Art der Meldung. Hinweise, die andere Plugins mit einfachem Alert-Markup schreiben, erhalten ebenfalls Rahmen, Muster und Symbol (aber nicht das ausgeschriebene Wort, das aus den eigenen Hinweis-Vorlagen des Themes stammt).

### Bildlaufleisten

Bildlaufleisten sind überall **24 px** breit, mit schwarzem Schieber auf einer umrahmten weißen Spur: Seite, Drawer und Tabellen. Sie haben bewusst keinen Hover- oder Zieheffekt: Eine Bildlaufleiste, die unter dem Zeiger Größe oder Farbe ändert, springt bei Menschen mit Tremor oder Lupe herum. Die Breite funktioniert in Chrome, Edge und anderen Chromium-Browsern; Firefox behält seine eigene Breite, verwendet aber die Farben.

### Kopf- und Fußbereich

- Die obere Leiste zeigt nur, was wichtig ist, und ist in jedem Modus schwarz mit weißem Text.
- Der Fußbereich ist immer sichtbar und kurz: Die schwebenden Hilfe- und Kommunikationsschaltflächen, die Zeile „Sie sind angemeldet als“ und die Moodle-Version sind entfernt. Links, die Plugins hinzufügen (zum Beispiel die Übersicht zur Datenaufbewahrung), bleiben erhalten.
- Avatare mit Initialen (die farbigen Kreise mit Buchstaben) sind ausgeblendet, außer wenn sie der Link zu einem Profil sind; Nutzerfotos bleiben.

---

## 7. Screenreader und Tastaturnutzung

Accessible wurde mit dem Accessibility Tree des Browsers und mit Tastatur-Scans geprüft (siehe [Abschnitt 14](#14-wie-das-theme-getestet-wurde)). Die Änderungen sind:

- **Skip-Link an erster Stelle.** „Zum Hauptinhalt springen“ ist das Erste auf jeder Seite.
- **Barrierefreiheitsoptionen an zweiter Stelle.** Die Barrierefreiheit-Schaltfläche ist das nächste Element in der Tastaturreihenfolge, sodass man seine Optionen mit zwei Tastendrücken erreicht. (Sie wird rechts in der oberen Leiste angezeigt.)
- **Hauptinhalt vor den Blöcken.** In Boost steht der Block-Drawer im Seitencode vor dem Hauptinhalt. In Accessible steht er danach, sodass ein Screenreader zuerst den Seiteninhalt vorliest. Das visuelle Layout ändert sich nicht.
- **Jeder Navigationsbereich hat einen Namen**: „Hauptmenü“, „Seitenmenü“, „Kursindex“ und die Menüs innerhalb von Seiten, sodass Nutzende, die die Landmarks einer Seite auflisten, wissen, was jeder ist.
- **Das Kennwortfeld** hat eine Schaltfläche „Kennwort anzeigen“, die dem Screenreader mitteilt, ob das Kennwort sichtbar ist (gedrückt oder nicht gedrückt).
- **Nach oben.** Eine Schaltfläche erscheint unten rechts, sobald die Seite etwa eine Bildschirmhöhe gescrollt wurde. Sie bringt die Nutzenden zurück an den Anfang und setzt den Fokus auf den Skip-Link, sodass Tastatur- und Screenreader-Nutzende wirklich an den Anfang zurückkehren und nicht nur die sichtbare Seite. Sie verbirgt sich, solange der Fokus auf Inhalt darunter liegt, und verdeckt so nie das fokussierte Element.
- **Schaltfläche „← Zurück zum Kurs“** oben im Kursindex innerhalb einer Aktivität, um zur Kursseite zurückzukehren.
- **Der Kursindex öffnet und schließt an derselben Stelle.** In Boost liegt die Schaltfläche zum Schließen des
  Kursindex am anderen Ende seiner Kopfzeile, weit weg von der Schaltfläche zum Öffnen. In Accessible erscheint sie genau
  dort, wo die Schaltfläche zum Öffnen war: Die Leiste öffnet und schließt sich, ohne dass Sie den Mauszeiger oder den
  vergrößerten Ausschnitt bewegen müssen, und sie ist für die Tastatur das erste Element der Leiste.

---

## 8. Modus mit hohem Kontrast

Hoher Kontrast ist eine persönliche Option (und kann der Standard der Website sein). Er macht die Seite zu **weißem Text auf schwarzem Hintergrund**:

- Sekundärer Text ist ein sehr helles Grau (#E0E0E0), auf Schwarz noch über 7:1.
- Links sind weiß und unterstrichen, wie der Text.
- **Gelb** (#FFE600) wird nur für Hover und Fokus verwendet: Hover-Füllungen und den Fokusring, mit schwarzem Text auf Gelb.
- Hinweise behalten ihre Rahmen, Muster und Symbole, in helleren Farben, die auf Schwarz die Kontraststufe erreichen.
- Die Karten, Menüs, Dialoge und Formulare von Moodle wechseln über den eigenen Dunkelmodus von Bootstrap zu dunkel und sind so einheitlich.
- Die obere Leiste behält ihr gewohntes Aussehen, und der Bearbeitungsbereich des Editors (TinyMCE) wird mit einem Filter dunkel gemacht.

Der normale Modus ist nicht betroffen: Die helle Palette ist mit oder ohne diese Option genau dieselbe.

Was hoher Kontrast nicht ändern kann (H5P, iframes, Inhalte von Lehrkräften mit eigenen Farben), ist unter [Bekannte Grenzen](#15-bekannte-grenzen) aufgeführt.

---

## 9. Farbsehfilter

### Was sie tun

Eine Farbsehschwäche bedeutet, dass manche Farben, die für die meisten Menschen verschieden aussehen, für die Person gleich aussehen, am häufigsten Rot und Grün. Die Option für das Farbsehen legt einen Filter über das ganze Fenster, der **die Farben, die die Person nicht unterscheiden kann, in Farben verschiebt, die sie unterscheiden kann**, sodass Unterschiede wieder sichtbar werden.

### Die Optionen

- **Typ:**
  - **Protan:** schwache oder fehlende Empfindlichkeit für Rot.
  - **Deutan:** schwache oder fehlende Empfindlichkeit für Grün.
  - **Tritan:** schwache oder fehlende Empfindlichkeit für Blau.
  - **Keine Farbe:** Die Seite wird in Grautönen dargestellt.
- **Stärke:** **leicht** (die „-anomalie“-Typen, bei denen der Zapfen teilweise arbeitet), **mittel** oder **stark** (die „-anopie“-Typen, bei denen der Zapfen fehlt). Die Ansicht ohne Farbe ignoriert die Stärke.

Wer seinen Typ nicht kennt, kann jeden ausprobieren und den behalten, bei dem rote, grüne und blaue Dinge am unterschiedlichsten aussehen. Es ist eine Hilfe, kein medizinischer Test.

### Wie es funktioniert

Jeder Filter ist eine SVG-Farbmatrix, die über eine Ebene über dem ganzen Fenster angewendet wird und in zwei Schritten aufgebaut ist:

1. **Simulation:** was eine Person mit dieser Farbsehschwäche sieht, nach dem [veröffentlichten Modell](https://doi.org/10.1109/TVCG.2009.113) von Machado, Oliveira und Fernandes (2009), skaliert mit der gewählten Stärke.
2. **Korrektur:** Der Teil der Farbe, den die Person nicht sehen kann, wird in die Kanäle verschoben, die sie noch sehen kann (Rot in Grün und Blau bei Protan und Deutan; Blau in Rot und Grün bei Tritan). Diese Technik heißt „Daltonisieren“.

**Weiß, Grau und Schwarz ändern sich nicht**, sodass Text und Hintergründe ihren Kontrast behalten.

### Wie es geprüft wurde

Farbige Felder wurden über eine Seite mit jeder Kombination aus Typ und Stärke gezeichnet und ihre Pixelfarben zurückgelesen. Weiß, Schwarz und Grau blieben in jedem Fall unverändert; jede Stärke verschob die Farben weiter als die vorherige; die Ansicht ohne Farbe machte jedes Feld zu einem reinen Grau.

### Grenzen

- Die Matrizen stammen aus veröffentlichten Werten. Sie sind **nicht klinisch validiert**, und nur Menschen mit Farbsehschwäche können bestätigen, dass sie helfen. Tests mit echten Nutzenden an echten Kursinhalten werden empfohlen.
- Bilder und Videos werden ebenfalls gefiltert, weil der Filter das ganze Fenster abdeckt. Das schließt H5P und Einbettungen von Drittanbietern wie YouTube und Vimeo in Chrome, Edge und Firefox ein. In einem Browser, der die Ebene nicht anwenden kann, wird der Filter stattdessen auf die Seite angewendet, und Einbettungen von Drittanbietern behalten ihre eigenen Farben.
- **Vollbild-Videos** und native modale Dialoge werden vom Browser über allem gezeichnet und nicht gefiltert. Die Farbfilter des Betriebssystems (Windows, macOS, iOS und Android) erfassen sie.
- Die Auswirkung eines Filters über dem ganzen Fenster auf die Geschwindigkeit langsamer Computer wurde nicht gemessen.

### Farbsehtest für Administrierende

Der Tab **Informationen** der Theme-Einstellungen zeigt dasselbe Testbild elfmal: das Original, die Ansicht ohne Farbe und jeden Typ in jeder Stärke. Administrierende sehen so, wie die Farben der Website für jede nutzende Person aussehen. Das Bild ist eine eigene Zeichnung des Themes, keine Ishihara-Tafel, und es ist kein medizinischer Test.

---

## 10. Schriften: warum diese drei

### Warum eine Auswahl

Keine einzelne Schrift ist für alle die beste. Der Lesekomfort hängt von der Person, ihren Augen und der Aufgabe ab. Das Theme liefert deshalb drei Schriften mit unterschiedlichen Gestaltungszielen mit, lässt jede nutzende Person sie ausprobieren und die behalten, die funktioniert, und lässt die Administration den Standard der Website wählen.

Alle drei sind als Webfont-Dateien mit dem Theme mitgeliefert: **Es wird keine Anfrage an Google Fonts oder einen anderen externen Dienst gesendet**, was besser für den Datenschutz ist und in Netzen ohne Internetzugang funktioniert. Alle drei stehen unter der **SIL Open Font License 1.1**. Der Tab Informationen der Theme-Einstellungen zeigt ein Muster jeder Schrift, in normal und fett, einschließlich der Zeichen, die am leichtesten verwechselt werden: `I / l / 1`, `O / 0`, `rn / m`, `cl / d`.

| Schrift | Entworfen von | Grundidee |
|---|---|---|
| [**Lexend Deca**](https://www.lexend.com/) (Standard) | Dr. Bonnie Shaver-Troup und Thomas Jockin | Weiter, gleichmäßiger Buchstabenabstand, damit das Lesen flüssiger wird |
| [**Atkinson Hyperlegible**](https://www.brailleinstitute.org/freefont/) | Braille Institute of America, entworfen mit Applied Design Works | Gut unterscheidbare Buchstabenformen, für Sehbehinderung |
| [**OpenDyslexic**](https://opendyslexic.org/) | Abbie Gonzalez | Schwerere Buchstabenunterseiten, die Lesenden mit Legasthenie helfen sollen |

### Lexend Deca (der Standard)

**Geschichte.** Lexend ist das Werk von Dr. Bonnie Shaver-Troup, einer Bildungstherapeutin, und dem Schriftgestalter Thomas Jockin. Aus ihrer Arbeit mit Kindern, die Schwierigkeiten beim Lesen haben, schlug sie vor, dass das Lesen mit einer serifenlosen Schrift, gedehnten Proportionen und größerem Zeichenabstand besser wird. Sie entwickelten sie um 2018, und sie wurde 2019 auf [Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) veröffentlicht. Lexend basiert auf [Quicksand](https://fonts.google.com/specimen/Quicksand), einer Schrift, die Andrew Paglinawan 2008 begonnen hat. Die Familie hat sieben Breiten, von **Deca** (der schmalsten) bis Zetta (der breitesten); 2021 kam eine Gewichtsachse hinzu.

**Warum sie der Standard ist.** Lexend Deca ist eine klare, offene serifenlose Schrift mit großzügigem Abstand, die kompakt genug für eine dichte Oberfläche wie Moodle bleibt und in kleinen und großen Größen gut lesbar ist.

### Atkinson Hyperlegible

**Geschichte.** Atkinson Hyperlegible wurde für das **Braille Institute of America** geschaffen und 2019 veröffentlicht, im Jahr des hundertjährigen Bestehens des Instituts. Sie wurde von der Agentur Applied Design Works als Teil der neuen Marke des Instituts entworfen und ist nach dem Gründer des Instituts, J. Robert Atkinson, benannt. Sie gewann 2019 den Preis „Innovation by Design“ von Fast Company und wurde 2024 in die ständige Sammlung des Cooper Hewitt, Smithsonian Design Museum aufgenommen. 2025 veröffentlichte das Braille Institute **Atkinson Hyperlegible Next** mit mehr Schriftgewichten und breiterer Sprachunterstützung sowie eine nichtproportionale Version (Monospace).

**Die Idee.** Die meisten Schriften streben gleichförmige Buchstaben an. Atkinson Hyperlegible macht das Gegenteil: Sie räumt den **Unterschieden zwischen den Zeichen** Vorrang ein, damit Lesende mit Sehbehinderung sie auseinanderhalten können, mit offenen Formen und eigenen Gestalten für leicht verwechselbare Paare wie großes I, kleines l und die Ziffer 1 oder O und 0.

**Warum sie angeboten wird.** Sie ist die Schrift, die am direktesten für die Nutzenden mit Sehbehinderung entworfen wurde, denen dieses Theme dient. Das Theme liefert die Originalversion in normal und fett mit.

### OpenDyslexic

**Geschichte.** OpenDyslexic wurde von Abbie Gonzalez, die Legasthenie hat, geschaffen und erstmals 2011 veröffentlicht. Sie ist Open Source und wurde ursprünglich von Bitstream Vera Sans abgeleitet.

**Die Idee.** Ihre Buchstaben haben **schwerere Unterseiten**. Die Autorin sagt, dass das Gewicht zeigt, wo unten ist, was Lesenden hilft, Buchstaben zu erkennen, und sie davon abhalten kann, sie gedanklich zu spiegeln oder zu drehen (zum Beispiel b, d, p und q). Die Buchstabenformen sind außerdem unterscheidbarer gemacht, und der Abstand ist größer.

### Was die Schriften abdecken

Lexend Deca und Atkinson Hyperlegible werden mit den Zeichensätzen Latein und erweitertes Latein mitgeliefert, denselben Dateien, die Google Fonts ausliefert; sie decken die sieben Sprachen des Themes und die meisten europäischen Sprachen ab, griechische und kyrillische Zeichen haben diese beiden Schriften nicht. OpenDyslexic wird vollständig mitgeliefert, so wie die Autorin sie veröffentlicht: Neben Latein deckt sie Griechisch, Kyrillisch und das Internationale Phonetische Alphabet ab. Zeichen, die eine Schrift nicht hat (zum Beispiel arabische oder asiatische Schriften, oder Griechisch und Kyrillisch bei Lexend Deca und Atkinson Hyperlegible), werden in der serifenlosen Schrift des Systems dargestellt.

---

## 11. Funktionen für Administrierende

### Theme-Einstellungen

- Tab **Nutzerstandards**: die Standard-Schriftart, Textgröße, Abstand, Kontrast, Bewegung und Fokus für die ganze Website, einschließlich Besucherinnen und Besuchern und der Anmeldeseite. Die eigene Wahl einer nutzenden Person hat immer Vorrang vor dem Standard. (Das Farbsehen hat keinen Standard der Website, weil es persönlich ist.)
- Tab **Informationen** (letzter Tab):
  - die Theme-Version, aus den Plugin-Informationen gelesen;
  - eine Schaltfläche **Dokumentation** oben, die diesen Leitfaden in einem neuen Tab öffnet, in der Sprache der nutzenden Person, wenn der Leitfaden in diese übersetzt ist, und sonst auf Englisch. Die Seite bietet den Leitfaden auch als Markdown-Datei zum Herunterladen an. Nur Administrierende können sie öffnen;
  - eine **Support-Zusammenfassung** mit Zeilen in Klartext (Versionen von Theme, Moodle, PHP, Datenbank und Webserver, verwendetes Theme, Sprache und die eigenen Barrierefreiheitsoptionen der Administration). Der Browser ergänzt Fenstergröße, Pixelverhältnis, Schriftgröße des Wurzelelements und seine Einstellungen für reduzierte Bewegung, Kontrast und erzwungene Farben. Eine Schaltfläche **Informationen kopieren** kopiert alles für einen Fehlerbericht in die Zwischenablage. Die Zusammenfassung enthält nie die Adresse der Website, Dateipfade oder personenbezogene Daten;
  - Links zur Seite mit den Barrierefreiheitsoptionen und zum Tab Nutzerstandards;
  - der **Farbsehtest** (siehe [Abschnitt 9](#9-farbsehfilter));
  - ein Beispiel der vier **Hinweis**-Arten (Erfolg, Information, Warnung und Fehler), so wie Nutzende sie mit den aktuellen Optionen sehen (siehe [Abschnitt 6](#6-visuelles-design-was-alle-nutzenden-sehen)). Screenreader lesen sie als normalen Text, nicht als Hinweise;
  - die **Schriftmuster** (siehe [Abschnitt 10](#10-schriften-warum-diese-drei));
  - die **Lizenzen** des Themes und der Schriften, mit einem Link zum offiziellen Text und zur mit dem Theme mitgelieferten Kopie.

### Favicon

Das Theme bringt ein eigenes Favicon mit (das kleine Symbol im Browser-Tab), `pix/favicon.ico`. Um ein eigenes zu verwenden, laden Sie es unter *Website-Administration > Darstellung > Logos* (**Favicon**) hoch: Moodle zeigt dann dieses statt des Favicons des Themes. Sie können auch die Datei `pix/favicon.ico` ersetzen, aber das nächste Update des Themes stellt das Original wieder her.

### Theme der Website oder Wahl der Nutzenden

- **Als Theme der Website:** Alle erhalten Accessible, mit den Standardwerten der Website, die Sie festlegen.
- **Als Wahlmöglichkeit:** Behalten Sie das gewohnte Theme Ihrer Website und schalten Sie **Designwechsel für Nutzer/innen erlauben** ein. Jede nutzende Person kann dann Accessible auf ihrer Seite mit den Barrierefreiheitsoptionen wählen (und zurückwechseln), und alle anderen behalten das gewohnte Aussehen.

### Ein Anmeldelink, der Accessible öffnet

Wenn Accessible zur Auswahl steht und nicht das Design der Website ist, verwendet die Anmeldeseite, die man über die Adresse der Website erreicht, das Design der Website. Wer auf Accessible angewiesen ist, muss sich über eine Seite anmelden, die schwer zu bedienen sein kann.

Wenn **Designwechsel über URL erlauben** aktiviert ist (`allowthemechangeonurl`), können Sie diesen Nutzenden einen Anmeldelink geben, der Accessible sofort öffnet: `https://your.site/login/index.php?theme=accessible`. Das Theme wird in der Sitzung gespeichert. Es bleibt also nach der Anmeldung erhalten und hat bis zur Abmeldung Vorrang vor dem Theme, das im Profil gewählt wurde.

Abwägung: Die Einstellung muss aktiviert bleiben, damit der Link funktioniert, und solange sie aktiv ist, kann jede Person mit dem Parameter das Theme ihrer eigenen Sitzung wechseln. Für andere Personen kann sie es nicht ändern.

### Warnungen, wenn Nutzende ihre Optionen nicht verwenden können

Ist **Designwechsel für Nutzer/innen erlauben** ausgeschaltet, können Nutzende ihr Theme nicht selbst wählen. Das Theme warnt davor an zwei Stellen:

- ein Hinweis auf der Seite der Administrationsmitteilungen, mit einem Link zur Einstellung;
- eine Prüfung unter *Berichte > Systemstatus* (die Systemstatus-Seite von Moodle).

---

## 12. Datenschutz und Daten

- **Angemeldete Nutzende:** Jede Option wird als Moodle-Nutzereinstellung gespeichert (`theme_accessible_font`, `theme_accessible_fontsize` und so weiter). Sie sind im **Privacy-API**-Provider des Themes deklariert und im Datenexport der nutzenden Person enthalten.
- **Besucherinnen, Besucher und Gäste:** Die Auswahl wird in einem Cookie namens `MoodleAccessible`, gefolgt vom Namen des Session-Cookies der Website, gespeichert. Es enthält nur die Anzeigeoptionen (als JSON), ist `HttpOnly` und `SameSite=Lax`, gilt ein Jahr und wird bei jedem Lesen gegen die Liste gültiger Werte geprüft. Wenn eine angemeldete Person Optionen speichert, spiegelt das Cookie sie, sodass die Anmeldeseite die letzte Auswahl zeigt. Das Cookie wird beim Abmelden gelöscht, sodass die nächste Person an einem gemeinsam genutzten Computer diese Optionen weder sieht noch übernimmt. Wer sich nie anmeldet, behält das Cookie. Stellen Sie deshalb den Browser an öffentlichen Computern (Bibliotheken, Unterrichtsräume) so ein, dass er seine Daten beim Beenden löscht oder Gast- bzw. private Fenster öffnet; sonst sieht die nächste Person die Seite mit diesen Optionen, bis sie sie ändert. **Erwähnen Sie dieses Cookie in der Datenschutz- und Cookie-Richtlinie Ihrer Website.**
- **Optionsseite ohne Anmeldung:** Die Seite der Barrierefreiheitsoptionen öffnet sich auch ohne Sitzung, wenn **Anmeldung notwendig** aktiviert ist, damit Menschen die Seite vor der Anmeldung einrichten können. Besucherinnen und Besucher sehen nur das Optionsformular im Layout der Anmeldeseite (ohne Blöcke, Menüs oder Navigation), und ihre Auswahl landet nur im Cookie ihres eigenen Browsers.
- **Keine externen Anfragen:** Schriften, Symbole und Filter werden alle von Ihrer eigenen Website ausgeliefert.
- **Kein Tracking:** Das Theme erhebt keine Nutzungsdaten.

---

## 13. Sprachen

Die Texte des Themes gibt es in **sieben Sprachen**: Englisch, Spanisch, Katalanisch, Französisch, Italienisch, Deutsch und brasilianisches Portugiesisch. Die Übersetzungen sind in den Sprachpaketen von Moodle verfügbar: Wenn auf einer Website das Sprachpaket einer Sprache installiert ist, erscheint das Theme in dieser Sprache. Die Texte und Übersetzungen wurden mit KI (Claude) geschrieben. Die englischen, spanischen und katalanischen Texte wurden von Menschen geprüft. Diese Anleitung gibt es in denselben Sprachen.

---

## 14. Wie das Theme getestet wurde

Aussagen zur Barrierefreiheit sind nur so viel wert wie das, was geprüft wurde. Das wurde geprüft, und so.

### Automatisierte Scans

Drei Skripte mit Playwright (einem Werkzeug zur Browser-Automatisierung) wurden unter Moodle 5.2 und Moodle 5.3 in **Chromium** und **Firefox** ausgeführt:

- Ein **vollständiger Scan** über 27 Seiten (Dashboard, Kurs, Aktivitäten, Foren, Test und Testversuch, Teilnehmende, Bewertungen, Kalender, Administration, Formulare, Anmeldung ...) bei **100 %, 125 % und 200 %** Textgröße, im **normalen und im hohen Kontrast**. Er prüft den Kontrast jedes sichtbaren Textstücks gegen seinen tatsächlichen Hintergrund (7:1, oder 4,5:1 bei großem Text), zugängliche Namen, Landmarks, doppelte IDs, Überschriftenreihenfolge und Zielgröße.
- Ein **Tastatur-Scan**: Tabulatorreihenfolge, Fokusfallen, sichtbare Fokusanzeige und hinter festen Elementen verborgener Fokus.
- Ein **Kontrast-Scan** einer kürzeren Seitenliste, der nach jeder Stiländerung verwendet wird.

**Ergebnis:** keine Kontrastfehler auf irgendeiner Seite, Größe, in irgendeinem Modus oder Browser. Die Scans unter Moodle 5.2 und Moodle 5.3 fanden keine bei 100 %, 125 % und 200 % Textgröße, im normalen oder hohen Kontrast. Die übrigen Befunde sind unter [Bekannte Grenzen](#15-bekannte-grenzen) aufgeführt.

Die Farbsehfilter wurden durch Zurücklesen von Pixelfarben geprüft (siehe [Abschnitt 9](#9-farbsehfilter)).

### Automatisierte Tests

Das Theme enthält PHPUnit-Tests (Einstellungen, Standardwerte und Cookie-Validierung, Hooks, Statusprüfung, Privacy-Provider, die Support-Zusammenfassung, SCSS-Kompilierung) und Behat-Szenarien (die Optionsseite für Nutzende und Besuchende, die Administrationswarnung, der Tab Informationen).

Sie wurden auf beiden Versionen ausgeführt:

| | Moodle 5.2 | Moodle 5.3 |
| --- | --- | --- |
| PHPUnit (61 Tests, 332 Assertions) | alle bestanden | alle bestanden |
| Behat (17 Szenarien, 124 Schritte) | alle bestanden | **15 bestanden, 2 fehlgeschlagen** |

Die zwei Behat-Szenarien, die unter Moodle 5.3 fehlschlagen, sind die der Administrationswarnung. Sie scheitern an dem Schritt, der *Berichte > Systemstatus* über die obere Navigationsleiste öffnet, nicht an dem, was sie prüfen. Moodle 5.3 zeichnet diese Leiste mit einer neuen Komponente, und das Theme verwendet noch das klassische Markup (siehe [Bekannte Grenzen](#15-bekannte-grenzen)). Seiten und Optionen funktionieren; nur der Testschritt findet die Leiste nicht.

### Codeprüfungen

- **Die Plugin-Prüfungen von Moodle** (moodle-plugin-ci 4.5), ausgeführt unter Moodle 5.2 und erneut unter 5.3: Plugin-Validierung, PHP-Lint, PHPDoc, Upgrade-Savepoints, Mustache-Vorlagen (Rendering und HTML-Validierung), alle ohne Fehler oder Warnungen.
- **Coding Style:** `phpcs` mit dem Standard von Moodle ist sauber; ESLint meldet keine Fehler oder Warnungen in `javascript/accessible.js`; stylelint meldet keine im SCSS, mit einer Handvoll dokumentierter Ausnahmen (`!important` ist Absicht, um die Stile von Boost zu überstimmen).
- **Stil-Refactorings** werden mit einem Vergleichswerkzeug als unschädlich nachgewiesen: Es vergleicht die berechneten Stile von weit über 100.000 Elementen vor und nach einer Änderung und prüft, dass kein Paar konkurrierender Regeln die Reihenfolge gewechselt hat.

### WAVE

Die wichtigsten Seiten wurden mit der Erweiterung [WAVE](https://wave.webaim.org/) von WebAIM in Chrome geprüft. Alle erreichen beim automatisierten AIM-Score von WAVE 10 von 10 Punkten. Der AIM-Score vergleicht eine Seite mit anderen Webseiten; wie WebAIM selbst sagt, beweist ein hoher Wert nicht, dass eine Seite barrierefrei oder konform ist, weshalb das Theme zusätzlich von Hand getestet wurde.

### Was nicht getan wurde

- **Screenreader:** Das Theme wurde von Hand mit NVDA getestet. Mit JAWS, VoiceOver oder TalkBack wurde es noch nicht getestet. Die Seitenstruktur wurde außerdem über den Accessibility Tree des Browsers geprüft, den Screenreader lesen.
- **Die Browser-Tests umfassten Safari nicht**, und unter Moodle 5.3 schlagen zwei Behat-Szenarien fehl (siehe oben).
- **Der Videoplayer wurde in Chromium und Firefox ohne Fenster geprüft**, nicht von Hand in einem normalen Chrome- oder Firefox-Fenster und nicht mit jeder Art von Inhalt (lokale Videodateien, nur Audio, Untertitel, Livestreams).
- **Keine Tests mit Nutzenden**, die blind sind, eine Sehbehinderung oder eine Farbsehschwäche haben.
- **Nur interne Prüfungen;** keine externe Prüfung oder Zertifizierung.

Rückmeldungen von Nutzenden und Barrierefreiheitsfachleuten sind der wertvollste Beitrag, den das Projekt erhalten kann.

---

## 15. Bekannte Grenzen

### Inhalte, die das Theme nicht steuert

- **H5P-Aktivitäten** und andere **eingebettete iframes** (Videos, externe Werkzeuge, LTI, eingebettete Dokumente) haben ihre eigene Seite und eigene Stile. Das Theme kann ihre Farben nicht ändern, sodass hoher Kontrast sie nicht erreicht. Der Farbsehfilter erfasst sie, mit den in [Abschnitt 9](#9-farbsehfilter) genannten Ausnahmen.
- **Von Hand eingefärbter Text** in Kursinhalten (im Editor gesetzte Farben, aus Word oder dem Web eingefügter Text) behält seine Farben, weil Inline-Farben das Theme überstimmen. Setzt eine Lehrkraft dunklen Text auf eine helle Füllung, bleibt das so, auch im hohen Kontrast. Lehrkräfte sollten die Textfarbe dem Theme überlassen.
- **Bilder** behalten ihre Pixel: Text in einem Bild wird nicht vergrößert, und hoher Kontrast färbt ihn nicht um (nur der Farbsehfilter verschiebt seine Farben, wie er es für das ganze Fenster tut). Bilder brauchen eine Textalternative.
- **Der Bearbeitungsbereich des Editors** (TinyMCE) ist ein eigenes Dokument. Im hohen Kontrast wird er mit einem Filter abgedunkelt, was die Farben ungefähr richtig hält, aber verändert, wie Bilder beim Bearbeiten aussehen. Der gespeicherte Inhalt wird nicht verändert.

### Grenzen von Moodle selbst

- Einige Kernseiten überspringen Überschriftenebenen (zum Beispiel von h1 zu h3 oder h4), und einige iframes von H5P, TinyMCE und Administrationsseiten haben keinen Titel. Sie stammen aus dem eigenen Markup von Moodle.
- Bei 200 % Textgröße können die Bewertungsübersicht und die Seite des Testversuchs weiterhin seitwärts scrollen, durch das Design von Moodle.
- Bei 200 % Textgröße kann die Kursverwaltungsseite seitwärts scrollen, noch mehr bei geöffneten Drawern.

### Moodle 5.3

Moodle 5.3 zeichnet die primäre und die sekundäre Navigationsleiste mit einer neuen Komponente (`core/nav`) und den Schalter für den Bearbeitungsmodus mit dem Switch des Design Systems. Das Theme verwendet dafür weiterhin das klassische Markup von Moodle 5.2. Es funktioniert und ist zugänglich, verwendet aber die neuen Komponenten von Moodle noch nicht, und Tests, die mit dem Standard-Behat-Schritt („I select ... from primary navigation“) über die obere Leiste navigieren, schlagen mit diesem Theme unter 5.3 fehl. Das ist für eine kommende Version des Themes geplant.

### Zielgröße

Breadcrumb-Links, Aktionen bei Forenbeiträgen (Permalink, Bearbeiten, Antworten), die Links zur vorherigen und nächsten Aktivität und die Links des Kursindex sind 31 bis 34 px hoch, unter den 44 px von WCAG AAA. Sie größer zu machen, würde diese Listen deutlich verlängern; das wird noch erwogen.

### Browser

- Die breiten Bildlaufleisten funktionieren in Browsern auf Chromium-Basis (Chrome, Edge, Opera, Brave). Firefox behält seine eigene Breite.
- Das Theme wurde in Chromium und Firefox getestet. Safari wurde nicht getestet.

---

## 16. Ist Accessible das Richtige für Ihre Website?

### Wählen Sie Accessible, wenn

- Ihre Website **Studierende, Lehrkräfte oder Mitarbeitende hat oder haben könnte, die blind sind, eine Sehbehinderung oder eine Farbsehschwäche haben**, und Sie möchten, dass sie selbstständig arbeiten.
- Sie **Verpflichtungen zur Barrierefreiheit** haben und eine Plattform wollen, die auf die WCAG ausgerichtet ist, den Standard hinter den meisten Barrierefreiheitsgesetzen.
- Sie **ein alternatives Erscheinungsbild** neben Ihrem Haupt-Theme anbieten möchten, damit alle, die es brauchen, wechseln können.
- Sie ein **ruhiges, lesbares Moodle** für alle wollen: kein Durcheinander, starker Kontrast, vorhersehbares Layout.

### Überlegen Sie es sich gut, wenn

- Sie **starkes Branding**, eigene Farben, Hintergrundbilder oder eine visuelle Identität brauchen: Das Aussehen von Accessible ist bewusst schlicht, und seine Farben sind für den Kontrast festgelegt.
- Ihre Kurse überwiegend auf **H5P oder externe Werkzeuge** setzen: Das Theme kann nicht umgestalten, was darin läuft, sodass diese Teile ihre eigenen Farben und Größen behalten.

### Ohne Risiko ausprobieren

Installieren Sie es und schalten Sie **Designwechsel über URL erlauben** ein (*Website-Administration > Darstellung > Erweiterte Designeinstellungen*, Einstellung `allowthemechangeonurl`). Öffnen Sie dann Ihre Website mit `?theme=accessible` am Ende der Adresse (zum Beispiel `https://your.site/my/?theme=accessible`): Das Theme gilt nur für Ihre Sitzung. Probieren Sie die Optionen aus, öffnen Sie Ihre Kurse bei 200 % und im hohen Kontrast und **schalten Sie die Einstellung dann wieder aus**, denn solange sie aktiv ist, kann jede Person, die den Parameter kennt, das Theme wechseln. Wenn Sie einen Anmeldelink behalten möchten, der Accessible öffnet, lesen Sie [Ein Anmeldelink, der Accessible öffnet](#ein-anmeldelink-der-accessible-öffnet): In diesem Fall bleibt die Einstellung aktiviert.

---

## 17. Installation und Konfiguration

### Voraussetzungen

- **Moodle 5.2 und höher.**
- Das Theme **Boost**, das mit Moodle mitgeliefert wird.
- Keine weiteren Plugins. Keine Build-Werkzeuge.

### Installation

1. Kopieren Sie den Theme-Ordner nach `public/theme/accessible` Ihres Moodle-Codes (der Ordner muss `accessible` heißen; wenn Sie die ZIP-Datei von GitHub herunterladen, benennen Sie den Ordner zuerst um) oder laden Sie die ZIP-Datei über *Website-Administration > Plugins > Plugin installieren* hoch.
2. Gehen Sie zu *Website-Administration > Systemnachrichten*, um die Installation abzuschließen.
3. Leeren Sie die Caches, wenn Sie das Theme von Hand aktualisieren.

### Konfiguration

- **Als Theme der Website:** *Website-Administration > Darstellung > Designs*, dann Accessible wählen.
- **Als Wahl der Nutzenden:** Schalten Sie **Designwechsel für Nutzer/innen erlauben** unter *Website-Administration > Darstellung > Erweiterte Designeinstellungen* ein.
- **Standardwerte:** Wählen Sie in den Theme-Einstellungen, Tab **Nutzerstandards**, Schriftart, Textgröße, Abstand, Kontrast, Bewegung und Fokus für die Website.
- **Datenschutz:** Nehmen Sie das Besucher-Cookie in Ihre Datenschutz- oder Cookie-Richtlinie auf (siehe [Abschnitt 12](#12-datenschutz-und-daten)).

### Aktualisierung

Installieren Sie die neue Version über die alte und rufen Sie *Website-Administration > Systemnachrichten* auf. Die Nutzenden behalten ihre Optionen.

---

## 18. Credits, Lizenzen und Quellen

### Credits

Von **Fernando Acedo** und dem ehemaligen **Koditik dev team**. Claude Code half beim Schreiben von Teilen des Themes, hat es überprüft und beim Testen des Themes geholfen. Claude ist eine Marke von Anthropic, PBC.

[Quellcode und Releases](https://github.com/f-acedo/moodle-theme_accessible). Fehlerberichte und Vorschläge: [Issue-Tracker](https://github.com/f-acedo/moodle-theme_accessible/issues).

### Lizenzen

- Theme Accessible: **GNU General Public License v3 oder neuer** ([offizieller Text](https://www.gnu.org/licenses/gpl-3.0.html); Kopie in `LICENSE.txt`).
- Schriften von Accessible: **SIL Open Font License 1.1** ([offizieller Text](https://openfontlicense.org/open-font-license-official-text/); Kopien in `fonts/LICENSE-*.txt`).
  - Lexend Deca: Copyright 2019 The Lexend Project Authors.
  - Atkinson Hyperlegible: Copyright 2020 Braille Institute of America, Inc.
  - OpenDyslexic: Copyright 2019 Abbie Gonzalez, Reserved Font Name OpenDyslexic.

### Quellen

Standards und Gesetze:

- [Web Content Accessibility Guidelines (WCAG) 2.1](https://www.w3.org/TR/WCAG21/), W3C.
- [Understanding WCAG 2.1: conformance levels](https://www.w3.org/WAI/WCAG21/Understanding/conformance), W3C.
- [Richtlinie (EU) 2016/2102 über den barrierefreien Zugang zu Websites und mobilen Anwendungen](https://eur-lex.europa.eu/eli/dir/2016/2102/oj).
- [European Accessibility Act, Richtlinie (EU) 2019/882](https://eur-lex.europa.eu/eli/dir/2019/882/oj).
- [EN 301 549, ETSI](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility).
- [Section 508 standards](https://www.access-board.gov/ict/), US Access Board.
- [ADA Title II web rule (2024)](https://www.ada.gov/resources/2024-03-08-web-rule/), US-Justizministerium.

Nutzende:

- [World report on vision](https://www.who.int/publications/i/item/9789241516570), Weltgesundheitsorganisation, 2019.
- [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/).

Schriften:

- [Lexend](https://www.lexend.com/) und [Lexend auf GitHub](https://github.com/googlefonts/lexend).
- [Atkinson Hyperlegible, Braille Institute](https://www.brailleinstitute.org/freefont/).
- [OpenDyslexic](https://opendyslexic.org/about) und
  [OpenDyslexic auf Wikipedia](https://en.wikipedia.org/wiki/OpenDyslexic).

Farbsehen:

- Machado, G. M., Oliveira, M. M. und Fernandes, L. A. F. (2009), [*A physiologically-based model for simulation of color vision deficiency*](https://doi.org/10.1109/TVCG.2009.113), IEEE Transactions on Visualization and Computer Graphics.

---

## Anhang A. Technische Referenz

Für Fachleute, die vor der Installation des Themes die Einzelheiten wissen möchten: wie die Farbsehfilter aufgebaut sind und was die Prüfungen ergeben haben, wie weit die Prüfungen des hohen Kontrasts gingen und woher die mitgelieferten Schriften stammen und was die Forschung über sie sagt. Die Abschnitte 8, 9, 10 und 15 geben dieselben Informationen in einfachen Worten.

### A.1 Farbsehfilter: Umsetzung und Prüfungen

Nutzeroption unter `/theme/accessible/preferences.php`: **Farbsehen** (Typ) und **Stärke**.

#### Wie es funktioniert

- Typen: none, protan (rotschwach oder rotblind), deutan (grünschwach oder grünblind), tritan (blauschwach oder blaublind) und mono (keine Farbe, nur Grautöne).
- Stärke: mild (die „-anomalie“-Typen), medium, strong (die „-anopie“-Typen). Mono ignoriert sie.
- Die Auswahl wird als Nutzereinstellungen `theme_accessible_colortype` und `theme_accessible_colorstrength` gespeichert (`classes/preferences.php`) und erreicht die Seite als Body-Klassen: `accessible-colortype-X` und `accessible-colorstrength-Y`.
- `templates/colorfilters.mustache` enthält neun SVG-Filter (3 Typen x 3 Stärken) und den Mono-Filter. Die Vorlage ist in `templates/drawers.mustache` eingebunden. Das CSS (Ende von `scss/styles.scss`) wendet den passenden Filter über eine Ebene an.
- Die Ebene ist `body::after`: ein festes Feld, das das Fenster abdeckt, mit `pointer-events: none` und `backdrop-filter: url(#accessible-colortype-X-Y)`. Sie färbt alles um, was darunter gezeichnet wird: die Seite, Bilder, Videoelemente, H5P und **Einbettungen von Drittanbietern** (YouTube, Vimeo, LTI). Sie fügt kein Markup hinzu, Klicks gehen hindurch, sie hat keinen Inhalt für Hilfstechnologien und ist beim Drucken ausgeblendet.
- Warum kein Filter auf der Seite selbst: Ein Filter auf `<html>` erreicht in Chromium keine iframes von anderen Ursprüngen (ein pausierter YouTube-Frame kam mit und ohne ihn identisch heraus), und ein Filter auf `<body>` würde dieses zum Containing Block der festen Navigationsleiste und der Drawer machen und ihre Position zerstören.
- Wo der Browser `url()` in `backdrop-filter` nicht verwenden kann, gilt die alte Regel (`filter` auf `<html>`). In diesem Fall behalten Einbettungen von Drittanbietern ihre eigenen Farben.
- Was die Ebene nicht umfärbt, weil der Browser es über allem zeichnet: **Vollbild-Videos** und native `<dialog>`-Modale, die mit `showModal()` geöffnet werden. Die eigenen Modale von Moodle sind normale Elemente und werden erfasst. Screenshots, die mit Browser-Werkzeugen (nicht mit dem Betriebssystem) aufgenommen werden, lassen den Effekt eventuell ebenfalls aus.

#### Die Matrizen

Jeder Filter ist eine 3x3-`feColorMatrix` (angewendet im linearen RGB, dem SVG-Standard):

1. Simulation des fehlenden Zapfens: die Matrix von Machado et al. (2009) für volle Dichromasie, skaliert mit der Stärke `S = (1 - s) * I + s * M`, mit s = 0,4 (mild), 0,7 (medium), 1,0 (strong).
2. Korrektur (der übliche „Daltonize“-Schritt): Der Teil der Farbe, den die Person nicht sehen kann, `I - S`, wird in die Kanäle verschoben, die sie noch sehen kann: Rotfehler in Grün und Blau bei Protan und Deutan, Blaufehler in Rot und Grün bei Tritan. Ergebnis: `C = I + shift * (I - S)`.

Jede Zeile von `C` summiert sich zu 1, sodass Weiß, Grau und Schwarz unverändert bleiben. Die Matrizen wurden von Hand berechnet (es gibt keinen Build-Schritt); berechnen Sie sie neu, wenn sich die Mathematik ändert.

Die Matrizen stammen aus veröffentlichten Werten, nicht aus einer klinischen Validierung. Behandeln Sie den Filter als Hilfe, nicht als medizinisches Werkzeug.

#### Test

Acht Felder (Weiß, Schwarz, Grau, Rot, Grün, Blau, Gelb, Orangerot) wurden für jede Kombination über das Dashboard gezeichnet und ihre Pixel aus einem Screenshot gelesen. Die Werte sind RGB.

| Typ | Ergebnis |
|---|---|
| None | Unverändert: Rot (255,0,0), Grün (0,255,0), Blau (0,0,255) |
| Protan | Rot wird rosa: mild (255,121,134), medium (255,157,173), strong (255,184,203). Grün wird dunkler. |
| Deutan | Rot wird rosa-magenta: mild (255,72,118), medium (255,95,153), strong (255,112,180). |
| Tritan | Blau wird hellviolett: mild (141,103,255), medium (182,134,255), strong (213,158,255). Gelb verschiebt sich Richtung Grün. |
| Mono | Alle Felder grau (R = G = B), z. B. Rot (127,127,127), Grün (220,220,220), Blau (76,76,76). |

- Weiß (255,255,255), Schwarz (0,0,0) und Grau (128,128,128) blieben in jeder Kombination unverändert.
- Jede Stärkestufe verschiebt die Farben weiter als die vorherige.
- Die Verschiebungen lassen Farben, die für die Person ähnlich aussehen, in Helligkeit oder Farbton abweichen.

#### Nicht getan

- Keine klinische Validierung der Matrizen.
- Keine Ausnahmen pro Farbe: Bilder und Videos werden ebenfalls gefiltert.
- Vollbild-Videos und native modale Dialoge werden nicht gefiltert (siehe oben). Die eigenen Farbfilter des Betriebssystems (Windows, macOS, iOS, Android) erfassen sie.
- Die Leistung auf schwachen Rechnern (eine Ebene über dem ganzen Fenster) wurde nicht gemessen. Bei einem Desktop-Test lag die Scrollrate bei etwa 54 Bildern pro Sekunde mit der Ebene, 59 mit dem alten Filter und 61 ohne Farboption.

### A.2 Hoher Kontrast: Umfang der Prüfungen

Was hoher Kontrast nicht ändern kann, ist in [Abschnitt 15](#15-bekannte-grenzen) aufgeführt.

Der Kontrast wurde mit einem automatisierten Scan geprüft (Text mit 7:1, großer Text mit 4,5:1) bei 100 %, 125 % und 200 % Textgröße, mit eingeschaltetem Farbsehfilter, in Modalen und auf den Seiten Dashboard, Kurs, Kalender, Teilnehmende, Test und Testversuch.

### A.3 Schriften: Geschichte und Forschung

Das Theme Accessible liefert drei Schriften mit und lässt jede nutzende Person eine wählen: **Lexend Deca** (der Standard), **Atkinson Hyperlegible** und **OpenDyslexic**. Dieser Teil erzählt, woher jede stammt, was ihre Gestaltenden erreichen wollten, was die Forschung sagt und warum solche Schriften auf Websites für Menschen mit Sehbehinderung oder Legasthenie angeboten werden. Alle drei sind mit dem Theme mitgeliefert (keine Anfrage an einen externen Schriftdienst) und stehen unter der SIL Open Font License 1.1.

#### Was eine Schrift leichter lesbar macht

Keine Schrift macht das Lesen für alle leicht, und die Forschung zu „barrierefreien Schriften“ ist kleiner und uneinheitlicher als das Marketing darum herum. Das sind die Gestaltungsideen, die immer wieder auftauchen, mit dem, was über jede bekannt ist:

- **Buchstaben, die nicht verwechselt werden können.** Viele Schriften zeichnen großes **I**, kleines **l** und die Ziffer **1** fast gleich, und dasselbe geschieht bei **O** und **0**, **B** und **8** oder **rn** und **m**. Eine lesende Person mit Sehbehinderung, die die Formen verschwommen oder vergrößert sieht, kann den Kontext nicht zum Raten nutzen. Diese Zeichen unterschiedlich zu zeichnen, ist die Hauptidee von Atkinson Hyperlegible.
- **Offene Formen.** Weite Öffnungen in Buchstaben wie **a**, **c**, **e** und **s** bleiben lesbar, wenn das Bild unscharf oder vergrößert ist.
- **Großzügiger Abstand.** Zu dicht stehende Buchstaben stören sich gegenseitig, ein Effekt namens *Crowding*. In einer Studie von 2012 mit 74 Kindern mit Legasthenie im Alter von 8 bis 14 Jahren (Zorzi und Kollegen, veröffentlicht in PNAS) machte extra großer Buchstabenabstand das Lesen etwa 20 % schneller und halbierte die Fehler, während zusätzlicher Zeilenabstand allein keine Wirkung hatte. Weiter Abstand ist auch der Ausgangspunkt von Lexend, und das Theme bietet ihn als eigene Option getrennt von der Schrift an.
- **Serifenlose, aufrechte Buchstaben.** Empfehlungen für Legasthenie, etwa der Style Guide der British Dyslexia Association, raten meist zu schlichten serifenlosen Schriften, und eine Eye-Tracking-Studie mit 48 Lesenden mit Legasthenie (Rello und Baeza-Yates, 2013) fand, dass serifenlose, nichtproportionale und römische (nicht kursive) Schriften besser abschnitten als Serifenschriften, proportionale und kursive. Spätere Übersichten sind vorsichtiger: Dyslexia Scotland berichtet keinen durchgängigen Vorteil serifenloser gegenüber Serifenschriften und sagt, der Abstand sei ein stärkerer Faktor als die Buchstabenformen.
- **Vorlieben zählen.** Lesende lesen oft am besten in der Schrift, die sie gewohnt sind und mögen. Deshalb bietet das Theme eine Auswahl statt einer vorgeschriebenen Schrift.

Die Schrift ist nur ein Teil der Lesbarkeit. Größe, Abstand, Kontrast und die Freiheit, sie zu ändern, zählen mindestens genauso, und das Theme hat für jedes eine Option (siehe die Optionsseite und die Abschnitte 5 und 8 des Leitfadens).

#### Lexend Deca (der Standard)

**Geschichte.** Lexend ist das Werk von Dr. Bonnie Shaver-Troup, einer Bildungstherapeutin, und dem Schriftgestalter Thomas Jockin. Sie entwickelten sie um 2018 aus ihrer Arbeit mit Kindern, die Schwierigkeiten beim Lesen haben, und sie wurde 2019 auf [Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) veröffentlicht. Sie basiert auf [Quicksand](https://fonts.google.com/specimen/Quicksand), einer Schrift, die Andrew Paglinawan 2008 begonnen hat. Die Familie hat sieben Breiten, von **Deca** (der schmalsten) bis Zetta (der breitesten), sodass der Buchstabenabstand geändert werden kann, ohne die Schrift zu wechseln. Seit Juni 2021 sind alle Schriften variable Schriften mit einer Gewichtsachse.

**Die Idee.** Weiter, gleichmäßiger Buchstabenabstand und einfache, offene Formen, damit das Lesen flüssiger wird. Moodle ist eine dichte Oberfläche, daher verwendet das Theme **Deca**, das den großzügigen Abstand behält, aber kompakt genug für Menüs und Formulare bleibt.

**Was die Belege sagen.** Die Gestaltenden berichten von besserer Lesegeschwindigkeit in ihren eigenen Tests. Die bekannteste Studie ist klein (20 Drittklässler, die eine Minute lang in fünf Schriften lasen) und stammt von der Seite der Gestaltenden. Wir haben keine unabhängige Replikation gefunden. Das Theme bietet Lexend Deca daher als gut lesbaren Standard an, nicht als erwiesene Hilfe.

#### Atkinson Hyperlegible

**Geschichte.** Das Braille Institute of America schuf sie für Menschen mit Sehbehinderung und veröffentlichte sie 2019, im Jahr des hundertjährigen Bestehens des Instituts. Sie wurde von der Agentur Applied Design Works als Teil der neuen Marke des Instituts entworfen und ist nach dem Gründer des Instituts, J. Robert Atkinson, benannt. Sie gewann 2019 den Preis „Innovation by Design“ von Fast Company und wurde in die ständige Sammlung des Cooper Hewitt, Smithsonian Design Museum aufgenommen. Später wurde sie auf Google Fonts verfügbar, und 2025 veröffentlichte das Institut **Atkinson Hyperlegible Next** mit mehr Schriftgewichten und breiterer Sprachunterstützung sowie eine nichtproportionale Version (Monospace). Das Theme liefert die Originalversion in normal und fett mit.

**Die Idee.** Die meisten Schriften streben gleichförmige Buchstaben an. Atkinson Hyperlegible macht das Gegenteil: Sie behält eine konventionelle serifenlose Basis und fügt Unterschiede nur dort hinzu, wo zwei Zeichen leicht verwechselt werden:

- das kleine **l** erhält einen Schwanz und die Ziffer **1** einen Haken, sodass sie sich voneinander und vom großen **I** unterscheiden, das Serifen hat;
- **B** und **8**, **O** und **0** und andere Paare erhalten unterschiedliche Formen, weitere Öffnungen und schräge Enden;
- die Buchstaben stehen so, dass sich ihre Kanten nicht berühren.

Der Preis ist ein unregelmäßiges Erscheinungsbild: Serifen erscheinen an manchen Buchstaben und an anderen nicht, und manche Winkel sind übertrieben. Für das Lesen der Oberfläche des Themes ist das der Sinn der Sache, denn die Buchstaben sollen unterscheidbar sein, nicht elegant.

**Was die Belege sagen.** Sie ist die Schrift, die am direktesten für die Nutzenden mit Sehbehinderung entworfen wurde, denen dieses Theme dient, und ihre Gestaltungslogik ist leicht zu verstehen. Wir haben keine veröffentlichte Studie gefunden, die ihre Wirkung auf das Lesen bei einer Gruppe von Lesenden misst, die Aussage beruht also auf der Gestaltung und auf der eigenen Arbeit des Instituts.

#### OpenDyslexic

**Geschichte.** Abbie Gonzalez, die Legasthenie hat, schuf OpenDyslexic und veröffentlichte sie 2011 als Open-Source-Schrift, abgeleitet von Bitstream Vera Sans.

**Die Idee.** Die Buchstaben haben **schwerere Unterseiten**. Die Autorin sagt, dass das Gewicht jedem Buchstaben ein klares „Unten“ gibt, was Lesenden hilft, ihn zu erkennen, und sie davon abhält, Buchstaben wie b, d, p und q gedanklich zu spiegeln oder zu drehen. Die Buchstabenformen sind außerdem unterscheidbarer gemacht, und der Abstand ist größer.

**Was die Belege sagen.** Die Studien, die wir gefunden haben, stützen die Behauptung nicht, dass sie das Lesen verbessert: Eine Studie zu Lesegeschwindigkeit und Genauigkeit (Wery und Diliberto, 2017) fand keine Verbesserung gegenüber anderen Schriften, und eine spätere Eye-Tracking-Studie von Rello und Baeza-Yates (2016) fand, dass sie nicht besser abschnitt als gängige serifenlose Schriften wie Arial oder Verdana. Viele Menschen mit Legasthenie bevorzugen sie dennoch, und Vorlieben zählen, daher bietet das Theme sie als Wahlmöglichkeit und nicht als Empfehlung an.

#### Warum solche Schriften auf Websites für Sehbehinderung und Legasthenie angeboten werden

1. **Der Aufwand ist gering, und der Nutzen kann für manche Menschen groß sein.** Die Schrift zu wechseln, kostet in einem Theme nichts. Für eine Person, die eine Schrift deutlich leichter findet, kann es der Unterschied zwischen Lesen und Aufgeben sein.
2. **Menschen sind verschieden.** Sehbehinderung hat viele Ursachen (Verlust der Mitte oder des Rands des Gesichtsfelds, Unschärfe, Blendempfindlichkeit), und Legasthenie sieht nicht bei allen Lesenden gleich aus. Eine einzige „beste“ Schrift gibt es nicht, die sinnvolle Antwort ist also eine kurze Liste gut gestalteter Schriften, die jede Person ausprobieren kann.
3. **Die drei Schriften decken drei Ansätze ab:** offene, gleichmäßig gesetzte Buchstaben (Lexend Deca), Buchstaben, die durch die Gestaltung unterscheidbar sind (Atkinson Hyperlegible), und Buchstaben mit einem deutlichen „Gewicht“ (OpenDyslexic). Nutzende können sie auf derselben Seite vergleichen.
4. **Ehrlichkeit über die Belege.** Nur die Wirkung des Abstands ist gut belegt. Für jede Schrift sagt das Theme, was ihre Gestaltenden beabsichtigten und was bekannt ist, und es verspricht kein Ergebnis.

Die Person entscheidet, und die Administration kann die Standardschrift für die ganze Website festlegen (Tab **Nutzerstandards** der Theme-Einstellungen). Der Tab Informationen zeigt ein Muster jeder Schrift, einschließlich der leicht verwechselbaren Zeichen.

#### Quellen

- Braille Institute: [Pressemitteilung zu Atkinson Hyperlegible](https://prnewswire.com/news-releases/braille-institute-launches-new-award-winning-typeface-designed-to-improve-legibility-for-readers-with-low-vision-301012698.html)
  und [ihre Verfügbarkeit auf Google Fonts](https://prnewswire.com/news-releases/braille-institutes-atkinson-hyperlegible-typeface-now-available-on-google-fonts-301349120.html);
  [Atkinson Hyperlegible auf GitHub](https://github.com/googlefonts/atkinson-hyperlegible).
- Cooper Hewitt, Smithsonian Design Museum: [Atkinson Hyperlegible in der Sammlung](https://collection.cooperhewitt.org/objects/2318809952).
- [Lexend auf GitHub](https://github.com/googlefonts/lexend/) und [lexend.com](https://www.lexend.com/).
- Gonzalez, A.: [OpenDyslexic](https://opendyslexic.org/about).
- Wery, J. J. und Diliberto, J. A. (2017), [The effect of a specialized dyslexia font, OpenDyslexic, on reading rate and accuracy](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5629233/), Annals of Dyslexia.
- Rello, L. und Baeza-Yates, R. (2013), [Good fonts for dyslexia](https://doi.org/10.1145/2513383.2513447), ACM ASSETS.
- Rello, L. und Baeza-Yates, R. (2016), [The effect of font type on screen readability by people with dyslexia](https://doi.org/10.1145/2897736), ACM Transactions on Accessible Computing.
- Zorzi, M. und andere (2012), [Extra-large letter spacing improves reading in dyslexia](https://pubmed.ncbi.nlm.nih.gov/22665803/), PNAS.
- Dyslexia Scotland: [Dyslexia-friendly typed formats](https://dyslexiascotland.org.uk/dyslexia-friendly-typed-formats).
- Dezeen: [Atkinson Hyperlegible](https://www.dezeen.com/awards/2020/longlists/atkinson-hyperlegible-typeface-for-people-with-low-vision/).
