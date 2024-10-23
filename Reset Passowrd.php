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
    <div class="container" id="main" style="margin: 0px;padding: 0px 0px;padding-bottom: 50px;max-width: 100%;">
        <div class="row d-block" style="margin: 0px 0px;width: 100%;">
            <div class="col d-flex d-xxl-flex justify-content-center justify-content-xxl-center" style="padding-top: 0px;padding-right: 0px;padding-left: 0px;height: 88px;background: rgb(123,187,39);"><img class="img-fluid d-xxl-flex justify-content-xxl-center w-100" src="assets/img/Amaron%20header.jpg" style="padding: 0px;padding-top: 0px;max-width: 226px;height: 88px;max-height: 226px;text-align: center;"></div>
        </div>
        <div class="row" style="margin: 0px 0px;margin-top: 20px;">
            <div class="col-9 col-xxl-8 d-flex justify-content-center align-items-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center" style="text-align: justify;padding: 0px;width: 100%;">
                <h1 class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="margin-bottom: 0px;padding: 6px 0px;">Reset Password</h1>
            </div>
        </div>
        <form class="mx-auto justify-content-xxl-center changePasswordForm" style="max-width: 500px;padding: 20px 20px;" novalidate="">
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;" for="NewPassword">New Password</label><input class="form-control" type="password" id="NewPassword" placeholder="Current Password" required="" minlength="8" maxlength="16">
                        <div class="invalid-feedback"><span>Password must be between 8 and 16 characters</span></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;" for="NewPassword">Confirm New Password</label><input class="form-control" type="password" id="ConfirmNewPassword" placeholder="Current Password" required="" minlength="8" maxlength="16">
                        <div id="ErrorMes" class="invalid-feedback"><span>Password must be between 8 and 16 characters</span></div>
                        <div class="invisible" id="MisMatchPassword"><span>Password Not Match</span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center"><button class="btn btn-primary" type="submit" style="border-radius: 25px;padding-right: 30px;padding-left: 30px;margin: 0px 5px;">Confirm</button><a class="btn btn-primary" role="button" style="border-radius: 25px;padding-right: 30px;padding-left: 30px;margin: 0px 5px;background: #dc3545;" href="LoginPage_User.php">Cancel</a></div>
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