<?php

include("config.php");
//cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){
	//ambil data dari formulir
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$NIM = $_POST['NIM'];
	$tgl_gabung = $_POST['tanggal_gabung'];
	$status = $_POST['status'];
	$telepon = $_POST['telepon'];
	//buat query
	$sql = "INSERT INTO member (username, password, email, nama, NIM, tanggal_gabung, status, telepon) VALUE ('$username', '$password', '$email', '$nama', '$tgl_gabung', '$status', '$telepon')";
	$query = mysqli_query($db, $sql);
	//apakah query simpan berhasil
	if( $query ) {
		//kalau berhasil alihkan ke halaman index.php dengan status+sukses
		header('Location: index.php?status=sukses');
	} else {
		//kalau gagal alihkan ke halaman index.php dengan status=gagal
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}
?>
