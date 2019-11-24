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
	<title>Halaman Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./newStyle.css">
</head>
<body class="body1">
	
	<form name= "myform" action="login.php" method="POST">
		<?php
		session_start();
		if(!isset($_SESSION['isAdmin'])){
		?>	
			<div class="box1"></div>
			<div class="box2">Let's Login</div>
			
			<table class="table1">
			<tr>
			<td><input type="text" name="strusername" placeholder="username" class="input1" /></td>
			</tr>
			<tr>
			<td><input type="password" name="strpassword" placeholder="password" class="input1" /><br></td>
			</tr>
			<tr>
			<td><br></td>
			</tr>
			<tr>
			<td><input class="buttonSubmit" type="submit" name="login" value="Log In" /></td>
			</tr>
			</table>
			
		<?php
		}
		else if (isset ($_SESSION['isAdmin'])){
		?>
			<div class="box3"></div>
			<div class="box2">Logout?</div>
			<table class="table1">
			
			<tr>
			<td><a href="logout.php" ><button type="button" name="buttonLogout" class="buttonLogout3">Yes</button></a></td>
			<td><a href="index.php" ><button type="button" name="buttonLogout" class="buttonLogout3">No</button></a></td>
			</tr>
			</table>
			
		<?php
		}
		?>
		
	</form>
</body>
</html> 