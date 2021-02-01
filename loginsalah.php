<?php

session_start();
	if(isset($_SESSION["username"])){
	echo"Username dan password salah";
	echo"<br>jika ingin login kembali";
	}
?>
<html>
<a href="login1.php">Klik disini</a>
</html>