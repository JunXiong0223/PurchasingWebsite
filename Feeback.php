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

<body class="flex-column" style="min-height: 100vh;display: flex;">
    <!-- Nav -->
    <?php include 'Nav.php' ?>

    <div class="container main" style="padding: 10px 12px;padding-bottom: 50px;">
        <form class="text-start" style="margin: 10px;">
            <div>
                <h1 class="text-center">Feedback Form</h1>
            </div>
            <div class="mb-3"><small>Email</small>
                <div class="input-group"><input class="form-control InputBorder" type="email" placeholder="Your e-mail" style="/*border: 0;*//*border-width: 0 0 1px 0;*//*border-color: black;*//*border-radius: 0;*/"></div>
            </div>
            <div class="mb-3"><small>Phone Number (Optional)</small>
                <div class="input-group"><input class="form-control InputBorder" type="tel" placeholder="e.g. 012-345678" style="/*border: 0;*//*border-width: 0 0 1px 0;*//*border-color: black;*//*border-radius: 0;*/"></div>
            </div>
            <div class="mb-3"><small>Name</small>
                <div class="input-group"><input class="form-control InputBorder" type="email" placeholder="Your Name" style="/*border: 0;*//*border-width: 0 0 1px 0;*//*border-color: black;*//*border-radius: 0;*/"></div>
            </div>
            <div class="mb-3"><small>Feedback</small>
                <div class="input-group"><textarea class="form-control" style="height: 278px;border-width: 1px;border-color: rgb(0,7,14);"></textarea></div>
            </div>
            <div class="text-center"><a class="btn btn-primary text-center" role="button" style="margin: 0px 5px;border-radius: 25px;" href="Homepage.php">Submit</a><a class="btn btn-primary text-center" role="button" style="margin: 0px 5px;background: var(--bs-red);border-radius: 25px;padding: 6px 12px;" href="Homepage.php">Cancel</a></div>
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