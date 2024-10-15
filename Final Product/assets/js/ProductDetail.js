//Product Detail Function
function increasePDQuantity() {
    var quantityInput = document.getElementById('PDQuantityInput');
    var value = parseInt(quantityInput.value);
    quantityInput.value = value + 1;
}

function decreasePDQuantity() {
    var quantityInput = document.getElementById('PDQuantityInput');
    var value = parseInt(quantityInput.value);
    if (value > 1) {
        quantityInput.value = value - 1;
    }
}

// Get the "Add to Cart" button by its ID
var addToCartButton = document.getElementById('btnaddtocart');

// Variable to keep track of cart item count
var cartItemCount = 0;

// Add a click event listener
addToCartButton.addEventListener('click', function() {
    // Show the success message by removing 'd-none'
    document.getElementById('successMessage').classList.remove('d-none');

    // Start the fade-out process after 2 seconds
    setTimeout(function() {
        var successMessage = document.getElementById('successMessage');
        successMessage.style.transition = 'opacity 0.5s';  // Set transition for fade effect
        successMessage.style.opacity = '0';  // Start fading out

        // After fade-out, hide the message by adding 'd-none' again
        setTimeout(function() {
            successMessage.classList.add('d-none');  // Hide after fade-out
            successMessage.style.opacity = '1';  // Reset opacity for next time
        }, 500);  // 500ms for the fade-out effect
    }, 2000);  // 2000ms before starting the fade-out

    // Update the cart count in the badge
    var cartCountElement = document.getElementById('cartCount'); // Get the span for the cart count
    cartItemCount++;  // Increment the item count
    cartCountElement.textContent = cartItemCount;  // Update the text with the new item count
    // Remove 'd-none' class to make the badge visible
    cartCountElement.classList.remove('d-none');
    //cartCountElement.style.display = 'block';  // Make the badge visible
});

//Cart Function
function increaseCartQuantity() {
    var quantityInput = document.getElementById('CartQuantityInput');
    var value = parseInt(quantityInput.value);
    quantityInput.value = value + 1;
}

function decreaseCartQuantity() {
    var quantityInput = document.getElementById('CartQuantityInput');
    var value = parseInt(quantityInput.value);
    if (value > 1) {
        quantityInput.value = value - 1;
    }
}

function increaseCartQuantity1() {
    var quantityInput = document.getElementById('CartQuantityInput1');
    var value = parseInt(quantityInput.value);
    quantityInput.value = value + 1;
}

function decreaseCartQuantity1() {
    var quantityInput = document.getElementById('CartQuantityInput1');
    var value = parseInt(quantityInput.value);
    if (value > 1) {
        quantityInput.value = value - 1;
    }
}




