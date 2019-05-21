<!DOCYTE html>
<html>
<head>
	<tittle>Sewa Inventaris | Mahasiswa UNNES</tittle>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Member</h3>
	</header>
	<form action="proses-pendaftaran.php" method="POST">
		<fieldset>
		<p>
			<label for="usename">Username: </label>
			<input type="vanchar" name="username" placeholder="username" />
		</p>
		<p>
			<label for="password">Password: </label>
			<input type="vanchar" name="password" placeholder="password" />
		</p>
		<p>
			<label for="email">Email: </label>
			<input type="vanchar" name="email" placeholder="email" />
		</p>
		<p>
			<label for="nama">Nama: </label>
			<input type="vanchar" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="tanggal_gabung">Tanggal Gabung: </label>
			<input type="date" name="tanggal_gabung" />
		</p>
		<p>
			<label for="status">Status: </label>
			<select name="status">
				<option>Pemilik Barang</option>
				<option>Peminjam</option>
			</select>
		</p>
		<p>
			<label for="telepon">Nomor Telepon: </label>
			<input type="vanchar" name="telpon" placeholder="telepon" />
		
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		</fieldset>
	</form>
	</body>
</html>	