function calculateTotal(){
  var sub = document.getElementById('subtotal');
  var tax = document.getElementById('taxes');
  var totals = document.getElementById('total');
  var winnings = document.getElementById('winnings');
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
  winnings.value = (totals.value - receipts.value);
  if(winnings.value > 0){
    winnings.style.color = "green";
  }

  else if (winnings.value < 0) {
    winnings.style.color = "red";
  }
  else {
  }
}
