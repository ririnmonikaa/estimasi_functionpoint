<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>
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
									<!-- MAIN CONTENT-->
									<div class="main-content">
										<div class="section__content section__content--p30">


											<div class="row">
												<div class="col-md">
													<!-- DATA TABLE -->
													<h3 class="title-5 m-b-40">Data Aplikasi</h3>
													<div class="table-data__tool">

														<div class="table-data__tool-right">

															<a href="tambahdesk.php" class="au-btn au-btn-icon au-btn--green au-btn--small">Deskripsi Aplikasi</a>
															<div class="rs-select2--dark rs-select2--sm rs-select2--dark2">

															</div>
														</div>
													</div>
													<div class="table-responsive table-responsive-data2">
														<table class="table table-data2">
															<thead>
																<tr>
																	<th>No</th>
																	<th>name</th>
																	<th>date</th>
																	<th>effort rate</th>


																</tr>

															</thead>
															<tbody>
																<?php 
																include 'koneksi.php';
																$no = 1;
																$data = mysqli_query($koneksi,"select * from deskripsi");
																while($d = mysqli_fetch_array($data)){
																	?>

																	<tr class="tr-shadow">
																		<td><?php echo $no++; ?></td>
																		<td><?php echo $d['nama_app']; ?></td>
																		<td><?=date('d F Y', strtotime($d['tanggal'])); ?></td>
																		<td><?php echo $d["effort"];?></td>
																		<td>
																			<div class="table-data-feature">

																				<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
																					<a href="editdesk.php?id=<?php echo $d['id']; ?> "><i class="zmdi zmdi-edit"></i></a>
																				</button>
																				<button class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
																					<a href="hapusdesk_koneksi.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="zmdi zmdi-delete"></i></a>
																				</button>

																			</div>
																		</td>
																	</div>
																</td>
															</tr>
															<?php 
														}
														?>

													</tbody>
												</table>

											</div></br>
											<div>
												<center><a href="cfp.php" class="btn btn-primary btn-sm">Selanjutnya</a></center> 
												<!-- END DATA TABLE --></div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="copyright">
													<p>Copyright by Ririn Monika</a>.</p>
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
