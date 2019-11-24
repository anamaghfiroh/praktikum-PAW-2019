<?php
	require_once("Proses.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Tugas Mingguan 3</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>
	<body>
		<form name="myform" action="Tampilan.php" method="POST">
			<h2>Animals Detail</h2>
			<table  class="table1">
				<tr>
					<td colspan="2"><input type="hidden" value="<?php echo $ID;?>" name="ID" /></td>
				</tr>
				<tr>
					<td><label for="PuppyName">Puppy Name</label></td>
					<td><input type="text" id="PuppyName" value="<?php echo $PuppyName;?>" name="PuppyName" /></td>
				</tr>
			
			
				<tr>
					<td><label for="BreedID">Breed ID</label></td>
					<td>
					<?php
					$breedlist = $dbc ->prepare("SELECT * FROM breeds");
					$breedlist -> execute();
					echo "<select id=\"BreedID\" name=\"BreedID\">";
					foreach($breedlist as $z){
						if ($z[1]==$BreedID){
							echo "<option value=\"<{$z[1]}\" selected>{$z[1]}</option>";
						}
						else{
							echo "<option value=\"<{$z[1]}\">{$z[1]}</option>";
						}	
					}
					echo "</select>";
					?>
					</td>
				</tr>
			
				<tr>
					<td><label for="Description">Description</label></td>
					<td><input type="text" id="Description" value="<?php echo $Description;?>" name="Description" /></td>
				</tr>
			
				<tr>
					<td><label for="Price">Price</label></td>
					<td><input type="text" id="Price" value="<?php echo $Price;?>" name="Price" /></td>
				</tr>
			
				<tr>
					<td><label for="Picture">Picture</label></td>
					<td><input type="file" id="Picture" accept="image/*" name="Picture" ></td>
				</tr>
			
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="back" value="back"/>
					<input type="submit" name="update" value="update"/>
					<input type="reset" name="reset" value="reset" /></td>
				</tr>
			
			
				
			</table>

		
		</form>
	</body>
</html>