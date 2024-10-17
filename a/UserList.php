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
        
        <!-- Navigation Bar -->
        <?php include 'Nav.php' ?>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-dark shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
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
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><i class="far fa-user d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 28px;width: 32px;height: 32px;"></i></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="alert alert-success d-none alert-dismissible" role="alert" id="successMessage" style="background-color: #B4F7D2!important;border: 1px solid #0C6D38;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="close_alert"></button><i class="icon ion-checkmark-round me-1"></i><span style="color: #0C6D38 !important;">Record Added Successfully</span></div>
                    <div class="row justify-content-center" style="margin: 0px;">
                        <div class="col-xl-10 col-xxl-9">
                            <div class="card shadow">
                                <div class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3" style="padding: 8px 16px;">
                                    <div class="row" style="margin: 0px;width: 100%;">
                                        <div class="col-xl-10 col-xxl-10" style="padding: 0px;">
                                            <h1 style="margin: 0px 0px;margin-bottom: 0px;">User Management</h1>
                                        </div>
                                        <div class="col-xxl-2 text-center d-xxl-flex justify-content-xxl-end align-items-xxl-center" style="padding: 0px;"><button class="btn btn-primary" type="button" style="width: 95px;font-weight: bold;color: rgb(255,255,255);background: #0bbc1d;border-width: 0px;" data-bs-target="#offcanvas-1" data-bs-toggle="offcanvas"><i class="fas fa-plus-square" style="border-color: rgb(255,255,255);color: rgb(255,255,255);background: rgba(255,255,255,0);font-size: 18px;"></i>&nbsp; Add</button></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="example">
                                            <thead>
                                                <tr>
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
                                                    <td class="text-truncate" style="max-width: 200px;">00001</td>
                                                    <td class="text-truncate" style="max-width: 200px;">khyeshen91@gmail.com</td>
                                                    <td class="text-center">Khye Shen</td>
                                                    <td class="text-center">Tan</td>
                                                    <td class="text-center">M</td>
                                                    <td class="text-center">012-3456789</td>
                                                    <td class="text-center">2A-10-2, Waterfront Q1, Jalan Queens, 11900, Bayan Lepas, Pulau Pinang</td>
                                                    <td class="text-center">6/9/2024</td>
                                                    <td class="text-center">Active</td>
                                                    <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#offcanvas-2"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="modal" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#modal-1"><i class="material-icons" id="showAlertBtn" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate" style="max-width: 200px;">00002</td>
                                                    <td class="text-truncate" style="max-width: 200px;">jackson11@gmail.com</td>
                                                    <td class="text-center">Jackson</td>
                                                    <td class="text-center">Wang</td>
                                                    <td class="text-center">M</td>
                                                    <td class="text-center">011-32789876</td>
                                                    <td class="text-center">22-3, Menara KLCC, Jalan Ampang, 50450 Kuala Lumpur</td>
                                                    <td class="text-center">16/4/2023</td>
                                                    <td class="text-center">Frozen</td>
                                                    <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#offcanvas-2"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#offcanvas-2"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate" style="max-width: 200px;">00003</td>
                                                    <td class="text-truncate" style="max-width: 200px;">chongwei12@gmail.com</td>
                                                    <td class="text-center">Chong Wei</td>
                                                    <td class="text-center">Lee</td>
                                                    <td class="text-center">M</td>
                                                    <td class="text-center">011-37485728</td>
                                                    <td class="text-center">45-2-1, Block A, Bayan Mutiara, Jalan Mutiara 4, 11900 Bayan Lepas, Penang</td>
                                                    <td class="text-center">19/9/2024</td>
                                                    <td class="text-center">Active</td>
                                                    <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#offcanvas-2"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#offcanvas-2"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate" style="max-width: 200px;">00004</td>
                                                    <td class="text-truncate" style="max-width: 200px;">jennie13@gmail.com</td>
                                                    <td class="text-center">Jennie</td>
                                                    <td class="text-center">Ang</td>
                                                    <td class="text-center">F</td>
                                                    <td class="text-center">010-22449987</td>
                                                    <td class="text-center">78, Jalan Sutera Tanjung 8/4, Taman Sutera Utama, 81300 Johor Bahru, Johor</td>
                                                    <td class="text-center">15/3/2024</td>
                                                    <td class="text-center">Active</td>
                                                    <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#offcanvas-2"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#offcanvas-2"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate" style="max-width: 200px;">00005</td>
                                                    <td class="text-truncate" style="max-width: 200px;">jacky14@gmail.com</td>
                                                    <td class="text-center">Jacky</td>
                                                    <td class="text-center">Liew</td>
                                                    <td class="text-center">M</td>
                                                    <td class="text-center">011-23654876</td>
                                                    <td class="text-center">101, Lorong Lintas Plaza, Lintas, 88300 Kota Kinabalu, Sabah</td>
                                                    <td class="text-center">23/1/2022</td>
                                                    <td class="text-center">Active</td>
                                                    <td class="text-start text-center"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;" data-bs-target="#offcanvas-2"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">edit</i></button><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" style="width: 25px;height: 25px;padding: 3px 3px;text-align: center;margin: 0px 3px;background: rgb(231,74,59);" data-bs-target="#offcanvas-2"><i class="material-icons" style="font-size: 19px;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;color: rgb(255,255,255);" type="button">delete</i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bar -->
            <?php include 'Footer.php' ?>

        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-1">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add User</h5><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="border-color: rgb(255,255,255);">
            <div class="container">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Email Address</p><input type="text" style="width: 100%;">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">First Name</p><input type="text" style="width: 100%;">
                        <p style="margin-bottom: 2px;">Last Name</p><input type="text" style="width: 100%;">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Gender</p>
                        <div class="dropdown" style="width: 100%;height: 30px;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="color: rgb(0,0,0);background: rgb(255,255,255);width: 100%;text-align: left;border-color: rgb(136,136,136);height: 30px;padding: 2px 12px;">Gender</button>
                            <div class="dropdown-menu" style="width: 100%;"><a class="dropdown-item" href="#" onclick="updateDropdownText(this)">Male</a><a class="dropdown-item" href="#" onclick="updateDropdownText(this)">Female</a></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Phone Number</p><input type="text" style="width: 100%;">
                    </div>
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Address</p><input type="text" style="width: 100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-10 text-end" style="width: 100%;"><button class="btn btn-primary" id="btnaddinventory" type="button" data-bs-dismiss="offcanvas" style="background: rgb(8,197,50);margin: 0px 10px;">Add</button><button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas" style="background: rgb(231,74,59);">Cancel</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-2">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Edit User</h5><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="border-color: rgb(255,255,255);">
            <div class="container">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Email Address</p><input type="text" style="width: 100%;" value="khyeshen91@gmail.com">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">First Name</p><input type="text" style="width: 100%;" value="Khye Shen">
                        <p style="margin-bottom: 2px;">Last Name</p><input type="text" style="width: 100%;" value="Tan">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Gender</p>
                        <div class="dropdown" style="width: 100%;height: 30px;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="color: rgb(0,0,0);background: rgb(255,255,255);width: 100%;text-align: left;border-color: rgb(136,136,136);height: 30px;padding: 2px 12px;">Gender</button>
                            <div class="dropdown-menu" style="width: 100%;"><a class="dropdown-item" href="#" onclick="updateDropdownText(this)">Male</a><a class="dropdown-item" href="#" onclick="updateDropdownText(this)">Female</a></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Phone Number</p><input type="text" style="width: 100%;" value="0123456789">
                    </div>
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Address</p><input type="text" style="width: 100%;" value="2A-10-2, Waterfront Q1, Jalan Queens, 11900, Bayan Lepas, Pulau Pinang">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-10 text-end" style="width: 100%;"><button class="btn btn-primary" id="btnaddinventory-1" type="button" data-bs-dismiss="offcanvas" style="background: rgb(8,197,50);margin: 0px 10px;">Save</button><button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas" style="background: rgb(231,74,59);">Cancel</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Alert!</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you confirm to delete this record?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" id="showAlertBtn" type="button" data-bs-target="#modal-2" data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button><button class="btn btn-light" type="button" data-bs-dismiss="modal" style="background: rgb(231,74,59);color: rgb(255,255,255);">No</button></div>
            </div>
        </div>
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