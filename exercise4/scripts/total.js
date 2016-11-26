function calculateTotal(){
  var sub = getElementById('  subtotal');
  var tax = getElementById('taxes');
  var totals = getElementById('total');
  var receipts = getElementById('receiptsum');
  if(receipts.value < sub.value){
    var taxable = sub.value - receipts.value;
    tax.value = taxable * .1;
    totals.value = taxable * .9;
  }
  else{
    tax.value = 0;
    totals.value = sub.value;
  }
}
