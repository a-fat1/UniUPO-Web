//colori
var coloreverde = "#55C57A";
var colorerosso = "#F63338";

//formato caratteri non ammessi nel nome
var formatname = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;


//CONTA CARATTERI E AGGIORNA DIMENSIONE
function updateMsgLenght(val) {
  var len = val.value.length;
    if (len >= 500) {
             val.value = val.value.substring(0, 500);
             $('#statusCaratteri__count').text(0);
    } else {
             $('#statusCaratteri__count').text(500 - len);
    }
}



//FUNZIONE MASTER AL SUBMIT
function validate() {
  if(validate_name(document.form_contatti.input_name) == true) { //se il nome Ã¨ giusto prosegui
    settaBordoStatus(document.form_contatti.input_name, "si"); //se il nome Ã¨ giusto metti bordo verde
    if(validate_email(document.form_contatti.input_email) == true) { //se la mail Ã¨ giusta prosegui
      settaBordoStatus(document.form_contatti.input_email, "si"); //se la mail Ã¨ giusta metti bordo verde
      if(validate_message(document.form_contatti.input_message) == true) {
        return true;
      } else {
        return false;
      }
    }else {
      return false;
    }
  }else{
    return false;
  }

}


// @ VALIDAZIONE FORM: NOME
function validate_name(input_name) {

  //CONTROLLO #1: nessun nome
  if(input_name.value == "" ) {
    //alert con errore
    alert("Devi fornire un nome nel form per inviarlo!" );
    //messaggio console con errore
    console.log("[ERRORE]: L'utente non ha inserito nessun nome nel form!");
    //settare il focus attuale del sito sul nome
    settaFocusDelSito(input_name);
    //modifica css colore errore
    settaBordoStatus(input_name, "no");
    //aggiungere l'animazione shake
    addAnimationShake(input_name);
    //rimuovere l'animazione shake
    removeAnimationShake(input_name);
    return false;
  }

  //CONTROLLO #2: controllo caratteri speciali
  if( /[!@#$%^&*(),.?":{}|<>]/g.test(input_name.value) == true) {
    //alert con errore
    alert("Non sono ammessi caratteri speciali nel nome!" );
    //messaggio console con errore
    console.log("[ERRORE]: Non sono ammessi caratteri speciali nel nome!");
    //settare il focus attuale del sito sul nome
    settaFocusDelSito(input_name);
    //modifica css colore errore
    settaBordoStatus(input_name, "no");
    //aggiungere l'animazione shake
    addAnimationShake(input_name);
    //rimuovere l'animazione shake
    removeAnimationShake(input_name);
    return false;
  }
  return true;
}




// @ VALIDAZIONE FORM: MAIL
function validate_email(input_email) {

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  //CONTROLLO #1: email vuota
  if(input_email.value == "") {
    //alert con errore
    alert("Devi fornire un email nel form per inviarlo!" );
    //messaggio console con errore
    console.log("[ERRORE]: L'utente non ha inserito nessuna email nel form!");
    //modifica css colore errore
    settaBordoStatus(input_email, "no");
    //aggiungere l'animazione shake
    addAnimationShake(input_email);
    //rimuovere l'animazione shake
    removeAnimationShake(input_email);
    //settare il focus attuale del sito sulla mail
    settaFocusDelSito(input_email);
    return false;
  }


  //CONTROLLO #2: formato mail corretta
  if (!(input_email.value.match(mailformat)) ) {
    //alert con errore
    alert("Il formato della mail inserita Ã¨ errata!" );
    //messaggio console con errore
    console.log("[ERRORE]: L'utente ha inserito una mail incompleta o con un formato sbagliato!");
    //modifica css colore errore
    settaBordoStatus(input_email, "no");
    //aggiungere l'animazione shake
    addAnimationShake(input_email);
    //rimuovere l'animazione shake
    removeAnimationShake(input_email);
    //settare il focus attuale del sito sulla mail
    settaFocusDelSito(input_email);
    return false;
  }
  return true ;
}




// @ VALIDAZIONE FORM: MESSAGGIO
function validate_message(input_message) {

  //CONTROLLO #1: nessun messaggio
  if(input_message.value == "" ) {
    //alert con errore
    alert("Devi fornire un messaggio nel form per inviarlo!" );
    //messaggio console con errore
    console.log("[ERRORE]: L'utente non ha inserito nessun messaggio nel form!");
    //settare il focus attuale del sito sul nome
    settaFocusDelSito(input_message);
    //modifica css colore errore
    settaBordoStatus(input_message, "no");
    //aggiungere l'animazione shake
    addAnimationShake(input_message);
    //rimuovere l'animazione shake
    removeAnimationShake(input_message);
    //settare il focus attuale del sito sulla mail
    settaFocusDelSito(input_message);
    return false;
  }
  return true;
}






function settaFocusDelSito(oggetto) {
  oggetto.focus();
}

function settaBordoStatus(oggetto, status) {
  if(status == "si") {
    oggetto.style.borderColor = coloreverde;
  }
  if(status == "no") {
    oggetto.style.borderColor = colorerosso;
  }
}

function addAnimationShake(oggetto) {
  oggetto.classList.add("animated");
  oggetto.classList.add("shake");
}

function removeAnimationShake(oggetto) {
  setTimeout(function(){
    oggetto.classList.remove("animated");
    oggetto.classList.remove("shake");
  }, 1000);
}

function displayMsgCounter() {
  document.getElementById("div_statusCaratteri").classList.remove("u-disappear");
  document.getElementById("div_statusCaratteri").classList.add("animated");
  document.getElementById("div_statusCaratteri").classList.add("flipInY");
}
