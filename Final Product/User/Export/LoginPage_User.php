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

<body class="flex-column" style="height: 100vh;display: flex;">
    <div class="container" id="main" style="margin-bottom: 10%;">
        <div class="row">
            <div class="col fixed-top" style="padding-top: 0px;padding-right: 0px;padding-left: 0px;"><img class="img-fluid w-100" src="assets/img/black_970x90.gif" style="padding: 0px;padding-top: 0px;"></div>
            <div class="col d-flex justify-content-center align-items-center" style="padding: 6px 12px;margin-top: 20%;">
                <div class="card" style="background: rgba(255,255,255,0);border-radius: 20px;border-width: 0px;box-shadow: 0px 3px 5px 1px rgba(33,37,41,0.18);padding: 6px 12px;height: 100%;width: 80%;">
                    <div class="card-body" style="padding: 6px 12px;">
                        <form style="padding: 6px 12px;"><label class="form-label" style="color: rgb(0,0,0);font-weight: bold;">Email Address</label><input class="form-control" type="text" inputmode="email" placeholder="Email Address" style="width: 100%;border-radius: 0px;border-width: 0px;box-shadow: 0px 3px 5px 1px rgba(33,37,41,0.18);"></form>
                        <form style="padding: 6px 12px;"><label class="form-label" style="color: rgb(0,0,0);font-weight: bold;">Password</label><input class="form-control" type="password" placeholder="Password" style="border-radius: 0px;box-shadow: 0px 3px 5px 1px rgba(33,37,41,0.18);border-width: 0px;"></form>
                    </div>
                    <div class="col" id="forgetpasswordbtn" style="text-align: right;padding: 6px 12px;font-size: 12px;"><a class="btn btn-primary" role="button" style="color: rgb(0,0,0);font-weight: bold;font-size: 14px;background: rgba(255,255,255,0);border-width: 0px;padding: 0px 12px;" href="Reset%20Passowrd.php">Forgot your password?</a></div>
                    <div class="col" id="loginbtn" style="text-align: center;padding: 6px 12px;"><a class="btn btn-primary" role="button" style="color: rgb(255,255,255);font-weight: bold;font-size: 12px;background: rgb(247,73,73);border-width: 0px;padding: 6px 12px;width: 50%;height: 100%;border-radius: 20px;" href="Homepage.php">LOGIN</a></div>
                    <div class="col" id="signupbtn" style="text-align: center;padding: 6px 12px;"><a class="btn btn-primary" role="button" style="color: rgb(255,255,255);font-weight: bold;font-size: 12px;background: rgb(247,73,73);border-width: 0px;padding: 6px 12px;width: 50%;height: 100%;border-radius: 20px;" href="SignUpPage_User.php">SIGN UP</a></div>
                </div>
            </div>
        </div>
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