<?php include("config.php"); ?>

<!DOCYTE html>
<html>
<head>
	<tittle>Sewa Inventaris | Mahasiswa UNNES</tittle>
</head>

<body>
	<header>
		<h3>Mahasiswa yang sudah mendaftar</h3>
	</header>
	
	<nav>
			<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Tanggal Gabung</th>
			<th>Status</th>
			<th>Telepon</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
	
		<?php
		$sql = "SELECT * FROM member";
		$query = mysqli_query($db, $sql);
		while($member = mysqli_fetch_array($query)){
				echo "<tr>";
				
				echo "<td>".$member['id']."</td>";
				echo "<td>".$member['username']."</td>";
				echo "<td>".$member['password']."</td>";
				echo "<td>".$member['email']."</td>";
				echo "<td>".$member['nama']."</td>";
				echo "<td>".$member['NIM']."</td>";
				echo "<td>".$member['tgl_gabung']."</td>";
				echo "<td>".$member['status']."</td>";
				echo "<td>".$member['telepon']."</td>";
				
				echo "<td>";
				echo "<a href='form-edit.php?id=".$member['id']."'>Edit</a> | ";
				echo "<a href='hapus.php?id=".$member['id']."'>Hapus</a>";
				echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
		</table>
		<p>Total: <?php echo mysqli_num_rows($query) ?></p>
		</body>
</html>
