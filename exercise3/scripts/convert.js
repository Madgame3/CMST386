function Temperature(){
  var choice = prompt("Enter '1' for F to C, Enter '2' for C to F", "1 or 2");
    if(choice != '1' || '2'){
      alert("You did not Enter 1 or 2, please try again");
      Temperature();
    }
}
