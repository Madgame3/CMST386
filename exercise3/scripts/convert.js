function convertType(){
  var choice = prompt("Enter '1' for F to C, Enter '2' for C to F", "1 or 2");
    if (choice == 1) {
      alert("you entered 1 for F to C");
      converttoC();

    } else if (choice == 2) {
      alert("you entered 2 for C to F")
      converttoF();
    } else{
      alert("you did not enter 1 or 2, please try again.")
      convertType();
    }
}
function converttoF(){
  ctemp = prompt("Enter the temperature in Celsius you want to convert to Fahrenheit", "0");
  if (!(isNaN(ctemp))) {
      alert("The value you entered is not a number, please try again.")
      converttoF();
  }
  else {
    var ftemp = (ctemp*1.8) + 32;
    alert("Farenheit: " + ftemp);
  }
}
function converttoC(){
  ftemp = prompt("Enter the temperature in Fahrenheit you want to convert to Celsuis", "0");
  if (!(isNaN(ftemp))) {
      alert("The value you entered is not a number, please try again.")
       converttoC();
  }
  else {
    var ctemp = (ftemp - 32) * .5556;
    alert("Celsius: " + ctemp);
  }

}
