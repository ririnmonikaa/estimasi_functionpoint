<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_app = $_POST['nama_app'];
$effort = $_POST['effort'];


// update data ke database
mysqli_query($koneksi,"update deskripsi set nama_app='$nama_app', effort='$effort' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:deskripsi.php");

?>