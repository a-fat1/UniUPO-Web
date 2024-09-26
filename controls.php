<!DOCTYPE html>
<html lang="it">

  <head>

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

    <!-- Script della pagina -->
    <script src="js/sha512/sha512.min.js"></script>

    <!-- Favicon per tutti i dispositivi -->
    <?php include_once "php/favicon.php";  ?>

    <!-- Titolo della pagina -->
    <title>Iron Security | CONTROLLI</title>

  </head>

  <body>

    <!-- ◄█ NAVBAR █► -@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@ -->

    <?php require_once "php/navbar.php" ?>

    <!-- -@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@ -->



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
          <span class="heading-primary__title">Controlli</span>
        </h1>
      </div>

    </header>

    <main>


      <!-- ◄█ INTRO █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

      <section class="section-intro">

        <br>

        <p class="paragraph u-margin-bottom-none">
          Benvenuti nella sezione dei controlli. In questa pagina vi mettiamo a disposizione alcune utility
          per generare in sicurezza le vostre password, per testarne la loro robustezza e infine vi offriamo
          una piccolissima utility per criptare le password attraverso l'utilizzo dell'algoritmo crittografico SHA-2.
          Per qualsiasi problema, domanda o richiesta contattaci.
        </p>

        <br>

      </section>

      <!-- ◄█ PASSWORD █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <section class="section-password">

        <div class="section-password__video">
          <video class="bg-video-controls" autoplay loop muted>
            <source src="../video/Words.mp4" type="video/mp4">
            <source src="../video/Words.webm" type="video/webm">
            Your browser is not supported!
          </video>
        </div>

        <div class="section-password__radiant"></div>

        <br>

        <!-- GENERATORE  -->
        <div id="controls_generatore" class="boxCont u-margin-bottom-medium">

          <!-- Testo heading-secondario -->
          <div class="u-center-text u-margin-bottom-small">
            <h2 class="heading-secondary">Generatore password</h2>
          </div>

          <!-- Paragrafo interno -->
          <p class="paragraph">Ecco un piccolo generatore di password nel caso non sappiate che password sicura usare nei vostri account.</p>

          <div class="boxCont__group u-margin-bottom-small ">
            <input id="passowordGenerated" class="boxCont__input u-width-meta" type="text" readonly>
          </div>

          <div class="boxCont__group u-margin-bottom-small">
            <div class="boxCont__rangecontainer">
              <input id="passwordLunghezza_range" class="boxCont__range" min="1" max="50" value="25" type="range">
            </div>
          </div>

          <div class="boxCont__group u-margin-bottom-small u-center-text">
            <p class="paragraph u-margin-bottom-none u-display-inlineblock">Lunghezza: <span id="passwordLunghezza_span" class="u-font-weight-bold">25</span> caratteri</p>
          </div>

          <div class="boxCont__group u-margin-bottom-small u-center-text">
            <button class="btn btn-violaAzz u-center-text u-display-inlineblock" onclick="generate()">Genera</button>
          </div>

          <div class="boxCont__group u-margin-bottom-small u-center-text">
            <button class="btn btn-white u-center-text u-display-inlineblock" onclick="copyPassword()">Copia</button>
          </div>

          <script src="js/passGenerator.js"></script>

        </div>

        <!-- CONTROLLO SICUREZZA -->

        <!-- box bianco form  -->
        <div id="controls_securityPass" class="boxCont u-margin-bottom-medium">

          <!-- Testo heading-secondario -->
          <div class="u-center-text u-margin-bottom-small">
            <h2 class="heading-secondary">Controllo sicurezza password</h2>
          </div>

          <!-- paragrafo interno -->
          <p class="paragraph">
            Qua sotto una volta inserita la tua password ti verrà mostrato il grado di sicurezza
            relativa ad essa. Ovviamente password più lunghe e laboriose hanno un livello di sicurezza più elevato.
          </p>

          <div class="boxCont__group u-margin-bottom-small">
            <input id="passowordToCheck" class="boxCont__input" type="password" placeholder="Inserisci la password" required>
          </div>

          <div class="boxCont__group u-margin-bottom-small">
            <div class="boxCont__progressBar">
              <div class="boxCont__progressBar__percent"><p id="barraValore" class="paragraph u-margin-bottom-none">0%</p></div>
              <div id="barra" class="boxCont__progressBar__value"></div>
            </div>
          </div>

          <br>

          <div class="boxCont__group u-margin-bottom-small">
            <div class="boxCont__loader"></div>
          </div>

          <script src="js/passChecker.js"></script>

        </div>

        <!-- CRIPTATORE -->
        <div id="controls_criptatore" class="boxCont">

          <!-- Testo heading-secondario -->
          <div class="u-center-text u-margin-bottom-small">
            <h2 class="heading-secondary">Criptazione password</h2>
          </div>

          <!-- paragrafo interno -->
          <p class="paragraph">
            Una volta inserita la vostra passoword verrà criptata usando la tecnologia SHA-2 a 512 bit. Potete utilizzare
            questa utility come un secondo generatore di passoword.
          </p>

          <div class="boxCont__group u-margin-bottom-small">
            <input id="passowordToCrypt" class="boxCont__input" type="password" placeholder="Inserisci la password" required>
          </div>

          <div class="boxCont__group u-margin-bottom-small u-center-text">
            <p class="paragraph u-margin-bottom-none u-display-inlineblock"><i class="fas fa-arrow-down"></i></p>
          </div>

          <div class="boxCont__group u-margin-bottom-small">
            <input id="passowordCrypted" class="boxCont__input" type="text">
          </div>

          <br>

          <div class="boxCont__group u-margin-bottom-small u-center-text">
            <button class="btn btn-violaAzz u-center-text u-display-inlineblock" onclick="crypt()">Cripta</button>
          </div>

          <div class="boxCont__group u-margin-bottom-small u-center-text">
            <button class="btn btn-white u-center-text u-display-inlineblock" onclick="copyCryptedPassword()">Copia</button>
          </div>

          <script src="js/passCryptor.js"></script>

        </div>

      </section>

    </main>

    <!-- ◄█ FOOTER █► - - - - - - - - - - - - - - - - - - - - -->

    <?php require_once "php/footer.php" ?>


    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->

  </body>

</html>
