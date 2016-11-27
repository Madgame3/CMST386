function unhideReceipts(){
  var receipt = document.getElementById("receiptqty");
  var value = receipt.value;
  if(value>10){
    alert("Max Receipts is 10, please try again")
  }
  var tr = document.getElementsByName("hide-tr");
  var hidden = document.getElementsByName("receipts");
  var table = document.getElementById('addingreceipts');
  for(var i=0; i<hidden.length;i++){
    if(i<value){
      tr[i].hidden = false;
      hidden[i].hidden = false;
      hidden[i].required = true;
    }
    else{
      tr[i].hidden = true;
      hidden[i].hidden = true;
      hidden[i].required = false;
      hidden[i].value = 0;
    }
  }
  if(value>0){
      table.hidden = false;
  }else{
      table.hidden = true;
  }
}

function addSum(){
  var sum = document.getElementById('receiptsum');
  var hidden = document.getElementsByName("receipts");
  var totalspent = 0;
  for(var i=0; i<hidden.length; i++){
    if(hidden[i].value != 0){
      totalspent += parseFloat(hidden[i].value)
    }
  }
  sum.value = totalspent;
  chipCalculator();
}
