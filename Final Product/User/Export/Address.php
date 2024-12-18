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
    <div class="container-fluid" id="main" style="max-width: 850px;">
        <div class="row">
            <div class="col">
                <h1>Address</h1>
            </div>
        </div>
        <div class="col">
            <div class="text-end"><a class="btn" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1" role="button">Set Alternative Address</a>
                <div class="collapse show" id="collapse-1">
                    <div class="row">
                        <div class="col-12 text-start d-lg-flex align-items-lg-center" id="searchContainer" style="padding-top: 4px;padding-bottom: 4px;"><input type="search" id="searchBox" style="padding-bottom: 0px;padding-top: 0px;" placeholder="Search Location"><button class="btn btn-sm" id="searchButton" type="button" style="padding-bottom: 2px;padding-top: 2px;border-style: solid;border-color: var(--bs-btn-color);">Button</button></div>
                        <div class="col-12" id="map"></div>
                        <div class="col-12" style="padding-bottom: 12px;">
                            <form>
                                <div class="text-start form-group"><label class="form-label" for="inputRecipientName">Recipient Name</label><input class="form-control" type="text" id="inputRecipientName"></div>
                                <div class="text-start form-group"><label class="form-label" for="inputContactNo">Contact No</label><input class="form-control" type="text" id="inputContactNo" inputmode="tel"></div>
                                <div class="text-start form-group"><label class="form-label" for="inputEmailAddress">Email Address</label><input class="form-control" type="text" id="inputEmailAddress" inputmode="email"></div>
                                <div class="text-start form-group"><label class="form-label" for="inputAddress">Address</label><input class="form-control" type="text" id="inputAddress"></div>
                                <div class="row">
                                    <div class="col-md-6 text-start form-group" for="inputCity"><label class="form-label" for="inputCity"><span style="background-color: transparent;">City</span></label><input class="form-control" type="text" id="inputCity"></div>
                                    <div class="col-md-4 text-start"><label class="form-label" for="inputState"><span style="background-color: transparent;">State</span></label><select class="form-select form-control" id="inputState">
                                            <option value="" selected="">Select a state</option>
                                            <option value="Johor">Johor</option>
                                            <option value="Kedah">Kedah</option>
                                            <option value="Kelantan">Kelantan</option>
                                            <option value="Melaka">Melaka</option>
                                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                                            <option value="Pahang">Pahang</option>
                                            <option value="Perak">Perak</option>
                                            <option value="Perlis">Perlis</option>
                                            <option value="Penang">Penang</option>
                                            <option value="Sabah">Sabah</option>
                                            <option value="Sarawak">Sarawak</option>
                                            <option value="Selangor">Selangor</option>
                                            <option value="Terengganu">Terengganu</option>
                                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                                            <option value="Labuan">Labuan</option>
                                            <option value="Putrajaya">Putrajaya</option>
                                        </select></div>
                                    <div class="col-md-2 text-start"><label class="form-label" for="inputZip"><span style="background-color: transparent;">Zip</span></label><input class="form-control" type="text" id="inputZip"></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 text-center d-xl-flex justify-content-xl-center" style="padding: 10px;"><button class="btn" id="showMap" type="button" style="border-radius: 20px;border-color: var(--bs-btn-color);">Use Current Location<i class="fas fa-map-pin" style="font-size: 20px;"></i></button></div>
                        <div class="col-12 text-center d-xl-flex justify-content-xl-center" style="padding: 10px;"><a class="btn" role="button" id="confirm" style="border-radius: 20px;border-color: var(--bs-btn-color);" href="CheckoutSearchAddress.html">Confirm</a></div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-group" style="margin-top: 10px;margin-bottom: 10px;">
            <li class="list-group-item product-1" style="padding-left: 12px;padding-right: 12px;padding-bottom: 0px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-width: 0px;border-style: none;">
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-remove">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Remove Item</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you want to remove this item?</p>
                            </div>
                            <div class="modal-footer" style="padding-top: 0px;padding-left: 12px;padding-bottom: 0px;"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-success" type="button">Confirm</button></div>
                        </div>
                    </div>
                </div>
                <div class="row g-0" style="border-radius: 4px;padding: 5px;box-shadow: 1px 1px 4px 1px;border-width: 1px;">
                    <div class="col-10 d-grid d-xxl-flex align-items-xxl-center">
                        <h5 class="d-flex align-items-center" style="margin: 0px;margin-bottom: 0px;">Jane Doe</h5>
                    </div>
                    <div class="col-2 text-end"><button class="btn btn-sm" type="button">Edit</button></div>
                    <div class="col-10">
                        <p class="d-flex align-items-center">3 Newbridge Court, Chino Hills, CA 91709, United States</p>
                    </div>
                    <div class="col-12">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2" checked=""><label class="form-check-label" for="formCheck-2">Use as the shipping address</label></div>
                    </div>
                </div>
            </li>
        </ul>
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