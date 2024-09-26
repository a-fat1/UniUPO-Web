<!DOCTYPE html>
<html lang="it">

  <head>

    <!-- Titolo della pagina -->
    <title>Iron Security | HOME</title>

    <!-- Informazioni <meta> sito -->
    <?php require_once "php/metaBasic.php" ?>
    <meta name="robots" content="index, follow">

    <!-- Collegamento font-esterni -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

    <!-- Collegamento css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">

    <!-- Script pagina -->
    <script src="js/formValidation.js"></script>
    <script src="js/jquery/jquery-3.4.1.min.js"></script>

    <!-- Favicon per tutti i dispositivi -->
    <?php include_once "php/favicon.php";  ?>

  </head>

  <body>

    <!-- ◄█ NAVBAR █► -@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@ -->

    <?php require_once "php/navbar.php" ?>

    <!-- -@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@ -->








    <!-- ◄█ HEADER █► -@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@ -->
    <header class="header__full" id="header">

      <!-- video in background -->
      <div class="header__full__video">
        <video class="bg-video-header" autoplay loop muted>
          <source src="../video/earth2.mp4" type="video/mp4">
          <source src="../video/earth2.webm" type="video/webm">
          Your browser is not supported!
        </video>
      </div>

      <!-- radiant box -->
      <div class="header__full__radiant"></div>

      <!-- logo del sito -->
      <div class="header__full__logo">
        <img src="images/logo__header__white.png" alt="Logo del sito (Header)" class="logo__header">
      </div>

      <!-- area testo H1 title/subtitle -->
      <div class="header__full__textarea">
        <h1 class="heading-primary">
          <span class="heading-primary__title animated pulse infinite slow">Iron Security</span>
          <span class="heading-primary__subtitle animated bounceIn">La sicurezza informatica in un click!</span>
        </h1>
      </div>

      <!-- area scolldown -->
      <div class="header__full__scorlldown">
        <a href="#id_sezione_webintro" class="header__full__scorlldown__a" ><span class="header__full__scorlldown__span"></span>Scorri giù</a>
      </div>

    </header>
    <!-- -@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@ -->





    <main>







      <!-- ◄█ SEZIONE #1: Introduzione Sito █► - - - - - - - - - - - - - - - - - - - - -->
      <section id="id_sezione_webintro" class="section-webIntro">

        <!-- Testo heading-secondario -->
        <div class="u-center-text u-margin-bottom-medium">
          <h2 class="heading-secondary">Benvenuto</h2>
        </div>

        <!-- paragrafo introduttivo -->
        <p class="paragraph">
          Benvenuto su Iron Security, il portale italiano sullo sicurezza informatica.
          Su questo sito potrai trovare tantissime informazioni, news e approfondimenti sulla sicurezza informatica.
          La pagina è divisa in 3 sezioni: la sezione <strong>"Sicurezza e dati"</strong>, la sezione <strong>"Controlli e utility"</strong>,
          e per ultima la sezione <strong>"Statistiche live"</strong>. Scorrendo questa pagina potrai visionare le introduzioni
          a queste sezioni, dove verranno illustrati dettagliatamente i contenuti delle relative pagine. <br><br>
          Infine, se desideri avere informazioni su di noi,
          puoi trovare tutte le informazioni nella nostra pagina <a href="contact.php" class="btn-link-paragraph">contatti</a>.
          <br>Vi auguriamo una buona permanenza sul nostro sito.
          <br><br>
        </p>

        <!-- logo -->
        <div class="boxPlot__svgbox animated pulse infinite slow">
          <object class="boxPlot__svgbox-element " data="images/svg/logo.svg" type="image/svg+xml"></object>
        </div>

      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->



















      <!-- ◄█ SEZIONE #2: Area sicurezza █► - - - - - - - - - - - - - - - - - - - - -->
      <section class="section-infoIntro">

        <!-- Testo heading-secondario -->
        <div class="u-center-text u-margin-bottom-medium">
          <h2 class="heading-secondary">Area Sicurezza</h2>
        </div>

        <!-- video in background -->
        <div class="section-infoIntro__video">
          <video class="bg-video-Info" autoplay loop muted>
            <source src="../video/matrix.mp4" type="video/mp4">
            <source src="../video/matrix.webm" type="video/webm">
            Your browser is not supported!
          </video>
        </div>

        <!-- Paragrafo introduttivo -->
        <p class="paragraph u-margin-bottom-big">
          Il tema della sicurezza è sempre stato un tema molto discusso,
          sia nel campo dell'informatica che in altri campi più "reali", come per esempio quello dell'automobilistica o quello sul lavoro.
          In questa sezione del nostro sito illustreremo in linea generale le diverse accezioni della sicurezza
          focalizzandoci sull'obiettivo principale del sito: la sicurezza nel campo informatico/tecnologico.
          Verrà prima fornita un'introduzione sugli aspetti generali della sicurezza
          per poi focalizzarci in dettaglio sulla sicurezza nel mondo di internet e dei personal computer.
          Infine verranno illustrate varie metodologie su come proteggere se stessi e la propria azienda
          in questo mondo digitale sempre più vasto e sempre più pericoloso.
        </p>

        <!-- Indici Pagina sicurezza -->

        <div class="flex-grid-thirds u-margin-bottom-huge">

          <!-- colonna #1 -->
          <div class="col">
            <div class="features-box">
              <div class="boxPlot">

                <!-- cerchiolino -->
                <div class="boxPlot__circle animated pulse infinite fast">
                  <div class="boxPlot__circle__number">1</div>
                </div>

                <!-- titolo -->
                <div class="boxPlot__title">
                  <h3 class="heading-tertiary u-center-text">Sicurezza dei sistemi</h3>
                </div>

                <!-- separator -->
                <div class="features-box__separator"></div>
                <br>

                <!-- paragrafo -->
                <div class="boxPlot__paragraph">
                  <p class="paragraph">
                    Discuteremo di varie tipologie di sicurezza con particolari approfondimenti su quella informatico/tecnologica. <br>
                    Parleremo anche di sicurezza nelle aziende, sicurezza nei programmi, sicurezze nell'ambito delle telecomunicazioni
                    e sicurezza nelle reti.
                  </p>
                </div>

              </div>
            </div>
          </div>

          <!-- colonna #2 -->
          <div class="col">
            <div class="features-box">
              <div class="boxPlot">

                <!-- cerchiolino -->
                <div class="boxPlot__circle animated pulse infinite fast">
                  <div class="boxPlot__circle__number">2</div>
                </div>

                <!-- titolo -->
                <div class="boxPlot__title">
                  <h3 class="heading-tertiary u-center-text">Attacchi e minacce</h3>
                </div>

                <!-- separator -->
                <div class="features-box__separator"></div>

                <br>

                <!-- paragrafo -->
                <div class="boxPlot__paragraph">
                  <p class="paragraph">
                    Parleremo di attacchi malevoli e introdurremo tutte le diverse tipologie di minacce informatiche. Per ogni minaccia
                    spiegheremo brevemente cosa fanno e come ci si può difendere da esse. Infine sarà possibile visualizzare il loro
                    grado di pericolosità nel mondo informatico.
                  </p>
                </div>

              </div>
            </div>
          </div>

          <!-- colonna #3 -->
          <div class="col">
            <div class="features-box">
              <div class="boxPlot">

                <!-- cerchiolino -->
                <div class="boxPlot__circle animated pulse infinite fast">
                  <div class="boxPlot__circle__number">3</div>
                </div>

                <!-- titolo -->
                <div class="boxPlot__title">
                  <h3 class="heading-tertiary u-center-text ">Protezione</h3>
                </div>


                <!-- separator -->
                <div class="features-box__separator"></div>

                <br>

                <!-- paragrafo -->
                <div class="boxPlot__paragraph">
                  <p class="paragraph">
                    Dopo aver illustrato tutte le possibili minacce, in questa sezione ci occuperemo delle metodologie, dei consigli e
                    delle pratiche per proteggere il vostro pc o la vostra azienda da tali minacce. Ogni operazione sarà accompagnata
                    da link, con una relativa guida su come attuarla.
                  </p>
                </div>

              </div>
            </div>
          </div>

        </div>

        <!-- pulsante link pagina completa -->
        <div class="section-infoIntro__button u-center-text">
          <a href="security.php" class="btn btn-violaAzz u-center-text">Scopri di più...</a>
        </div>

      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->











      <!-- ◄█ SEZIONE #3: Area controlli █► - - - - - - - - - - - - - - - - - - - - -->
      <section class="section-contrIntro">

        <!-- Testo heading-secondario -->
        <div class="u-center-text u-margin-bottom-medium">
          <h2 class="heading-secondary">Area Controlli e utility</h2>
        </div>

        <!-- Paragrafo introduttivo -->
        <p class="paragraph u-margin-bottom-big">
          In questa sezione del sito vi mettiamo a disposizione alcune utility di utilità generale. Attualmente sul sito sono disponibili
          all'uso solo 3 utility differenti (ulteriori utility sono in fase di sviluppo e saranno disponibili in futuro).
          Il loro nome e il loro funzionamento è spiegato qua sotto.
        </p>

        <!-- elenco controlli -->
        <div class="flex-grid-thirds">

          <!-- controllo #1 -->
          <div class="col">
            <div class="features-box">

              <i class="features-box__icon fas fa-hammer"></i>
              <h3 class="heading-tertiary u-margin-bottom-small">Generatore password</h3>

              <p class="features-box__text u-margin-bottom-medium">
                Una volta scelta la lunghezza verrà generata una password super sicura da usare
                per i tuoi account.
              </p>

              <a href="controls.php#controls_generatore" class="btn-link">Scopri di più...</a>
            </div>
          </div>

          <!-- controllo #2 -->
          <div class="col">
            <div class="features-box">

              <i class="features-box__icon fas fa-key"></i>
              <h3 class="heading-tertiary u-margin-bottom-small">Controllo password</h3>

              <p class="features-box__text u-margin-bottom-medium">
                Una volta digitata una password ti verrà mostrato il livello e il grado di sicurezza associato.
              </p>

              <a href="controls.php#controls_securityPass" class="btn-link">Scopri di più...</a>
            </div>
          </div>

          <!-- controllo #3 -->
          <div class="col">
            <div class="features-box">

              <i class="features-box__icon fab fa-keycdn"></i>
              <h3 class="heading-tertiary u-margin-bottom-small">Criptatore password</h3>

              <p class="features-box__text u-margin-bottom-medium">
                Una volta digitata la tua password verrà criptata usando la tecnologia SHA-2 a 512 bit.
              </p>

              <a href="controls.php#controls_criptatore" class="btn-link">Scopri di più...</a>
            </div>
          </div>

        </div>

      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->











      <!-- ◄█ SEZIONE #4: Area statistiche █► - - - - - - - - - - - - - - - - - - - - -->
      <section class="section-statIntro">

        <!-- Testo heading-secondario -->
        <div class="u-center-text u-margin-bottom-medium">
          <h2 class="heading-secondary">Area Statistiche</h2>
        </div>

        <!-- video in background -->
        <div class="section-statIntro__video">
          <video class="bg-video-stat" autoplay loop muted>
            <source src="../video/Words.mp4" type="video/mp4">
            <source src="../video/Words.webm" type="video/webm">
            Your browser is not supported!
          </video>
        </div>

        <!-- box area testo e area grafico -->
        <div class="flex-grid u-margin-bottom-huge">

          <div class="col">
            <p class="paragraph">
              In questa sezione ci dedicheremo di informazioni in tempo reale. Vi illustreremo tramite tabelle e grafici
              l'andamento attuale/recente degli attacchi/minacce, suddivisi per nome, categoria e pericolosità.
            </p>
          </div>

          <div class="col">
            <div class="graph-home">
              <div class="graph-home__wrapper">

                <div class="graph-home__coordinates">
                  <span class="graph-home__span" ></span>
                  <span class="graph-home__span"></span>
                  <span class="graph-home__span"></span>
                  <span class="graph-home__span"></span>
                  <span class="graph-home__span"></span>
                  <span class="graph-home__span"></span>
                </div>

                <svg class="graph-home__svg" width="315px" height="107px" viewBox="0 0 315 107" version="1.1">

                  <defs>
                    <linearGradient x1="0%" y1="100%" x2="100%" y2="100%" id="linearGradient-1">
                      <stop stop-color="#2090F8" offset="0%"></stop>
                      <stop stop-color="#01FCE4" offset="41.7610013%"></stop>
                      <stop stop-color="#0BFF8C" offset="78.6870217%"></stop>
                      <stop stop-color="#51FF00" offset="100%"></stop>
                    </linearGradient>
                  </defs>

                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path class="graph-home__path path" d="M2.10546875,95.75 L40.5546875,68.3476562 L55.2109375,81.1796875 L65.2148437,76.3945312 L96.1835937,86.8320312 L131.023438,19.9414062 L142.15625,23.7226562 L183.605469,2.1953125 L211.007812,22.3320312 L234.320312,71.5664062 L234.667969,83.0039062 L244.019531,83.0039062 L247.105469,88.8320312 L312.695312,104.839844" id="Path-1" stroke="url(#linearGradient-1)" stroke-width="4"></path>
                  </g>

                </svg>

              </div>
            </div>
          </div>

        </div>

        <!-- pulsante link pagina completa -->
        <div class="section-infoIntro__button u-center-text">
          <a href="statistic.php" class="btn btn-violaAzz u-center-text">Scopri di più...</a>
        </div>

      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->











      <!-- ◄█ SEZIONE #5: Area contatti █► - - - - - - - - - - - - - - - - - - - - -->
      <section class="section-contatti">

        <!-- box bianco form  -->
        <div class="boxCont">

          <!-- Testo heading-secondario -->
          <div class="u-center-text u-margin-bottom-small">
            <h2 class="heading-secondary">Contattaci</h2>
          </div>

          <!-- paragrafo interno -->
          <p class="paragraph">
            Compila il seguente form per
            richiedere informazioni o chiarimenti. Il nostro staff
            ti risponderà tramite mail il più presto possibile.
          </p>

          <!-- Form contatti -->
          <form action="form.php" method="post" id="form_contatti" class="boxCont__form" name="form_contatti" onsubmit = "return validate()">

            <!-- nome -->
            <div class="boxCont__group u-margin-bottom-small">
              <input id="form_contatti_name" class="boxCont__input" type="text" placeholder="Nome" name="input_name" >
            </div>

            <!-- email -->
            <div class="boxCont__group u-margin-bottom-small">
              <input class="boxCont__input" type="email" placeholder="Email" name="input_email" >
            </div>

            <!-- messaggio -->
            <div class="boxCont__group u-margin-bottom-small">
              <textarea name="input_message" oninput="updateMsgLenght(this)" placeholder="Messaggio" onfocus="displayMsgCounter()" class="boxCont__textarea" maxlength="500" rows="12" cols="30" style="height: 14rem;"></textarea>
            </div>

            <!-- controllo caratteri -->
            <div id="div_statusCaratteri" class="boxCont__group u-margin-bottom-small u-center-text u-disappear">
              <p class="paragraph u-margin-bottom-none u-display-inlineblock">
                Caratteri rimasti: <span id="statusCaratteri__count" class="u-font-weight-bold">500</span></p>
            </div>

            <!-- submit -->
            <div class="boxCont__group u-margin-top-medium u-center-text">
              <button class="btn btn-violaAzz u-display-inlineblock " type="submit">Procedi &rarr;</button>
            </div>

          </form>

        </div>

      </section>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->










      <!-- ◄█ FOOTER █► - - - - - - - - - - - - - - - - - - - - -->

      <?php require_once "php/footer.php" ?>


      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->

    </main>

  </body>

</html>
