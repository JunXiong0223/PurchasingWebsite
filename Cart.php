<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PaymentCheckout</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Font%20Awesome%205%20Brands.css">
    <link rel="stylesheet" href="assets/css/Font%20Awesome%205%20Free.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
    <link rel="stylesheet" href="assets/css/Navbar-Fixed-Side-navbar-fixed-side.css">
    <link rel="stylesheet" href="assets/css/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/PaymentCheckoutStyles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css">
    <link rel="stylesheet" href="assets/css/Floating-Button.css">
    <link rel="stylesheet" href="assets/css/Floating-Chat-Link.css">
    <link rel="stylesheet" href="assets/css/Form-Input.css">
    <link rel="stylesheet" href="assets/css/OrderStyles.css">
    <link rel="stylesheet" href="assets/css/SearchBarDropdown.css">
    <link rel="stylesheet" href="assets/css/StaticFooter.css">
</head>

<body>
    <!-- Nav -->
    <?php include 'Nav.php' ?>

    <div class="container-fluid" style="max-width: 850px;padding: 10px 12px;padding-bottom: 50px;">
        <div class="row">
            <div class="col-1 d-inline-flex"><a class="btn d-flex align-items-center" role="button" rel="prev" href="ProductDetail.php"><i class="fas fa-chevron-left fs-2"></i></a></div>
            <div class="col-10 d-flex justify-content-center align-items-center">
                <h1 style="margin-bottom: 0px;">My Cart</h1>
            </div>
            <div class="col-1"></div>
        </div>
        <ul class="list-group" style="margin-top: 10px;margin-bottom: 10px;">
            <li class="list-group-item product-1" style="border-width: 0px;box-shadow: 0px 0px 2px;padding-left: 12px;padding-right: 12px;padding-bottom: 0px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">
                <div class="modal fade" role="dialog" tabindex="-1" id="deleteItemPopupmsg">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Item</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to delete this item?</p>
                            </div>
                            <div class="modal-footer"><a class="btn btn-primary" role="button" href="Homepage.php">Yes</a><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5px;">
                    <div class="col-1 d-flex d-xl-flex justify-content-center justify-content-xl-center" style="border-color: rgba(255,255,255,0);"><input type="checkbox" id="itemCheckbox" style="width: 20px;border-color: rgba(255,255,255,0);" onchange="updateCartTotal(99.99, &#39;CartQuantityInput&#39;, &#39;totalPrice&#39;, &#39;itemCheckbox&#39;); updateCartTotalPrice([{pricePerItem: 99.99, quantityId: &#39;CartQuantityInput&#39;, checkboxId: &#39;itemCheckbox&#39;}])"></div>
                    <div class="col-4 d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" style="margin-bottom: 0px;"><img class="img-fluid" width="257" height="220" src="assets/img/duracelbattery-removebg-preview.png"></div>
                    <div class="col-6" style="padding-left: 10px;padding-right: 10px;">
                        <div class="row d-xxl-flex">
                            <div class="col" style="margin: 2px;">
                                <h4 class="text-break">Battery 1</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-end d-grid" style="margin-top: 10px;margin-bottom: 10px;">
                                <h1 class="fs-3 d-flex justify-content-start justify-content-xxl-start" style="margin-bottom: 0px;">RM 99.99</h1>
                            </div>
                            <div class="col">
                                <form class="d-inline-flex"><button class="btn btn-sm border rounded-circle" type="button" style="padding-left: 12px;padding-right: 12px;width: 44px;height: 44px;box-shadow: 0px 3px 5px 1px rgba(33,37,41,0.18), 0px 3px 5px 1px rgba(33,37,41,0.18);" onclick="updateCartQuantity(&#39;CartQuantityInput&#39;, &#39;decrease&#39;); updateCartTotal(99.99, &#39;CartQuantityInput&#39;, &#39;totalPrice&#39;, &#39;itemCheckbox&#39;); updateCartTotalPrice([{pricePerItem: 99.99, quantityId: &#39;CartQuantityInput&#39;, checkboxId: &#39;itemCheckbox&#39;}])"><i class="fas fa-minus"></i></button><input class="form-control" type="text" id="CartQuantityInput" inputmode="numeric" pattern="\d*" value="1" autocomplete="off" required="" style="text-align: center;font-weight: bold;border-width: 0px;background: rgba(255,255,255,0);font-size: 20px;width: 80px;" minlength="1"><button class="btn btn-sm border rounded-circle" type="button" style="padding-right: 12px;padding-left: 12px;width: 44px;box-shadow: 0px 3px 5px 1px rgba(33,37,41,0.18);" onclick="updateCartQuantity(&#39;CartQuantityInput&#39;, &#39;increase&#39;); updateCartTotal(99.99, &#39;CartQuantityInput&#39;, &#39;totalPrice&#39;, &#39;itemCheckbox&#39;); updateCartTotalPrice([{pricePerItem: 99.99, quantityId: &#39;CartQuantityInput&#39;, checkboxId: &#39;itemCheckbox&#39;}])"><i class="fas fa-plus"></i></button></form>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 d-flex justify-content-end" style="padding-right: 10px;padding-left: 0px;"><button class="btn d-flex d-xxl-flex align-items-start align-items-xxl-start" type="button" style="padding: 0px 0px;padding-left: 0px;font-size: 24px;margin-right: 2px;height: 25px;width: 25px;" data-bs-target="#deleteItemPopupmsg" data-bs-toggle="modal"><i class="fas fa-trash-alt"></i></button></div>
                </div>
                <div class="row d-flex" style="background: #e3e0e0;padding-right: 10px;padding-left: 10px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                    <div class="col d-flex d-xxl-flex align-items-center align-items-xxl-center">
                        <h3 class="text-break d-xxl-flex align-items-xxl-center" id="totalItemsCount" style="font-size: 18px;">Total (0 Items)</h3>
                    </div>
                    <div class="col-auto justify-content-center align-items-end align-content-stretch">
                        <h3 class="text-break text-start" id="totalPrice">RM 0.00</h3>
                    </div>
                </div>
            </li>
        </ul>
        <div class="row" style="border-style: solid;margin: 2px;border-radius: 20px;margin-top: 10px;margin-bottom: 10px;height: 56px;">
            <div class="col d-xl-flex align-items-xl-center" style="padding-left: 20px;">
                <h1 id="cartTotalPrice" style="font-size: 21px;margin-bottom: 0px;margin-left: 15px;line-height: 49.8px;text-align: left;width: 120px;padding-left: 0px;">RM 0.00</h1>
            </div>
            <div class="col d-grid" style="padding-right: 0px;padding-left: 0px;"><a class="btn btn-primary" role="button" style="font-size: 20px;background: var(--bs-red);border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-width: 0px;height: 50px;" href="CheckoutSearchAddress.php">&nbsp;Checkout</a></div>
        </div>
    </div>
    <!-- Footer -->
    <?php include 'Footer.php' ?>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="assets/js/checkout.js"></script>
    <script src="assets/js/Cart.js"></script>
    <script src="assets/js/ProductBrowsing.js"></script>
    <script src="assets/js/Profile.js"></script>
</body>

</html>