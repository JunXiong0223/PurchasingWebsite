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
    <!-- Nav -->
    <?php include 'Nav.php' ?>
    
    <div class="container" id="main" style="max-width: 500px;padding: 10px 20px;padding-bottom: 50px;">
        <div class="row">
            <div class="col-1 d-flex justify-content-center align-items-center"><a class="btn" role="button" href="Homepage.php"><i class="fas fa-chevron-left" style="font-size: 36px;"></i></a></div>
            <div class="col d-flex justify-content-center align-items-center justify-content-xl-center">
                <h1 style="margin-bottom: 0px;">Profile</h1>
            </div>
            <div class="col-1"></div>
        </div>
        <form class="mx-auto" style="margin-left: 10px;max-width: 500px;margin-top: 20px;">
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;"><strong>First Name</strong></label><input class="form-control" type="text" id="FirstName" disabled="" value="Khye Shen"><label class="form-label" style="margin-bottom: 0px;"><strong>Last Name</strong></label><input class="form-control" type="text" id="LastName" disabled="" value="Tan"></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" id="EditProfile" type="button" style="padding: 0px;" onclick="EditProfileName()"><i class="far fa-edit" style="font-size: 20px;"></i></button></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;"><strong>Email Address</strong></label><input class="form-control" type="text" id="email" disabled="" value="khyeshen91@gmail.com"></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" id="Editemail" type="button" style="padding: 0px;" onclick="EditEmail()"><i class="far fa-edit" style="font-size: 20px;"></i></button></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;"><strong>Member Point</strong></label><input class="form-control" type="text" placeholder="1020" disabled=""></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;"><strong>Shipping Address</strong></label><input class="form-control" type="text" id="shippingAddress" disabled="" value="2A-10-2, Waterfront Q1, Jalan Queens, 11900, Bayan Lepas, Pulau Pinang"></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" id="EditAddress" type="button" style="padding: 0px;" onclick="EditShippingAddress()"><i class="far fa-edit" style="font-size: 20px;"></i></button></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;"><strong>Phone Number</strong></label><input class="form-control" type="text" id="phoneNumber" disabled="" value="0123456789"></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" id="EditPhoneNumber" type="button" style="padding: 0px;" onclick="EditPhoneNO()"><i class="far fa-edit" style="font-size: 20px;"></i></button></div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;"><strong>Payment Method</strong></label><input class="form-control" type="text" id="paymentMethod" disabled="" value="**78 (VISA)"></div>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" id="EditPaymentMethod" type="button" style="padding: 0px;"><i class="far fa-edit" style="font-size: 20px;"></i></button></div>
            </div>
            <div class="row">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;"><strong>Password</strong></label></div><input class="form-control" type="password" disabled="" value="***************">
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center"><a class="btn" role="button" id="EditPassword" style="padding: 0px;" href="Change%20Passowrd.php"><i class="far fa-edit" style="font-size: 20px;"></i></a></div>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <?php include 'Footer.php' ?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="assets/js/checkout.js"></script>
    <script src="assets/js/ProductBrowsing.js"></script>
    <script src="assets/js/Profile.js"></script>
</body>

</html>