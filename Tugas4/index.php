<?php
	function checkPassword(){
		$dbc = new PDO('mysql:host=localhost;dbname=myapp','root','');
		$statement = $dbc->prepare('SELECT * FROM admins WHERE username = :username and password = SHA2(:password,0)');
		$statement->bindValue(':username',$_POST['strusername']);
		$statement->bindValue(':password',$_POST['strpassword']);
		$statement->execute();
		return $statement->rowCount()>0;
		}
	
	if(isset ($_POST['login']) ){
		
			if(checkPassword($_POST['strusername'] and $_POST['strpassword'])){
				session_start();
				$_SESSION['isAdmin'] = true;
				header("Location: http://localhost/Mingguan_4/index.php");
				exit();
			}	
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Utama</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./newStyle.css">
</head>
<body class="body1">
	<form name= "myform" action="index.php" method="POST">
	<div class="leftbox"></div>
	<div class="rightbox">
			<div class="home1">Home</div>
			<img src="./image/fera.jpg" alt="fera" class="img1">
	</div>	
	<table class="tableHome">
		<tr>
			<th>Nama</th><td>ANA MAGHFIROH</td>
		</tr>
		<tr>
			<th>NIM</th><td>170411100087</td>
		</tr>
		<tr>
			<th>Program Studi</th><td>Teknik Informatika</td>
		</tr>
		<tr>
			<th>Fakultas</th><td>Teknik</td>
		</tr>
		<tr>
			<th>Universitas</th><td>Universitas Trunojoyo Madura</td>
		</tr>
	</table>	
	<div class="mainbox"></div>
	<?php
		session_start();
		if(!isset($_SESSION['isAdmin'])){
		?>	
			<div class="box4">Let's Login</div>
			
			<table class="table2">
			<tr>
			<td><input type="text" name="strusername" placeholder="username" class="input2" /></td>
			</tr>
			<tr>
			<td><input type="password" name="strpassword" placeholder="password" class="input2" /><br></td>
			</tr>
			<tr>
			<td><br></td>
			</tr>
			<tr>
			<td><input class="buttonSubmit2" type="submit" name="login" value="Log In" /></td>
			</tr>
			</table>
			<a href="login.php" class="buttonLogin">GotoLogin</a>
		
		<?php
		}
		else if (isset ($_SESSION['isAdmin'])){
		?>
			
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
			<a href="login.php" class="buttonLogin2">GotoLogout</a>
		
		<?php
		}
		?>
		
		<a href="private1.php" class="buttonDetail1">Detail 1</a>
		<a href="private2.php" class="buttonDetail2">Detail 2</a>
		
	</form>
</body>
</html>