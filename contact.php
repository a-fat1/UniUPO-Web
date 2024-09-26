<!DOCTYPE html>
<html lang="it">
<head>
  <!-- Informazioni <meta> sito -->
  <?php require_once "php/metaBasic.php" ?>
  <meta name="robots" content="noindex, nofollow">

  <!-- Favicon per tutti i dispositivi -->
  <?php include_once "php/favicon.php";  ?>

  <!-- Collegamento font-esterni -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

  <!-- Collegamento css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/all.css">

  <!-- Titolo della pagina -->
  <title>Iron Security | CONTATTI</title>

</head>
<body>
  <!-- ◄█ NAVBAR █► -@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@ -->

  <?php require_once "php/navbar.php" ?>

  <!-- -@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@-@ -->

  <?php
  // @ INCLUSIONE LIBRERIA CONSOLE
  include_once "php/writeToConsole.php";
  require_once "php/connessioneDatabase.php";

   ?>


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
        <span class="heading-primary__title">CONTATTI</span>
      </h1>
    </div>

  </header>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->


  <!-- ◄█ CHI SIAMO █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <section id="id_section-compagnia" class="section__compagnia">

    <br><br>

    <!-- Titolo h2 -->
    <div class="u-center-text">
      <h2 class="heading-secondary">CHI SIAMO?</h2>
    </div>

    <!-- Paragrafo -->
    <p class="paragraph">
      Iron security è un azienda nata nel 2019 con l'unico scopo di informare e istruire i propri lettori
      con corsi didattici e specifi sulla sicurezza informatica. Al giorno d'oggi il discorso sicurezza
      è un argomento molto caldo, non solo negli ambiti più comuni come quello della strada o del lavoro
      ma anche in un ambiente del tutto diverso e altrettanto pericoloso come quello dei computer.
      Con l'avvento della tecnologia si sta cercando di lasciare tutto ciò che veniva fatto "su carta" e si
      sta sostituendo il tutto con dispositivi tecnologici/informatici; come ad esempio i famosissimi PC.

      <br><br>

      Iron security si occupa proprio di questo. Esso cerca di analizzare e comprendere i rischi, i problemi e le difficoltà
      che possono incombere nella sicurezza di una persona o di un'azienda che utilizza un prodotto informatico.
    </p>

    <br><br><br><br><br>

  </section>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->



  <!-- ◄█ VIENI A TROVARCI █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <section id="id_section-trovaci" class="section__trovaci">

    <!-- Titolo h2 -->
    <div class="u-center-text">
      <h2 class="heading-secondary">Vieni a trovarci</h2>
    </div>

    <!-- Paragrafo -->
    <p class="paragraph">
      Ci puoi trovare a Vercelli in Piazza S. Eusebio 5, nello storico Edificio San Giuseppe,
      a circa 500 metri dalla stazione ferroviaria.
    </p>

    <iframe style="height: 50rem; width: 100%; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2804.9039854182374!2d8.418597016018907!3d45.33056127909959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47864c622d405c8b%3A0x29ed15cd84004aff!2sPiazza+Sant&#39;Eusebio%2C+13100+Vercelli+VC!5e0!3m2!1sit!2sit!4v1563554848830!5m2!1sit!2sit" width="600" height="450" allowfullscreen></iframe>

    <p class="paragraph"></p>

    <br><br><br><br><br>
  </section>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->



  <!-- ◄█ AUTORI DEL SITO █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <section id="id_section-contatti" class="section-autori">

    <!-- Titolo h2 -->
    <div class="u-center-text">
      <h2 class="heading-secondary">Autori del sito</h2>
    </div>

    <!-- Sezione autori flex -->
    <div class="flex-grid u-margin-top-medium">

      <!-- Gabriele Lizzos -->
      <div class="col">
        <div class="features-box-authors">

          <div class="features-box-authors__imagebox">
            <img class="features-box-authors__imagebox__img" src="images/authors/gab.png" alt="Gabriele Lizzos">
          </div>

          <div class="u-center-text u-margin-top-medium">
            <h3 class="heading-tertiary">Gabriele Lizzos</h3>
          </div>

          <div class="u-center-text">
            <p class="paragraph u-display-inlineblock">Studente</p>
          </div>

          <div class="boxCont__group u-margin-top-small u-center-text">
            <a href="mailto:lizzosgabriele@gmail.com?Subject=IronSecurity" target="_top" class="btn btn-violaAzz u-center-text u-display-inlineblock">Contatta</a>
          </div>

        </div>
      </div>

      <!-- Alessandro Fatone -->
      <div class="col">
        <div class="features-box-authors">

          <div class="features-box-authors__imagebox">
            <img class="features-box-authors__imagebox__img" src="images/authors/ale.png" alt="Alessandro Fatone">
          </div>

          <div class="u-center-text u-margin-top-medium">
            <h3 class="heading-tertiary">Alessandro Fatone</h3>
          </div>
          <div class="u-center-text">
            <p class="paragraph u-display-inlineblock">Studente</p>
          </div>



          <div class="boxCont__group u-margin-top-small u-center-text">
            <a href="mailto:fatone_alessandro@outlook.com?Subject=IronSecurity" target="_top" class="btn btn-violaAzz u-center-text u-display-inlineblock">Contatta</a>
          </div>

        </div>
      </div>
    </div>

    <br><br><br><br><br>
  </section>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->



  <!-- ◄█ FONTI DEL SITO █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <section id="id_section-fonti" class="section-fonti ">

    <!-- Titolo h2 -->
    <div class="u-center-text">
      <h2 class="heading-secondary">Fonti</h2>
    </div>

    <table class="rwd-table u-margin-bottom-medium u-margin-top-small">
      <tbody>

        <tr>
          <th><strong>Nome</strong></th>
          <th><strong>Tipologia</strong></th>
          <th><strong>Link</strong></th>
          <th><strong>Pulsante</strong></th>
        </tr>

        <?php
          //query da prelevare dal database
          $sql = "SELECT * FROM fontisito";
          $result = $connessione->query($sql);

          //output query con righe tabelle
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $tempLink = $row["Link"];
              $classLink = "btn-link";
              $targetLink = "_blank";
              echo "<tr>";
                //colonna 1
                echo "<td data-th=" . "Nome" . ">";
                  echo "<strong>";
                  echo $row["Nome"];
                  echo "</strong>";
                echo "</td>";
                //colonna 2
                echo "<td data-th=" . "Tipologia" . ">";
                  echo $row["Tipo"];
                echo "</td>";
                //colonna 3
                echo "<td data-th=" . "Link" . ">";
                  echo $row["Link"];
                echo "</td>";
                //colonna 4
                echo "<td data-th=" . "Pulsante" . ">";
                  echo "<a target=" . $targetLink ." class=" . $classLink . " href=" . "$tempLink" . ">Visita sito</a>";
                echo "</td>";

              echo "</tr>";

            }
          } else {
            debug_to_console("[ERRORE]: nessun risultato dal database. Controllare le tabelle.") ;
          }

          //chiudere connessione database
          $connessione->close();
        ?>
      </tbody>
    </table>
    <br><br><br>


  </section>

  <!-- ◄█ FOOTER █► - - - - - - - - - - - - - - - - - - - - -->

  <?php require_once "php/footer.php" ?>

  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->

</body>
</html>
