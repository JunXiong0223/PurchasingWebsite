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