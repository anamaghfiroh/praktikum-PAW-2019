<?php
	require_once("Koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>170411100087_ANA MAGHFIROH_PAW_TM3</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>
	<body>
			<h1>Puppies Data</h1>
			<form name="form" action="Form.php" method="GET">
			<table class="table2">
				<?php
					$judul = array('Name','Breed','Description','Price','Picture','Action');
					echo"<tr>";
					foreach ($judul as $v){
							echo "<th>$v</th>";
					}
					echo"</tr>";
					foreach($statement as $key){
						echo"<tr>";
						echo "<td><p>{$key[1]}<p></td>";
						echo "<td><p>{$key[2]}</p></td>";
						echo "<td><p>{$key[3]}</p></td>";
						echo "<td><p>";
						echo "$";
						echo "{$key[4]}</p></td>";
						echo "<td><img src='image/{$key[5]}' alt=\"image\"></td>";
						echo "<td><a href=\"Form.php?Edit={$key[0]}\" >Edit</a></td>";	
						echo"</tr>";
					}	
				?>
			</table>
			</form>
	</body>
</html>