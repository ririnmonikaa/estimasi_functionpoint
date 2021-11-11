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
    <body class="animsition">
        <style type="text/css">
            .tipe{
                background-color: white;

                padding: 0 40px;
                font-size: 13px;
                color: #4682B4;
            }
            .btn-info{
                border-radius: 50%;
            }
            .keterangan{

                padding: 0 40px;
                font-size: 13px;
                color: #4682B4;


            </style>
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
                                                            <b><h3 class="text-center title-2">Penentuan Bobot Kompleksitas</b>
                                                            </div></h3>
                                                            <p><center>Penentuan bobot kompleksitas ditentukan berdasarkan pada jumlah tipe elemen data tiap fungsi, jumlah record elemen tipe dan jumlah referensi tipe file yang kemudian penentuan bobot kompleksitas dilakukan dengan menggunakan algoritma fuzzy</center></p>
                                                            <div class="card-header" style="margin-right:20px; margin-left: 20px;">

                                                                <p style="font-size: 12px">Petunjuk Pengisian: </p>
                                                                <p style="font-size: 12px">- Menginputkan nilai dari masing-masing tipe fungsi pada fungsi transaksi dan fungsi data</p>
                                                                <p style="font-size: 12px">- Menginputkan nilai dari DET, RET dan FTR dari masing-masing tipe fungsi agar mendapatkan nilai bobot kompleksitas</p>
                                                            </div>
                                                            <br>
                                                            <p><a href="contohKasus.php"><b>Klik untuk melihat contoh selengkapnya</b></a></p>


                                                            <br/>

                                                            <form action="cfp_fuzzy.php" method="post">

                                                                <table class="table table-lg">

                                                                    <thead>
                                                                        <tr style="background-color:#20B2AA; color:black;">
                                                                            <h5 ><th class="text-bold-500" colspan="6"><h4>Fungsi Transaksi</h4><br/>

                                                                            </tr>
                                                                            <tr>
                                                                        <!--<td>  1. Ekternal Input(EI) : <br/>
                                                                            2. Eksternal Output (EO):<br/>
                                                                            3. Eksternal Query (EQ): <br/></td>
                                                                            4. Eksternal Interface File (EIF):<br/>
                                                                                    5. Internal Logical File (ILF):<br/><

                                                                                </tr>-->

                                                                                <tr>
                                                                                    <th width="450">Tipe Fungsi</th>
                                                                                    <th>Jumlah</th>
                                                                                    <!--<th data-toggle="tooltip" data-placement="top" title="Data element type merupakan field yang tak berulang dan dapat diidentifikasi oleh pengguna sebagai field yang unik/ tidak bisa diulang. Contoh: id_customer, id_supplier">DET</th></center>-->
                                                                                    <th>DET  <button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#ket1" aria-expanded="false" aria-controls="collapseExample">
                                                                                        i
                                                                                    </button>
                                                                                </th>


                                                                                <th>FTR <button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#ket2" aria-expanded="false" aria-controls="collapseExample">
                                                                                    i
                                                                                </button></th>

                                                                            </tr>
                                                                            <tr>

                                                                            </tr>
                                                                        </thead>

                                                                        <?php

                                                                        $nama_app = $_POST['nama_app'];
                                                                        $effort = $_POST['effort'];
                                                                        $tanggal = $_POST['tanggal'];
                                                                        ?>

                                                                        <input type="hidden" name="nama_app" value= "<?php echo $nama_app?>">
                                                                        <input type="hidden" name="effort" value= "<?php echo $effort?>">
                                                                        <input type="hidden" name="tanggal" value= "<?php echo $tanggal?>">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td></td>

                                                                                <td>


                                                                                </td>

                                                                                <td>
                                                                                    <div class="collapse" id="ket1">
                                                                                      <div class="keterangan">
                                                                                       Data Element Type merupakan field yang tak berulang. Contoh: id_customer, id_supplier
                                                                                   </div>
                                                                               </div>


                                                                           </td>

                                                                           <td>
                                                                            <div class="collapse" id="ket2">
                                                                              <div class="keterangan">
                                                                               File type refrence merupakan sebuah EIF yang dibaca oleh fungsi transaksional yaitu EI, EO dan EQ
                                                                           </div>
                                                                       </div>
                                                                   </td>

                                                               </tr>


                                                               <tr>
                                                                <td>External Input (EI) <button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#ket3" aria-expanded="false" aria-controls="collapseExample">
                                                                    i
                                                                </button></td>

                                                                <td>
                                                                    <input type="text" id="tipe1" name="tipe1"  class="form-control" step="any" value="0">

                                                                </td>

                                                                <td>
                                                                    <input type="text" id="det1" name="det1"  class="form-control" step="any" value="0">

                                                                </td>

                                                                <td>
                                                                    <input type="text" id="ftr1" name="ftr1"  class="form-control" step="any" value="0">

                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="collapse" id="ket3">
                                                                      <div class="keterangan">
                                                                       Ei adalah jumlah  data yang mengotrol informasi yang berasal dari luar perangkat lunak seperti jumlah tambah, edit, hapus data
                                                                   </div>
                                                               </div>
                                                           </td>

                                                           <td>


                                                           </td>

                                                           <td>


                                                           </td>

                                                       </tr>
                                                       <tr>
                                                        <td>External Output (EO) <button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#ket4" aria-expanded="false" aria-controls="collapseExample">
                                                            i
                                                        </button></td>

                                                        <td>
                                                            <input type="text" id="tipe2" name="tipe2"  class="form-control" step="any" value="0">

                                                        </td>

                                                        <td>
                                                            <input type="text" id="det2" name="det2"  class="form-control" step="any" value="0">

                                                        </td>

                                                        <td>
                                                            <input type="text" id="ftr2" name="ftr2"  class="form-control" step="any" value="0">

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="collapse" id="ket4">
                                                              <div class="keterangan">
                                                               EO adalah jumlah data yang diturunkan melewati boundary dari dalam ke luar seperti jumlah data mencetak, menampilkan
                                                           </div>
                                                       </div>
                                                   </td>

                                                   <td>


                                                   </td>

                                                   <td>


                                                   </td>

                                               </tr>




                                               <td>Eksternal Inquiries (EQ) <button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#ket5" aria-expanded="false" aria-controls="collapseExample">
                                                i
                                            </button></td>

                                            <td><input id="tipe3" required type="text" name="tipe3" value="0" 
                                                class="form-control"></td>


                                                <td>
                                                    <input type="text" id="det3" name="det3"  class="form-control" step="any" value="0">

                                                </td>

                                                <td>
                                                    <input type="text" step="any" id="ftr3" name="ftr3"  class="form-control" value="0" >
                                                </td>

                                            </tr>
                                            <tr>

                                                <td> 
                                                    <div class="collapse" id="ket5">
                                                      <div class="keterangan">
                                                       EQ adalah Jumlah data Men-generate, merekap data, mencari data
                                                   </div>
                                               </div>


                                               <td>


                                               </td>

                                               <td>


                                               </td>

                                               <td>


                                               </td>

                                           </tr>
                                       </table>

                                       <table class="table table-lg">

                                        <thead>
                                            <tr  style="background-color:#F08080;">
                                                <th class="text-bold-500" colspan="6"><h4>Fungsi Data</h4><br/>
                                                </th>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th width="450">Tipe Fungsi</th>
                                            <th>Jumlah</th>
                                            <th>DET <button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#ket6" aria-expanded="false" aria-controls="collapseExample">
                                                i
                                            </button></th>
                                            <th>RET <button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#ket7" aria-expanded="false" aria-controls="collapseExample">
                                                i
                                            </button></th>


                                        </tr>
                                        <tr>
                                            <td></td>

                                            <td>


                                            </td>

                                            <td>
                                                <div class="collapse" id="ket6">
                                                  <div class="keterangan">
                                                   DET adalah Data element type merupakan field yang tak berulang dan dapat diidentifikasi oleh pengguna sebagai field yang unik/ tidak bisa diulang. Contoh: id_customer, id_supplier
                                               </div>
                                           </div>



                                       </td>

                                       <td>
                                        <div class="collapse" id="ket7">
                                          <div class="keterangan">
                                           RET adalah Record element type merupakan subgrup dari elemen data yang berada di dalam ILF atau EIF. Contoh: data customer yang terdiri dari biodata, dll
                                       </div>
                                   </div>

                               </td>

                           </tr>
                       </thead>

                       <tr>
                        <td>Internal Logical File (ILF) <button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#ket8" aria-expanded="false" aria-controls="collapseExample">
                            i
                        </button></td>
                        <td>
                            <input type="text" id="tipe4" name="tipe4"  class="form-control" step="any" value="0" >

                        </td>
                        <td>
                            <input type="text" id="det4" name="det4"  class="form-control" step="any"  value="0" >

                        </td>
                        <td>
                            <input type="text" id="ret4" name="ret4"  class="form-control" step="any" value="0">

                        </td>


                    </tr>
                    <tr>
                        <td> 
                            <div class="collapse" id="ket8">
                              <div class="keterangan">
                               ILF adalah Data user atau kontrol informasi yang 
                               dikendalikan total oleh aplikasi seperti data customer, data supplier, dll
                           </div>
                       </div>

                       <td>


                       </td>

                       <td>


                       </td>

                       <td>


                       </td>

                   </tr>
                   <tr>
                    <td>Eksternal Interface Files (EIF) <button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#ket9" aria-expanded="false" aria-controls="collapseExample">
                        i
                    </button></td>
                    <td>
                        <input type="text" id="tipe5" name="tipe5"  class="form-control" step="any" value="0" >

                    </td>
                    <td>
                        <input type="text" id="det5" name="det5"  class="form-control" step="any"  value="0">

                    </td>
                    <td>
                        <input type="text" id="ret5" name="ret5"  class="form-control"step="any" value="0">

                    </td>


                </tr>
                <tr>
                    <td> 
                        <div class="collapse" id="ket9">
                          <div class="keterangan">
                           EIF adalah File yang dikendalikan oleh aplikasi lain tetapi 
                           diperlukan oleh aplikasi seperti payment gateway, google maps
                       </div>
                   </div>


               </td>

               <td>


               </td>

               <td>


               </td>

               <td>


               </td>

           </tr>

                                                           <!-- <tr>
                                                                <td><h4><b>Hasil CFP</b></h4></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><b>
                                                                    <input type="text" id="total_cfp" name="total_cfp"  class="form-control" ></b>
                                                                </td>
                                                            </tr>-->
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                
                                                                <td colspan="4">


                                                                    <button type="reset"
                                                                    class="btn btn-danger btn-sm">Reset</button>
                                                                    <button type="submit"
                                                                    class="btn btn-primary btn-sm">Bobot Kompleksitas</button>
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
<script>
    $(document).ready(function(){
      $("#tooltip").click(function(){
        $('#tooltip').tooltip("toggle");
    });
  });
</script>
<script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js”></script>

<script type="text/javascript">
    function showDiv(toggle){
        document.getElementById(toggle).style.display = 'block';
    }
    function close(toggle) {
        document.getElementsById(toggle).style.display = 'none';}
    </script>

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

