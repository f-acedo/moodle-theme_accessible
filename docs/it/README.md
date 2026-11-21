# Accessible: un tema Moodle per persone non vedenti, ipovedenti e daltoniche

**Languages:** [English](../../README.md) · [Español](../es/README.md) · [Català](../ca/README.md) · [Français](../fr/README.md) · Italiano · [Português (Brasil)](../pt_br/README.md) · [Deutsch](../de/README.md)

**_Moodle dovrebbe funzionare per tutte le persone che devono usarlo, non solo per chi ha una vista perfetta._**

Accessible è un tema per Moodle 5.2 e versioni successive, basato su Boost. È stato progettato fin dall'inizio per tre gruppi di utenti che di solito sono lasciati a cavarsela da soli:

- **Persone totalmente non vedenti** che usano uno screen reader.
- **Persone ipovedenti** che usano ingranditori, lo zoom del browser o lenti speciali.
- **Persone con deficit della visione dei colori** (daltonismo), per cui «il pulsante rosso» o «il campo verde» non significano nulla.

L'obiettivo è che studenti, docenti e amministratori con queste esigenze possano davvero *percepire e navigare* Moodle, e non solo che le pagine superino una lista di controllo.

## Perché è diverso

La maggior parte dei temi parte da un progetto grafico e sistema l'accessibilità in seguito. Accessible fa il contrario: ogni decisione su colore, dimensione, ordine e formulazione è stata presa prima di tutto per i suoi utenti.

- **Essenziale per scelta.** Sfondo bianco, testo nero, link neri sottolineati, bersagli grandi e un indicatore di focus ben visibile. Niente di decorativo da disattivare.
- **Il colore non trasmette mai significato da solo.** Gli avvisi hanno una cornice colorata, un motivo, un simbolo *e* una parola scritta («Errore:», «Avviso:»).
- **Tutto si adatta alla dimensione del testo.** Le dimensioni sono relative, quindi un testo più grande dà un Moodle più grande: icone, pulsanti e campi crescono insieme al testo.
- **Decide l'utente.** Ogni persona sceglie il proprio carattere, la dimensione del testo, la spaziatura, il contrasto, il movimento, il focus e la visione dei colori, e può farlo prima di accedere.
- **Misurato, non presunto.** Il contrasto del testo punta al livello AAA delle WCAG 2.1 (7:1 per il testo normale, 4,5:1 per il testo grande), verificato con analisi automatiche in contrasto normale e alto, a varie dimensioni di testo, in Chromium e Firefox.

## Funzionalità

### Per tutti gli utenti

- **Opzioni di accessibilità personali** in un'unica pagina, raggiungibile dal pulsante di accessibilità sempre presente nella barra superiore:
  - **Carattere:** Lexend Deca (predefinito), Atkinson Hyperlegible o OpenDyslexic. Tutti e tre sono inclusi nel tema.
  - **Dimensione del testo:** 100%, 125%, 150% o 200%. L'intera pagina si adatta, icone e pulsanti compresi.
  - **Spaziatura del testo:** normale, ampia o molto ampia.
  - **Contrasto:** normale (nero su bianco) o alto (bianco su nero, con il giallo riservato al passaggio del mouse e al focus).
  - **Movimento:** normale o ridotto (viene rispettata anche l'impostazione del sistema).
  - **Contorno del focus:** normale o spesso.
  - **Filtri per la visione dei colori** per i deficit del rosso (protanopia), del verde (deuteranopia) e del blu (tritanopia), ciascuno in tre intensità, più una visualizzazione senza colore. Il bianco, il grigio e il nero non cambiano mai.
- **Controlli grandi e tolleranti:** bersagli di almeno 44 px per i pulsanti, campi dei moduli da 55 px, caselle di controllo e pulsanti di opzione grandi, e barre di scorrimento grandi e ad alto contrasto (in Chrome, Edge e altri browser Chromium; Firefox mantiene la propria larghezza).
- **Una pagina che ha senso quando viene letta ad alta voce:** il contenuto principale viene prima dei blocchi, ogni area di navigazione ha un nome, il campo della password ha un pulsante «Mostra la password» che indica se è attivo, e un pulsante «Torna su» compare quando scorri la pagina.
- **Opzioni prima di accedere:** il pulsante di accessibilità è anche nella pagina di accesso. Al primo accesso queste scelte vengono copiate nell'account, a meno che l'account non ne abbia già di proprie.

### Per gli amministratori

- **Usalo come tema del sito, oppure offrilo come scelta** accanto al tuo tema principale (con «Consenti agli utenti di scegliere il tema» attivo). Gli utenti possono tornare a un altro tema dalla stessa pagina.
- **Valori predefiniti del sito** per carattere, dimensione del testo, spaziatura, contrasto, movimento e focus, per tutti, visitatori compresi.
- **Una scheda Informazioni** nelle impostazioni del tema, con un'immagine di prova della visione dei colori, campioni dei caratteri, le licenze e un riepilogo di supporto che puoi copiare in una segnalazione di errore.
- **Un controllo di stato** (Report > Stato del sistema) che avvisa quando gli utenti non possono scegliere il tema o le loro opzioni.
- **Privacy integrata:** le preferenze sono dichiarate ed esportate tramite l'API per la privacy di Moodle. Le scelte dei visitatori sono memorizzate in un cookie che contiene solo opzioni di visualizzazione.
- **Nessuna richiesta esterna per i caratteri:** i caratteri sono inclusi nel tema.
- **Sette lingue:** inglese, spagnolo, catalano, francese, italiano, tedesco e portoghese brasiliano. Le traduzioni sono disponibili nei language pack di Moodle.

## Da sapere

- L'aspetto è **volutamente essenziale**. Se ti servono un marchio visivo marcato o colori personalizzati, questo non è il tema giusto.
- Il tema non può modificare i contenuti che non controlla: **attività H5P, iframe incorporati e testo colorato a mano** nei contenuti dei corsi.
- Con il testo al 200%, poche pagine larghe di Moodle (il registro delle valutazioni, la pagina di gestione dei corsi e la pagina del tentativo di quiz) possono ancora scorrere in orizzontale.
- Alcuni limiti derivano da Moodle stesso, come i livelli di intestazione saltati in alcune pagine del nucleo.
- Il tema **non è stato sottoposto a un audit né a una certificazione formali**. Nessun tema può rendere accessibile un sito da solo: i contenuti dei corsi contano altrettanto.

## Requisiti e installazione

- Moodle 5.2 o successivo, e il tema Boost (incluso in Moodle).
- In Moodle 5.3 il tema usa il menu principale classico, non quello nuovo introdotto nella versione 5.3.
- Copia il tema in `public/theme/accessible` (la cartella deve chiamarsi `accessible`; se scarichi lo ZIP da GitHub, rinomina prima la cartella), oppure installalo da *Amministrazione del sito > Plugin > Installazione plugin*, poi completa l'installazione da *Amministrazione del sito > Notifiche*.
- Per impostarlo come tema del sito: *Amministrazione del sito > Aspetto > Temi*.
- Perché ogni utente possa sceglierlo e impostare le proprie opzioni, attiva **Consenti agli utenti di scegliere il tema** (*Amministrazione del sito > Aspetto > Impostazioni avanzate tema*).
- Quando è una scelta dell'utente, la pagina di accesso usa il tema del sito. Per dare agli utenti un link di accesso che apre Accessible, attiva **Consenti il cambio del tema tramite URL** e condividi `https://your.site/login/index.php?theme=accessible` (vedi la [guida](accessible-theme-guide.md#un-link-di-accesso-che-apre-accessible) per il compromesso).

Non c'è nessun passaggio di compilazione: né Grunt, né npm, né webpack.

## Registro delle modifiche

Versione 1.0.0 (2026-11-11): versione iniziale.

## Versioni

**Il versionamento semantico (SemVer) è un sistema di numerazione standardizzato che porta chiarezza e prevedibilità allo sviluppo del software: assegna a ogni rilascio un numero in tre parti (MAJOR.MINOR.PATCH).** Per i plugin e i temi di Moodle, il suo scopo principale è comunicare agli amministratori di sistema la natura esatta delle modifiche al codice e alla struttura prima che aggiornino un sito in produzione. Distinguendo tra piccole correzioni visive, aggiunte di funzionalità sicure e modifiche architetturali che rompono la compatibilità, SemVer fa sì che la manutenzione della piattaforma resti sicura, che gli aggiornamenti siano prevedibili e che le distribuzioni automatizzate non alterino per errore l'esperienza degli utenti né danneggino la configurazione del database.

### Riferimento per le versioni del tema Accessible (SemVer)

| Tipo di rilascio | Incremento di versione | Cosa implica per un tema di Moodle | Esempi e dettagli tecnici di Moodle |
| :--- | :--- | :--- | :--- |
| **Patch** | `0.0.Z` | **Piccoli ritocchi di stile e correzione di errori.** Correzioni puramente estetiche o interne che non cambiano il modo in cui il tema viene configurato o usato a livello strutturale. | • Correggere un errore di spaziatura CSS o di layout adattivo.<br>• Regolare il colore di un pulsante o il contrasto della tipografia.<br>• Risolvere un avviso minore di PHP nei log del server.<br>• *Cambia solo le ultime cifre di `$plugin->version` in `version.php`.* |
| **Minor** | `0.Y.0` | **Nuove funzionalità o adattamenti sicuri alla piattaforma.** Aggiungere opzioni che non trasformano la struttura del tema, o aggiornare il codice per supportare una nuova versione di Moodle mantenendo la compatibilità con quelle attuali. | • Aggiungere un'opzione di layout o una nuova regione di blocchi senza rimuovere quelle esistenti.<br>• Introdurre una nuova impostazione propria in `settings.php` (ad esempio, un interruttore dell'intestazione).<br>• Aggiornare il tema per supportare una nuova versione minore di Moodle.<br>• *Si può automatizzare senza rischi; non rompe i layout dei corsi esistenti.* |
| **Major** | `X.0.0` | **Modifiche strutturali che rompono la compatibilità o aggiornamenti importanti.** Cambiamenti funzionali di ampia portata che richiedono l'attenzione dell'amministratore, modifiche al database o la fine del supporto per le versioni precedenti di Moodle, con il rischio di danneggiare il sito durante l'aggiornamento. | • Riprogettare completamente la struttura del layout (rimuovere o rinominare vecchie regioni di blocchi).<br>• Cambiare i nomi delle variabili di configurazione (le vecchie impostazioni del tema in `config_plugins` andrebbero perse).<br>• Aggiornare il tema solo per una nuova versione principale di Moodle, abbandonando il supporto per le precedenti (richiede di incrementare `$plugin->requires`). |

## Maggiori informazioni

La [guida completa](accessible-theme-guide.md) spiega perché esiste il tema, gli standard che segue, ogni funzionalità in dettaglio, i caratteri e la loro storia, e i suoi limiti noti. I dettagli tecnici dei filtri per la visione dei colori, i limiti dell'alto contrasto e la storia dei caratteri sono nell'appendice A della guida.

[Codice sorgente e versioni](https://github.com/f-acedo/moodle-theme_accessible). Segnalazioni di errori e suggerimenti: [issue tracker](https://github.com/f-acedo/moodle-theme_accessible/issues).

## Crediti e licenza

Sviluppato da Fernando Acedo e dall'ex team di sviluppo di Koditik. Claude Code ha aiutato a scrivere parti del tema, lo ha rivisto e ha aiutato a testarlo. Claude è un marchio registrato di Anthropic, PBC.

Con licenza **GNU GPL v3 o successiva** (vedi `LICENSE.txt`). I caratteri inclusi (Lexend Deca, Atkinson Hyperlegible e OpenDyslexic) sono concessi in licenza con la **SIL Open Font License 1.1**.
