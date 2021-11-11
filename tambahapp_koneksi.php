
<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
	$nama_app = $_POST['nama_app'];
	$tanggal = date("Y-m-d");
	$effort = $_POST['effort'];
	$total_fp = $_POST['total_fp'];
	$total_effort = $_POST['total_effort'];
	$total_estimasi = $_POST['total_estimasi'];

	
	

  // id_produk bernilai '' karena kita set auto increment
//$q = $koneksi->query("INSERT INTO deskripsi VALUES ('', '$nama_app','$tanggal', '$effort', '$total_fp', '$total_effort', '$total_estimasi')");
	$sql= "INSERT INTO deskripsi (nama_app, tanggal, effort, total_fp, total_effort, total_estimasi) VALUES ( '$nama_app','$tanggal', '$effort', '$total_fp', '$total_effort', '$total_estimasi')";
	$q= mysqli_query($koneksi,$sql);

	if ($q) {
    // pesan jika data tersimpan
		echo "<script>alert('Data aplikasi berhasil ditambahkan'); window.location.href='history.php'</script>";
	} else {
    // pesan jika data gagal disimpan
		echo "<script>alert('Data aplikasi gagal ditambahkan'); window.location.href='deskripsi.php'</script>";
	}
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
	header('Location: history.php');
}
?>