<?php

  // variabili
  $db_servername = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "my_ironsecurity";

  // Creazione connessione database
  $connessione = new mysqli($db_servername, $db_username , $db_password, $db_name);

  // Controllo connessione
  if ($connessione->connect_error) {
    die("[ERRORE]: Connessione fallita: " . $connessione->connect_error);
    debug_to_console("[ERRORE]: Connessione database terminata con errore.");
  } else {
    debug_to_console("[INFO]: Connessione database riuscito con successo.");
  }

?>
