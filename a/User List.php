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

<body id="page-top" style="border-color: rgba(33,37,41,0);">
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
                    <li class="nav-item"><a class="nav-link active" href="User%20List.php"><i class="fas fa-user" style="width: 20px;height: 20px;margin-right: 0px;text-align: center;"></i><span style="padding: 0px 4px;">User</span></a></li>
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
                    <div class="alert alert-success d-none alert-dismissible" role="alert" id="successMessage" style="background-color: #B4F7D2!important;border: 1px solid #0C6D38;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="close_alert"></button><i class="icon ion-checkmark-round me-1"></i><span style="color: #0C6D38 !important;">Record Added Successfully</span></div>
                    <div class="row" style="margin: 0px 12px;">
                        <div class="col" style="padding: 0px;">
                            <h2 style="padding: 0px;">User Management</h2>
                        </div>
                        <div class="col-xxl-2" id="add" style="width: 120px;padding: 0px;text-align: right;"><a class="btn btn-primary" role="button" style="width: 95px;font-weight: bold;color: rgb(255,255,255);background: #0bbc1d;border-width: 0px;" data-bs-target="#addUserOffcanvas" data-bs-toggle="offcanvas"><i class="fas fa-plus-square" style="border-color: rgb(255,255,255);color: rgb(255,255,255);background: rgba(255,255,255,0);font-size: 18px;"></i>&nbsp; Add</a></div>
                    </div>
                    <div class="row justify-content-center" style="margin: 0px;height: 100%;">
                        <div class="col-12" style="background: #ffffff;padding: 0px;">
                            <div class="table-responsive">
                                <table class="table table-hover" id="example">
                                    <thead>
                                        <tr class="table-dark">
                                            <th class="text-center">User ID</th>
                                            <th class="text-center">Email Address</th>
                                            <th class="text-center">First Name</th>
                                            <th class="text-center">Last Name</th>
                                            <th class="text-center">Gender</th>
                                            <th class="text-center">Phone No.</th>
                                            <th class="text-center" style="min-width: 300px;padding: 20px;">Shipping Address</th>
                                            <th class="text-center">Sign Up By</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-truncate">00001</td>
                                            <td class="text-truncate" style="max-width: 200px;">khyeshen91@gmail.com</td>
                                            <td class="text-center">Khye Shen</td>
                                            <td class="text-center">Tan</td>
                                            <td class="text-center">M</td>
                                            <td class="text-center">012-3456789</td>
                                            <td class="text-center">2A-10-2, Waterfront Q1, Jalan Queens, 11900, Bayan Lepas, Pulau Pinang</td>
                                            <td class="text-center">6/9/2024</td>
                                            <td class="text-center">Active</td>
                                            <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#editUserOffcanvas"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="modal" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#DeleteModal"><i class="material-icons" id="showAlertBtn-2" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">00002</td>
                                            <td class="text-truncate" style="max-width: 200px;">jackson11@gmail.com</td>
                                            <td class="text-center">Jackson</td>
                                            <td class="text-center">Wang</td>
                                            <td class="text-center">M</td>
                                            <td class="text-center">011-32789876</td>
                                            <td class="text-center">22-3, Menara KLCC, Jalan Ampang, 50450 Kuala Lumpur</td>
                                            <td class="text-center">16/4/2023</td>
                                            <td class="text-center">Frozen</td>
                                            <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#editUserOffcanvas"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="modal" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#DeleteModal"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">00003</td>
                                            <td class="text-truncate" style="max-width: 200px;">chongwei12@gmail.com</td>
                                            <td class="text-center">Chong Wei</td>
                                            <td class="text-center">Lee</td>
                                            <td class="text-center">M</td>
                                            <td class="text-center">011-37485728</td>
                                            <td class="text-center">45-2-1, Block A, Bayan Mutiara, Jalan Mutiara 4, 11900 Bayan Lepas, Penang</td>
                                            <td class="text-center">19/9/2024</td>
                                            <td class="text-center">Active</td>
                                            <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#editUserOffcanvas"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="modal" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#DeleteModal"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">00004</td>
                                            <td class="text-truncate" style="max-width: 200px;">jennie13@gmail.com</td>
                                            <td class="text-center">Jennie</td>
                                            <td class="text-center">Ang</td>
                                            <td class="text-center">F</td>
                                            <td class="text-center">010-22449987</td>
                                            <td class="text-center">78, Jalan Sutera Tanjung 8/4, Taman Sutera Utama, 81300 Johor Bahru, Johor</td>
                                            <td class="text-center">15/3/2024</td>
                                            <td class="text-center">Active</td>
                                            <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#editUserOffcanvas"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="modal" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#DeleteModal"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">00005</td>
                                            <td class="text-truncate" style="max-width: 200px;">jacky14@gmail.com</td>
                                            <td class="text-center">Jacky</td>
                                            <td class="text-center">Liew</td>
                                            <td class="text-center">M</td>
                                            <td class="text-center">011-23654876</td>
                                            <td class="text-center">101, Lorong Lintas Plaza, Lintas, 88300 Kota Kinabalu, Sabah</td>
                                            <td class="text-center">23/1/2022</td>
                                            <td class="text-center">Active</td>
                                            <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#editUserOffcanvas"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="modal" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#DeleteModal"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addUserOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title"></h5><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col" style="width: 250px;">
                    <h4 class="text-nowrap" style="width: 146px;">Add User</h4>
                </div>
                <div class="col-lg-6" style="text-align: right;"><button class="btn btn-success" id="btnaddinventory" type="button" style="background: rgb(11,188,29);width: 50px;height: 50px;margin-right: 5px;border-width: 0px;" data-bs-target="#addUserOffcanvas" data-bs-toggle="offcanvas"><i class="fas fa-plus-square" style="font-size: 25px;color: rgb(255,255,255);"></i></button><button class="btn btn-danger" type="button" style="width: 50px;height: 50px;border-width: 0px;" data-bs-target="#DiscardModal" data-bs-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 25px;"></i></button></div>
            </div>
            <div class="row">
                <div class="col" style="padding: 0px;">
                    <p style="padding: 6px 12px;color: rgb(255,15,0);font-weight: bold;font-style: italic;font-size: 11px;">Attention please!<br>The operations you make here will affect at user account.</p>
                </div>
            </div>
            <form style="background: #cdcccc;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">Email Address</label><input class="form-control" type="text" placeholder="-" style="margin-bottom: 5px;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">First Name</label><input class="form-control" type="text" placeholder="-" style="margin-bottom: 5px;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">Last Name</label><input class="form-control" type="text" placeholder="-" style="margin-bottom: 5px;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">Gender</label>
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle form-control" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="text-align: left;background: rgb(255,255,255);color: rgb(0,0,0);border-color: rgba(0,0,0,0.24);margin-bottom: 5px;">Gender</button>
                    <div class="dropdown-menu form-control" style="width: 100%;"><a class="dropdown-item" href="#" onclick="updateDropdownText(this)">Male</a><a class="dropdown-item" href="#" onclick="updateDropdownText(this)">Female</a></div>
                </div><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">Phone Number</label><input class="form-control" type="text" placeholder="-" style="margin-bottom: 5px;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">Shipping Address</label><textarea class="form-control" placeholder="-" rows="3" wrap="soft" style="margin-bottom: 5px;"></textarea>
            </form>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="editUserOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title"></h5><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col" style="width: 250px;">
                    <h4 class="text-nowrap" style="width: 146px;">Edit User</h4>
                </div>
                <div class="col-lg-6" style="text-align: right;"><button class="btn btn-success" id="btnaddinventory-2" type="button" style="background: rgb(11,188,29);width: 50px;height: 50px;margin-right: 5px;border-width: 0px;" data-bs-target="#editUserOffcanvas" data-bs-toggle="offcanvas"><i class="far fa-save" style="font-size: 25px;color: rgb(255,255,255);"></i></button><button class="btn btn-danger" type="button" style="width: 50px;height: 50px;border-width: 0px;" data-bs-target="#DiscardModal" data-bs-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 25px;"></i></button></div>
            </div>
            <div class="row">
                <div class="col" style="padding: 0px;">
                    <p style="padding: 6px 12px;color: rgb(255,15,0);font-weight: bold;font-style: italic;font-size: 11px;">Attention please!<br>The operations you make here will affect at user account.</p>
                </div>
            </div>
            <form style="background: #cdcccc;padding: 0px;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin-bottom: 0px;">Email Address</label><input class="form-control" type="text" value="khyeshen91@gmail.com" style="margin-bottom: 5px;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">First Name</label><input class="form-control" type="text" value="Khye Shen" style="margin-bottom: 5px;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">Last Name</label><input class="form-control" type="text" value="Tan" style="margin-bottom: 5px;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">Gender</label>
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle form-control" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="text-align: left;background: rgb(255,255,255);color: rgb(0,0,0);border-color: rgba(0,0,0,0.24);margin-bottom: 5px;">Male</button>
                    <div class="dropdown-menu form-control" style="width: 100%;"><a class="dropdown-item" href="#" onclick="updateDropdownText(this)">Male</a><a class="dropdown-item" href="#" onclick="updateDropdownText(this)">Female</a></div>
                </div><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">Phone Number</label><input class="form-control" type="text" value="0123456789" style="margin-bottom: 5px;"><label class="form-label" style="width: 350px;padding: 6px 12px;padding-bottom: 6px;margin: 0px;">Address</label><textarea class="form-control" rows="3" wrap="soft" style="margin-bottom: 5px;">2A-10-2, Waterfront Q1, Jalan Queens, 11900, Bayan Lepas, Pulau Pinang</textarea>
            </form>
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
                <div class="modal-footer"><a class="btn btn-primary" role="button" href="User%20List.php">Done</a></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="DiscardModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Discard Changes</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to discard the changes?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" id="showAlertBtn" type="button" data-bs-target="#discardChangesModal_success" data-bs-toggle="modal" data-bs-dismiss="modal" style="background: rgb(13,110,253);">Yes</button><button class="btn btn-light" type="button" data-bs-dismiss="modal" style="background: rgba(255,255,255,0.13);color: rgb(0,0,0);border: 1px solid rgb(0,0,0);" data-bs-target="#DiscardModal" data-bs-toggle="modal">No</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="DeleteModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Alert!</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you confirm to delete this record?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" id="showAlertBtn-1" type="button" data-bs-target="#modal-2" data-bs-toggle="modal" data-bs-dismiss="modal" style="background: rgb(13,110,253);">Yes</button><button class="btn btn-light" type="button" data-bs-dismiss="modal" style="background: rgb(255,255,255);color: rgb(0,0,0);border: 1px solid rgb(0,0,0);">No</button></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/updateDropdownValue.js"></script>
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