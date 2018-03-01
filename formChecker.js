function loadFunc() {
  var checks = document.getElementsByClassName("cBox");
  for(var i = 1; i < 4; i++) {
    let temp = "p"+checks[i-1].id;
    if(checks[i-1].checked) {
      document.getElementById(temp).classList.remove("invisible");
      document.getElementById(temp).required = true;
    }
    else {
      document.getElementById(temp).classList.add("invisible");
      document.getElementById(temp).value = "0";
      document.getElementById(temp).required = false;
    }
    checks[i-1].addEventListener("click", function() {
      let temp = "p"+this.id;
      if(this.checked) {
        document.getElementById(temp).classList.remove("invisible");
        document.getElementById(temp).required = true;
      }
      else {
        document.getElementById(temp).classList.add("invisible");
        document.getElementById(temp).value = "0";
        document.getElementById(temp).required = false;
      }
    });
  }
}

function deleteBoxes() {
  var quants = document.getElementsByTagName("input");
  for(var i = 0; i < quants.length; i++) {
    if(quants[i].type == "number") {
      quants[i].classList.add("invisible");
      quants[i].value = "0";
    }
  }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validate() {
  var inputs = getVisibleInputs();
  var isTFull = validateTexts(inputs);
  var isFull = validateQuantities(inputs);
  var isCheck = true;
  var temp = document.getElementsByTagName("input")
  if((temp[8].checked == temp[9].checked) && (temp[10].checked == false)) {
    alert("Pick a delivery option buster.");
    isCheck = false;
  }
  if(isTFull && isFull && isCheck) return true;
  else return false;
}

function getVisibleInputs() {
  var tIn = document.getElementsByTagName("input");
  var vIn = [];
  for(var i = 0; i < tIn.length; i++) {
    if(!tIn[i].classList.contains("invisible")){
      vIn.push(tIn[i]);
    }
  }
  return vIn;
}

function validateTexts(inputs) {
  if(inputs[0].value == "") {
    alert("No email");
    return false;
  }
  else if(inputs[1].value.length < 8) {
    alert("Password not long enough");
    return false;
  }
  else if(!validateEmail(inputs[0].value)){
    alert("Does this work.");
    return false;
  }
  else return true;
}

function validateQuantities(inputs) {
  let ins = getQuantities(inputs);
  if(ins.length == 0) {
    alert("Coach Self would be so upset, c'mon where's the hustle!");
    return false;
  }
  return true;
}

function getQuantities(inputs) {
  let something = [];
  for(var i = 0; i < inputs.length; i++) {
    if(inputs[i].type == "number") something.push(inputs[i]);
  }
  return something;
}
