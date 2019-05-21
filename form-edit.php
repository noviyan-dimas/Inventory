<?php
include ("config.php");
//kalau tidak ada id di query string
if (!isset($_GET['id'])) {
	header('Location: list-member.php');
}
//ambil id dari query string
$id = $_GET['id'];
//buat query untuk ambil data dari database
$sql = "SELECT * FROM member WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
//jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query)<1) {
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Edit Member | Sewa Inventaris</title>
</head>
<body>
	<header>
		<h3>Daftar Edit Member</h3>
	</header>
	<form action="proses-edit.php" method="POST">
		<fieldset>
		<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		<p>
			<label for="usename">Username: </label>
			<input type="vanchar" name="username" placeholder="username" value="<?php echo $member['username'] ?> />
		</p>
		<p>
			<label for="password">Password: </label>
			<input type="vanchar" name="password" placeholder="password" value="<?php echo $member['password'] ?> />
		</p>
		<p>
			<label for="email">Email: </label>
			<input type="vanchar" name="email" placeholder="email" value="<?php echo $member['email'] ?> />
		</p>
		<p>
			<label for="nama">Nama: </label>
			<input type="vanchar" name="nama" placeholder="nama lengkap" value="<?php echo $member['nama'] ?> />
		</p>
		<p>
			<label for="tanggal_gabung">Tanggal Gabung: </label>
			<input type="date" name="tanggal_gabung" value="<?php echo $member['tanggal_gabung'] ?> />
		</p>
		<p>
			<label for="status">Status: </label>
			<select name="status">
				<option <?php echo($status == 'pemilik_barang') ? "selected": "" ?>>Pemilik Barang</option>
				<option <?php echo($status == 'peminjam') ? "selected": "" ?>>Peminjam</option>
			</select>
		</p>
		<p>
			<label for="telepon">Nomor Telepon: </label>
			<input type="vanchar" name="telpon" placeholder="telepon" value="<?php echo $member['telepon'] ?> /> />
		</p>
		<p>
			<input type="submit" value="simpan" name="simpan" />
		</p>
		</fieldset>
	<form>
	</body>
<html>