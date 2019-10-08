<form name = "myFormTP2" action = "ProcessValidasi.php" method = "POST">
	<table>
		<tr>
			<td class = "posisi"><label id = "surname"> Surname </label>&nbsp;&nbsp;</td>
			<td><input class = "lebar" type = "text" name = "surname" value = "<?php if(isset($_POST['surname'])) echo htmlspecialchars($_POST['surname'])?>"/></td>
			<td class='merah'>
				<?php 
					if(isset($_POST['surname'])) 
						echo $errors['surname']; 
					else 
						echo ' ';
				?>
			</td>
		</tr>
		<tr>
			<td class = "posisi"><label id = "firstname"> Firstname </label>&nbsp;&nbsp;</td>
			<td><input class = "lebar" type = "text" name = "firstname" value = "<?php if(isset($_POST['firstname'])) echo htmlspecialchars($_POST['firstname'])?>"/></td>
			<td class='merah'>
				<?php 
					if(isset($_POST['firstname'])) 
						echo $errors['firstname']; 
					else 
						echo ' ';
				?>
			</td>
		</tr>
		<tr>
			<td class = "posisi"><label id = "email"> Email Address </label>&nbsp;&nbsp;</td>
			<td><input class = "lebar" type = "text" name = "email" value = "<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])?>"/></td>
			<td class='merah'>
				<?php 
					if(isset($_POST['email'])) 
						echo $errors['email']; 
					else 
						echo ' ';
				?>
			</td>
		</tr>
		<tr>
			<td class = "posisi"><label id = "passwd"> Password </label>&nbsp;&nbsp;</td>
			<td><input class = "lebar" type = "password" name = "passwd" value = "<?php if(isset($_POST['passwd'])) echo htmlspecialchars($_POST['passwd'])?>"/></td>
			<td class='merah'>
				<?php 
					if(isset($_POST['passwd'])) 
						echo $errors['passwd']; 
					else 
						echo ' ';
				?>
			</td>
		</tr>
		<tr>
			<td class = "posisi"><label id = "confirmpass"> Confirm Password </label>&nbsp;&nbsp;</td>
			<td><input class = "lebar" type = "password" name = "confirmpass" value = "<?php if(isset($_POST['confirmpass'])) echo htmlspecialchars($_POST['confirmpass'])?>"/></td>
			<td class='merah'>
				<?php 
					if(isset($_POST['confirmpass'])) 
						echo $errors['confirmpass']; 
					else 
						echo ' ';
				?>
			</td>
		</tr>
		<tr>
			<td class = "posisi">&nbsp;&nbsp;</td>
			<td><input type = "submit" value = "Register" name = "submit"/>&nbsp;&nbsp;<input type = "reset" value = "Reset" name = "reset"/></td>
			<td></td>
		</tr>
	</table>
</form>