var slider = document.getElementById("passwordLunghezza_range");
var slider_label = document.getElementById("passwordLunghezza_span");
var passwordBox = document.getElementById("passowordGenerated");

// visualizza il vlaore di defaukt dello slider
slider_label.innerHTML = slider.value;


// aggiornamento slider al valore corrente
slider.oninput = function() {
  slider_label.innerHTML = this.value;
}



function generate(){

    // passowrd complessità
    var complexity = slider.value;

    //possibili valori della password
    var values = "ABCDEFGHIJKLMNOPQRSTUVWZYZabcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*()_+";

    var password = "";

    // loop per ogni carattere della password
    for(var i = 0; i < complexity; i++){
        password = password + values.charAt(Math.floor(Math.random() * Math.floor(values.length - 1)));
    }

    // aggiungere passowrd alla texbox
    passwordBox.value = password;


}




function copyPassword(){

    var copyText = document.getElementById("passowordGenerated");
  copyText.select();
  document.execCommand("copy");
  alert("Testo copiato: " + copyText.value);

}
