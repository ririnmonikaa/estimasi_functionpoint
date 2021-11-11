<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.col-md-4 {
			width: 33.33333333%;
			position: relative;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
		}
		.starter-template {
			padding: 20px 15px;
			text-align: center;
		}
		.alert{
			text-align: center !important;
		}
		.pt10{
			padding-top: 10px !important;
		}

		.navbar-inverse {
			background-color: #950927 ;
			border-color:  #6d0f23 ;
			color: #fff !important;
		}

		.navbar-inverse .navbar-brand {
			color: #fff;
		}

		.nol{
			background-color:  #eee ;
			color: #999;
			padding: 3px;
			text-align: center !important;
		}
		.rendah{
			background-color: #f5eb25;
			color: #000;
			padding: 3px;
			text-align: center !important;
		}

		.sedang{
			background-color:  #1ea318 ;
			color: #000;
			padding: 3px;
			text-align: center !important;
		}

		.alert{
			color: #000 !important;
		}
		.tinggi{
			background-color:  #62a0f3  ;
			color: #000;
			padding: 3px;
			text-align: center !important;
		}
		.alert-warning{
			background-color: #f5eb25 !important;
		}
		.alert-success{
			background-color: #1ea318  !important;
		}
		.alert-info{
			background-color: #62a0f3  !important;
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
																	<b><h3 class="text-center title-2">Menghitung CFP (Crude Function Point)</b>

																	</div></h3>
																	<p><center>Perhitungan Crude Function Point (CFP) didapatkan berdasarkan bobot nilai komponen-komponen function point, dan nilai tersebut di totalkan. Pada Perhitungan CFP akan ditampilkan hasil dari bobot komoleksitas. Bobot Kompleksitas diklasifikasikan menjadi 3 (tiga) kategori yaitu; simple, average dan complex </center></p>
																	<br/>
																	<div class="card-header" style="margin-right:20px; margin-left: 20px;">

																		<p style="font-size: 12px">Petunjuk Pengisiian: </p>
																		<p style="font-size: 12px">- Sebelum melakukan perhitungan CFP pastikan sudah mengisi form untuk penilaian bobot kompleksitas</p>
																		<p style="font-size: 12px">- Didapatkan total dari CFP.</p>
																	</div>
																	
																	<br>

																	<form action="rcaf.php" method="post">

																		<table class="table table-lg">
																			<thead style="background-color:#20B2AA; color:black;" align="center"> 

																				<tr>
																					<th width="180">Tipe Fungsi</th>
																					<th>Jumlah</th>
																					<th width="30%">Bobot Kompleksitas</th>
																					<th>Nilai Bobot</th>
																					<th>Total</th>
																				</tr>
																			</thead>

																			<?php

																			$nama_app = $_POST['nama_app'];
																			$effort = $_POST['effort'];
																			$tanggal = $_POST['tanggal'];

																			$tipe1 = $_POST['tipe1'];
																			$tipe2 = $_POST['tipe2'];
																			$tipe3 = $_POST['tipe3'];
																			$tipe4 = $_POST['tipe4'];
																			$tipe5 = $_POST['tipe5'];


																			$det1 = $_POST['det1'];
																			$ftr1 = $_POST['ftr1'];
																			$det2 = $_POST['det2'];
																			$ftr2 = $_POST['ftr2'];
																			$det3 = $_POST['det3'];
																			$ftr3 = $_POST['ftr3'];
																			$det4 = $_POST['det4'];
																			$ret4 = $_POST['ret4'];
																			$det5 = $_POST['det5'];
																			$ret5 = $_POST['ret5'];



// Logika Fuzzy untuk Tipe Fungsi EI

                                                            if ($det1 < 0 || $ftr1< 0 )  {      //3
                                                              $z="";                            //4
                                                          }else {                               //5
    //DET Large
                                                            if($det1<=15){                      //6
                                                                $largedet1 = 0;                 //7
                                                            }else if($det1>15 && $det1<20){     //8
                                                                $largedet1=($det1 - 15) /(20 - 15);     //9
                                                            }else{
                                                                $largedet1 = 1;                 //11
                                                            }
    //DET Medium
                                                            if($det1<=5 || $det1>=20 ){         //12
                                                                $mediumdet1 = 0;                //13
                                                            }else if($det1>5 && $det1<10){      //14
                                                               $mediumdet1 = ($det1-5)/(10-5);  //15
                                                           }
                                                           else if ($det1>15 && $det1<20){      //16
                                                              $mediumdet1=(20 - $det1) /(20 - 15);  //17
                                                          }else{
                                                             $mediumdet1 =1;                        //19
                                                         }

    //DET Small
                                                         if($det1<=5){
                                                         	$smalldet1 = 1;

                                                         }else if($det1>5 && $det1<10){
                                                         	$smalldet1 = (10-$det1)/(10-5);

                                                         }else{
                                                         	$smalldet1 = 0;
                                                         }



    //FTR Large
                                                         if($ftr1<=1){		//
                                                         	$largeftr1 = 0;
                                                         }else if($ftr1>1 && $ftr1<=2){
                                                         	$largeftr1 = 0;
                                                         }else if($ftr1>2 && $ftr1<=3){
                                                         	$largeftr1=($ftr1 - 2) /(3 - 2);
                                                         }else{
                                                         	$largeftr1 = 1;
                                                         }
    //FTR Medium
                                                         if($ftr1 <=1 ){
                                                         	$mediumftr1 = 0;
                                                         }else if($ftr1>1 && $ftr1<=2){
                                                         	$mediumftr1 = ($ftr1-1)/(2-1);
                                                         }
                                                         else if ($ftr1>2 && $ftr1<3){
                                                         	$mediumftr1=(3 - $ftr1) /(3 - 2);
                                                         }else{
                                                         	$mediumftr1 =0; 		//41
                                                         }

    //FTR Small
                                                         if($ftr1<=1){
                                                         	$smallftr1 = 1;

                                                         }else if($ftr1>1 && $ftr1<2){
                                                         	$smallftr1 = (2-$ftr1)/(2-1);

                                                         }else{
                                                         	$smallftr1 = 0;
                                                         }

                                                         $z1= 0;
                                                         $z2= 0;
                                                         $z3= 0;
                                                         $z4= 0;
                                                         $z5= 0;
                                                         $z6= 0;
                                                         $z7= 0;
                                                         $z8= 0;
                                                         $z9= 0;

  $R1=min($smalldet1,$smallftr1); //maka output simple
  $z1 = 4 - $R1;

      $R2=min($smalldet1,$mediumftr1); //maka output simple
      $z2 = 4 - $R2;

      $R3=min($smalldet1,$largeftr1); //maka output average
      $z31 = 3 + $R3;
      $z32 = 6- (2 * $R3);
      $z3 = min($z31,$z32);

      $R4=min($mediumdet1,$smallftr1); //maka output simple
      $z4 = 4 - $R4;

      $R5=min($mediumdet1,$mediumftr1); //maka output average
      $z51 = 3 + $R5;
      $z52 = 6- (2 * $R5);
      $z5 = min($z51,$z52);

      $R6=min($mediumdet1,$largeftr1); //maka output complex
      $z6 = 4 + (2 * $R6);

      $R7=min($largedet1,$smallftr1); //maka output average
      $z71 = 3 + $R7;
      $z72 = 6- (2 * $R7);
      $z7 = min($z71,$z72);

      $R8=min($largedet1,$mediumftr1); //maka output complex
      $z8 = 4 + (2 * $R8);
      
      $R9=min($largedet1,$largeftr1); // maka output complex
      $z9 = 4 + (2 * $R9);

      $total_RiZi = ($R1*$z1)+($R2*$z2)+($R3*$z3)+($R4*$z4)+($R5*$z5)+($R6*$z6) + ($R7*$z7)+($R8*$z8)+($R9*$z9);
      $total_R = $R1+$R2+$R3+$R4+$R5+$R6+$R7+$R8+$R9;
      $z = $total_RiZi/$total_R;
      
      $ei_bobot = $z;

//bobot Complex 

      if($ei_bobot<=4){
      	$bobotComplex = 0;

      }
      else if($ei_bobot>4 && $ei_bobot<=6){
      	$bobotComplex=($ei_bobot - 4) /(6 - 4);

      }else{
      	$bobotComplex = 1;

      }

//bobot Avg
      if($ei_bobot <=3 ){
      	$bobotAvg = 0;

      }else if($ei_bobot>3 && $ei_bobot<=4){
      	$bobotAvg = ($ei_bobot-3)/(4-3);


      }
      else if ($ei_bobot==5){
      	$bobotAvg=1;

      }
      else if ($ei_bobot>4 && $ei_bobot<6){
      	$bobotAvg=(6 - $ei_bobot) /(6 - 4);

      }else{
      	$bobotAvg =0;

      }

//bobot Simple
      if($ei_bobot<=3){
      	$bobotSimple = 1;

      }
      else if($ei_bobot>3 && $ei_bobot<4){
      	$bobotSimple=(4-$ei_bobot) /(4 - 3);

      }else{
      	$bobotSimple = 0;

      }
  }

  $total_tipe1 = $tipe1 * $ei_bobot;



// Logika Fuzzy untuk Tipe Fungsi EO

  if ($det2 < 0 || $ftr2< 0 )  {
  	$z_tipe2="";
  }else {
//DET Large
  	if($det2<=20){
  		$largedet2 = 0;
  	}else if($det2>20 && $det2<25){
  		$largedet2=($det2 - 20) /(25 - 20);
  	}else{
  		$largedet2 = 1;
  	}
//DET Medium
  	if($det2<=5 || $det2>=25 ){
  		$mediumdet2 = 0;
  	}else if($det2>5 && $det2<10){
  		$mediumdet2 = ($det2-5)/(10-5);
  	}
  	else if ($det2>20 && $det2<25){
  		$mediumdet2=(25 - $det2) /(25 - 20);
  	}else{
  		$mediumdet2 =1;
  	}

//DET Small
  	if($det2<=5){
  		$smalldet2 = 1;

  	}else if($det2>5 && $det2<10){
  		$smalldet2 = (10-$det2)/(10-5);

  	}else{
  		$smalldet2 = 0;
  	}



//FTR Large
  	if($ftr2<=3){
  		$largeftr2 = 0;
  	}else if($ftr2>3 && $ftr2<4){
  		$largeftr2=($ftr2 - 4) /(4 - 3);
  	}else{
  		$largeftr2 = 1;
  	}
//FTR Medium
  	if($ftr2<=1 || $ftr2>=4 ){
  		$mediumftr2 = 0;
  	}else if($ftr2>1 && $ftr2<2){
  		$mediumftr2 = ($ftr2-1)/(2-1);
  	}
  	else if ($ftr2>3 && $ftr2<4){
  		$mediumftr2=(4 - $ftr2) /(4 - 3);
  	}else{
  		$mediumftr2 =1;
  	}

//FTR Small
  	if($ftr2<=1){
  		$smallftr2 = 1;

  	}else if($ftr2>1 && $ftr2<2){
  		$smallftr2 = (2-$ftr2)/(2-1);

  	}else{
  		$smallftr2 = 0;
  	}

  	$z1_tipe2= 0;
  	$z2_tipe2= 0;
  	$z3_tipe2= 0;
  	$z4_tipe2= 0;
  	$z5_tipe2= 0;
  	$z6_tipe2= 0;
  	$z7_tipe2= 0;
  	$z8_tipe2= 0;
  	$z9_tipe2= 0;

$R1_tipe2=min($smalldet2,$smallftr2); //maka output simple
$z1_tipe2 = 5 - $R1_tipe2;

$R2_tipe2=min($smalldet2,$mediumftr2); //maka output simple
$z2_tipe2 = 5 - $R2_tipe2;

$R3_tipe2=min($smalldet2,$largeftr2); //maka output average
$z31_tipe2 = 4 + $R3_tipe2;
$z32_tipe2 = 7 - (2 * $R3_tipe2);
$z3_tipe2 = min($z31_tipe2,$z32_tipe2);

$R4_tipe2=min($mediumdet2,$smallftr2); //maka output simple
$z4_tipe2 = 5 - $R4_tipe2;

$R5_tipe2=min($mediumdet2,$mediumftr2); //maka output average
$z51_tipe2 = 4 + $R5_tipe2;
$z52_tipe2 = 7 - (2 * $R5_tipe2);
$z5_tipe2 = min($z51_tipe2,$z52_tipe2);

$R6_tipe2=min($mediumdet2,$largeftr2); //maka output complex
$z6_tipe2 = 5 + (2 * $R6_tipe2);

$R7_tipe2=min($largedet2,$smallftr2); //maka output average
$z71_tipe2 = 4 + $R7_tipe2;
$z72_tipe2 = 7 - (2 * $R7_tipe2);
$z7_tipe2 = min($z71_tipe2,$z72_tipe2);

$R8_tipe2=min($largedet2,$mediumftr2); //maka output complex
$z8_tipe2 = 5 + (2 * $R8_tipe2);

$R9_tipe2=min($largedet2,$largeftr2); // maka output complex
$z9_tipe2 = 5 + (2 * $R9_tipe2);

$total_RiZi_tipe2 = ($R1_tipe2*$z1_tipe2)+($R2_tipe2*$z2_tipe2)+($R3_tipe2*$z3_tipe2)+($R4_tipe2*$z4_tipe2)+($R5_tipe2*$z5_tipe2)+($R6_tipe2*$z6_tipe2) + ($R7_tipe2*$z7_tipe2)+($R8_tipe2*$z8_tipe2)+($R9_tipe2*$z9_tipe2);
$tipe2_total_R = $R1_tipe2+$R2_tipe2+$R3_tipe2+$R4_tipe2+$R5_tipe2+$R6_tipe2+$R7_tipe2+$R8_tipe2+$R9_tipe2;
$z_tipe2 = $total_RiZi_tipe2/$tipe2_total_R;

$eo_bobot = $z_tipe2;

//bobot Complex 

if($eo_bobot<=5){
	$bobotComplex2 = 0;

}
else if($eo_bobot>5 && $eo_bobot<7){
	$bobotComplex2=($eo_bobot - 5) /(7 - 5);

}else{
	$bobotComplex2 = 1;

}

//bobot Avg
if($eo_bobot <=4 ){
	$bobotAvg2 = 0;

}else if($eo_bobot>4 && $eo_bobot<5){
	$bobotAvg2 = ($eo_bobot-4)/(5-4);


}
else if ($eo_bobot==5){
	$bobotAvg2=1;

}
else if ($eo_bobot>5 && $eo_bobot<7){
	$bobotAvg2=(7 - $eo_bobot) /(7 - 5);

}else{
	$bobotAvg2 =0;

}

//bobot Simple
if($eo_bobot<=4){
	$bobotSimple2 = 1;

}
else if($eo_bobot>4 && $eo_bobot<5){
	$bobotSimple2=(4-$eo_bobot) /(4 - 3);

}else{
	$bobotSimple2 = 0;

}

}

$total_tipe2 = $tipe2 * $eo_bobot;


//Logika Fuzzy untuk Tipe Fungsi EQ

if ($det3 < 0 || $ftr3< 0 )  {
	$z_tipe3="";
}else {
//DET Large
	if($det3<=20){
		$largedet3 = 0;
	}else if($det3>20 && $det3<25){
		$largedet3=($det3 - 20) /(25 - 20);
	}else{
		$largedet3 = 1;
	}
//DET Medium
	if($det3<=5 || $det3>=25 ){
		$mediumdet3 = 0;
	}else if($det3>5 && $det3<10){
		$mediumdet3 = ($det3-5)/(10-5);
	}
	else if ($det3>20 && $det3<25){
		$mediumdet3=(25 - $det3) /(25 - 20);
	}else{
		$mediumdet3 =1;
	}

//DET Small
	if($det3<=5){
		$smalldet3 = 1;

	}else if($det3>5 && $det3<10){
		$smalldet3 = (10-$det3)/(10-5);

	}else{
		$smalldet3 = 0;
	}



//FTR Large
	if($ftr3<=3){
		$largeftr3 = 0;
	}else if($ftr3>3 && $ftr3<4){
		$largeftr3=($ftr3 - 4) /(4 - 3);
	}else{
		$largeftr3 = 1;
	}
//FTR Medium
	if($ftr3<=1 || $ftr3>=4 ){
		$mediumftr3 = 0;
	}else if($ftr3>1 && $ftr3<2){
		$mediumftr3 = ($ftr3-1)/(2-1);
	}
	else if ($ftr3>3 && $ftr3<4){
		$mediumftr3=(4 - $ftr3) /(4 - 3);
	}else{
		$mediumftr3 =1;
	}

//FTR Small
	if($ftr3<=1){
		$smallftr3 = 1;

	}else if($ftr3>1 && $ftr3<2){
		$smallftr3 = (2-$ftr3)/(2-1);

	}else{
		$smallftr3 = 0;
	}

	$z1_tipe3= 0;
	$z2_tipe3= 0;
	$z3_tipe3= 0;
	$z4_tipe3= 0;
	$z5_tipe3= 0;
	$z6_tipe3= 0;
	$z7_tipe3= 0;
	$z8_tipe3= 0;
	$z9_tipe3= 0;

$R1_tipe3=min($smalldet3,$smallftr3); //maka output simple
$z1_tipe3 = 4 - $R1_tipe3;

$R2_tipe3=min($smalldet3,$mediumftr3); //maka output simple
$z2_tipe3 = 4 - $R2_tipe3;

$R3_tipe3=min($smalldet3,$largeftr3); //maka output average
$z31_tipe3 = 3 + $R3_tipe3;
$z32_tipe3 = 6- (2 * $R3_tipe3);
$z3_tipe3 = min($z31_tipe3,$z32_tipe3);

$R4_tipe3=min($mediumdet3,$smallftr3); //maka output simple
$z4_tipe3 = 4 - $R4_tipe3;

$R5_tipe3=min($mediumdet3,$mediumftr3); //maka output average
$z51_tipe3 = 3 + $R5_tipe3;
$z52_tipe3 = 6- (2 * $R5_tipe3);
$z5_tipe3 = min($z51_tipe3,$z52_tipe3);

$R6_tipe3=min($mediumdet3,$largeftr3); //maka output complex
$z6_tipe3 = 4 + (2 * $R6_tipe3);

$R7_tipe3=min($largedet3,$smallftr3); //maka output average
$z71_tipe3 = 3 + $R7_tipe3;
$z72_tipe3 = 6- (2 * $R7_tipe3);
$z7_tipe3 = min($z71_tipe3,$z72_tipe3);

$R8_tipe3=min($largedet3,$mediumftr3); //maka output complex
$z8_tipe3 = 4 + (2 * $R8_tipe3);

$R9_tipe3=min($largedet3,$largeftr3); // maka output complex
$z9_tipe3 = 4 + (2 * $R9_tipe3);

$total_RiZi_tipe3 = ($R1_tipe3*$z1_tipe3)+($R2_tipe3*$z2_tipe3)+($R3_tipe3*$z3_tipe3)+($R4_tipe3*$z4_tipe3)+($R5_tipe3*$z5_tipe3)+($R6_tipe3*$z6_tipe3) + ($R7_tipe3*$z7_tipe3)+($R8_tipe3*$z8_tipe3)+($R9_tipe3*$z9_tipe3);
$tipe3_total_R = $R1_tipe3+$R2_tipe3+$R3_tipe3+$R4_tipe3+$R5_tipe3+$R6_tipe3+$R7_tipe3+$R8_tipe3+$R9_tipe3;
$z_tipe3 = $total_RiZi_tipe3/$tipe3_total_R;

$eq_bobot = $z_tipe3;

//bobot Complex 

//bobot Complex 

if($eq_bobot<=4){
	$bobotComplex3 = 0;

}
else if($eq_bobot>4 && $eq_bobot<=6){
	$bobotComplex3=($eq_bobot - 4) /(6 - 4);

}else{
	$bobotComplex3 = 1;

}

//bobot Avg
if($eq_bobot <=3 ){
	$bobotAvg3 = 0;

}else if($eq_bobot>3 && $eq_bobot<=4){
	$bobotAvg3 = ($eq_bobot-3)/(4-3);


}
else if ($eq_bobot==5){
	$bobotAvg3=1;

}
else if ($eq_bobot>4 && $eq_bobot<6){
	$bobotAvg3=(6 - $eq_bobot) /(6 - 4);

}else{
	$bobotAvg3 =0;

}

//bobot Simple
if($eq_bobot<=3){
	$bobotSimple3 = 1;

}
else if($eq_bobot>3 && $eq_bobot<4){
	$bobotSimple3=(4-$eq_bobot) /(4 - 3);

}else{
	$bobotSimple3 = 0;

}
//penentuan bobot

}

$total_tipe3 = $tipe3 * $eq_bobot;

// Logika Fuzzy untuk Tipe Fungsi ILF

if ($det4 < 0 || $ret4< 0 )  {
	$z_tipe4="";
}else {
//DET Large
	if($det4<=45){
		$largedet4 = 0;
	}else if($det4>45 && $det4<55){
		$largedet4=($det4 - 45) /(55 - 45);
	}else{
		$largedet4 = 1;
	}
//DET Medium
	if($det4<=15 || $det4>=55 ){
		$mediumdet4 = 0;
	}else if($det4>15 && $det4<25){
		$mediumdet4 = ($det4-15)/(25-15);
	}
	else if ($det4>45 && $det4<55){
		$mediumdet4=(55 - $det4) /(55 - 45);
	}else{
		$mediumdet4 =1;
	}

//DET Small
	if($det4<=15){
		$smalldet4 = 1;

	}else if($det4>15 && $det4<25){
		$smalldet4 = (25-$det4)/(25-15);

	}else{
		$smalldet4 = 0;
	}



//FTR Large
	if($ret4<=5){
		$largeret4 = 0;
	}else if($ret4>5 && $ret4<6){
		$largeret4=($ret4 - 5) /(6 - 5);
	}else{
		$largeret4 = 1;
	}
//FTR Medium
	if($ret4<=1 || $ret4>=6 ){
		$mediumret4 = 0;
	}else if($ret4>1 && $ret4<2){
		$mediumret4 = ($ret4-1)/(2-1);
	}
	else if ($ret4>5 && $ret4<6){
		$mediumret4=(6 - $ret4) /(6 - 5);
	}else{
		$mediumret4 =1;
	}

//FTR Small
	if($ret4<=1){
		$smallret4 = 1;

	}else if($ret4>1 && $ret4<2){
		$smallret4 = (2-$ret4)/(2-1);

	}else{
		$smallret4 = 0;
	}

	$z1_tipe4= 0;
	$z2_tipe4= 0;
	$z3_tipe4= 0;
	$z4_tipe4= 0;
	$z5_tipe4= 0;
	$z6_tipe4= 0;
	$z7_tipe4= 0;
	$z8_tipe4= 0;
	$z9_tipe4= 0;

$R1_tipe4=min($smalldet4,$smallret4); //maka output simple
$z1_tipe4 = 10 - (3 * $R1_tipe4);

$R2_tipe4=min($smalldet4,$mediumret4); //maka output simple
$z2_tipe4 = 10 - (3 * $R2_tipe4);

$R3_tipe4=min($smalldet4,$largeret4); //maka output average
$z31_tipe4 = 7 + (3 * $R3_tipe4);
$z32_tipe4 = 15 - (5 * $R3_tipe4);
$z3_tipe4 = min($z31_tipe4,$z32_tipe4);

$R4_tipe4=min($mediumdet4,$smallret4); //maka output simple
$z4_tipe4 = 10 - (3 * $R4_tipe4);

$R5_tipe4=min($mediumdet4,$mediumret4); //maka output average
$z51_tipe4 = 7 + (3 * $R5_tipe4);
$z52_tipe4 = 15 - (5 * $R5_tipe4);
$z5_tipe4 = min($z51_tipe4,$z52_tipe4);

$R6_tipe4=min($mediumdet4,$largeret4); //maka output complex
$z6_tipe4 = 10 + (5 * $R6_tipe4);

$R7_tipe4=min($largedet4,$smallret4); //maka output average
$z71_tipe4 = 7 + (3 * $R7_tipe4);
$z72_tipe4 = 15 - (5 * $R7_tipe4);
$z7_tipe4 = min($z71_tipe4,$z72_tipe4);

$R8_tipe4=min($largedet4,$mediumret4); //maka output complex
$z8_tipe4 = 10 + (5 * $R8_tipe4);

$R9_tipe4=min($largedet4,$largeret4); // maka output complex
$z9_tipe4 = 10 + (5 * $R9_tipe4);

$total_RiZi_tipe4 = ($R1_tipe4*$z1_tipe4)+($R2_tipe4*$z2_tipe4)+($R3_tipe4*$z3_tipe4)+($R4_tipe4*$z4_tipe4)+($R5_tipe4*$z5_tipe4)+($R6_tipe4*$z6_tipe4) + ($R7_tipe4*$z7_tipe4)+($R8_tipe4*$z8_tipe4)+($R9_tipe4*$z9_tipe4);
$tipe4_total_R = $R1_tipe4+$R2_tipe4+$R3_tipe4+$R4_tipe4+$R5_tipe4+$R6_tipe4+$R7_tipe4+$R8_tipe4+$R9_tipe4;
$z_tipe4 = $total_RiZi_tipe4/$tipe4_total_R;

$ilf_bobot = $z_tipe4;

//bobot Complex 

if($ilf_bobot<=10){
	$bobotComplex4 = 0;

}
else if($ilf_bobot>10 && $ilf_bobot<15){
	$bobotComplex4=($ilf_bobot - 10) /(15 - 10);

}else{
	$bobotComplex4 = 1;

}

//bobot Avg
if($ilf_bobot <=7 ){
	$bobotAvg4 = 0;

}else if($ilf_bobot>7 && $ilf_bobot<10){
	$bobotAvg4 = ($ilf_bobot-7)/(10-7);


}
else if ($ilf_bobot==10){
	$bobotAvg4=1;

}
else if ($ilf_bobot>10 && $ilf_bobot<15){
	$bobotAvg4=(15 - $ilf_bobot) /(15 - 10);

}else{
	$bobotAvg4 =0;

}

//bobot Simple
if($ilf_bobot<=7){
	$bobotSimple4 = 1;

}
else if($ilf_bobot>7 && $ilf_bobot<10){
	$bobotSimple4=(10-$ilf_bobot) /(10 - 7);

}else{
	$bobotSimple4 = 0;

}
if($bobotSimple4){
	$hasilbobot4 = "Simple";
}
elseif ($bobotAvg4){
	$hasilbobot4 = "Average";
}
elseif ($bobotComplex4){
	$hasilbobot4 = "Complex";
}
}

$total_tipe4 = $tipe4 * $ilf_bobot;


// Logika Fuzzy untuk Tipe Fungsi EIF

if ($det5 < 0 || $ret5< 0 )  {
	$z_tipe5="";
}else {
//DET Large
	if($det5<=45){
		$largedet5 = 0;
	}else if($det5>45 && $det5<55){
		$largedet5=($det5 - 45) /(55 - 45);
	}else{
		$largedet5 = 1;
	}
//DET Medium
	if($det5<=15 || $det5>=55 ){
		$mediumdet5 = 0;
	}else if($det5>15 && $det5<25){
		$mediumdet5 = ($det5-15)/(25-15);
	}
	else if ($det5>45 && $det5<55){
		$mediumdet5=(55 - $det5) /(55 - 45);
	}else{
		$mediumdet5 =1;
	}

//DET Small
	if($det5<=15){
		$smalldet5 = 1;

	}else if($det5>15 && $det5<25){
		$smalldet5 = (25-$det5)/(25-15);

	}else{
		$smalldet5 = 0;
	}



//FTR Large
	if($ret5<=5){
		$largeret5 = 0;
	}else if($ret5>5 && $ret5<6){
		$largeret5=($ret5 - 5) /(6 - 5);
	}else{
		$largeret5 = 1;
	}
//FTR Medium
	if($ret5<=1 || $ret5>=6 ){
		$mediumret5 = 0;
	}else if($ret5>1 && $ret5<2){
		$mediumret5 = ($ret5-1)/(2-1);
	}
	else if ($ret5>5 && $ret5<6){
		$mediumret5=(6 - $ret5) /(6 - 5);
	}else{
		$mediumret5 =1;
	}

//FTR Small
	if($ret5<=1){
		$smallret5 = 1;

	}else if($ret5>1 && $ret5<2){
		$smallret5 = (2-$ret5)/(2-1);

	}else{
		$smallret5 = 0;
	}

	$z1_tipe5= 0;
	$z2_tipe5= 0;
	$z3_tipe5= 0;
	$z4_tipe5= 0;
	$z5_tipe5= 0;
	$z6_tipe5= 0;
	$z7_tipe5= 0;
	$z8_tipe5= 0;
	$z9_tipe5= 0;

$R1_tipe5=min($smalldet5,$smallret5); //maka output simple
$z1_tipe5 = 7 - (2 * $R1_tipe5);

$R2_tipe5=min($smalldet5,$mediumret5); //maka output simple
$z2_tipe5 = 7 - (2 * $R2_tipe5);

$R3_tipe5=min($smalldet5,$largeret5); //maka output average
$z31_tipe5 = 5 + (2 * $R3_tipe5);
$z32_tipe5 = 10 - (3 * $R3_tipe5);
$z3_tipe5 = min($z31_tipe5,$z32_tipe5);

$R4_tipe5=min($mediumdet5,$smallret5); //maka output simple
$z4_tipe5 = 7 - (2 * $R4_tipe5);

$R5_tipe5=min($mediumdet5,$mediumret5); //maka output average
$z51_tipe5 = 5 + (2 * $R5_tipe5);
$z52_tipe5 = 10 - (3 * $R5_tipe5);
$z5_tipe5 = min($z51_tipe5,$z52_tipe5);

$R6_tipe5=min($mediumdet5,$largeret5); //maka output complex
$z6_tipe5 = 7 + (3 * $R6_tipe5);

$R7_tipe5=min($largedet5,$smallret5); //maka output average
$z71_tipe5 = 5 + (2 * $R7_tipe5);
$z72_tipe5 = 10 - (3 * $R7_tipe5);
$z7_tipe5 = min($z71_tipe5,$z72_tipe5);

$R8_tipe5=min($largedet5,$mediumret5); //maka output complex
$z8_tipe5 = 7 + (3 * $R8_tipe5);

$R9_tipe5=min($largedet5,$largeret5); // maka output complex
$z9_tipe5 = 7 + (3 * $R9_tipe5);

$total_RiZi_tipe5 = ($R1_tipe5*$z1_tipe5)+($R2_tipe5*$z2_tipe5)+($R3_tipe5*$z3_tipe5)+($R4_tipe5*$z4_tipe5)+($R5_tipe5*$z5_tipe5)+($R6_tipe5*$z6_tipe5) + ($R7_tipe5*$z7_tipe5)+($R8_tipe5*$z8_tipe5)+($R9_tipe5*$z9_tipe5);
$tipe5_total_R = $R1_tipe5+$R2_tipe5+$R3_tipe5+$R4_tipe5+$R5_tipe5+$R6_tipe5+$R7_tipe5+$R8_tipe5+$R9_tipe5;
$z_tipe5 = $total_RiZi_tipe5/$tipe5_total_R;

$eif_bobot = $z_tipe5;



//bobot Complex 

if($eif_bobot<=7){
	$bobotComplex5 = 0;

}
else if($eif_bobot>7 && $eif_bobot<10){
	$bobotComplex5=($eif_bobot - 7) /(10 - 7);

}else{
	$bobotComplex5 = 1;

}

//bobot Avg
if($eif_bobot <=5 ){
	$bobotAvg5 = 0;

}else if($eif_bobot>5 && $eif_bobot<7){
	$bobotAvg5 = ($eif_bobot-5)/(7-5);


}
else if ($eif_bobot==7){
	$bobotAvg5=1;

}
else if ($eif_bobot>7 && $eif_bobot<10){
	$bobotAvg5=(10 - $eif_bobot) /(10 - 7);

}else{
	$bobotAvg5 =0;

}

//bobot Simple
if($eif_bobot<=5){
	$bobotSimple5 = 1;

}
else if($eif_bobot>5 && $eif_bobot<7){
	$bobotSimple5=(7-$eif_bobot) /(7 - 5);

}else{
	$bobotSimple5 = 0;

}
if($bobotSimple5){
	$hasilbobot5 = "Simple";
}
elseif ($bobotAvg5){
	$hasilbobot5 = "Average";
}
elseif ($bobotComplex5){
	$hasilbobot5 = "Complex";
}
}

$total_tipe5 = $tipe5 * $eif_bobot;

$total_cfp = $total_tipe1 + $total_tipe2 + $total_tipe3 + $total_tipe4 + $total_tipe5;
?>





<input type="hidden" name="nama_app" value= "<?php echo $nama_app?>">
<input type="hidden" name="effort" value= "<?php echo $effort?>">
<input type="hidden" name="tanggal" value= "<?php echo $tanggal?>">
<tbody>

	<?php
	if($z!=""){
		?>
		<tr>
			<td>External Input (EI)</td>
			<td>
				<input  type="text" id="tipe1" name="tipe1"  class="form-control" readonly value="<?php echo $tipe1 ?> ">

			</td>
			<td align="center" valign="middle">
				<center><?php displayBobot1($bobotSimple, $bobotAvg, $bobotComplex);?></center>
			</td>
			<td>
				<input type="text" id="ei_bobot" name="ei_bobot"  class="form-control" readonly value="<?php echo $ei_bobot ?> ">

			</td>
			<td>
				<input type="text" id="total_tipe1" name="total_tipe1"  class="form-control" readonly value="<?php echo $total_tipe1 ?> ">

			</td>

		</tr>
		<tr>
			<td>Ekternal Output (EO)</td>
			<td>
				<input type="text" id="tipe2" name="tipe2"  class="form-control" readonly value="<?php echo $tipe2 ?> ">

			</td>
			<td align="center" valign="middle">
				<center><?php displayBobot2($bobotSimple2, $bobotAvg2, $bobotComplex2);?></center>
			</td>
			<td>
				<input type="text" id="eo_bobot" name="eo_bobot"  class="form-control" readonly value="<?php echo $eo_bobot ?> ">

			</td>
			<td>
				<input type="text" id="total_tipe2" name="total_tipe2"  class="form-control" readonly value="<?php echo $total_tipe2 ?> " >

			</td>

		</tr>
		<tr>
			<td>Eksternal Inquiry (EQ)</td>
			<td><input id="tipe3" required type="text" name="tipe3" readonly value="<?php echo $tipe3 ?>" 
				class="form-control">
			</td>
			<td align="center" valign="middle">
				<center><?php displayBobot3($bobotSimple3, $bobotAvg3, $bobotComplex3);?></center>
			</td>
			<td>
				<input type="text" id="eq_bobot" name="eq_bobot"  class="form-control" readonly value="<?php echo $eq_bobot ?> ">

			</td>

			<td>
				<input type="text" id="total_tipe3" name="total_tipe3"  class="form-control" readonly value="<?php echo $total_tipe3 ?> " >

			</td>
		</tr>



		<tr>
			<td>Internal Logical File (ILF)</td>
			<td>
				<input type="text" id="tipe4" name="tipe4"  class="form-control" readonly value="<?php echo $tipe4 ?> ">

			</td>
			<td align="center" valign="middle">
				<center><?php displayBobot4($bobotSimple4, $bobotAvg4, $bobotComplex4);?></center>
			</td>
			<td>
				<input type="text" id="ilf_bobot" name="ilf_bobot"  class="form-control" readonly value="<?php echo $ilf_bobot ?> ">

			</td>

			<td>
				<input type="text" id="total_tipe4" name="total_tipe4"  class="form-control" readonly value="<?php echo $total_tipe4 ?> " >

			</td>
		</tr>
		<tr>
			<td>Eksternal Interface Files (EIF)</td>
			<td>
				<input type="text" id="tipe5" name="tipe5"  class="form-control" readonly value="<?php echo $tipe5 ?> ">

			</td>
			<td align="center" valign="middle">
				<center><?php displayBobot5($bobotSimple5, $bobotAvg5, $bobotComplex5);?></center>
			</td>
			<td>
				<input type="text" id="eif_bobot" name="eif_bobot"  class="form-control" readonly value="<?php echo $eif_bobot ?> ">

			</td>
			<td>
				<input type="text" id="total_tipe5" name="total_tipe5"  class="form-control" readonly value="<?php echo $total_tipe5 ?> " >

			</td>
		</tr>

		<tr>
			<td><h4><b>Hasil CFP</b></h4></td>
			<td></td>
			<td></td>
			<td></td>
			<b><td>
				<input type="text" id="total_cfp" name="total_cfp"  class="form-control" readonly value="<?php echo $total_cfp ?>" >
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
		<?php
	}
	?>

	<?php
	function displayBobot1($bobotSimple, $bobotAvg, $bobotComplex){

		$bobotSimple = round($bobotSimple,2);
		$bobotAvg = round($bobotAvg,2);
		$bobotComplex = round($bobotComplex,2);

		if ($bobotSimple!=0){
			echo "<span class=' col-md-4 rendah'><small>Simple</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Simple</small></span>";
		}
		echo " ";
		if ($bobotAvg!=0){
			echo "<span class=' col-md-4 sedang'><small>Average</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Average</small></span>";
		}
		echo " ";
		if ($bobotComplex!=0){
			echo "<span class='col-md-4  tinggi'><small>Complex</small></span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Complex</small></span>";
		}


	}
	?>

	<?php
	function displayBobot2($bobotSimple2, $bobotAvg2, $bobotComplex2){

		$bobotSimple2 = round($bobotSimple2,2);
		$bobotAvg2 = round($bobotAvg2,2);
		$bobotComplex2 = round($bobotComplex2,2);

		if ($bobotSimple2!=0){
			echo "<span class=' col-md-4 rendah'><small>Simple</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Simple</small></span>";
		}
		echo " ";
		if ($bobotAvg2!=0){
			echo "<span class=' col-md-4 sedang'><small>Average</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Average</small></span>";
		}
		echo " ";
		if ($bobotComplex2!=0){
			echo "<span class='col-md-4  tinggi'><small>Complex</small></span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Complex</small></span>";
		}


	}
	?>

	<?php
	function displayBobot3($bobotSimple3, $bobotAvg3, $bobotComplex3){

		$bobotSimple3 = round($bobotSimple3,2);
		$bobotAvg3 = round($bobotAvg3,2);
		$bobotComplex3 = round($bobotComplex3,2);

		if ($bobotSimple3!=0){
			echo "<span class=' col-md-4 rendah'><small>Simple</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Simple</small></span>";
		}
		echo " ";
		if ($bobotAvg3!=0){
			echo "<span class=' col-md-4 sedang'><small>Average</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Average</small></span>";
		}
		echo " ";
		if ($bobotComplex3!=0){
			echo "<span class='col-md-4  tinggi'><small>Complex</small></span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Complex</small></span>";
		}


	}
	?>

	<?php
	function displayBobot4($bobotSimple4, $bobotAvg4, $bobotComplex4){

		$bobotSimple4 = round($bobotSimple4,2);
		$bobotAvg4 = round($bobotAvg4,2);
		$bobotComplex4 = round($bobotComplex4,2);

		if ($bobotSimple4!=0){
			echo "<span class=' col-md-4 rendah'><small>Simple</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Simple</small></span>";
		}
		echo " ";
		if ($bobotAvg4!=0){
			echo "<span class=' col-md-4 sedang'><small>Average</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Average</small></span>";
		}
		echo " ";
		if ($bobotComplex4!=0){
			echo "<span class='col-md-4  tinggi'><small>Complex</small></span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Complex</small></span>";
		}


	}
	?>

	<?php
	function displayBobot5($bobotSimple5, $bobotAvg5, $bobotComplex5){

		$bobotSimple5 = round($bobotSimple5,2);
		$bobotAvg5 = round($bobotAvg5,2);
		$bobotComplex5 = round($bobotComplex5,2);

		if ($bobotSimple5!=0){
			echo "<span class=' col-md-4 rendah'><small>Simple</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Simple</small></span>";
		}
		echo " ";
		if ($bobotAvg5!=0){
			echo "<span class=' col-md-4 sedang'><small>Average</small> </span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Average</small></span>";
		}
		echo " ";
		if ($bobotComplex5!=0){
			echo "<span class='col-md-4  tinggi'><small>Complex</small></span>";
		}else{
			echo "<span class='col-md-4  nol'><small>Complex</small></span>";
		}


	}
	?>
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

</body>

</html>
<!-- end document-->

