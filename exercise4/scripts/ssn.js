function allowSSN(){
  var citizen = document.getElementById("citizen");
  var value = citizen.value;
  console.log("citizen value :" + value);
  var ssn = document.getElementById("ssn");
  if(value == 1){
    ssn.disabled = false;
    ssn.required = true;
    console.log("ssn required");
  }
  else{
    ssn.disabled = true;
    ssn.required = false;
    console.log("ssn disabled");
  }
}
