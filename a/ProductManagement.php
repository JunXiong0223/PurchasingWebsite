<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/alert.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Tabs-with-Arrows.css">
    <link rel="stylesheet" href="assets/css/Form-Input.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/TableCell_CenteredStatus.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark bg-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="--bs-primary: #131318;--bs-primary-rgb: 19,19,24;color: rgb(24,24,25);background: var(--bs-black);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar-1">
                    <li class="nav-item"><a class="nav-link" href="Dashboard.php"><i class="fas fa-tachometer-alt" style="margin: 0px;width: 20px;text-align: center;"></i><span style="padding: 0px 4px;">Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="AdminOrder.php"><i class="fas fa-shopping-cart" style="margin-right: 0px;width: 20px;text-align: center;"></i><span style="padding: 0px 4px;">Order</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="AdminPayment.php"><i class="fas fa-money-bill-wave" style="width: 20px;height: 14px;margin: 0px;text-align: center;"></i><span style="padding: 0px 4px;">Payment</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Staff%20List.php"><i class="fas fa-users" style="margin-right: 0px;width: 20px;text-align: center;"></i><span style="padding: 0px 4px;">Staff</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="User%20List.php"><i class="fas fa-user" style="width: 20px;height: 20px;margin-right: 0px;text-align: center;"></i><span style="padding: 0px 4px;">User</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="ProductManagement.php"><i class="fas fa-box" style="width: 20px;height: 20px;margin: 0px;text-align: center;"></i><span style="padding: 0px 4px;">Product</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Inventory%20List.php"><i class="fas fa-boxes" style="margin-right: 0px;text-align: center;width: 20px;"></i><span style="padding: 0px 4px;">Inventory</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="LoginPage_Admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-logout" style="width: 20px;height: 14px;text-align: center;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                            </svg><span style="padding: 0px 4px;">Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="background: #ffffff;">
                <nav class="navbar navbar-light navbar-expand bg-dark shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop-1" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Khye Shen</span><i class="far fa-user d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 28px;width: 32px;height: 32px;"></i></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="LoginPage_Admin.php"><i class="fab fa-expeditedssl fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Change Password</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="LoginPage_Admin.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" style="background: #ffffff;">
                    <div class="row" style="margin: 0px;">
                        <div class="col">
                            <h2>Product Management</h2>
                        </div>
                        <div class="col-xxl-2" id="add" style="width: 120px;padding: 0px 12px;"><button class="btn btn-primary" type="button" style="width: 95px;font-weight: bold;color: rgb(255,255,255);background: #0bbc1d;border-width: 0px;" data-bs-target="#addProductsOffcanvas" data-bs-toggle="offcanvas"><i class="fas fa-plus-square" style="border-color: rgb(255,255,255);color: rgb(255,255,255);background: rgba(255,255,255,0);font-size: 18px;"></i>&nbsp; Add</button></div>
                    </div>
                    <div class="row" style="margin: 0px;">
                        <div class="col-12" style="padding: 0px;">
                            <div class="table-responsive" style="padding: 0px;background: rgb(255,255,255);border-width: 5px;">
                                <table class="table table-hover table-sm" id="productmanagementtable">
                                    <thead style="border-width: 1px;border-style: solid;border-radius: 0px;">
                                        <tr class="table-dark" style="color: #ffffff;">
                                            <th style="text-align: center;color: #ffffff;font-weight: bold;padding: 8px 0px;">Image</th>
                                            <th style="text-align: center;color: #ffffff;font-weight: bold;padding: 8px 0px;">Brand</th>
                                            <th style="text-align: center;color: #ffffff;font-weight: bold;padding: 8px 0px;">Product Name</th>
                                            <th style="text-align: center;width: 120px;color: #ffffff;font-weight: bold;padding: 8px 0px;">Price</th>
                                            <th style="text-align: center;width: 120px;color: #ffffff;font-weight: bold;padding: 8px 0px;">Quantity</th>
                                            <th style="text-align: center;color: #ffffff;font-weight: bold;width: 120px;padding: 8px 0px;">Status</th>
                                            <th style="text-align: center;width: 120px;color: #ffffff;font-weight: bold;padding: 8px 0px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="border-width: 1px;border-style: solid;">
                                        <tr>
                                            <td style="text-align: center;"><img src="assets/img/duracelbattery-removebg-preview.png" width="120px"></td>
                                            <td style="color: rgb(0,0,0);text-align: center;">Brand A</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Battery1</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">RM999.99</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">9999</td>
                                            <td>
                                                <div class="col form-check form-switch"><input type="checkbox" class="form-check-input" checked=""></div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background: rgb(13,110,253);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#editProductsOffcanvas" data-bs-toggle="offcanvas"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">edit</i></button><button class="btn btn-primary" type="button" style="background: rgb(231,74,59);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#deleteProductsModal" data-bs-toggle="modal"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">delete</i></button></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><img src="assets/img/duracelbattery-removebg-preview.png" width="120px"></td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Brand B</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Battery2</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">RM999.99</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">9999</td>
                                            <td style="text-align: center;">
                                                <div class="col form-check form-switch"><input type="checkbox" class="form-check-input" checked=""></div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background: rgb(13,110,253);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#editProductsOffcanvas" data-bs-toggle="offcanvas"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">edit</i></button><button class="btn btn-primary" type="button" style="background: rgb(231,74,59);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#deleteProductsModal" data-bs-toggle="modal"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">delete</i></button></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><img src="assets/img/duracelbattery-removebg-preview.png" width="120px"></td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Brand C</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Battery3</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">RM999.99</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">9999</td>
                                            <td style="text-align: center;">
                                                <div class="col form-check form-switch"><input type="checkbox" class="form-check-input" checked=""></div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background: rgb(13,110,253);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#editProductsOffcanvas" data-bs-toggle="offcanvas"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">edit</i></button><button class="btn btn-primary" type="button" style="background: rgb(231,74,59);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#deleteProductsModal" data-bs-toggle="modal"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">delete</i></button></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><img src="assets/img/duracelbattery-removebg-preview.png" width="120px"></td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Brand D</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Battery4</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">RM999.99</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">9999</td>
                                            <td style="text-align: center;">
                                                <div class="col form-check form-switch"><input type="checkbox" class="form-check-input" checked=""></div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background: rgb(13,110,253);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#editProductsOffcanvas" data-bs-toggle="offcanvas"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">edit</i></button><button class="btn btn-primary" type="button" style="background: rgb(231,74,59);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#deleteProductsModal" data-bs-toggle="modal"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">delete</i></button></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><img src="assets/img/duracelbattery-removebg-preview.png" width="120px"></td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Brand E</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Battery5</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">RM999.99</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">9999</td>
                                            <td style="text-align: center;">
                                                <div class="col form-check form-switch"><input type="checkbox" class="form-check-input" checked=""></div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background: rgb(13,110,253);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#editProductsOffcanvas" data-bs-toggle="offcanvas"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">edit</i></button><button class="btn btn-primary" type="button" style="background: rgb(231,74,59);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#deleteProductsModal" data-bs-toggle="modal"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">delete</i></button></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><img src="assets/img/duracelbattery-removebg-preview.png" width="120px"></td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Brand F</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">Battery6</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">RM999.99</td>
                                            <td style="text-align: center;color: rgb(0,0,0);">9999</td>
                                            <td style="text-align: center;">
                                                <div class="col form-check form-switch"><input type="checkbox" class="form-check-input" checked=""></div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background: rgb(13,110,253);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#editProductsOffcanvas" data-bs-toggle="offcanvas"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">edit</i></button><button class="btn btn-primary" type="button" style="background: rgb(231,74,59);width: 25px;height: 25px;padding: 3px 3px;border-width: 1px;border-radius: 6px;margin: 0px 3px;" data-bs-target="#deleteProductsModal" data-bs-toggle="modal"><i class="material-icons" style="color: rgb(255,255,255);font-size: 19px;">delete</i></button></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="addProductsOffcanvas">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title"></h5><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="row">
                                <div class="col" style="width: 250px;">
                                    <h4 class="text-nowrap" style="width: 146px;">Add Products</h4>
                                </div>
                                <div class="col-lg-6" style="text-align: right;"><button class="btn btn-success" type="button" style="background: rgb(11,188,29);width: 50px;height: 50px;margin-right: 5px;border-width: 0px;" data-bs-target="#addProductsModal" data-bs-toggle="modal"><i class="fas fa-plus-square" style="font-size: 25px;color: rgb(255,255,255);"></i></button><button class="btn btn-danger" type="button" style="width: 50px;height: 50px;border-width: 0px;" data-bs-target="#discardChangesModal" data-bs-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 25px;"></i></button></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="padding: 6px 12px;color: rgb(255,15,0);font-weight: bold;font-style: italic;font-size: 11px;">Attention please!<br>The operations you make here will affect at product variants.</p>
                                </div>
                            </div>
                            <form style="background: #eaeaea;"><label class="form-label" style="width: 350px;padding: 6px 12px;">Product Images</label>
                                <div class="row" id="addProductImage" style="width: 100%;margin: 0px;">
                                    <div class="col col-lg-4 col-sm-6" style="padding: 6px 12px;background: #ffffff;width: 100px;height: 100px;margin-left: 10px;">
                                        <div id="someId" class="rounded position-relative vPreviewImage" style="background: url('assets/img/input_image_preview/upload_image.png') center / cover no-repeat;width: 80px;height: 80px;padding: 0px;" input-data-index="0"><button class="btn d-none close position-sticky vClearPreviewImage" type="button" style="padding: 0px;"><span class="bg-white pl-2 pr-2" aria-hidden="true">&times;</span></button><input class="form-control vInputImage" type="file" style="opacity: 0;cursor: pointer;height: 80px;padding: 0px;" accept="image/*"></div>
                                    </div>
                                    <div class="col col-lg-4 col-sm-6" style="padding: 6px 12px;background: #ffffff;width: 100px;height: 100px;margin-left: 10px;">
                                        <div id="someId-2" class="rounded position-relative vPreviewImage" style="background: url('assets/img/input_image_preview/upload_image.png') center / cover no-repeat;width: 80px;height: 80px;padding: 0px;" input-data-index="0"><button class="btn d-none close position-sticky vClearPreviewImage" type="button"><span class="bg-white pl-2 pr-2" aria-hidden="true">&times;</span></button><input class="form-control vInputImage" type="file" style="opacity: 0;cursor: pointer;height: 80px;" accept="image/*"></div>
                                    </div>
                                    <div class="col col-lg-4 col-sm-6" style="padding: 6px 12px;background: #ffffff;width: 100px;height: 100px;margin-left: 10px;">
                                        <div id="someId-1" class="rounded position-relative vPreviewImage" style="background: url('assets/img/input_image_preview/upload_image.png') center / cover no-repeat;width: 80px;height: 80px;padding: 0px;" input-data-index="0"><button class="btn d-none close position-sticky vClearPreviewImage" type="button"><span class="bg-white pl-2 pr-2" aria-hidden="true">&times;</span></button><input class="form-control vInputImage" type="file" style="opacity: 0;cursor: pointer;height: 80px;" accept="image/*"></div>
                                    </div>
                                </div><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Product Name</label><input class="form-control" type="text" placeholder="-"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Brand Name</label><input class="form-control" type="text" placeholder="-"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Product Description</label><textarea class="form-control" placeholder="-" rows="3" wrap="soft"></textarea><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Specifications</label><textarea class="form-control" placeholder="-" rows="3" wrap="soft"></textarea><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Key Features</label><textarea class="form-control" placeholder="-" rows="3" wrap="soft"></textarea><label class="form-label" style="width: 150px;padding: 6px 12px;padding-bottom: 6px;">Quantity</label><input class="form-control" type="text" placeholder="-"><label class="form-label" style="width: 150px;padding: 6px 12px;padding-bottom: 6px;">Discount (%)</label><input class="form-control" type="number" min="0" max="100" placeholder="%"><label class="form-label" style="width: 150px;padding: 6px 12px;padding-bottom: 6px;">Purchase Price</label><input class="form-control" type="text" placeholder="-"><label class="form-label" style="width: 150px;padding: 6px 12px;padding-bottom: 6px;">Selling Price</label><input class="form-control" type="text" placeholder="-">
                            </form>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="editProductsOffcanvas">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title"></h5><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="row">
                                <div class="col" style="width: 250px;">
                                    <h4 class="text-nowrap" style="width: 146px;">Edit Products</h4>
                                </div>
                                <div class="col-lg-6" style="text-align: right;"><button class="btn btn-success" type="button" style="background: rgb(11,188,29);width: 50px;height: 50px;margin-right: 5px;border-width: 0px;" data-bs-target="#saveProductsModal" data-bs-toggle="modal"><i class="fas fa-save" style="font-size: 25px;color: rgb(255,255,255);"></i></button><button class="btn btn-danger" type="button" style="width: 50px;height: 50px;border-width: 0px;" data-bs-target="#discardChangesModal" data-bs-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 25px;"></i></button></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="padding: 6px 12px;color: rgb(255,15,0);font-weight: bold;font-style: italic;font-size: 11px;">Attention please!<br>The operations you make here will affect at product variants.</p>
                                </div>
                            </div>
                            <form style="background: #eaeaea;"><label class="form-label" style="width: 350px;padding: 6px 12px;">Product Images</label>
                                <div class="row" id="addProductImage-1" style="width: 100%;margin: 0px;">
                                    <div class="col col-lg-4 col-sm-6" style="padding: 6px 12px;background: #ffffff;width: 100px;height: 100px;margin-left: 10px;">
                                        <div id="someId-3" class="rounded position-relative vPreviewImage" style="background: url('assets/img/input_image_preview/upload_image.png') center / cover no-repeat;width: 80px;height: 80px;padding: 0px;" input-data-index="0"><button class="btn d-none close position-sticky vClearPreviewImage" type="button" style="padding: 0px;"><span class="bg-white pl-2 pr-2" aria-hidden="true">&times;</span></button><input class="form-control vInputImage" type="file" style="opacity: 0;cursor: pointer;height: 80px;padding: 0px;" accept="image/*"></div>
                                    </div>
                                    <div class="col col-lg-4 col-sm-6" style="padding: 6px 12px;background: #ffffff;width: 100px;height: 100px;margin-left: 10px;">
                                        <div id="someId-4" class="rounded position-relative vPreviewImage" style="background: url('assets/img/input_image_preview/upload_image.png') center / cover no-repeat;width: 80px;height: 80px;padding: 0px;" input-data-index="0"><button class="btn d-none close position-sticky vClearPreviewImage" type="button"><span class="bg-white pl-2 pr-2" aria-hidden="true">&times;</span></button><input class="form-control vInputImage" type="file" style="opacity: 0;cursor: pointer;height: 80px;" accept="image/*"></div>
                                    </div>
                                    <div class="col col-lg-4 col-sm-6" style="padding: 6px 12px;background: #ffffff;width: 100px;height: 100px;margin-left: 10px;">
                                        <div id="someId-5" class="rounded position-relative vPreviewImage" style="background: url('assets/img/input_image_preview/upload_image.png') center / cover no-repeat;width: 80px;height: 80px;padding: 0px;" input-data-index="0"><button class="btn d-none close position-sticky vClearPreviewImage" type="button"><span class="bg-white pl-2 pr-2" aria-hidden="true">&times;</span></button><input class="form-control vInputImage" type="file" style="opacity: 0;cursor: pointer;height: 80px;" accept="image/*"></div>
                                    </div>
                                </div><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Product Name</label><input class="form-control" type="text" placeholder="-" style="font-weight: bold;" value="Battery1"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Brand Name</label><input class="form-control" type="text" placeholder="-" style="font-weight: bold;" value="Brand A"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Product Description</label><textarea class="form-control" placeholder="-" rows="3" wrap="soft">Ensure your vehicle starts every time with the Duracell Ultra Car Battery. This high-performance battery is designed to deliver reliable power in all conditions, making it ideal for a wide range of vehicles, including cars, trucks, and SUVs.</textarea><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Specifications</label><textarea class="form-control" placeholder="Enter product specifications..." rows="3" wrap="hard"></textarea><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;">Key Features</label><textarea class="form-control" placeholder="Enter key features of product" wrap="soft" rows="3"></textarea><label class="form-label" style="width: 150px;padding: 6px 12px;padding-bottom: 6px;">Quantity</label><input class="form-control" type="text" placeholder="-"><label class="form-label" style="width: 150px;padding: 6px 12px;padding-bottom: 6px;">Discount (%)</label><input class="form-control" type="number" min="0" max="100" placeholder="0"><label class="form-label" style="width: 150px;padding: 6px 12px;padding-bottom: 6px;">Purchase Price</label><input class="form-control" type="text" placeholder="-"><label class="form-label" style="width: 150px;padding: 6px 12px;padding-bottom: 6px;">Selling Price</label><input class="form-control" type="text" placeholder="-">
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="addProductsModal">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="color: rgb(0,0,0);">Create Item</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p style="color: rgb(0,0,0);">Item has been successfully created!</p>
                                </div>
                                <div class="modal-footer"><a class="btn btn-primary" role="button" href="ProductManagement.php">Done</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="saveProductsModal">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="color: rgb(0,0,0);">Save Changes</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p style="color: rgb(0,0,0);">Changes has been successfully saved!</p>
                                </div>
                                <div class="modal-footer"><a class="btn btn-primary" role="button" href="ProductManagement.php">Done</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="deleteProductsModal_success">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="color: rgb(0,0,0);">Delete Item</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p style="color: rgb(0,0,0);">Items has been successfully deleted!</p>
                                </div>
                                <div class="modal-footer"><a class="btn btn-primary" role="button" href="ProductManagement.php">Done</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="discardChangesModal_success">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="color: rgb(0,0,0);">Discard Changes</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p style="color: rgb(0,0,0);">Items has been successfully discarded!</p>
                                </div>
                                <div class="modal-footer"><a class="btn btn-primary" role="button" href="ProductManagement.php">Done</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="deleteProductsModal">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="color: rgb(0,0,0);">Delete Item</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><span style="color: rgb(33, 37, 41);">Are you sure want to delete this item?</span></p>
                                </div>
                                <div class="modal-footer"><button class="btn btn-success" type="button" style="color: rgb(255,255,255);background: rgb(13,110,253);" data-bs-target="#deleteProductsModal_success" data-bs-toggle="modal">Yes</button><a class="btn btn-danger" role="button" href="ProductManagement.php" data-bs-target="#deleteProductsModal" data-bs-toggle="modal" style="background: rgb(255,255,255);color: rgb(0,0,0);border-style: solid;border-color: rgb(0,0,0);">No</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="discardChangesModal">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="color: rgb(0,0,0);">Discard Changes</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><span style="color: rgb(33, 37, 41);">Are you sure want to discard the changes?</span></p>
                                </div>
                                <div class="modal-footer"><button class="btn btn-success" type="button" style="color: rgb(255,255,255);background: rgb(13,110,253);" data-bs-target="#discardChangesModal_success" data-bs-toggle="modal">Yes</button><a class="btn btn-danger" role="button" href="ProductManagement.php" data-bs-target="#discardChangesModal" data-bs-toggle="modal" style="background: rgb(255,255,255);color: rgb(0,0,0);border-style: solid;border-color: rgb(0,0,0);">No</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/AddMinusItems.js"></script>
    <script src="assets/js/Alert.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
    <script src="assets/js/Input-Image-With-Preview-input_image_preview.js"></script>
    <script src="assets/js/haha.js"></script>
    <script src="assets/js/ProductManagement.js"></script>
</body>

</html>