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
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Deskripsi Aplikasi</h3>
                                </div>
                                <hr>
                                <form action="tambahdesk_koneksi.php" method="post">
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Nama Aplikasi</label>
                                        <input id="cc-pament" name="nama_app" type="text" class="form-control" placeholder="Isi nama aplikasi">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
                                    </div>
                                    <div class="form-group">
                                     <label class=" form-control-label">Effort Rate</label><br/>
                                     <input type="radio" id="radio1" name="effort" value="8,6">8,6

                                     <input type="radio" id="radio2" name="effort" value="20">20

                                     <input type="radio" id="radio3" name="effort" value="24">24

                                     <input type="radio" id="radio4" name="effort" value="36">36
                                 </div>
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Keterangan:<br>
                                        -Nilai 8,6 untuk Proyek Kecil Menengah
                                        <br>-Nilai 20 untuk Proyek Kecil
                                        <br>-Nilai 24 untuk Proyek Menengah
                                        <br>-Nilai 36 untuk Proyek Besar</label>

                                    </div>
                                </div>


                                <div class="container-fluid">
                                 <div>
                                    <h3 align="center">Perhitungan CFP</h3>
                                </div>
                                <br>
                                <div></div>
                                <div class="row">



                                    <!-- END USER DATA-->

                                    <!-- TOP CAMPAIGN-->



                                    <!-- DATA TABLE-->
                                    <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3">
                                            <form class="tambahdesk_koneksi.php" action="" method="post">
                                                <thead>
                                                    <tr>
                                                        <th>Tipe Fungsi</th>
                                                        <th>Jumlah</th>
                                                        <th>Simple</th>
                                                        <th>Average</th>
                                                        <th>Complex</th>
                                                        <th>Hasil CFP</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>External Input (EI)</td>
                                                        <td>
                                                            <input type="text" id="ei_jumlah" name="ei_jumlah"  class="form-control" step="any" min="0" value="" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="ei_simple" name="ei_simple"  class="form-control" step="any" min="0" value="3" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="ei_avg" name="ei_avg"  class="form-control" step="any" min="0" value="4" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="ei_complex" name="ei_complex"  class="form-control" step="any" min="0" value="6" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="ei_total" name="ei_total"  class="form-control" step="any" min="0" value="" onkeyup="sum();">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ekternal Output (EO)</td>
                                                        <td>
                                                            <input type="text" id="eo_jumlah" name="eo_jumlah"  class="form-control" step="any" min="0" value="" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="eo_simple" name="eo_simple"  class="form-control" step="any" min="0" value="4" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="eo_avg" name="eo_avg"  class="form-control" step="any" min="0" value="5" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="eo_complex" name="eo_complex"  class="form-control" step="any" min="0" value="7" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="eo_total" name="eo_total"  class="form-control" step="any" min="0" value="" onkeyup="sum();">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Internal Logical File (ILF)</td>
                                                        <td>
                                                            <input type="text" id="ilf_jumlah" name="ilf_jumlah"  class="form-control" step="any" min="0" value="" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="ilf_simple" name="ilf_simple"  class="form-control" step="any" min="0" value="7" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="ilf_avg" name="ilf_avg"  class="form-control" step="any" min="" value="10" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="ilf_complex" name="ilf_complex"  class="form-control" step="any" min="0" value="15" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="ilf_total" name="ilf_total"  class="form-control" step="any" min="0" value="" onkeyup="sum();">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Eksternal Interface Files (EIF)</td>
                                                        <td>
                                                            <input type="text" id="eif_jumlah" name="eif_jumlah"  class="form-control" step="any" min="0" value="" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="eif_simple" name="eif_simple"  class="form-control" step="any" min="0" value="5" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="eif_avg" name="eif_avg"  class="form-control"step="any" min="" value="7" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="eif_complex" name="eif_complex"  class="form-control" step="any" min="0" value="10" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="eif_total" name="eif_total"  class="form-control" step="any" min="0" value="" onkeyup="sum();">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Eksternal Inquiry (EQ)</td>
                                                        <td>
                                                            <input type="text" id="eq_jumlah" name="eq_jumlah"  class="form-control" step="any" min="0" value="" onkeyup="sum();">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="eq_simple" name="eq_simple"  class="form-control" step="any" min="0" value="3" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" id="eq_avg" name="eq_avg"  class="form-control" step="any" min="0" value="4" onkeyup="sum();">

                                                        </td>
                                                        <td>
                                                            <input type="text" step="any" min="0" id="eq_complex" name="eq_complex"  class="form-control" value="6" onkeyup="sum();">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="eq_total" name="eq_total"  class="form-control" step="any" min="0" value="" onkeyup="sum();">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="form-group">
                                                            <input type="submit" name="hitung_cfp" value="Hitung">
                                                            <td><b>
                                                                <?php
                                                                if(isset($_POST['hitung_cfp'])){
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


            // menghitung luas segitiga
                                                                    $total_rcaf = $i1 + $i2 + $i3 + $i4 + $i5 + $i6 + $i7 + $i8 + $i9 + $i10 + $i11 + $i12 + $i13 + $i14;

                                                                    echo "$total_rcaf";
                                                                }
                                                                ?>
                                                            </b></td>
                                                        </tr>

                                                    </tbody>

                                                </form>
                                            </table>

                                            <div class="card-footer">
                                                <br>
                                        <!--<div> 
                                            <button type="submit" class="btn btn-lg btn-info btn-block" name="tambah">Simpan</button> 
                                        </div>
                                        <br><br>-->



                                        <input type="submit" class="btn btn-primary btn-sm" value="Bobot Kompleksitas" name="bobot">

                                        <div>

                                            <!-- MAIN CONTENT-->
                                            <div class="main-content">
                                                <div class="section__content section__content--p3">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg">
                                                                <div class="card">

                                                                    <div class="card-body">
                                                                        <div class="card-title">
                                                                            <h3 class="text-center title-2">Indikator RCAF</h3>
                                                                        </div>
                                                                        <hr>
                                                                        <form action="" method="post">
                                                                           <div class="form-group">
                                                                            <label for="cc-payment" class="control-label mb-1"><h6>Indikator RCAF memiliki skala 0-5, dengan keterangan sebagai berikut:<br>
                                                                                -Nilai 0 untuk Tidak Berpengaruh = tidak memiliki pengaruh apapun
                                                                                <br>-Nilai 1 untuk Berpengaruh insidental =  pengaruhnya hanya terjadi pada waktu tertentu saja atau tidak secara rutin.
                                                                                <br>-Nilai 2 untuk Berpengaruh moderat = pengaruhnya hampir mendekati rata-rata atau pertengahan. 
                                                                                <br>-Nilai 3 untuk Berpengaruh rata-rata =  pengaruhnya berada ditengah atau seimbang.
                                                                                <br>-Nilai 4 untuk Berpengaruh signifikan = berpengaruh penting. 
                                                                                <br>-Nilai 5 untuk Berpengaruh essential =  pengaruhnya sangat penting sekali.</h6></label>
                                                                                <br/><br/>   
                                                                                <table>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="form-group">
                                                                                                <label for="cc-payment" class="control-label mb-1">Tingkat kompleksitas komunikasi data</label><br/>
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="number" id="i1" name="i1"  class="form-control" step="any" min="0" max="5" value="0" >
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="form-group">
                                                                                                    <label>Tingkat kompleksitas pemprosesan terdistribusi</label><br/>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <input type="number" id="i2" name="i2"  class="form-control" step="any" min="0" max="5" value="0">
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div class="form-group">
                                                                                                     <label class=" form-control-label">Tingkat kompleksitas perfoma</label><br/>
                                                                                                 </td>
                                                                                                 <td>
                                                                                                     <input type="number" id="i3" name="i3"  class="form-control" step="any"min="0" max="5" value="0">
                                                                                                 </div>
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                            <td>
                                                                                             <div class="form-group">
                                                                                                 <label class=" form-control-label">Tingkat kompleksitas konfigurasia</label><br/>
                                                                                             </td>
                                                                                             <td>
                                                                                                 <input type="number" id="i4" name="i4"  class="form-control" step="any" min="0" max="5" value="0">
                                                                                             </div>
                                                                                         </td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                        <td>

                                                                                         <div class="form-group">
                                                                                             <label class=" form-control-label">Tingkat kecepatan transaksi bisnis</label><br/>
                                                                                         </td>
                                                                                         <td>
                                                                                             <input type="number" id="i5" name="i5"  class="form-control" step="any" min="0" max="5" value="0">
                                                                                         </div>
                                                                                     </td>
                                                                                 </tr>
                                                                                 <tr>
                                                                                    <td>

                                                                                     <div class="form-group">
                                                                                         <label class=" form-control-label">Tingkat kebutuhan penginput-an data online 
                                                                                         </label><br/>
                                                                                     </td>
                                                                                     <td>
                                                                                         <input type="number" id="i6" name="i6"  class="form-control" step="any" min="0" max="5" value="0">
                                                                                     </div>
                                                                                 </td>
                                                                             </tr>
                                                                             <tr>
                                                                                <td>

                                                                                 <div class="form-group">
                                                                                     <label class=" form-control-label">Tingkat kemudahan penggunaan aplikasi 
                                                                                     </label><br/>
                                                                                 </td>
                                                                                 <td>
                                                                                     <input type="number" id="i7" name="i7"  class="form-control" step="any" min="0" max="5" value="0">
                                                                                 </div>
                                                                             </td>
                                                                         </tr>
                                                                         <tr>
                                                                            <td>

                                                                             <div class="form-group">
                                                                                 <label class=" form-control-label">Tingkat kebutuhan ILF diupdate secara online. 
                                                                                 </label><br/>
                                                                             </td>
                                                                             <td>
                                                                                 <input type="number" id="i8" name="i8"  class="form-control" step="any" min="0" max="5" value="0">
                                                                             </div>
                                                                         </td>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                         <div class="form-group">
                                                                             <label class=" form-control-label">Tingkat kesulitan logika proses 
                                                                             </label><br/>
                                                                         </td>
                                                                         <td>
                                                                             <input type="number" id="i9" name="i9"  class="form-control" step="any" min="0" max="5" value="0">
                                                                         </div>
                                                                     </td>
                                                                 </tr>
                                                                 <tr>
                                                                    <td>
                                                                     <div class="form-group">
                                                                         <label class=" form-control-label">Tingkat kebutuhan aplikasi dan kode program untuk aplikasi lain
                                                                         </label><br/>
                                                                     </td>
                                                                     <td>
                                                                         <input type="number" id="i10" name="i10"  class="form-control" step="any" min="0" max="5" value="0">
                                                                     </div>
                                                                 </td>
                                                             </tr>
                                                             <tr>
                                                                <td>
                                                                 <div class="form-group">
                                                                     <label class=" form-control-label">Tingkat kemudahalan dalam installasi

                                                                     </label><br/>
                                                                 </td>
                                                                 <td>
                                                                     <input type="number" id="i11" name="i11"  class="form-control" step="any" min="0" max="5" value="0">
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                             <div class="form-group">
                                                                 <label class=" form-control-label">Tingkat kemudahan operasional software  </label><br/>
                                                             </td>
                                                             <td>
                                                                 <input type="number" id="i12" name="i12"  class="form-control" step="any" min="0" max="5" value="0">
                                                             </div>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                        <td>
                                                         <div class="form-group">
                                                             <label class=" form-control-label">Tingkat Software dibuat untuk multi user  </label><br/>
                                                         </td>
                                                         <td>
                                                             <input type="number" id="i13" name="i13"  class="form-control" step="any" min="0" max="5" value="0">
                                                         </div>
                                                     </td>
                                                 </tr>
                                                 <tr>
                                                    <td>
                                                     <div class="form-group">
                                                        <label class=" form-control-label">Tingkat kompleksitas mengikuti peribahan/ fleksibel</label><br/>
                                                    </td>
                                                    <td>
                                                        <input type="number" id="i14" name="i14"  class="form-control" step="any" min="0" max="5" value="0">
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-group">
                                                        <input type="submit" name="submit" value="Hitung">
                                                        <td><b>
                                                            <?php
                                                            if(isset($_POST['submit'])){
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


            // menghitung luas segitiga
                                                                $total_rcaf = $i1 + $i2 + $i3 + $i4 + $i5 + $i6 + $i7 + $i8 + $i9 + $i10 + $i11 + $i12 + $i13 + $i14;

                                                                echo "$total_rcaf";
                                                            }
                                                            ?>
                                                        </b></td>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>

                                    </div>




                                </div>
                            </div> 
                        </form> 


                        <div class="row">
                            <div class="col-lg">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Hasil Perhitungan FP</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post">
                                         <div class="form-group">

                                            <br/><br/>   
                                            <table>


                                             <tr>
                                                <td>
                                                 <div class="form-group">
                                                    <b><label class=" form-control-label">Nilai CFP

                                                    </label></b><br/>
                                                </td>
                                                <td></td>
                                                <td>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                             <div class="form-group">
                                                <b><label class=" form-control-label">Nilai RCAF</label></b><br/>
                                            </td>
                                            <td></td>
                                            <td>
                                                <?php
                                                if(isset($_POST['submit'])){

                                                    echo "$total_rcaf";
                                                }
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                         <div class="form-group">
                                             <b><label class=" form-control-label">Nilai TCF </label></b><br/>
                                         </td>
                                         <td></td>
                                         <td>
                                            <input type="text" id="total_tcf" name="total_tcf"  class="form-control" step="any"  onkeyup="sum();">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                     <div class="form-group">
                                        <b><label class=" form-control-label">Nilai FP </label></b><br/>
                                    </td>
                                    <td></td>
                                    <td>
                                        <input type="text" id="total_fp" name="total_fp"  class="form-control" step="any" onkeyup="sum();">
                                    </div></td>
                                </tr>
                                <tr>
                                    <td><div class="form-group">
                                        <b><label class=" form-control-label">Nilai Estimasi Usaha  </label><br/></b></td>


                                        <td>
                                            <td>
                                                <input type="text" id="total_effort" name="total_effort"  class="form-control" step="any" onkeyup="sum();"></td>
                                                <td>
                                                    <b><label class=" form-control-label"> Bulan</label><br/></b></tr>

                                                </td>
                                            </td>

                                        </table>

                                    </div>
                                </div>

                            </div>




                        </div>
                    </div> 
                </form> 


            </div> 
        </div>
    </div>

</br>
<div>
    <center><a href="hasilfp.php" class="btn btn-primary btn-sm">Selanjutnya</a></center> 
    <!-- END DATA TABLE --></div>



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

<script type="text/javascript">
    $("#ei_jumlah").keyup(function(){   
        var a = parseFloat($("#ei_jumlah").val());
        var b = "7";
        var c = a*b;
        $("#ei_total").val(c);
    });

    $("#ei_simple").keyup(function(){
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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
    function sum() {
        var txtFirsttextValue = document.getElementById('total_cfp').value;
        var txtFirsttextValue = document.getElementById('total_rcaf').value;

    }
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
</script>


</body>

</html>


<!-- end document-->
