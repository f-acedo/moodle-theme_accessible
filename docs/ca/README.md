# Accessible: un tema de Moodle per a persones cegues, amb baixa visió o amb daltonisme

**Languages:** [English](../../README.md) · [Español](../es/README.md) · Català · [Français](../fr/README.md) · [Italiano](../it/README.md) · [Português (Brasil)](../pt_br/README.md) · [Deutsch](../de/README.md)

**_Moodle hauria de funcionar per a totes les persones que l'han d'utilitzar, no només per a les que tenen una vista perfecta._**

Accessible és un tema per a Moodle 5.2 i posteriors, basat en Boost. Es va dissenyar des del principi per a tres grups d'usuaris que solen quedar-se sols davant el problema:

- **Persones totalment cegues** que fan servir un lector de pantalla.
- **Persones amb baixa visió** que fan servir lupes, el zoom del navegador o lents especials.
- **Persones amb deficiència de visió del color** (daltonisme), per a qui «el botó vermell» o «el camp verd» no volen dir res.

L'objectiu és que estudiants, professors i administradors amb aquestes necessitats puguin realment *percebre i navegar* per Moodle, i no només que les pàgines passin una llista de comprovació.

## Per què és diferent

La majoria de temes parteixen d'un disseny visual i arreglen l'accessibilitat després. Accessible funciona al revés: cada decisió sobre color, mida, ordre i redacció es va prendre pensant primer en els seus usuaris.

- **Senzill per disseny.** Fons blanc, text negre, enllaços negres subratllats, objectius grans i un indicador de focus molt marcat. Res de decoratiu que s'hagi de desactivar.
- **El color mai no transmet significat per si sol.** Les alertes tenen un marc de color, un patró, un símbol *i* una paraula escrita («Error:», «Avís:»).
- **Tot escala amb el text.** Les mides són relatives, de manera que un text més gran dona un Moodle més gran: les icones, els botons i els camps creixen juntament amb el text.
- **L'usuari decideix.** Cada persona tria el seu tipus de lletra, mida del text, espaiat, contrast, moviment, focus i visió del color, i ho pot fer abans d'iniciar la sessió.
- **Mesurat, no suposat.** El contrast del text apunta al nivell AAA de WCAG 2.1 (7:1 per a text normal, 4,5:1 per a text gran), comprovat amb anàlisis automàtiques en contrast normal i alt, amb diverses mides de text, a Chromium i Firefox.

## Característiques

### Per a tots els usuaris

- **Opcions personals d'accessibilitat** en una sola pàgina, a la qual s'arriba amb el botó d'accessibilitat que sempre és a la barra superior:
  - **Tipus de lletra:** Lexend Deca (per defecte), Atkinson Hyperlegible o OpenDyslexic. Les tres venen incloses al tema.
  - **Mida del text:** 100 %, 125 %, 150 % o 200 %. Tota la pàgina escala amb ella, icones i botons inclosos.
  - **Espaiat del text:** normal, ampli o molt ampli.
  - **Contrast:** normal (negre sobre blanc) o alt (blanc sobre negre, amb el groc reservat per al cursor a sobre i el focus).
  - **Moviment:** normal o reduït (també es respecta la configuració del sistema).
  - **Contorn del focus:** normal o gruixut.
  - **Filtres de visió del color** per a deficiències de vermell (protan), verd (deután) i blau (tritan), cadascun en tres intensitats, i a més una vista sense color. El blanc, el gris i el negre no canvien mai.
- **Controls grans i tolerants:** objectius d'almenys 44 px als botons, camps de formulari de 55 px, caselles i botons d'opció grans, i barres de desplaçament grans i d'alt contrast (a Chrome, Edge i altres navegadors Chromium; Firefox manté la seva pròpia amplada).
- **Una pàgina que té sentit en escoltar-la:** el contingut principal va abans dels blocs, cada zona de navegació té nom, el camp de contrasenya té un botó «Mostra la contrasenya» que indica si està activat, i apareix un botó «Torna a dalt» en desplaçar-se.
- **Opcions abans d'iniciar la sessió:** el botó d'accessibilitat també és a la pàgina d'accés. En la primera sessió, aquestes opcions es copien al compte, tret que el compte ja en tingui de pròpies.

### Per a administradors

- **Fes-lo servir com a tema del lloc, o ofereix-lo com a opció** al costat del teu tema principal (amb «Permet temes d'usuari» activat). Els usuaris poden tornar a un altre tema des de la mateixa pàgina.
- **Valors per defecte del lloc** per al tipus de lletra, la mida del text, l'espaiat, el contrast, el moviment i el focus, per a tothom, visitants inclosos.
- **Una pestanya Informació** a la configuració del tema, amb una imatge de prova de visió del color, mostres de les fonts, llicències i un resum de suport que pots copiar en un informe d'error.
- **Una comprovació d'estat** (Informes > Estat del sistema) que avisa quan els usuaris no poden triar el tema ni les seves opcions.
- **Privadesa integrada:** les preferències es declaren i s'exporten mitjançant l'API de privadesa de Moodle. Les eleccions dels visitants es desen en una galeta que conté només opcions de visualització.
- **Sense peticions externes de fonts:** les fonts vénen incloses al tema.
- **Set idiomes:** anglès, castellà, català, francès, italià, alemany i portuguès del Brasil. Les traduccions estan disponibles als paquets d'idioma de Moodle.

## Convé saber

- L'aspecte és **deliberadament senzill**. Si necessites una imatge de marca marcada o colors personalitzats, aquest no és el teu tema.
- El tema no pot canviar el contingut que no controla: **activitats H5P, iframes incrustats i text acolorit a mà** en el contingut dels cursos.
- Amb el text al 200 %, unes poques pàgines amples de Moodle (el quadern de qualificacions, la pàgina de gestió de cursos i la pàgina d'intent de qüestionari) encara es poden desplaçar cap als costats.
- Alguns límits vénen del mateix Moodle, com els nivells d'encapçalament que se salten en algunes pàgines del nucli.
- El tema **no ha estat auditat ni certificat formalment**. Cap tema no pot fer accessible un lloc per si sol: el contingut dels cursos importa igual de molt.

## Requisits i instal·lació

- Moodle 5.2 o posterior, i el tema Boost (inclòs amb Moodle).
- A Moodle 5.3 el tema fa servir el menú principal clàssic, no el nou que porta la versió 5.3.
- Copia el tema a `public/theme/accessible` (la carpeta s'ha de dir `accessible`; si baixes el ZIP de GitHub, canvia primer el nom de la carpeta), o instal·la'l des d'*Administració del lloc > Connectors > Instal·la complements*, i acaba la instal·lació des d'*Administració del lloc > Notificacions*.
- Per posar-lo com a tema del lloc: *Administració del lloc > Aparença > Temes*.
- Perquè cada usuari el pugui triar i fixar les seves pròpies opcions, activa **Permet temes d'usuari** (*Administració del lloc > Aparença > Configuració avançada del tema*).
- Quan és una opció de l'usuari, la pàgina d'inici de sessió fa servir el tema del lloc. Per donar als usuaris un enllaç d'inici de sessió que obri Accessible, activa **Permet canvis de tema des de l'URL** i comparteix `https://your.site/login/index.php?theme=accessible` (consulta la [guia](accessible-theme-guide.md#un-enllaç-dinici-de-sessió-que-obre-accessible) per veure'n la contrapartida).

No hi ha pas de compilació: ni Grunt, ni npm, ni webpack.

## Registre de canvis

Versió 1.0.0 (2026-11-11): versió inicial.

## Versionat

**El versionat semàntic (SemVer) és un sistema de numeració estandarditzat que aporta claredat i previsibilitat al desenvolupament de programari: assigna a cada versió un número de tres parts (MAJOR.MINOR.PATCH).** En els connectors i temes de Moodle, la seva finalitat principal és comunicar als administradors del sistema la naturalesa exacta dels canvis de codi i d'estructura abans que actualitzin un lloc en producció. Distingint entre petites correccions visuals, ampliacions de funcions segures i canvis d'arquitectura que trenquen la compatibilitat, SemVer fa que el manteniment de la plataforma sigui segur, que les actualitzacions siguin previsibles i que els desplegaments automatitzats no alterin per descuit l'experiència de l'usuari ni malmetin la configuració de la base de dades.

### Referència de versionat del tema Accessible (SemVer)

| Tipus de versió | Increment de versió | Què implica per a un tema de Moodle | Exemples i detalls tècnics de Moodle |
| :--- | :--- | :--- | :--- |
| **Patch** | `0.0.Z` | **Petits ajustos d'estil i correcció d'errors.** Correccions purament estètiques o internes que no canvien com es configura o s'utilitza estructuralment el tema. | • Corregir un error de farciment CSS o de disseny adaptable.<br>• Ajustar el color d'un botó o el contrast de la tipografia.<br>• Resoldre un avís menor de PHP als registres del servidor.<br>• *Només canvia les darreres xifres de `$plugin->version` a `version.php`.* |
| **Minor** | `0.Y.0` | **Funcions noves o adaptacions segures a la plataforma.** Afegir opcions que no transformen l'estructura del tema, o actualitzar el codi per admetre una versió nova de Moodle mantenint la compatibilitat amb les actuals. | • Afegir una opció de disseny o una regió de blocs nova sense eliminar les antigues.<br>• Introduir un ajust propi nou a `settings.php` (per exemple, un interruptor de la capçalera).<br>• Actualitzar el tema per admetre una versió menor nova de Moodle.<br>• *Es pot automatitzar sense risc; no trenca els dissenys de curs existents.* |
| **Major** | `X.0.0` | **Canvis estructurals que trenquen la compatibilitat o actualitzacions importants.** Canvis funcionals de gran abast que requereixen l'atenció de l'administrador, modificacions de la base de dades o la fi del suport a versions anteriors de Moodle, cosa que podria trencar el lloc en actualitzar. | • Redissenyar per complet l'estructura del disseny (eliminar o canviar el nom de regions de blocs antigues).<br>• Canviar els noms de les variables de configuració (de manera que es perdin els ajustos antics del tema a `config_plugins`).<br>• Actualitzar el tema només per a una versió major nova de Moodle i deixar de donar suport a les anteriors (cal incrementar `$plugin->requires`). |

## Més informació

La [guia completa](accessible-theme-guide.md) explica per què existeix el tema, els estàndards que segueix, cada funció en detall, les fonts i la seva història, i els seus límits coneguts. Els detalls tècnics dels filtres de visió del color, els límits de l'alt contrast i la història de les fonts són a l'annex A de la guia.

[Codi font i versions](https://github.com/f-acedo/moodle-theme_accessible). Informes d'errors i suggeriments: [seguiment d'incidències](https://github.com/f-acedo/moodle-theme_accessible/issues).

## Crèdits i llicència

Desenvolupat per Fernando Acedo i l'antic equip de desenvolupament de Koditik. Claude Code va ajudar a escriure parts del tema, el va revisar i va ajudar a provar-lo. Claude és una marca registrada d'Anthropic, PBC.

Amb llicència **GNU GPL v3 o posterior** (vegeu `LICENSE.txt`). Les fonts incloses (Lexend Deca, Atkinson Hyperlegible i OpenDyslexic) tenen llicència **SIL Open Font License 1.1**.
