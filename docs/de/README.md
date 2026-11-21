# Accessible: ein Moodle-Design für blinde, sehbehinderte und farbenblinde Menschen

**Languages:** [English](../../README.md) · [Español](../es/README.md) · [Català](../ca/README.md) · [Français](../fr/README.md) · [Italiano](../it/README.md) · [Português (Brasil)](../pt_br/README.md) · Deutsch

**_Moodle sollte für alle funktionieren, die es nutzen müssen, nicht nur für Menschen mit perfekter Sehkraft._**

Accessible ist ein Design für Moodle 5.2 und höher auf der Grundlage von Boost. Es wurde von Anfang an für drei Nutzergruppen entwickelt, die meist auf sich allein gestellt sind:

- **Vollständig blinde Menschen**, die einen Screenreader verwenden.
- **Menschen mit eingeschränkter Sehkraft**, die Bildschirmlupen, den Browser-Zoom oder Spezialgläser verwenden.
- **Menschen mit Farbsehschwäche** (Farbenblindheit), für die „der rote Button" oder „das grüne Feld" nichts bedeutet.

Ziel ist, dass Studierende, Lehrende und Administratorinnen und Administratoren mit diesen Bedürfnissen Moodle wirklich *wahrnehmen und bedienen* können, und nicht nur, dass die Seiten eine Checkliste bestehen.

## Warum es anders ist

Die meisten Designs gehen von einer visuellen Gestaltung aus und beheben die Barrierefreiheit erst danach. Accessible macht es umgekehrt: Jede Entscheidung über Farbe, Größe, Reihenfolge und Wortwahl wurde zuerst für die Nutzenden getroffen.

- **Schlicht aus Prinzip.** Weißer Hintergrund, schwarzer Text, schwarze unterstrichene Links, große Bedienelemente und ein deutlicher Fokusrahmen. Nichts Dekoratives, das man abschalten müsste.
- **Farbe trägt nie allein eine Bedeutung.** Hinweise haben einen farbigen Rahmen, ein Muster, ein Symbol *und* ein geschriebenes Wort („Fehler:", „Warnung:").
- **Alles skaliert mit dem Text.** Die Größen sind relativ, sodass eine größere Textgröße ein größeres Moodle ergibt: Symbole, Schaltflächen und Felder wachsen mit dem Text.
- **Die Nutzenden entscheiden.** Jede Person stellt Schriftart, Textgröße, Abstände, Kontrast, Bewegung, Fokus und Farbsehen selbst ein und kann das schon vor der Anmeldung tun.
- **Gemessen, nicht angenommen.** Der Textkontrast zielt auf Stufe AAA der WCAG 2.1 (7:1 für normalen Text, 4,5:1 für großen Text) und wurde mit automatischen Prüfläufen bei normalem und hohem Kontrast, bei mehreren Textgrößen, in Chromium und Firefox geprüft.

## Funktionen

### Für alle Nutzenden

- **Persönliche Barrierefreiheitsoptionen** auf einer Seite, erreichbar über die Barrierefreiheit-Schaltfläche, die immer in der oberen Leiste steht:
  - **Schriftart:** Lexend Deca (Standard), Atkinson Hyperlegible oder OpenDyslexic. Alle drei sind im Design enthalten.
  - **Textgröße:** 100 %, 125 %, 150 % oder 200 %. Das gesamte Layout skaliert mit, einschließlich Symbolen und Schaltflächen.
  - **Textabstand:** normal, weit oder extra weit.
  - **Kontrast:** normal (Schwarz auf Weiß) oder hoch (Weiß auf Schwarz, wobei Gelb dem Darüberfahren und dem Fokus vorbehalten bleibt).
  - **Bewegung:** normal oder reduziert (die Systemeinstellung wird ebenfalls beachtet).
  - **Fokusrahmen:** normal oder dick.
  - **Farbsehfilter** für Rot- (Protan), Grün- (Deutan) und Blauschwäche (Tritan), jeweils in drei Stärken, außerdem eine Ansicht ohne Farbe. Weiß, Grau und Schwarz ändern sich nie.
- **Große, fehlertolerante Bedienelemente:** mindestens 44 px große Ziele bei Schaltflächen, 55 px hohe Formularfelder, große Kontrollkästchen und Optionsfelder sowie große Bildlaufleisten mit hohem Kontrast (in Chrome, Edge und anderen Chromium-Browsern; Firefox behält seine eigene Breite).
- **Eine Seite, die beim Vorlesen Sinn ergibt:** Der Hauptinhalt steht vor den Blöcken, jeder Navigationsbereich hat einen Namen, das Passwortfeld hat eine Schaltfläche „Kennwort anzeigen", die anzeigt, ob sie aktiv ist, und beim Scrollen erscheint die Schaltfläche „Nach oben".
- **Optionen vor der Anmeldung:** Die Barrierefreiheit-Schaltfläche steht auch auf der Anmeldeseite. Bei der ersten Anmeldung werden diese Einstellungen in das Konto übernommen, es sei denn, das Konto hat bereits eigene.

### Für Administratorinnen und Administratoren

- **Als Design der Website verwenden oder als Auswahl anbieten**, neben Ihrem Hauptdesign (mit aktivierter Einstellung „Designwechsel für Nutzer/innen erlauben"). Die Nutzenden können auf derselben Seite zu einem anderen Design zurückwechseln.
- **Website-Standardwerte** für Schriftart, Textgröße, Abstände, Kontrast, Bewegung und Fokus, für alle, auch für Gäste.
- **Ein Reiter Informationen** in den Design-Einstellungen mit einem Farbsehtest-Bild, Schriftmustern, Lizenzen und einer Support-Zusammenfassung, die Sie in eine Fehlermeldung kopieren können.
- **Eine Statusprüfung** (Berichte > Systemstatus), die warnt, wenn Nutzende das Design oder ihre Optionen nicht auswählen können.
- **Datenschutz eingebaut:** Die Einstellungen werden über die Datenschutz-API von Moodle deklariert und exportiert. Die Auswahl von Gästen wird in einem Cookie gespeichert, das nur Darstellungsoptionen enthält.
- **Keine externen Schriftanfragen:** Die Schriftarten sind im Design enthalten.
- **Sieben Sprachen:** Englisch, Spanisch, Katalanisch, Französisch, Italienisch, Deutsch und brasilianisches Portugiesisch. Die Übersetzungen sind in den Sprachpaketen von Moodle verfügbar.

## Gut zu wissen

- Das Aussehen ist **bewusst schlicht**. Wenn Sie ein markantes Erscheinungsbild oder eigene Farben brauchen, ist dies nicht das richtige Design.
- Das Design kann Inhalte nicht ändern, die es nicht kontrolliert: **H5P-Aktivitäten, eingebettete iframes und von Hand gefärbter Text** in Kursinhalten.
- Bei 200 % Textgröße können einige breite Moodle-Seiten (die Bewertungsübersicht, die Kursverwaltungsseite und die Seite eines Testversuchs) noch seitlich scrollen.
- Manche Grenzen stammen von Moodle selbst, etwa übersprungene Überschriftenebenen auf einigen Kernseiten.
- Das Design wurde **nicht formal geprüft oder zertifiziert**. Kein Design kann eine Website allein barrierefrei machen: Die Kursinhalte sind genauso wichtig.

## Voraussetzungen und Installation

- Moodle 5.2 oder höher und das Design Boost (in Moodle enthalten).
- Unter Moodle 5.3 verwendet das Design das klassische Hauptmenü, nicht das neue Menü von Moodle 5.3.
- Kopieren Sie das Design nach `public/theme/accessible` (der Ordner muss `accessible` heißen; wenn Sie das ZIP von GitHub herunterladen, benennen Sie den Ordner zuerst um) oder installieren Sie es über *Website-Administration > Plugins > Plugin installieren* und schließen Sie die Installation unter *Website-Administration > Systemnachrichten* ab.
- Um es als Design der Website festzulegen: *Website-Administration > Darstellung > Designs*.
- Damit jede Person es auswählen und eigene Optionen festlegen kann, aktivieren Sie **Designwechsel für Nutzer/innen erlauben** (*Website-Administration > Darstellung > Erweiterte Designeinstellungen*).
- Wenn es zur Auswahl steht, verwendet die Anmeldeseite das Design der Website. Um den Nutzenden einen Anmeldelink zu geben, der Accessible öffnet, aktivieren Sie **Designwechsel über URL erlauben** und geben Sie `https://your.site/login/index.php?theme=accessible` weiter (die Abwägung erklärt die [Anleitung](accessible-theme-guide.md#ein-anmeldelink-der-accessible-öffnet)).

Es gibt keinen Build-Schritt: weder Grunt noch npm noch webpack.

## Änderungsprotokoll

Version 1.0.0 (2026-11-11): Erstveröffentlichung.

## Versionierung

**Semantic Versioning (SemVer) ist ein standardisiertes Versionierungssystem, das der Softwareentwicklung Klarheit und Vorhersagbarkeit gibt: Jede Veröffentlichung erhält eine dreiteilige Nummer (MAJOR.MINOR.PATCH).** Bei Moodle-Plugins und -Designs soll sie Administratorinnen und Administratoren vor einem Update einer Produktivseite genau mitteilen, welche Art von Code- und Strukturänderungen enthalten ist. Indem SemVer zwischen kleinen visuellen Korrekturen, unbedenklichen Funktionserweiterungen und tiefgreifenden Architekturänderungen unterscheidet, bleibt die Wartung der Plattform sicher, Updates sind vorhersehbar, und automatisierte Bereitstellungen stören weder versehentlich die Benutzererfahrung noch beschädigen sie die Datenbankkonfiguration.

### Versionierungsreferenz des Designs Accessible (SemVer)

| Art der Veröffentlichung | Versionserhöhung | Was das für ein Moodle-Design bedeutet | Beispiele und technische Moodle-Details |
| :--- | :--- | :--- | :--- |
| **Patch** | `0.0.Z` | **Kleine Stilanpassungen und Fehlerbehebungen.** Rein optische oder interne Korrekturen, die nicht ändern, wie das Design konfiguriert oder strukturell verwendet wird. | • Einen CSS-Abstandsfehler oder einen Fehler im responsiven Layout beheben.<br>• Die Farbe einer Schaltfläche oder den Kontrast der Schrift anpassen.<br>• Eine kleine PHP-Meldung in den Serverprotokollen beseitigen.<br>• *Ändert nur die letzten Stellen von `$plugin->version` in `version.php`.* |
| **Minor** | `0.Y.0` | **Neue Funktionen oder sichere Anpassungen an die Plattform.** Neue Optionen, die das Design nicht strukturell umbauen, oder Anpassungen des Codes an eine neue Moodle-Version bei gleichbleibender Kompatibilität mit den bisherigen. | • Eine neue Layout-Option oder Blockregion hinzufügen, ohne alte zu entfernen.<br>• Eine neue eigene Einstellung in `settings.php` einführen (zum Beispiel einen Schalter für die Kopfzeile).<br>• Das Design an eine neue Moodle-Nebenversion anpassen.<br>• *Kann bedenkenlos automatisiert werden; bestehende Kurslayouts bleiben unverändert.* |
| **Major** | `X.0.0` | **Strukturelle Änderungen mit Kompatibilitätsbruch oder große Aktualisierungen.** Tiefgreifende funktionale Änderungen, die die Aufmerksamkeit der Administration erfordern, Datenbankänderungen oder das Ende der Unterstützung älterer Moodle-Versionen, wodurch die Seite beim Update ausfallen könnte. | • Den Aufbau des Layouts komplett neu gestalten (alte Blockregionen entfernen oder umbenennen).<br>• Namen von Konfigurationsvariablen ändern (die alten Designeinstellungen in `config_plugins` gehen verloren).<br>• Das Design ausschließlich für eine neue Moodle-Hauptversion aktualisieren und ältere nicht mehr unterstützen (erfordert eine Erhöhung von `$plugin->requires`). |

## Weitere Informationen

Die [vollständige Anleitung](accessible-theme-guide.md) erklärt, warum es das Design gibt, welchen Standards es folgt, jede Funktion im Einzelnen, die Schriftarten und ihre Geschichte sowie die bekannten Grenzen. Die technischen Einzelheiten zu den Farbsehfiltern, die Grenzen des hohen Kontrasts und die Geschichte der Schriftarten stehen im Anhang A der Anleitung.

[Quellcode und Veröffentlichungen](https://github.com/f-acedo/moodle-theme_accessible). Fehlermeldungen und Vorschläge: [Issue-Tracker](https://github.com/f-acedo/moodle-theme_accessible/issues).

## Danksagung und Lizenz

Entwickelt von Fernando Acedo und dem ehemaligen Koditik-Entwicklungsteam. Claude Code half beim Schreiben von Teilen des Themes, hat es überprüft und beim Testen geholfen. Claude ist eine Marke von Anthropic, PBC.

Lizenziert unter der **GNU GPL v3 oder später** (siehe `LICENSE.txt`). Die enthaltenen Schriftarten (Lexend Deca, Atkinson Hyperlegible und OpenDyslexic) sind unter der **SIL Open Font License 1.1** lizenziert.
