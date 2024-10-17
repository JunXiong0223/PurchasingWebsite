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
    
    <div class="container" id="main" style="max-width: 900px;">
        <div class="row">
            <div class="col-1 d-flex justify-content-center align-items-center"><a class="btn" role="button" href="Homepage.php"><i class="fas fa-chevron-left" style="font-size: 36px;"></i></a></div>
            <div class="col d-flex justify-content-start align-items-center">
                <h1 style="margin-bottom: 0px;">Profile</h1>
            </div>
            <div class="col-1"></div>
        </div>
        <form class="mx-auto" style="margin-right: 10px;margin-left: 10px;max-width: 500px;">
            <div class="row" style="margin-bottom: 10px;">
                <div class="col-2 d-flex align-items-center justify-content-xl-center"><img class="rounded-circle img-fluid" src="assets/img/Car%20Battery.png" width="35" height="35"></div>
                <div class="col">
                    <div><input class="form-control" type="text" id="Username" placeholder="User Name" disabled=""><input class="form-control" type="text" id="email" placeholder="Email" disabled=""></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" id="EditNameEmail" type="button" style="padding: 0px;" onclick="EditProfileName()"><i class="far fa-edit" style="font-size: 20px;"></i></button></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;">Member Point</label><input class="form-control" type="text" placeholder="Email" disabled=""></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;">Shipping Address</label><input class="form-control" type="text" id="shippingAddress" placeholder="Shipping Address" disabled=""></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" id="EditAddress" type="button" style="padding: 0px;" onclick="EditShippingAddress()"><i class="far fa-edit" style="font-size: 20px;"></i></button></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;">Phone Number</label><input class="form-control" type="text" id="phoneNumber" placeholder="Phone Number" disabled=""></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" id="EditPhoneNumber" type="button" style="padding: 0px;" onclick="EditPhoneNO()"><i class="far fa-edit" style="font-size: 20px;"></i></button></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;">Payment Method</label><input class="form-control" type="text" id="paymentMethod" placeholder="Payment Method" disabled=""></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" id="EditPaymentMethod" type="button" style="padding: 0px;"><i class="far fa-edit" style="font-size: 20px;"></i></button></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;">Password</label></div><input class="form-control" type="password" disabled="" value="***************">
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><a class="btn" role="button" id="EditPassword" style="padding: 0px;" href="Change%20Passowrd.php"><i class="far fa-edit" style="font-size: 20px;"></i></a></div>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <?php include 'Footer.php' ?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="assets/js/Address.js"></script>
    <script src="assets/js/checkout.js"></script>
    <script src="assets/js/ProductBrowsing.js"></script>
    <script src="assets/js/ProductDetail.js"></script>
</body>

</html>