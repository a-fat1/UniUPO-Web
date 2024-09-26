<!DOCTYPE html>
<html lang="it">

  <head>

    <!-- Titolo della pagina -->
    <title>Iron Security | FORM</title>

    <!-- Informazioni <meta> sito -->
    <?php require_once "php/metaBasic.php" ?>
    <meta name="robots" content="index, follow">

    <!-- Collegamento font-esterni -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!-- Collegamento css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">

    <!-- Favicon per tutti i dispositivi -->
    <?php include_once "php/favicon.php";  ?>


    <?php
      // @ INCLUSIONE LIBRERIA CONSOLE
      include_once "php/writeToConsole.php";
      require_once "php/connessioneDatabase.php";

      // @ VARIABILE GLOBALE ERRORE SCRIPT
      $script_error_status = false;
      $script_error_messagge = "";


      // @ CONTROLLO DATI DEL FORM
      if ($_SERVER["REQUEST_METHOD"] == "POST") { /* controllo metodo post*/
        $form_name = "";    /* svuoto il contenuto del nome */
        $form_email = "";   /* svuoto il contenuto dell'email */
        $form_message = ""; /* svuoto il contenuto del messaggio */

        if(!isset($_POST['input_name'])) { /* controllo nome nullo */
          debug_to_console("[ERRORE]: IL campo form del nome sembra essere vuoto. Setto la variabile errore.");
          $script_error_status = true;
          $script_error_messagge .= "[ERRORE]: IL campo form del nome sembra essere vuoto. Tornare alla home per ricompilare il form. Se il problema persiste contattare lo sviluppatore." . "<br><br>";
        } else {
          debug_to_console("[INFO]: Il campo form del nome risulta settato!");
          $form_name = $_POST["input_name"];
        }

        if(!isset($_POST['input_email'])) { /* controllo email nullo */
          debug_to_console("[ERRORE]: IL campo form email sembra essere vuoto. Setto la variabile errore.");
          $script_error_status = true;
          $script_error_messagge .= "[ERRORE]: IL campo form dell'email sembra essere vuoto. Tornare alla home per ricompilare il form. Se il problema persiste contattare lo sviluppatore." . "<br><br>";
        } else {
          debug_to_console("[INFO]: Il campo form email risulta settata!");
          $form_email = $_POST["input_email"];
        }

        if(!isset($_POST['input_message'])) { /* controllo messaggio nullo */
          debug_to_console("[ERRORE]: IL campo form del messaggio sembra essere vuoto. Setto la variabile errore.");
          $script_error_status = true;
          $script_error_messagge .= "[ERRORE]: IL campo form del messaggio sembra essere vuoto. Tornare alla home per ricompilare il form. Se il problema persiste contattare lo sviluppatore." . "<br><br>";
        } else {
          debug_to_console("[INFO]: Il campo form del messaggio risulta settata!");
          $form_message = $_POST["input_message"];
        }

        $formatCheck_nome = "/^[A-Za-z .'-]+$/";
        if(!preg_match($formatCheck_nome, $form_name)) { /* controllo validità nome */
          debug_to_console("[ERRORE]: Il nome sembra non essere valido. Setto la variabile errore.");
          $script_error_status = true;
          $script_error_messagge .= "<strong>[ERRORE]:</strong> Il nome sembra non essere valido. Controlla se sono stati inseriti valori o caratteri speciali." . "<br><br>";
        }

        $formatCheck_email = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        if(!preg_match($formatCheck_email, $form_email)) { /* controllo validità email */
          debug_to_console("[ERRORE]: Campo email sembra non essere valida. Setto la variabile errore.");
          $script_error_status = true;
          $script_error_messagge .= "[ERRORE]: L'email sembra non essere valida. Controlla che la mail sia scritta giusta." . "<br><br>";
        }

        if( (strlen($form_message) > 501) || (strlen($form_message) == 0)   ) { /* controllo validità messaggio */
          debug_to_console("[ERRORE]: Il messaggio supera i limiti consentiti di dimensione oppure risulta vuoto. Setto la variabile errore.");
          $script_error_status = true;
          $script_error_messagge .= "[ERRORE]: Si è verificato un errore nel messaggio. Esso supera i limiti consentiti di dimensione oppure è vuoto. Controllare la quantità di caratteri del messaggio." . "<br><br>";
        }

      } else {
        debug_to_console("[ERRORE]: la richiesta non riuslta essere stata effettuata con il metodo POST. Setto la variabile errore.");
        $script_error_status = true;
        $script_error_messagge .= "[ERRORE]: la richiesta non è stata effettuata con il metodo POST." . "<br><br>";
      }




      // @ INVIO FORM VIA EMAIL SE NESSUN ERRORE
      if($script_error_status == false) { /* se nessun errore invio form via mail */
        $admin_email_ale = "fatone_alessandro@outlook.com";
        $admin_email_gab = "lizzosgabriele@gmail.com";
        $form_email_subject = "Messaggio da Iron Security";

        function clean_string($string) { /* funzione per il clean del messaggio */
          $bad = array("content-type","bcc:","to:","cc:","href");
          return str_replace($bad,"",$string);
        }

        $form_email_message = "Dettagli del form riportati sotto.\n\n";
        $form_email_message .= "Nome: ".clean_string($form_name)."\n";
        $form_email_message .= "Email: ".clean_string($form_email)."\n";
        $form_email_message .= "Messaggio: ".clean_string($form_message)."\n";

        $headers_gab = 'Da: '.$form_email."\r\n". 'a: '. $admin_email_gab."\r\n" .'X-Mailer: PHP/' . phpversion(); /* email gab */
        $check_mail_to_gab = mail($admin_email_gab, $form_email_subject, $form_email_message, $headers_gab); /* email gab */

        $headers_ale = 'Da: '.$form_email."\r\n". 'a: '. $admin_email_ale."\r\n" .'X-Mailer: PHP/' . phpversion(); /* email ale */
        $check_mail_to_ale = mail($admin_email_ale, $form_email_subject, $form_email_message, $headers_ale); /* email ale */


        if($check_mail_to_gab == true) { /* controllo invio mail a gab */
          debug_to_console("[INFO]: La mail a Gabriele risulta essere inviata.");
        } else {
          debug_to_console("[ERRORE]: La mail a Gabriele non risulta essere inviata.");
          $script_error_status = true;
          $script_error_messagge .= "[ERRORE]: La mail a Gabriele non risulta essere inviata. Contattare gli sviluppatori." . "<br><br>";
        }

        if($check_mail_to_ale == true) { /* controllo invio mail a ale */
          debug_to_console("[INFO]: La mail a Alessandro risulta essere inviata.");
        } else {
          debug_to_console("[ERRORE]: La mail a Alessandro non risulta essere inviata.");
          $script_error_status = true;
          $script_error_messagge .= "[ERRORE]: La mail a Gabriele non risulta essere inviata. Contattare gli sviluppatori." . "<br><br>";
        }


      } else {
        debug_to_console("[ERRORE]: Si sono verificati nella pagina uno o più errori: quindi non risulta possibile procedere con il submit del form via mail.");
        $script_error_status = true;
        $script_error_messagge .= "[ERRORE]: Si sono verificati all'interno della pagina uno o più errori: quindi non è possibile procedere con l'invio del form via mail." . "<br><br>";
      }


      // @ INVIO FORM VIA DB SE NESSUN ERRORE
      if($script_error_status == false) {
        $sql = "INSERT INTO formContatti (Nome, Email, Descrizione) VALUES ('$form_name', '$form_email', '$form_message')"; /* query */
        if ($connessione->query($sql) === TRUE) {
          debug_to_console("[INFO]: Record creato con successo nel database.");
          $script_error_status == false;
        } else {
          $script_error_status = true;
          $script_error_messagge .= "[ERRORE]: La creazione del record (" . $sql .  ") nel database risulta non essere stata effettuta per il seguente errore: " . $connessione->error . ".<br><br>";
          debug_to_console("[ERRORE]: Errore creazione record nel database: " . $connessione->error);
        }

      } else{
        debug_to_console("[ERRORE]: Si sono verificati nella pagina uno o più errori: quindi non risulta possibile procedere con il submit del form al database.");
        $script_error_messagge .= "[ERRORE]: Si sono verificati nella pagina uno o più errori: quindi non risulta possibile procedere con il submit del form al database." . "<br><br>";
      }

      $connessione->close(); /* chiusura connessione database */

      if($script_error_status == false) { /* tutto ha avuto successo e si può tornare alla home */
        header("refresh: 5; url = index.php");
      } else {

      }

     ?>

  </head>

  <body class="formBody">
    <div class="formBody__wrapper">
      <div class="formBody__video">
        <video class="bg-video-form" autoplay loop muted>
          <source src="../video/matrix.mp4" type="video/mp4">
          <source src="../video/matrix.webm" type="video/webm">
          Your browser is not supported!
        </video>
      </div>
      <div class="formBody__radiant"></div>
      <div class="formBody__box">
        <h2 class="heading-secondary u-margin-bottom-small">
          <?php
            if($script_error_status == false) {
              echo "Messaggio inviato!";
            }  else{
              echo "Messaggio non inviato!";
            }
           ?>
          </h2>
        <div class="formBody__box__icon u-margin-bottom-small">
          <i class=" <?php if($script_error_status == false) { echo "fas fa-check-circle u-color-ok"; } else { echo "fas fa-times u-color-error";} ?> animated pulse infinite faster"></i>
        </div>
        <p class="paragraph">
          <?php
            if($script_error_status == false) {
              echo "Il tuo messaggio è stato inviato agli admin del sito, i quali provvederanno
              a risponderti nel più breve tempo possibile.";
            } else {
              echo "Il tuo messaggio non è stato inviato in quanto si sono verificati i seguenti errori: <br><br>" . $script_error_messagge ;
            }
           ?>
           <br><br>
        </p>
        <div class="boxCont__group u-margin-bottom-small u-center-text">
          <p class="paragraph u-margin-bottom-none u-display-inlineblock">
            <?php
              if($script_error_status == false) {
                echo "Verrai ridiretto alla home del sito tra pochi secondi";
              }else{
                echo "Torna indietro alla pagina ";
              }
             ?>
             <a href="index.php" class="btn-link-paragraph <?php if($script_error_status == false) { echo "u-disappear";} ?>">Home</a>
            </p>
        </div>
      </div>
    </div>

  </body>

</html>
