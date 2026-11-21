# Tema Accessible per Moodle: la guida completa

Versione 1.0.0 (stabile), per Moodle 5.2 e successive.

Questa guida spiega che cos'è il tema Accessible, perché esiste, gli standard che segue, ogni funzionalità che aggiunge, i
caratteri che include e perché sono stati scelti, come è stato testato e che cosa non può fare. È scritta per chiunque
debba decidere se provarlo: amministratori del sito, responsabili dell'accessibilità, docenti, personale di supporto e
gli utenti stessi.

## Indice

1. [Che cos'è Accessible](#1-che-cosè-accessible)
2. [Perché esiste questo tema](#2-perché-esiste-questo-tema)
3. [Principi di progettazione](#3-principi-di-progettazione)
4. [Standard e contesto normativo](#4-standard-e-contesto-normativo)
5. [Opzioni di accessibilità personali](#5-opzioni-di-accessibilità-personali)
6. [Design visivo: ciò che vedono tutti gli utenti](#6-design-visivo-ciò-che-vedono-tutti-gli-utenti)
7. [Screen reader e utenti da tastiera](#7-screen-reader-e-utenti-da-tastiera)
8. [Modalità ad alto contrasto](#8-modalità-ad-alto-contrasto)
9. [Filtri per la visione dei colori](#9-filtri-per-la-visione-dei-colori)
10. [Caratteri: perché questi tre](#10-caratteri-perché-questi-tre)
11. [Funzionalità per gli amministratori](#11-funzionalità-per-gli-amministratori)
12. [Privacy e dati](#12-privacy-e-dati)
13. [Lingue](#13-lingue)
14. [Come è stato testato il tema](#14-come-è-stato-testato-il-tema)
15. [Limiti noti](#15-limiti-noti)
16. [Accessible è adatto al tuo sito?](#16-accessible-è-adatto-al-tuo-sito)
17. [Installazione e configurazione](#17-installazione-e-configurazione)
18. [Crediti, licenze e fonti](#18-crediti-licenze-e-fonti)

Appendice A. [Riferimento tecnico](#appendice-a-riferimento-tecnico)

---

## 1. Che cos'è Accessible

Accessible è un tema per **Moodle 5.2 e successive**. È un tema figlio di **Boost**, il tema standard di Moodle, quindi
mantiene la struttura, la navigazione e il comportamento di Boost, e cambia il modo in cui appaiono, si ridimensionano e
vengono annunciati.

È pensato per tre gruppi di persone:

- **Persone non vedenti** che usano uno screen reader (come NVDA, JAWS, VoiceOver o TalkBack). Per loro contano l'ordine
  in cui viene letta la pagina, i nomi dei pulsanti e delle aree di navigazione, e la possibilità di fare tutto dalla
  tastiera.
- **Persone ipovedenti**, per esempio chi ha circa il 30% della vista normale e usa un ingranditore dello schermo, lo zoom
  del browser o lenti speciali. Per loro contano il contrasto, la dimensione, un indicatore di focus chiaro e una
  struttura che non si rompe quando tutto viene ingrandito.
- **Persone con deficit della visione dei colori** (daltonismo). Per loro conta che nessuna informazione sia data solo dal
  colore, e che i colori che sembrano simili possano essere resi diversi.

L'obiettivo è che queste persone possano davvero **percepire e navigare** Moodle in autonomia, e non solo che le pagine
superino una lista di controllo automatica.

Accessible si può usare in due modi: come **tema del sito** per tutti, oppure come **tema alternativo** che ogni utente
può scegliere per sé, mentre tutti gli altri mantengono l'aspetto abituale del sito.

---

## 2. Perché esiste questo tema

### Gli utenti

I problemi della vista sono diffusi. Il [*World report on vision*](https://www.who.int/publications/i/item/9789241516570) (2019) dell'Organizzazione mondiale della sanità stima che **almeno
2,2 miliardi di persone** nel mondo abbiano una disabilità visiva da vicino o da lontano. Il deficit della visione dei colori riguarda circa
**1 uomo su 12 e 1 donna su 200**, secondo [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/). In qualsiasi scuola, università o azienda che usi
Moodle, alcuni studenti, docenti e membri del personale appartengono a questi gruppi, che lo abbiano detto a qualcuno o no.

### Moodle e l'accessibilità

Moodle prende sul serio l'accessibilità: il suo nucleo è sviluppato tenendola presente e verificato rispetto alle WCAG.
Boost, il suo tema predefinito, è una base solida. Ma un tema generico deve bilanciare molti obiettivi insieme: identità
visiva, design, densità delle informazioni ed esigenze dell'utente medio. Alcune scelte adatte alla maggior parte delle
persone sono difficili per gli utenti a cui è destinato questo tema:

- Testo grigio chiaro e bordi sottili che non raggiungono i livelli di contrasto più alti.
- Sfondi azzurri o grigi chiari per indicare lo stato (selezionato, passaggio del mouse, disattivato), difficili da
  vedere con una vista ridotta o con un ingranditore.
- Bersagli piccoli (icone, link nelle righe) difficili da colpire con un tremore o con l'ingrandimento.
- Dimensioni e punti di interruzione in pixel che non crescono quando l'utente sceglie un testo più grande.
- Avvisi il cui significato dipende in gran parte dal colore.

La maggior parte dei temi parte da un progetto grafico e sistema i problemi di accessibilità in seguito, un reclamo alla
volta. Accessible fa il contrario: **sono venuti prima gli utenti**, e ogni decisione su colore, dimensione, ordine e
formulazione è stata presa per loro.

### Non sostituisce un buon contenuto

Un tema controlla la cornice che circonda il contenuto: menu, pulsanti, moduli, avvisi, navigazione. Non può riscrivere ciò
che i docenti inseriscono nei loro corsi. Un'immagine senza alternativa testuale, un PDF scansionato come immagine o un
video senza sottotitoli restano inaccessibili qualunque sia il tema. Accessible rende la piattaforma il più chiara
possibile; il contenuto dei corsi richiede comunque l'attenzione di chi lo scrive (vedi [Limiti noti](#15-limiti-noti)).

---

## 3. Principi di progettazione

Cinque regole guidano ogni parte del tema.

1. **Essenziale e ad alto contrasto per impostazione predefinita.** Lo sfondo è bianco ovunque e il testo è nero. I link
   sono neri e sottolineati (con una sottolineatura più spessa al passaggio del mouse), non blu o viola. Le decorazioni
   che non aiutano vengono eliminate, e ciò che è necessario viene reso più evidente.
2. **Il colore non è mai l'unico segnale.** Ogni stato che Moodle mostra con il colore ha anche una forma, un motivo, un
   simbolo o una parola. Gli avvisi, per esempio, combinano una cornice colorata, una striscia a motivo, un simbolo e il
   tipo di messaggio scritto.
3. **Cornici colorate, non sfondi colorati.** Gli avvisi e i messaggi di stato mantengono lo sfondo bianco e mostrano il
   loro colore come cornice (bordo). Uno sfondo colorato chiaro riduce il contrasto del testo che vi si trova; una cornice
   no.
4. **Tutto si adatta al testo.** Le dimensioni sono relative (in `rem`), quindi un testo più grande dà un Moodle più
   grande, con icone, pulsanti, campi dei moduli, pannelli laterali e bersagli che crescono insieme al testo.
5. **Decide la persona.** Carattere, dimensione del testo, spaziatura, contrasto, movimento, focus e visione dei colori
   sono opzioni personali. L'amministratore del sito imposta valori predefiniti ragionevoli e ogni utente può modificarli.

---

## 4. Standard e contesto normativo

### WCAG 2.1

Le [**Web Content Accessibility Guidelines (WCAG) 2.1**](https://www.w3.org/TR/WCAG21/) sono il riferimento internazionale per l'accessibilità del web. Sono
pubblicate dal [World Wide Web Consortium (W3C)](https://www.w3.org/WAI/) e organizzate attorno a quattro principi: il contenuto deve essere *percepibile*,
*utilizzabile*, *comprensibile* e *robusto*. Ogni criterio di successo ha un livello:

- **Livello A**: il minimo.
- **Livello AA**: il livello richiesto dalla maggior parte delle leggi e delle norme per il settore pubblico.
- **Livello AAA**: il livello più alto. Il W3C [non raccomanda](https://www.w3.org/WAI/WCAG21/Understanding/conformance) di richiedere il livello AAA per interi siti, perché alcuni criteri
  non possono essere soddisfatti per tutti i contenuti.

Le [WCAG 2.2](https://www.w3.org/TR/WCAG22/) (2023) aggiungono criteri alla versione 2.1, ma molte leggi fanno ancora riferimento alle WCAG 2.1 livello AA.

### A che cosa punta Accessible

Accessible assume come obiettivo le **WCAG 2.1 livello AAA** per tutto ciò che il tema disegna. In pratica significa:

| Criterio WCAG | Che cosa chiede | Che cosa fa il tema |
|---|---|---|
| [1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced), AAA | 7:1 per il testo normale, 4,5:1 per il testo grande | Tutti i colori del tema sono scelti per raggiungere 7:1 o più, in contrasto normale e alto. Misurato con analisi automatiche (vedi la [sezione 14](#14-come-è-stato-testato-il-tema)). |
| [1.4.11 Non-text Contrast](https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast), AA | 3:1 per i bordi dei controlli, gli indicatori di focus e la grafica che trasmette significato | Cornici nere da 2 px su campi, caselle di controllo e pulsanti di opzione; anello di focus nero con alone bianco. |
| [1.4.1 Use of Colour](https://www.w3.org/WAI/WCAG21/Understanding/use-of-color), A | Il colore non è l'unico modo per trasmettere informazioni | Gli avvisi hanno cornice + motivo + simbolo + parola; i controlli disattivati hanno un bordo tratteggiato; gli elementi selezionati sono in grassetto o invertiti. |
| [1.4.4 Resize Text](https://www.w3.org/WAI/WCAG21/Understanding/resize-text), AA, e [1.4.10 Reflow](https://www.w3.org/WAI/WCAG21/Understanding/reflow), AA | Il testo può essere ingrandito fino al 200% e la pagina si riorganizza | Opzione di dimensione del testo fino al 200%, tutto in `rem`, righe che possono andare a capo. Alcune pagine di Moodle scorrono ancora in orizzontale al 200% (vedi [Limiti noti](#15-limiti-noti)). |
| [1.4.8 Visual Presentation](https://www.w3.org/WAI/WCAG21/Understanding/visual-presentation), AAA | Interlinea, niente testo giustificato, colori selezionabili dall'utente | Altezza di riga 1,6, opzioni di spaziatura, testo giustificato mostrato allineato all'inizio, opzione di alto contrasto. |
| [1.4.12 Text Spacing](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing), AA | La pagina regge una spaziatura maggiore di righe, lettere e parole | L'opzione di spaziatura «molto ampia» applica esattamente i valori WCAG (0,12em per le lettere, 0,16em per le parole) e più altezza di riga. |
| [2.3.3 Animation from Interactions](https://www.w3.org/WAI/WCAG21/Understanding/animation-from-interactions), AAA | Il movimento può essere disattivato | Opzione di movimento ridotto; viene rispettata anche l'impostazione di sistema `prefers-reduced-motion`. |
| [2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/Understanding/bypass-blocks), A | Saltare i contenuti ripetuti | Link «Vai al contenuto principale» per primo in ogni pagina; contenuto principale prima dei blocchi. |
| [2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/Understanding/focus-visible), AA | Il focus della tastiera si vede | Anello di focus da 4 px (8 px con l'opzione spessa) al posto di quello predefinito del browser. |
| [2.5.5 Target Size](https://www.w3.org/WAI/WCAG21/Understanding/target-size), AAA | Bersagli di almeno 44 × 44 pixel CSS | Pulsanti e controlli dei moduli di almeno 44 px; i campi sono da 55 px. Alcune righe di link di Moodle sono ancora più piccole (vedi [Limiti noti](#15-limiti-noti)). |
| [4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/Understanding/name-role-value), A | Controlli e regioni hanno un nome | Ogni area di navigazione ha un nome; il pulsante della password indica il proprio stato. |

### Leggi e norme per il settore pubblico

Molte leggi sull'accessibilità si basano sulle WCAG 2.1 livello AA, di solito attraverso altri standard:

- **Unione europea.** La [*Direttiva sull'accessibilità del web*](https://eur-lex.europa.eu/eli/dir/2016/2102/oj) (Direttiva (UE) 2016/2102) riguarda i siti web e le app del settore pubblico. L'[*Atto europeo sull'accessibilità*](https://eur-lex.europa.eu/eli/dir/2019/882/oj) (Direttiva (UE) 2019/882) si applica a molti prodotti e servizi privati dal
  28 giugno 2025. Entrambe si basano sulla norma armonizzata [**EN 301 549**](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility), che include le WCAG 2.1 livello AA per i contenuti web.
- **Stati Uniti.** La [**Section 508**](https://www.access-board.gov/ict/) del Rehabilitation Act riguarda le agenzie federali e fa riferimento alle WCAG 2.0 livello AA.
  Nell'aprile 2024 il Dipartimento di Giustizia ha [adottato](https://www.ada.gov/resources/2024-03-08-web-rule/) le **WCAG 2.1 livello AA** come standard tecnico per i siti web delle amministrazioni statali e
  locali ai sensi del Titolo II dell'Americans with Disabilities Act (ADA). Una norma provvisoria definitiva dell'aprile 2026
  ha posticipato di un anno le date di conformità (aprile 2027 per gli enti che servono 50.000 persone o più, aprile 2028 per
  quelli più piccoli); consulta [ada.gov](https://www.ada.gov/) per le date aggiornate.
- Altri paesi hanno norme simili, per lo più basate sulle WCAG.

**Che cosa significa per te:** Accessible è costruito in direzione delle WCAG 2.1 AAA per le parti che controlla, cioè al di sopra
del livello AA richiesto da queste leggi. Tuttavia, **il tema non è stato sottoposto a un audit formale né certificato**, e la conformità
è una proprietà di un intero sito (piattaforma, plugin e contenuti), non di un tema. Accessible ti dà una base solida; non sostituisce
un audit di accessibilità del tuo sito e dei tuoi corsi.

---

## 5. Opzioni di accessibilità personali

Ogni utente, compresi i visitatori che non hanno effettuato l'accesso, ha una **pagina delle opzioni di accessibilità**. Vi si arriva da:

- il **pulsante di accessibilità** (il simbolo dell'accesso universale), sempre presente nella barra superiore di ogni pagina;
- lo stesso pulsante in alto a destra nella **pagina di accesso**;
- il **profilo** dell'utente (link «Accessibilità») e la pagina delle **Preferenze**.

Ogni opzione spiega che cosa fa. Puoi salvare e tornare indietro, salvare e restare, annullare o ripristinare i valori predefiniti del sito.

### Carattere

Tre caratteri, tutti inclusi nel tema: **Lexend Deca** (il predefinito), **Atkinson Hyperlegible** e **OpenDyslexic**.
Vedi la [sezione 10](#10-caratteri-perché-questi-tre) per sapere perché proprio questi tre.

### Dimensione del testo

**100%, 125%, 150% o 200%.** L'opzione cambia la dimensione del carattere radice e, poiché ogni dimensione del tema è in `rem`,
l'intera pagina cresce con essa: testo, icone, pulsanti, campi dei moduli, caselle di controllo, pannelli laterali, barre di scorrimento e bersagli.
È diverso dallo zoom del browser, che funziona comunque: l'opzione di dimensione del testo mantiene la larghezza della finestra e lascia che la struttura
si riorganizzi, quindi è adatta a chi vuole un testo più grande senza perdere l'impaginazione.

Con dimensioni maggiori la struttura si adatta: la barra superiore va a capo su due righe e, quando occuperebbe più di
un quarto della finestra, si nasconde mentre scorri verso il basso e ritorna in cima alla pagina o quando il focus vi
entra. Il menu principale passa prima nel pulsante del menu (☰), così la barra lascia spazio alla pagina. Le etichette
dei moduli si spostano sopra i loro campi, i menu vanno a capo, le schede del profilo diventano una sola colonna, i menu
lunghi ricevono un'altezza massima per restare nello schermo, la barra Salva e Annulla dei moduli lunghi resta alla fine
del modulo invece di coprirlo, e le parole lunghe nei titoli di sezione dei moduli vengono divise con un trattino invece
di far scorrere la pagina in orizzontale.

Sugli schermi piccoli la dimensione del testo ha un limite, perché ogni riga contenga ancora abbastanza parole: fino al
150% sugli schermi più stretti di 768 px (tablet piccoli) e fino al 125% sotto i 480 px (telefoni). Gli schermi più
grandi ricevono la dimensione scelta.

### Spaziatura del testo

- **Normale:** altezza di riga 1,6.
- **Ampia:** altezza di riga 1,8, spaziatura tra lettere e parole leggermente maggiore.
- **Molto ampia:** altezza di riga 2, spaziatura tra le lettere 0,12em, tra le parole 0,16em e più spazio dopo i paragrafi. Sono
  i valori del criterio [WCAG 1.4.12 (Text Spacing)](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing).

Una spaziatura maggiore aiuta molte persone ipovedenti o dislessiche a non perdere il segno nella riga.

### Contrasto

- **Normale:** testo nero su sfondo bianco, con il giallo usato per il passaggio del mouse e il focus (il predefinito).
- **Alto:** testo bianco su sfondo nero, con il giallo riservato al passaggio del mouse e al focus. Vedi la
  [sezione 8](#8-modalità-ad-alto-contrasto).

### Movimento

- **Normale** o **Ridotto.** Il movimento ridotto disattiva animazioni, transizioni e scorrimento fluido. Se il sistema
  operativo è impostato per ridurre il movimento, il tema fa lo stesso anche quando l'opzione è «Normale». Questo aiuta le persone
  con disturbi vestibolari e chi usa un ingranditore, che può perdere il punto quando la pagina si muove.

### Contorno del focus

- **Normale:** un anello da 4 px attorno all'elemento che ha il focus della tastiera: nero con un alone bianco, o giallo con un alone
  nero in alto contrasto.
- **Spesso:** l'anello diventa da 8 px, più facile da trovare con un ingranditore o con una vista ridotta.

### Visione dei colori

Un tipo (**protan**, **deutan**, **tritan** o **nessun colore**) e un'intensità (**lieve**, **media** o **forte**). I
colori della pagina vengono spostati in modo che i colori che sembrano simili all'utente diventino diversi. Vedi la
[sezione 9](#9-filtri-per-la-visione-dei-colori).

### Dove vengono conservate le scelte

- **Utenti che hanno effettuato l'accesso:** come preferenze utente di Moodle, quindi seguono l'utente su qualsiasi computer.
- **Visitatori e ospiti:** in un cookie (vedi la [sezione 12](#12-privacy-e-dati)).
- **Al primo accesso:** se l'account non ha ancora opzioni proprie, le scelte fatte come visitatore vengono copiate
  nell'account e un messaggio lo segnala. Se l'account ha già le proprie opzioni, prevale l'account. Vengono copiate solo le scelte fatte nella stessa visita, subito prima di accedere: non le opzioni lasciate nel browser da un'altra persona su un computer condiviso.

### Cambiare tema

Se il sito consente agli utenti di scegliere il proprio tema, la stessa pagina ha un selettore del tema che elenca tutti i temi installati.
Gli utenti possono provare Accessible e abbandonarlo di nuovo senza chiedere a nessuno.

---

## 6. Design visivo: ciò che vedono tutti gli utenti

Queste modifiche si applicano a chiunque usi il tema, qualunque siano le sue opzioni.

### Colori e link

- Sfondo bianco ovunque, testo nero.
- I link sono neri e sottolineati; la sottolineatura diventa più spessa al passaggio del mouse. Non c'è né blu né viola, e i link visitati
  appaiono uguali, quindi il colore di un link non deve mai essere decifrato.
- Il testo attenuato (secondario) è un grigio scuro che raggiunge comunque 7:1, mai i grigi chiari di un tema standard.
- Il codice in linea è mostrato in un magenta scuro che raggiunge 7:1 (il rosa di Bootstrap è circa 4,8:1).
- Il testo che un autore ha giustificato viene mostrato allineato all'inizio della riga: il testo giustificato crea spazi irregolari
  difficili da leggere per molte persone dislessiche o ipovedenti.

### Focus

Ogni elemento interattivo mostra un anello nero da 4 px quando ha il focus della tastiera (8 px con l'opzione spessa); pulsanti e
campi dei moduli ricevono anche un alone bianco, che mantiene visibile l'anello su qualsiasi sfondo. Pulsanti, voci di menu e link
di paginazione si riempiono inoltre di giallo, con testo nero, al focus e al passaggio del mouse. In alto contrasto l'anello stesso è
giallo, con un alone nero. Il «bagliore» azzurro chiaro di Bootstrap è rimosso. La pagina
lascia anche spazio in alto quando scorre fino a un elemento con il focus, così la barra superiore fissa non lo copre mai.

### Pulsanti e bersagli

- Ogni pulsante ha una dimensione minima di **44 × 44 px** (la dimensione del bersaglio WCAG AAA) e un'ampia spaziatura interna.
- Le barre di paginazione, come il filtro per iniziali da A a Z nella pagina dei partecipanti, hanno bersagli da 44 px con una cornice da 2 px;
  l'elemento corrente è bianco su nero e in grassetto; il passaggio del mouse dà uno sfondo giallo.
- I controlli disattivati hanno uno sfondo grigio **e** un bordo tratteggiato, quindi non sono indicati solo dal colore.

### Moduli

- Campi di testo, menu a discesa, aree di testo e pulsanti sono tutti alti **55 px**.
- Caselle di controllo e pulsanti di opzione sono disegnati dal tema: **28 px**, con un bordo nero da 2 px. Selezionato significa nero con
  una spunta o un punto bianco; disattivato significa bordo tratteggiato e sfondo grigio.
- I campi obbligatori mantengono un asterisco ben visibile e i messaggi di convalida compaiono solo quando c'è un errore, in una cornice
  accanto al campo.
- L'interruttore della modalità modifica nella barra superiore è una pista bianca con un cursore nero quando è disattivato e una pista
  nera con un cursore bianco quando è attivato, quindi il suo stato è indicato dalla posizione e dalla forma oltre che dal colore.

### Avvisi e notifiche

Gli avvisi di Moodle (errore, attenzione, operazione riuscita, informazioni) sono ridisegnati in modo che il loro significato non dipenda mai dal colore:

- uno **sfondo bianco** (nessun riempimento colorato), così il testo mantiene il pieno contrasto;
- una **cornice colorata** nel colore dell'avviso;
- una **striscia a motivo** a sinistra, diversa per ogni tipo;
- un **simbolo** accanto alla prima riga di testo;
- il **tipo scritto in grassetto** prima del messaggio: «Errore:», «Attenzione:», «Successo:», «Informazione:»;
- un suggerimento sopra la striscia e il simbolo con il tipo di avviso.

Una persona che non vede alcun colore, o che usa uno screen reader, riceve comunque il tipo di messaggio. Gli avvisi scritti da
altri plugin con il codice di avviso semplice ricevono anch'essi la cornice, il motivo e il simbolo (ma non la parola scritta, che
proviene dai modelli di avviso del tema).

### Barre di scorrimento

Le barre di scorrimento sono larghe **24 px**, con un cursore nero su una pista bianca con cornice, ovunque: pagina, pannelli laterali e tabelle. Non
hanno effetti al passaggio del mouse o al trascinamento di proposito: una barra di scorrimento che cambia dimensione o colore sotto il puntatore sobbalza
per chi ha un tremore o usa un ingranditore. La larghezza funziona in Chrome, Edge e altri browser Chromium; Firefox mantiene la propria
larghezza ma usa i colori.

### Intestazione e piè di pagina

- La barra superiore mostra solo ciò che conta ed è nera con testo bianco in ogni modalità.
- Il piè di pagina è sempre visibile e breve: i pulsanti mobili di aiuto e comunicazione, la riga «Sei collegato come» e la
  versione di Moodle sono rimossi. I link aggiunti dai plugin (per esempio il riepilogo della conservazione dei dati)
  restano.
- Gli avatar con le iniziali (i cerchi colorati con le lettere) sono nascosti, tranne quando sono il link a un profilo; le foto
  degli utenti restano.

---

## 7. Screen reader e utenti da tastiera

Accessible è stato verificato con l'albero di accessibilità del browser e con analisi da tastiera (vedi la
[sezione 14](#14-come-è-stato-testato-il-tema)). Le modifiche sono:

- **Link per saltare in cima.** «Vai al contenuto principale» è la prima cosa in ogni pagina.
- **Opzioni di accessibilità al secondo posto.** Il pulsante di accessibilità è l'elemento successivo nell'ordine della tastiera, così un utente può
  raggiungere le proprie opzioni con due pressioni di tasto. (Viene mostrato a destra della barra superiore.)
- **Contenuto principale prima dei blocchi.** In Boost, il pannello dei blocchi viene prima del contenuto principale nel codice della pagina. In
  Accessible viene dopo, così uno screen reader legge prima il contenuto della pagina. L'aspetto visivo non cambia.
- **Ogni area di navigazione ha un nome**: «Menu principale», «Menu della pagina», «Indice del corso» e i menu all'interno delle pagine, così un utente
  che elenca i punti di riferimento di una pagina sa che cos'è ciascuno.
- **Il campo della password** ha un pulsante «Mostra la password» che dice allo screen reader se la password è visibile
  (premuto o non premuto).
- **Torna su.** Un pulsante compare in basso a destra dopo aver scorso la pagina per circa una schermata. Riporta
  l'utente in cima e sposta il focus sul link per saltare in cima, così chi usa la tastiera o uno screen reader torna davvero all'inizio, non solo
  nella pagina visiva. Si nasconde mentre il focus è su un contenuto sottostante, così non copre mai l'elemento con il focus.
- **Pulsante «← Torna al corso»** in cima all'indice del corso all'interno di un'attività, per tornare alla pagina del corso.
- **L'indice del corso si apre e si chiude nello stesso punto.** In Boost, il pulsante che chiude l'indice del corso è
  all'altra estremità della sua intestazione, lontano dal pulsante che lo apre. In Accessible compare esattamente dove
  era il pulsante di apertura, così il pannello si apre e si chiude senza spostare il puntatore né la vista ingrandita, ed
  è il primo elemento del pannello per la tastiera.

---

## 8. Modalità ad alto contrasto

L'alto contrasto è un'opzione personale (e può essere il valore predefinito del sito). Trasforma la pagina in **testo bianco su sfondo
nero**:

- Il testo secondario è un grigio molto chiaro (#E0E0E0), ancora sopra 7:1 sul nero.
- I link sono bianchi e sottolineati, come il testo.
- Il **giallo** (#FFE600) è usato solo per il passaggio del mouse e il focus: sfondi al passaggio del mouse e anello di focus, con testo nero sul giallo.
- Gli avvisi mantengono le loro cornici, i motivi e i simboli, in colori più brillanti che raggiungono il livello di contrasto sul nero.
- Le schede, i menu, le finestre di dialogo e i moduli di Moodle passano allo scuro tramite la modalità scura di Bootstrap, quindi sono coerenti.
- La barra superiore mantiene il suo aspetto abituale e l'area di modifica dell'editor (TinyMCE) viene scurita con un filtro.

La modalità normale non è toccata: la tavolozza chiara è esattamente la stessa con o senza questa opzione disponibile.

Ciò che l'alto contrasto non può cambiare (H5P, iframe, contenuti dei docenti con colori propri) è elencato in
[Limiti noti](#15-limiti-noti).

---

## 9. Filtri per la visione dei colori

### Che cosa fanno

Il deficit della visione dei colori significa che alcuni colori che alla maggior parte delle persone sembrano diversi all'utente sembrano uguali, più
spesso i rossi e i verdi. L'opzione di visione dei colori applica un filtro sull'intera finestra che **sposta i colori che l'utente
non riesce a distinguere in colori che può distinguere**, così le differenze tornano visibili.

### Le opzioni

- **Tipo:**
  - **Protan:** sensibilità debole o assente al rosso.
  - **Deutan:** sensibilità debole o assente al verde.
  - **Tritan:** sensibilità debole o assente al blu.
  - **Nessun colore:** la pagina viene mostrata in grigi.
- **Intensità:** **lieve** (i tipi «-anomalia», in cui il cono funziona in parte), **media** o **forte** (i tipi
  «-anopia», in cui il cono manca). La visualizzazione senza colore ignora l'intensità.

Se un utente non conosce il proprio tipo, può provarli tutti e tenere quello in cui gli elementi rossi, verdi e blu appaiono più
diversi. È un aiuto, non un test medico.

### Come funziona

Ogni filtro è una matrice di colore SVG applicata tramite uno strato sull'intera finestra, costruita in due passaggi:

1. **Simulazione:** che cosa vede una persona con quel deficit, usando il [modello pubblicato](https://doi.org/10.1109/TVCG.2009.113) di Machado, Oliveira e
   Fernandes (2009), scalato in base all'intensità scelta.
2. **Correzione:** la parte del colore che l'utente non riesce a vedere viene spostata nei canali che può ancora vedere (il rosso nel
   verde e nel blu per protan e deutan; il blu nel rosso e nel verde per tritan). Questa tecnica è nota come
   «daltonizzazione».

**Bianco, grigio e nero non cambiano**, quindi testo e sfondi mantengono il loro contrasto.

### Come è stato verificato

Sono stati disegnati campioni colorati su una pagina con ogni combinazione di tipo e intensità, e i colori dei loro pixel sono stati
riletti. Bianco, nero e grigio sono rimasti invariati in ogni caso; ogni intensità spostava i colori più della
precedente; la visualizzazione senza colore trasformava ogni campione in un grigio puro.

### Limiti

- Le matrici provengono da valori pubblicati. **Non sono state validate clinicamente**, e solo le persone con deficit della visione
  dei colori possono confermare che aiutino. Si raccomanda di provarle con utenti reali su contenuti di corso reali.
- Anche immagini e video vengono filtrati, perché il filtro copre l'intera finestra. Questo include H5P e gli
  incorporamenti di terze parti come YouTube e Vimeo in Chrome, Edge e Firefox. In un browser che non può applicare lo strato, il filtro viene
  applicato alla pagina e gli incorporamenti di terze parti mantengono i propri colori.
- Il **video a schermo intero** e le finestre di dialogo modali native sono disegnati dal browser sopra ogni cosa e non vengono filtrati. I filtri
  dei colori del sistema operativo (Windows, macOS, iOS e Android) li coprono.
- L'effetto di un filtro sull'intera finestra sulla velocità dei computer lenti non è stato misurato.

### Test della visione dei colori per gli amministratori

La scheda **Informazioni** delle impostazioni del tema mostra la stessa immagine di test undici volte: l'originale, la visualizzazione senza colore
e ogni tipo in ogni intensità. Gli amministratori possono vedere come appaiono i colori del sito a ciascun utente. L'immagine è un
disegno del tema, non una tavola di Ishihara, e non è un test medico.

---

## 10. Caratteri: perché questi tre

### Perché offrire una scelta

Nessun carattere è il migliore per tutti. Il comfort di lettura dipende dalla persona, dai suoi occhi e dal compito. Il tema
include quindi tre caratteri con obiettivi di progettazione diversi, permette a ogni utente di provarli e tenere quello che funziona, e
permette all'amministratore di scegliere il predefinito per il sito.

Tutti e tre sono inclusi nel tema come file di caratteri web: **nessuna richiesta viene inviata a Google Fonts o a qualsiasi altro servizio
esterno**, il che è meglio per la privacy e funziona su reti senza accesso a internet. Tutti e tre sono distribuiti con la
**SIL Open Font License 1.1**. La scheda Informazioni delle impostazioni del tema mostra un campione di ogni carattere, in normale e
in grassetto, compresi i caratteri più facilmente confondibili: `I / l / 1`, `O / 0`, `rn / m`, `cl / d`.

| Carattere | Realizzato da | Idea principale |
|---|---|---|
| [**Lexend Deca**](https://www.lexend.com/) (predefinito) | Dr Bonnie Shaver-Troup e Thomas Jockin | Spaziatura ampia e uniforme tra le lettere per rendere la lettura più fluida |
| [**Atkinson Hyperlegible**](https://www.brailleinstitute.org/freefont/) | Braille Institute of America, progettato con Applied Design Works | Forme delle lettere facili da distinguere, per l'ipovisione |
| [**OpenDyslexic**](https://opendyslexic.org/) | Abbie Gonzalez | Parte inferiore delle lettere più pesante, pensata per aiutare i lettori dislessici |

### Lexend Deca (il predefinito)

**Storia.** Lexend è opera della dr.ssa Bonnie Shaver-Troup, terapista dell'educazione, e del progettista di caratteri Thomas
Jockin. Dal suo lavoro con lettori in difficoltà, lei propose che la lettura migliori con un carattere sans-serif, proporzioni espanse e una
spaziatura più ampia tra i caratteri. Lo svilupparono intorno al 2018 e fu pubblicato su
[Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) nel 2019. Lexend si basa su [Quicksand](https://fonts.google.com/specimen/Quicksand), un carattere iniziato da Andrew
Paglinawan nel 2008. La famiglia ha sette larghezze, da **Deca** (la più stretta) a Zetta (la più larga); nel 2021 è stato aggiunto un
asse del peso.

**Perché è il predefinito.** Lexend Deca è un sans-serif pulito e aperto, con una spaziatura generosa che resta abbastanza compatta per
un'interfaccia densa come Moodle, e si legge bene a dimensioni piccole e grandi.

### Atkinson Hyperlegible

**Storia.** Atkinson Hyperlegible è stato creato per il **Braille Institute of America** e pubblicato nel 2019, anno
del centenario dell'istituto. È stato progettato dall'agenzia Applied Design Works come parte della nuova identità dell'istituto,
e prende il nome dal fondatore dell'istituto, J. Robert Atkinson. Ha vinto il premio Innovation by Design 2019 di Fast Company
e, nel 2024, è entrato nella collezione permanente del Cooper Hewitt, Smithsonian Design Museum. Nel 2025 il Braille
Institute ha pubblicato **Atkinson Hyperlegible Next**, con più pesi e un più ampio supporto linguistico, e una versione
a spaziatura fissa.

**L'idea.** La maggior parte dei caratteri punta a lettere uniformi. Atkinson Hyperlegible fa il contrario: dà priorità alle
**differenze tra i caratteri**, in modo che i lettori ipovedenti possano distinguerli, con forme aperte e figure distinte
per le coppie facili da confondere, come la I maiuscola, la l minuscola e il numero 1, oppure O e 0.

**Perché viene offerto.** È il carattere progettato più direttamente per gli utenti ipovedenti a cui è destinato questo tema. Il tema
include la versione originale in normale e in grassetto.

### OpenDyslexic

**Storia.** OpenDyslexic è stato creato da Abbie Gonzalez, che è dislessica, e pubblicato per la prima volta nel 2011. È open
source ed è derivato in origine da Bitstream Vera Sans.

**L'idea.** Le sue lettere hanno la **parte inferiore più pesante**. L'autrice dice che il peso indica da che parte è il basso, il che
aiuta i lettori a riconoscere le lettere e può evitare che le capovolgano o le ruotino mentalmente (per esempio b, d, p e q).
Anche le forme delle lettere sono rese più distinte e la spaziatura è maggiore.

### Che cosa coprono i caratteri

Lexend Deca e Atkinson Hyperlegible sono inclusi con i set di caratteri latini e latini estesi, gli stessi file che
fornisce Google Fonts, che coprono le sette lingue del tema e la maggior parte delle lingue europee; questi due
caratteri non hanno glifi greci né cirillici. OpenDyslexic è incluso completo, così come lo pubblica la sua autrice:
oltre al latino copre il greco, il cirillico e l'alfabeto fonetico internazionale. I caratteri che un carattere non
possiede (per esempio l'arabo o le scritture asiatiche, oppure il greco e il cirillico in Lexend Deca e Atkinson
Hyperlegible) vengono mostrati con il carattere sans-serif del sistema.

---

## 11. Funzionalità per gli amministratori

### Impostazioni del tema

- Scheda **Valori predefiniti degli utenti**: il carattere, la dimensione del testo, la spaziatura, il contrasto, il movimento e il focus predefiniti per l'intero sito,
  compresi i visitatori e la pagina di accesso. La scelta personale di un utente prevale sempre sul valore predefinito. (La visione dei colori non ha un valore
  predefinito del sito, perché è personale.)
- Scheda **Informazioni** (ultima scheda):
  - la versione del tema, letta dalle informazioni del plugin;
  - un pulsante **Documentazione**, in alto, che apre questa guida in una nuova scheda, nella lingua dell'utente quando la
    guida è stata tradotta in quella lingua e in inglese in caso contrario. La pagina offre anche la guida come file Markdown da
    scaricare. Solo gli amministratori possono aprirla;
  - un **riepilogo per l'assistenza** con righe di testo semplice (versioni del tema, di Moodle, di PHP, del database e del server web, tema in uso,
    lingua e opzioni di accessibilità dell'amministratore stesso). Il browser aggiunge la dimensione della finestra, il rapporto di pixel, la dimensione del
    carattere radice e le sue impostazioni di movimento ridotto, contrasto e colori forzati. Un pulsante **Copia le informazioni** copia tutto negli
    appunti per una segnalazione di errore. Il riepilogo non contiene mai l'indirizzo del sito, i percorsi dei file né dati personali;
  - link alla pagina delle opzioni di accessibilità e alla scheda Valori predefiniti degli utenti;
  - il **test della visione dei colori** (vedi la [sezione 9](#9-filtri-per-la-visione-dei-colori));
  - un esempio dei quattro tipi di **avviso** (successo, informazione, avvertimento ed errore), come li vedono gli utenti con le opzioni attuali (vedi la [sezione 6](#6-design-visivo-ciò-che-vedono-tutti-gli-utenti)). Gli screen reader li leggono come testo normale, non come avvisi;
  - i **campioni dei caratteri** (vedi la [sezione 10](#10-caratteri-perché-questi-tre));
  - le **licenze** del tema e dei caratteri, con un link al testo ufficiale e alla copia inclusa nel
    tema.

### Favicon

Il tema include una propria favicon (la piccola icona nella scheda del browser), `pix/favicon.ico`. Per usare la tua, caricala in *Amministrazione del sito > Aspetto > Logo* (**Favicon**): Moodle mostra allora la tua al posto di quella del tema. Puoi anche sostituire il file `pix/favicon.ico`, ma il successivo aggiornamento del tema rimetterà l'originale.

### Tema del sito o scelta dell'utente

- **Come tema del sito:** tutti ottengono Accessible, con i valori predefiniti del sito che hai impostato.
- **Come scelta:** mantieni il tuo tema abituale del sito e attiva **Consenti agli utenti di scegliere il tema**. Ogni utente potrà poi scegliere Accessible
  (e tornare indietro) dalla propria pagina delle opzioni di accessibilità, mentre tutti gli altri mantengono l'aspetto abituale.

### Un link di accesso che apre Accessible

Quando Accessible è una scelta dell'utente e non il tema del sito, la pagina di accesso a cui si arriva dall'indirizzo
del sito usa il tema del sito. Un utente che ha bisogno di Accessible deve entrare da una pagina che potrebbe
risultargli difficile da usare.

Se **Consenti il cambio del tema tramite URL** è attivo (`allowthemechangeonurl`), puoi dare a questi utenti un link di
accesso che apre subito Accessible: `https://your.site/login/index.php?theme=accessible`. Il tema viene conservato nella
sessione, quindi resta dopo l'accesso e, finché l'utente non esce, ha la precedenza sul tema scelto nel suo profilo.

Compromesso: l'impostazione deve restare attiva perché il link funzioni, e mentre è attiva chiunque può cambiare il tema
della propria sessione con il parametro. Non può cambiarlo per altre persone.

### Avvisi quando gli utenti non possono usare le proprie opzioni

Se **Consenti agli utenti di scegliere il tema** è disattivato, gli utenti non possono scegliere il tema per sé. Il tema lo segnala in due punti:

- un avviso nella pagina delle notifiche di amministrazione, con un link all'impostazione;
- una verifica in **Report > Stato del sistema** (la pagina di stato del sistema di Moodle).

---

## 12. Privacy e dati

- **Utenti che hanno effettuato l'accesso:** ogni opzione è memorizzata come preferenza utente di Moodle (`theme_accessible_font`,
  `theme_accessible_fontsize` e così via). Sono dichiarate nel provider della **Privacy API** del tema e incluse nell'esportazione
  dei dati dell'utente.
- **Visitatori e ospiti:** le scelte sono memorizzate in un cookie chiamato `MoodleAccessible` seguito dal nome del cookie di sessione
  del sito. Contiene solo le opzioni di visualizzazione (come JSON), è `HttpOnly` e `SameSite=Lax`, dura un anno e viene
  controllato rispetto all'elenco dei valori validi ogni volta che viene letto. Quando le opzioni sono salvate da un utente che ha effettuato l'accesso, il cookie
  le rispecchia in modo che la pagina di accesso mostri l'ultima scelta. Il cookie viene eliminato quando l'utente esce, così su un computer condiviso la persona successiva non vede né eredita queste opzioni. Un visitatore che non accede mantiene il cookie, quindi sui computer pubblici (biblioteche, aule) imposta il browser perché cancelli i dati all'uscita o apra finestre ospite o private; altrimenti la persona successiva vedrà la pagina con queste opzioni finché non le cambia. **Menziona questo cookie nell'informativa sulla privacy e sui cookie del tuo sito.**
- **Pagina delle opzioni senza accesso:** la pagina delle opzioni di accessibilità si apre senza sessione anche quando **Autenticazione obbligatoria** è attiva, così le persone possono regolare la pagina prima di accedere. I visitatori vedono solo il modulo delle opzioni, con il layout della pagina di accesso (senza blocchi, menu o navigazione), e le loro scelte vanno solo nel cookie del proprio browser.
- **Nessuna richiesta esterna:** caratteri, icone e filtri sono tutti forniti dal tuo sito.
- **Nessun tracciamento:** il tema non raccoglie dati di utilizzo.

---

## 13. Lingue

I testi del tema sono disponibili in **sette lingue**: inglese, spagnolo, catalano, francese, italiano, tedesco e
portoghese brasiliano. Le traduzioni sono disponibili nei language pack di Moodle: quando in un sito è installato il
language pack di una lingua, il tema appare in quella lingua. I testi e le traduzioni sono stati scritti con l'IA
(Claude). I testi in inglese, spagnolo e catalano sono stati rivisti da persone. Questa guida è disponibile nelle stesse
lingue.

---

## 14. Come è stato testato il tema

Le affermazioni sull'accessibilità valgono solo quanto ciò che è stato verificato. Ecco che cosa è stato verificato e come.

### Analisi automatiche

Tre script che usano Playwright (uno strumento di automazione del browser) sono stati eseguiti su Moodle 5.2 e Moodle 5.3,
in **Chromium** e **Firefox**:

- Un'**analisi completa** su 27 pagine (dashboard, corso, attività, forum, quiz e tentativo di quiz, partecipanti,
  registro delle valutazioni, calendario, amministrazione, moduli, accesso...) con dimensione del testo **100%, 125% e 200%**, in **contrasto normale e alto**. Controlla il contrasto di ogni porzione di testo visibile rispetto al suo sfondo reale (7:1, o 4,5:1 per il testo
  grande), i nomi accessibili, i punti di riferimento, gli id duplicati, l'ordine dei titoli e la dimensione dei bersagli.
- Un'**analisi da tastiera**: ordine del Tab, trappole del focus, indicatore di focus visibile e focus nascosto dietro elementi fissi.
- Un'**analisi del contrasto** di un elenco più breve di pagine, usata dopo ogni modifica degli stili.

**Risultato:** nessun errore di contrasto in nessuna pagina, dimensione, modalità o browser. Le analisi su
Moodle 5.2 e Moodle 5.3 non ne hanno trovati con dimensione del testo 100%, 125% e 200%, in contrasto normale o alto. Gli altri rilievi
sono elencati in [Limiti noti](#15-limiti-noti).

I filtri per la visione dei colori sono stati verificati rileggendo i colori dei pixel (vedi la [sezione 9](#9-filtri-per-la-visione-dei-colori)).

### Test automatici

Il tema include test PHPUnit (preferenze, valori predefiniti e convalida del cookie, hook, verifica di stato, provider della privacy,
riepilogo per l'assistenza, compilazione SCSS) e scenari Behat (la pagina delle opzioni per
utenti e visitatori, l'avviso di amministrazione, la scheda Informazioni).

Sono stati eseguiti su entrambe le versioni:

| | Moodle 5.2 | Moodle 5.3 |
| --- | --- | --- |
| PHPUnit (61 test, 332 asserzioni) | tutti superati | tutti superati |
| Behat (17 scenari, 124 passaggi) | tutti superati | **15 superati, 2 falliti** |

I due scenari Behat che falliscono su Moodle 5.3 sono quelli dell'avviso di amministrazione. Falliscono nel passaggio che
apre *Report > Stato del sistema* tramite la barra di navigazione superiore, non in ciò che verificano. Moodle 5.3 disegna quella barra con un
nuovo componente e il tema usa ancora il codice classico (vedi [Limiti noti](#15-limiti-noti)). Le pagine e
le opzioni funzionano; solo il passaggio del test non riesce a trovare la barra.

### Controlli del codice

- **I controlli dei plugin di Moodle** (moodle-plugin-ci 4.5), eseguiti su Moodle 5.2 e di nuovo su 5.3: convalida del plugin, lint PHP,
  PHPDoc, savepoint di aggiornamento, modelli Mustache (rendering e convalida HTML), tutti senza errori né avvisi.
- **Stile del codice:** `phpcs` con lo standard di Moodle è pulito; ESLint non segnala errori né avvisi su
  `javascript/accessible.js`; stylelint non ne segnala sullo SCSS, con una manciata di eccezioni documentate
  (`!important` è voluto, per prevalere sugli stili di Boost).
- **I refactoring degli stili** sono dimostrati innocui con uno strumento di confronto: confronta gli stili calcolati di ben più di
  100.000 elementi prima e dopo una modifica, e verifica che nessuna coppia di regole in competizione abbia cambiato ordine.

### WAVE

Le pagine principali sono state verificate con l'estensione [WAVE](https://wave.webaim.org/) di WebAIM, in Chrome. Tutte ottengono
10 su 10 nell'AIM score automatico di WAVE. L'AIM score confronta una pagina con altre pagine web; come dice WebAIM stessa, un
punteggio alto non dimostra che una pagina sia accessibile o conforme, ed è per questo che il tema è stato testato anche a mano.

### Che cosa non è stato fatto

- **Screen reader:** il tema è stato testato a mano con NVDA. Non è ancora stato testato con JAWS, VoiceOver o
  TalkBack. La struttura della pagina è stata verificata anche tramite l'albero di accessibilità del browser, che è ciò che gli
  screen reader leggono.
- **I test nel browser non hanno coperto Safari**, e su Moodle 5.3 due scenari Behat falliscono (vedi sopra).
- **Il lettore video è stato verificato in Chromium e Firefox senza finestra**, non a mano in una normale finestra di Chrome o
  Firefox, e non con ogni tipo di contenuto (file video locali, solo audio, sottotitoli, dirette).
- **Nessun test con utenti** non vedenti, ipovedenti o con deficit della visione dei colori.
- **Solo audit interni;** nessun audit esterno né certificazione.

Il riscontro di utenti e specialisti dell'accessibilità è il contributo più prezioso che il progetto possa ricevere.

---

## 15. Limiti noti

### Contenuti che il tema non controlla

- Le **attività H5P** e altri **iframe incorporati** (video, strumenti esterni, LTI, documenti incorporati) hanno una propria
  pagina e propri stili. Il tema non può cambiarne i colori, quindi l'alto contrasto non li raggiunge. Il filtro per la visione dei colori
  li copre, con le eccezioni elencate nella [sezione 9](#9-filtri-per-la-visione-dei-colori).
- Il **testo colorato a mano** nei contenuti dei corsi (colori impostati nell'editor, testo incollato da Word o dal web) mantiene i propri
  colori, perché i colori in linea prevalgono sul tema. Un docente che imposta un testo scuro su uno sfondo chiaro lo mantiene, anche in alto
  contrasto. I docenti dovrebbero lasciare il colore del testo al tema.
- Le **immagini** mantengono i propri pixel: il testo all'interno di un'immagine non viene ingrandito, e l'alto contrasto non lo ricolora (solo il
  filtro per la visione dei colori ne sposta i colori, come fa per l'intera finestra). Le immagini richiedono un'alternativa testuale.
- **L'area di modifica dell'editor** (TinyMCE) è un documento separato. In alto contrasto viene scurita con un filtro, che
  mantiene i colori più o meno corretti ma cambia l'aspetto delle immagini durante la modifica. Il contenuto salvato non cambia.

### Limiti di Moodle stesso

- Alcune pagine del nucleo saltano livelli di titolo (per esempio da h1 a h3 o h4), e alcuni iframe di H5P, TinyMCE e delle pagine di
  amministrazione non hanno un titolo. Derivano dal codice di Moodle stesso.
- Con testo al 200%, il registro delle valutazioni e la pagina del tentativo di quiz possono ancora scorrere in
  orizzontale, per come è progettato Moodle.
- Con testo al 200%, la pagina di gestione dei corsi può scorrere in orizzontale, ancora di più con i pannelli laterali
  aperti.

### Moodle 5.3

Moodle 5.3 disegna le barre di navigazione primaria e secondaria con un nuovo componente (`core/nav`) e l'interruttore della modalità modifica
con lo Switch del design system. Il tema usa ancora il codice classico di Moodle 5.2 per questi elementi. Funziona ed è
accessibile, ma non usa ancora i nuovi componenti di Moodle, e i test che navigano tramite la barra superiore con il
passaggio Behat standard («I select ... from primary navigation») falliscono con questo tema su 5.3. Questo è previsto per una prossima
versione del tema.

### Dimensione dei bersagli

I link delle briciole di pane, le azioni dei messaggi del forum (Permalink, Modifica, Rispondi), i link all'attività precedente e successiva e i link
dell'indice del corso sono alti da 31 a 34 px, meno dei 44 px delle WCAG AAA. Ingrandirli renderebbe quegli elenchi molto più lunghi;
la questione è ancora in esame.

### Browser

- Le barre di scorrimento larghe funzionano nei browser basati su Chromium (Chrome, Edge, Opera, Brave). Firefox mantiene la propria larghezza.
- Il tema è stato testato in Chromium e Firefox. Safari non è stato testato.

---

## 16. Accessible è adatto al tuo sito?

### Scegli Accessible quando

- Il tuo sito ha, o può avere, **studenti, docenti o personale non vedenti, ipovedenti o con deficit della visione dei colori**, e vuoi
  che lavorino in autonomia.
- Hai **obblighi di accessibilità** e vuoi una piattaforma costruita in direzione delle WCAG, lo standard alla base della maggior parte delle leggi
  sull'accessibilità.
- Vuoi **offrire un aspetto alternativo** accanto al tuo tema principale, in modo che chiunque ne abbia bisogno possa passarvi.
- Vuoi un **Moodle tranquillo e leggibile** per tutti: niente disordine, contrasto forte, struttura prevedibile.

### Pensaci due volte quando

- Hai bisogno di una **forte identità visiva**, colori personalizzati, immagini di sfondo o un'immagine coordinata: l'aspetto di Accessible è
  volutamente semplice e i suoi colori sono fissati per il contrasto.
- I tuoi corsi si basano soprattutto su **H5P o strumenti esterni**: il tema non può cambiare lo stile di ciò che vi gira all'interno,
  quindi quelle parti mantengono i propri colori e le proprie dimensioni.

### Provalo senza rischi

Installalo e attiva **Consenti il cambio del tema tramite URL** (*Amministrazione del sito > Aspetto > Impostazioni avanzate tema*,
impostazione `allowthemechangeonurl`). Poi apri il tuo sito aggiungendo `?theme=accessible` all'indirizzo (per esempio
`https://your.site/my/?theme=accessible`): il tema si applica solo alla tua sessione. Prova le opzioni, apri i tuoi corsi al
200% e in alto contrasto, poi **disattiva di nuovo l'impostazione**, perché mentre è attiva chiunque conosca il parametro
può cambiare il tema.
Se vuoi mantenere un link di accesso che apre Accessible, vedi
[Un link di accesso che apre Accessible](#un-link-di-accesso-che-apre-accessible): in quel caso l'impostazione resta attiva.

---

## 17. Installazione e configurazione

### Requisiti

- **Moodle 5.2 e successive.**
- Il tema **Boost**, che viene fornito con Moodle.
- Nessun altro plugin. Nessuno strumento di compilazione.

### Installazione

1. Copia la cartella del tema in `public/theme/accessible` del codice di Moodle (la cartella deve chiamarsi `accessible`; se
   scarichi lo ZIP da GitHub, rinomina prima la cartella), oppure carica il file ZIP da
   *Amministrazione del sito > Plugin > Installazione plugin*.
2. Vai a *Amministrazione del sito > Notifiche* per completare l'installazione.
3. Svuota le cache se aggiorni il tema a mano.

### Configurazione

- **Come tema del sito:** *Amministrazione del sito > Aspetto > Temi*, poi scegli Accessible.
- **Come scelta dell'utente:** attiva **Consenti agli utenti di scegliere il tema** in *Amministrazione del sito > Aspetto > Impostazioni avanzate tema*.
- **Valori predefiniti:** nelle impostazioni del tema, scheda **Valori predefiniti degli utenti**, scegli il carattere, la dimensione del testo, la spaziatura, il contrasto, il movimento e il
  focus per il sito.
- **Privacy:** aggiungi il cookie dei visitatori alla tua informativa sulla privacy o sui cookie (vedi la [sezione 12](#12-privacy-e-dati)).

### Aggiornamento

Installa la nuova versione sopra la vecchia e visita *Amministrazione del sito > Notifiche*. Gli utenti mantengono le proprie opzioni.

---

## 18. Crediti, licenze e fonti

### Crediti

Di **Fernando Acedo** e dell'ex **team di sviluppo Koditik**. Claude Code ha aiutato a scrivere parti del tema, lo ha rivisto e ha aiutato a
testarlo. Claude è un marchio di Anthropic, PBC.

[Codice sorgente e release](https://github.com/f-acedo/moodle-theme_accessible). Segnalazioni di errori e suggerimenti: [gestione delle segnalazioni](https://github.com/f-acedo/moodle-theme_accessible/issues).

### Licenze

- Tema Accessible: **GNU General Public License v3 o successiva** ([testo ufficiale](https://www.gnu.org/licenses/gpl-3.0.html); copia in `LICENSE.txt`).
- Caratteri di Accessible: **SIL Open Font License 1.1** ([testo ufficiale](https://openfontlicense.org/open-font-license-official-text/); copie in `fonts/LICENSE-*.txt`).
  - Lexend Deca: Copyright 2019 The Lexend Project Authors.
  - Atkinson Hyperlegible: Copyright 2020 Braille Institute of America, Inc.
  - OpenDyslexic: Copyright 2019 Abbie Gonzalez, Reserved Font Name OpenDyslexic.

### Fonti

Standard e leggi:

- [Web Content Accessibility Guidelines (WCAG) 2.1](https://www.w3.org/TR/WCAG21/), W3C.
- [Understanding WCAG 2.1: conformance levels](https://www.w3.org/WAI/WCAG21/Understanding/conformance), W3C.
- [Direttiva sull'accessibilità del web (UE) 2016/2102](https://eur-lex.europa.eu/eli/dir/2016/2102/oj).
- [Atto europeo sull'accessibilità, Direttiva (UE) 2019/882](https://eur-lex.europa.eu/eli/dir/2019/882/oj).
- [EN 301 549, ETSI](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility).
- [Standard della Section 508](https://www.access-board.gov/ict/), US Access Board.
- [Norma web del Titolo II dell'ADA (2024)](https://www.ada.gov/resources/2024-03-08-web-rule/), Dipartimento di Giustizia degli Stati Uniti.

Utenti:

- [World report on vision](https://www.who.int/publications/i/item/9789241516570), Organizzazione mondiale della sanità, 2019.
- [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/).

Caratteri:

- [Lexend](https://www.lexend.com/) e [Lexend su GitHub](https://github.com/googlefonts/lexend).
- [Atkinson Hyperlegible, Braille Institute](https://www.brailleinstitute.org/freefont/).
- [OpenDyslexic](https://opendyslexic.org/about) e
  [OpenDyslexic su Wikipedia](https://en.wikipedia.org/wiki/OpenDyslexic).

Visione dei colori:

- Machado, G. M., Oliveira, M. M. e Fernandes, L. A. F. (2009), [*A physiologically-based model for simulation of
  color vision deficiency*](https://doi.org/10.1109/TVCG.2009.113), IEEE Transactions on Visualization and Computer Graphics.

---

## Appendice A. Riferimento tecnico

Per gli specialisti che vogliono i dettagli prima di installare il tema: come sono costruiti i filtri per la visione dei colori e che cosa hanno
mostrato le verifiche, fin dove sono arrivate le verifiche dell'alto contrasto, e da dove vengono i caratteri inclusi e che cosa dice la ricerca
su di essi. Le sezioni 8, 9, 10 e 15 danno le stesse informazioni in termini semplici.

### A.1 Filtri per la visione dei colori: implementazione e verifiche

Opzione utente in `/theme/accessible/preferences.php`: **Visione dei colori** (tipo) e **Intensità**.

#### Come funziona

- Tipi: none, protan (debolezza o cecità al rosso), deutan (debolezza o cecità al verde), tritan (debolezza o cecità al blu) e mono (nessun colore, solo grigi).
- Intensità: mild (i tipi «-anomalia»), medium, strong (i tipi «-anopia»). Mono la ignora.
- La scelta è memorizzata come preferenze utente `theme_accessible_colortype` e `theme_accessible_colorstrength`
  (`classes/preferences.php`) e arriva alla pagina come classi del body: `accessible-colortype-X` e
  `accessible-colorstrength-Y`.
- `templates/colorfilters.mustache` contiene nove filtri SVG (3 tipi x 3 intensità) e quello mono. È incluso in
  `templates/drawers.mustache`. Il CSS (fine di `scss/styles.scss`) applica il filtro corrispondente tramite uno strato.
- Lo strato è `body::after`: un riquadro fisso che copre la finestra, con `pointer-events: none` e
  `backdrop-filter: url(#accessible-colortype-X-Y)`. Ricolora tutto ciò che è disegnato sotto di esso: la pagina, le immagini, gli elementi
  video, H5P e gli **incorporamenti di terze parti** (YouTube, Vimeo, LTI). Non aggiunge codice, i clic lo attraversano, non ha
  contenuto per le tecnologie assistive ed è nascosto in stampa.
- Perché non un filtro sulla pagina stessa: un filtro su `<html>` non raggiunge gli iframe cross-origin in Chromium (un frame
  di YouTube in pausa risultava identico con e senza), e un filtro su `<body>` lo renderebbe il blocco contenitore
  della barra di navigazione fissa e dei pannelli laterali e ne romperebbe la posizione.
- Dove il browser non può usare `url()` in `backdrop-filter`, si applica la vecchia regola (`filter` su `<html>`). In quel caso
  gli incorporamenti di terze parti mantengono i propri colori.
- Ciò che lo strato non ricolora, perché il browser lo disegna sopra ogni cosa: il **video a schermo intero** e i modali nativi
  `<dialog>` aperti con `showModal()`. I modali di Moodle sono elementi normali e sono coperti. Anche le schermate
  catturate con strumenti del browser (non con il sistema operativo) possono non includere l'effetto.

#### Le matrici

Ogni filtro è una `feColorMatrix` 3x3 (applicata in RGB lineare, il valore predefinito di SVG):

1. Simulazione del cono mancante: la matrice di Machado et al. (2009) per la dicromia completa, scalata in base all'intensità
   `S = (1 - s) * I + s * M`, con s = 0,4 (mild), 0,7 (medium), 1,0 (strong).
2. Correzione (il consueto passaggio «daltonize»): la parte del colore che l'utente non riesce a vedere, `I - S`, viene spostata nei
   canali che può ancora vedere: l'errore del rosso nel verde e nel blu per protan e deutan, l'errore del blu nel rosso e nel verde per
   tritan. Risultato: `C = I + shift * (I - S)`.

Ogni riga di `C` ha somma 1, quindi bianco, grigio e nero non cambiano. Le matrici sono state calcolate a mano (non c'è
alcun passaggio di compilazione); ricalcolale se la matematica cambia.

Le matrici provengono da valori pubblicati, non da una validazione clinica. Considera il filtro un aiuto, non uno strumento
medico.

#### Test

Otto campioni (bianco, nero, grigio, rosso, verde, blu, giallo, rosso-arancio) sono stati disegnati sulla dashboard per ogni
combinazione e i loro pixel letti da una schermata. I valori sono RGB.

| Tipo | Risultato |
|---|---|
| None | Invariato: rosso (255,0,0), verde (0,255,0), blu (0,0,255) |
| Protan | Il rosso diventa rosa: mild (255,121,134), medium (255,157,173), strong (255,184,203). Il verde si scurisce. |
| Deutan | Il rosso diventa rosa-magenta: mild (255,72,118), medium (255,95,153), strong (255,112,180). |
| Tritan | Il blu diventa viola chiaro: mild (141,103,255), medium (182,134,255), strong (213,158,255). Il giallo vira verso il verde. |
| Mono | Tutti i campioni grigi (R = G = B), per esempio rosso (127,127,127), verde (220,220,220), blu (76,76,76). |

- Bianco (255,255,255), nero (0,0,0) e grigio (128,128,128) sono rimasti invariati in ogni combinazione.
- Ogni livello di intensità sposta i colori più del precedente.
- Gli spostamenti fanno sì che i colori che sembrano simili all'utente differiscano per luminosità o tonalità.

#### Non fatto

- Nessuna validazione clinica delle matrici.
- Nessuna eccezione per singolo colore: anche immagini e video vengono filtrati.
- Il video a schermo intero e le finestre di dialogo modali native non vengono filtrati (vedi sopra). I filtri dei colori propri del
  sistema operativo (Windows, macOS, iOS, Android) li coprono.
- Le prestazioni su macchine deboli (uno strato su tutta la finestra) non sono state misurate. In un test su desktop la frequenza di scorrimento era
  di circa 54 fotogrammi al secondo con lo strato, 59 con il vecchio filtro e 61 senza opzione di colore.

### A.2 Alto contrasto: ambito delle verifiche

Ciò che l'alto contrasto non può cambiare è elencato nella [sezione 15](#15-limiti-noti).

Il contrasto è stato verificato con un'analisi automatica (testo a 7:1, testo grande a 4,5:1) con dimensione del testo 100%, 125% e 200%,
con il filtro per la visione dei colori attivo, nei modali, e nelle pagine della dashboard, del corso, del calendario, dei partecipanti, del quiz e
del tentativo di quiz.

### A.3 Caratteri: storia e ricerca

Il tema Accessible include tre caratteri e lascia che ogni utente ne scelga uno: **Lexend Deca** (il predefinito), **Atkinson
Hyperlegible** e **OpenDyslexic**. Questa parte racconta da dove viene ciascuno, che cosa volevano ottenere i suoi progettisti,
che cosa dice la ricerca e perché caratteri come questi vengono offerti nei siti per persone ipovedenti o dislessiche. Tutti e tre
sono inclusi nel tema (nessuna richiesta a un servizio di caratteri esterno) e distribuiti con la SIL Open Font License 1.1.

#### Che cosa rende un carattere più facile da leggere

Nessun carattere rende la lettura facile per tutti, e la ricerca sui «caratteri accessibili» è più ridotta e più contrastata del
marketing che la circonda. Queste sono le idee di progettazione che ricorrono più spesso, con ciò che si sa di ciascuna:

- **Lettere che non si possono confondere.** Molti caratteri disegnano la **I** maiuscola, la **l** minuscola e il numero **1** quasi
  uguali, e lo stesso accade con **O** e **0**, **B** e **8**, o **rn** e **m**. Un lettore ipovedente, che
  vede le forme sfocate o ingrandite, non può usare il contesto per indovinare. Disegnare questi caratteri in modo diverso è
  l'idea principale di Atkinson Hyperlegible.
- **Forme aperte.** Le ampie aperture in lettere come **a**, **c**, **e** e **s** restano leggibili quando l'immagine è sfocata
  o ingrandita.
- **Spaziatura generosa.** Lettere troppo vicine interferiscono tra loro, un effetto chiamato *affollamento* (crowding). In uno
  studio del 2012 su 74 bambini dislessici di 8-14 anni (Zorzi e colleghi, pubblicato su PNAS), una spaziatura tra le lettere extra larga
  ha reso la lettura circa il 20% più veloce e ha dimezzato gli errori, mentre la sola interlinea maggiore non aveva alcun effetto. Una spaziatura ampia è
  anche il punto di partenza di Lexend, e il tema la offre come opzione separata, indipendente dal carattere.
- **Lettere sans-serif e dritte.** Le linee guida per la dislessia, come la guida di stile della British Dyslexia Association,
  di solito raccomandano caratteri sans-serif semplici, e uno studio con eye-tracking su 48 lettori dislessici (Rello e Baeza-Yates,
  2013) ha rilevato che i caratteri sans-serif, a spaziatura fissa e romani (non corsivi) andavano meglio di quelli con grazie, proporzionali e
  corsivi. Revisioni successive sono più caute: Dyslexia Scotland riferisce di nessun vantaggio costante dei sans-serif rispetto ai caratteri
  con grazie, e afferma che la spaziatura è un fattore più forte delle forme delle lettere.
- **La preferenza conta.** I lettori spesso leggono meglio nel carattere a cui sono abituati e che gradiscono. Per questo il tema offre una
  scelta invece di un solo carattere prescritto.

Il carattere è solo una parte della leggibilità. Dimensione, spaziatura, contrasto e la libertà di cambiarli contano almeno altrettanto, e
il tema ha un'opzione per ciascuno (vedi la pagina delle opzioni e le sezioni 5 e 8 della guida).

#### Lexend Deca (il predefinito)

**Storia.** Lexend è opera della dr.ssa Bonnie Shaver-Troup, terapista dell'educazione, e del progettista di caratteri Thomas
Jockin. Lo svilupparono intorno al 2018 a partire dal suo lavoro con lettori in difficoltà, e fu pubblicato su
[Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) nel 2019. Si basa su
[Quicksand](https://fonts.google.com/specimen/Quicksand), un carattere iniziato da Andrew Paglinawan nel 2008. La famiglia ha
sette larghezze, da **Deca** (la più stretta) a Zetta (la più larga), così da poter cambiare la spaziatura tra le lettere senza
cambiare carattere. Da giugno 2021 tutti i caratteri sono caratteri variabili con un asse del peso.

**L'idea.** Spaziatura ampia e uniforme tra le lettere e forme semplici e aperte, per rendere la lettura più fluida. Moodle è un'interfaccia
densa, quindi il tema usa **Deca**, che mantiene la spaziatura generosa ma resta abbastanza compatta per menu e moduli.

**Che cosa dicono le prove.** I progettisti riportano una migliore velocità di lettura nei propri test. Lo studio più noto è piccolo
(20 alunni di terza elementare che leggono per un minuto in cinque caratteri) e viene dalla parte dei progettisti. Non abbiamo trovato alcuna replica
indipendente. Il tema offre quindi Lexend Deca come predefinito leggibile, non come un aiuto dimostrato.

#### Atkinson Hyperlegible

**Storia.** Il Braille Institute of America lo ha creato per le persone ipovedenti e lo ha pubblicato nel 2019, anno del
centenario dell'istituto. È stato progettato dall'agenzia Applied Design Works come parte della nuova identità dell'istituto, e
prende il nome dal fondatore dell'istituto, J. Robert Atkinson. Ha vinto il premio Innovation by Design 2019 di Fast Company ed è
entrato nella collezione permanente del Cooper Hewitt, Smithsonian Design Museum. In seguito è diventato disponibile su Google
Fonts e nel 2025 l'istituto ha pubblicato **Atkinson Hyperlegible Next**, con più pesi e un più ampio supporto linguistico,
e una versione a spaziatura fissa. Il tema include la versione originale in normale e in grassetto.

**L'idea.** La maggior parte dei caratteri punta a lettere uniformi. Atkinson Hyperlegible fa il contrario: mantiene una base
sans-serif convenzionale e aggiunge differenze solo dove due caratteri si confondono facilmente:

- la **l** minuscola riceve una coda e il numero **1** un uncino, così si distinguono tra loro e dalla **I** maiuscola,
  che ha le grazie;
- **B** e **8**, **O** e **0** e altre coppie ricevono forme diverse, aperture più ampie ed estremità oblique;
- le lettere sono spaziate in modo che i loro bordi non si tocchino.

Il prezzo è un aspetto irregolare: le grazie compaiono in alcune lettere e in altre no, e alcuni angoli sono esagerati. Per
leggere l'interfaccia del tema questo è il punto, perché le lettere devono essere distinte, non eleganti.

**Che cosa dicono le prove.** È il carattere progettato più direttamente per gli utenti ipovedenti a cui è destinato questo tema, e la sua
logica di progettazione è facile da capire. Non abbiamo trovato alcuno studio pubblicato che misuri il suo effetto sulla lettura con un gruppo di
lettori, quindi l'affermazione poggia sul progetto e sul lavoro dell'istituto stesso.

#### OpenDyslexic

**Storia.** Abbie Gonzalez, che è dislessica, ha creato OpenDyslexic e lo ha pubblicato nel 2011 come carattere open source,
derivato da Bitstream Vera Sans.

**L'idea.** Le lettere hanno la **parte inferiore più pesante**. L'autrice dice che il peso dà a ogni lettera un chiaro «basso», il che
aiuta i lettori a riconoscerla e impedisce loro di capovolgere o ruotare mentalmente lettere come b, d, p e q. Anche le forme
delle lettere sono rese più distinte e la spaziatura è maggiore.

**Che cosa dicono le prove.** Gli studi che abbiamo trovato non sostengono l'affermazione che migliori la lettura: uno studio sulla velocità
e l'accuratezza di lettura (Wery e Diliberto, 2017) non ha rilevato alcun miglioramento rispetto ad altri caratteri, e un successivo studio con eye-tracking di
Rello e Baeza-Yates (2016) ha rilevato che non andava meglio dei comuni caratteri sans-serif come Arial o Verdana. Molte
persone dislessiche lo preferiscono comunque, e la preferenza conta, quindi il tema lo offre come scelta e non come
raccomandazione.

#### Perché caratteri come questi vengono offerti nei siti per ipovisione e dislessia

1. **Il costo è piccolo e il beneficio può essere grande per alcune persone.** Cambiare il carattere non costa nulla in un tema. Per una
   persona che trova un carattere chiaramente più facile, può fare la differenza tra leggere e rinunciare.
2. **Le persone sono diverse.** L'ipovisione ha molte cause (perdita del centro o del bordo del campo visivo, sfocatura, sensibilità all'abbagliamento),
   e la dislessia non si presenta uguale in ogni lettore. Non esiste un unico carattere «migliore», quindi la risposta sensata è
   un breve elenco di caratteri ben progettati che ognuno può provare.
3. **I tre caratteri coprono tre approcci:** lettere aperte e ben spaziate (Lexend Deca), lettere che si distinguono per
   progetto (Atkinson Hyperlegible) e lettere con un «peso» distinto (OpenDyslexic). Un utente può confrontarli nella
   stessa pagina.
4. **Onestà sulle prove.** Solo l'effetto della spaziatura è ben sostenuto. Per ogni carattere il tema dice che cosa
   intendevano i suoi progettisti e che cosa si sa, e non promette alcun risultato.

Decide l'utente, e l'amministratore può impostare il carattere predefinito per l'intero sito (scheda **Valori predefiniti degli utenti** delle impostazioni
del tema). La scheda Informazioni mostra un campione di ogni carattere, compresi i caratteri confondibili.

#### Fonti

- Braille Institute: [comunicato stampa su Atkinson Hyperlegible](https://prnewswire.com/news-releases/braille-institute-launches-new-award-winning-typeface-designed-to-improve-legibility-for-readers-with-low-vision-301012698.html)
  e [la sua disponibilità su Google Fonts](https://prnewswire.com/news-releases/braille-institutes-atkinson-hyperlegible-typeface-now-available-on-google-fonts-301349120.html);
  [Atkinson Hyperlegible su GitHub](https://github.com/googlefonts/atkinson-hyperlegible).
- Cooper Hewitt, Smithsonian Design Museum: [Atkinson Hyperlegible nella collezione](https://collection.cooperhewitt.org/objects/2318809952).
- [Lexend su GitHub](https://github.com/googlefonts/lexend/) e [lexend.com](https://www.lexend.com/).
- Gonzalez, A.: [OpenDyslexic](https://opendyslexic.org/about).
- Wery, J. J. e Diliberto, J. A. (2017), [The effect of a specialized dyslexia font, OpenDyslexic, on reading rate and accuracy](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5629233/), Annals of Dyslexia.
- Rello, L. e Baeza-Yates, R. (2013), [Good fonts for dyslexia](https://doi.org/10.1145/2513383.2513447), ACM ASSETS.
- Rello, L. e Baeza-Yates, R. (2016), [The effect of font type on screen readability by people with dyslexia](https://doi.org/10.1145/2897736), ACM Transactions on Accessible Computing.
- Zorzi, M. e altri (2012), [Extra-large letter spacing improves reading in dyslexia](https://pubmed.ncbi.nlm.nih.gov/22665803/), PNAS.
- Dyslexia Scotland: [Dyslexia-friendly typed formats](https://dyslexiascotland.org.uk/dyslexia-friendly-typed-formats).
- Dezeen: [Atkinson Hyperlegible](https://www.dezeen.com/awards/2020/longlists/atkinson-hyperlegible-typeface-for-people-with-low-vision/).
