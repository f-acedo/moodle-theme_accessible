# Tema Accessible per a Moodle: la guia completa

Versió 1.0.0 (estable), per a Moodle 5.2 i posteriors.

Aquesta guia explica què és el tema Accessible, per què existeix, els estàndards que segueix, cada funció que afegeix,
els tipus de lletra que inclou i per què es van triar, com es va provar i què no pot fer. Està escrita per a qualsevol
persona que hagi de decidir si el vol provar: administradors del lloc, responsables d'accessibilitat, docents, personal
de suport i les mateixes persones usuàries.

## Continguts

1. [Què és Accessible](#1-què-és-accessible)
2. [Per què existeix aquest tema](#2-per-què-existeix-aquest-tema)
3. [Principis de disseny](#3-principis-de-disseny)
4. [Estàndards i context legal](#4-estàndards-i-context-legal)
5. [Opcions d'accessibilitat personals](#5-opcions-daccessibilitat-personals)
6. [Disseny visual: què veu tothom](#6-disseny-visual-què-veu-tothom)
7. [Lectors de pantalla i persones que fan servir el teclat](#7-lectors-de-pantalla-i-persones-que-fan-servir-el-teclat)
8. [Mode d'alt contrast](#8-mode-dalt-contrast)
9. [Filtres de visió del color](#9-filtres-de-visió-del-color)
10. [Tipus de lletra: per què aquests tres](#10-tipus-de-lletra-per-què-aquests-tres)
11. [Funcions per a administradors](#11-funcions-per-a-administradors)
12. [Privadesa i dades](#12-privadesa-i-dades)
13. [Idiomes](#13-idiomes)
14. [Com es va provar el tema](#14-com-es-va-provar-el-tema)
15. [Límits coneguts](#15-límits-coneguts)
16. [Accessible és adequat per al teu lloc?](#16-accessible-és-adequat-per-al-teu-lloc)
17. [Instal·lació i configuració](#17-installació-i-configuració)
18. [Crèdits, llicències i fonts](#18-crèdits-llicències-i-fonts)

Apèndix A. [Referència tècnica](#apèndix-a-referència-tècnica)

---

## 1. Què és Accessible

Accessible és un tema per a **Moodle 5.2 i posteriors**. És un tema fill de **Boost**, el tema estàndard de Moodle, de
manera que conserva la distribució, la navegació i el comportament de Boost, i en canvia l'aspecte, com s'escalen i com
s'anuncien.

Està pensat per a tres grups de persones:

- **Persones cegues** que fan servir un lector de pantalla (com NVDA, JAWS, VoiceOver o TalkBack). Per a elles, el que
  importa és l'ordre en què es llegeix la pàgina, els noms dels botons i de les àrees de navegació, i poder fer-ho tot
  amb el teclat.
- **Persones amb baixa visió**, per exemple algú amb un 30% de la visió normal que fa servir una lupa de pantalla, el
  zoom del navegador o lents especials. Per a elles, el que importa és el contrast, la mida, un indicador de focus clar
  i una distribució que no es trenqui quan tot s'amplia.
- **Persones amb deficiència de la visió del color** (daltonisme). Per a elles, el que importa és que cap informació es
  doni només amb el color, i que els colors que es veuen semblants es puguin veure diferents.

L'objectiu és que aquestes persones puguin **percebre i navegar** per Moodle de manera genuïna i autònoma, no només que
les pàgines passin una llista de comprovació automàtica.

Accessible es pot fer servir de dues maneres: com a **tema del lloc** per a tothom, o com a **tema alternatiu** que cada
usuari pot triar per a si mateix, mentre la resta manté l'aspecte habitual del lloc.

---

## 2. Per què existeix aquest tema

### Les persones usuàries

Els problemes de visió són habituals. L'[*Informe mundial sobre la visió*](https://www.who.int/publications/i/item/9789241516570) (2019) de l'Organització Mundial de la Salut estima que **almenys
2.200 milions de persones** arreu del món tenen una deficiència visual de lluny o de prop. La deficiència de la visió del color afecta aproximadament
**1 de cada 12 homes i 1 de cada 200 dones**, segons [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/). A qualsevol escola, universitat o empresa que faci servir
Moodle, hi ha estudiants, docents i personal en aquests grups, ho hagin dit o no a ningú.

### Moodle i l'accessibilitat

Moodle es pren seriosament l'accessibilitat: el seu nucli es desenvolupa tenint-la en compte i es comprova amb les WCAG.
Boost, el seu tema per defecte, és una base sòlida. Però un tema de propòsit general ha d'equilibrar molts objectius
alhora: la marca, el disseny visual, la densitat d'informació i les necessitats de la persona usuària mitjana. Algunes
decisions que van bé a la majoria són difícils per a les persones a qui va dirigit aquest tema:

- Text gris clar i vores fines que no arriben als nivells de contrast més alts.
- Farcits blau pàl·lid o gris per mostrar l'estat (seleccionat, cursor a sobre, desactivat) que són difícils de veure amb baixa
  visió o amb una lupa.
- Objectius petits (icones, enllaços en files) difícils d'encertar amb un tremolor o amb ampliació.
- Mides i punts de ruptura basats en píxels que no creixen quan l'usuari tria una mida de text més gran.
- Alertes el significat de les quals depèn en bona part del color.

La majoria de temes parteixen d'un disseny visual i corregeixen els problemes d'accessibilitat després, queixa a queixa.
Accessible fa el contrari: **primer va el públic**, i cada decisió sobre color, mida, ordre i redacció es va prendre
pensant en ell.

### No substitueix un bon contingut

Un tema controla el marc que envolta el contingut: menús, botons, formularis, alertes, navegació. No pot reescriure el
que el professorat posa als cursos. Una imatge sense alternativa de text, un PDF escanejat com a imatge o un vídeo sense
subtítols continua sent inaccessible sigui quin sigui el tema. Accessible fa la plataforma tan clara com pot; el
contingut dels cursos continua necessitant l'atenció de qui l'escriu (vegeu [Límits coneguts](#15-límits-coneguts)).

---

## 3. Principis de disseny

Cinc regles guien totes les parts del tema.

1. **Senzill i d'alt contrast per defecte.** El fons és blanc a tot arreu i el text és negre. Els enllaços són negres i
   subratllats (amb un subratllat més gruixut en passar-hi per sobre), no blaus ni morats. S'elimina la decoració que no
   ajuda, i el que és necessari es fa més destacat.
2. **El color mai és l'únic senyal.** Cada estat que Moodle mostra amb color també té una forma, un patró, un símbol o una
   paraula. Les alertes, per exemple, combinen un marc de color, una franja amb patró, un símbol i el tipus de missatge
   escrit.
3. **Marcs de color, no farcits de color.** Les alertes i els missatges d'estat conserven el fons blanc i mostren el seu
   color com a marc (vora). Un farcit de color pàl·lid redueix el contrast del text que hi ha a sobre; un marc, no.
4. **Tot s'escala amb el text.** Les mides són relatives (en `rem`), de manera que una mida de text més gran dona un Moodle
   més gran, amb icones, botons, camps de formulari, calaixos i objectius tàctils que creixen amb el text.
5. **La persona decideix.** El tipus de lletra, la mida del text, l'espaiat, el contrast, el moviment, el focus i la visió
   del color són opcions personals. L'administrador del lloc defineix valors per defecte raonables, i cada usuari els
   pot canviar.

---

## 4. Estàndards i context legal

### WCAG 2.1

Les [**Directrius d'accessibilitat per al contingut web (WCAG) 2.1**](https://www.w3.org/TR/WCAG21/) són la referència internacional per a l'accessibilitat web. Les
publica el [World Wide Web Consortium (W3C)](https://www.w3.org/WAI/) i s'organitzen en quatre principis: el contingut ha de ser *perceptible*,
*operable*, *comprensible* i *robust*. Cada criteri d'èxit té un nivell:

- **Nivell A**: el mínim.
- **Nivell AA**: el nivell que exigeixen la majoria de lleis i normes del sector públic.
- **Nivell AAA**: el nivell més alt. El W3C [no recomana](https://www.w3.org/WAI/WCAG21/Understanding/conformance) exigir l'AAA per a llocs sencers, perquè alguns criteris
  no es poden complir per a tot el contingut.

Les [WCAG 2.2](https://www.w3.org/TR/WCAG22/) (2023) afegeixen criteris a la 2.1, però moltes lleis encara es refereixen a les WCAG 2.1 de nivell AA.

### A què aspira Accessible

Accessible pren com a objectiu les **WCAG 2.1 de nivell AAA** per a tot el que dibuixa el tema. A la pràctica, això vol dir:

| Criteri WCAG | Què demana | Què fa el tema |
|---|---|---|
| [1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced), AAA | 7:1 per al text normal, 4,5:1 per al text gran | Tots els colors del tema estan triats per arribar a 7:1 o més, en contrast normal i alt. Mesurat amb escàners automàtics (vegeu la [secció 14](#14-com-es-va-provar-el-tema)). |
| [1.4.11 Non-text Contrast](https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast), AA | 3:1 per a les vores dels controls, els indicadors de focus i els gràfics que tenen significat | Marcs negres de 2 px als camps, les caselles de selecció i els botons de ràdio; anell de focus negre amb un halo blanc. |
| [1.4.1 Use of Colour](https://www.w3.org/WAI/WCAG21/Understanding/use-of-color), A | El color no és l'única manera de transmetre informació | Les alertes tenen marc + patró + símbol + paraula; els controls desactivats tenen una vora discontínua; els elements seleccionats van en negreta o invertits. |
| [1.4.4 Resize Text](https://www.w3.org/WAI/WCAG21/Understanding/resize-text), AA, i [1.4.10 Reflow](https://www.w3.org/WAI/WCAG21/Understanding/reflow), AA | El text es pot ampliar fins al 200% i la pàgina es reorganitza | Opció de mida del text fins al 200%, tot en `rem`, files que poden passar a la línia següent. Algunes pàgines de Moodle encara es desplacen horitzontalment al 200% (vegeu [Límits coneguts](#15-límits-coneguts)). |
| [1.4.8 Visual Presentation](https://www.w3.org/WAI/WCAG21/Understanding/visual-presentation), AAA | Interlineat, sense text justificat, colors seleccionables per l'usuari | Interlineat de 1,6, opcions d'espaiat, text justificat mostrat alineat a l'inici, opció d'alt contrast. |
| [1.4.12 Text Spacing](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing), AA | La pàgina suporta un interlineat i un espaiat de lletres i de paraules més grans | L'opció d'espaiat «molt ample» aplica exactament els valors de les WCAG (0,12em entre lletres, 0,16em entre paraules) i més interlineat. |
| [2.3.3 Animation from Interactions](https://www.w3.org/WAI/WCAG21/Understanding/animation-from-interactions), AAA | El moviment es pot desactivar | Opció de moviment reduït; també es respecta el paràmetre del sistema `prefers-reduced-motion`. |
| [2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/Understanding/bypass-blocks), A | Saltar el contingut repetit | Enllaç «Ves al contingut principal» el primer de cada pàgina; el contingut principal abans dels blocs. |
| [2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/Understanding/focus-visible), AA | El focus del teclat es pot veure | Anell de focus de 4 px (8 px amb l'opció gruixuda) en lloc del que porta el navegador per defecte. |
| [2.5.5 Target Size](https://www.w3.org/WAI/WCAG21/Understanding/target-size), AAA | Objectius d'almenys 44 × 44 píxels CSS | Els botons i els controls de formulari fan almenys 44 px; els camps, 55 px. Algunes files d'enllaços de Moodle encara són més petites (vegeu [Límits coneguts](#15-límits-coneguts)). |
| [4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/Understanding/name-role-value), A | Els controls i les regions tenen nom | Totes les àrees de navegació tenen nom; el commutador de la contrasenya informa del seu estat. |

### Lleis i normes del sector públic

Moltes lleis d'accessibilitat es basen en les WCAG 2.1 de nivell AA, normalment a través d'altres estàndards:

- **Unió Europea.** La [*Directiva d'accessibilitat web*](https://eur-lex.europa.eu/eli/dir/2016/2102/oj) (Directiva (UE) 2016/2102) cobreix els llocs web i les aplicacions del
  sector públic. L'[*Acta europea d'accessibilitat*](https://eur-lex.europa.eu/eli/dir/2019/882/oj) (Directiva (UE) 2019/882) s'aplica a molts productes i serveis privats des del
  28 de juny de 2025. Totes dues es basen en la norma harmonitzada [**EN 301 549**](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility), que inclou les WCAG 2.1 de nivell AA per al contingut web.
- **Estats Units.** La [**Secció 508**](https://www.access-board.gov/ict/) de la Rehabilitation Act cobreix les agències federals i es refereix a les WCAG 2.0 de nivell AA.
  A l'abril de 2024 el Departament de Justícia [va adoptar](https://www.ada.gov/resources/2024-03-08-web-rule/) les **WCAG 2.1 de nivell AA** com a estàndard tècnic per als llocs web dels governs
  estatals i locals en virtut del títol II de l'Americans with Disabilities Act (ADA). Una norma final provisional d'abril de 2026
  va ajornar un any les dates de compliment (abril de 2027 per a les entitats que atenen 50.000 persones o més, abril de 2028 per a
  les més petites); consulta [ada.gov](https://www.ada.gov/) per veure les dates vigents.
- Altres països tenen normes similars, la majoria basades en les WCAG.

**Què vol dir això per a tu:** Accessible s'ha construït per arribar a les WCAG 2.1 AAA en les parts que controla, que és per sobre
del nivell AA que demanen aquestes lleis. Tanmateix, **el tema no ha estat auditat ni certificat formalment**, i el compliment és una propietat
d'un lloc sencer (plataforma, connectors i contingut), no d'un tema. Accessible et dona una base sòlida; no substitueix
una auditoria d'accessibilitat del teu propi lloc i dels teus cursos.

---

## 5. Opcions d'accessibilitat personals

Cada persona usuària, incloses les visitants que no han iniciat la sessió, té una **pàgina d'opcions d'accessibilitat**. S'hi arriba des de:

- el **botó d'accessibilitat** (el símbol d'accés universal), sempre present a la barra superior de totes les pàgines;
- el mateix botó a l'extrem superior dret de la **pàgina d'inici de sessió**;
- el **perfil** de l'usuari (enllaç «Accessibilitat») i la pàgina de **Preferències**.

Cada opció explica què fa. Pots desar i tornar, desar i continuar, cancel·lar o restaurar els valors per defecte del lloc.

### Tipus de lletra

Tres tipus de lletra, tots inclosos amb el tema: **Lexend Deca** (el per defecte), **Atkinson Hyperlegible** i **OpenDyslexic**.
Vegeu la [secció 10](#10-tipus-de-lletra-per-què-aquests-tres) per saber per què aquests tres.

### Mida del text

**100%, 125%, 150% o 200%.** L'opció canvia la mida de lletra de l'arrel i, com que totes les mides del tema són en `rem`,
tota la pàgina creix amb ella: text, icones, botons, camps de formulari, caselles de selecció, calaixos, barres de desplaçament i objectius tàctils.
Això és diferent del zoom del navegador, que també funciona: l'opció de mida del text manté l'amplada de la finestra i deixa que la distribució
es reorganitzi, per la qual cosa va bé a qui vol un text més gran sense perdre la distribució.

A mides més grans la distribució s'adapta: la barra superior passa a dues files i, quan ocuparia més d'una quarta part
de la finestra, s'amaga en desplaçar-se cap avall i torna en arribar a dalt de la pàgina o quan el focus hi entra. El
menú principal passa abans al botó de menú (☰), perquè la barra deixi espai a la pàgina. Les etiquetes dels formularis
se situen damunt dels camps, els menús passen a la línia següent, les targetes de perfil passen a una sola columna, els
menús llargs reben una alçada màxima perquè es mantinguin dins de la pantalla, la barra de Desa i Cancel·la dels
formularis llargs es queda al final del formulari en lloc de tapar-lo, i les paraules llargues dels títols de secció
dels formularis es divideixen amb guionet en lloc de fer que la pàgina es desplaci horitzontalment.

En pantalles petites la mida del text té un límit perquè cada línia continuï tenint prou paraules: fins al 150% en
pantalles de menys de 768 px (tauletes petites) i fins al 125% per sota de 480 px (mòbils). Les pantalles més grans
reben la mida triada.

### Espaiat del text

- **Normal:** interlineat de 1,6.
- **Ample:** interlineat de 1,8, espaiat entre lletres i entre paraules lleugerament més ample.
- **Molt ample:** interlineat de 2, espaiat entre lletres de 0,12em, espaiat entre paraules de 0,16em i més espai després dels paràgrafs. Són
  els valors de les [WCAG 1.4.12 (Text Spacing)](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing).

Un espaiat més ample ajuda moltes persones lectores amb baixa visió o dislèxia a no perdre's dins de la línia.

### Contrast

- **Normal:** text negre sobre fons blanc, amb groc quan els elements tenen el focus o el cursor a sobre (el per defecte).
- **Alt:** text blanc sobre fons negre, amb el groc reservat per a quan els elements tenen el focus o el cursor a sobre. Vegeu la
  [secció 8](#8-mode-dalt-contrast).

### Moviment

- **Normal** o **Reduït.** El moviment reduït desactiva les animacions, les transicions i el desplaçament suau. Si el sistema
  operatiu està configurat per reduir el moviment, el tema fa el mateix encara que l'opció sigui «Normal». Això ajuda les persones
  amb trastorns vestibulars, i les que fan servir lupa, que poden perdre's quan la pàgina es mou.

### Contorn del focus

- **Normal:** un anell de 4 px al voltant de l'element que té el focus del teclat: negre amb un halo blanc, o groc amb un halo
  negre en alt contrast.
- **Gruixut:** l'anell passa a 8 px, més fàcil de trobar amb una lupa o amb baixa visió.

### Visió del color

Un tipus (**protan**, **deutan**, **tritan** o **sense color**) i una intensitat (**lleu**, **mitjana** o **forta**). Els
colors de la pàgina es desplacen perquè els colors que es veuen semblants per a la persona usuària es vegin diferents. Vegeu la
[secció 9](#9-filtres-de-visió-del-color).

### On es desen les opcions

- **Usuaris amb sessió iniciada:** com a preferències d'usuari de Moodle, de manera que el segueixen a qualsevol ordinador.
- **Visitants i convidats:** en una cookie (vegeu la [secció 12](#12-privadesa-i-dades)).
- **Al primer inici de sessió:** si el compte encara no té opcions pròpies, les opcions triades com a visitant es copien al
  compte i un missatge ho indica. Si el compte ja té opcions pròpies, preval el compte. Només es copien les opcions triades en la mateixa visita, just abans d'iniciar sessió: les que hagi deixat al navegador una altra persona en un ordinador compartit, no.

### Canviar de tema

Si el lloc permet que els usuaris triïn el seu tema, la mateixa pàgina té un selector de tema que llista tots els temes instal·lats.
Els usuaris poden provar Accessible i deixar-lo de nou sense demanar-ho a ningú.

---

## 6. Disseny visual: què veu tothom

Aquests canvis s'apliquen a tothom qui fa servir el tema, siguin quines siguin les seves opcions.

### Colors i enllaços

- Fons blanc a tot arreu, text negre.
- Els enllaços són negres i subratllats; el subratllat es fa més gruixut en passar-hi per sobre. No hi ha blau ni morat, i els enllaços visitats
  tenen el mateix aspecte, de manera que mai cal desxifrar el color d'un enllaç.
- El text atenuat (secundari) és un gris fosc que continua arribant a 7:1, mai els grisos pàl·lids d'un tema estàndard.
- El codi en línia es mostra en un magenta fosc que arriba a 7:1 (el rosa de Bootstrap és d'uns 4,8:1).
- El text que un autor ha justificat es mostra alineat a l'inici de la línia: el text justificat crea buits desiguals que
  són difícils de llegir per a moltes persones amb dislèxia o baixa visió.

### Focus

Cada element interactiu mostra un anell negre de 4 px quan té el focus del teclat (8 px amb l'opció gruixuda); els botons i
els camps de formulari també tenen un halo blanc, que manté l'anell visible sobre qualsevol fons. Els botons, els elements de menú
i els enllaços de paginació també s'omplen de groc, amb text negre, quan tenen el focus o el cursor a sobre. En alt contrast el mateix anell és groc,
amb un halo negre. S'elimina la «resplendor» blau pàl·lid de Bootstrap. La pàgina també
deixa espai a la part superior quan es desplaça fins a un element amb focus, de manera que la barra superior fixa no el tapa mai.

### Botons i objectius

- Cada botó té una mida mínima de **44 × 44 px** (la mida d'objectiu AAA de les WCAG) i un farciment generós.
- Les barres de paginació, com el filtre d'inicials de la A a la Z de la pàgina de participants, tenen objectius de 44 px amb un marc de 2 px;
  l'element actual és blanc sobre negre i en negreta; en passar-hi per sobre es fa groc.
- Els controls desactivats tenen un farcit gris **i** una vora discontínua, de manera que no es mostren només amb el color.

### Formularis

- Els camps de text, els menús desplegables, les àrees de text i els botons fan tots **55 px** d'alçada.
- Les caselles de selecció i els botons de ràdio els dibuixa el tema: **28 px**, amb una vora negra de 2 px. Marcat vol dir negre amb una
  marca o un punt blanc; desactivat vol dir una vora discontínua i un farcit gris.
- Els camps obligatoris conserven un asterisc clar, i els missatges de validació només es mostren quan hi ha un error, emmarcats i
  al costat del camp.
- El commutador del mode d'edició de la barra superior és una pista blanca amb un botó negre quan està desactivat, i una pista negra amb un botó blanc
  quan està activat, de manera que el seu estat es mostra per la posició i la forma, a més del color.

### Alertes i notificacions

Les alertes de Moodle (error, avís, èxit, informació) es redissenyen perquè el seu significat no depengui mai del color:

- un **fons blanc** (sense farcit tenyit), de manera que el text conserva tot el contrast;
- un **marc de color** del color de l'alerta;
- una **franja amb patró** a l'esquerra, diferent per a cada tipus;
- un **símbol** al costat de la primera línia de text;
- el **tipus escrit en negreta** abans del missatge: «Error:», «Avís:», «Èxit:», «Informació:»;
- una descripció emergent sobre la franja i el símbol amb el tipus d'alerta.

Una persona que no veu cap color, o que fa servir un lector de pantalla, rep igualment el tipus de missatge. Les alertes escrites per
altres connectors amb el marcatge d'alerta senzill també reben el marc, el patró i el símbol (però no la paraula escrita, que ve
de les plantilles d'alerta del mateix tema).

### Barres de desplaçament

Les barres de desplaçament són de **24 px** d'amplada, amb un lliscador negre sobre una pista blanca emmarcada, a tot arreu: pàgina, calaixos i taules. No
tenen cap efecte en passar-hi per sobre ni en arrossegar, expressament: una barra de desplaçament que canvia de mida o de color sota el punter salta
per a les persones amb tremolor o amb lupa. L'amplada funciona a Chrome, Edge i altres navegadors basats en Chromium; Firefox manté la seva pròpia
amplada però fa servir els colors.

### Capçalera i peu de pàgina

- La barra superior només mostra el que importa i és negra amb text blanc en tots els modes.
- El peu de pàgina sempre és visible i curt: s'eliminen els botons flotants d'ajuda i de comunicació, la línia «Heu iniciat sessió com a» i la
  versió de Moodle. Es conserven els enllaços afegits per connectors (per exemple el resum de conservació de dades).
- Els avatars d'inicials (els cercles de colors amb lletres) s'amaguen, tret que siguin l'enllaç a un perfil; les fotos
  d'usuari es mantenen.

---

## 7. Lectors de pantalla i persones que fan servir el teclat

Accessible es va comprovar amb l'arbre d'accessibilitat del navegador i amb escàners de teclat (vegeu la
[secció 14](#14-com-es-va-provar-el-tema)). Els canvis són:

- **L'enllaç de salt, primer.** «Ves al contingut principal» és el primer element de totes les pàgines.
- **Les opcions d'accessibilitat, segones.** El botó d'accessibilitat és el següent element en l'ordre del teclat, de manera que una persona pot
  arribar a les seves opcions amb dues pulsacions de tecla. (Es mostra a la dreta de la barra superior.)
- **El contingut principal abans dels blocs.** A Boost, el calaix de blocs va abans del contingut principal al codi de la pàgina. A
  Accessible va després, de manera que un lector de pantalla llegeix primer el contingut de la pàgina. La distribució visual no canvia.
- **Totes les àrees de navegació tenen nom**: «Menú principal», «Menú de la pàgina», «Índex del curs» i els menús dins de les pàgines, de manera que una persona
  que llista els punts de referència d'una pàgina sap què és cadascun.
- **El camp de contrasenya** té un botó «Mostra la contrasenya» que indica al lector de pantalla si la contrasenya és visible
  (premut o no premut).
- **Torna a dalt.** Apareix un botó a la part inferior dreta quan s'ha desplaçat la pàgina aproximadament una pantalla. Porta
  la persona a la part superior i posa el focus a l'enllaç de salt, de manera que les persones que fan servir el teclat o un lector de pantalla tornen realment a
  l'inici, no només la pàgina visual. S'amaga mentre el focus és sobre contingut que hi ha a sota, de manera que mai tapa l'element
  amb focus.
- **Botó «← Torna al curs»** a la part superior de l'índex del curs dins d'una activitat, per tornar a la pàgina del curs.
- **L'índex del curs s'obre i es tanca al mateix lloc.** A Boost, el botó que tanca l'índex del curs és a l'altre extrem
  de la capçalera, lluny del botó que l'obre. A Accessible apareix just on era el botó d'obrir, de manera que el calaix
  s'obre i es tanca sense moure el punter ni la vista ampliada, i és el primer element del calaix per al teclat.

---

## 8. Mode d'alt contrast

L'alt contrast és una opció personal (i pot ser el valor per defecte del lloc). Converteix la pàgina en **text blanc sobre un fons
negre**:

- El text secundari és un gris molt clar (#E0E0E0), encara per sobre de 7:1 sobre negre.
- Els enllaços són blancs i subratllats, com el text.
- El **groc** (#FFE600) es fa servir només quan els elements tenen el focus o el cursor a sobre: farcits en passar-hi per sobre i l'anell de focus, amb text negre sobre groc.
- Les alertes conserven els marcs, els patrons i els símbols, en colors més brillants que arriben al nivell de contrast sobre negre.
- Les targetes, els menús, els diàlegs i els formularis de Moodle passen a fosc amb el mode fosc del mateix Bootstrap, de manera que són coherents.
- La barra superior conserva el seu aspecte habitual, i l'àrea d'edició de l'editor (TinyMCE) s'enfosqueix amb un filtre.

El mode normal no es veu afectat: la paleta clara és exactament la mateixa amb aquesta opció disponible o sense.

El que l'alt contrast no pot canviar (H5P, iframes, contingut dels docents amb colors propis) es llista a
[Límits coneguts](#15-límits-coneguts).

---

## 9. Filtres de visió del color

### Què fan

La deficiència de la visió del color vol dir que alguns colors que es veuen diferents per a la majoria de persones es veuen iguals per a la persona usuària, sobretot
vermells i verds. L'opció de visió del color aplica un filtre sobre tota la finestra que **mou els colors que la persona usuària
no pot distingir cap a colors que sí que pot distingir**, de manera que les diferències tornen a ser visibles.

### Les opcions

- **Tipus:**
  - **Protan:** sensibilitat feble o nul·la al vermell.
  - **Deutan:** sensibilitat feble o nul·la al verd.
  - **Tritan:** sensibilitat feble o nul·la al blau.
  - **Sense color:** la pàgina es mostra en grisos.
- **Intensitat:** **lleu** (els tipus «-anomalia», on el con funciona parcialment), **mitjana**, o **forta** (els tipus «-anopia»,
  on el con no hi és). La vista sense color ignora la intensitat.

Si una persona no sap quin és el seu tipus, pot provar-los tots i quedar-se amb aquell on les coses vermelles, verdes i blaves es vegin més
diferents. És una ajuda, no una prova mèdica.

### Com funciona

Cada filtre és una matriu de color SVG aplicada a través d'una capa sobre tota la finestra, construïda en dos passos:

1. **Simulació:** el que veu una persona amb aquesta deficiència, amb el [model publicat](https://doi.org/10.1109/TVCG.2009.113) de Machado, Oliveira i
   Fernandes (2009), escalat per la intensitat triada.
2. **Correcció:** la part del color que la persona usuària no pot veure es mou cap als canals que encara pot veure (vermell cap al
   verd i el blau per a protan i deutan; blau cap al vermell i el verd per a tritan). Aquesta tècnica es coneix com a
   «daltonització».

**El blanc, el gris i el negre no canvien**, de manera que el text i els fons conserven el contrast.

### Com es va comprovar

Es van dibuixar mostres de color sobre una pàgina amb cada combinació de tipus i intensitat, i es van tornar a llegir els colors dels seus píxels.
El blanc, el negre i el gris no van canviar en cap cas; cada intensitat va moure els colors més lluny que
l'anterior; la vista sense color va convertir cada mostra en un gris pur.

### Límits

- Les matrius vénen de valors publicats. **No s'han validat clínicament**, i només les persones amb deficiència de la visió del color
  poden confirmar que ajuden. Es recomana provar-ho amb persones usuàries reals sobre contingut de cursos real.
- Les imatges i els vídeos també es filtren, perquè el filtre cobreix tota la finestra. Això inclou H5P i
  incrustacions de tercers com YouTube i Vimeo a Chrome, Edge i Firefox. En un navegador que no pot aplicar la capa, el filtre
  s'aplica a la pàgina i les incrustacions de tercers conserven els seus propis colors.
- El **vídeo a pantalla completa** i els diàlegs modals natius els dibuixa el navegador per sobre de tot i no es filtren. Els
  filtres de color del sistema operatiu (Windows, macOS, iOS i Android) els cobreixen.
- No s'ha mesurat l'efecte d'un filtre sobre tota la finestra en la velocitat dels ordinadors lents.

### Prova de visió del color per a administradors

La pestanya **Informació** de la configuració del tema mostra la mateixa imatge de prova onze vegades: l'original, la vista sense color
i cada tipus en cada intensitat. Els administradors poden veure com es veuen els colors del lloc per a cada persona usuària. La imatge és el
dibuix propi del tema, no una làmina d'Ishihara, i no és una prova mèdica.

---

## 10. Tipus de lletra: per què aquests tres

### Per què oferir una elecció

Cap tipus de lletra és el millor per a tothom. La comoditat de lectura depèn de la persona, dels seus ulls i de la tasca. Per això el tema
inclou tres tipus de lletra amb objectius de disseny diferents, deixa que cada usuari els provi i es quedi amb el que li funciona, i
deixa que l'administrador triï el per defecte del lloc.

Els tres s'inclouen amb el tema com a fitxers de tipus de lletra web: **no s'envia cap sol·licitud a Google Fonts ni a cap altre servei
extern**, cosa que és millor per a la privadesa i funciona en xarxes sense accés a Internet. Els tres tenen llicència
**SIL Open Font License 1.1**. La pestanya Informació de la configuració del tema mostra una mostra de cada tipus de lletra, en normal i en
negreta, incloent-hi els caràcters que més fàcilment es confonen: `I / l / 1`, `O / 0`, `rn / m`, `cl / d`.

| Tipus de lletra | Fet per | Idea principal |
|---|---|---|
| [**Lexend Deca**](https://www.lexend.com/) (per defecte) | Dr. Bonnie Shaver-Troup i Thomas Jockin | Espaiat ample i uniforme entre lletres per fer la lectura més fluida |
| [**Atkinson Hyperlegible**](https://www.brailleinstitute.org/freefont/) | Braille Institute of America, dissenyat amb Applied Design Works | Formes de lletra fàcils de distingir, per a la baixa visió |
| [**OpenDyslexic**](https://opendyslexic.org/) | Abbie Gonzalez | Parts inferiors de les lletres més pesades, pensades per ajudar les persones lectores amb dislèxia |

### Lexend Deca (el per defecte)

**Història.** Lexend és obra de la Dra. Bonnie Shaver-Troup, terapeuta educativa, i del dissenyador de tipus Thomas
Jockin. A partir de la seva feina amb persones lectores amb dificultats, ella va proposar que la lectura millora amb un tipus de lletra de pal sec, proporcions
expandides i un espaiat entre caràcters més ample. El van desenvolupar al voltant del 2018 i es va publicar a
[Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) el 2019. Lexend es basa en [Quicksand](https://fonts.google.com/specimen/Quicksand), un tipus de lletra iniciat per Andrew
Paglinawan el 2008. La família té set amplades, des de **Deca** (la més estreta) fins a Zetta (la més ampla); el 2021 es va afegir un
eix de pes.

**Per què és el per defecte.** Lexend Deca és un tipus de pal sec net i obert, amb un espaiat generós que continua sent prou compacte per a
una interfície densa com la de Moodle, i es llegeix bé a mides petites i grans.

### Atkinson Hyperlegible

**Història.** Atkinson Hyperlegible es va crear per al **Braille Institute of America** i es va publicar el 2019, l'any
del centenari de l'institut. El va dissenyar l'agència Applied Design Works com a part de la nova marca de l'institut,
i porta el nom del fundador de l'institut, J. Robert Atkinson. Va guanyar el premi Innovation by Design de Fast Company del 2019
i, el 2024, va entrar a la col·lecció permanent del Cooper Hewitt, Smithsonian Design Museum. El 2025 el Braille
Institute va publicar **Atkinson Hyperlegible Next**, amb més pesos i una compatibilitat d'idiomes més àmplia, i una versió
monoespaiada.

**La idea.** La majoria de tipus de lletra busquen lletres uniformes. Atkinson Hyperlegible fa el contrari: dona prioritat a les
**diferències entre caràcters** perquè les persones lectores amb baixa visió les puguin distingir, amb formes obertes i formes
diferenciades per a parelles fàcils de confondre, com la I majúscula, la l minúscula i el número 1, o la O i el 0.

**Per què s'ofereix.** És el tipus de lletra dissenyat més directament per a les persones usuàries amb baixa visió a qui serveix aquest tema. El tema
inclou la versió original en normal i en negreta.

### OpenDyslexic

**Història.** OpenDyslexic el va crear Abbie Gonzalez, que té dislèxia, i es va publicar per primera vegada el 2011. És de codi
obert i originalment deriva de Bitstream Vera Sans.

**La idea.** Les seves lletres tenen **parts inferiors més pesades**. L'autora diu que el pes mostra cap on és el «a baix», cosa que
ajuda les persones lectores a reconèixer les lletres i pot evitar que les girin o les rotin mentalment (per exemple b, d, p i q).
Les formes de les lletres també es fan més diferenciades, i l'espaiat és més ample.

### Què cobreixen els tipus de lletra

Lexend Deca i Atkinson Hyperlegible s'inclouen amb els jocs de caràcters llatí i llatí estès, els mateixos fitxers que
serveix Google Fonts, que cobreixen els set idiomes del tema i la majoria d'idiomes europeus; aquests dos tipus de
lletra no tenen caràcters grecs ni ciríl·lics. OpenDyslexic s'inclou completa, tal com la publica la seva autora: a més
del llatí, cobreix el grec, el ciríl·lic i l'alfabet fonètic internacional. Els caràcters que un tipus de lletra no té
(per exemple l'àrab o les escriptures asiàtiques, o el grec i el ciríl·lic a Lexend Deca i Atkinson Hyperlegible) es
mostren amb el tipus de pal sec del sistema.

---

## 11. Funcions per a administradors

### Configuració del tema

- Pestanya **Valors per defecte dels usuaris**: el tipus de lletra, la mida del text, l'espaiat, el contrast, el moviment i el focus per defecte per a tot el lloc,
  incloent-hi els visitants i la pàgina d'inici de sessió. L'elecció pròpia d'un usuari sempre preval sobre el valor per defecte. (La visió del color no té
  valor per defecte del lloc, perquè és personal.)
- Pestanya **Informació** (l'última pestanya):
  - la versió del tema, llegida de la informació del connector;
  - un botó **Documentació**, a la part superior, que obre aquesta guia en una pestanya nova, en l'idioma de la persona usuària quan la
    guia s'hi ha traduït i en anglès en cas contrari. La pàgina també ofereix la guia com a fitxer Markdown per
    baixar. Només els administradors la poden obrir;
  - un **resum per al suport** amb línies de text pla (versions del tema, de Moodle, de PHP, de la base de dades i del servidor web, tema en ús,
    idioma i les opcions d'accessibilitat de l'administrador). El navegador hi afegeix la mida de la finestra, la proporció de píxels, la mida
    de lletra de l'arrel i els seus paràmetres de moviment reduït, contrast i colors forçats. Un botó **Copia la informació** ho copia tot al
    porta-retalls per a un informe d'error. El resum mai conté l'adreça del lloc, rutes de fitxers ni dades personals;
  - enllaços a la pàgina d'opcions d'accessibilitat i a la pestanya Valors per defecte dels usuaris;
  - la **prova de visió del color** (vegeu la [secció 9](#9-filtres-de-visió-del-color));
  - una mostra dels quatre tipus d'**avís** (èxit, informació, advertència i error), tal com els veuen els usuaris amb les opcions actuals (vegeu la [secció 6](#6-disseny-visual-què-veu-tothom)). Els lectors de pantalla els llegeixen com a text normal, no com a avisos;
  - les **mostres dels tipus de lletra** (vegeu la [secció 10](#10-tipus-de-lletra-per-què-aquests-tres));
  - les **llicències** del tema i dels tipus de lletra, amb un enllaç al text oficial i a la còpia inclosa amb el
    tema.

### Favicon

El tema porta el seu propi favicon (la icona petita de la pestanya del navegador), `pix/favicon.ico`. Per fer servir el teu, puja'l a *Administració del lloc > Aparença > Logotips* (**Favicon**): llavors Moodle el mostra en lloc del del tema. També pots substituir el fitxer `pix/favicon.ico`, però la següent actualització del tema hi tornarà a posar l'original.

### Tema del lloc o elecció de l'usuari

- **Com a tema del lloc:** tothom rep Accessible, amb els valors per defecte del lloc que hagis definit.
- **Com a elecció:** conserva el teu tema habitual del lloc i activa **Permet temes d'usuari**. Cada usuari podrà triar Accessible
  (i tornar enrere) des de la seva pàgina d'opcions d'accessibilitat, i la resta mantindrà l'aspecte habitual.

### Un enllaç d'inici de sessió que obre Accessible

Quan Accessible és una opció de l'usuari i no el tema del lloc, la pàgina d'inici de sessió a la qual s'arriba des de
l'adreça del lloc fa servir el tema del lloc. Un usuari que depèn d'Accessible ha d'entrar per una pàgina que li pot
resultar difícil de fer servir.

Si **Permet canvis de tema des de l'URL** està activat (`allowthemechangeonurl`), pots donar a aquests usuaris un enllaç
d'inici de sessió que obre Accessible directament: `https://your.site/login/index.php?theme=accessible`. El tema es desa
a la sessió, de manera que es manté després d'entrar i, fins que l'usuari tanca la sessió, té prioritat sobre el tema
triat al seu perfil.

Contrapartida: el paràmetre ha de seguir activat perquè l'enllaç funcioni, i mentre ho està qualsevol persona pot
canviar el tema de la seva pròpia sessió amb el paràmetre de l'URL. No el pot canviar per a altres persones.

### Avisos quan els usuaris no poden fer servir les seves opcions

Si **Permet temes d'usuari** està desactivat, els usuaris no poden triar el tema per a si mateixos. El tema avisa d'això en dos llocs:

- una alerta a la pàgina de notificacions d'administració, amb un enllaç a l'ajust;
- una comprovació a *Informes > Estat del sistema* (la pàgina d'estat del sistema de Moodle).

---

## 12. Privadesa i dades

- **Usuaris amb sessió iniciada:** cada opció es desa com a preferència d'usuari de Moodle (`theme_accessible_font`,
  `theme_accessible_fontsize`, etc.). Estan declarades al proveïdor de l'**API de privadesa** del tema i s'inclouen a
  l'exportació de dades de l'usuari.
- **Visitants i convidats:** les opcions es desen en una cookie anomenada `MoodleAccessible` seguida del nom de la cookie de sessió del
  lloc. Només conté les opcions de visualització (com a JSON), és `HttpOnly` i `SameSite=Lax`, dura un any i es
  comprova amb la llista de valors vàlids cada vegada que es llegeix. Quan un usuari amb sessió iniciada desa les opcions, la cookie
  les reflecteix perquè la pàgina d'inici de sessió mostri l'última elecció. La cookie s'esborra quan l'usuari tanca la sessió, de manera que en un ordinador compartit la persona següent no veu ni hereta aquestes opcions. Un visitant que no inicia sessió conserva la cookie, així que als ordinadors públics (biblioteques, aules) configura el navegador perquè esborri les dades en sortir o perquè obri finestres de convidat o privades; si no, la persona següent veurà la pàgina amb aquestes opcions fins que les canviï. **Esmenta aquesta cookie a la política de privadesa i de cookies del teu lloc.**
- **Pàgina d'opcions sense iniciar sessió:** la pàgina d'opcions d'accessibilitat s'obre sense sessió fins i tot quan **Obliga els usuaris a iniciar una sessió** està activat, perquè les persones puguin ajustar la pàgina abans d'iniciar sessió. Els visitants només veuen el formulari d'opcions, amb el disseny de la pàgina d'inici de sessió (sense blocs, menús ni navegació), i les seves eleccions només van a la cookie del seu propi navegador.
- **Cap sol·licitud externa:** els tipus de lletra, les icones i els filtres els serveix el teu propi lloc.
- **Cap seguiment:** el tema no recull dades d'ús.

---

## 13. Idiomes

Els textos del tema estan disponibles en **set idiomes**: anglès, espanyol, català, francès, italià, alemany i portuguès
del Brasil. Les traduccions estan disponibles als paquets d'idioma de Moodle: quan un lloc té instal·lat el paquet d'un
idioma, el tema es mostra en aquest idioma. Els textos i les traduccions es van escriure amb IA (Claude). Els textos en
anglès, espanyol i català els han revisat persones. Aquesta guia està disponible en els mateixos idiomes.

---

## 14. Com es va provar el tema

Les afirmacions sobre accessibilitat només valen el que es va comprovar. Això és el que es va comprovar i com.

### Escàners automàtics

Es van executar tres scripts amb Playwright (una eina d'automatització del navegador) a Moodle 5.2 i Moodle 5.3,
a **Chromium** i **Firefox**:

- Un **escàner complet** sobre 27 pàgines (tauler, curs, activitats, fòrums, qüestionari i intent de qüestionari, participants,
  qualificacions, calendari, administració, formularis, inici de sessió...) amb una mida de text del **100%, 125% i 200%**, en **contrast normal i alt**.
  Comprova el contrast de cada tros de text visible amb el seu fons real (7:1, o 4,5:1 per al text
  gran), els noms accessibles, els punts de referència, els id duplicats, l'ordre dels encapçalaments i la mida dels objectius.
- Un **escàner de teclat**: ordre de tabulació, trampes de focus, indicador de focus visible i focus amagat darrere d'elements fixos.
- Un **escàner de contrast** d'una llista més curta de pàgines, que es fa servir després de cada canvi d'estils.

**Resultat:** cap error de contrast en cap pàgina, mida, mode ni navegador. Els escàners a
Moodle 5.2 i Moodle 5.3 no en van trobar cap al 100%, 125% i 200% de mida de text, en contrast normal ni alt. Les altres troballes
es llisten a [Límits coneguts](#15-límits-coneguts).

Els filtres de visió del color es van comprovar llegint els colors dels píxels (vegeu la [secció 9](#9-filtres-de-visió-del-color)).

### Proves automàtiques

El tema inclou proves PHPUnit (preferències, valors per defecte i validació de cookies, hooks, comprovació d'estat, proveïdor de privadesa,
el resum per al suport, compilació d'SCSS) i escenaris Behat (la pàgina d'opcions per a
usuaris i visitants, l'avís d'administració, la pestanya Informació).

Es van executar en les dues versions:

| | Moodle 5.2 | Moodle 5.3 |
| --- | --- | --- |
| PHPUnit (61 proves, 332 asserts) | totes van passar | totes van passar |
| Behat (17 escenaris, 124 passos) | tots van passar | **15 van passar, 2 van fallar** |

Els dos escenaris Behat que fallen a Moodle 5.3 són els de l'avís d'administració. Fallen en el pas que
obre *Informes > Estat del sistema* a través de la barra de navegació superior, no en el que comproven. Moodle 5.3 dibuixa aquesta barra amb un
component nou i el tema encara fa servir el marcatge clàssic (vegeu [Límits coneguts](#15-límits-coneguts)). Les pàgines i les
opcions funcionen; només el pas de la prova no troba la barra.

### Comprovacions del codi

- **Les comprovacions de connectors de Moodle** (moodle-plugin-ci 4.5), executades a Moodle 5.2 i de nou a 5.3: validació del connector, PHP lint,
  PHPDoc, savepoints d'actualització, plantilles Mustache (renderització i validació d'HTML), tot sense errors ni avisos.
- **Estil de codi:** `phpcs` amb l'estàndard de Moodle és net; ESLint no informa d'errors ni avisos a
  `javascript/accessible.js`; stylelint no en informa a l'SCSS, amb unes poques excepcions documentades
  (`!important` és deliberat, per superar els estils de Boost).
- **Les refactoritzacions d'estils** es demostren innòcues amb una eina de comparació: compara els estils calculats de ben bé més
  de 100.000 elements abans i després d'un canvi, i comprova que cap parella de regles en competència hagi canviat d'ordre.

### WAVE

Les pàgines principals es van comprovar amb l'extensió [WAVE](https://wave.webaim.org/) de WebAIM, a Chrome. Totes obtenen
10 sobre 10 a la puntuació AIM automàtica de WAVE. La puntuació AIM compara una pàgina amb altres pàgines web; com diu el mateix
WebAIM, una puntuació alta no demostra que una pàgina sigui accessible o conforme, i per això el tema també es va provar a mà.

### Què no s'ha fet

- **Lectors de pantalla:** el tema es va provar a mà amb NVDA. Encara no s'ha provat amb JAWS, VoiceOver ni TalkBack.
  L'estructura de la pàgina també es va comprovar a través de l'arbre d'accessibilitat del navegador, que és el que llegeixen els
  lectors de pantalla.
- **Les proves del navegador no van cobrir Safari**, i a Moodle 5.3 dos escenaris Behat fallen (vegeu més amunt).
- **El reproductor de vídeo s'ha comprovat a Chromium i Firefox sense finestra**, no a mà en una finestra normal de Chrome o
  Firefox, i no amb tot tipus de contingut (fitxers de vídeo locals, només àudio, subtítols, emissions en directe).
- **Cap prova amb persones usuàries** cegues, amb baixa visió o amb deficiència de la visió del color.
- **Només auditories internes;** cap auditoria ni certificació externa.

Els comentaris de persones usuàries i d'especialistes en accessibilitat són la contribució més valuosa que pot rebre el projecte.

---

## 15. Límits coneguts

### Contingut que el tema no controla

- Les **activitats H5P** i altres **iframes incrustats** (vídeos, eines externes, LTI, documents incrustats) tenen la seva pròpia
  pàgina i els seus estils. El tema no en pot canviar els colors, de manera que l'alt contrast no els arriba. El filtre de visió del color
  sí que els cobreix, amb les excepcions que es llisten a la [secció 9](#9-filtres-de-visió-del-color).
- El **text acolorit a mà** al contingut del curs (colors definits a l'editor, text enganxat de Word o del web) conserva els seus
  colors, perquè els colors en línia guanyen al tema. Un docent que posi text fosc sobre un farcit pàl·lid el conserva, fins i tot en alt
  contrast. El professorat hauria de deixar el color del text al tema.
- Les **imatges** conserven els seus píxels: el text dins d'una imatge no s'amplia, i l'alt contrast no el torna a acolorir (només
  el filtre de visió del color en desplaça els colors, com fa amb tota la finestra). Les imatges necessiten una alternativa de text.
- **L'àrea d'edició de l'editor** (TinyMCE) és un document separat. En alt contrast s'enfosqueix amb un filtre, cosa
  que manté els colors aproximadament correctes però canvia l'aspecte de les imatges mentre s'edita. El contingut desat no canvia.

### Límits que vénen del mateix Moodle

- Algunes pàgines del nucli se salten nivells d'encapçalament (per exemple de h1 a h3 o h4), i alguns iframes d'H5P, TinyMCE i
  pàgines d'administració no tenen títol. Això ve del marcatge propi de Moodle.
- Al 200% de mida de text, el quadern de qualificacions i la pàgina d'intent de qüestionari encara es poden desplaçar
  horitzontalment, pel disseny de Moodle.
- Al 200% de mida de text, la pàgina de gestió de cursos es pot desplaçar horitzontalment, encara més amb els calaixos
  oberts.

### Moodle 5.3

Moodle 5.3 dibuixa les barres de navegació primària i secundària amb un component nou (`core/nav`) i el commutador del mode d'edició
amb el Switch del sistema de disseny. El tema encara fa servir per a elles el marcatge clàssic de Moodle 5.2. Funciona i és
accessible, però encara no fa servir els components nous de Moodle, i les proves que naveguen per la barra superior amb el
pas estàndard de Behat («I select ... from primary navigation») fallen amb aquest tema a la 5.3. Això està previst per
a una propera versió del tema.

### Mida dels objectius

Els enllaços de la ruta de navegació, les accions de les publicacions dels fòrums (Enllaç permanent, Edita, Respon), els enllaços a l'activitat anterior i la següent i els enllaços de l'índex
del curs fan entre 31 i 34 px d'alçada, per sota dels 44 px de les WCAG AAA. Fer-los més grans faria aquestes llistes molt més llargues;
encara s'està considerant.

### Navegadors

- Les barres de desplaçament amples funcionen als navegadors basats en Chromium (Chrome, Edge, Opera, Brave). Firefox manté la seva pròpia amplada.
- El tema es va provar a Chromium i Firefox. Safari no es va provar.

---

## 16. Accessible és adequat per al teu lloc?

### Tria Accessible quan

- El teu lloc té, o pot tenir, **estudiants, docents o personal que són cecs, tenen baixa visió o tenen deficiència de la visió del color**, i vols que treballin de manera autònoma.
- Tens **obligacions d'accessibilitat** i vols una plataforma construïda cap a les WCAG, l'estàndard que hi ha darrere de la majoria de lleis
  d'accessibilitat.
- Vols **oferir un aspecte alternatiu** al costat del teu tema principal, perquè qui el necessiti pugui canviar.
- Vols un **Moodle tranquil i llegible** per a tothom: sense soroll, amb un contrast fort i una distribució previsible.

### Pensa-t'ho bé quan

- Necessites una **marca forta**, colors personalitzats, imatges de fons o una identitat visual: l'aspecte d'Accessible és
  deliberadament senzill, i els seus colors estan fixats pel contrast.
- Els teus cursos depenen sobretot d'**H5P o d'eines externes**: el tema no pot canviar l'estil del que s'hi executa a dins, de
  manera que aquestes parts conserven els seus propis colors i mides.

### Prova-ho sense risc

Instal·la'l i activa **Permet canvis de tema des de l'URL** (*Administració del lloc > Aparença > Configuració avançada del
tema*, paràmetre `allowthemechangeonurl`). Després obre el teu lloc afegint `?theme=accessible` a l'adreça (per exemple
`https://your.site/my/?theme=accessible`): el tema s'aplica només a la teva sessió. Prova les opcions, obre els teus cursos
al 200% i en alt contrast, i després **torna a desactivar el paràmetre**, perquè mentre està activat qui
conegui el paràmetre pot canviar el tema.
Si vols mantenir un enllaç d'inici de sessió que obri Accessible, consulta
[Un enllaç d'inici de sessió que obre Accessible](#un-enllaç-dinici-de-sessió-que-obre-accessible): en aquest cas el paràmetre es queda activat.

---

## 17. Instal·lació i configuració

### Requisits

- **Moodle 5.2 i posteriors.**
- El tema **Boost**, que ve amb Moodle.
- Cap altre connector. Cap eina de compilació.

### Instal·lació

1. Copia la carpeta del tema a `public/theme/accessible` del codi de Moodle (la carpeta s'ha d'anomenar `accessible`; si
   baixes el ZIP de GitHub, canvia-li primer el nom), o puja el fitxer ZIP des de
   *Administració del lloc > Connectors > Instal·la complements*.
2. Ves a *Administració del lloc > Notificacions* per acabar la instal·lació.
3. Purga les cachés si actualitzes el tema a mà.

### Configuració

- **Com a tema del lloc:** *Administració del lloc > Aparença > Temes*, i tria Accessible.
- **Com a elecció de l'usuari:** activa **Permet temes d'usuari** a *Administració del lloc > Aparença > Configuració avançada del tema*.
- **Valors per defecte:** a la configuració del tema, pestanya **Valors per defecte dels usuaris**, tria el tipus de lletra, la mida del text, l'espaiat, el contrast, el moviment i el
  focus del lloc.
- **Privadesa:** afegeix la cookie dels visitants a la teva política de privadesa o de cookies (vegeu la [secció 12](#12-privadesa-i-dades)).

### Actualització

Instal·la la versió nova sobre l'antiga i visita *Administració del lloc > Notificacions*. Els usuaris conserven les seves opcions.

---

## 18. Crèdits, llicències i fonts

### Crèdits

De **Fernando Acedo** i l'antic **equip Koditik dev**. Claude Code va ajudar a escriure parts del tema, el va revisar i va ajudar a
provar-lo. Claude és una marca registrada d'Anthropic, PBC.

[Codi font i versions](https://github.com/f-acedo/moodle-theme_accessible). Informes d'errors i suggeriments: [gestor d'incidències](https://github.com/f-acedo/moodle-theme_accessible/issues).

### Llicències

- Tema Accessible: **Llicència Pública General de GNU v3 o posterior** ([text oficial](https://www.gnu.org/licenses/gpl-3.0.html); còpia a `LICENSE.txt`).
- Tipus de lletra d'Accessible: **SIL Open Font License 1.1** ([text oficial](https://openfontlicense.org/open-font-license-official-text/); còpies a `fonts/LICENSE-*.txt`).
  - Lexend Deca: Copyright 2019 The Lexend Project Authors.
  - Atkinson Hyperlegible: Copyright 2020 Braille Institute of America, Inc.
  - OpenDyslexic: Copyright 2019 Abbie Gonzalez, Reserved Font Name OpenDyslexic.

### Fonts

Estàndards i legislació:

- [Web Content Accessibility Guidelines (WCAG) 2.1](https://www.w3.org/TR/WCAG21/), W3C.
- [Understanding WCAG 2.1: conformance levels](https://www.w3.org/WAI/WCAG21/Understanding/conformance), W3C.
- [Directiva d'accessibilitat web (UE) 2016/2102](https://eur-lex.europa.eu/eli/dir/2016/2102/oj).
- [Acta europea d'accessibilitat, Directiva (UE) 2019/882](https://eur-lex.europa.eu/eli/dir/2019/882/oj).
- [EN 301 549, ETSI](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility).
- [Estàndards de la Secció 508](https://www.access-board.gov/ict/), US Access Board.
- [Norma web del títol II de l'ADA (2024)](https://www.ada.gov/resources/2024-03-08-web-rule/), Departament de Justícia dels EUA.

Persones usuàries:

- [Informe mundial sobre la visió](https://www.who.int/publications/i/item/9789241516570), Organització Mundial de la Salut, 2019.
- [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/).

Tipus de lletra:

- [Lexend](https://www.lexend.com/) i [Lexend a GitHub](https://github.com/googlefonts/lexend).
- [Atkinson Hyperlegible, Braille Institute](https://www.brailleinstitute.org/freefont/).
- [OpenDyslexic](https://opendyslexic.org/about) i
  [OpenDyslexic a la Viquipèdia](https://en.wikipedia.org/wiki/OpenDyslexic).

Visió del color:

- Machado, G. M., Oliveira, M. M. i Fernandes, L. A. F. (2009), [*A physiologically-based model for simulation of
  color vision deficiency*](https://doi.org/10.1109/TVCG.2009.113), IEEE Transactions on Visualization and Computer Graphics.

---

## Apèndix A. Referència tècnica

Per a especialistes que volen els detalls abans d'instal·lar el tema: com es construeixen els filtres de visió del color i què van
mostrar les comprovacions, fins on van arribar les comprovacions d'alt contrast, i d'on vénen els tipus de lletra inclosos i què diu la recerca
sobre ells. Les seccions 8, 9, 10 i 15 donen la mateixa informació en termes senzills.

### A.1 Filtres de visió del color: implementació i comprovacions

Opció d'usuari a `/theme/accessible/preferences.php`: **Visió del color** (tipus) i **Intensitat**.

#### Com funciona

- Tipus: cap, protan (feble o cec al vermell), deutan (feble o cec al verd), tritan (feble o cec al blau) i mono (sense color, només grisos).
- Intensitat: lleu (els tipus «-anomalia»), mitjana, forta (els tipus «-anopia»). Mono l'ignora.
- L'elecció es desa com a preferències d'usuari `theme_accessible_colortype` i `theme_accessible_colorstrength`
  (`classes/preferences.php`) i arriba a la pàgina com a classes del body: `accessible-colortype-X` i
  `accessible-colorstrength-Y`.
- `templates/colorfilters.mustache` conté nou filtres SVG (3 tipus x 3 intensitats) i el mono. S'inclou a
  `templates/drawers.mustache`. El CSS (final de `scss/styles.scss`) aplica el filtre corresponent a través d'una capa.
- La capa és `body::after`: una caixa fixa que cobreix la finestra, amb `pointer-events: none` i
  `backdrop-filter: url(#accessible-colortype-X-Y)`. Recolora tot el que es dibuixa a sota: la pàgina, les imatges, els elements
  de vídeo, H5P i les **incrustacions de tercers** (YouTube, Vimeo, LTI). No afegeix marcatge, els clics la travessen, no té
  contingut per a les tecnologies de suport, i s'amaga en imprimir.
- Per què no un filtre sobre la pàgina mateixa: un filtre sobre `<html>` no arriba als iframes d'origen creuat a Chromium (un
  marc de YouTube en pausa va sortir idèntic amb el filtre i sense), i un filtre sobre `<body>` el convertiria en el bloc contenidor
  de la barra de navegació fixa i dels calaixos, i en trencaria la posició.
- Allà on el navegador no pot fer servir `url()` a `backdrop-filter`, s'aplica la regla antiga (`filter` sobre `<html>`). En aquest cas,
  les incrustacions de tercers conserven els seus propis colors.
- El que la capa no recolora, perquè el navegador ho dibuixa per sobre de tot: el **vídeo a pantalla completa** i els modals natius
  `<dialog>` oberts amb `showModal()`. Els modals propis de Moodle són elements normals i queden coberts. Les captures de pantalla
  fetes amb eines del navegador (no amb el sistema operatiu) també poden deixar fora l'efecte.

#### Les matrius

Cada filtre és una `feColorMatrix` de 3x3 (aplicada en RGB lineal, el valor per defecte d'SVG):

1. Simulació del con que falta: la matriu de Machado et al. (2009) per a la dicromàcia completa, escalada per la intensitat
   `S = (1 - s) * I + s * M`, amb s = 0,4 (lleu), 0,7 (mitjana), 1,0 (forta).
2. Correcció (el pas habitual de «daltonització»): la part del color que la persona usuària no pot veure, `I - S`, es mou cap als
   canals que encara pot veure: l'error de vermell cap al verd i el blau per a protan i deutan, l'error de blau cap al vermell i el verd per a
   tritan. Resultat: `C = I + shift * (I - S)`.

Cada fila de `C` suma 1, de manera que el blanc, el gris i el negre no canvien. Les matrius es van calcular a mà (no hi ha cap
pas de compilació); torna-les a calcular si canvien les matemàtiques.

Les matrius vénen de valors publicats, no d'una validació clínica. Tracta el filtre com una ajuda, no com una eina
mèdica.

#### Prova

Es van dibuixar vuit mostres (blanc, negre, gris, vermell, verd, blau, groc, vermell taronja) sobre el tauler per a cada
combinació i se'n van llegir els píxels d'una captura de pantalla. Els valors són RGB.

| Tipus | Resultat |
|---|---|
| Cap | Sense canvis: vermell (255,0,0), verd (0,255,0), blau (0,0,255) |
| Protan | El vermell es torna rosa: lleu (255,121,134), mitjana (255,157,173), forta (255,184,203). El verd s'enfosqueix. |
| Deutan | El vermell es torna rosa magenta: lleu (255,72,118), mitjana (255,95,153), forta (255,112,180). |
| Tritan | El blau es torna lila clar: lleu (141,103,255), mitjana (182,134,255), forta (213,158,255). El groc es desplaça cap al verd. |
| Mono | Totes les mostres en gris (R = G = B), per exemple vermell (127,127,127), verd (220,220,220), blau (76,76,76). |

- El blanc (255,255,255), el negre (0,0,0) i el gris (128,128,128) no van canviar en cap combinació.
- Cada nivell d'intensitat mou els colors més lluny que l'anterior.
- Els desplaçaments fan que colors que es veuen semblants per a la persona usuària es diferenciïn en lluminositat o en to.

#### No fet

- Cap validació clínica de les matrius.
- Cap excepció per color: les imatges i el vídeo també es filtren.
- El vídeo a pantalla completa i els diàlegs modals natius no es filtren (vegeu més amunt). Els filtres de color propis del sistema operatiu
  (Windows, macOS, iOS, Android) els cobreixen.
- No s'ha mesurat el rendiment en màquines febles (una capa sobre tota la finestra). En una prova d'escriptori la taxa de desplaçament era
  d'uns 54 fotogrames per segon amb la capa, 59 amb el filtre antic i 61 sense cap opció de color.

### A.2 Alt contrast: abast de les comprovacions

El que l'alt contrast no pot canviar es llista a la [secció 15](#15-límits-coneguts).

El contrast es va comprovar amb un escàner automàtic (text a 7:1, text gran a 4,5:1) al 100%, 125% i 200% de mida de text,
amb el filtre de visió del color activat, en modals, i a les pàgines de tauler, curs, calendari, participants, qüestionari i intent de qüestionari.

### A.3 Tipus de lletra: història i recerca

El tema Accessible inclou tres tipus de lletra i deixa que cada usuari en triï un: **Lexend Deca** (el per defecte), **Atkinson
Hyperlegible** i **OpenDyslexic**. Aquesta part explica d'on ve cadascun, què volien aconseguir els seus dissenyadors,
què diu la recerca, i per què s'ofereixen tipus de lletra com aquests en llocs per a persones amb baixa visió o dislèxia. Els tres
s'inclouen amb el tema (cap sol·licitud a un servei extern de tipus de lletra) i tenen llicència SIL Open Font License 1.1.

#### Què fa que un tipus de lletra sigui més fàcil de llegir

Cap tipus de lletra fa la lectura fàcil per a tothom, i la recerca sobre els «tipus de lletra accessibles» és més petita i més barrejada que
el màrqueting que l'envolta. Aquestes són les idees de disseny que apareixen una vegada i una altra, amb el que se sap de cadascuna:

- **Lletres que no es poden confondre.** Molts tipus de lletra dibuixen gairebé igual la **I** majúscula, la **l** minúscula i el número **1**, i el mateix passa amb la
  **O** i el **0**, la **B** i el **8**, o **rn** i **m**. Una persona lectora amb baixa visió, que
  veu les formes borroses o ampliades, no pot fer servir el context per endevinar. Dibuixar aquests caràcters de manera diferent és la
  idea principal d'Atkinson Hyperlegible.
- **Formes obertes.** Les obertures amples en lletres com la **a**, la **c**, la **e** i la **s** continuen sent llegibles quan la imatge està borrosa
  o ampliada.
- **Espaiat generós.** Les lletres massa juntes interfereixen entre elles, un efecte anomenat *crowding* (aglomeració). En un
  estudi del 2012 amb 74 infants dislèxics de 8 a 14 anys (Zorzi i col·laboradors, publicat a PNAS), un espaiat entre lletres extra gran
  va fer la lectura al voltant d'un 20% més ràpida i va reduir els errors a la meitat, mentre que només un interlineat extra no va tenir cap efecte. L'espaiat ampli és
  també el punt de partida de Lexend, i el tema l'ofereix com una opció separada, a part del tipus de lletra.
- **Lletres de pal sec i rectes.** Les guies per a la dislèxia, com la guia d'estil de la British Dyslexia Association,
  solen recomanar tipus de pal sec senzills, i un estudi de seguiment ocular de 48 persones lectores dislèxiques (Rello i Baeza-Yates,
  2013) va trobar que els tipus de pal sec, monoespaiats i romans (no cursius) van funcionar millor que els de serif, proporcionals i
  cursius. Les revisions posteriors són més prudents: Dyslexia Scotland no informa de cap avantatge consistent del pal sec sobre els tipus
  amb serif, i diu que l'espaiat és un factor més fort que les formes de les lletres.
- **La preferència compta.** Les persones lectores sovint llegeixen millor amb el tipus de lletra al qual estan acostumades i que els agrada. Per això el tema ofereix una
  elecció en lloc d'un únic tipus de lletra prescrit.

El tipus de lletra és només una part de la llegibilitat. La mida, l'espaiat, el contrast i la llibertat de canviar-los importen almenys tant, i
el tema té una opció per a cadascun (vegeu la pàgina d'opcions i les seccions 5 i 8 de la guia).

#### Lexend Deca (el per defecte)

**Història.** Lexend és obra de la Dra. Bonnie Shaver-Troup, terapeuta educativa, i del dissenyador de tipus Thomas
Jockin. El van desenvolupar al voltant del 2018 a partir de la seva feina amb persones lectores amb dificultats, i es va publicar a
[Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) el 2019. Es basa en
[Quicksand](https://fonts.google.com/specimen/Quicksand), un tipus de lletra iniciat per Andrew Paglinawan el 2008. La família té
set amplades, des de **Deca** (la més estreta) fins a Zetta (la més ampla), de manera que l'espaiat entre lletres es pot canviar sense
canviar el tipus de lletra. Des del juny del 2021 tots els tipus són tipus de lletra variables amb un eix de pes.

**La idea.** Espaiat ample i uniforme entre lletres i formes simples i obertes, per fer la lectura més fluida. Moodle és una interfície
densa, de manera que el tema fa servir **Deca**, que conserva l'espaiat generós però continua sent prou compacte per a menús i formularis.

**Què diu l'evidència.** Els dissenyadors informen d'una millor velocitat de lectura en les seves pròpies proves. L'estudi més conegut és petit
(20 alumnes de tercer de primària llegint durant un minut en cinc tipus de lletra) i ve del costat dels dissenyadors. No hem trobat cap replicació
independent. Per això el tema ofereix Lexend Deca com a valor per defecte llegible, no com una ajuda demostrada.

#### Atkinson Hyperlegible

**Història.** El Braille Institute of America el va crear per a persones amb baixa visió i el va publicar el 2019, l'any del
centenari de l'institut. El va dissenyar l'agència Applied Design Works com a part de la nova marca de l'institut, i
porta el nom del fundador de l'institut, J. Robert Atkinson. Va guanyar el premi Innovation by Design de Fast Company del 2019 i
va entrar a la col·lecció permanent del Cooper Hewitt, Smithsonian Design Museum. Més tard es va posar a disposició a Google
Fonts, i el 2025 l'institut va publicar **Atkinson Hyperlegible Next**, amb més pesos i una compatibilitat d'idiomes més àmplia,
i una versió monoespaiada. El tema inclou la versió original en normal i en negreta.

**La idea.** La majoria de tipus de lletra busquen lletres uniformes. Atkinson Hyperlegible fa el contrari: conserva una base convencional de
pal sec i afegeix diferències només allà on dos caràcters són fàcils de confondre:

- la **l** minúscula té una cua i el número **1** un ganxo, de manera que es diferencien entre si i de la **I** majúscula,
  que té serifs;
- la **B** i el **8**, la **O** i el **0** i altres parelles tenen formes diferents, obertures més amples i extrems en angle;
- les lletres s'espaien de manera que les seves vores no es toquin.

El preu és un aspecte irregular: apareixen serifs en algunes lletres i en d'altres no, i alguns angles estan exagerats. Per a
llegir la interfície del tema, això és precisament el que es busca, perquè les lletres estan pensades per distingir-se, no per ser elegants.

**Què diu l'evidència.** És el tipus de lletra dissenyat més directament per a les persones usuàries amb baixa visió a qui serveix aquest tema, i la seva
lògica de disseny és fàcil d'entendre. No hem trobat cap estudi publicat que en mesuri l'efecte sobre la lectura amb un grup de
persones lectores, de manera que l'afirmació es basa en el disseny i en la feina de l'institut mateix.

#### OpenDyslexic

**Història.** Abbie Gonzalez, que té dislèxia, va crear OpenDyslexic i el va publicar el 2011 com a tipus de lletra de codi obert,
derivat de Bitstream Vera Sans.

**La idea.** Les lletres tenen **parts inferiors més pesades**. L'autora diu que el pes dona a cada lletra un «a baix» clar, cosa que
ajuda les persones lectores a reconèixer-la i evita que girin o rotin mentalment lletres com la b, la d, la p i la q. Les formes
de les lletres també es fan més diferenciades, i l'espaiat és més ample.

**Què diu l'evidència.** Els estudis que hem trobat no donen suport a l'afirmació que millori la lectura: un estudi sobre la velocitat i la precisió de
lectura (Wery i Diliberto, 2017) no va trobar cap millora respecte d'altres tipus de lletra, i un estudi posterior de seguiment ocular de
Rello i Baeza-Yates (2016) va trobar que no ho feia millor que tipus de pal sec habituals com Arial o Verdana. Moltes
persones amb dislèxia encara el prefereixen, i la preferència compta, de manera que el tema l'ofereix com una opció i no com una
recomanació.

#### Per què s'ofereixen tipus de lletra com aquests en llocs per a baixa visió i dislèxia

1. **El cost és petit i el benefici pot ser gran per a algunes persones.** Canviar el tipus de lletra no costa res en un tema. Per a una
   persona que troba un tipus clarament més fàcil, pot ser la diferència entre llegir i abandonar.
2. **Les persones som diferents.** La baixa visió té moltes causes (pèrdua del centre o de la vora del camp, borrositat, sensibilitat a l'enlluernament),
   i la dislèxia no es veu igual en totes les persones lectores. No existeix un únic «millor» tipus de lletra, de manera que la resposta assenyada és
   una llista curta de tipus de lletra ben dissenyats que cada persona pugui provar.
3. **Els tres tipus de lletra cobreixen tres plantejaments:** lletres obertes i uniformement espaiades (Lexend Deca), lletres que es distingeixen per
   disseny (Atkinson Hyperlegible) i lletres amb un «pes» diferenciat (OpenDyslexic). Una persona usuària les pot comparar a la
   mateixa pàgina.
4. **Honestedat sobre l'evidència.** Només l'efecte de l'espaiat té un suport sòlid. Per a cada tipus de lletra el tema diu què pretenien els seus
   dissenyadors i què se sap, i no promet cap resultat.

La persona usuària decideix, i l'administrador pot definir el tipus de lletra per defecte per a tot el lloc (pestanya **Valors per defecte dels usuaris** de la configuració del
tema). La pestanya Informació mostra una mostra de cada tipus de lletra, incloent-hi els caràcters que es confonen.

#### Fonts

- Braille Institute: [nota de premsa sobre Atkinson Hyperlegible](https://prnewswire.com/news-releases/braille-institute-launches-new-award-winning-typeface-designed-to-improve-legibility-for-readers-with-low-vision-301012698.html)
  i [la seva disponibilitat a Google Fonts](https://prnewswire.com/news-releases/braille-institutes-atkinson-hyperlegible-typeface-now-available-on-google-fonts-301349120.html);
  [Atkinson Hyperlegible a GitHub](https://github.com/googlefonts/atkinson-hyperlegible).
- Cooper Hewitt, Smithsonian Design Museum: [Atkinson Hyperlegible a la col·lecció](https://collection.cooperhewitt.org/objects/2318809952).
- [Lexend a GitHub](https://github.com/googlefonts/lexend/) i [lexend.com](https://www.lexend.com/).
- Gonzalez, A.: [OpenDyslexic](https://opendyslexic.org/about).
- Wery, J. J. i Diliberto, J. A. (2017), [The effect of a specialized dyslexia font, OpenDyslexic, on reading rate and accuracy](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5629233/), Annals of Dyslexia.
- Rello, L. i Baeza-Yates, R. (2013), [Good fonts for dyslexia](https://doi.org/10.1145/2513383.2513447), ACM ASSETS.
- Rello, L. i Baeza-Yates, R. (2016), [The effect of font type on screen readability by people with dyslexia](https://doi.org/10.1145/2897736), ACM Transactions on Accessible Computing.
- Zorzi, M. i altres (2012), [Extra-large letter spacing improves reading in dyslexia](https://pubmed.ncbi.nlm.nih.gov/22665803/), PNAS.
- Dyslexia Scotland: [Dyslexia-friendly typed formats](https://dyslexiascotland.org.uk/dyslexia-friendly-typed-formats).
- Dezeen: [Atkinson Hyperlegible](https://www.dezeen.com/awards/2020/longlists/atkinson-hyperlegible-typeface-for-people-with-low-vision/).
