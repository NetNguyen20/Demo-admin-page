<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page product admin</title>
    <link rel="stylesheet" href="../../Assets/CSS/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">TABLE</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./product.php" aria-expanded="false">
                                <span>
                                </span>
                                <span class="hide-menu">Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./thenew.php" aria-expanded="false">
                                <span>
                                </span>
                                <span class="hide-menu">The news</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./info.php" aria-expanded="false">
                                <span>
                                </span>
                                <span class="hide-menu">Information</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="./setting.php" aria-expanded="false">
                                <span>
                                </span>
                                <span class="hide-menu">Setting</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../../Assets/Images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->

            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">PAGE&nbsp; SETTING</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Add new setting
                            </button>
                            <form method="post">



                                <br>
                                <br>
                                <div id="displaySettingData">

                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add setting</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Setting name</label>
                                                            <input type="text" class="form-control" id="setting_name" required value="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Setting language</label>
                                                            <input type="text" class="form-control" id="setting_language" required value="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Setting color</label>
                                                            <input type="text" class="form-control" id="setting_color" required value="">
                                                        </div>
                                                       
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- <a href="../../"></a> -->
                                            <div class="modal-footer">
                                                <div class="form-group mt-1" id="nonloading">
                                                    <button type="button" onclick="addsetting()" class="btn btn-primary">Add new</button>
                                                </div>
                                                <div class="form-group mt-1" id="loading">
                                                    <button class="btn btn-primary">
                                                        <span class="spinner-border spinner-border-sm"></span>
                                                        Loading..
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- UPDATE PRODUCT-->
                                <div class="modal fade" id="updatesetting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit setting</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Setting name</label>
                                                            <input type="text" class="form-control" id="update_name" required value="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Setting language</label>
                                                            <input type="text" class="form-control" id="update_language" required value="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Setting color</label>
                                                            <input type="text" class="form-control" id="update_color" required value="">
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- <a href="../../"></a> -->
                                            <div class="modal-footer">
                                                <div class="form-group mt-1" id="nonloading_upd">
                                                    <button type="button" onclick="update_setting()" class="btn btn-primary">Update</button>
                                                </div>
                                                <div class="form-group mt-1" id="loading_upd">
                                                    <button class="btn btn-primary">
                                                        <span class="spinner-border spinner-border-sm"></span>
                                                        Loading..
                                                    </button>
                                                </div>
                                                <input type="hidden" name="" id="hiddendatasetting">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../../Libs/jquery/dist/jquery.min.js"></script>
    <script src="../../Libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../Libs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../Libs/bootstrap/dist/css/bootstrap.css"></script>
    <script src="../../Assets/JS/sidebarmenu.js"></script>
    <script src="../../Assets/JS/app.min.js"></script>
    <script src="../../Libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../Libs/simplebar/dist/simplebar.js"></script>
    <script src="../../Assets/JS/dashboard.js"></script>
    <script src="../../Assets/JS/function.js"></script>
    <script>
        $(document).ready(function() {
            displayDataSetting();
        });
    </script>
</body>

</html>