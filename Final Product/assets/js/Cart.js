function updateCartQuantity(inputId, operation) {
    var quantityInput = document.getElementById(inputId);
    var value = parseInt(quantityInput.value);

    if (operation === 'increase') {
        quantityInput.value = value + 1;
    } else if (operation === 'decrease' && value > 1) {
        quantityInput.value = value - 1;
    }
}

//Update upper position Price Value dynamically
function updateCartTotal(pricePerItem, inputId, totalId, checkboxId) {
    var checkbox = document.getElementById(checkboxId);
    var quantityInput = document.getElementById(inputId);
    var totalPriceElement = document.getElementById(totalId);

    // Check if the checkbox is checked before calculating the price
    if (checkbox && checkbox.checked) {
        var quantity = parseInt(quantityInput.value);
        var totalPrice = pricePerItem * quantity;
        totalPriceElement.textContent = 'RM ' + totalPrice.toFixed(2);
    } else {
        // Set the individual item's total to RM 0.00 if unchecked
        totalPriceElement.textContent = 'RM 0.00';
    }
}

//Update lower position Price Value & Total Items dynamically
function updateCartTotalPrice(itemPrices) {
    let cartTotal = 0;   // Initialize the total price
    let totalItems = 0;  // Initialize the total items count

    // Loop through each item and check if the checkbox is checked
    itemPrices.forEach(function(item) {
        let checkbox = document.getElementById(item.checkboxId);
        if (checkbox && checkbox.checked) {
            let quantityInput = document.getElementById(item.quantityId);
            let quantity = parseInt(quantityInput.value);
            
            // Add to cart total price
            cartTotal += item.pricePerItem * quantity;

            // Add to total items count
            totalItems += quantity;
        }
    });

    // Update the total price at the bottom of the cart
    let cartTotalElement = document.getElementById('cartTotalPrice');
    cartTotalElement.textContent = 'RM ' + cartTotal.toFixed(2);

    // Update the total items count
    let totalItemsElement = document.getElementById('totalItemsCount');
    totalItemsElement.textContent = 'Total (' + totalItems + ' Items)';
}




