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
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="Origin.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="table.html"><i class="fas fa-table"></i><span>Table</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"><i class="far fa-user-circle"></i><span>Login</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Register</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
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
                    <div class="alert alert-success d-none alert-dismissible" role="alert" id="successMessage" style="background-color: #B4F7D2!important;border: 1px solid #0C6D38;position: absolute;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="close_alert"></button><i class="icon ion-checkmark-round me-1"></i><span style="color: #0C6D38 !important;">Record Added Successfully</span></div>
                    <div class="row justify-content-center" style="margin: 0px;">
                        <div class="col-xl-10 col-xxl-9">
                            <div class="card shadow">
                                <div class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3" style="padding: 8px 16px;">
                                    <div class="row" style="margin: 0px;width: 100%;">
                                        <div class="col-xl-10 col-xxl-11" style="padding: 0px;">
                                            <h1 style="margin: 0px 0px;margin-bottom: 0px;">Payment Management</h1>
                                        </div>
                                        <div class="col text-center" style="padding: 0px;">
                                            <div class="input-group input-group-sm text-end" style="width: 35px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="example">
                                            <thead>
                                                <tr>
                                                    <th>Payment ID</th>
                                                    <th>Order ID</th>
                                                    <th>Method</th>
                                                    <th>Status</th>
                                                    <th>Amount(RM)</th>
                                                    <th>Date</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-truncate" style="max-width: 200px;">#654897591</td>
                                                    <td class="text-truncate" style="max-width: 200px;">OR_0001</td>
                                                    <td>Card</td>
                                                    <td>Paid</td>
                                                    <td>RM 1200</td>
                                                    <td>6/9/2024</td>
                                                    <td class="text-start text-center"><button class="btn" type="button" style="padding: 0px;margin-right: 5px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" style="font-size: 25px;">
                                                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"></path>
                                                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"></path>
                                                            </svg></button><button class="btn" type="button" style="padding: 0px;margin-left: 5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 25px;">
                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                <path d="M40 32C53.25 32 64 42.75 64 56V456C64 469.3 53.25 480 40 480H24C10.75 480 0 469.3 0 456V56C0 42.75 10.75 32 24 32H40zM128 48V464C128 472.8 120.8 480 112 480C103.2 480 96 472.8 96 464V48C96 39.16 103.2 32 112 32C120.8 32 128 39.16 128 48zM200 32C213.3 32 224 42.75 224 56V456C224 469.3 213.3 480 200 480H184C170.7 480 160 469.3 160 456V56C160 42.75 170.7 32 184 32H200zM296 32C309.3 32 320 42.75 320 56V456C320 469.3 309.3 480 296 480H280C266.7 480 256 469.3 256 456V56C256 42.75 266.7 32 280 32H296zM448 56C448 42.75 458.7 32 472 32H488C501.3 32 512 42.75 512 56V456C512 469.3 501.3 480 488 480H472C458.7 480 448 469.3 448 456V56zM384 48C384 39.16 391.2 32 400 32C408.8 32 416 39.16 416 48V464C416 472.8 408.8 480 400 480C391.2 480 384 472.8 384 464V48z"></path>
                                                            </svg></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate" style="max-width: 200px;">#321951798</td>
                                                    <td class="text-truncate" style="max-width: 200px;">OR_0002</td>
                                                    <td>Card</td>
                                                    <td>Unpaid</td>
                                                    <td>RM 300</td>
                                                    <td>6/9/2024</td>
                                                    <td class="text-start text-center"><button class="btn" type="button" style="padding: 0px;margin-right: 5px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" style="font-size: 25px;">
                                                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"></path>
                                                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"></path>
                                                            </svg></button><button class="btn" type="button" style="padding: 0px;margin-left: 5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 25px;">
                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                <path d="M40 32C53.25 32 64 42.75 64 56V456C64 469.3 53.25 480 40 480H24C10.75 480 0 469.3 0 456V56C0 42.75 10.75 32 24 32H40zM128 48V464C128 472.8 120.8 480 112 480C103.2 480 96 472.8 96 464V48C96 39.16 103.2 32 112 32C120.8 32 128 39.16 128 48zM200 32C213.3 32 224 42.75 224 56V456C224 469.3 213.3 480 200 480H184C170.7 480 160 469.3 160 456V56C160 42.75 170.7 32 184 32H200zM296 32C309.3 32 320 42.75 320 56V456C320 469.3 309.3 480 296 480H280C266.7 480 256 469.3 256 456V56C256 42.75 266.7 32 280 32H296zM448 56C448 42.75 458.7 32 472 32H488C501.3 32 512 42.75 512 56V456C512 469.3 501.3 480 488 480H472C458.7 480 448 469.3 448 456V56zM384 48C384 39.16 391.2 32 400 32C408.8 32 416 39.16 416 48V464C416 472.8 408.8 480 400 480C391.2 480 384 472.8 384 464V48z"></path>
                                                            </svg></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate" style="max-width: 200px;">#456159375</td>
                                                    <td class="text-truncate" style="max-width: 200px;">OR_0003</td>
                                                    <td>E_wallet</td>
                                                    <td>Paid</td>
                                                    <td>RM 780</td>
                                                    <td>6/9/2024</td>
                                                    <td class="text-start text-center"><button class="btn" type="button" style="padding: 0px;margin-right: 5px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" style="font-size: 25px;">
                                                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"></path>
                                                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"></path>
                                                            </svg></button><button class="btn" type="button" style="padding: 0px;margin-left: 5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 25px;">
                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                <path d="M40 32C53.25 32 64 42.75 64 56V456C64 469.3 53.25 480 40 480H24C10.75 480 0 469.3 0 456V56C0 42.75 10.75 32 24 32H40zM128 48V464C128 472.8 120.8 480 112 480C103.2 480 96 472.8 96 464V48C96 39.16 103.2 32 112 32C120.8 32 128 39.16 128 48zM200 32C213.3 32 224 42.75 224 56V456C224 469.3 213.3 480 200 480H184C170.7 480 160 469.3 160 456V56C160 42.75 170.7 32 184 32H200zM296 32C309.3 32 320 42.75 320 56V456C320 469.3 309.3 480 296 480H280C266.7 480 256 469.3 256 456V56C256 42.75 266.7 32 280 32H296zM448 56C448 42.75 458.7 32 472 32H488C501.3 32 512 42.75 512 56V456C512 469.3 501.3 480 488 480H472C458.7 480 448 469.3 448 456V56zM384 48C384 39.16 391.2 32 400 32C408.8 32 416 39.16 416 48V464C416 472.8 408.8 480 400 480C391.2 480 384 472.8 384 464V48z"></path>
                                                            </svg></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate" style="max-width: 200px;">#951954621</td>
                                                    <td class="text-truncate" style="max-width: 200px;">OR_0004</td>
                                                    <td>Card</td>
                                                    <td>Paid</td>
                                                    <td>RM 600</td>
                                                    <td>6/9/2024</td>
                                                    <td class="text-start text-center"><button class="btn" type="button" style="padding: 0px;margin-right: 5px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" style="font-size: 25px;">
                                                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"></path>
                                                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"></path>
                                                            </svg></button><button class="btn" type="button" style="padding: 0px;margin-left: 5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 25px;">
                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                <path d="M40 32C53.25 32 64 42.75 64 56V456C64 469.3 53.25 480 40 480H24C10.75 480 0 469.3 0 456V56C0 42.75 10.75 32 24 32H40zM128 48V464C128 472.8 120.8 480 112 480C103.2 480 96 472.8 96 464V48C96 39.16 103.2 32 112 32C120.8 32 128 39.16 128 48zM200 32C213.3 32 224 42.75 224 56V456C224 469.3 213.3 480 200 480H184C170.7 480 160 469.3 160 456V56C160 42.75 170.7 32 184 32H200zM296 32C309.3 32 320 42.75 320 56V456C320 469.3 309.3 480 296 480H280C266.7 480 256 469.3 256 456V56C256 42.75 266.7 32 280 32H296zM448 56C448 42.75 458.7 32 472 32H488C501.3 32 512 42.75 512 56V456C512 469.3 501.3 480 488 480H472C458.7 480 448 469.3 448 456V56zM384 48C384 39.16 391.2 32 400 32C408.8 32 416 39.16 416 48V464C416 472.8 408.8 480 400 480C391.2 480 384 472.8 384 464V48z"></path>
                                                            </svg></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate" style="max-width: 200px;">#321948568</td>
                                                    <td class="text-truncate" style="max-width: 200px;">OR_0005</td>
                                                    <td>Card</td>
                                                    <td>Paid</td>
                                                    <td>RM 800</td>
                                                    <td>6/9/2024</td>
                                                    <td class="text-start text-center"><button class="btn" type="button" style="padding: 0px;margin-right: 5px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" style="font-size: 25px;">
                                                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"></path>
                                                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"></path>
                                                            </svg></button><button class="btn" type="button" style="padding: 0px;margin-left: 5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 25px;">
                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                <path d="M40 32C53.25 32 64 42.75 64 56V456C64 469.3 53.25 480 40 480H24C10.75 480 0 469.3 0 456V56C0 42.75 10.75 32 24 32H40zM128 48V464C128 472.8 120.8 480 112 480C103.2 480 96 472.8 96 464V48C96 39.16 103.2 32 112 32C120.8 32 128 39.16 128 48zM200 32C213.3 32 224 42.75 224 56V456C224 469.3 213.3 480 200 480H184C170.7 480 160 469.3 160 456V56C160 42.75 170.7 32 184 32H200zM296 32C309.3 32 320 42.75 320 56V456C320 469.3 309.3 480 296 480H280C266.7 480 256 469.3 256 456V56C256 42.75 266.7 32 280 32H296zM448 56C448 42.75 458.7 32 472 32H488C501.3 32 512 42.75 512 56V456C512 469.3 501.3 480 488 480H472C458.7 480 448 469.3 448 456V56zM384 48C384 39.16 391.2 32 400 32C408.8 32 416 39.16 416 48V464C416 472.8 408.8 480 400 480C391.2 480 384 472.8 384 464V48z"></path>
                                                            </svg></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer"></div>
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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-1">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add Inventory</h5><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="border-color: rgb(255,255,255);">
            <div class="container">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Product Image</p><img src="assets/img/Battery.png" width="96" height="82">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Product Name</p>
                        <div class="dropdown" style="width: 100%;height: 30px;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="color: rgb(0,0,0);background: rgb(255,255,255);width: 100%;text-align: left;border-color: rgb(136,136,136);height: 30px;padding: 2px 12px;">Battery A</button>
                            <div class="dropdown-menu" style="width: 100%;"><a class="dropdown-item" href="#">Battery A</a><a class="dropdown-item" href="#">Battery B</a><a class="dropdown-item" href="#">Battery C</a></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Brand Name</p><input type="text" style="width: 100%;">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Serial Number</p><input type="text" style="width: 100%;">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Entry Date</p><input type="date" style="width: 100%;height: 30px;">
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
            <h5 class="offcanvas-title">Edit Inventory</h5><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="border-color: rgb(255,255,255);">
            <div class="container">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Product Image</p><img src="assets/img/Battery.png" width="96" height="82">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Product Name</p>
                        <div class="dropdown" style="width: 100%;height: 30px;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="color: rgb(0,0,0);background: rgb(255,255,255);width: 100%;text-align: left;border-color: rgb(136,136,136);height: 30px;padding: 2px 12px;">Battery A</button>
                            <div class="dropdown-menu" style="width: 100%;"><a class="dropdown-item" href="#">Battery A</a><a class="dropdown-item" href="#">Battery B</a><a class="dropdown-item" href="#">Battery C</a></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Brand Name</p><input type="text" style="width: 100%;" value="Brand A">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Serial Number</p><input type="text" style="width: 100%;" value="SN001">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <p style="margin-bottom: 2px;">Entry Date</p><input type="date" style="width: 100%;height: 30px;" value="06/09/2024">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-10 text-end" style="width: 100%;"><button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas" style="background: rgb(78,115,223);margin: 0px 10px;">Edit</button><button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas" style="background: rgb(231,74,59);">Cancel</button></div>
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