let MemberPoint = 1000; // Replace with actual member point value

let OnePoint = 0.01; // Replace with actual point value

var pointAmount = 0; 
var PromoCodeAmount = 0; 
var TotalAmount = 0

let carBattery = {
    brand: "Exide",
    model: "Exide Premium EA1000",
    price: 129.99,
    quantity: 3,
    imageUrl: "assets/img/Car%20Battery.png" // Replace with actual image URL
};



document.getElementById("productName").innerHTML = carBattery.model;
document.getElementById("productPrice").innerHTML = "RM" + carBattery.price;
document.getElementById("productQuantity").innerHTML = carBattery.quantity;
document.getElementById("productImage").src = carBattery.imageUrl;
document.getElementById("productTotalPrice").innerHTML = "RM" + (carBattery.price * carBattery.quantity);
document.getElementById('MemberPointValue').innerHTML = MemberPoint;

document.getElementById('TotalProductsPrice').innerHTML = "RM" + (carBattery.price * carBattery.quantity);
document.getElementById('TotalProductQuantity').innerHTML = carBattery.quantity;

function calculateTotalAmount() {
    TotalAmount = (carBattery.price * carBattery.quantity) - pointAmount - PromoCodeAmount;
    //document.getElementById('TotalProductsPrice').innerHTML = "RM" + TotalAmount;
    document.getElementById('TotalCheckoutAmount').innerHTML = "RM" + TotalAmount;
    document.getElementById('FinalPrice').innerHTML = "RM" + TotalAmount;
}

function calculateTotalPrice() {
    let totalPrice = carBattery.price * carBattery.quantity; // Replace with actual calculation logic

    return totalPrice;
}

function usePoints(MemberPoint,OnePoint) {
    pointAmount = MemberPoint * OnePoint;
    return pointAmount;
}

function increaseQuantity(productID){
    //let productClassInputID = `product${productID}-quantity`;
    let product = document.getElementById(`product${productID}-quantity`);
    let productValue = parseInt(product.value);
    let newValue = productValue + 1;
    product = newValue;
    console.log(productID, productValue, newValue);
    document.getElementById(`product${productID}-quantity`).value = product;
}

function decreaseQuantity(productID){
    //let productClassInputID = `product${productID}-quantity`;
    let product = document.getElementById(`product${productID}-quantity`);
    let productValue = parseInt(product.value);
    let newValue = productValue - 1;

    if(newValue <= 0){
        newValue = 0;
    }

    product = newValue;
    console.log(productID, productValue, newValue);
    document.getElementById(`product${productID}-quantity`).value = product;
}


document.addEventListener('DOMContentLoaded', function() {

    document.getElementById('MemberPointChk').addEventListener('change', function() {
        //const target = document.getElementById('MemberPoint');
        if (this.checked) {
            console.log('Checkbox is checked');
            // Show the element
            document.querySelectorAll('MemberPoint *').forEach(function(element) {
                element.style.display = 'block'; // Resets the display property
            });
            
            document.getElementById('MemberPoint').style.display = ''; 

            usePoints(MemberPoint,OnePoint);
            calculateTotalAmount();
            document.getElementById('MemberPointConvert').innerHTML = "RM " + pointAmount;
        }
        else {
            console.log('Checkbox is not checked');
            // Hide the element
            document.getElementById('MemberPoint').style.display = 'none';
            pointAmount = 0;
            calculateTotalAmount();
        }
    });
});

const correctPromoCode = 'Code123';

document.getElementById('PromoCodeBtn').addEventListener('click', function() {
    const enteredCode = document.getElementById('promoCodeInput').value;
     
    if (enteredCode === correctPromoCode) {
        document.getElementById('invalidPromoCodeMsg').style.display = 'none';
        document.getElementById('PromoCodeBar').style.display = '';
        PromoCodeAmount = 10; // Set the discount amount to 10

        document.getElementById('PromoCodeValue').innerHTML = enteredCode; // Set the discount amount to 10
        document.getElementById('PromoCodeConvert').innerHTML = "RM" + PromoCodeAmount;
        calculateTotalAmount();
    } else {
        document.getElementById('invalidPromoCodeMsg').style.display = '';
        document.getElementById('PromoCodeBar').style.display = 'none';
    }
});


window.onload = calculateTotalAmount();