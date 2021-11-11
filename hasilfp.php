<!DOCTYPE html>
<html lang="en">
<?php 
include 'koneksi.php'

?>
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
    <style type="text/css">
        .form-input {
            -webkit-border-radius: 5px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }
    </style>
    
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
                        <!-- END HEADER DESKTOP-->

                        <!-- MAIN CONTENT-->
                        <div class="main-content">
                            <div class="section__content section__content--p3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="card">

                                                <div  width="800" class="card-body">
                                                    <div class="card-title">
                                                        <h3 class="text-center title-2">Hasil Perhitungan Function Point</h3>
                                                    </div>
                                                    <hr>
                                                    <form action="hasilestimasi.php" method="post">
                                                        <div class="form-group">


                                                            <center><table class="table table-lg">
                                                                <thead align="center">
                                                                    <tr align="center">
                                                                        <th width="300"></th>
                                                                        <th width="400"></th>
                                                                        <th width="100"></th>

                                                                    </tr>
                                                                </thead>

                                                                <?php

                                                                $nama_app = $_POST['nama_app'];
                                                                $effort = $_POST['effort'];
                                                                $tanggal = $_POST['tanggal'];

                                                                $i1    =$_POST['i1'];
                                                                $i2    =$_POST['i2'];
                                                                $i3    =$_POST['i3'];
                                                                $i4    =$_POST['i4'];
                                                                $i5    =$_POST['i5'];
                                                                $i6    =$_POST['i6'];
                                                                $i7    =$_POST['i7'];
                                                                $i8    =$_POST['i8'];
                                                                $i9    =$_POST['i9'];
                                                                $i10   =$_POST['i10'];
                                                                $i11   =$_POST['i11'];
                                                                $i12   =$_POST['i12'];
                                                                $i13   =$_POST['i13'];
                                                                $i14   =$_POST['i14'];

                                                                $total_rcaf = $i1 + $i2 + $i3 + $i4 + $i5 + $i6 + $i7 + $i8 + $i9 +          $i10 + $i11 + $i12 + $i13 + $i14;

                                                                $total_cfp = $_POST['total_cfp'];
                                                                $total_tcf = 0.65 + (0.01 * $total_rcaf) ;

                                                                $total_fp = $total_cfp * $total_tcf;



                                                                $hour_effort = $total_fp * $effort;
                                                                $total_effort = $total_fp * $effort * 0.0014;
                                                                ?>
                                                                <tbody>

                                                                    <input type="hidden" name="effort" value= "<?php echo $effort ?>">
                                                                    <input type="hidden" name="total_fp" value= "<?php echo $total_fp ?>">

                                                                    <tr>
                                                                        <td  width="200">
                                                                           <div class="form-group">
                                                                            <b><label class=" form-control-label">Nama Aplikasi

                                                                            </label>

                                                                        </td>

                                                                        <td width="450">
                                                                            <textarea id="nama_app" class="form-control"
                                                                            name="nama_app" placeholder="0" readonly><?php echo $nama_app ?></textarea>
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                       <div class="form-group">
                                                                        <b><label class=" form-control-label" >Tanggal Estimasi

                                                                        </label>

                                                                    </td>

                                                                    <td>
                                                                        <input type="text" id="tanggal" name="tanggal" class="form-control" step="any" value="<?php echo date('d F Y');?>" readonly>
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>

                                                                <td>
                                                                 <div class="form-group">
                                                                    <b><label class=" form-control-label">Nilai Effort</label></b><br/>
                                                                </td>

                                                                <td>
                                                                    <input type="text" id="effort" name="effort" class="form-control" step="any"  readonly value="<?php echo $effort ?> ">
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                               <div class="form-group">
                                                                <b><label class=" form-control-label">Nilai CFP (Crude Function Point)

                                                                </label></b><br/>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="text" id="total_cfp" class="form-control"
                                                                name="total_cfp" placeholder="0" readonly value="<?php echo $total_cfp ?>">
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                         <div class="form-group">
                                                            <b><label class=" form-control-label">Nilai RCAF (Relative Complexity Adjustment Factor)</label></b><br/>
                                                        </td>

                                                        <td>
                                                         <input type="text" id="total_rcaf" name="total_rcaf"  class="form-control" step="any" value="<?php echo $total_rcaf ?> " readonly>
                                                     </div>
                                                 </td>
                                                 <td></td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="form-group">
                                                    <b><label class=" form-control-label">Nilai TCF (Technical Complexity Factor) </label></b><br/>
                                                </td>

                                                <td>
                                                    <input type="text" id="total_tcf" name="total_tcf"  class="form-control" step="any"  value="<?php echo $total_tcf ?>" readonly>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <div class="form-group">
                                                <b><label class=" form-control-label">Nilai FP (Function Point)</label></b><br/>
                                            </td>

                                            <td>
                                                <input type="text" id="total_fp" name="total_fp"  class="form-control" step="any" 
                                                value="<?php echo $total_fp ?>" readonly>
                                            </div></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <div class="form-group">
                                                <b><label class=" form-control-label">Nilai Estimasi Usaha </label></b><br/>
                                            </td>
                                            
                                            <td>
                                                <input type="text" id="hour_effort" name="hour_effort"  class="form-control" step="any" 
                                                value="<?php echo $hour_effort ?>" readonly>
                                            </div></td>
                                            <td><b><label class=" form-control-label"> Jam</label><br/></b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                               <div class="form-group">
                                                <b><label class=" form-control-label"></label></b><br/>
                                            </td>
                                            
                                            <td>
                                                <input type="text" id="total_effort" name="total_effort"  class="form-control" step="any" 
                                                value="<?php echo $total_effort ?>" readonly>
                                            </div></td>
                                            <td><b><label class=" form-control-label"> Bulan</label><br/></b></td>
                                        </tr>



                                        <tr>
                                            <td></td>
                                            <td></td>




                                            <td>

                                                <button type="submit" name="simpan" 
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
