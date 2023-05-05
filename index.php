<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Virtual Card Admin Panel.">

        <title>BanCard</title>

        <link rel="stylesheet" href="./assets/css/feather.css">
        <link rel="stylesheet" href="./assets/css/flatpickr.min.css">
        <link rel="stylesheet" href="./assets/css/quill.core.css">
        <link rel="stylesheet" href="./assets/css/icons.css">
        <link rel="stylesheet" href="./assets/css/theme.min.css">
        <!-- <link rel="stylesheet" href="./assets/css/theme-dark.min.css"> -->

        <style type="text/css">
            html, body {
                text-size-adjust: none;
                -webkit-text-size-adjust: none;
                -moz-text-size-adjust: none;
                -ms-text-size-adjust: none;
            }
        </style>

        <style id="mttstyle">
            #mttContainer {
                left: 0 !important;
                top: 0 !important;
                position: fixed !important;
                z-index: 100000200 !important;
                width: 1000px !important;
                margin-left: -500px !important;
                background-color: #00000000  !important;
                pointer-events: none !important;
            }
            .bootstrapiso .tooltip {
                width:auto  !important;
                height:auto  !important;
                background:transparent  !important;
                border:none !important;
                border-radius: 0px !important;
                visibility: visible  !important;
                pointer-events: none !important;
            }
            .bootstrapiso .tooltip-inner {
                font-size: 13px  !important;
                max-width: 200px  !important;
                text-align: center !important;
                backdrop-filter: blur(2px)  !important; 
                background-color: #000000b8 !important;
                color: #ffffffff !important;
                border-radius: .25rem !important;
                pointer-events: none !important;
            }
            .bootstrapiso .arrow::before {
                border-top-color: #000000b8 !important;
            }
        </style>

        <style type="text/css">
            .scrollbar {
                overflow-y: auto;
            }
            #sidebar::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                background-color: #ffffff;
            }
            #sidebar::-webkit-scrollbar {
                width: 6px;
                background-color: #ffffff;
            }
            #sidebar::-webkit-scrollbar-thumb {
                background-color: #2c7be5;
            }
        </style>
    </head>    
    <body>
        <nav class="navbar navbar-vertical fixed-left navbar-expand-md scrollbar navbar-light" id="sidebar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/images/logo.png" style="width: 180px; max-height: fit-content; visibility: visible;" class="navbar-brand-img mx-auto" alt="..." data-xblocker="passed">
                </a>
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                &nbsp;&nbsp;&nbsp;<span style="margin: auto;" class="badge badge-success">Active</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-dollar"></i> &nbsp; Balance: <b style="color:#32bf84;">&nbsp;$0.00</b>
                            </a>
                        </li>
                        <li id="home" class="active">
                            <a class="nav-link" href="#">
                                <i class="fa fa-home"></i> &nbsp; Home
                            </a>
                        </li>
                        <li id="addfund" class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-shopping-cart"></i> &nbsp; Add Fund
                            </a>
                        </li>
                        <li class="nav-item" id="virtualcard">
                            <a class="nav-link" href="#">
                                <i class="fa fa-credit-card"></i> &nbsp; Create Virtual Card
                            </a>
                        </li>
                        <li class="nav-item" id="virtualcardlist">
                            <a class="nav-link" href="#">
                                <i class="fa fa-credit-card"></i> &nbsp; Virtual Card List
                            </a>
                        </li>
                    </ul>
                    <br>
                    <br>
                    <a href="#" class="btn btn-block btn-primary mb-4">
                        <i class="fa fa-times-circle-o"></i> Logout
                    </a>
                </div>
            </div>
        </nav>

        <p style="color: red; margin-bottom: 0px;">
            <marquee width="100%" direction="left" height="auto">We are going to introduce bank transfer soon.</marquee>
        </p>

        <div class="main-content">
            <div class="header">
                <div class="container-fluid">
                    <div class="header-body" style="padding-top: 0px;">
                        <div class="row align-items-end">
                            <div class="col">
                                <h6 class="header-pretitle">Overview</h6>
                                <h1 class="header-title" style="display: inline-flex;">Dashboard</h1>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-primary lift">
                                    <i class="fa fa-sign-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-2">Balance</h6>
                                        <span class="h2 mb-0">$0.00</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h2 fa fa-dollar text-muted mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-2">Total Card</h6>
                                        <span class="h2 mb-0">0</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h2 fa fa-credit-card text-muted mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-2">Active Card</h6>
                                        <span class="h2 mb-0">0</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h2 fa fa-credit-card text-muted mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-2">Total Transactions</h6>
                                        <span class="h2 mb-0">$0.00</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h2 fa fa-dollar text-muted mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-2">Open Ticket</h6>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">
                                                <span class="h2 mb-0">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h2 fa fa-envelope text-muted mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-8" style="margin: auto;">
                        <div class="card-body text-center">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-10">
                                    <p class="text-muted" style="padding:5px;border: 1px solid #37517e;">
                                        Our cards are not allowed on any Money transfer website, dating sites, betting sites, bitcoin, binary option, trading and cryptocurrency websites.
                                    </p>
                                    <h2 class="mb-2">Welcome To Bancacard</h2>
                                    <p class="text-muted">Developed By Software Info</p>
                                    <a href="#" class="btn btn-primary lift">Create Virtual Card</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script src="./assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="./assets/js/draggable.bundle.legacy.js" type="text/javascript"></script>
        <script src="./assets/js/autosize.min.js" type="text/javascript"></script>
        <script src="./assets/js/chart.min.js" type="text/javascript"></script>
        <script src="./assets/js/dropzone.min.js" type="text/javascript"></script>
        <script src="./assets/js/flatpickr.min.js" type="text/javascript"></script>
        <script src="./assets/js/highlight.pack.min.js" type="text/javascript"></script>
        <script src="./assets/js/jquery.mask.min.js" type="text/javascript"></script>
        <script src="./assets/js/list.min.js" type="text/javascript"></script>
        <script src="./assets/js/quill.min.js" type="text/javascript"></script>
        <script src="./assets/js/select2.full.min.js" type="text/javascript"></script>
        <script src="./assets/js/theme.min.js" type="text/javascript"></script>         -->
    </body>
</html>