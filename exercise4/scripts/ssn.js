function allowSSN(){
  var citizen = document.getElementById("citizen");
  var value = citizen.value;
  var ssn = document.getElementById("ssn");
  if(value == 1){
    ssn.disabled = false;
    ssn.required = true;
  }
  else{
    ssn.disabled = true;
    ssn.required = false;
  }
}
