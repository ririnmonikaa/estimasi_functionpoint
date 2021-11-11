<!DOCTYPE html>
<html lang="en">

<?php   
include 'koneksi.php';   
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
                                                                <th width="180px">Engineering</th>
                                                                <th width="135px">Effort (%)</th>
                                                                <th width="110px">Hours Of Effort</th>
                                                                <th width="200px">Standar Gaji/ Bulan (Rp)</th>
                                                                <th width="250px">Total (Rp)</th>
                                                            </tr>
                                                        </thead>

                                                   <!--    <?php

                                                     /*   $tf = $_POST['tf'];
                                                        $total_rcaf = $_POST['total_rcaf'];
                                                        $total_tcf = $_POST['total_tcf'];
                                                        $totalfp = $_POST['tf'];
                                                        $total_effort = $_POST['total_effort'];
                                                        $hour_effort = $_POST['hour_effort'];*/

                                                    /*$teff1    =$_POST['eff1'] * $total_effort;
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

                                                   /* $hof1    = 0.075 * $hour_effort;
                                                    $hof2    =0.175 * $hour_effort;
                                                    $hof3    =0.10 * $hour_effort;
                                                    $hof4    =0.07 * $hour_effort;
                                                    $hof5    =0.1234 * $hour_effort;
                                                    $hof6    =0.2466 * $hour_effort;
                                                    $hof7    =0.07 * $hour_effort;
                                                    $hof8    =0.03 * $hour_effort;
                                                    $hof9    =0.03 * $hour_effort;
                                                    $hof10    =0.03 * $hour_effort;
                                                    $hof11    =0.05 * $hour_effort;*/

                                                  /*  $total_hof = $hof1 + $hof2 + $hof3 + $hof4 +$hof5 + $hof6 + $hof7 + $hof8 +$hof9 + $hof10 + $hof11;

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
                                                    

                                                    

                                                    <tbody>
                                                        <tr>
                                                            <td class="text-bold-500" colspan="6">Tahap Development</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <select>
                                                                    <option value="0" class="form-control">Requirement</option>
                                                                    <option value="0" class="form-control">Spesification & Design</option>
                                                                    <option value="0" class="form-control">Implementation</option>
                                                                    <option value="0" class="form-control">Acceptance & Deployment</option>

                                                                </select>

                                                                <!--<?php
                                                               /* $result = mysqli_query($koneksi,"select * from estimasi");
                                                                $jsArray = "var prdName = new Array();\n";
                                                                echo '
                                                                <select name="aktivitas" onchange="changeValue(this.value)">
                                                                <option>Pilih Aktivitas</option>';
                                                                while ($row = mysqli_fetch_array($result)) {   
                                                                    echo '<option value="' . $row['aktivitas'] . '">' . $row['aktivitas'] . '</option>';   
                                                                    $jsArray .= "prdName['" . $row['aktivitas'] . "'] = {engineer:'" . addslashes($row['engineer']) . "',pe:'".addslashes($row['persen_effort'])."'};\n";*/   
                                                                //}    
                                                                /*echo '
                                                                </select>';*/
                                                                ?>-->

                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" name="eng" id="eng"></textarea>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="pe" id="pe">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="hof1" id="hof1">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="gaji1" id="gaji1">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="total1" id="total1">
                                                            </td>
                                                            <td><input type='button' class="AddNew" width="20px" value="+"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500" colspan="6">Quality & Testing</td>
                                                        </tr>

                                                        <tr width="185px">
                                                            <td width="185px">
                                                                <select>
                                                                    <option value="0" class="form-control">Integration Testing</option>
                                                                    <option value="0" class="form-control">Quality Asurance</option>
                                                                    

                                                                </select>


                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="engSatu" id="engSatu">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="peSatu" id="peSatu">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="hof2" id="hof2">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="gaji2" id="gaji2">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="total2" id="total2">
                                                            </td>
                                                            <td><input type='button' class="AddNew" width="20px" value="+"></td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500" colspan="6">OnGoing Activity</td>
                                                        </tr>
                                                        <tr width="185px">
                                                            <td width="185px">
                                                             <select>
                                                                <option value="0" class="form-control">Project Management</option>
                                                                <option value="0" class="form-control">Configuration Management</option>
                                                                <option value="0" class="form-control">Documentation</option>
                                                                <option value="0" class="form-control">Training & Support</option>
                                                                <option value="0" class="form-control">Acceptance & Deployment</option>

                                                            </select>


                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="eng2" id="eng2">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="pe2" id="pe2">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="hof3" id="hof3">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="gaji3" id="gaji3">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="total3" id="total3">
                                                        </td>
                                                        <td><input type='button' class="AddNew" width="20px" value="+"></td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Total</td></b>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" name="total_hof" value="<?php echo $total_hof ?>"></td>
                                                        <td></td>
                                                        <td><input type="text" class="form-control" name="total_estimasi" value="Rp <?php echo $total_estimasi ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>



                                                        <td>

                                                            <button type="submit"
                                                            class="btn btn-primary btn-sm">Simpan</button>

                                                        </td>    
                                                        <td></td>
                                                        <td></td>                                                
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
<script type="text/javascript">
    $('.AddNew').click(function(){
        var row = $(this).closest('tr').clone();
        row.find('input').val('');
        $(this).closest('tr').after(row);
        $('input[type="button"]', row).removeClass('form-control')
        .addClass('RemoveRow').val('-');
    });
    $('table').on('click', '.RemoveRow', function(){
        $(this).closest('tr').remove();
    });
</script> 

<!--<script type="text/javascript">   
    <?php //echo $jsArray; ?> 
    function changeValue(aktivitas){ 
        document.getElementById('eng').value = prdName[aktivitas].engineer; 
        document.getElementById('pe').value = prdName[aktivitas].pe; 
    }; 
</script>


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
