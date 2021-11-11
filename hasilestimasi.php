<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags-->
    <meta charset="Utotal_cfp-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Hasil Perhitungan FP</title>

    <!-- Fontotal_cfpaces CSS-->
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

                        <!-- Basic Horizontal form layout section start -->
                        <div class="main-content">
                            <div class="section__content section__content--p3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="card">

                                                <div class="card-body">
                                                    <div class="card-title">
                                                        <b><h3 class="text-center title-2">Hasil Estimasi Biaya</b>
                                                        </div></h3><br/>
                                                        <div class="card-header" style="margin-right:20px; margin-left: 20px;">

                                                            <p style="font-size: 12px">Petunjuk Pengisian: </p>
                                                            <p style="font-size: 12px">- Memilih dan menginputkan jumlah Engineering yang digunakan pada proyek pengembangan perangkat lunak sesuai dengan aktifitas yang dibutuhkan</p>
                                                            <p style="font-size: 12px">- Menginputkan gaji dari engineering yang telah dipilih dalam mengerjakan proyek pengembangan perangkat lunak</p>
                                                        </div>
                                                        <br/>
                                                        <form action="hasilestimasi_akhir.php" method="post">
                                                         <table class="table table-lg">
                                                            <thead>
                                                                <tr style="background-color:#20B2AA; color:black;">
                                                                    <th width="220px">Aktivitas</th>
                                                                    <th width="170px">Engineering</th>
                                                                    <th width="50px">Jumlah Engineering</th>
                                                                    <th width="120px">Effort (%)</th>
                                                                    <th width="200px">Hours Of Effort</th>
                                                                    <th width="300px">Standar Gaji/ Jam (Rp)</th>

                                                                </tr>
                                                            </thead>

                                                            <?php
                                                            $nama_app = $_POST['nama_app'];
                                                            $effort = $_POST['effort'];
                                                            $tanggal = $_POST['tanggal'];
                                                            $total_fp = $_POST['total_fp'];
                                                            $total_effort = $_POST['total_effort'];

                                                            $total_cfp = $_POST['total_cfp'];
                                                            $total_rcaf = $_POST['total_rcaf'];
                                                            $total_tcf = $_POST['total_tcf'];
                                                            $hour_effort = $_POST['hour_effort'];

                                                    /* $teff1    =$_POST['eff1'] * $total_effort;
                                                    $teff2    =$_POST['eff2'] * $total_effort;
                                                    $teff3    =$_POST['eff3'] * $total_effort;
                                                    $teff4    =$_POST['eff4'] * $total_effort;
                                                    $teff5    =$_POST['eff5'] * $total_effort;
                                                    $teff6    =$_POST['eff6'] * $total_effort;
                                                    $teff7    =$_POST['eff7'] * $total_effort;
                                                    $teff8    =$_POST['eff8'] * $total_effort;
                                                    $teff9    =$_POST['eff9'] * $total_effort;
                                                    $teff10   =$_POST['eff10'] * $total_effort;
                                                    $teff11   =$_POST['eff11'] * $total_effort;*/

                                                    $hof1    = 0.075 * $hour_effort;
                                                    $hof2    =0.175 * $hour_effort;
                                                    $hof3    =0.10 * $hour_effort;
                                                    $hof4    =0.07 * $hour_effort;
                                                    $hof5    =0.1234 * $hour_effort;
                                                    $hof6    =0.2466 * $hour_effort;
                                                    $hof7    =0.07 * $hour_effort;
                                                    $hof8    =0.03 * $hour_effort;
                                                    $hof9    =0.03 * $hour_effort;
                                                    $hof10    =0.03 * $hour_effort;
                                                    $hof11    =0.05 * $hour_effort;

                                                    $total_hof = $hof1 + $hof2 + $hof3 + $hof4 +$hof5 + $hof6 + $hof7 + $hof8 +$hof9 + $hof10 + $hof11;

                                                    /*$total1 = $hof1 * 43750;
                                                    $total2 = $hof2 * 43750;
                                                    $total3 = $hof3 * 31250;
                                                    $total4 = $hof4 * 43000;
                                                    $total5 = $hof5 * 50000;
                                                    $total6 = $hof6 * 50000;
                                                    $total7 = $hof7 * 125000;
                                                    $total8 = $hof8 * 43750;
                                                    $total9 = $hof9 * 43750;
                                                    $total10 = $hof10 * 43750;
                                                    $total11 = $hof11 * 43750;

                                                    $total_estimasi = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11;*/



                                                    
                                                    ?>
                                                    
                                                    <input type="hidden" name="total_cfp" value= "<?php echo $total_cfp?>">
                                                    <input type="hidden" name="total_rcaf" value= "<?php echo $total_rcaf?> ">
                                                    <input type="hidden" name="total_tcf" value= "<?php echo $total_tcf?>">
                                                    <input type="hidden" name="total_fp" value= "<?php echo $total_fp ?>">
                                                    <input type="hidden" name="total_effort" value= "<?php echo $total_effort?>">
                                                    <input type="hidden" name="hour_effort" value= "<?php echo $hour_effort?>">
                                                    
                                                    <tbody>



                                                        <input type="hidden" id="nama_app" name="nama_app" class="form-control" step="any" value="<?php echo $nama_app?>">





                                                        <input type="hidden" id="tanggal" name="tanggal" class="form-control" step="any" value="<?php echo date('d F Y');?>">

                                                        <input type="hidden" id="effort" name="effort" class="form-control" step="any" value="<?php echo $effort ?> ">
                                                        <input type="hidden" id="total_fp" name="total_fp" class="form-control" step="any" value="<?php echo $total_fp ?> ">


                                                        <tr>
                                                            <td class="text-bold-500" colspan="6">Tahap Development</td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act1">Requirement</textarea></td>
                                                            <td><textarea class="form-control" name="eng1">System Analyst</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml1" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff1" value="7.5%"></td>
                                                            <td><input type="text" class="form-control" name="hof1" value="<?php echo $hof1 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji1" value="0"></td>


                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act2">Spesification & Design</textarea></td>
                                                            <td><textarea class="form-control" name="eng2">UI Disigner</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml2" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff2" value="17.5%"></td>
                                                            <td><input type="text" class="form-control" name="hof2" value="<?php echo $hof1 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji2" value="0"></td>

                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act3">Implementation</textarea></td>
                                                            <td><textarea class="form-control" name="eng3">Programmer</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml3" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff3" value="10%"></td>
                                                            <td><input type="text" class="form-control" name="hof3" value="<?php echo $hof3 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji3" value="0"></td>

                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act4">Acceptance & Deployment</textarea></td>
                                                            <td><textarea class="form-control" name="eng4">Integration Testing</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml4" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff4" value="7%"></td>
                                                            <td><input type="text" class="form-control" name="hof4" value="<?php echo $hof4 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji4" value="0"></td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-bold-500" colspan="6">Quality & Testing</td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act5">Integration Testing</textarea></td>
                                                            <td><textarea class="form-control" name="eng5">Test Analyst</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml5" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff5" value="12.34%"></td>
                                                            <td><input type="text" class="form-control" name="hof5" value="<?php echo $hof5 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji5" value="0"></td>

                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act6">Quality Asurance</textarea></td>
                                                            <td><textarea class="form-control" name="eng6">QA Testing</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml6" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff6" value="24.66%"></td>
                                                            <td><input type="text" class="form-control" name="hof6" value="<?php echo $hof6 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji6" value="0"></td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-bold-500" colspan="6">OnGoing Activity</td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act7">Project Management</textarea></td>
                                                            <td><textarea class="form-control" name="eng7">Project Manager</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml7" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff7" value="7%"></td>
                                                            <td><input type="text" class="form-control" name="hof7" value="<?php echo $hof7 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji7" value="0"></td>

                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act8">Configuration Management</textarea></td>
                                                            <td><textarea class="form-control" name="eng8">Software Engineer</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml8" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff8" value="3%"></td>
                                                            <td><input type="text" class="form-control" name="hof8" value="<?php echo $hof8 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji8" value="0"></td>

                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act9">Documentation</textarea></td>
                                                            <td><textarea class="form-control" name="eng9">Software Engineer</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml9" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff9" value="3%"></td>
                                                            <td><input type="text" class="form-control" name="hof9" value="<?php echo $hof9 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji9" value="0"></td>

                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act10">Training & Support</textarea></td>
                                                            <td><textarea class="form-control" name="eng10">Software Engineer</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml10" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff10" value="3%"></td>
                                                            <td><input type="text" class="form-control" name="hof10" value="<?php echo $hof10 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji10" value="0"></td>

                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control" name="act11">Acceptance & Deployment</textarea></td>
                                                            <td><textarea class="form-control" name="eng11">Software Engineer</textarea></td>
                                                            <td><input type="number" class="form-control" name="jml11" value="0"></td>
                                                            <td><input type="text" class="form-control" name="eff11" value="5%"></td>
                                                            <td><input type="text" class="form-control" name="hof11" value="<?php echo $hof11 ?>"></td>
                                                            <td><input type="text" class="form-control" name="gaji11" value="0"></td>

                                                        </tr>
                                                        <tr>
                                                            <td><b>Total</td></b>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td><input style="background-color:#00CED1;" type="text" class="form-control" name="total_hof" value="<?php echo $total_hof ?> Jam"></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td colspan="4">


                                                                <button type="reset"
                                                                class="btn btn-danger btn-sm">Reset</button>
                                                                <button type="submit"
                                                                class="btn btn-primary btn-sm">Selanjutnya</button>
                                                            </td>
                                                        </tr>



                                                    </table></center>

                                                </div>
                                            </div>

                                        </div>




                                    </div>
                                </div> 
                            </form> 
                        </div> 
                    </div>
                </div>

            </div>
            <br/><br/><br/><br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright  <a href="">Ririn Monika</a>.</p>
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


<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<!--
<script type="text/javascript">
    $(document).ready(function() {
        $("#total_rcaf").keyup(function() {
            var total_rcaf = $("#total_rcaf").val();

            var total_tcf = 0.65 + (0.01 * parseInt(total_rcaf)) ;
            $("#total_tcf").val(total_tcf);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#total_cfp, #total_rcaf").keyup(function() {
            var total_cfp  = $("#total_cfp").val();
            var total_rcaf = $("#total_rcaf").val();

            var total_fp = parseInt(total_cfp) * (0.65 + 0.01 * parseInt(total_rcaf)) ;
            $("#total_fp").val(total_fp);
        });
    });
</script>


<script>
    function sum() {
        var txtotal_cfpirsttextValue = document.getElementById('total_fp').value;

        var result = parseInt(txtotal_cfpirsttextValue) * 20 * 0.00136986;
        if (!isNaN(result)) {
            document.getElementById('total_effort').value = result;
        }
    }
</script>-->
</body>

</html>


<!-- end document-->
