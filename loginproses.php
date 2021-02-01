<?php 
	include 'koneksi.php';
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
		$sql2 = $conn->query("SELECT * FROM user WHERE username='' AND password=''");

		$result = $sql->num_rows;
		if ($result==1) {
			echo "<script>alert('Berhasil Login')</script>";
			echo "<meta http-equiv='refresh' content='0; url=adding.php'>";
			
		}
		else{
			echo "<script>alert('Username atau Password Salah')</script>";
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		}
		
		
?>		
