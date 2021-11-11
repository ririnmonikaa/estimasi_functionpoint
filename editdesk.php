<?php 
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
        echo "Data berhasil di input.";
    }else if($pesan == "update"){
        echo "Data berhasil di update.";
    }else if($pesan == "hapus"){
        echo "Data berhasil di hapus.";
    }
}
?>
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
                                <i class="fas fa-tachometer-alt"></i>Estimasi Biaya</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li><a href="deskripsi.php">Deskripsi Aplikasi</a></li>


                                    <li><a href="cfp.php">Indikator CFP</a></li>


                                    <li><a href="rcaf.php">Indikator RCAF</a></li>

                                    <li><a href="hasilfp.php">Hasil FP</a></li>

                                    <li><a href="hasilestimasi.php">Hasil Estimasi </a></li>
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
                                    <i class="fas fa-tachometer-alt"></i>Estimasi Biaya</a>
                                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                        <li><a href="deskripsi.php">Deskripsi Aplikasi</a></li>


                                        <li><a href="cfp.php">Indikator CFP</a></li>


                                        <li><a href="rcaf.php">Indikator RCAF</a></li>

                                        <li><a href="hasilfp.php">Hasil FP</a></li>

                                        <li><a href="hasilestimasi.php">Hasil Estimasi </a></li>
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

                    <!-- END HEADER DESKTOP-->

                    <!-- MAIN CONTENT-->
                    <div class="main-content">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Deskripsi Aplikasi</h3>
                                                </div>
                                                <hr>

                                                <?php include "koneksi.php";

                                                $id = $_GET['id'];
                                                $sql = mysqli_query($koneksi,"SELECT * FROM deskripsi WHERE id='$id'");
                                                $data = mysqli_fetch_array($sql);

                                                $effort = $data['effort'];
                                                ?>

                                                <form action="editdesk_koneksi.php" method="post">
                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Nama Aplikasi</label>
                                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                        <input id="cc-pament" name="nama_app" type="text" class="form-control" value="<?php echo $data['nama_app']; ?>">
                                                    </div>
                                                    

                                                    <div class="form-group">
                                                       <label class=" form-control-label">Effort Rate</label><br/>
                                                       <input type="radio" name="effort" value="8,6" <?php if($effort=='8,6'){echo "checked";}?> >8,6
                                                       <input type="radio" name="effort" value="20" <?php if($effort=='20'){echo "checked";}?> >20
                                                       <input type="radio" name="effort" value="24" <?php if($effort=='24'){echo "checked";}?> >24
                                                       <input type="radio" name="effort" value="36" <?php if($effort=='36'){echo "checked";}?> >36
                                                   </div>
                                                   <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Keterangan:<br>
                                                        -Nilai 8,6 untuk Proyek Kecil Menengah
                                                        <br>-Nilai 20 untuk Proyek Kecil
                                                        <br>-Nilai 24 untuk Proyek Menengah
                                                        <br>-Nilai 36 untuk Proyek Besar</label>

                                                    </div>
                                                </div>

                                            </div>


                                            <div> 
                                                <button type="submit" class="btn btn-lg btn-info btn-block" name="tambah">Simpan</button> 
                                            </div> 
                                        </form> 





                                    </div>
                                    <!-- END DATA TABLE-->
                                </div>
                            </div><br/><br/><br/>
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

    </html>
    <!-- end document-->
