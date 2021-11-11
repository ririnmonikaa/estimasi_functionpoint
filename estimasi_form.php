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
    <title>Hasil Perhitungan FP</title>

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
                        <a class="js-arrow" href="deskripsi.php">
                            <i class="fas fa-tachometer-alt"></i>Estimasi Biaya</a>

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
                            <a class="js-arrow" href="deskripsi.php">
                                <i class="fas fa-tachometer-alt"></i>Estimasi Biaya</a>
                                
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
                                                </div></h3>

                                                <form action="" method="post">
                                                   <table class="table table-lg">
                                                    <thead>
                                                        <tr>
                                                            <th width="185px">Aktivitas</th>
                                                            <th width="155px">Engineering</th>
                                                            <th width="105px">Effort (%)</th>
                                                            <th width="110px">Hours Of Effort</th>
                                                            <th width="200px">Standar Gaji/ Bulan (Rp)</th>
                                                            <th width="250px">Total (Rp)</th>
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    $tf = $_POST['tf'];
                                                    $total_rcaf = $_POST['total_rcaf'];
                                                    $total_tcf = $_POST['total_tcf'];
                                                    $totalfp = $_POST['tf'];
                                                    $total_effort = $_POST['total_effort'];
                                                    $hour_effort = $_POST['hour_effort'];
                                                    ?>


                                                      <!--<?php

                                                        /*  
                                                        

                                                    $teff1    =$_POST['eff1'] * $total_effort;
                                                    $teff2    =$_POST['eff2'] * $total_effort;
                                                    $teff3    =$_POST['eff3'] * $total_effort;
                                                    $teff4    =$_POST['eff4'] * $total_effort;
                                                    $teff5    =$_POST['eff5'] * $total_effort;
                                                    $teff6    =$_POST['eff6'] * $total_effort;
                                                    $teff7    =$_POST['eff7'] * $total_effort;
                                                    $teff8    =$_POST['eff8'] * $total_effort;
                                                    $teff9    =$_POST['eff9'] * $total_effort;
                                                    $teff10   =$_POST['eff10'] * $total_effort;
                                                    $teff11   =$_POST['eff11'] * $total_effort;

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

                                                    $total1 = $hof1 * 43750;
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



                                                    
                                                    ?>-->
                                                    
                                                    <input type="hidden" name="tf" value= "<?php echo $tf?>">
                                                    <input type="hidden" name="total_rcaf" value= "<?php echo $total_rcaf?> ">
                                                    <input type="hidden" name="tcf" value= "<?php echo $total_tcf?>">
                                                    <input type="hidden" name="effort" value= "<?php echo $total_fp ?>">
                                                    <input type="hidden" name="tf" value= "<?php echo $total_effort?>">
                                                    <input type="hidden" name="tf" value= "<?php echo $hour_effort?>">
                                                    
                                                    <?php
                                                    include 'koneksi.php';
                                                    $no = 1;
                                                    $data = mysqli_query($koneksi,"select * from estimasi");
                                                    while($d = mysqli_fetch_array($data)){
                                                        ?>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-bold-500" colspan="6">Tahap Development</td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act1"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng1"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff1" value="<?php echo $d['persen_effort']; ?>"></td>
                                                                <td><input type="text" class="form-control" name="hof1" value="<?php echo $d['persen_effort'] * $hour_effort; ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji1" value="Rp 43750"></td>
                                                                <td><input type="text" class="form-control" name="total1" value="Rp <?php echo $total1 ?>"></td>
                                                            </tr>
                                                            <!--<tr>
                                                                <td><textarea class="form-control" name="act2"><?php /*echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng2"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff2" value="17.5%"></td>
                                                                <td><input type="text" class="form-control" name="hof2" value="<?php echo $hof1 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji2" value="Rp 43750"></td>
                                                                <td><input type="text" class="form-control" name="total2" value="Rp <?php echo $total2 ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act3"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng3"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff3" value="10%"></td>
                                                                <td><input type="text" class="form-control" name="hof3" value="<?php echo $hof3 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji3" value="Rp 31250"></td>
                                                                <td><input type="text" class="form-control" name="total3" value="Rp <?php echo $total3 ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act4"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng4"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff4" value="7%"></td>
                                                                <td><input type="text" class="form-control" name="hof4" value="<?php echo $hof4 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji4" value="Rp 43000"></td>
                                                                <td><input type="text" class="form-control" name="total4" value="Rp <?php echo $total4 ?>"></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-bold-500" colspan="6">Quality & Testing</td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act5"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng5"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff5" value="12.34%"></td>
                                                                <td><input type="text" class="form-control" name="hof5" value="<?php echo $hof5 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji5" value="Rp 50000"></td>
                                                                <td><input type="text" class="form-control" name="total5" value="Rp <?php echo  $total5 ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act6"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng6"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff6" value="24.66%"></td>
                                                                <td><input type="text" class="form-control" name="hof6" value="<?php echo $hof6 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji6" value="Rp 50000"></td>
                                                                <td><input type="text" class="form-control" name="total6" value="Rp <?php echo $total6 ?>"></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-bold-500" colspan="6">OnGoing Activity</td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act7"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng7"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff7" value="7%"></td>
                                                                <td><input type="text" class="form-control" name="hof7" value="<?php echo $hof7 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji7" value="Rp 125000"></td>
                                                                <td><input type="text" class="form-control" name="total7" value="Rp <?php echo $total7 ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act8"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng8"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff8" value="3%"></td>
                                                                <td><input type="text" class="form-control" name="hof8" value="<?php echo $hof8 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji8" value="Rp 43750"></td>
                                                                <td><input type="text" class="form-control" name="total8" value="Rp <?php echo $total8 ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act9"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng9"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff9" value="3%"></td>
                                                                <td><input type="text" class="form-control" name="hof9" value="<?php echo $hof9 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji9" value="Rp 43750"></td>
                                                                <td><input type="text" class="form-control" name="total9" value="Rp <?php echo $total9 ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act10"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng10"><?php echo $d['engineer']; ?></textarea></td>
                                                                <td><input type="text" class="form-control" name="eff10" value="3%"></td>
                                                                <td><input type="text" class="form-control" name="hof10" value="<?php echo $hof10 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji10" value="Rp 43750"></td>
                                                                <td><input type="text" class="form-control" name="total10" value="Rp <?php echo $total10 ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><textarea class="form-control" name="act11"><?php echo $d['aktivitas']; ?></textarea></td>
                                                                <td><textarea class="form-control" name="eng11">Software Engineer</textarea></td>
                                                                <td><input type="text" class="form-control" name="eff11" value="5"></td>
                                                                <td><input type="text" class="form-control" name="hof11" value="<?php echo $hof11 ?>"></td>
                                                                <td><input type="text" class="form-control" name="gaji11" value="Rp 43750"></td>
                                                                <td><input type="text" class="form-control" name="total11" value="Rp <?php echo $total11 ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Total</td></b>
                                                                <td></td>
                                                                <td></td>
                                                                <td><input type="text" class="form-control" name="total_hof" value="<?php echo $total_hof ?>"></td>
                                                                <td></td>
                                                                <td><input type="text" class="form-control" name="total_estimasi" value="Rp <?php echo $total_estimasi */?>"></td>
                                                            </tr> -->


                                                            <?php 
                                                        }
                                                        ?>
                                                    </table></center>
                                                    <div><br/>
                                                        <table><tr>
                                                          <td>
                                                            <button type="submit"
                                                            class="btn btn-primary btn-sm">Simpan</button>
                                                        </td>    
                                                    </tr></table></div>
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
        var txtFirsttextValue = document.getElementById('total_fp').value;

        var result = parseInt(txtFirsttextValue) * 20 * 0.00136986;
        if (!isNaN(result)) {
            document.getElementById('total_effort').value = result;
        }
    }
</script>-->
</body>

</html>


<!-- end document-->
