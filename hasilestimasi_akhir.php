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
																	</div></h3>

																	<form action="tambahapp_koneksi.php" method="post">
																		<table class="table table-lg">
																			<thead>
																				<tr style="background-color:#20B2AA; color:black;">
																					<th width="223px">Aktivitas</th>
																					<th width="170px">Engineering</th>
																					<th width="180">Jumlah Engineering</th>
																					<th width="120px">Effort (%)</th>
																					<th width="200px">Hours Of Effort</th>
																					<th width="300px">Total (Rp)</th>
																				</tr>
																			</thead>

																			<?php
																			$nama_app = $_POST['nama_app'];
																			$effort = $_POST['effort'];
																			$tanggal = $_POST['tanggal'];


																			$total_cfp = $_POST['total_cfp'];
																			$total_rcaf = $_POST['total_rcaf'];
																			$total_tcf = $_POST['total_tcf'];
																			$total_fp = $_POST['total_fp'];
																			$total_effort = $_POST['total_effort'];
																			$hour_effort = $_POST['hour_effort'];

																			$hof1 = $_POST['hof1'] ;
																			$hof2 = $_POST['hof2'] ;
																			$hof3 = $_POST['hof3'] ;
																			$hof4 = $_POST['hof4'] ;
																			$hof5 = $_POST['hof5'] ;
																			$hof6 = $_POST['hof6'] ;
																			$hof7 = $_POST['hof7'] ;
																			$hof8 = $_POST['hof8'] ;
																			$hof9 = $_POST['hof9'] ;
																			$hof10 = $_POST['hof10'];
																			$hof11 = $_POST['hof11'];

																			$total_hof = $_POST['total_hof'];




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

                                                    $jml1=$_POST['jml1'] ;
                                                    $jml2=$_POST['jml2'];
                                                    $jml3=$_POST['jml3'];
                                                    $jml4=$_POST['jml4'];
                                                    $jml5=$_POST['jml5'];
                                                    $jml6=$_POST['jml6'];
                                                    $jml7=$_POST['jml7'];
                                                    $jml8=$_POST['jml8'];
                                                    $jml9=$_POST['jml9'];
                                                    $jml10=$_POST['jml10'];
                                                    $jml11=$_POST['jml11'];

                                                    $total_jml = $jml1 + $jml2 + $jml3 + $jml4 + $jml5 + $jml6 + $jml7 + $jml8 + $jml9 + $jml10 + $jml11;

                                                    $total1 = $_POST['gaji1'] * $jml1 *  $hof1 ;
                                                    $total2 = $_POST['gaji2'] * $jml2  * $hof2 ;
                                                    $total3 = $_POST['gaji3'] * $jml3  * $hof3 ;
                                                    $total4 = $_POST['gaji4'] * $jml4  * $hof4 ;
                                                    $total5 = $_POST['gaji5'] * $jml5 * $hof5 ;
                                                    $total6 = $_POST['gaji6'] * $jml6 * $hof6 ;
                                                    $total7 = $_POST['gaji7'] * $jml7 * $hof7 ;
                                                    $total8 = $_POST['gaji8'] * $jml8 * $hof8 ;
                                                    $total9 = $_POST['gaji9'] * $jml9 * $hof9 ;
                                                    $total10 = $_POST['gaji10'] * $jml10 * $hof10 ;
                                                    $total11 = $_POST['gaji11'] * $jml11* $hof11 ;

                                                    $total_estimasi = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11;




                                                    
                                                    ?>

                                                    <input type="hidden" name="total_cfp" value= "<?php echo $total_cfp?>">
                                                    <input type="hidden" name="total_rcaf" value= "<?php echo $total_rcaf?> ">
                                                    <input type="hidden" name="total_tcf" value= "<?php echo $total_tcf?>">
                                                    <input type="hidden" name="total_fp" value= "<?php echo $total_fp ?>">
                                                    <input type="hidden" name="total_effort" value= "<?php echo $total_effort?>">
                                                    <input type="hidden" name="hour_effort" value= "<?php echo $hour_effort?>">
                                                    


                                                    <input type="hidden" name="hof1" value= "<?php echo $hof1?>">
                                                    <input type="hidden" name="hof2" value= "<?php echo $hof2?> ">
                                                    <input type="hidden" name="hof3" value= "<?php echo $hof3?>">
                                                    <input type="hidden" name="hof4" value= "<?php echo $hof4 ?>">
                                                    <input type="hidden" name="hof5" value= "<?php echo $hof5?>">
                                                    

                                                    <input type="hidden" name="hof6" value= "<?php echo $hof6?>">
                                                    <input type="hidden" name="hof7" value= "<?php echo $hof7?> ">
                                                    <input type="hidden" name="hof8" value= "<?php echo $hof8?>">
                                                    <input type="hidden" name="hof9" value= "<?php echo $hof9 ?>">
                                                    <input type="hidden" name="hof10" value= "<?php echo $hof10?>">
                                                    <input type="hidden" name="hof11" value= "<?php echo $hof11?>">
                                                    
                                                    <input type="hidden" name="total_hof" value= "<?php echo $total_hof?>">

                                                    <tbody>

                                                    	<input type="hidden" id="nama_app" name="nama_app" class="form-control" step="any" value="<?php echo $nama_app?>">

                                                    	
                                                    	<input type="hidden" id="effort" name="tanggal" class="form-control" step="any" value="<?php echo date('d F Y');?>">


                                                    	<input type="hidden" id="effort" name="effort" class="form-control" step="any" value="<?php echo $effort ?> ">
                                                    	<input type="hidden" id="total_fp" name="total_fp" class="form-control" step="any" value="<?php echo $total_fp ?> ">
                                                    	



                                                    	<tr>
                                                    		<td class="text-bold-500" colspan="6">Tahap Development</td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" name="act1" readonly>Requirement</textarea></td>
                                                    		<td><textarea class="form-control" name="eng1" readonly>System Analyst</textarea></td>
                                                    		<td><input type="text" class="form-control" name="jml1" readonly value="<?php echo $jml1 ?>"></td>
                                                    		<td><input type="text" class="form-control" name="eff1" readonly value="7.5%"></td>
                                                    		<td><input type="text" class="form-control" name="hof1" readonly value="<?php echo $hof1 ?>"></td>
                                                    		<td><input type="text" class="form-control" name="total1" readonly value="<?php echo "Rp " . number_format("$total1", 2, ".", ","); ?>"></td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" readonly name="act2">Spesification & Design</textarea></td>
                                                    		<td><textarea class="form-control" readonly name="eng2">UI Disigner</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml2" value="<?php echo $jml2 ?>"></td>
                                                    		<td><input type="text" class="form-control" readonly name="eff2" value="17.5%"></td>
                                                    		<td><input type="text" class="form-control" readonly name="hof2" value="<?php echo $hof1 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total2" value="<?php echo "Rp " . number_format("$total2", 2, ".", ","); ?>"></td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" name="act3" readonly>Implementation</textarea></td>
                                                    		<td><textarea class="form-control" name="eng3" readonly>Programmer</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml3" value="<?php echo $jml3 ?>"></td>
                                                    		<td><input type="text" class="form-control"  readonly name="eff3" value="10%"></td>
                                                    		<td><input type="text" class="form-control" readonly name="hof3" value="<?php echo $hof3 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total3" value="<?php echo "Rp " . number_format("$total3", 2, ".", ","); ?>"></td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" readonly name="act4">Acceptance & Deployment</textarea></td>
                                                    		<td><textarea class="form-control" readonly name="eng4">Integration Testing</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml4" value="<?php echo $jml4 ?>"></td>
                                                    		<td><input type="text" class="form-control" readonly name="eff4" value="7%"></td>
                                                    		<td><input type="text" class="form-control" readonly name="hof4" value="<?php echo $hof4 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total4" value="<?php echo "Rp " . number_format("$total4", 2, ".", ","); ?>"></td>
                                                    	</tr>

                                                    	<tr>
                                                    		<td class="text-bold-500" colspan="6">Quality & Testing</td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" readonly name="act5">Integration Testing</textarea></td>
                                                    		<td><textarea class="form-control" readonly name="eng5">Test Analyst</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml5" value="<?php echo $jml5 ?>"></td>
                                                    		<td><input type="text" class="form-control" readonly name="eff5" value="12.34%"></td>
                                                    		<td><input type="text" class="form-control" readonly name="hof5" value="<?php echo $hof5 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total5" value="<?php echo "Rp " . number_format("$total5", 2, ".", ","); ?>"></td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" readonly name="act6">Quality Asurance</textarea></td>
                                                    		<td><textarea class="form-control" readonly name="eng6">QA Testing</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml6" value="<?php echo $jml6 ?>"></td>
                                                    		<td><input type="text" class="form-control" readonly name="eff6" value="24.66%"></td>
                                                    		<td><input type="text" class="form-control" readonly name="hof6" value="<?php echo $hof6 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total6" value="<?php echo "Rp " . number_format("$total6", 2, ".", ","); ?>"></td>
                                                    	</tr>

                                                    	<tr>
                                                    		<td class="text-bold-500" colspan="6">OnGoing Activity</td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" readonly name="act7">Project Management</textarea></td>
                                                    		<td><textarea class="form-control" readonly name="eng7">Project Manager</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml7" value="<?php echo $jml7 ?>"></td>
                                                    		<td><input type="text" class="form-control" readonly name="eff7" value="7%"></td>
                                                    		<td><input type="text" class="form-control"  readonly name="hof7" value="<?php echo $hof7 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total7" value="<?php echo "Rp " . number_format("$total7", 2, ".", ","); ?>"></td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" readonly name="act8">Configuration Management</textarea></td>
                                                    		<td><textarea class="form-control" readonly name="eng8">Software Engineer</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml8" value="<?php echo $jml8 ?>"></td>
                                                    		<td><input type="text" class="form-control" readonly name="eff8" value="3%"></td>
                                                    		<td><input type="text" class="form-control" readonly name="hof8" value="<?php echo $hof8 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total8" value="<?php echo "Rp " . number_format("$total8", 2, ".", ","); ?>"></td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" readonly name="act9">Documentation</textarea></td>
                                                    		<td><textarea class="form-control" readonly name="eng9">Software Engineer</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml9" value="<?php echo $jml9 ?>"></td>
                                                    		<td><input type="text" class="form-control" readonly name="eff9" value="3%"></td>

                                                    		<td><input type="text" class="form-control" readonly name="hof9" value="<?php echo $hof9 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total9" value="<?php echo "Rp " . number_format("$total9", 2, ".", ","); ?>"></td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" readonly name="act10">Training & Support</textarea></td> 
                                                    		<td><textarea class="form-control" readonly name="eng10">Software Engineer</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml10" value="<?php echo $jml10 ?>"></td>
                                                    		<td><input type="text" class="form-control" readonly name="eff10" value="3%"></td>
                                                    		<td><input type="text" class="form-control" readonly name="hof10" value="<?php echo $hof10 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total10" value="<?php echo "Rp " . number_format("$total10", 2, ".", ","); ?>"></td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><textarea class="form-control" readonly name="act11">Acceptance & Deployment</textarea></td>
                                                    		<td><textarea class="form-control" readonly name="eng11">Software Engineer</textarea></td>
                                                    		<td><input type="text" class="form-control" readonly name="jml11" value="<?php echo $jml11 ?>"></td>
                                                    		<td><input type="text" class="form-control" readonly name="eff11" value="5%"></td>
                                                    		<td><input type="text" class="form-control" readonly name="hof11" value="<?php echo $hof11 ?>"></td>

                                                    		<td><input type="text" class="form-control" readonly name="total11" value="<?php echo "Rp " . number_format("$total11", 2, ".", ","); ?>"></td>
                                                    	</tr>
                                                    	<tr>
                                                    		<td><b>Total Estimasi Biaya</td></b>
                                                    		<td></td>
                                                    		<td><input style="background-color:#00CED1;" readonly type="text" class="form-control" name="jml11" value="<?php echo $total_jml ?> Engineering"></td>
                                                    		<td><b></b></td>
                                                    		<td><input style="background-color:#00CED1;" readonly type="text" class="form-control" id="total_hof" name="total_hof" value="<?php echo $total_hof ?> "></td>
                                                    		<td><input style="background-color:#00CED1;" readonly type="text" class="form-control" id="total_estimasi" readonly name="total_estimasi" value="<?php echo $total_estimasi ?>"></td>
                                                    	</tr>

                                                    	<tr>
                                                    		<td></td>
                                                    		<td></td>
                                                    		<td></td>



                                                    		<td>

                                                    			<button type="submit"
                                                    			class="btn btn-primary btn-sm" name="simpan">Simpan</button>

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
