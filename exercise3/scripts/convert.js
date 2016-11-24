function convertType(){
  var choice = prompt("Enter '1' for F to C, Enter '2' for C to F", "1 or 2");
    if (choice == 1) {
      converttoC();
    } else if (choice == 2) {
      converttoF();
    } else{
      alert("you did not enter 1 or 2, please try again.")
      convertType();
    }
}
function converttoF(){
  ctemp = prompt("Enter the temperature in Celsius you want to convert to Fahrenheit", "0");
  if (isNaN(ctemp)) {
      alert(ctemp + " is not a number, please try again.")
      converttoF();
  }
  else {
    var ftemp = (ctemp*1.8) + 32;
    document.getElementById('uservalue').value = ctemp + "°";
    document.getElementById('userchoice').value = "Celsius";
    document.getElementById('convertedvalue').value = ftemp+"°";
    document.getElementById('convertedchoice').value = "Fahrenheit";
    console.log("This program brought to you by Stephen Harrington");
  }
}
function converttoC(){
  ftemp = prompt("Enter the temperature in Fahrenheit you want to convert to Celsuis", "0");
  if (isNaN(ftemp)) {
      alert(ftemp + " is not a number, please try again.");
       converttoC();
  }
  else {
    var ctemp = (ftemp - 32) * .5556;
    document.getElementById('uservalue').value = ftemp+"°";
    document.getElementById('userchoice').value =  "Fahrenheit";
    document.getElementById('convertedvalue').value = ctemp+"°";
    document.getElementById('convertedchoice').value = "Celsius";
    console.log("This program brought to you by Stephen Harrington")
  }
}

function convertInput() {
  var uservalue = document.getElementById("uservalue").value;
  var userchoice = document.getElementById("userchoice").value;
  if(userchoice == "Celsius"){
    if (isNaN(uservalue)) {
        alert(uservalue + " is not a number, please try again.");
    }else{
    var value = (uservalue*1.8) + 32;
    document.getElementById('convertedvalue').value = value;
    document.getElementById('convertedchoice').value = "Fahrenheit";
    }
  }
  else if (userchoice == "Fahrenheit") {
    if (isNaN(uservalue)) {
        alert(uservalue + " is not a number, please try again.");
    }else{
    var value = (uservalue - 32) * .5556;
    document.getElementById('convertedvalue').value = value;
    document.getElementById('convertedchoice').value = "Celsius";
    }
  }
}
