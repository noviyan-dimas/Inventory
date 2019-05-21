<?php

include("config.php");
//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){
	//ambil data dari formulir
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email']
	$nama = $_POST['nama'];
	$tgl_gabung = $_POST['tanggal_gabung'];
	$status = $_POST['status'];
	$telepon = $_POST['telepon'];
	//buat query update
	$sql = "UPDATE member SET username='$username', password='$password', email='$email', nama='$nama', tanggal_gabung='$tgl_gabung', status='$status', telepon='$telepon' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	//apakah query update berhasil?
	if( $query ) {
		//kalau berhasil alihkan ke halaman list-member.php
		header('Location: list-member.php');
	} else {
		//kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
} else {
	die("Akses dilarang...");
}
?>