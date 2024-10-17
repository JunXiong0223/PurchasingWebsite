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
            <div class="col-1 d-flex justify-content-center align-items-center"><button class="btn" type="button"><i class="fas fa-chevron-left" style="font-size: 36px;"></i></button></div>
            <div class="col d-flex justify-content-start align-items-center">
                <h1 style="margin-bottom: 0px;">Change Password</h1>
            </div>
            <div class="col-1"></div>
        </div>
        <form class="mx-auto justify-content-xxl-center changePasswordForm" style="max-width: 500px;" novalidate="">
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <div><label class="form-label" style="margin-bottom: 0px;" for="CurrentPassword">Current Password</label><input class="form-control" type="password" id="CurrentPassword" placeholder="Current Password" required="" minlength="8" maxlength="16">
                        <div class="invalid-feedback"><span>Password must be between 8 and 16 characters</span></div>
                    </div>
                </div>
            </div>
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
                <div class="col d-flex justify-content-lg-center"><a class="btn btn-primary" role="button" style="border-radius: 25px;padding-right: 30px;padding-left: 30px;" href="Homepage.php">Confirm</a></div>
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