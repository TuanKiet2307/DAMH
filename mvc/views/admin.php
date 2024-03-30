<?php
  require_once "./mvc/core/libs.php"; require_once "./mvc/core/route.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $data['title'] ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php public_patch('js/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php public_patch('css/jquery-confirm.min.css')?>" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php public_patch('css/sb-admin-2.min.css')?>" rel="stylesheet">
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link <?php active('admin/bang-dieu-khien', 'active')?>" href="<?php echo bangdieukhien ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link <?php active('admin/the-loai-truyen', 'active')?>" href="<?php echo theloaitruyen ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Thể Loại Truyện</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link <?php active('admin/truyen', 'active'); active('admin/sua-truyen', 'active'); active('admin/danh-sach-chuong', 'active'); ?>" href="<?php echo Truyen ?>">
                    <i class="nav-icon fas fa-list"></i>
                    <span>Danh Sách Truyện</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php active('admin/them-truyen', 'active')?>" href="<?php echo ThemTruyen ?>">
                    <i class="nav-icon fas fa-plus"></i>
                    <span>Thêm Truyện</span></a>
            </li>
            <?php if($_SESSION['truyenfull_quyen'] == "admin") {?>
            <li class="nav-item">
                <a class="nav-link <?php active('admin/tai-khoan', 'active')?>" href="<?php echo TaiKhoan ?>">
                    <i class="nav-icon fas fa-user"></i>
                    <span>Tài Khoản</span></a>
            </li>
            <?php } ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

           


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="nav-link <?php active('admin/bang-dieu-khien', 'active')?>" href="<?php echo APP_URL ?>">
                    
                    <span>Trang Chủ</span></a>
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['truyenfull_user'] ?></span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                              
                                <a class="dropdown-item" href="<?php echo DangXuat ?>"  >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <?php require_once './mvc/views/'.$data['page'].'.php';  ?>


            </div>
            <!-- End of Main Content -->
            
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                
            </footer>
            <!-- End of Footer -->
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    

   

    <!-- Bootstrap core JavaScript-->
    <script src="<?php public_patch('js/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php public_patch('js/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php public_patch('js/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php public_patch('js/sb-admin-2.min.js')?>"></script>
    <!-- Page level plugins -->

    <!-- Page level custom scripts -->
    <script src="<?php public_patch('js/jquery-confirm.min.js')?>"></script>
    <script src="<?php public_patch('js/js_alert.js')?>"></script>
    

    <?php 
        if(isset($_COOKIE['message'])){
            echo '<script>Alert("'.$_COOKIE["message"].'")</script>';
        }
    ?>
</body>

</html>