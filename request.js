function GetBrandInfo(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtCar").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtCar").innerHTML = this.responseText;
    }
  };
  console.log(str);
  xhttp.open("GET", "getCar.php?brandSearch="+str, true);
  xhttp.send();
}

function GetModelInfo(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtCar").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtCar").innerHTML = this.responseText;
    }
  };
  console.log(str);
  xhttp.open("GET", "getCar.php?modelSearch="+str, true);
  xhttp.send();
}