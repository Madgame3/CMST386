function chipCalculator(){
  var chipvalues = document.getElementsByName('chipvalue');
  var chipqtys = document.getElementsByName('chipqty');
  var subtotals = document.getElementById('subtotal');
  var value = 0;
  for(var i=0;i<chipvalues.length;i++){
    if(chipqtys[i] != 0){
      value += chipvalues[i].value * chipqtys[i].value;
      subtotals.value = value;
    }
  }
  calculateTotal();
}
