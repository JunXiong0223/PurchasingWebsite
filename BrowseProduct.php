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
    <nav class="navbar navbar-light navbar-expand-sm d-flex">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="#">Brand</a><i class="fas fa-shopping-cart order-sm-last" style="font-size: 22px;margin-left: 10px;"></i>
            <form class="d-flex flex-fill align-content-center ms-auto" style="width: 440px;max-width: 720px;">
                <div class="input-group"><input class="form-control" type="text" id="searchInput" placeholder="Seach by car model..."><button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button></div>
                <div class="dropdown" id="suggestionsList"><a class="undefined rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end rounded-end" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                    <div class="dropdown-menu"></div>
                </div>
            </form>
            <div class="collapse navbar-collapse flex-grow-0 ms-auto" id="navcol-1">
                <ul class="navbar-nav d-xxl-flex ms-auto">
                    <li class="nav-item d-sm-flex align-items-sm-center"><a class="nav-link active" href="#">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item d-flex d-xl-flex flex-grow-1 align-items-center">
                        <div class="nav-item dropstart" data-bs-smooth-scroll="true"><a aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="far fa-user" style="font-size: 24px;"></i></a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container main">
        <div class="row">
            <div class="col-6" style="padding: 6px 12px;">
                <h5>All Products</h5>
            </div>
            <div class="col" style="text-align: right;">
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="color: rgb(0,0,0);background: rgb(255,255,255);border-width: 0px;padding: 6px 12px;">Filter By</button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Order: A to Z</a><a class="dropdown-item" href="#">Order: Z to A</a><a class="dropdown-item" href="#">Price: Low to High</a><a class="dropdown-item" href="#">Price: High to Low</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-3 col-sm-6" style="padding: 6px 12px;">
                <div class="card">
                    <div class="card-header" style="background: rgba(217,217,217,0.6);"><img class="img-fluid" src="assets/img/duracelbattery-removebg-preview.png"></div>
                    <div class="card-body">
                        <h4 class="card-title">Battery A</h4>
                        <h6>RM999.99</h6><a class="btn btn-primary" role="button" href="ProductDetail.html">View more...</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6" style="padding: 6px 12px;">
                <div class="card">
                    <div class="card-header" style="background: rgba(217,217,217,0.6);"><img class="img-fluid" src="assets/img/duracelbattery-removebg-preview.png"></div>
                    <div class="card-body">
                        <h4 class="card-title">Battery A</h4>
                        <h6>RM999.99</h6><a class="btn btn-primary" role="button" href="ProductDetail.html">View more...</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6" style="padding: 6px 12px;">
                <div class="card">
                    <div class="card-header" style="background: rgba(217,217,217,0.6);"><img class="img-fluid" src="assets/img/duracelbattery-removebg-preview.png"></div>
                    <div class="card-body">
                        <h4 class="card-title">Battery A</h4>
                        <h6>RM999.99</h6><a class="btn btn-primary" role="button" href="ProductDetail.html">View more...</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6" style="padding: 6px 12px;">
                <div class="card">
                    <div class="card-header" style="background: rgba(217,217,217,0.6);"><img class="img-fluid" src="assets/img/duracelbattery-removebg-preview.png"></div>
                    <div class="card-body">
                        <h4 class="card-title">Battery A</h4>
                        <h6>RM999.99</h6><a class="btn btn-primary" role="button" href="ProductDetail.html">View more...</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6" style="padding: 6px 12px;">
                <div class="card">
                    <div class="card-header" style="background: rgba(217,217,217,0.6);"><img class="img-fluid" src="assets/img/duracelbattery-removebg-preview.png"></div>
                    <div class="card-body">
                        <h4 class="card-title">Battery A</h4>
                        <h6>RM999.99</h6><a class="btn btn-primary" role="button" href="ProductDetail.html">View more...</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6" style="padding: 6px 12px;">
                <div class="card">
                    <div class="card-header" style="background: rgba(217,217,217,0.6);"><img class="img-fluid" src="assets/img/duracelbattery-removebg-preview.png"></div>
                    <div class="card-body">
                        <h4 class="card-title">Battery A</h4>
                        <h6>RM999.99</h6><a class="btn btn-primary" role="button" href="ProductDetail.html">View more...</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6" style="padding: 6px 12px;">
                <div class="card">
                    <div class="card-header" style="background: rgba(217,217,217,0.6);"><img class="img-fluid" src="assets/img/duracelbattery-removebg-preview.png"></div>
                    <div class="card-body">
                        <h4 class="card-title">Battery A</h4>
                        <h6>RM999.99</h6><a class="btn btn-primary" role="button" href="ProductDetail.html">View more...</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-6" style="padding: 6px 12px;">
                <div class="card">
                    <div class="card-header" style="background: rgba(217,217,217,0.6);"><img class="img-fluid" src="assets/img/duracelbattery-removebg-preview.png"></div>
                    <div class="card-body">
                        <h4 class="card-title">Battery A</h4>
                        <h6>RM999.99</h6><a class="btn btn-primary" role="button" href="ProductDetail.html">View more...</a>
                    </div>
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