<?php
include("config.php");

if(isset($_POST['input'])) {
	//ambil data dari formulir
	$nama = $_POST['nama'];
	//$nim = $_POST['nim'];
	$email = $_POST['email'];
	//$no_telp = $_POST['no_telp'];
	$tgl_gabung = $_POST['tgl_gabung'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status'];
	
	//buat query
	$sql = "INSERT INTO member(nama, email, username, tgl_gabung, password, status) VALUE ('$nama', '$email', '$username', '$password', '$tgl_gabung', '$status');";
	$query = mysqli_query($db, $sql);
	//apakah query simpan berhasil?
	if ($query) {
		//kalau berhasi alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		//kalau gagal alihkan ke halaman index.php dengan status=gagal
		header('Location: index.php?status=gagal');
	}
}else {
	die("Akses dilarang. . .");
}
?>