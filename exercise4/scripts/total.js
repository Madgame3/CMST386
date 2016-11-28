function calculateTotal(){
  var sub = document.getElementById('subtotal');
  var tax = document.getElementById('taxes');
  var totals = document.getElementById('total');
  var receipts = document.getElementById('receiptsum');
  var taxable = 0;
  tax.value = 0;
  totals.value = 0;
  if((sub.value - receipts.value) > 0){
    taxable = sub.value - receipts.value;
    tax.value = Math.round(taxable * .1);
    totals.value = sub.value - tax.value;
  }
  else{
    tax.value = 0;
    totals.value = sub.value;
  }
}
