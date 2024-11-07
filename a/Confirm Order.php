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
                    <li class="nav-item"><a class="nav-link active" href="AdminOrder.php"><i class="fas fa-shopping-cart" style="margin-right: 0px;width: 20px;text-align: center;"></i><span style="padding: 0px 4px;">Order</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="AdminPayment.php"><i class="fas fa-money-bill-wave" style="width: 20px;height: 14px;margin: 0px;text-align: center;"></i><span style="padding: 0px 4px;">Payment</span></a><a class="nav-link" href="AdminPayment.php"><i class="fas fa-money-bill-wave" style="width: 20px;height: 14px;margin: 0px;text-align: center;"></i><span style="padding: 0px 4px;">Payment</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Staff%20List.php"><i class="fas fa-users" style="margin-right: 0px;width: 20px;text-align: center;"></i><span style="padding: 0px 4px;">Staff</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="User%20List.php"><i class="fas fa-user" style="width: 20px;height: 20px;margin-right: 0px;text-align: center;"></i><span style="padding: 0px 4px;">User</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ProductManagement.php"><i class="fas fa-box" style="width: 20px;height: 20px;margin: 0px;text-align: center;"></i><span style="padding: 0px 4px;">Product</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Inventory%20List.php"><i class="fas fa-boxes" style="margin-right: 0px;text-align: center;width: 20px;"></i><span style="padding: 0px 4px;">Inventory</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="LoginPage_Admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-logout" style="width: 20px;height: 14px;text-align: center;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                            </svg><span style="padding: 0px 4px;">Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle-1" type="button"></button></div>
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
                <div class="container-fluid" style="padding: 0px 5%;background: rgba(221,221,221,0);margin: 0px;border-radius: 10px;">
                    <div class="row" style="margin: 0px 0px;">
                        <div class="col">
                            <h1 style="color: rgb(0,0,0);"><strong>Order</strong></h1>
                            <h6>The operations you make here will affect at order.</h6>
                        </div>
                        <div class="col" style="text-align: right;">
                            <div class="dropdown" style="text-align: right;width: 121px;display: inline-block;">
                                <div class="dropdown" style="text-align: right;width: 121px;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" id="dropdownMenuButton" type="button" style="background: rgb(197,29,239);">Pending</button>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="#" style="background: #dc3545;color: rgb(255,255,255);--bs-danger: #dc3545;--bs-danger-rgb: 220,53,69;" onclick="updateDropdownText(this)">Cancel</a><a class="dropdown-item" href="#" style="background: rgb(78,115,223);color: rgb(255,255,255);" onclick="updateDropdownText(this)">In Progress</a><a class="dropdown-item" href="#" style="color: rgb(255,255,255);border-color: rgb(29,179,61);background: #07e42a;" onclick="updateDropdownText(this)">Complete</a></div>
                                </div>
                            </div><a class="btn btn-primary" role="button" style="margin-left: 15px;background: rgb(255,255,255);color: rgb(228,205,0);border-width: 2px;border-color: rgb(228,205,0);" href="AdminOrder.php"><strong>Save Order</strong></a>
                        </div>
                    </div>
                    <div class="mb-3" style="background: #dddddd;padding: 15px 20px;border-radius: 10px;">
                        <div style="margin-bottom: 10px;"><small>Order ID</small>
                            <div class="input-group"><input class="form-control" type="text" style="width: 1044.6px;" placeholder="Purchase Order" disabled="" value="PO_001"></div>
                        </div>
                        <div style="margin-bottom: 10px;"><small>Cashier</small>
                            <div class="input-group"><input class="form-control" type="text" style="width: 1044.6px;" value="Eric Chan" disabled=""></div>
                        </div>
                        <div style="margin-bottom: 10px;"><small>Payment Method</small>
                            <div class="input-group">
                                <div class="dropdown" style="width: 100%;"><button class="btn btn-primary disabled dropdown-toggle rounded-0 rounded-start rounded-end text-start form-control" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 100%;background: rgb(255,255,255);color: rgb(0,0,0);border-color: rgba(0,0,0,0);" disabled="">Touch N Go E-Wallet</button>
                                    <div class="dropdown-menu" style="width: 100%;"><a class="dropdown-item" href="#">Touch N Go E-Wallet</a><a class="dropdown-item" href="#">Cash</a><a class="dropdown-item" href="#">Debit Card/Credit Card</a></div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 10px;"><small>Date</small>
                            <div class="input-group"><input class="form-control" type="date" value="2024-10-10" disabled=""></div>
                        </div>
                    </div>
                    <div class="mb-3" style="background: #dddddd;padding: 15px 20px;border-radius: 10px;">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 col-xxl-1" style="text-align: center;padding: 0px;"><button class="btn btn-outline-primary btn-sm disabled" type="button" style="background: rgb(255,255,255);padding: 4px 4px;margin: 0px;margin-right: 0px;display: inline-block;height: 34px;border-radius: 50%;border-width: 1px;border-color: rgba(0,0,0,0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-1" disabled=""><i class="material-icons mb-1" style="color: rgb(0,0,0);display: block;">add</i></button></div>
                                    <div class="col" style="padding: 0px 5px;">
                                        <div class="dropdown" style="display: block;margin-left: 0px;width: 100%;"><button class="btn btn-primary disabled dropdown-toggle text-end form-control" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: rgb(255,255,255);color: rgb(0,0,0);width: 100%;border-color: rgba(163,162,162,0);" disabled=""><span style="color: var(--bs-dropdown-link-hover-color); background-color: var(--bs-dropdown-link-hover-bg);">Amaron Hi Life 42B20L&nbsp;– 12V, 750 CCA (RM300.00)&nbsp;</span></button>
                                            <div class="dropdown-menu" style="width: 100%;"><input type="text" id="BMdropdownSearchInput" class="form-control"><a class="dropdown-item" href="#">Amaron Hi Life 42B20L&nbsp;– 12V, 750 CCA (RM300.00)&nbsp;</a><a class="dropdown-item" href="#"><span style="color: var(--bs-dropdown-link-hover-color); background-color: var(--bs-dropdown-link-hover-bg);">Amaron Hi Life&nbsp;</span>55B24L/R&nbsp;<span style="color: var(--bs-dropdown-link-hover-color); background-color: var(--bs-dropdown-link-hover-bg);">– 12V, 600 CCA (RM270.00)&nbsp;</span></a><a class="dropdown-item" href="#"><span style="color: var(--bs-dropdown-link-hover-color); background-color: var(--bs-dropdown-link-hover-bg);">Amaron Hi Life&nbsp;</span>65D26&nbsp;<span style="color: var(--bs-dropdown-link-hover-color); background-color: var(--bs-dropdown-link-hover-bg);">– 12V, 650 CCA (RM240.00)&nbsp;</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-2 col-xxl-1" style="text-align: center;padding: 0px;"><button class="btn btn-outline-primary btn-sm disabled" type="button" style="background: rgb(255,255,255);padding: 4px 4px;margin: 0px;margin-right: 0px;display: inline-block;height: 34px;border-width: 1px;border-color: rgba(0,0,0,0);border-radius: 50%;width: 34px;text-align: center;" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-1" disabled=""><i class="material-icons mb-1" style="color: rgb(0,0,0);display: block;margin: 0px 0px;font-size: 24px;">add</i></button></div>
                                    <div class="col" style="padding: 0px 5px;">
                                        <div class="dropdown" style="display: block;margin-left: 0px;width: 100%;"><button class="btn btn-primary dropdown-toggle text-end form-control" aria-expanded="false" data-bs-toggle="dropdown" id="SNdropdownMenuButton" type="button" style="background: rgb(255,255,255);color: rgb(0,0,0);width: 100%;border-color: rgba(163,162,162,0);">SN001</button>
                                            <div class="dropdown-menu sndropdown" style="width: 100%;"><input type="text" id="SNdropdownSearchInput" class="form-control"><a class="dropdown-item serialnumber" href="#" onclick="selectSN(this)">SN001</a><a class="dropdown-item serialnumber" href="#" onclick="selectSN(this)">SN002</a><a class="dropdown-item serialnumber" href="#" onclick="selectSN(this)">SN003</a></div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="assets/js/updateDropdownValue.js"></script>
    <script src="assets/js/AddMinusItems.js"></script>
    <script src="assets/js/Alert.js"></script>
    <script src="assets/js/Searchable%20Dropdown.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
    <script src="assets/js/Input-Image-With-Preview-input_image_preview.js"></script>
    <script src="assets/js/haha.js"></script>
    <script src="assets/js/ProductManagement.js"></script>
</body>

</html>