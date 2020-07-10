function validateForm() {
    let princePerPriece = 1200;
    let amountIput = document.querySelector("form#order input[name=amount]");
    let priceField = document.querySelector("form#order strong");
    
    document.querySelector("div#error").innerHTML = '';
    amount = parseInt(amountIput.value);
    if (amount < 1 || isNaN(amount)) {
        amount = 0;
        document.querySelector("div#error").innerHTML = `<div class="alert alert-danger" role="alert">
        Ez a mennyiség kevés egy korgó gyomornak!
      </div>`;
    }
    
    totalAmount = amount * princePerPriece;
    priceField.innerHTML = `${totalAmount}`;
}
