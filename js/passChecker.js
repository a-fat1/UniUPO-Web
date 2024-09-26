var password = document.getElementById("passowordToCheck");

password.addEventListener("keyup", function() {
  checkPassword(password.value)
})

function checkPassword(pass) {
  var barra = document.getElementById("barra");
  var potenza = 0;
  if (pass.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)) {
    potenza = potenza + 1;
  }
  if (pass.match(/[~<>?]+/)) {
    potenza = potenza + 1;
  }
  if (pass.match(/[!@&$%^Â£*()]+/)) {
    potenza = potenza + 1;
  }
  if(pass.length > 5) {
    potenza = potenza + 1;
  }
  if(pass.length == 0) {
    potenza = -1;
  }

  switch (potenza) {
    case -1:
      document.getElementById("barra").style.backgroundColor = "red";
      document.getElementById("barra").style.width = "0%";
      document.getElementById("barraValore").innerHTML = "0%";
      console.log("Sicurezza password: 0%.");
    break;
    case 0:
      document.getElementById("barra").style.backgroundColor = "red";
      document.getElementById("barra").style.width = "20%";
      document.getElementById("barraValore").innerHTML = "20%";
      console.log("Sicurezza password: 20%.");
      break;
    case 1:
      document.getElementById("barra").style.width = "40%";
      document.getElementById("barraValore").innerHTML = "40%";
      console.log("Sicurezza password: 40%.");
      break;
    case 2:
      document.getElementById("barra").style.backgroundColor = "yellow";
      document.getElementById("barra").style.width = "60%";
      document.getElementById("barraValore").innerHTML = "60%";
      console.log("Sicurezza password: 60%.");
      break;
    case 3:
      document.getElementById("barra").style.backgroundColor = "green";
      document.getElementById("barra").style.width = "80%";
      document.getElementById("barraValore").innerHTML = "80%";
      console.log("Sicurezza password: 80%.");
      break;
    case 4:
      document.getElementById("barra").style.width = "100%";
      document.getElementById("barraValore").innerHTML = "100%";
      console.log("Sicurezza password: 100%.");
      break;
    default:
    console.log("Errore check password.")
  }

}
