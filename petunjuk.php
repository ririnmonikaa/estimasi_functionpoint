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
  <style type="text/css">

   input[type=radio   ]:not(old){
    width     : 6em;
    margin    : 0;
    padding   : 0;
    font-size : 1em;
    opacity   : 0;
  }
  input[type=radio   ]:not(old) + label{
    display      : inline-block;
    margin-left  : -5em;
    line-height  : 1.5em;
  }
  input[type=radio   ]:not(old) + label > span{
    display          : inline-block;
    width            : 0.875em;
    height           : 0.875em;
    margin           : 0.25em 0.5em 0.25em 0.25em;
    border           : 0.0625em solid rgb(192,192,192);
    border-radius    : 0.25em;
    background       : rgb(224,224,224);
    background-image :    -moz-linear-gradient(rgb(240,240,240),rgb(224,224,224));
    background-image :     -ms-linear-gradient(rgb(240,240,240),rgb(224,224,224));
    background-image :      -o-linear-gradient(rgb(240,240,240),rgb(224,224,224));
    background-image : -webkit-linear-gradient(rgb(240,240,240),rgb(224,224,224));
    background-image :         linear-gradient(rgb(240,240,240),rgb(224,224,224));
    vertical-align   : bottom;
  }
  input[type=radio   ]:not(old):checked + label > span{
    background-image :    -moz-linear-gradient(rgb(224,224,224),rgb(240,240,240));
    background-image :     -ms-linear-gradient(rgb(224,224,224),rgb(240,240,240));
    background-image :      -o-linear-gradient(rgb(224,224,224),rgb(240,240,240));
    background-image : -webkit-linear-gradient(rgb(224,224,224),rgb(240,240,240));
    background-image :         linear-gradient(rgb(224,224,224),rgb(240,240,240));
  }
  input[type=radio]:not(old):checked + label > span > span{
    display          : block;
    width            : 0.5em;
    height           : 0.5em;
    margin           : 0.125em;
    border           : 0.0625em solid rgb(115,153,77);
    border-radius    : 0.125em;
    background       : rgb(153,204,102);
    background-image :    -moz-linear-gradient(rgb(179,217,140),rgb(153,204,102));
    background-image :     -ms-linear-gradient(rgb(179,217,140),rgb(153,204,102));
    background-image :      -o-linear-gradient(rgb(179,217,140),rgb(153,204,102));
    background-image : -webkit-linear-gradient(rgb(179,217,140),rgb(153,204,102));
    background-image :         linear-gradient(rgb(179,217,140),rgb(153,204,102));
  }
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

        <div class="main-content">
          <div class="section__content section__content--p30">


            <div class="row">
              <div class="col-md-12">
                <!-- DATA TABLE -->


                <div class="table-responsive table-responsive-data2">
                  <div class="col-lg-9">
                    <div class="card">
                     <div class="card-body">
                      <div class="card-title">
                        <h3 class="text-center title-2">Deskripsi Aplikasi</h3>
                      </div>
                      <hr>
                      <form class="form form-horizontal" method="POST" action="insert.php">
                        <button type="button" class="accordion">Data Estimasi</button>
                        <div class="panel">
                          <div class="card-content">
                            <div class="card-body">
                              <div class="form-body">
                                <div class="row">
                                  <div class="col-md-4" margin-left="100px">
                                    <label>Nama Proyek</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                    <input type="text" id="project-name" class="form-control"
                                    name="pname" placeholder="Nama Proyek" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Jam Kerja/Hari</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                    <input type="number" id="working-hours" class="form-control"
                                    name="whs" placeholder="Jam Kerja" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Deskripsi Proyek</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des"
                                    required></textarea>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>

                        <button type="button" class="accordion">Form Unadjusted Actor Weigth (UAW)</button>
                        <div class="panel">
                          <div class="card-header" style="margin-right:20px; margin-left: 20px;">
                            <center>
                              <h3>Unadjusted Actor Weight (UAW)</h3>
                              <br/>
                              <p style="text-align: justify; text-indent: 0.5in;">Unadjusted Actor Weight (UAW) adalah bagian mengidentifikasi dan mengklasifikasikan jenis actor dari Use Case Diagram. Jenis aktor diklasifikasikan menjadi 3 (tiga) kategori yaitu; simple, average dan complex.</p>
                              <br/>
                            </center>
                            <p style="font-size: 12px">Petunjuk Pengisiian: </p>
                            <p style="font-size: 12px">- Sebelum melakukan perhitungan estimasi UCP pastikan Use Case Model dari proyeknya sudah dibuat terlebih dahulu.</p>
                            <p style="font-size: 12px">- Inputkan total aktor sesuai berdasarkan tipenya sesuai dengan Use Case yang telah dibuat.</p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-lg">
                                <thead>
                                  <tr>
                                    <th>TIPE</th>
                                    <th width="160px">TOTAL AKTOR</th>
                                    <th>DESKRIPSI</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-bold-500">Simple</td>
                                    <td><input type="number" id="uaw-simple" class="form-control"
                                      name="uaws" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Merepresentasikan sistem yang berkomunikasi dengan sistem lainnya menggunakan Application Programming Interface (API).</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">Average</td>
                                    <td><input type="number" id="uaw-avg" class="form-control"
                                      name="uawa" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Merepresentasikan sistem yang berkomunikasi dengan actor lainnya menggunakan protocol khusus seperti HTTP dan FTP, ataupun manusia yang berkomunikasi dengan sistem menggunakan terminal console.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">Complex</td>
                                    <td><input type="number" id="uaw-cmplx" class="form-control"
                                      name="uawc" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Manusia yang menggunakan Graphical User Interface (GUI) untuk berkomunikasi dengan sistem.</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <br>

                        <button type="button" class="accordion">Form Unadjusted Use Case Weight (UUCW)</button>
                        <div class="panel">
                          <div class="card-header" style="margin-right:20px; margin-left: 20px;">
                            <center>
                              <h3>Unadjusted Use Case Weight (UUCW)</h3>
                              <br/>
                              <p style="text-align: justify; text-indent: 0.5in;">Unadjusted Use Case Weight(UUCW) menunjukkan kompleksitas use case yang diukur dari jumlah transaksi dalam sebuah use case. Transaksi di dalam use case merupakan aktivitas/skenario yang terdapat dalam masing-masing use case.</p>
                            </center>
                            <p style="font-size: 12px">Petunjuk Pengisiian: </p>
                            <p style="font-size: 12px">- Sebelum mengisi form UUCW tentukan jumlah transaksi dari setiap Use Case dengan membuat Use Case Scenario terlebih dahulu.</p>
                            <p style="font-size: 12px">- Inputkan kedalam form total use case per transaksi.</p>
                            <p style="font-size: 12px">- Contohnya apabila ada 4 Use Case, Use Case 1 memiliki 2 transaksi; Use Case 2 memiliki 4 transaksi; Use Case 3 memiliki 4 transaksi; Use Case 4 memiliki 2 transaksi.</p>
                            <p style="font-size: 12px">- Maka diinputkan kedalam form No.1 -> 2 Use Case; No.2 -> 1 Use Case; No.3 -> 1 Use Case.</p>
                            <br/>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-lg">
                                <thead>
                                  <tr>
                                    <th>NO</th>
                                    <th>USE CASE</th>
                                    <th>TRANSAKSI</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-bold-500">1</td>
                                    <td><input type="number" id="use-case1" class="form-control"
                                      name="trans1" value="0" width="100px" required>
                                    </td>
                                    <td class="text-bold-500">Jika menggunakan 1-2 transaksi / skenario</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">2</td>
                                    <td><input type="number" id="use-case2" class="form-control"
                                      name="trans2" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Jika menggunakan 3 transaksi / skenario</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">3</td>
                                    <td><input type="number" id="use-case2" class="form-control"
                                      name="trans3" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Jika menggunakan 4 transaksi / skenario</td>

                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">4</td>
                                    <td><input type="number" id="use-case2" class="form-control"
                                      name="trans4" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Jika menggunakan 5 transaksi / skenario</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">5</td>
                                    <td><input type="number" id="use-case2" class="form-control"
                                      name="trans5" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Jika menggunakan 6 transaksi / skenario</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">6</td>
                                    <td><input type="number" id="use-case2" class="form-control"
                                      name="trans6" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Jika menggunakan 7 transaksi / skenario</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">7</td>
                                    <td><input type="number" id="use-case2" class="form-control"
                                      name="trans7" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Jika menggunakan 8 transaksi / skenario</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">8</td>
                                    <td><input type="number" id="use-case2" class="form-control"
                                      name="trans8" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Jika menggunakan 9 transaksi / skenario</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">9</td>
                                    <td><input type="number" id="use-case2" class="form-control"
                                      name="trans9" value="0" required>
                                    </td>
                                    <td class="text-bold-500">Jika menggunakan 10-12 transaksi / skenario</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <br/>

                        <button type="button" class="accordion">Form Technical Complexity Factor (TCF)</button>
                        <div class="panel">
                          <div class="card-header" style="margin-right:20px; margin-left: 20px;">
                            <center>
                              <h3>Technical Complexity Factor (TCF)</h3>
                              <br/>
                              <p style="text-align: justify; text-indent: 0.5in;">Technical Complexity Factor (TCF) menunjukkan faktor-faktor yang berkontribusi atas kompleksitas teknis yang bakal dihadapi ketika mengembangkan perangkat lunak. Masing masing faktor bisa diberi nilai antara 0 (nol) hingga 5 (lima). Nol menunjukkan bahwa faktor teknis tersebut tidak relevan dengan sistem yang akan dikembangkan.</p>
                            </center>
                            <p style="font-size: 12px">Keterangan skala skor adalah sebagai berikut :
                              <br/>0 = Tidak Relevan
                              <br/>1 = Insidental
                              <br/>2 = Moderat
                              <br/>3 = Rata-rata
                              <br/>4 = Signifikan
                              <br/>5 = Relevan
                            </p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-lg">
                                <thead>
                                  <tr>
                                    <th width="10px">NO</th>
                                    <th>Technical Complexity Factor</th>
                                    <th width="300px">SKOR(0-5)</th>
                                    <th>Deskripsi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">Sistem Terdistribusi/Tersebar</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf1" required>
                                      1 <input type="radio" value="1" name="tcf1">
                                      2 <input type="radio" value="2" name="tcf1">
                                      3 <input type="radio" value="3" name="tcf1">
                                      4 <input type="radio" value="4" name="tcf1">
                                      5 <input type="radio" value="5" name="tcf1">
                                    </td>
                                    <td>Semakin tinggi nilai yang diberikan merepresentasikan semakin kompleksnya arsitektur sistem yang dibangun.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">2</td>
                                    <td class="text-bold-500">Kecepatan Respon atau Performansi Keluaran(Throughput)</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf2" required>
                                      1 <input type="radio" value="1" name="tcf2">
                                      2 <input type="radio" value="2" name="tcf2">
                                      3 <input type="radio" value="3" name="tcf2">
                                      4 <input type="radio" value="4" name="tcf2">
                                      5 <input type="radio" value="5" name="tcf2">
                                    </td>
                                    <td>Semakin tinggi penilaian menggambarkan pentingnya peningkatan waktu respon. Sistem seperti mesin pencari akan memiliki nilai yang tinggi dibandingkan dengan sekedar aplikasi untuk feed reader berita.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">3</td>
                                    <td class="text-bold-500">Efesiensi Pengguna(End User)</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf3" required>
                                      1 <input type="radio" value="1" name="tcf3">
                                      2 <input type="radio" value="2" name="tcf3">
                                      3 <input type="radio" value="3" name="tcf3">
                                      4 <input type="radio" value="4" name="tcf3">
                                      5 <input type="radio" value="5" name="tcf3">
                                    </td>
                                    <td>Nilai yang tinggi merepresentasikan proyek lebih mengutamakan aplikasi untuk memperbaiki efisiensi user.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">4</td>
                                    <td class="text-bold-500">Pemrosesan Internal yang Kompleks</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf4" required>
                                      1 <input type="radio" value="1" name="tcf4">
                                      2 <input type="radio" value="2" name="tcf4">
                                      3 <input type="radio" value="3" name="tcf4">
                                      4 <input type="radio" value="4" name="tcf4">
                                      5 <input type="radio" value="5" name="tcf4">
                                    </td>
                                    <td>Algoritma yang kompleks memiliki nilai yang tinggi, sementara algoritma seperti query database yang sederhana memiliki nilai yang lebih rendah.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">5</td>
                                    <td class="text-bold-500">Kemampuan Melakukan Penggunaan Kode Kembali (Reusable Code)</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf5" required>
                                      1 <input type="radio" value="1" name="tcf5">
                                      2 <input type="radio" value="2" name="tcf5">
                                      3 <input type="radio" value="3" name="tcf5">
                                      4 <input type="radio" value="4" name="tcf5">
                                      5 <input type="radio" value="5" name="tcf5">
                                    </td>
                                    <td>Reuse code dapat mengurangi jumlah effort yang harus dilakukan untuk mendeploy proyek juga dapat berpengaruh dalam mengurangi jumlah waktu dalam melakukan debug pada proyek. Semakin tinggi level reusable code maka semakin rendah nilai yang diberikan.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">6</td>
                                    <td class="text-bold-500">Kemudahan Instalasi</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf6" required>
                                      1 <input type="radio" value="1" name="tcf6">
                                      2 <input type="radio" value="2" name="tcf6">
                                      3 <input type="radio" value="3" name="tcf6">
                                      4 <input type="radio" value="4" name="tcf6">
                                      5 <input type="radio" value="5" name="tcf6">
                                    </td>
                                    <td>Semakin tinggi tingkat kompetensi pengguna dalam instalasi proyek perangkat lunak ini, maka nilai semakin rendah
                                    .</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">7</td>
                                    <td class="text-bold-500">Kemudahan Penggunaan</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf7" required>
                                      1 <input type="radio" value="1" name="tcf7">
                                      2 <input type="radio" value="2" name="tcf7">
                                      3 <input type="radio" value="3" name="tcf7">
                                      4 <input type="radio" value="4" name="tcf7">
                                      5 <input type="radio" value="5" name="tcf7">
                                    </td>
                                    <td>Semakin besar importance of usability, maka semakin besar nilai yang diberikan.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">8</td>
                                    <td class="text-bold-500">Dukungan Antar Platform (Cross-Platform)</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf8" required>
                                      1 <input type="radio" value="1" name="tcf8">
                                      2 <input type="radio" value="2" name="tcf8">
                                      3 <input type="radio" value="3" name="tcf8">
                                      4 <input type="radio" value="4" name="tcf8">
                                      5 <input type="radio" value="5" name="tcf8">
                                    </td>
                                    <td>Semakin banyak platform yang didukung seperti versi browser, jenis divais, sistem operasi yang digunakan, dll akan mempengaruhi semakin tinggi nilai yang diberikan.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">9</td>
                                    <td class="text-bold-500">Kemudahan untuk Mengubah</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf9" required>
                                      1 <input type="radio" value="1" name="tcf9">
                                      2 <input type="radio" value="2" name="tcf9">
                                      3 <input type="radio" value="3" name="tcf9">
                                      4 <input type="radio" value="4" name="tcf9">
                                      5 <input type="radio" value="5" name="tcf9">
                                    </td>
                                    <td>Semakin banyak perubahan/penyesuaian yang diperlukan di masa depan, semakin tinggi nilai yang diberikan.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">10</td>
                                    <td class="text-bold-500">Konkurensi</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf10" required>
                                      1 <input type="radio" value="1" name="tcf10">
                                      2 <input type="radio" value="2" name="tcf10">
                                      3 <input type="radio" value="3" name="tcf10">
                                      4 <input type="radio" value="4" name="tcf10">
                                      5 <input type="radio" value="5" name="tcf10">
                                    </td>
                                    <td>Faktor concurrency menunjukan apakah aplikasi yang dibangun nantinya akan melakukan banyak transaksi pada saat yang bersamaan? Semakin tinggi tingkat transaksi yang dilakukan secara pararel, maka semakin tinggi pula nilai yang diberikan.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">11</td>
                                    <td class="text-bold-500">Fitur Keamanan Khusus</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf11" required>
                                      1 <input type="radio" value="1" name="tcf11">
                                      2 <input type="radio" value="2" name="tcf11">
                                      3 <input type="radio" value="3" name="tcf11">
                                      4 <input type="radio" value="4" name="tcf11">
                                      5 <input type="radio" value="5" name="tcf11">
                                    </td>
                                    <td>Semakin banyak custom security yang bekerja (field level, page level, atau role-based security), maka nilai yang diberikan semakin tinggi.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">12</td>
                                    <td class="text-bold-500">Ketergantungan pada Kode Pihak Ketiga</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf12" required>
                                      1 <input type="radio" value="1" name="tcf12">
                                      2 <input type="radio" value="2" name="tcf12">
                                      3 <input type="radio" value="3" name="tcf12">
                                      4 <input type="radio" value="4" name="tcf12">
                                      5 <input type="radio" value="5" name="tcf12">
                                    </td>
                                    <td>Seperti reusable code, kode pihak ketiga dapat mengurangi usaha yang dibutuhkan untuk mendeploy solusi pada proyek. Semakin bayak ketergantungan terhadap kode pihak ketiga, semakin kecil nilai yang diberikan.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">13</td>
                                    <td class="text-bold-500">Diperlukan Pelatihan Khusus untuk Penggunaan</td>
                                    <td>
                                      0 <input type="radio" value="0" name="tcf13" required>
                                      1 <input type="radio" value="1" name="tcf13">
                                      2 <input type="radio" value="2" name="tcf13">
                                      3 <input type="radio" value="3" name="tcf13">
                                      4 <input type="radio" value="4" name="tcf13">
                                      5 <input type="radio" value="5" name="tcf13">
                                    </td>
                                    <td>Semakin lama waktu yang dibutuhkan oleh pengguna untuk mencapai tingkat penguasaan produk, maka semakin tinggi nilai yang diberikan.</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <br/>

                        <button type="button" class="accordion">Form Environtment Complexity Factor (ECF)</button>
                        <div class="panel">
                          <div class="card-header" style="margin-right:20px; margin-left: 20px;">
                            <center>
                              <h3>Environment Complexity Factor (ECF)</h3>
                              <br/>
                              <p style="text-align: justify; text-indent: 0.5in;">Environmental Complexity Factor (ECF) adalah faktor yang diterapkan untuk memperkirakan ukuran software dengan menghitung pertimbangan lingkungan pada sistem. ECF ditentukan dengan menetapkan skor antara 0 sampai 5 pada setiap 8 Environmental Factor.</p>
                            </center>
                            <p style="font-size: 12px">Keterangan skala skor adalah sebagai berikut :
                              <br/>0 = Tidak Relevan
                              <br/>1 = Insidental
                              <br/>2 = Moderat
                              <br/>3 = Rata-rata
                              <br/>4 = Signifikan
                              <br/>5 = Relevan
                            </p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-lg">
                                <thead>
                                  <tr>
                                    <th width="10px">NO</th>
                                    <th>Environmant Complexity Factor</th>
                                    <th width="300px">SKOR(0-5)</th>
                                    <th>Deskripsi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">Familiar dengan Metode Pengembangan</td>
                                    <td>
                                      0 <input type="radio" value="0" name="ecf1" required>
                                      1 <input type="radio" value="1" name="ecf1">
                                      2 <input type="radio" value="2" name="ecf1">
                                      3 <input type="radio" value="3" name="ecf1">
                                      4 <input type="radio" value="4" name="ecf1">
                                      5 <input type="radio" value="5" name="ecf1">
                                    </td>
                                    <td>Semakin familiar(menguasai) maka nilai semakin tinggi.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">2</td>
                                    <td class="text-bold-500">Application Experience</td>
                                    <td>
                                      0 <input type="radio" value="0" name="ecf2" required>
                                      1 <input type="radio" value="1" name="ecf2">
                                      2 <input type="radio" value="2" name="ecf2">
                                      3 <input type="radio" value="3" name="ecf2">
                                      4 <input type="radio" value="4" name="ecf2">
                                      5 <input type="radio" value="5" name="ecf2">
                                    </td>
                                    <td>Semakin banyak pengalaman dalam membuat perubahan pada proyek pengembangan perangkat lunak maka nilai semakin tinggi.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">3</td>
                                    <td class="text-bold-500">Pengalaman Orientasi Objek</td>
                                    <td>
                                      0 <input type="radio" value="0" name="ecf3" required>
                                      1 <input type="radio" value="1" name="ecf3">
                                      2 <input type="radio" value="2" name="ecf3">
                                      3 <input type="radio" value="3" name="ecf3">
                                      4 <input type="radio" value="4" name="ecf3">
                                      5 <input type="radio" value="5" name="ecf3">
                                    </td>
                                    <td>Semakin banyak pengalaman dalam Object Oriented programming, maka nilai semakin tinggi.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">4</td>
                                    <td class="text-bold-500">Menguasai Kemampuan Analisis</td>
                                    <td>
                                      0 <input type="radio" value="0" name="ecf4" required>
                                      1 <input type="radio" value="1" name="ecf4">
                                      2 <input type="radio" value="2" name="ecf4">
                                      3 <input type="radio" value="3" name="ecf4">
                                      4 <input type="radio" value="4" name="ecf4">
                                      5 <input type="radio" value="5" name="ecf4">
                                    </td>
                                    <td>Semakin besar kapabilitas dan pengetahuan, maka nilai semakin tinggi.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">5</td>
                                    <td class="text-bold-500">Motivasi</td>
                                    <td>
                                      0 <input type="radio" value="0" name="ecf5" required>
                                      1 <input type="radio" value="1" name="ecf5">
                                      2 <input type="radio" value="2" name="ecf5">
                                      3 <input type="radio" value="3" name="ecf5">
                                      4 <input type="radio" value="4" name="ecf5">
                                      5 <input type="radio" value="5" name="ecf5">
                                    </td>
                                    <td>Semakin besar motivasi tim, maka nilai semakin tinggi.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">6</td>
                                    <td class="text-bold-500">Requirement yang Stabli</td>
                                    <td>
                                      0 <input type="radio" value="0" name="ecf6" required>
                                      1 <input type="radio" value="1" name="ecf6">
                                      2 <input type="radio" value="2" name="ecf6">
                                      3 <input type="radio" value="3" name="ecf6">
                                      4 <input type="radio" value="4" name="ecf6">
                                      5 <input type="radio" value="5" name="ecf6">
                                    </td>
                                    <td>Semakin besar perubahan akan requirement, maka nilai semakin tinggi.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">7</td>
                                    <td class="text-bold-500">Pekerja Paruh Waktu</td>
                                    <td>
                                      0 <input type="radio" value="0" name="ecf7" required>
                                      1 <input type="radio" value="1" name="ecf7">
                                      2 <input type="radio" value="2" name="ecf7">
                                      3 <input type="radio" value="3" name="ecf7">
                                      4 <input type="radio" value="4" name="ecf7">
                                      5 <input type="radio" value="5" name="ecf7">
                                    </td>
                                    <td>Semakin banyak anggota tim yang pekerja paruh waktu, maka nilai semakin tinggi.</td>
                                  </tr>
                                  <tr>
                                    <td class="text-bold-500">8</td>
                                    <td class="text-bold-500">Bahasa Pemrograman yang Sulit</td>
                                    <td>
                                      0 <input type="radio" value="0" name="ecf8" required>
                                      1 <input type="radio" value="1" name="ecf8">
                                      2 <input type="radio" value="2" name="ecf8">
                                      3 <input type="radio" value="3" name="ecf8">
                                      4 <input type="radio" value="4" name="ecf8">
                                      5 <input type="radio" value="5" name="ecf8">
                                    </td>
                                    <td>Semakin sulit bahasa pemrograman maka nilai semakin tinggi.</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <br/>

                        <button type="button" class="accordion">Form Estimasi Biaya</button>
                        <div class="panel">
                          <div class="card-header">
                            <center>
                              <h3>Form Estimasi Biaya</h3>
                            </center>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-lg">
                                <thead bgcolor="#E6E6FA">
                                  <tr>
                                    <th>Fase Pengembangan</th>
                                    <th>ENGINEER</th>
                                    <th width="150px" style="font-size: 13px">%EFFORT<br/>(Total Effort 100%)</th>
                                    <th>Standar Gaji</th>
                                    <th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-bold-500" colspan="5" style="font-weight: bold;">Software Development</td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" class="form-control"
                                        name="act1[]" placeholder="Fase Pengembangan">
                                      </td>
                                      <td><input type="text" class="form-control"
                                        name="eng1[]" placeholder="Engineer">
                                      </td>
                                      <td><input type="text" class="form-control"
                                        name="eff1[]" placeholder="0%">
                                      </td>
                                      <td><input type="text" class="form-control"
                                        name="sal1[]" placeholder="0">
                                      </td>
                                      <td><input type='button' class="btn btn-info" name="add" id="AddNew" width="20px" value="+"></td>
                                    </tr>
                                    <tr>
                                      <td class="text-bold-500" colspan="5" style="font-weight: bold;">OnGoing Activity</td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" class="form-control"
                                        name="act2[]" placeholder="Fase Pengembangan">
                                      </td>
                                      <td><input type="text" class="form-control"
                                        name="eng2[]" placeholder="Engineer">
                                      </td>
                                      <td><input type="text" class="form-control"
                                        name="eff2[]" placeholder="0%">
                                      </td>
                                      <td><input type="text" class="form-control"
                                        name="sal2[]" placeholder="0">
                                      </td>
                                      <td><input type='button' class="btn btn-info" name="add" id="AddNew2" width="20px" value="+"></td>
                                    </tr>
                                    <tr>
                                      <td class="text-bold-500" colspan="5" style="font-weight: bold;">Quality and Testing</td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" class="form-control"
                                        name="act3[]" placeholder="Fase Pengembangan">
                                      </td>
                                      <td><input type="text" class="form-control"
                                        name="eng3[]" placeholder="Engineer">
                                      </td>
                                      <td><input type="text" class="form-control"
                                        name="eff3[]" placeholder="0%">
                                      </td>
                                      <td><input type="text" class="form-control"
                                        name="sal3[]" placeholder="0">
                                      </td>
                                      <td><input type='button' class="btn btn-info" name="add" id="AddNew3" width="20px" value="+"></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <br/>

                          <a href="index.php" class="btn btn-danger me-1 mb-1" style="width: 100px;">Kembali</a>
                          <button type="submit" class="btn btn-primary me-1 mb-1" name="submit" onclick="return confirm('Buat Estimasi Baru?')" style="float: right; width: 100px;">Simpan</button>
                        </form>
                      </div>
                    </div>
                    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
                    <script src="assets/js/bootstrap.bundle.min.js"></script>
                    <script src="dist/sweetalert2.all.min.js"></script>

                    <script src="assets/js/main.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                    <script>
                      var acc = document.getElementsByClassName("accordion");
                      var i;

                      for (i = 0; i < acc.length; i++) {
                        acc[i].onclick = function(){
                          this.classList.toggle("active");
                          this.nextElementSibling.classList.toggle("show");
                        }
                      }

                      $('#AddNew').click(function(){
                        var row = $(this).closest('tr').clone();
                        row.find('input').val('');
                        $(this).closest('tr').after(row);
                        $('input[type="button"]', row).removeClass('form-control')
                        .addClass('btn btn-danger').attr('id','remove').val('-');
                      });

                      $('#AddNew2').click(function(){
                        var row = $(this).closest('tr').clone();
                        row.find('input').val('');
                        $(this).closest('tr').after(row);
                        $('input[type="button"]', row).removeClass('form-control')
                        .addClass('btn btn-danger').attr('id','remove').val('-');
                      });

                      $('#AddNew3').click(function(){
                        var row = $(this).closest('tr').clone();
                        row.find('input').val('');
                        $(this).closest('tr').after(row);
                        $('input[type="button"]', row).removeClass('form-control')
                        .addClass('btn btn-danger').attr('id','remove').val('-');
                      });

                      $('table').on('click', '#remove', function(){
                        $(this).closest('tr').remove();
                      });
                    </script> 
                  </body>
                  </html>