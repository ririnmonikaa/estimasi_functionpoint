<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .biru {

            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }
        .merah {
            -color: red;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }
        .kuning{
            -color: yellow;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }
    </style>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Indikator CFP</title>

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
    <script src="assets/js/jquery.js"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
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
                <!-- END HEADER MOBILE-->


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
                        <div class="section__content section__content--p3">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="card-title">
                                                    <b><h3 class="text-center title-2">Menghitung CFP</b>
                                                    </div></h3><br/><br/>

                                                    <form action="rcaf.php" method="post">

                                                        <table class="table table-lg">
                                                            <thead>

                                                                <tr>
                                                                    <th width="180">Tipe Fungsi</th>
                                                                    <th>Jumlah</th>
                                                                    <th>Bobot Kompleksitas</th>
                                                                    <th>Nilai Bobot</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                            </thead>

                                                            <?php

                                                            $nama_app = $_POST['nama_app'];
                                                            $effort = $_POST['effort'];
                                                            $tanggal = $_POST['tanggal'];

                                                            $det1 = $_POST['det1'];
                                                            $ftr1 = $_POST['ftr1'];
                                                            $det2 = $_POST['det2'];
                                                            $ftr2 = $_POST['ftr2'];
                                                            $det3 = $_POST['det3'];
                                                            $ret3 = $_POST['ret3'];
                                                            $det4 = $_POST['det4'];
                                                            $ret4 = $_POST['ret4'];
                                                            $det5 = $_POST['ftr5'];
                                                            $ftr5 = $_POST['det5'];

                                                            $tipe1 = $_POST['tipe1'];
                                                            $tipe2 = $_POST['tipe2'];
                                                            $tipe3 = $_POST['tipe3'];
                                                            $tipe4 = $_POST['tipe4'];
                                                            $tipe5 = $_POST['tipe5'];



                                                        //Kondisi EI
                                                            if ($ftr1 < 2  && ($det1 >= 1 && $det1 <= 4) || $ftr1 < 2  && ($det1 >= 5 && $det1 <= 15) || $ftr1 == 2 && ($det1 >= 1 && $det1 <= 4)){
                                                                $ei_total = "Simple";
                                                                $ei_bobot = 3;


                                                            } elseif ($ftr1 < 2  && $det1 > 15 || $ftr1 == 2 && ($det1 >= 5 && $det1 <= 15) || $ftr1 > 2  && ($det1 >= 1 && $det1 <= 4)){
                                                                $ei_total = "Average";
                                                                $ei_bobot = 4;

                                                            } elseif ($ftr1 == 2 && $det1 > 15 || $ftr1 > 2  && ($det1 >= 5 && $det1 <= 15) || $ftr1 > 2  && $det1 > 15){
                                                                $ei_total = "Complex";
                                                                $ei_bobot = 6;
                                                            }


                                                        //Kondisi untuk EO
                                                            if (($ftr2 < 2  && $det2 >= 1 && $det2 <= 5) || ($ftr2 < 2  && $det2 >= 6 && $det2 <= 19) || ($ftr2 == 2  || $ftr2 == 3 && $det2 >= 1 && $det2 <= 5)) {
                                                                $eo_total = "Simple";
                                                                $eo_bobot = 4;

                                                            } elseif (($ftr2 < 2  && $det2 > 19) || ($ftr2 == 2 || $ftr2 == 3 && $det2 >= 6 && $det2 <= 19) || ($ftr2 > 3  && $det2 >= 1 && $det2 <= 5)){
                                                                $eo_total = "Average";
                                                                $eo_bobot = 5;

                                                            } elseif (($ftr2 == 2 || $ftr2 == 3 && $det2 > 19) ||  ($ftr2 > 3  && $det2 >= 6 && $det2 <= 19) || ($ftr2 > 3  && $det2 > 19)){
                                                                $eo_total = "Complex";
                                                                $eo_bobot = 7;
                                                            }



                                                        //Kondisi untuk ILF
                                                            if (($ret3 == 1  && $det3 >= 1 && $det3 <= 19) || ($ret3 == 1 && $det3 >= 20 && $det3 <= 50) || ($ret3 >= 2  && $ret3 <= 5 && $det3 >= 1 && $det3 <= 19)){
                                                                $ilf_total = "Simple";
                                                                $ilf_bobot = 7;

                                                            } elseif (($ret3 == 1  && $det3 > 50) || ($ret3 >= 2 && $ret3 <= 5 && $det3 >= 20 && $det3 <= 50) || ($ret3 >= 6  && $det3 >= 1 && $det3 <= 19) ){
                                                                $ilf_total = "Average";
                                                                $ilf_bobot = 10;

                                                            } elseif (($ret3 >= 2 && $ret3 <= 5 && $det3 > 50) || ($ret3 >= 6  && $det3 >= 20 && $det3 <= 50) || ($ret3 >= 6  && $det3 > 50) ){
                                                                $ilf_total = "Complex";
                                                                $ilf_bobot = 15;
                                                            } 


                                                        //Kondisi untuk EIF
                                                            if (($ret4 == 1  && $det4 >= 1 && $det4 <= 19) || ($ret4 == 1 && $det4 >= 20 && $det4 <= 50) || ($ret4 >= 2 && $ret4 <= 5 && $det4 >= 1 && $det4 <= 19)) {
                                                                $eif_total = "Simple";
                                                                $eif_bobot = 5;


                                                            } elseif (($ret4 == 1  && $det4 >= 51) || ($ret4 >= 2 && $ret4 <= 5 && $det4 >= 20 && $det4 <= 50) || ($ret4 >= 6  && $det4 >= 1 && $det4 <= 19)) {
                                                                $eif_total = "Average";
                                                                $eif_bobot = 7;

                                                            } elseif (($ret4 >= 2 && $ret4 <= 5 && $det4 >= 51) || ($ret4 >= 6  && $det4 >= 20 && $det4 <= 50) || ($ret4 >= 6  && $det4 >= 51)) {
                                                                $eif_total = "Complex";
                                                                $eif_bobot = 10;
                                                            } 

                                                        //Kondisi EQ
                                                            if (($ftr5 < 2  && $det5 >= 1 && $det5 <= 4) || ($ftr5 < 2  && $det5 >= 5 && $det5 <= 15) || ($ftr5 == 2 && $det5 >= 1 && $det5 <= 4)) {
                                                                $eq_total = "Simple";
                                                                $eq_bobot = 3;

                                                            } elseif (($ftr5 < 2  && $det5 > 15) | ($ftr5 == 2 && $det5 >= 5 && $det5 <= 15) || ($ftr5 > 2  && $det5 >= 1 && $det5 <= 5)){
                                                                $eq_total = "Average";
                                                                $eq_bobot = 4;

                                                            } elseif (($ftr5 == 2 && $det5 > 15) || ($ftr5 > 2  && $det5 >= 5 && $det5 <= 15) || ($ftr5 > 2  && $det5 > 15)){
                                                                $eq_total = "Complex";
                                                                $eq_bobot = 6;

                                                            }


                                                            $total_tipe1 = $tipe1 * $ei_bobot;
                                                            $total_tipe2 = $tipe2 * $eo_bobot;
                                                            $total_tipe3 = $tipe3 * $ilf_bobot;
                                                            $total_tipe4 = $tipe4 * $eif_bobot;
                                                            $total_tipe5 = $tipe5 * $eq_bobot;

                                                            $total_cfp = $total_tipe1 + $total_tipe2 + $total_tipe3 + $total_tipe4 +$total_tipe5;

                                                            ?>


                                                            <input type="hidden" name="nama_app" value= "<?php echo $nama_app?>">
                                                            <input type="hidden" name="effort" value= "<?php echo $effort?>">
                                                            <input type="hidden" name="tanggal" value= "<?php echo $tanggal?>">
                                                            <tbody>


                                                                <tr>
                                                                    <td>External Input (EI)</td>
                                                                    <td>
                                                                        <input  type="text" id="tipe1" name="tipe1"  class="form-control" step="any" min="0" value="<?php echo $tipe1 ?> ">

                                                                    </td>
                                                                    <td>
                                                                       <input type="text" id="ei_total" name="ei_total"  class="form-control" step="any" min="0" value="<?php echo $ei_total ?> ">

                                                                   </td>
                                                                   <td>
                                                                    <input type="text" id="ei_bobot" name="ei_bobot"  class="form-control" step="any" min="0" value="<?php echo $ei_bobot ?> ">

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="total_tipe1" name="total_tipe1"  class="form-control" step="any" min="0" value="<?php echo $total_tipe1 ?> ">

                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Ekternal Output (EO)</td>
                                                                <td>
                                                                    <input type="text" id="tipe2" name="tipe2"  class="form-control" step="any" min="0" value="<?php echo $tipe2 ?> ">

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="eo_total" name="eo_total"  class="form-control" step="any" min="0" value="<?php echo $eo_total ?> " >

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="eo_bobot" name="eo_bobot"  class="form-control" step="any" min="0" value="<?php echo $eo_bobot ?> ">

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="total_tipe2" name="total_tipe2"  class="form-control" step="any" min="0" value="<?php echo $total_tipe2 ?> " >

                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Eksternal Inquiry (EQ)</td>
                                                                <td>
                                                                    <input type="text" id="tipe5" name="tipe5"  class="form-control" step="any" min="0" value="<?php echo $tipe5 ?> ">
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="eq_total" name="eq_total"  class="form-control" step="any" min="0" value="<?php echo $eq_total ?> ">

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="eq_bobot" name="eq_bobot"  class="form-control" step="any" min="0" value="<?php echo $eq_bobot ?> ">

                                                                </td>

                                                                <td>
                                                                    <input type="text" id="total_tipe5" name="total_tipe5"  class="form-control" step="any" min="0" value="<?php echo $total_tipe5 ?> " >

                                                                </td>
                                                            </tr>



                                                            <tr>
                                                                <td>Internal Logical File (ILF)</td>
                                                                <td>
                                                                    <input type="text" id="tipe3" name="tipe3"  class="form-control" step="any" min="0" value="<?php echo $tipe3 ?> ">

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="ilf_total" name="ilf_total"  class="form-control" step="any" min="0" value="<?php echo $ilf_total ?> " >

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="ilf_bobot" name="ilf_bobot"  class="form-control" step="any" min="0" value="<?php echo $ilf_bobot ?> ">

                                                                </td>

                                                                <td>
                                                                    <input type="text" id="total_tipe3" name="total_tipe3"  class="form-control" step="any" min="0" value="<?php echo $total_tipe3 ?> " >

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Eksternal Interface Files (EIF)</td>
                                                                <td>
                                                                    <input type="text" id="tipe4" name="tipe4"  class="form-control" step="any" min="0" value="<?php echo $tipe4 ?> ">

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="eif_total" name="eif_total"  class="form-control" step="any" min="0" value="<?php echo $eif_total ?> " >

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="eif_bobot" name="eif_bobot"  class="form-control" step="any" min="0" value="<?php echo $eif_bobot ?> ">

                                                                </td>
                                                                <td>
                                                                    <input type="text" id="total_tipe4" name="total_tipe4"  class="form-control" step="any" min="0" value="<?php echo $total_tipe4 ?> " >

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td><h4><b>Hasil CFP</b></h4></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <b><td>
                                                                    <input type="text" id="total_cfp" name="total_cfp"  class="form-control" value="<?php echo $total_cfp ?>" >
                                                                </td></b>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td colspan="4">

                                                                    <button type="submit"
                                                                    class="btn btn-primary btn-sm">Selanjutnya</button>

                                                                </td>
                                                            </tr>
                                                        </tbody>

                                                    </table></center>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div> 
                            </form> 
                        </div> 
                    </div>


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
<!--
    <script type="text/javascript">
        $("#ei_jumlah").keyup(function(){   
            var a = parseFloat($("#ei_jumlah").val());
            var b = "7";
            var c = a*b;
            $("#ei_total").val(c);
        });

        $("#det").keyup(function(){
            var a = parseFloat($("#ei_jumlah").val());
            var b = "7";
            var c = a*b;
            $("#ei_total").val(c);
        });
    </script>

    <script type="text/javascript">
        $("#eif_jumlah").keyup(function(){   
            var a = parseFloat($("#eif_jumlah").val());
            var b = "7";
            var d = a*b;
            $("#eif_total").val(d);
        });

        $("#eif_simple").keyup(function(){
            var a = parseFloat($("#eif_jumlah").val());
            var b = "7";
            var d = a*b;
            $("#eif_total").val(d);
        });
    </script>

    <script type="text/javascript">
        $("#eo_jumlah").keyup(function(){   
            var a = parseFloat($("#eo_jumlah").val());
            var b = "7";
            var e = a*b;
            $("#eo_total").val(e);
        });

        $("#eo_simple").keyup(function(){
            var a = parseFloat($("#eo_jumlah").val());
            var b = "7";
            var e = a*b;
            $("#eo_total").val(e);
        });
    </script>

    <script type="text/javascript">
        $("#ilf_jumlah").keyup(function(){   
            var a = parseFloat($("#ilf_jumlah").val());
            var b = "7";
            var f = a*b;
            $("#ilf_total").val(f);
        });

        $("#ilf_simple").keyup(function(){
            var a = parseFloat($("#ilf_jumlah").val());
            var b = "7";
            var f = a*b;
            $("#ilf_total").val(f);
        });
    </script>

    <script type="text/javascript">
        $("#eq_jumlah").keyup(function(){   
            var a = parseFloat($("#eq_jumlah").val());
            var b = "7";
            var g = a*b;
            $("#eq_total").val(g);
        });

        $("#eq_simple").keyup(function(){
            var a = parseFloat($("#eq_jumlah").val());
            var b = "7";
            var g = a*b;
            $("#eq_total").val(g);
        });
    </script>


    <script>
        function sum() {
            var txtFirsttextValue = document.getElementById('ei_total').value;
            var txtSecondtextValue = document.getElementById('eif_total').value;
            var txtThirddtextValue = document.getElementById('eo_total').value;
            var txtFourtextValue = document.getElementById('ilf_total').value;
            var txtFivetextValue = document.getElementById('eq_total').value;
            var result = parseInt(txtFirsttextValue) + parseInt(txtSecondtextValue) + parseInt(txtThirddtextValue) + parseInt(txtFourtextValue) + parseInt(txtFivetextValue);
            if (!isNaN(result)) {
                document.getElementById('total_cfp').value = result;
            }
        }
    </script>
-->


</body>

</html>
<!-- end document-->

