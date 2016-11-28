function calculateTotal(){
  var sub = document.getElementById('subtotal');
  var tax = document.getElementById('taxes');
  var totals = document.getElementById('total');
  var receipts = document.getElementById('receiptsum');
  console.log("calculateTotal was called");
  var taxable = 0;
  tax.value = 0;
  totals.value = 0;
  if(isNaN(sub.value)){
    console.log("sub.value is not a number: " + sub.value);
  }
  if( receipts.value < sub.value ){
    console.log("receipts value: " + receipts.value);
    console.log("sub value: " + sub.value);
    taxable = sub.value - receipts.value;
    console.log("taxable: " + taxable);
    tax.value = Math.round(taxable * .1);
    console.log("tax value: " + tax.value);
    totals.value = sub.value - tax.value;
  }
  else{
    tax.value = 0;
    totals.value = sub.value;
  }
}
