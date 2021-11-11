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
    <title>Indikator RCAF</title>

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

      .keterangan{

        padding: 0 40px;
        font-size: 13px;
        color: #4682B4;
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

                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center title-2">Indikator RCAF (Relative Complexity Adjustment Factor)</h3>
                                            </div>
                                            <p><center>RCAF digunakan untuk menghitung bobot kompleksitas berdasarkan faktor karakteristik perangkat lunak yang terdiri dari 14 indikator. Kompleksitas memiliki skala penilaian antara 0-5</center></p>
                                            <div class="card-header" style="margin-right:20px; margin-left: 20px;">

                                                <p style="font-size: 12px">Petunjuk Pengisian: </p>
                                                <p style="font-size: 12px">- Menginputkan nilai sesuai range score dari masing-masing indikator</p>
                                                <p style="font-size: 12px">- Nilai range yang bisa diinputkan antara 0 - 5</p>
                                            </div>

                                            <form action="hasilfp.php" method="post">
                                               <div class="form-group">
                                                <table style="background-color:#F08080;; color:black;">
                                                    <thead align="center">
                                                        <tr align="center" style="background-color:#CD5C5C; color:black;">
                                                            <th width="800">Indikator</th>
                                                            <th width="200">Skala Score</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>


                                                         <label for="cc-payment" class="control-label mb-1"><h6 class="keterangan">


                                                         </tr> 
                                                         <tr>
                                                            <td><h6>- Tidak Berpengaruh = tidak memiliki pengaruh apapun</h6></td>
                                                            <td align="center"><h6>Nilai 0</h6></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h6>
                                                            - Berpengaruh insidental =  pengaruhnya hanya terjadi pada waktu tertentu saja atau tidak secara rutin.</h6></td>
                                                            <td align="center"><h6>Nilai 1</h6></td>
                                                        </tr>

                                                        <tr>
                                                            <td><h6>
                                                              - Berpengaruh moderat = pengaruhnya hampir mendekati rata-rata atau pertengahan. 
                                                          </h6></td>
                                                          <td align="center"><h6>Nilai 2</h6></td>
                                                      </tr>

                                                      <tr>
                                                        <td><h6>
                                                        - Berpengaruh rata-rata =  pengaruhnya berada ditengah atau seimbang.</h6></td>
                                                        <td align="center"><h6>Nilai 3</h6></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6>
                                                        - Berpengaruh signifikan = berpengaruh penting. </h6></td>
                                                        <td align="center"><h6>Nilai 4</h6></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6>
                                                            - Berpengaruh essential =  pengaruhnya sangat penting sekali.
                                                        </h6></td>
                                                        <td align="center"><h6>Nilai 5</h6></td>
                                                    </tr>
                                                    <tr>
                                                        <td></label>
                                                            <br/></td></tr>

                                                        </tbody></table>

                                                        <br/>
                                                        <table class="table table-lg">
                                                            <thead>
                                                                <tr style="background-color:#20B2AA; color:black;">
                                                                    <th>No</th>
                                                                    <th>RCAF</th>
                                                                    <th>SCORE(0-5)</th>
                                                                </tr>
                                                            </thead>
                                                            <?php


                                                            $nama_app = $_POST['nama_app'];
                                                            $tanggal = $_POST['tanggal'];
                                                            $effort = $_POST['effort'];


                                                            $total_cfp = $_POST['total_cfp'];

                                                            ?>

                                                            <input type="hidden" name="nama_app" value= "<?php echo $nama_app?>">
                                                            <input type="hidden" name="effort" value= "<?php echo $effort?>">
                                                            <input type="hidden" name="tanggal" value= "<?php echo $tanggal?>">
                                                            <input type="hidden" name="total_cfp" value= "<?php echo $total_cfp?>">

                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="cc-payment" class="control-label mb-1">Tingkat kompleksitas komunikasi data</label><br/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="number" id="i1" name="i1"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label>Tingkat kompleksitas pemprosesan terdistribusi</label><br/>
                                                                            </td>
                                                                            <td>
                                                                                <input type="number" id="i2" name="i2"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kompleksitas perfoma</label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i3" name="i3"  class="form-control" step="any"min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kompleksitas konfigurasi</label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i4" name="i4"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>

                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kecepatan transaksi bisnis</label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i5" name="i5"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>

                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kebutuhan penginput-an data online 
                                                                                    </label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i6" name="i6"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>

                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kemudahan penggunaan aplikasi 
                                                                                    </label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i7" name="i7"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td>

                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kebutuhan ILF diupdate secara online. 
                                                                                    </label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i8" name="i8"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kesulitan logika proses 
                                                                                    </label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i9" name="i9"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kebutuhan aplikasi dan kode program untuk aplikasi lain
                                                                                    </label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i10" name="i10"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kemudahalan dalam installasi

                                                                                    </label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i11" name="i11"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kemudahan operasional software  </label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i12" name="i12"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>13</td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat software dibuat untuk multi user  </label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i13" name="i13"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>14</td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <label class=" form-control-label">Tingkat kompleksitas mengikuti perubahan/ fleksibel  </label><br/>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="number" id="i14" name="i14"  class="form-control" step="any" min="0" max="5" value="0" onkeyup="sum();">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>

                                                            <!--<?php
                                       /* if(isset($_POST['submit'])){
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


                                            $total_rcaf = $i1 + $i2 + $i3 + $i4 + $i5 + $i6 + $i7 + $i8 + $i9 + $i10 + $i11 + $i12 + $i13 + $i14;

                                            //echo "$total_rcaf";
                                        }*/
                                        ?>-->
                                    </b></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>


                                        <button type="reset"
                                        class="btn btn-danger btn-sm">Reset</button>
                                        <button type="submit"
                                        class="btn btn-primary btn-sm">Selanjutnya</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>




        </div>
    </div> 
</form> 
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




</body>

</html>


<!-- end document-->
