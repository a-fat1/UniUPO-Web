var passToCrypt = document.getElementById("passowordToCrypt");
var passCrypted = document.getElementById("passowordCrypted");

function crypt() {
  if(passToCrypt.value == "") {
    console.log("campo password vuoto");
  }else {
    passCrypted.value = hex_sha512(passToCrypt.value);
  }
}


function copyCryptedPassword(){

    var copyText = document.getElementById("passowordCrypted");
  copyText.select();
  document.execCommand("copy");
  alert("Testo copiato: " + copyText.value);

}
