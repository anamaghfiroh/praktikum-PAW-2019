 <?php
	require 'adminPermission1.inc';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Utama</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./newStyle.css">
</head>
<body class="body1">
	<form name= "myform" action="private1.php" method="POST">
	<div class="leftbox"></div>
	<div class="rightbox">
		<div class="home1">Detail 1</div>
	</div>
	<div class="mainbox"></div>
	<table class="tablePrivate1">
		<tr>
			<th>Nama Panggilan</th><td>Fera/Fer</td>
		</tr>
		<tr>
			<th>Jenis Kelamin</th><td>Perempuan</td>
		</tr>
		<tr>
			<th>Alamat</th><td>Jalan Ares Tengah, RT/RW 004/005 ,Kel. Talang, Kec. saronggi , sumenep</td>
		</tr>
		<tr>
			<th>Alamat Email</th><td><a href="mailto:alfin.niam666@gmail.com">anamaghfiroh55@gmail.com</a></td>
		</tr>
		
	</table>
		<div class="box4">Logout?</div>
		<table class="table2">
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr>
		<td><a href="logout.php" class="buttonLogout2">Yes</a></td>
		<td><a href="index.php" class="buttonLogout2">No</a></td>
		</tr>
		</table>
		<a href="index.php" class="buttonHome">Home</a>
		<a href="private2.php" class="buttonDetail1">Detail 2</a>
		
	</form>
</body>
</html>