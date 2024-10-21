<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>User_V2</title>
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

<body class="d-flex flex-column" style="min-height: 100vh;">
    <!-- Navigation Bar -->
    <?php include 'Nav.php' ?>

    <div class="container-fluid" id="main" style="max-width: 850px;padding: 20px 12px;">
        <div class="row" style="width: 100%;margin: 0px 0px;">
            <div class="col-12 col-xl-3 col-xxl-5 offset-xxl-0" style="width: auto;">
                <h1>Checkout</h1>
            </div>
            <div class="col" style="text-align: right;width: auto;padding: 0px 0px;"><a class="btn btn-primary" role="button" style="border-width: 0px;background: rgba(13,110,253,0);text-align: right;" href="Cart.php"><i class="fas fa-times" style="text-align: right;color: rgb(0,0,0);font-size: 25px;"></i></a></div>
        </div>
        <ul class="list-group" style="margin-top: 10px;margin-bottom: 10px;">
            <li class="list-group-item product-1" style="border-width: 0px;box-shadow: 0px 0px 2px;padding-left: 12px;padding-right: 12px;padding-bottom: 0px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">
                <div class="row" style="margin-bottom: 5px;">
                    <div class="col-4 d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" style="margin-bottom: 0px;"><img class="img-fluid" id="productImage" width="257" height="220"></div>
                    <div class="col" style="padding-left: 10px;padding-right: 10px;">
                        <div class="row d-xxl-flex">
                            <div class="col" style="margin: 2px;">
                                <h4 class="text-break" id="productName"></h4>
                            </div>
                        </div>
                        <div class="row text-start">
                            <div class="col-12 d-grid" style="margin-top: 10px;margin-bottom: 10px;">
                                <h1 class="fs-3 d-flex justify-content-start justify-content-xxl-start" id="productPrice" style="margin-bottom: 0px;"></h1>
                            </div>
                            <div class="col invisible">
                                <form class="d-inline-flex"><button class="btn btn-sm border rounded-circle" type="button" style="padding-left: 12px;padding-right: 12px;" onclick="decreaseQuantity(1)"><i class="fas fa-minus"></i></button><input class="form-control" type="text" id="product1-quantity" inputmode="numeric" pattern="\d*" value="1" autocomplete="off" required="" style="text-align: center;"><button class="btn btn-sm border rounded-circle" type="button" style="padding-right: 12px;padding-left: 12px;" onclick="increaseQuantity(&#39;1&#39;)"><i class="fas fa-plus"></i></button></form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex" style="background: #e3e0e0;padding-right: 10px;padding-left: 10px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                    <div class="col d-flex d-xxl-flex align-items-center align-items-xxl-center">
                        <h3 class="text-break d-xxl-flex align-items-xxl-center">Total (<span id="productQuantity" style="margin-right: 5px;"></span> Items)</h3>
                    </div>
                    <div class="col-auto justify-content-center align-items-end align-content-stretch">
                        <h3 class="text-break text-start" id="productTotalPrice"></h3>
                    </div>
                </div>
            </li>
        </ul>
        <div class="row" style="border-style: solid;margin: 2px;border-radius: 21px;padding: 5px;margin-top: 10px;margin-bottom: 10px;">
            <div class="col-6">
                <h3 style="margin-top: 10px;font-size: 16px;">Delivery to</h3>
            </div>
            <div class="col-6 text-end d-flex justify-content-end align-items-end">
                <h3 class="border rounded-pill" style="margin-top: 10px;padding: 0px;padding-left: 10px;padding-right: 10px;padding-top: 0px;font-size: 16px;">Home</h3>
            </div>
            <div class="col-12">
                <p class="text-break">Tan Khye Shen</p>
                <p class="text-break">0123456789</p>
                <p class="text-break">khyeshen91@gmail.com</p>
                <p class="text-break">2A-10-2, Waterfront Q1, Jalan Queens,<br>11900, Bayan Lepas, Pulau Pinang</p>
            </div>
            <div class="col-12 text-end"><a class="btn btn-danger btn-sm" role="button" style="padding-right: 8px;" href="Address.php">Change</a></div>
        </div>
        <div class="row g-0 d-flex" style="border-width: 1px;border-style: solid;border-radius: 20px;">
            <div class="col d-grid"><input type="text" id="promoCodeInput" style="border-radius: 0px;border-top-left-radius: 20px;border-bottom-left-radius: 20px;padding-left: 12px;height: 36px;" placeholder="Enter Promo Code Here"></div>
            <div class="col-1 d-grid"><button class="btn btn-primary btn-sm" id="PromoCodeBtn" type="button" style="padding-right: 0px;padding-left: 0px;border-radius: 0px;border-top-right-radius: 20px;border-bottom-left-radius: 0px;border-bottom-right-radius: 20px;background: var(--bs-red);padding-top: 0px;padding-bottom: 0px;margin-top: 0px;border-width: 1px;border-color: rgb(0,0,0);"><i class="fas fa-arrow-circle-right"></i></button></div>
        </div>
        <div class="alert alert-danger" role="alert" id="invalidPromoCodeMsg" style="display: none;"><span><strong>Warning</strong> Invalid Promo Code.</span></div>
        <div class="row" style="border-style: solid;margin: 2px;border-radius: 20px;padding: 5px;margin-top: 10px;margin-bottom: 10px;">
            <div class="col-12 text-center">
                <h1 style="font-size: 30px;">Payment Detail</h1>
            </div>
            <div class="col">
                <div class="row row-cols-2" style="border-top-style: groove;">
                    <div class="col d-flex d-xxl-flex align-items-center align-items-xxl-center">
                        <h1 class="text-break" style="font-size: 18px;">Price (&nbsp;<span id="TotalProductQuantity"></span>&nbsp;Items)</h1>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <h1 id="TotalProductsPrice" style="font-size: 18px;margin-bottom: 0px;"></h1>
                    </div>
                </div>
                <div class="row row-cols-2">
                    <div class="col d-flex d-xxl-flex align-items-center align-items-xxl-center">
                        <h1 style="font-size: 18px;">Member Point (&nbsp;<span id="MemberPointValue"></span>&nbsp;)</h1>
                    </div>
                    <div class="col d-flex justify-content-end form-check form-switch"><input type="checkbox" id="MemberPointChk" class="form-check-input" style="font-size: 18px;margin-left: -30px;"></div>
                </div>
                <div class="row row-cols-2" id="MemberPoint" style="display: none;">
                    <div class="col d-flex d-xxl-flex align-items-center align-items-xxl-center">
                        <h1 style="font-size: 18px;">Point ( 100 = RM1.00 )</h1>
                    </div>
                    <div class="col d-flex d-xxl-flex justify-content-end align-items-center align-items-xxl-center">
                        <h1 id="MemberPointConvert" style="font-size: 18px;"></h1>
                    </div>
                </div>
                <div class="row row-cols-2" id="PromoCodeBar">
                    <div class="col d-flex d-xxl-flex align-items-center align-items-xxl-center">
                        <h1 style="font-size: 18px;">Promo Code (<span id="PromoCodeValue"></span>)</h1>
                    </div>
                    <div class="col d-flex d-xxl-flex justify-content-end align-items-center align-items-xxl-center">
                        <h1 id="PromoCodeConvert" style="font-size: 18px;"></h1>
                    </div>
                </div>
                <div class="row row-cols-2" style="border-top-style: dotted;border-bottom-style: groove;">
                    <div class="col d-flex d-xxl-flex align-items-center align-items-xxl-center">
                        <h1 style="font-size: 18px;">Total Amount</h1>
                    </div>
                    <div class="col d-flex d-xxl-flex justify-content-end align-items-center align-items-xxl-center">
                        <h1 id="TotalCheckoutAmount" style="font-size: 18px;"></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="border-style: solid;margin: 2px;border-radius: 20px;margin-top: 10px;margin-bottom: 10px;">
            <div class="col d-xl-flex align-items-xl-center" style="padding-left: 20px;">
                <h1 id="FinalPrice" style="font-size: 34px;margin-bottom: 0px;margin-left: 19px;"></h1>
            </div>
            <div class="col d-grid" style="padding-right: 0px;padding-left: 0px;"><button class="btn btn-primary" type="button" style="font-size: 28px;background: var(--bs-red);border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-width: 0px;">Proceed</button></div>
        </div>
    </div>
    <!-- Footer -->
    <?php include 'Footer.php' ?>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="assets/js/checkout.js"></script>
    <script src="assets/js/ProductBrowsing.js"></script>
    <script src="assets/js/Profile.js"></script>
</body>

</html>