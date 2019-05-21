<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Daftar Member Baru</title>
</head>
<body>
	<header>
		<h3>Data Member Baru</h3>
	</header>

	 <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

       		 <p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" placeholder="Nama lengkap" />
			</p>
			<p>
				<label for="email">Email: </label>
				<input type="text" name="email" />
			</p>
			<p>
				<label for="tgl_gabung">Tanggal gabung: </label>
				<input type="date" name="tgl_gabung" />
			</p>
			<p>
				<label for="username">username: </label>
				<input type="text" name="username" />
			</p>
			<p>
				<label for="password">password: </label>
				<input type="password" name="password" />
			</p>
			<p>
				<label for="status">Status: </label>
				<input type="text" name="status" />
			</p>
			<p>
				<input type="submit" value="Input" name="input" />
			</p>

		</fieldset>
	</form>
</body>
</html>