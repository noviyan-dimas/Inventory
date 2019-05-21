<!DOCYTE html>
<html>
<head>
	<tittle>Sewa Inventaris | Mahasiswa UNNES</tittle>
</head>
<body>
	<header>
		<h3>Pendaftaran Member Baru</h3>
		<h1>Mahasiswa UNNES</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-member.php">Daftar Member</a></li>
		</ul>
		<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran member baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
		<?php endif; ?>
	</nav>
</body>
</html>