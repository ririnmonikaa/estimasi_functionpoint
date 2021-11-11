<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tambah Data</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="jquery.js"></script>

</head>

<body class="animsition">


    <div class="page-wrapper">

     <!-- HEADER MOBILE-->
     <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="images/icon/logo.png" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a href="home.php">
                            <i class="fas fa-chart-bar"></i>Beranda</a>


                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Estimasi</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">


                                    <li><a href="deskripsi.php">Estimasi Biaya</a></li>


                                    <li><a href="history.php">History Estimasi</a></li>


                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <h2>Estimasi Biaya</h2>
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="home.php">
                                    <i class="fas fa-chart-bar"></i>Beranda</a>
                                </li>

                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-tachometer-alt"></i>Estimasi</a>
                                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">


                                            <li><a href="deskripsi.php">Estimasi Biaya</a></li>


                                            <li><a href="history.php">History Estimasi</a></li>


                                        </ul>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <!-- END MENU SIDEBAR-->

                    <!-- PAGE CONTAINER-->
                    <!-- PAGE CONTAINER-->
                    <div class="page-container">
                        <!-- HEADER DESKTOP-->
                        <header class="header-desktop">
                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    <div class="header-wrap">
                                       <div></div>
                                       <div class="header-button">

                                        <div class="account-wrap">
                                            <?php 
                                            include 'koneksi.php';
                                            $data = mysqli_query($koneksi,"select * from admin");
                                            while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <div class="account-item clearfix js-item-menu">

                                                    <div class="content">
                                                     <?php echo $d['username']; ?>
                                                 </div>
                                                 <div class="account-dropdown js-dropdown">
                                                    <div class="info clearfix">
                                                        <h5 class="name">
                                                            <?php echo $d['username']; ?>
                                                        </h5>

                                                    </div>
                                                    <div class="account-dropdown__body">
                                                        <div class="account-dropdown__item">
                                                            <a href="edit_profil.php?id=<?php echo $d['id']; ?>">
                                                                <i class="zmdi zmdi-account"></i>Edit Profil</a>
                                                            </div>

                                                        </div>
                                                        <div class="account-dropdown__footer">
                                                            <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- HEADER DESKTOP-->
                        <!-- HEADER DESKTOP-->

                        <!-- MAIN CONTENT-->
                        <div class="main-content">
                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    <div class="row">


                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Edit</strong> Profil
                                                </div>
                                                <div class="card-body card-block">

                                                    <?php
                                                    include 'koneksi.php';
                                                    $id = $_GET['id'];
                                                    $data = mysqli_query($koneksi,"select * from admin where id='$id'");
                                                    while($d = mysqli_fetch_array($data)){ 
                                                        ?>

                                                        <form action="update_profil.php" method="post" enctype="multipart/form-data" class="form-horizontal">


                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="text-input" class=" form-control-label">Username</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">

                                                                    <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $d['id']; ?>">
                                                                    <input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>">
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="password" name="password" value="<?php echo $d['password']; ?>" class="form-password">
                                                                    <br/><br/>
                                                                    <input type="checkbox" class="form-checkbox"> Show password

                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button type="submit" class="btn btn-primary btn-sm">
                                                                    <i class="fa fa-dot-circle-o"></i> Edit
                                                                </button>
                                                                <button type="reset" name="clear" class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-ban"></i> Reset
                                                                </button>
                                                            </div>
                                                        </form>

                                                        <?php
                                                    }
                                                    ?>



                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </div>










                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p class="copy_right text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="#" target="_blank">RirinMonika</a>
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script>

    </body>
    <script type="text/javascript">
        $(document).ready(function(){       
            $('.form-checkbox').click(function(){
                if($(this).is(':checked')){
                    $('.form-password').attr('type','text');
                }else{
                    $('.form-password').attr('type','password');
                }
            });
        });
    </script>

    </html>
    <!-- end document-->
