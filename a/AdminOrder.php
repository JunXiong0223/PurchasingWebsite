<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
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
                    <li class="nav-item"><a class="nav-link active" href="AdminOrder.php"><i class="fas fa-shopping-cart" style="margin-right: 0px;width: 20px;text-align: center;"></i><span style="padding: 0px 4px;">Order</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="AdminPayment.php"><i class="fas fa-money-bill-wave" style="width: 20px;height: 14px;margin: 0px;text-align: center;"></i><span style="padding: 0px 4px;">Payment</span></a><a class="nav-link" href="AdminPayment.php"><i class="fas fa-money-bill-wave" style="width: 20px;height: 14px;margin: 0px;text-align: center;"></i><span style="padding: 0px 4px;">Payment</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Staff List.php"><i class="fas fa-users" style="margin-right: 0px;width: 20px;text-align: center;"></i><span style="padding: 0px 4px;">Staff</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="User List.php"><i class="fas fa-user" style="width: 20px;height: 20px;margin-right: 0px;text-align: center;"></i><span style="padding: 0px 4px;">User</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ProductManagement.php"><i class="fas fa-box" style="width: 20px;height: 20px;margin: 0px;text-align: center;"></i><span style="padding: 0px 4px;">Product</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Inventory List.php"><i class="fas fa-boxes" style="margin-right: 0px;text-align: center;width: 20px;"></i><span style="padding: 0px 4px;">Inventory</span></a></li>
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
            <div id="content">
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
                <div class="container-fluid" style="padding: 0px 12px;height: 100%;">
                    <div class="alert alert-success d-none alert-dismissible" role="alert" id="successMessage" style="background-color: #B4F7D2!important;border: 1px solid #0C6D38;position: absolute;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="close_alert"></button><i class="icon ion-checkmark-round me-1"></i><span style="color: #0C6D38 !important;">Record Added Successfully</span></div>
                    <div class="row" style="margin: 0px 12px;">
                        <div class="col" style="padding: 0px;">
                            <h2>Order Management</h2>
                        </div>
                        <div class="col-xxl-2" id="add" style="width: 120px;padding: 0px;text-align: right;"><button class="btn btn-primary" type="button" style="width: 95px;font-weight: bold;color: rgb(255,255,255);background: #0bbc1d;border-width: 0px;" data-bs-target="#addProductsOffcanvas" data-bs-toggle="offcanvas"><i class="fas fa-plus-square" style="border-color: rgb(255,255,255);color: rgb(255,255,255);background: rgba(255,255,255,0);font-size: 18px;"></i>&nbsp; Add</button></div>
                    </div>
                    <div class="row justify-content-center" style="margin: 0px;height: 100%;">
                        <div class="col-12" style="background: #ffffff;padding: 0px;">
                            <div class="table-responsive" style="border-style: none;">
                                <table class="table table-hover" id="example">
                                    <thead style="border-width: 1px;border-style: solid;border-radius: 0px;">
                                        <tr class="table-dark">
                                            <th>Order ID</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Cashier</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="border-width: 1px;border-style: solid;">
                                        <tr>
                                            <td class="text-truncate" style="max-width: 200px;">#654897591</td>
                                            <td class="text-truncate" style="max-width: 200px;">IN PPROGRESS</td>
                                            <td>6/9/2024</td>
                                            <td>RM 1200</td>
                                            <td>John</td>
                                            <td class="text-start text-center"><a class="btn btn-primary" role="button" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" href="Confirm Order.php"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">done</i></a><a class="btn btn-dark" role="button" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgba(242,242,242,0);border-style: none;" href="AdminOrderDetail.php"><i class="material-icons text-dark" id="showAlertBtn-5" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">remove_red_eye</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate" style="max-width: 200px;">#321951798</td>
                                            <td class="text-truncate" style="max-width: 200px;">COMPLETED</td>
                                            <td>6/9/2024</td>
                                            <td>RM 300</td>
                                            <td>John</td>
                                            <td class="text-start text-center"><a class="btn btn-dark" role="button" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgba(242,242,242,0);border-style: none;" href="AdminOrderDetail.php"><i class="material-icons text-dark" id="showAlertBtn-6" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">remove_red_eye</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate" style="max-width: 200px;">#456159375</td>
                                            <td class="text-truncate" style="max-width: 200px;">PENDING</td>
                                            <td>6/9/2024</td>
                                            <td>RM 780</td>
                                            <td>Joe</td>
                                            <td class="text-start text-center"><a class="btn btn-primary" role="button" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" href="Confirm Order.php"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">done</i></a><a class="btn btn-dark" role="button" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgba(242,242,242,0);border-style: none;" href="AdminOrderDetail.php"><i class="material-icons text-dark" id="showAlertBtn-7" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">remove_red_eye</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate" style="max-width: 200px;">#951954621</td>
                                            <td class="text-truncate" style="max-width: 200px;">COMPLETED</td>
                                            <td>6/9/2024</td>
                                            <td>RM 600</td>
                                            <td>Joe</td>
                                            <td class="text-start text-center"><a class="btn btn-dark" role="button" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgba(242,242,242,0);border-style: none;" href="AdminOrderDetail.php"><i class="material-icons text-dark" id="showAlertBtn-8" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">remove_red_eye</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate" style="max-width: 200px;">#321948568</td>
                                            <td class="text-truncate" style="max-width: 200px;">COMPLETED</td>
                                            <td>6/9/2024</td>
                                            <td>RM 800</td>
                                            <td>John</td>
                                            <td class="text-start text-center"><a class="btn btn-dark" role="button" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgba(242,242,242,0);border-style: none;" href="AdminOrderDetail.php"><i class="material-icons text-dark" id="showAlertBtn-9" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">remove_red_eye</i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
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