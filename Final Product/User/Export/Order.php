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
    <nav class="navbar navbar-light navbar-expand-sm d-flex">
        <div class="container"><button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="#">Brand</a><a class="btn btn-primary d-flex flex-sm-row-reverse order-sm-last flex-md-row-reverse" role="button" style="background: rgba(13,110,253,0);border-width: 0px;padding: 0px;padding-left: 0px;margin-left: 10px;" href="Cart.html"><i class="fas fa-shopping-cart order-sm-last" style="font-size: 22px;color: rgb(0,0,0);"></i><span id="cartCount" style="background: #ff0000;color: rgb(255,255,255);border-radius: 50%;font-size: 12px;padding: 2px 6px;">0</span></a>
            <form class="d-flex flex-fill align-content-center ms-auto" style="width: 440px;max-width: 720px;margin-top: 5px;"><input class="form-control" type="search"><button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button></form>
            <div class="collapse navbar-collapse flex-grow-0 ms-auto" id="navcol-2">
                <ul class="navbar-nav d-xxl-flex ms-auto">
                    <li class="nav-item d-sm-flex align-items-sm-center"><a class="nav-link active" href="#">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item d-flex d-xl-flex flex-grow-1 align-items-center">
                        <div class="nav-item dropstart" data-bs-smooth-scroll="true"><a aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="far fa-user" style="font-size: 24px;"></i></a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Change Password</a><a class="dropdown-item" href="#">Feedback</a><a class="dropdown-item" href="#">Logout</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" id="main" style="max-width: 850px;">
        <div class="row">
            <div class="col-1 d-inline-flex"><a class="btn d-flex align-items-center" role="button" rel="prev" href="Homepage.html"><i class="fas fa-chevron-left fs-2"></i></a></div>
            <div class="col-10 d-flex justify-content-center align-items-center">
                <h1 style="margin-bottom: 0px;">My Orders</h1>
            </div>
            <div class="col-1"></div>
        </div>
        <div>
            <ul class="nav nav-pills nav-justified" role="tablist" style="padding-bottom: 5px;">
                <li class="nav-item" role="presentation" style="border-radius: 0px;border-color: rgb(255,255,255);"><a class="nav-link custom" role="tab" data-bs-toggle="pill" href="#tab-1" style="border-radius: 25px;">Delivered</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active custom" role="tab" data-bs-toggle="pill" href="#tab-2" style="margin-bottom: 5px;border-radius: 25px;/*background-color: red;*/">Processing</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link custom" role="tab" data-bs-toggle="pill" href="#tab-3" style="border-radius: 25px;">Cancelled</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" role="tabpanel" id="tab-1">
                    <ul class="list-group">
                        <li class="list-group-item" style="margin-bottom: 10px;margin-top: 10px;border-width: 2px;border-radius: 10px;box-shadow: 0px 0px 4px 1px;">
                            <div class="row">
                                <div class="col-7 d-inline-flex align-items-center align-items-xxl-center">
                                    <h5 style="margin-bottom: 0px;margin-right: 10px;">Order No:</h5><span class="d-xxl-flex align-items-xxl-center">1947034</span>
                                </div>
                                <div class="col-5">
                                    <h4 class="text-end" style="font-family: Abel, sans-serif;">05-12-2024</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center align-items-xl-center">
                                    <h4 style="margin-bottom: 0px;">Tracking Number:&nbsp;</h4><span><br>IW3444615234<br><br></span>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 5px;padding-top: 5px;">
                                <div class="col-7 d-xxl-flex justify-content-xxl-start">
                                    <h3>Total Amount:</h3>
                                </div>
                                <div class="col-5 d-flex justify-content-sm-end justify-content-xxl-end" style="padding-right: 0px;padding-left: 0px;">
                                    <h3>RM 9595.00</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"><button class="btn" type="button" style="font-style: italic;border-radius: 22px;border-color: var(--bs-list-group-color);padding-right: 30px;padding-left: 30px;">Details</button></div>
                                <div class="col-6 text-end">
                                    <h3 style="margin-bottom: 0px;font-family: Abel, sans-serif;">Deliverd</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane active" role="tabpanel" id="tab-2">
                    <ul class="list-group">
                        <li class="list-group-item" style="margin-bottom: 10px;margin-top: 10px;border-width: 2px;border-radius: 10px;box-shadow: 0px 0px 4px 1px;">
                            <div class="row">
                                <div class="col-7 d-inline-flex align-items-center align-items-xxl-center">
                                    <h5 style="margin-bottom: 0px;margin-right: 10px;">Order No:</h5><span class="d-xxl-flex align-items-xxl-center">1947034</span>
                                </div>
                                <div class="col-5">
                                    <h4 class="text-end" style="font-family: Abel, sans-serif;">05-12-2024</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center align-items-xl-center">
                                    <h4 style="margin-bottom: 0px;">Tracking Number:&nbsp;</h4><span><br>IW3444615234<br><br></span>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 5px;padding-top: 5px;">
                                <div class="col-7 d-xxl-flex justify-content-xxl-start">
                                    <h3>Total Amount:</h3>
                                </div>
                                <div class="col-5 d-flex justify-content-sm-end justify-content-xxl-end" style="padding-right: 0px;padding-left: 0px;">
                                    <h3>RM 9595.00</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"><a class="btn" role="button" style="font-style: italic;border-radius: 22px;border-color: var(--bs-list-group-color);padding-right: 30px;padding-left: 30px;" href="OrderDetail.html">Details</a></div>
                                <div class="col-6 text-end">
                                    <h3 style="margin-bottom: 0px;font-family: Abel, sans-serif;">Processing</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-3">
                    <ul class="list-group">
                        <li class="list-group-item" style="margin-bottom: 10px;margin-top: 10px;border-width: 2px;border-radius: 10px;box-shadow: 0px 0px 4px 1px;">
                            <div class="row">
                                <div class="col-7 d-inline-flex align-items-center align-items-xxl-center">
                                    <h5 style="margin-bottom: 0px;margin-right: 10px;">Order No:</h5><span class="d-xxl-flex align-items-xxl-center">1947034</span>
                                </div>
                                <div class="col-5">
                                    <h4 class="text-end" style="font-family: Abel, sans-serif;">05-12-2024</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center align-items-xl-center">
                                    <h4 style="margin-bottom: 0px;">Tracking Number:&nbsp;</h4><span><br>IW3444615234<br><br></span>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 5px;padding-top: 5px;">
                                <div class="col-7 d-xxl-flex justify-content-xxl-start">
                                    <h3>Total Amount:</h3>
                                </div>
                                <div class="col-5 d-flex justify-content-sm-end justify-content-xxl-end" style="padding-right: 0px;padding-left: 0px;">
                                    <h3>RM 9595.00</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"><button class="btn" type="button" style="font-style: italic;border-radius: 22px;border-color: var(--bs-list-group-color);padding-right: 30px;padding-left: 30px;">Details</button></div>
                                <div class="col-6 text-end">
                                    <h3 style="margin-bottom: 0px;font-family: Abel, sans-serif;">Cancelled</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-white bg-dark">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <h3 class="fs-4 text-white"><strong>Contact Us</strong></h3>
                    <ul class="list-unstyled">
                        <li><a class="link-light" href="#"><i class="fas fa-phone-alt" style="margin-right: 5px;"></i>03-2288-2888</a></li>
                        <li><a class="link-light" href="#"><i class="fas fa-mail-bulk" style="margin-right: 5px;"></i>support@amaron.com</a></li>
                        <li><a class="link-light" href="#"><i class="fab fa-whatsapp" style="margin-right: 5px;"></i>012345678/WhatsApp.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <h3 class="fs-4 text-white"><strong>Find Us</strong></h3>
                    <ul class="list-unstyled">
                        <li><a class="link-light" href="#"><i class="fas fa-location-arrow" style="margin-right: 5px;"></i>Seberang Perai</a></li>
                        <li><a class="link-light" href="#"><i class="fas fa-location-arrow" style="margin-right: 5px;"></i>Bayan Lepas</a></li>
                        <li><a class="link-light" href="#"><i class="fas fa-location-arrow" style="margin-right: 5px;"></i>Jelutong</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <h3 class="fs-4 text-white"><strong>Customer Care</strong></h3>
                    <ul class="list-unstyled">
                        <li><a class="link-light" href="#">Warranty</a></li>
                        <li><a class="link-light" href="#">Payment</a></li>
                        <li><a class="link-light" href="#">Operation Hours</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last">
                    <h3 class="fs-4 text-white"><strong>Brand</strong></h3><img src="assets/img/Amaron%20header.jpg" width="63" height="64">
                    <figure class="figure"></figure>
                </div>
            </div>
            <hr>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="assets/js/Address.js"></script>
    <script src="assets/js/checkout.js"></script>
    <script src="assets/js/ProductBrowsing.js"></script>
    <script src="assets/js/ProductDetail.js"></script>
</body>

</html>