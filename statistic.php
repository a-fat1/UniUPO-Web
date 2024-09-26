<?php
// @ INCLUSIONE LIBRERIA CONSOLE
include_once "php/writeToConsole.php";


 ?>
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


    <!-- Favicon per tutti i dispositivi -->
    <?php include_once "php/favicon.php";  ?>

    <!-- Titolo della pagina -->
    <title>Iron Security | STATISTICHE</title>
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
          <span class="heading-primary__title">Statistiche</span>
        </h1>
      </div>

    </header>
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->

<main>




  <!-- ◄█ SEZIONE #1: Attacchi hacker █► - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

  <section class="section-hacker">

    <!-- Testo heading-secondario -->
    <div class="u-center-text u-margin-bottom-small">
      <h2 class="heading-secondary">Attacchi hacker recenti</h2>
    </div>
    <p class="paragraph">Qua sotto verranno visualizzati 5 dei più
      recenti e dei più rilevanti attacchi hacker registrati online.</p>

    <table class="rwd-table u-margin-bottom-medium">
      <tbody>

        <tr>
          <th><strong>Codice</strong></th>
          <th><strong>Nome attacco</strong></th>
          <th><strong>Sorgente</strong></th>
          <th><strong>Destinazione</strong></th>
          <th><strong>Pericolosità</strong></th>
        </tr>

        <?php
          require "php/connessioneDatabase.php";
          //query da prelevare dal database
          $sql = "SELECT * FROM attacchiHacker";
          $result = $connessione->query($sql);

          //output query con righe tabelle
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

              echo "<tr>";
                //colonna 1
                echo "<td data-th=" . "Codice" . ">";
                  echo "<strong>";
                  echo $row["Codice"];
                  echo "</strong>";
                echo "</td>";
                //colonna 2
                echo "<td data-th=" . "Nome_attacco" . ">";
                  echo $row["Nome"];
                echo "</td>";
                //colonna 3
                echo "<td data-th=" . "Sorgente" . ">";
                  echo $row["Sorgente"];
                echo "</td>";
                //colonna 4
                echo "<td data-th=" . "Destinazione" . ">";
                  echo $row["Destinazione"];
                echo "</td>";
                //colonna 5
                echo "<td data-th=" . "Pericolosità" . ">";
                  echo $row["Pericolo"];
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


  </section>

  <section class="section-hacker">
    <!-- Testo heading-secondario -->
    <div class="u-center-text u-margin-bottom-small">
      <h2 class="heading-secondary">Attacchi hacker in tempo reale</h2>
    </div>
    <p class="paragraph">
      Qua sotto verranno visualizzati tutti gli attachi hacker in tempo reale tramite un'apposita mappa dettagliata.
    </p>
    <iframe style="width: 100%; max-width: 100%; height: 500px;" src="https://threatmap.checkpoint.com/ThreatPortal/livemap.html"></iframe>



  </section>


  <section class="section-hacker">
    <!-- Testo heading-secondario -->
    <div class="u-center-text u-margin-bottom-small">
      <h2 class="heading-secondary">Minacce recenti</h2>
    </div>
    <p class="paragraph">
      Qua sotto verranno visualizzate alcune informazioni inerenti alle più recenti minacce informatiche registrate.
    </p>

    <table class="rwd-table u-margin-bottom-medium">
      <tbody>

        <tr>
          <th><strong>Nome</strong></th>
          <th><strong>Pericolosità</strong></th>
          <th><strong>Popolarità</strong></th>
          <th><strong>Rilevati oggi</strong></th>
          <th><strong>Paese più colpito</strong></th>
        </tr>

        <?php
          require "php/connessioneDatabase.php";
          //query da prelevare dal database
          $sql = "SELECT * FROM minaccieRecenti";
          $result = $connessione->query($sql);

          //output query con righe tabelle
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

              echo "<tr>";
                //colonna 1
                echo "<td data-th=" . "Nome" . ">";
                  echo "<strong>";
                  echo $row["Nome"];
                  echo "</strong>";
                echo "</td>";
                //colonna 2
                echo "<td data-th=" . "Pericolosità" . ">";
                  echo $row["Pericolo"];
                echo "</td>";
                //colonna 3
                echo "<td data-th=" . "Popolarità" . ">";
                  echo $row["Popolare"];
                echo "</td>";
                //colonna 4
                echo "<td data-th=" . "Rilevati_oggi" . ">";
                  echo $row["Rilevato"];
                echo "</td>";
                //colonna 5
                echo "<td data-th=" . "Paese_più_colpito" . ">";
                  echo $row["Paese"];
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



  </section>




</main>
<!-- ◄█ FOOTER █► - - - - - - - - - - - - - - - - - - - - -->

<?php require_once "php/footer.php" ?>


<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - -->



  </body>

</html>
