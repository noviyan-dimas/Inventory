<?php
session_start();
include('koneksi.php');
if(isset($_POST['login'])){
	$user = mysqli_real_escape_string($con, $_POST['username']);
	$pass = mysqli_real_escape_string($con, md5($_POST['password']));
 
	$sql = mysqli_query($con, "SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysqli_connect_error());
	if(mysqli_num_rows($sql) == 0){
		echo 'User tidak ditemukan';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if($row['level'] == 1){
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("You logged in as Admin!"); document.location="admin/index.php";</script>';
		}else{
			$_SESSION['guest']=$user;
			echo '<script language="javascript">alert("You logged in as Guest!"); document.location="guest/index.php";</script>';
		}
	}
}
?>
