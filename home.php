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
 	<title>Deskripsi Aplikasi</title>

 	<!-- Fontfaces CSS-->
 	<link href="css/font-face.css" rel="stylesheet" media="all">
 	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
 	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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

     <!-- datepicker bootstrap 
  <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">
  

<script>
  $( function() {
    $( "#date" ).datepicker({
      autoclose:true,
      todayHighlight:true,
      format:'yyyy-mm-dd',
      language: 'id'
    });
  } );
</script>-->
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


									<!-- HEADER DESKTOP-->

									<!-- MAIN CONTENT-->
									<div class="main-content">
										<div class="section__content section__content--p30">
											<div class="container-fluid">
												<div class="row">
													<div class="col-lg">
														<div class="card">

															<div class="card-body">
																<?php 
																include 'koneksi.php';
																$data = mysqli_query($koneksi,"select * from admin");
																while($d = mysqli_fetch_array($data)){
																	?>
																	<div class="card-title">
																		<h2>Selamat Datang <?php echo $d['username']; ?> !! </h2><br/><br/>
																		<h3 >Di Aplikasi Estimasi Biaya Pengembangan Perangkat Lunak Menggunakan Metode Function Point(FP)


																			<br/><br/><br/></h3>
																		</div>
																		<?php
																	}
																	?>

																</div> 
																<script src="Chart.js/Chart.bundle.js"></script>
																<style type="text/css">
																	.container {
																		width: 50%;
																		margin: 15px auto;
																	}
																</style>

																<?php 
																include 'koneksi.php';
																?>

																<div style="width: 800px;margin: 0px auto;">
																	<canvas id="myChart"></canvas>
																</div>

																<br/>
																<br/>


																<script>
																	var ctx = document.getElementById("myChart").getContext('2d');
																	var myChart = new Chart(ctx, {
																		type: 'bar',
																		data: {
																			labels: ["Proyek Kecil Menengah", "Proyek Kecil", "Proyek Menengah", "Proyek Besar"],
																			datasets: [{
																				label: '',
																				data: [
																				<?php 
																				$jumlah_effort1 = mysqli_query($koneksi,"select * from deskripsi where effort='8.6'");
																				echo mysqli_num_rows($jumlah_effort1);
																				?>, 
																				<?php 
																				$jumlah_effort2 = mysqli_query($koneksi,"select * from deskripsi where effort='20'");
																				echo mysqli_num_rows($jumlah_effort2);
																				?>, 
																				<?php 
																				$jumlah_effort3 = mysqli_query($koneksi,"select * from deskripsi where effort='24'");
																				echo mysqli_num_rows($jumlah_effort3);
																				?>, 
																				<?php 
																				$jumlah_effort4 = mysqli_query($koneksi,"select * from deskripsi where effort='36'");
																				echo mysqli_num_rows($jumlah_effort4);
																				?>
																				],
																				backgroundColor: [
																				'rgba(255, 99, 132, 0.2)',
																				'rgba(54, 162, 235, 0.2)',
																				'rgba(255, 206, 86, 0.2)',
																				'rgba(75, 192, 192, 0.2)'
																				],
																				borderColor: [
																				'rgba(255,99,132,1)',
																				'rgba(54, 162, 235, 1)',
																				'rgba(255, 206, 86, 1)',
																				'rgba(75, 192, 192, 1)'
																				],
																				borderWidth: 1
																			}]
																		},
																		options: {
																			scales: {
																				yAxes: [{
																					ticks: {
																						beginAtZero:true
																					}
																				}]
																			}
																		}
																	});
																</script>
															</div>
														</div>

													</div>
													<br/><br/><br/>
													<div class="row">
														<div class="col-md-12">
															<div class="copyright">
																<p>Copyright by estimasi biaya pengembangan PL dengan metode FP</p>
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
    <!-- Date-Picker
    <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>-->
</body>

</html>
<!-- end document-->
