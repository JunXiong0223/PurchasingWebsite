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

<body>
    <!-- Nav -->
    <?php include 'Nav.php' ?>

    <div class="container" style="padding: 10px 12px;padding-bottom: 50px;">
        <div class="alert alert-success d-none alert-dismissible" role="alert" id="successMessage"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <h4 class="alert-heading">Succesful!</h4><span><strong>Item successfully added to cart</strong>.</span>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;"><img src="assets/img/duracelbattery-removebg-preview.png" width="330" height="250" style="margin-left: 0px;text-align: center;padding-top: 0px;margin-bottom: 10px;margin-top: 20px;"></div>
            <div class="col" style="padding: 20px 12px;">
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <h3 class="text-break d-flex align-items-center" style="font-weight: bold;height: 80px;padding-top: 0px;padding-bottom: 0px;line-height: 24.6px;text-align: left;">Duracell Ultra Car Battery – 12V, 750 CCA</h3>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col">
                        <p style="font-size: 20px;"><strong>RM100.00 each</strong></p>
                    </div>
                    <div class="col" style="padding-right: 0px;padding-left: 0px;margin-bottom: 0px;text-align: right;">
                        <form class="d-inline-flex"><button class="btn btn-primary" type="button" onclick="decreasePDQuantity()" style="width: 38px;height: 38px;font-size: 20px;text-align: center;line-height: 0px;background: rgba(31,97,195,0);color: rgb(0,0,0);font-weight: bold;margin-right: 0px;border-radius: 50%;padding-left: 10px;border-width: 0px;border-color: rgba(33,37,41,0.35);"><i class="fas fa-minus" style="padding: 0px;padding-right: 0px;padding-left: 0px;font-size: 20px;"></i></button><input class="form-control" type="text" id="PDQuantityInput" style="width: 100px;text-align: center;font-weight: bold;" inputmode="numeric" pattern="\d*" value="1" autocomplete="off" required=""><button class="btn btn-primary" type="button" onclick="increasePDQuantity()" style="width: 38px;height: 38px;text-align: center;font-weight: bold;font-size: 20px;margin: 0px;margin-left: 0px;line-height: 0px;color: rgb(0,0,0);background: rgba(13,110,253,0);border-radius: 50%;margin-right: 10px;padding: 0px;padding-left: 2px;border-width: 0px;border-color: rgba(0,0,0,0.35);"><i class="fas fa-plus"></i></button></form>
                    </div>
                </div><button class="btn btn-primary" id="btnaddtocart" type="button" style="font-size: 20px;width: 150px;border-radius: 20px;font-weight: bold;border-width: 0px;margin-right: 10px;">Add to Cart</button><button class="btn btn-primary" type="button" style="width: 150px;font-size: 20px;border-radius: 20px;background: rgb(245,19,4);font-weight: bold;border-width: 0px;">Need Now</button>
                <div class="accordion" role="tablist" id="accordion-1" style="margin-top: 10px;margin-bottom: 10px;">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true" aria-controls="accordion-1 .item-1" style="font-weight: bold;">Description</button></h2>
                        <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#accordion-1" id="collapseDescription">
                            <div class="accordion-body">
                                <p class="mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2" style="font-weight: bold;">Specifications</button></h2>
                        <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1" id="collapseSpecifications">
                            <div class="accordion-body">
                                <p class="mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3" style="font-weight: bold;">Key Features</button></h2>
                        <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1" id="collapseKeyFeatures">
                            <div class="accordion-body">
                                <p class="mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include 'Footer.php' ?>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="assets/js/checkout.js"></script>
    <script src="assets/js/ProductBrowsing.js"></script>
    <script src="assets/js/ProductDetail.js"></script>
    <script src="assets/js/Profile.js"></script>
</body>

</html>