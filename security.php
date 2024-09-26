<!DOCTYPE html>
<html lang="it">

  <head>

    <!-- Titolo della pagina -->
    <title>Iron Security | SICUREZZA</title>

    <!-- Informazioni <meta> sito -->
    <?php require_once "php/metaBasic.php" ?>
    <meta name="robots" content="noindex, nofollow">

    <!-- Collegamento font-esterni -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

    <!-- Collegamento css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/all.css">

    <!-- Favicon per tutti i dispositivi -->
    <?php include_once "php/favicon.php";  ?>

    <!-- Link esterni della pagina -->
    <?php include_once "php/linkEsterni.php" ?>

    <!-- Script della pagina -->


  </head>

  <body>

    <!-- ◄█ NAVBAR █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <?php require_once "php/navbar.php" ?>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->



    <!-- ◄█ HEADER █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <header class="header__sicurezza">

      <!-- video in background -->
      <div class="header__sicurezza__video">
        <video class="bg-video-header" autoplay loop muted>
          <source src="../video/earth2.mp4" type="video/mp4">
          <source src="../video/earth2.webm" type="video/webm">
          Your browser is not supported!
        </video>
      </div>

      <!-- radiant box -->
      <div class="header__sicurezza__radiant"></div>

      <!-- logo del sito -->
      <div class="header__sicurezza__logo">
        <img src="images/logo__header__white.png" alt="Logo del sito (Header)" class="logo__header">
      </div>

      <!-- area testo H1 title/subtitle -->
      <div class="header__sicurezza__textarea">
        <h1 class="heading-primary header__sicurezza__textarea__text">
          <span class="heading-primary__title">Sicurezza</span>
        </h1>
      </div>
    </header>
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->





    <main>






      <!-- ◄█ INTRO PAGINA █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <section id="section-pageIntro" class="section-content">

        <!-- paragrafo introduttivo -->
        <p class="paragraph">
          Il tema della sicurezza è sempre stato un tema molto discusso,
          sia nel campo dell'informatica che in altri campi più "reali", come per esempio quello dell'automobilistica o quello sul lavoro.
          In questa sezione del nostro sito illustreremo in linea generale le diverse accezioni della sicurezza
          focalizzandoci sull'obiettivo principale del sito: la sicurezza nel campo informatico/tecnologico.
          <br><br>
          Verrà prima fornita un'introduzione sugli aspetti generali della sicurezza
          per poi focalizzarci in dettaglio sulla sicurezza nel mondo di internet e dei personal computer.
          Infine verranno illustrate varie metodologie su come proteggere se stessi e la propria azienda
          in questo mondo digitale sempre più vasto e sempre più pericoloso.
        </p>

        <!-- Immagine cartello sicurezza -->
        <div class="features-box__imagebox">
          <img class="features-box__imagebox__img" src="images/cartello.png" width="200" height="200" alt="La sicurezza non è un limite">
        </div>

      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->






      <br><br>







      <!-- ◄█ INTRODUZIONE █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <section id="section-introduzione" class="section-content">

        <!-- titolo sezione -->
        <div class="u-center-text"><h2 class="heading-secondary">INTRODUZIONE</h2></div>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Cosa si intende per sicurezza?</h3>

        <p class="paragraph">
          La sicurezza può essere definita come la "conoscenza che l'evoluzione di un sistema non produrrà stati
          indesiderati". In altri termini è l'essere consapevoli che una certa azione non provocherà dei danni futuri.
          Il presupposto della conoscenza è fondamentale da un punto di vista epistemologico, poiché un sistema può
          evolversi senza dar luogo a stati indesiderati, ma non per questo esso può essere ritenuto sicuro.
          Solo una conoscenza di tipo scientifico, basata quindi su osservazioni ripetibili, può garantire
          una valutazione sensata della sicurezza.
          <br><br>
          La sicurezza totale si ha in assenza di pericoli.
          In senso assoluto, si tratta di un concetto difficilmente traducibile nella vita reale anche se
          l'applicazione delle norme di sicurezza rende più difficile il verificarsi di eventi dannosi e di incidenti,
          e ciò si traduce sempre in una migliore qualità della vita.
        </p>

        <div class="slider u-margin-bottom-medium"><div class="slider-row"></div></div>

        <br><br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Dove si parla di sicurezza?</h3>

        <p class="paragraph">
          I campi in cui la sicurezza è un obiettivo primario sono numerosi,
          così come vari sono i sistemi per raggiungere un grado di sicurezza accettabile.
          Le attività lavorative, in genere, ma anche la vita domestica, gli hobby, il gioco e lo
          sport richiedono alcune attenzioni particolari. Praticamente ogni settore della vita moderna
          ha delle implicazioni relative alla sicurezza. Le più importanti sono riassunte nella seguente tabella.
        </p>

        <table class="rwd-table u-margin-bottom-medium">
          <tbody>
            <!-- intestazione tabella -->
            <tr>
              <th><strong>Nome</strong></th>
              <th><strong>Descrizione</strong></th>
              <th><strong>Informazioni</strong></th>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-utensils u-margin-right-small"></i>
                <span><strong>Sicurezza alimentare</strong></span>
              </td>
              <td data-th="Descrizione">Sicurezza igienico-sanitaria degli alimenti e dei mangimi (food safety).</td>
              <td data-th="Informazioni"><a href="<?php echo $Info_sicurezza_alimentare;?>" target="_blank" class="btn-link">Leggi</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-atom u-margin-right-small"></i>
                <span><strong>Scienza della sicurezza</strong></span>
              </td>
              <td data-th="Descrizione">
                Disciplina che studia il rischio nelle sue varie forme con l'obiettivo
                di ridurlo fino ad annullarlo <br> o controllarne le conseguenze.
              </td>
              <td data-th="Informazioni"><a href="<?php echo $Info_sicurezza_Scienza;?>" target="_blank" class="btn-link">Leggi</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-car u-margin-right-small"></i>
                <span><strong>Sicurezza automobilistica</strong></span>
              </td>
              <td data-th="Descrizione">
                Disciplina che gestisce le norme di sicurezza sulla strada.
              </td>
              <td data-th="Informazioni"><a href="<?php echo $Info_sicurezza_Strada;?>" target="_blank" class="btn-link">Leggi</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-plane u-margin-right-small"></i>
                <span><strong>Sicurezza Aerea</strong></span>
              </td>
              <td data-th="Descrizione">
                È un campo che comprende l'indagine e lo studio degli incidenti aerei e la prevenzione di questi ultimi.
              </td>
              <td data-th="Informazioni"><a href="<?php echo $Info_sicurezza_Aerea;?>" target="_blank" class="btn-link">Leggi</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-battery-three-quarters u-margin-right-small"></i>
                <span><strong>Sicurezza Energetica</strong></span>
              </td>
              <td data-th="Descrizione">
                Si intende la disponibilità di rifornimenti energetici affidabili a prezzi ragionevoli.
              </td>
              <td data-th="Informazioni"><a href="<?php echo $Info_sicurezza_Energia;?>" target="_blank" class="btn-link">Leggi</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-bolt u-margin-right-small"></i>
                <span><strong>Sicurezza Elettrica</strong></span>
              </td>
              <td data-th="Descrizione">
                Si tratta di una scienza applicata che serve a realizzare impianti elettrici sicuri.
              </td>
              <td data-th="Informazioni"><a href="<?php echo $Info_sicurezza_Elettrico;?>" target="_blank" class="btn-link">Leggi</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-laptop u-margin-right-small"></i>
                <span><strong>Sicurezza Informatica</strong></span>
              </td>
              <td data-th="Descrizione">
                È l'insieme dei mezzi e delle tecnologie tesi alla protezione dei sistemi informatici.
              </td>
              <td data-th="Informazioni"><a href="<?php echo $Info_sicurezza_informatica;?>" target="_blank" class="btn-link">Leggi</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-briefcase u-margin-right-small"></i>
                <span><strong>Sicurezza sul lavoro</strong></span>
              </td>
              <td data-th="Descrizione">
                Riguarda l'insieme delle misure preventive e protettive da adottare per gestire al meglio la salute, <br>
                la sicurezza e il benessere dei lavoratori.
              </td>
              <td data-th="Informazioni"><a href="<?php echo $Info_sicurezza_lavoro;?>" target="_blank" class="btn-link">Leggi</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-home u-margin-right-small"></i>
                <span><strong>Sicurezza dei luoghi</strong></span>
              </td>
              <td data-th="Descrizione">
                Sicurezza generale della vita quotidiana.
              </td>
              <td data-th="Informazioni"><a href="<?php echo $Info_sicurezza_casa;?>" target="_blank" class="btn-link">Leggi</a></td>
            </tr>
          </tbody>
        </table>

        <br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">La sicurezza in Italia</h3>
        <p class="paragraph">
          Per quanto riguarda il nostro paese, nonostante la sicurezza sta crescendo sempre
          di più, ci sono ancora molteplici problemi. È difficile dare ora una panoramica generale,
          ma il lettore se vuole approfondire l'argomento può visitare i seguenti link, i quali contengono
          tutte le informazioni riguardanti la sicurezza nel nostro paese.
        </p>
        <table class="rwd-table u-margin-bottom-medium">
          <tbody>
            <!-- intestazione -->
            <tr>
              <th><strong>Nome del sito</strong></th>
              <th><strong>Link</strong></th>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome del sito"><strong>Istat.it</strong></td>
              <td data-th="Link">
                <i class="fas fa-directions grid-link-5__icon u-margin-right-little"></i>
                <a href="<?php echo $sic_italia_istat;?>" target="_blank" class="btn-link">Leggi</a>
              </td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome del sito"><strong>Interno.gov.it</strong></td>
              <td data-th="Link">
                <i class="fas fa-directions grid-link-5__icon u-margin-right-little"></i>
                <a href="<?php echo $sic_italia_gov;?>" target="_blank" class="btn-link">Leggi</a>
              </td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome del sito"><strong>Documentazione.info</strong></td>
              <td data-th="Link">
                <i class="fas fa-directions grid-link-5__icon u-margin-right-little"></i>
                <a href="<?php echo $sic_italia_document;?>" target="_blank" class="btn-link">Leggi</a>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->




      <br><br>





      <!-- ◄█ MONDO PC █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <section id="section-mondopc" class="section-content">

        <!-- titolo sezione -->
        <div class="u-center-text"><h2 class="heading-secondary">LA SICUREZZA NEL MONDO DEI COMPUTER</h2></div>
        <p class="paragraph">
          Ora che abbiamo introdotto un po' il concetto di sicurezza soffermiamoci adesso sull'argomento principale del sito: La sicurezza informatica.
        </p>
        <br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Cosa si intende per sicurezza informatica?</h3>
        <p class="paragraph">Per sicurezza informatica intendiamo l'insieme dei mezzi e delle tecnologie
          tesi alla protezione dei sistemi informatici.</p>

        <!-- titolo sub-sub-sezione -->
        <div class="paragraph u-margin-bottom-none">
          <span class="h4alt u-margin-top-small">
            <i class="fas fa-laptop u-margin-right-little"></i>
            <span>La sicurezza nei computer</span>
          </span><br>
        </div>
        <p class="paragraph">
          La sicurezza è una delle branche più importanti dell’informatica, e proteggere i computer dal singolo pc familiare alle complesse
          reti di sistemi professionali è il suo obiettivo. La protezione si riferisce al funzionamento del computer come sistema, oltre che
          alla riservatezza dei dati e ai programmi che contiene. La propagazione di virus informatici, soprattutto attraverso la posta elettronica
          o lo scambio via rete di file, aumenta ogni giorno, e spesso è facilitata dai comportamenti degli utenti, poco attenti al tema della
          sicurezza. Sempre maggiore importanza ha poi, per la sicurezza informatica, la crittografia, che permette di inviare dati in rete in modo
          che possano essere compresi solo dal destinatario autorizzato.
        </p>

        <!-- titolo sub-sub-sezione -->
        <div class="paragraph u-margin-bottom-none">
          <span class="h4alt u-margin-top-small">
            <i class="fas fa-puzzle-piece u-margin-right-little"></i>
            <span>Sistemi attivi e passivi</span>
          </span><br>
        </div>
        <p class="paragraph">
          La sicurezza informatica ha diversi livelli, sia passivi sia attivi. A seconda dell’importanza del sistema,
          dei dati in esso contenuti e della criticità del funzionamento, le tecniche di protezione sono molto diverse,
          dato che il personal computer (PC) di casa nostra ha evidentemente esigenze differenti e meno critiche delle macchine
          che controllano il traffico aereo. Per tutti è comunque importante una buona e sicura collocazione fisica che li metta
          al riparo da incidenti (perdite d’acqua, cadute e così via) e dai malintenzionati, e un sistema che ne permetta
          l’uso solo agli utenti autorizzati. Se questi sono i sistemi passivi, quelli attivi sono invece rappresentati dai
          programmi (o anche da macchine dedicate solo a questa funzione) che continuamente esaminano tutte le richieste di accesso
          provenienti dall’esterno per verificare che queste siano lecite e autorizzate.
        </p>

        <div class="flex-grid">
          <!-- colonna 1 -->
          <div class="col">
            <div class="features-box u-nohover">
              <i class="features-box__icon fas fa-fire"></i>
              <h3 class="heading-tertiary u-margin-bottom-small">Sistemi di sicurezza informatica attiva </h3>
              <p class="features-box__text">
                Protezione degli apparati tecnologici dal punto di visto fisico. Si tratta di evitare danni accidentali, incendi e malfunzionamenti
                dovuti a cause esterne. Un rimedio a quste problematiche può essere l'attuazione di backup. Le prima 3 immagini della galleria sottostante sono esempi
                di questa tipologia.
              </p>
            </div>
          </div>
          <!-- colonna 2 -->
          <div class="col">
            <div class="features-box u-nohover">
              <i class="features-box__icon fas fa-skull-crossbones"></i>
              <h3 class="heading-tertiary u-margin-bottom-small">Sistemi di sicurezza informatica passiva </h3>
              <p class="features-box__text">
                Protezione degli apparati tecnologici/informatici dal punto di visto interno: evitare infezioni di malware/virus
                e altri problemi che possono/potrebbero incidere in maniera significativa sulla sicurezza del sistema.
                Le utime 2 immagini della galleria sottostante sono esempi di questa tipologia.
              </p>
            </div>
          </div>
        </div>

        <div class="wrapperForImageBox">
          <!-- immagine 1: Pc danneggiato  -->
          <div class="imageBox">
            <div class="imageBox__gallery">
              <a target="_blank" href="images/dannifisicipc.png">
                <img class="imageBox__gallery__img" src="images/dannifisicipc.png" alt="Pc distrutto">
              </a>
              <div class="imageBox__gallery__desc">
                <p class="paragraph u-margin-bottom-none">
                  Distruzione fisica del pc. (Sicurezza informatica attiva).
                </p>
              </div>
            </div>
          </div>
          <!-- immagine 2: Pc bruciato  -->
          <div class="imageBox">
            <div class="imageBox__gallery">
              <a target="_blank" href="images/pcbruciato.png">
                <img class="imageBox__gallery__img" src="images/pcbruciato.png" alt="Pc in fiamme">
              </a>
              <div class="imageBox__gallery__desc">
                <p class="paragraph u-margin-bottom-none">
                  Pc distrutto da incendio. (Sicurezza informatica attiva).
                </p>
              </div>
            </div>
          </div>
          <!-- immagine 3: pc liquido -->
          <div class="imageBox">
            <div class="imageBox__gallery">
              <a target="_blank" href="images/pcliquid.png">
                <img class="imageBox__gallery__img" src="images/pcliquid.png" alt="Liquido sul pc">
              </a>
              <div class="imageBox__gallery__desc">
                <p class="paragraph u-margin-bottom-none">
                  Pc danneggiato da liquidi. (Sicurezza informatica attiva).
                </p>
              </div>
            </div>
          </div>
          <!-- immagine 4: hacker -->
          <div class="imageBox">
            <div class="imageBox__gallery">
              <a target="_blank" href="images/hacker.png">
                <img class="imageBox__gallery__img" src="images/hacker.png" alt="Hacker">
              </a>
              <div class="imageBox__gallery__desc">
                <p class="paragraph u-margin-bottom-none">
                  Attacco hacker da remoto (sicurezza informatica passiva).
                </p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>

        <br><br>

        <!-- titolo sub-sub-sezione -->
        <div class="paragraph u-margin-bottom-none">
          <span class="h4alt u-margin-top-small">
            <i class="fas fa-exclamation u-margin-right-little"></i>
            <span>Possibili rischi</span>
          </span><br>
        </div>
        <p class="paragraph">
          Nei PC usati a casa o al lavoro, e connessi alla rete, i problemi maggiori sono dati dal diffondersi di virus informatici,
          ovvero programmi che possono ‘infettarne’ altri, trasformandoli e compromettendo il funzionamento del sistema. Molti virus,
          che arrivano tipicamente come allegati alla posta elettronica e vengono attivati da utenti poco accorti, non provocano danni
          significativi, ma altri possono portare, come nel caso dei cosiddetti worms («vermi»), anche alla distruzione completa dei dati
          e dei programmi o comunque alla paralisi del computer. Le tecniche di sicurezza sono in continua evoluzione, dato che anche i
          tentativi di violazione sono continuamente rinnovati! È importante quindi rimanere aggiornati costantemente in questo ambito.
          Ecco perché abbiamo creato questo portale accessibile a tutti che rimarrà costantemente aggiornato su tutte le questioni
          riguardanti la sicurezza informatica.
        </p>
        <p class="paragraph">Successivamente verrà analizzata principalmente la sicurezza informatica passiva.</p>

        <br><br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Analisi del rischio</h3>
        <p class="paragraph">
          La cosiddetta analisi del rischio parte dall'identificazione dei beni da proteggere, per poi valutare le possibili
         minaccie in termini di probabilità di occorrenza e relativo danno potenziale (gravità). In base alla stima del rischio si
          decide se, come e quali contromisure di sicurezza adottare (piano di rischio). L'analisi del rischio tipicamente precede la
          fase di messa in esercizio del sistema informatico. Spesso l'obiettivo dell'attaccante non è rappresentato dai sistemi
          informatici in sé, ma piuttosto dai dati in essi contenuti: la sicurezza informatica deve quindi preoccuparsi di impedire
          l'accesso non solo agli utenti non autorizzati, ma anche a soggetti con autorizzazione limitata a specifiche operazioni, per
          evitare che dei dati appartenenti al sistema informatico vengano copiati, modificati o cancellati.
          <br><br>
          Le violazioni possono essere molteplici: vi possono essere tentativi non autorizzati di accesso a zone riservate,
          furto di identità digitale o di file riservati, utilizzo di risorse che l'utente non dovrebbe poter utilizzare ecc.
          La sicurezza informatica si occupa anche di prevenire eventuali situazioni di Denial of Service (DoS). I DoS sono attacchi
          sferrati al sistema con l'obiettivo di renderne inutilizzabili alcune risorse in modo da danneggiare gli utenti del sistema. Per
          proteggersi in modo adeguato è fondamentale essere consapevoli di tutti questi fattori.
          Esistono attualmente centinaia di compagnie/aziende il cui lavoro aiuta a proteggere utenti e altre aziende dai
          pericoli informatici informando loro sui rischi/problemi che si potrebbero verificare durante lo svolgimento della normale
          attività lavorativa di una persona. Tra tutte vi segnaliamo in particolare questa:
          <a href="https://www.analisideirischinformatici.it" class="btn-link-paragraph u-display-inlineblock ">analisideirischinformatici.it</a>.
          Qua sotto è mostrata a scopo dimostrativo come funziona un attacco DDoS.
        </p>

        <div class="iframe-wrapper" style="width: 100%;">
          <iframe style="margin: 0 auto; display: block; max-width: 100%;" width="560" height="315"
          src="https://www.youtube-nocookie.com/embed/yLbC7G71IyE"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>



        <br><br><br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Sicurezza nei programmi informatici</h3>
        <p class="paragraph">Nei prossimi paragrafi verranno analizzati in dettaglio tutte le problematiche relative
        alla sicurezza all'interno dei software di un calcolare ma anche in generale di applicazione per smarthphone/tablet.</p>

        <!-- titolo sub-sub-sezione -->
        <div class="paragraph u-margin-bottom-none">
          <span class="h4alt u-margin-top-small">
            <i class="fas fa-shield-alt u-margin-right-little"></i>
            <span>Protezione del software</span>
          </span><br>
        </div>
        <p class="paragraph">
          Il problema della sicurezza dei programmi (sistemi operativi e applicazioni) si è posto all'attenzione
          degli sviluppatori di software come conseguenza della sensibile crescita dell'uso degli strumenti informatici
          e di Internet. Per quanto riguarda la produzione di software "protetti", il concetto di sicurezza si può definire
          come l'assenza di condizioni conflittuali capaci di produrre danni mortali o irreparabili a un sistema. Nella progettazione di
          software è quindi fondamentale raggiungere il compromesso più funzionale tra l'efficienza d'uso del programma in
          questione e la sua capacità di "sopravvivenza" ad attacchi esterni e a errori più o meno critici. Il livello base della
          sicurezza dei programmi è fornito dalla sicurezza del sistema operativo su cui poggiano i programmi applicativi.
        </p>

        <!-- titolo sub-sub-sezione -->
        <div class="paragraph u-margin-bottom-none">
          <span class="h4alt u-margin-top-small">
            <i class="far fa-check-square u-margin-right-little"></i>
            <span>Verifica della sicurezza di un programma</span>
          </span><br>
        </div>
        <p class="paragraph u-margin-bottom-none">
          Un software (o programma) è tanto più sicuro quanto minori sono le probabilità che si verifichi un guasto e la gravità del
          danno conseguente al guasto stesso. Per essere efficace un programma deve essere controllato nelle sue specifiche
          e deve essere privo di difetti nel codice: a questo fine viene effettuato un controllo delle specifiche del programma
          e delle prestazioni correlate all'affidabilità; in secondo luogo viene analizzata ogni parte di codice e funzione del sistema.
          Una volta prodotto il software si procede alla verifica del suo comportamento, in modo tale da effettuare una ricerca estesa
          dei difetti presenti, per passare poi alla loro eventuale eliminazione. Esistono diversi modelli di sicurezza per il controllo
          dei programmi, basati su due metodi differenti:
        </p>
        <div class="u-margin-left-small u-margin-bottom-medium">
          <ul class="lu-paragraph">
            <li class="li-paragraph"><strong>Semantic-based security model</strong> (modelli di sicurezza basati sulla semantica): la sicurezza del programma controllato viene esaminata in termini di comportamento del programma</li>
            <li class="li-paragraph"><strong>Security-typed language</strong> (modelli di sicurezza basati sul linguaggio): i tipi delle variabili sono seguiti dall'esplicazione delle politiche adottate per l'uso dei dati battuti.</li>
          </ul>
        </div>

        <!-- titolo sub-sub-sezione -->
        <!-- <div class="paragraph u-margin-bottom-none">
          <span class="h4alt u-margin-top-small">
            <i class="fas fa-exclamation-triangle u-margin-right-little"></i>
            <span>Errori di programma</span>
          </span><br>
        </div>
        <p class="paragraph u-margin-bottom-none">
          L'IEEE (Institute of Electrical and Electronics Engineers) ha catalogato gli errori
          nel software in tre diverse categorie a seconda della natura degli errori stessi. Esse sono:
        </p>
        <div class="u-margin-left-small u-margin-bottom-medium">
          <ul class="lu-paragraph">
            <li class="li-paragraph"><strong>Error:</strong> è un errore umano verificatosi durante il processo di interpretazione delle specifiche oppure durante l'uso di un metodo o nel tentativo di risoluzione di un problema</li>
            <li class="li-paragraph"><strong>Failure:</strong> è un comportamento del software imprevisto e incongruo rispetto alle specifiche del programma stesso</li>
            <li class="li-paragraph"><strong>Fault:</strong> è un difetto del codice sorgente.</li>
          </ul>
        </div> -->

        <br><br><br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Sicurezza nella rete Internet</h3>
        <p class="paragraph">Nei prossimi paragrafi verranno analizzati in dettaglio tutte le problematiche relative
        alla sicurezza all'interno dei software di un calcolare ma anche in generale di applicazione per smarthphone/tablet.</p>

        <!-- titolo sub-sub-sezione -->
        <div class="paragraph u-margin-bottom-none">
          <span class="h4alt u-margin-top-small">
            <i class="fas fa-globe u-margin-right-little"></i>
            <span>L'importanza delle reti</span>
          </span><br>
        </div>
        <p class="paragraph">
          Nell'ambito della sicurezza informatica la sicurezza delle reti è una problematica che nasce nel momento
          in cui si hanno più computer interconnessi fra loro, cioè in una rete di calcolatori: essi, infatti, offrono
          diverse vulnerabilità sfruttabili, più o meno facilmente, da terzi per intromettersi nel sistema ed intercettarne i dati.
          Quando la rete è aperta a Internet, un'importante aggravante deriva dal fatto che Internet è nata come rete didattica
          in un ambiente universitario e le sue regole non prevedono metodi di sicurezza intrinseci alla struttura: le difese devono
          essere messe in atto sulle macchine stesse o creando strutture di rete particolari. Infine è importante sapere quali solo i
          beni da proteggere.
        </p>

        <!-- titolo sub-sub-sezione -->
        <div class="paragraph u-margin-bottom-none">
          <span class="h4alt u-margin-top-small">
            <i class="fas fa-vr-cardboard u-margin-right-little"></i>
            <span>Beni da proteggere</span>
          </span><br>
        </div>
        <p class="paragraph">
          I beni da proteggere (asset in lingua inglese) sono principalmente la confidenzialità, l'integrità e la
          disponibilità dei dati gestiti dalla rete informatica. Evidentemente per fare ciò bisogna anche proteggere
          i computer ed i vari dispositivi presenti nella rete. Considerando poi che la rete di computer non è fine a se
          stessa, ma è parte di un sistema più complesso, solitamente è un bene da proteggere anche il sistema sottostante alla
          rete. Ad esempio, è facilmente intuibile che il sistema informatico di una banca protegge anche il denaro da essa custodito.
        </p>

        <!-- titolo sub-sub-sezione -->
        <div class="paragraph u-margin-bottom-none">
          <span class="h4alt u-margin-top-small">
            <i class="fas fa-network-wired  u-margin-right-little"></i>
            <span>Safer Internet</span>
          </span><br>
        </div>
        <p class="paragraph">
          L'idea del programma di protezione della rete "Safer Internet" è nata a seguito della crescita di internet
          e per la crescente presenza di bambini a contatto con questo mondo. "Safer Internet", introdotto dal Parlamento
          europeo l'11 maggio 2005, vuole promuovere l'uso sicuro di internet soprattutto per i bambini: una rete europea di
          21 linee nazionali attraverso le quali gli utenti finali possono denunciare anonimamente la presenza di contenuti illegali
          su internet, e la creazione di 23 nodi nazionali di sensibilizzazione per promuovere un uso sicuro di internet,
          rivolto ai bambini, ai genitori e agli insegnanti. Oltre ai provvedimenti di autoregolamentazione e allo sviluppo di
          tecnologie adeguate, l'istruzione gioca un ruolo chiave. È indispensabile, infatti, la partecipazione e l'istruzione di
          genitori e insegnanti, spesso digiuni in materia di internet, che seguano con costanza i ragazzi nella navigazione, fornendo
          loro gli strumenti critici necessari per un approccio consapevole alla rete.
        </p>

        <br><br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Sicurezza della comunicazione</h3>
        <p class="paragraph u-margin-bottom-none">
          Uno dei filoni molto importante della sicurezza informatica si occupa delle problematiche di sicurezza
          connesse alla trasmissione di informazioni sensibili e quindi molto private in rete o su qualunque sistema
          di telecomunicazioni (sicurezza informatica nella comunicazione). Garantendo la sicurezza nella comunicazione
          è possibili garantire al tempo stesso sia la protezione dei dati in transito ma anche la protezione sugli accessi
          non autorizzati alla varie risorse e servizi di rete. In tale ambito sono diffuse tecniche di autenticazione
          e crittografia come contromisure allo sniffing, ovvero all’attività di intercettazione passiva dei dati
          che transitano in una rete telematica di calcolatori informatici.
        </p>
        <div class="u-margin-left-small u-margin-bottom-medium">
          <ul class="lu-paragraph">
            <li class="li-paragraph"><strong>Attacchi passivi:</strong> quando un intruso cattura informazioni in transito senza modificarle;</li>
            <li class="li-paragraph"><strong>Attacchi attivi:</strong> quando un intruso cattura e modifica o distrugge le informazioni in transito.</li>
          </ul>
        </div>

        <br><br><br>


        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Sicurezza nelle Aziende</h3>
        <p class="paragraph">
          La sicurezza informatica può essere definita come l’insieme di prodotti, servizi, regole
          organizzative e comportamenti individuali che proteggono i sistemi informatici di un’azienda. L’obiettivo è tutelare
          le risorse da accessi indesiderati, garantire la riservatezza delle informazioni, assicurare il funzionamento e la
          disponibilità dei servizi. Un paragone possibile è quello con le combinazioni di chiavi che blindano una cassaforte:
          la cybersecurity fa lo stesso con il sistema informatico, cioè il caveau che custodisce le nostre informazioni più preziose.
          Quando si parla di cyber security nelle imprese, bisogna focalizzarsi su tre aspetti. Prima di tutto, la disponibilità
          dei dati: è necessario ridurre a livelli accettabili i rischi connessi al loro furto o alle intrusioni abusive. Poi va
          tutelata l’integrità dei dati, ovvero bisogna garantire che le informazioni non vengano modificate o cancellate per via
          di una manomissione volontaria, un errore o un malfunzionamento tecnico. Infine, la riservatezza informatica, cioè tutelare le
          informazioni da accessi e usi non autorizzati.
        </p>

      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->




      <br><br>








      <!-- ◄█ ATTACCHI Eminaccie █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <section class="section-content" id="section-attacchiminaccie">

        <!-- Titolo SEZIONE -->
        <div class="u-center-text"><h2 class="heading-secondary">ATTACCHI Eminaccie</h2></div>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Introduzione</h3>
        <p class="paragraph u-margin-bottom-none">
          I sistemi informatici sono soggetti a vulnerabilità e attacchi volti all'accesso ai
          dati in esso contenuti oppure o a minarne la funzionalità o disponibilità di servizio.
          Spesso dal funzionamento o meno del sistema informatico dipende anche la sicurezza dei dati
          in esso contenuti. Le stesse cause di out of service dei sistemi informatici possono anche essere
          raggruppate in due classi di eventi:
        </p>
        <div class="u-margin-left-small u-margin-bottom-medium">
          <ul class="lu-paragraph">
            <li class="li-paragraph"><strong>Eventi accidentali</strong>
              = Gli eventi accidentali non riguardano attacchi malevoli, ma fanno riferimento a eventi causati accidentalmente dall'utente stesso, tipo: uso difforme dal consigliato di un qualche sistema, incompatibilità di parti hardware, guasti imprevisti, ecc. Tutti questi eventi compromettono la sicurezza del sistema soprattutto in termini di disponibilità. Per evitare gli eventi accidentali non esistono soluzioni generali; un primo
              rimedio è il fare regolarmente una
              copia di backup del sistema, comprendente dati e applicazioni, com'è tipico delle procedure di disaster recovery, in modo da poter fronteggiare un danno imprevisto.
            </li>
            <li class="li-paragraph"><strong>Eventi indesiderati</strong> = quelli indesiderati sono quelli per lo più inaspettati, anche se è prudente aspettarsi di tutto, e sono i cosiddetti attacchi da parte di utenti non autorizzati al trattamento di dati o all'utilizzo di servizi. Alcuni degli eventi indesiderati che si possono subire possono essere attacchi malevoli e uso delle autorizzazioni di accesso non autorizzati.</li>
          </ul>
        </div>

        <br><br>

        <!-- titolo sub-section -->
        <h3 class="heading-tertiary">Glossario delleminaccie</h3>
        <p class="paragraph">Vogliamo illustrare qua sotto un elenco delleminaccie informatiche più comuni e una breve descrizione per ciascuno.</p>

        <!-- Virus e worm -->
        <div class="features-box-single u-nohover u-margin-bottom-medium">
          <object class="features-box-single__svg" data="images/svg/005-crime.svg" type="image/svg+xml"></object>
          <h3 class="heading-tertiary u-margin-bottom-small">Virus e worm</h3>
          <p class="features-box-single__text u-margin-bottom-medium">
            Un virus informatico è un programma che si propaga di file in file all'interno di uno stesso PC e da
            un PC all'altro, e può essere programmato per cancellare o danneggiare dati. Spesso è mascherato
            dentro programmi che sembrano innocui.
            I worm sono  particolari tipi di virus che, per diffondersi, non infettano altri file ma utilizzano la rete:
            si installano in un computer per poi trovare il modo di diffondersi ad altri PC. In alcuni casi possono
            autoeseguirsi, ma più spesso hanno bisogno dell’intervento dell’utente per iniziare il ciclo di
            infezione.
          </p>
        </div>
        <!-- Malware -->
        <div class="features-box-single u-nohover u-margin-bottom-medium">
          <object class="features-box-single__svg" data="images/svg/015-internet.svg" type="image/svg+xml"></object>
          <h3 class="heading-tertiary u-margin-bottom-small">Malware</h3>
          <p class="features-box-single__text u-margin-bottom-medium">
            Con il termine "malware" ("malicious software", ovvero "software maligno") ci si riferisce a
            qualsiasi programma deliberatamente creato per effettuare un'azione non autorizzata che può
            danneggiare il funzionamento e la sicurezza del sistema operativo.    Si trasmette via internet,
            tramite la posta elettronica o la semplice navigazione in internet. Tra le categorie di malware più
            diffuse si ricordano virus, trojan horse, keylogger, worm e backdoor.
          </p>
        </div>
        <!-- Trojan -->
        <div class="features-box-single u-nohover u-margin-bottom-medium">
          <object class="features-box-single__svg" data="images/svg/012-hack.svg" type="image/svg+xml"></object>
          <h3 class="heading-tertiary u-margin-bottom-small">Trojan</h3>
          <p class="features-box-single__text u-margin-bottom-medium">
            Si definisce “Trojan” un malware nascosto in un programma che appare come software legittimo
            ma che, una volta lanciato, danneggia o compromette la sicurezza e il funzionamento del computer.
            Differisce da virus e worm perché non si diffonde da  solo ma, per lo più, viene inconsapevolmente
            installato dall’utente che lo scarica da internet insieme al programma di cui necessita.
            Esistono numerosi (e sempre nuovi) tipi di trojan, usati per accedere a informazioni riservate e dati
            sensibili. I più comuni sono i Trojan‐Backdoor (spesso includono un keylogger), Trojan‐Spy, Trojan
            che rubano password, Trojan‐Proxy che trasformano il computer in una macchina distributrice di
            spam.
          </p>
        </div>
        <!-- Rootkit -->
        <div class="features-box-single u-nohover u-margin-bottom-medium">
          <object class="features-box-single__svg" data="images/svg/016-lock.svg" type="image/svg+xml"></object>
          <h3 class="heading-tertiary u-margin-bottom-small">Rootkit</h3>
          <p class="features-box-single__text u-margin-bottom-medium">
            Con questo termine si intende un programma che permette di accedere a un computer senza
            l’autorizzazione dell’utente o dell’amministratore. Si tratta di software finalizzati a nascondere
            l'attività svolta dai Trojan. Una volta installati sono invisibili agli utenti e riescono ad eludere anche  i
            software di sicurezza
          </p>
        </div>
        <!-- Phishing -->
        <div class="features-box-single u-nohover u-margin-bottom-medium">
          <object class="features-box-single__svg" data="images/svg/010-theft.svg" type="image/svg+xml"></object>
          <h3 class="heading-tertiary u-margin-bottom-small">Phishing</h3>
          <p class="features-box-single__text u-margin-bottom-medium">
            Il phishing è una frode informatica finalizzata a ottenere dati personali sensibili come password,
            informazioni relative ai conti bancari o alle carte di credito. Si attua attraverso l’invio di una grande
            quantità di email a nome di istituti di credito, finanziari, assicurativi, in cui si invita l’utente a
            collegarsi tramite un link a un sito web fasullo (apparentemente uguale a quello vero) dove gli viene
            richiesto di inserire informazioni riservate.
          </p>
        </div>
        <!-- Keylogger -->
        <div class="features-box-single u-nohover u-margin-bottom-medium">
          <object class="features-box-single__svg" data="images/svg/003-computer.svg" type="image/svg+xml"></object>
          <h3 class="heading-tertiary u-margin-bottom-small">Keylogger</h3>
          <p class="features-box-single__text u-margin-bottom-medium">
            Si tratta di programmi che registrano tutto ciò che l’utente digita sulla tastiera: nella maggior parte
            dei casi sono quindi progettati per rubare dati sensibili quali login e codici bancari.
          </p>
        </div>
        <!-- Spyware -->
        <div class="features-box-single u-nohover u-margin-bottom-medium">
          <object class="features-box-single__svg" data="images/svg/014-spyware.svg" type="image/svg+xml"></object>
          <h3 class="heading-tertiary u-margin-bottom-small">Spyware</h3>
          <p class="features-box-single__text u-margin-bottom-medium">
            Con questa parola si indica un software che monitora ciò che viene digitato sulla tastiera
            ("keyloggers'"), raccoglie informazioni confidenziali (password, numeri di carte di credito, PIN etc.)
            e indirizzi email, traccia le abitudini di navigazione dell'utente. I dati raccolti vengono inviati a terze
            persone,  naturalmente senza che gli utenti interessati se ne accorgano.
          </p>
        </div>
        <!-- Botnet -->
        <div class="features-box-single u-nohover u-margin-bottom-medium">
          <object class="features-box-single__svg" data="images/svg/002-cloud.svg" type="image/svg+xml"></object>
          <h3 class="heading-tertiary u-margin-bottom-small">Botnet</h3>
          <p class="features-box-single__text u-margin-bottom-medium">
            Un botnet è una rete di computer collegati ad internet, infettati con un Trojan o dell'altro malware,
            e controllati a distanza dai criminali informatici.
          </p>
        </div>
        <!-- Adware -->
        <div class="features-box-single u-nohover u-margin-bottom-medium">
          <object class="features-box-single__svg" data="images/svg/007-data.svg" type="image/svg+xml"></object>
          <h3 class="heading-tertiary u-margin-bottom-small">Adware</h3>
          <p class="features-box-single__text u-margin-bottom-medium">
            Si tratta di software che generano la presentazione di messaggi pubblicitari (spesso tramite banner
            pop‐up) o reindirizzano a siti promozionali non richiesti. Spesso sono contenuti all’interno di
            programmi gratuiti, oppure possono essere scaricati e installati da un Trojan. L’Adware può anche
            modificare le impostazioni del browser e reindirizzare la navigazione verso un sito specifico.
          </p>
        </div>

        <br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Attacco Hacker</h3>
        <p class="paragraph">
          Con il termine "hacking" si fa riferimento ad attività mirate alla compromissione di dispositivi digitali quali computer,
          smartphone, tablet e persino intere reti. L'hacking non nasce sempre con intenti criminali, tuttavia, oggi si definiscono spesso l'hacking
          e gli hacker come attività e soggetti che operano nell'illegalità, criminali informatici che agiscono per ottenere un guadagno finanziario,
          per protesta, per raccogliere informazioni (spionaggio) o per il semplice "divertimento" dell'impresa.
          Nell'immaginario collettivo, gli "hacker" sono giovani menti geniali autodidatte
          o programmatori disonesti dotati delle competenze per manipolare un hardware o software informatico per usi non previsti dagli sviluppatori.
          Si tratta, però, di un'idea limitata, che non prende in considerazione le innumerevoli ragioni per cui si può fare ricorso all'hacking.
          (Per un approfondimento sugli hacker, leggi "Under the hoodie: why money, power, and ego drive hackers to cybercrime" di Wendy Zamora.)
          La natura dell'hacking è tecnica (ad esempio, la creazione di malvertising che trasmette il malware in un attacco drive-by
          senza richiedere l'interazione dell'utente). Gli hacker, però, possono anche ricorrere alla psicologia
          per ingannare l'utente e convincerlo a fare clic su un allegato dannoso o a fornire dati personali.
          Queste strategie rientrano nell'"ingegneria sociale".
        </p>
      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->




<br><br>








      <!-- ◄█ COME PROTEGGERSI █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <section class="section-content" id="section-comeproteggersi">

        <!-- titolo sezione -->
        <div class="u-center-text"><h2 class="heading-secondary">COME PROTEGGERSI</h2></div>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Protezione generale</h3>
        <p class="paragraph u-margin-bottom-none">Per proteggere il computer dalleminaccie informatiche, puoi seguire questi semplici consigli:</p>
        <table class="rwd-table u-margin-top-small u-margin-bottom-medium">
          <tbody>
            <!-- intestazione -->
            <tr>
              <th><strong>Nome</strong></th>
              <th><strong>Descrizione</strong></th>
              <th><strong>Link</strong></th>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-shield-alt u-margin-right-little"></i>
                <strong><span class="u-margin-right-small">Antivirus</span></strong>
              </td>
              <td data-th="Descrizione">
                <p>
                  Proteggi il computer installando un software di Internet security.<br>
                  Può andare bene qualsiasi antivirus (a pagamento o gratuito). <br>
                  Solo gli antivirus sono in grado di indentificare e rimuovere la maggior parte delleminaccie.<br>
                  È scontato dire che antivirus a pagamento offrono protezione maggiore.
                </p>
              </td>
              <td data-th="Link">Elenco dei migliori antivirus <a href="https://www.teamworld.it/tecnologia/migliori-antivirus-per-pc/" class="btn-link">qui.</a></td>

            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome">
                <i class="fas fa-download u-margin-right-little"></i>
                <strong><span class="u-margin-right-small">Aggiornamenti</span></strong>
              </td>
              <td data-th="Descrizione">
                <p>
                  Installa gli aggiornamenti più recenti per il tuo sistema operativo e per le applicazioni.<br>
                  Mantenere il PC e i relativi programmi sempre aggiornati aumenta la sicurezza del sistema.
                </p>
              </td>
              <td data-th="Link">Le guide per gli agggiornamenti del tuo OS le trovi <a href="https://www.driversupport.com/knowledge-article/updating-your-operating-system-and-software-the-ultimate-guide/" class="btn-link">qui.</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-mail-bulk u-margin-right-little"></i><strong><span class="u-margin-right-small">Allegati posta</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Non aprire allegati di posta o cliccare link di mittenti sconosciuti. <br>
                  Facendò ciò si incombe facilmente in virus o tentativi di furto di informazioni.
                </p>
              </td>
              <td data-th="Link">Cosa devo evitare di aprire? scoprilo <a href="https://www.itconsulenza.com/evitare-i-virus-sul-pc-quali-mail-e-allegati-non-bisogna-mai-aprire/" class="btn-link">qui.</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-clipboard-check u-margin-right-little"></i><strong><span class="u-margin-right-small">Software ufficiali</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Scarica i software solo dai siti officiali, evitando di installare spazzatura. <br>
                  Preferisci sempre i siti originali dei software invece di siti scam.<br>
                  Questi siti inseriscono pubblicità e spazzatura nell'eseguibile.
                </p>
              </td>
              <td data-th="Link">Evita di installare cose inutili leggendo <a href="https://tecnonews.org/evitare-di-installare-software-spazzatura/" class="btn-link">questa</a> guida</td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-search-dollar u-margin-right-little"></i><strong><span class="u-margin-right-small">Scansioni di file</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Esegui scansioni antivirus di tutti i file .exe che scarichi dal web. <br>
                  Nei file con estensione .exe si possono nascondere virus e malware molto pericolosi.
                </p>
              </td>
              <td data-th="Link">Puoi scannerizzare il file anche sul sito di <a href="https://www.virustotal.com/gui/home/upload" class="btn-link">virustotal</a></td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-search u-margin-right-little"></i><strong><span class="u-margin-right-small">Scansioni del computer</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Esegui scansioni antivirus complete del computer per scoprire possibiliminaccie. <br>
                  Eseguire scansione complete/rapide periodicamente aumenta la sicurezza del pc. <br>
                  In caso di presenza di una minaccia lascia fare all'antivirus la rimozione.
                </p>
              </td>
              <td data-th="Link">Consulta il manuale del tuo antivirus per eseguire la scansione.</td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-cloud-download-alt u-margin-right-little"></i><strong><span class="u-margin-right-small">Antivirus Update</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Aggiorna periodicamente il tuo antivirus. <br>
                  Mantenere aggiornato l'antivirus vuoldire essere protetti dalleminaccie più recenti.
                </p>
              </td>
              <td data-th="Link">Consulta il manuale del tuo antivirus per eseguire l'aggiornamento.</td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-user-cog u-margin-right-little"></i><strong><span class="u-margin-right-small">Account Utente</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Non usare per l'uso quotidiano l'account amministratore. <br>
                  Crea e usa un accout utente di livello standard. <br>
                </p>
              </td>
              <td data-th="Link">Puoi creare un account utente seguendo <a href="https://support.microsoft.com/it-it/help/4026923/windows-10-create-a-local-user-or-administrator-account" class="btn-link">questa</a> guida.</td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-hdd u-margin-right-little"></i><strong><span class="u-margin-right-small">Backup dei file</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Crea periodicamente backup su memorie esterne diverse. <br>
                  Facendo ciò hai sempre un copia in caso di problemi.
                </p>
              </td>
              <td data-th="Link">Scopri tutto sul backup <a href="https://www.aranzulla.it/che-cose-il-backup-1024295.html" class="btn-link">qui</a>.</td>
            </tr>
          </tbody>
        </table>

        <br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Protezione da Hacker</h3>
        <p class="paragraph">
          Con il termine “hacker” si indica chi entra in un computer altrui per installare malware, rubare dati
          confidenziali o usare il computer compromesso per distribuire spam.
          Ci si può difendere da questi rischi usando un firewall, vale a dire un programma che rende il PC
          invisibile agli hacker e lo protegge rilevando potenziali intrusioni. Spesso il firewall è integrato nei
          software anti‐virus. E’ necessario quindi seguire tutti i consigli riportati nella tabella qui sopra.
        </p>

        <br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Protezione attacco di Phishing</h3>
        <p class="paragraph u-margin-bottom-none">
          Un attacco di phishing è una forma di cybercrime. Il criminale informatico crea, ad esempio, un sito
          quasi identico a quello di un'istituzione finanziaria,  per ingannare l'utente e fare in modo che questi
          inserisca le proprie credenziali – codice utente, password, PIN etc. – in un modulo presente sul sito
          fasullo; in tal modo il criminale può appropriarsi delle credenziali dell’utente, accedere al suo
          conto corrente e sottrargli delle somme di denaro.
          Tra le numerose tecniche per attirare gli utenti su questi siti fasulli la più comune è senz’altro l'invio
          di email il cui mittente è apparentemente la stessa istituzione finanziaria della quale è stato
          “clonato” il sito. Queste email contengono il logo della banca in questione, presentano un buon
          layout e hanno un oggetto verosimile come comunicazione di una banca.  All’interno, generalmente
          con un pretesto qualunque ma credibile, si chiede a tutti i clienti di confermare i propri dati.
          Quando l'ignaro utente clicca sul link contenuto nella email, viene indirizzato ad un sito web fasullo,
          attraverso il quale molto probabilmente divulgherà la propria identità digitale ai cybercriminali.
          Ecco le semplici regole per difendersi dal phishing:
        </p>
        <table class="rwd-table u-margin-top-small u-margin-bottom-medium">
          <tbody>
            <!-- intestazione -->
            <tr>
              <th><strong>Nome</strong></th>
              <th><strong>Descrizione</strong></th>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-university u-margin-right-little"></i><strong><span class="u-margin-right-small">Dati bancari</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  E’ impossibile che una Banca chieda di fornire informazioni personali via email. <br>
                  Fornisci tali dati esclusivamente tramite siti web sicuri. <br>
                </p>
              </td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-file-invoice u-margin-right-little"></i><strong><span class="u-margin-right-small">Dati personali</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Non compilare moduli presenti nelle email dove si chiede di inserire informazioni personali. <br>
                  Controllare che la URL inizi con "https://", piuttosto che "http://". <br>
                  Cercare il simbolo del lucchetto nell'angolo in basso a destra del browser. <br>
                  Se presente cliccarlo due volte per verificare la validità del certificato digitale.  <br>
                  Password e dati bancari vanno i
                </p>
              </td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-satellite-dish u-margin-right-little"></i><strong><span class="u-margin-right-small">Segnala problemi</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Segnalare immediatamente alla Banca qualsiasi azione o situazione che sembri sospetta. <br>
                  Rivolgiti solo al supporto dei siti ufficiali. Non cercare aiuto altrove.
                </p>
              </td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-link u-margin-right-little"></i><strong><span class="u-margin-right-small">Usa link sicuri</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Non usare link contenuti nelle mail per caricare una pagina web, ma digita la URL nel browser. <br>
                  Fidarsi solo dei primi link nei motori di ricerca.
                </p>
              </td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-ban u-margin-right-little"></i><strong><span class="u-margin-right-small">Blocco phishing</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Verificare che l'antivirus blocchi i siti di phishing. Cerca nelle impostazioni.
                </p>
              </td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="far fa-credit-card u-margin-right-little"></i><strong><span class="u-margin-right-small">Movimenti bancari</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Controllare regolarmente i movimenti bancari (carte di debito e credito incluse). <br>
                  Assicurarsi che le transazioni eseguite siano legittime.
                </p>
              </td>
            </tr>
            <!-- riga -->
            <tr>
              <td data-th="Nome"><i class="fas fa-download u-margin-right-little"></i><strong><span class="u-margin-right-small">Aggiornamenti</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Assicurarsi di usare l'ultima versione del browser. <br>
                  Assicurarsi che gli aggiornamenti dell'antivirus siamo stati eseguiti. <br>
                  Assicurarsi di avere l'ultima versione del sistema operativo in uso.
                </p>
              </td>
            </tr>
          </tbody>
        </table>

        <br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">Come si fa a capire se un PC è infetto?</h3>
        <p class="paragraph u-margin-bottom-none">
          Non è immediato capire se un computer è stato compromesso. Per questo è fondamentale
          installare un software di protezione completo, installare gli aggiornamenti di sicurezza del sistema
          operativo e delle applicazioni, ed eseguire regolarmente delle copie di backup dei dati.
          Non è facile fornire una lista di sintomi caratteristici di un computer compromesso perché  gli stessi
          sintomi posso essere provocati anche da problemi di hardware e/o software. Comunque, ecco
          alcuni esempi:
        </p>
        <div class="u-margin-left-small u-margin-bottom-medium">
          <ul class="lu-paragraph">
            <li class="li-paragraph">Il computer si comporta in maniera strana e inusuale.</li>
            <li class="li-paragraph">Compaiono immagini o messaggi inaspettati.</li>
            <li class="li-paragraph">Emette dei suoni strani, a caso.</li>
            <li class="li-paragraph">I programmi si aprono da soli.</li>
            <li class="li-paragraph">Il firewall comunica che un'applicazione ha cercato di connettersi a Internet.</li>
            <li class="li-paragraph">Gli amici segnalano di aver ricevuto dei messaggi email dal tuo indirizzo mail, ma non li hai né scritti né inviati.</li>
            <li class="li-paragraph">Il computer si blocca spesso, o i programmi impiegano molto tempo ad aprirsi.</li>
            <li class="li-paragraph">Ricevi molti messaggi di "errore di sistema".</li>
            <li class="li-paragraph">Il sistema operativo non si carica correttamente all'avvio del computer.</li>
            <li class="li-paragraph">Alcuni file o cartelle sono stati modificati.</li>
            <li class="li-paragraph">Viene segnalato un accesso all'hard disk quando non ti risulta che ci sia alcun programma aperto.</li>
            <li class="li-paragraph">Il browser si comporta in maniera imprevedibile, ad esempio non riesci a chiudere o aprire una finestra.</li>
          </ul>
        </div>

        <br><br>

        <!-- titolo sub-sezione -->
        <h3 class="heading-tertiary">È il momento del panico?</h3>
        <p class="paragraph u-margin-bottom-none">
          Se riscontri qualcuno dei sintomi sopra descritti, non farti prendere dal panico. Potresti
          semplicemente avere un problema dell'hardware o a livello di software, e non necessariamente si
          tratta di un virus, un worm o un Trojan.
          Ecco, in ogni caso, cosa fare:
        </p>
        <table class="rwd-table u-margin-top-small u-margin-bottom-medium">
          <tbody>

            <tr>
              <th><strong>Passaggio</strong></th>
              <th><strong>Titolo</strong></th>
              <th><strong>Descrizione</strong></th>
              <th><strong>Guida</strong></th>
            </tr>

            <tr>
              <td data-th="Passaggio"><span>#1</span><i class="fas fa-ethernet u-margin-left-small"></i></td>
              <td data-th="Titolo" ><strong ><span id="srcgog_1">Disconnessione Internet</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Sconnetti il computer da Internet. Stacca il cavo di rete o effettua la disconessione manuale.
                </p>
              </td>
              <td data-th="Descrizione"><a href="https://www.google.com/search?q=Disconnettersi+da+internet" target="_blank" class="btn-link">Cerca su Google...</a></td>
            </tr>

            <tr>
              <td data-th="Passaggio"><span>#2</span><i class="fas fa-spinner u-margin-left-small"></i></td>
              <td data-th="Titolo"><strong><span>Avvio sicuro del sistema</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Se il sistema operativo non carica, avvia il computer in Modalità di Sicurezza
                  (quando si accende il computer, premi per qualche secondo il tasto F8,
                  e poi seleziona la Modalità di Sicurezza dal menu che apparirà),
                  oppure esegui l'avvio da un CD di soccorso.
                </p>
              </td>
              <td data-th="Descrizione"><a href="https://www.google.com/search?q=Avvio+sicuro+del+sistema" target="_blank" class="btn-link">Cerca su Google...</a></td>
            </tr>

            <tr>
              <td data-th="Passaggio"><span>#3</span><i class="fas fa-deaf u-margin-left-small"></i></td>
              <td data-th="Titolo"><strong><span>Firme antivirus aggiornate</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Assicurati che le firme antivirus siano aggiornate. Se possibile,
                  non scaricare gli aggiornamenti usando il computer che temi sia infetto,
                  ma un altro (ad esempio quello di un amico): se ci si collega a Internet
                  tramite un  computer infetto, un programma maligno potrebbe inviare informazioni
                  importanti e confidenziali ad un hacker remoto, o propagarsi auto‐inviandosi a quegli
                  indirizzi email che sono archiviati sul computer stesso.
                </p>
              </td>
              <td data-th="Descrizione"><a href="https://www.google.com/search?q=Aggiornare+l%27antivirus" target="_blank" class="btn-link">Cerca su Google...</a></td>
            </tr>

            <tr>
              <td data-th="Passaggio"><span>#4</span><i class="fas fa-question u-margin-left-small"></i></td>
              <td data-th="Titolo"><strong><span>Cerca informazioni sul virus</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Se non riesci a rimuovere il malware, controlla il sito web del tuo antivirus
                  per avere maggiori informazioni o per scaricare eventuali utility dedicate per
                  rimuovere singoli programmi maligni.
                </p>
              </td>
              <td data-th="Descrizione"><a href="https://www.google.com/search?q=Informazioni+sui+virus+informatici" target="_blank" class="btn-link">Cerca su Google...</a></td>
            </tr>

            <tr>
              <td data-th="Passaggio"><span>#5</span><i class="fas fa-network-wired u-margin-left-small"></i></td>
              <td data-th="Titolo"><strong><span>Disconetti la rete locale</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Se il computer è connesso ad una rete locale, disconnettilo da tale rete.
                </p>
              </td>
              <td data-th="Descrizione"><a href="https://www.google.com/search?q=Disconnettersi+da+una+rete+locale" target="_blank" class="btn-link">Cerca su Google...</a></td>
            </tr>

            <tr>
              <td data-th="Passaggio"><span>#6</span><i class="fas fa-search u-margin-left-small"></i></td>
              <td data-th="Titolo"><strong><span>Esegui scansione del computer</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Esegui una scansione antovirus completa di tutto il computer con il tuo software di sicurezza.
                  Nel caso di rilevamento di una possibile minaccia, il tuo software si preoccuperà di rimuoverla o di metterla
                  in quarantena.
                </p>
              </td>
              <td data-th="Descrizione"><a href="https://www.google.com/search?q=Eseguire+una+scansione+del+computer" target="_blank" class="btn-link">Cerca su Google...</a></td>
            </tr>

            <tr>
              <td data-th="Passaggio"><span>#7</span><i class="fas fa-microchip u-margin-left-small"></i></td>
              <td data-th="Titolo"><strong><span>Controlla hardware e software del pc</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Se il software di protezione non trova nulla, è molto probabile che il computer sia sano.
                  Controlla l'hardware e i software installati sul computer (è bene rimuovere i software privi di licenza e qualsiasi file spazzatura)
                  e assicurati di avere installata l'ultima versione del sistema operativo e gli aggiornamenti di sicurezza delle applicazioni.
                </p>
              </td>
              <td data-th="Descrizione"><a href="https://www.google.com/search?q=Controllo+hardware+e+software+del+pc" target="_blank" class="btn-link">Cerca su Google...</a></td>
            </tr>

            <tr>
              <td data-th="Passaggio"><span>#8</span><i class="fas fa-hands-helping u-margin-left-small"></i></td>
              <td data-th="Titolo"><strong><span>Supporto antivirus</span></strong></td>
              <td data-th="Descrizione">
                <p>
                  Se necessario, contatta l'assistenza tecnica del produttore del tuo antivirus per ulteriori indicazioni.
                  Potrai anche chiedere di sottoporre ad analisi un file campione.
                </p>
              </td>
              <td data-th="Descrizione"><a href="https://www.google.com/search?q=Supporto+antivirus" target="_blank" class="btn-link">Cerca su Google...</a></td>
            </tr>

          </tbody>
        </table>
      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->






      <br><br>







      <!-- ◄█ CONCLUSIONE █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <section class="section-content" id="section-end">
        <div class="u-center-text"><h2 class="heading-secondary">CONCLUSIONE</h2></div>
        <p class="paragraph">
          Il nostro viaggio nella sicurezza informatica termina qui. Abbiamo approfondito (seppur in maniera del tutto superficiale)
          quasi tutti gli aspetti della sicurezza informatica. Ricordo che l'obiettivo di questo sito è di farvi avere una panoramica dell'argomento
          e un approfondimento specifico sul tema. In ogni caso se i nostri lettori hanno qualsiasi tipo di domanda/problema/dubbio/curiosità
          sull'argomento ci ricordiamo che ci potete contattare in qualsiasi momento.
          Il nostro staff risponderà nel più breve tempo possibile alle vostre richieste/domande.
          E con questo è tutto gente! Vi rimandiamo ora alle altre sezioni del sito dove potete fare dei controlli gratuiti sulla vostra sicurezza
          e dove potete avere una panoramica sui recenti attacchi/minaccie informatiche in tempo reale.
        </p>

        <br>
      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->





    </main>







    <!-- ◄█ FOOTER █► - - - - - - - - - - - - - - - - - - - - -->

    <?php require_once "php/footer.php" ?>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->

  </body>

</html>
