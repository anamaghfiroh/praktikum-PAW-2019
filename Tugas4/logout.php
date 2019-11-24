<?php
	session_start();
	unset($_SESSION['isAdmin']);
	
?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Logout</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./newStyle.css">
</head>
<body class="body1">
	
	<form name= "myform" action="logout.php" method="POST">
		
			<div class="box3"></div>
			<div class="box2">Anda Berhasil Logout</div>
			<table class="table1">
			<tr><td><br></td></tr>
			<tr><td><br></td></tr>
			
			
			<tr>
			<td><a href="index.php" class="buttonUtama" >Home</a></td>
			</tr>
			</table>
	</form>		
		
</body>
</html>