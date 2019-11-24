<?php
	session_start();
	if(!isset($_SESSION['isAdmin'])){ //isAdmin adalah contoh label/nama session
	//header("Location: http://{$_SERVER['HTTP_HOST']}/login2.php");
	header("Location: http://localhost/Mingguan_4/login.php");
	exit();

	}
?>