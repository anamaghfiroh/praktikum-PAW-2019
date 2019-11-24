 <?php
	$dbc = new PDO ('mysql:host=localhost;dbname=puppies','root','');
	$statement = $dbc->prepare("SELECT a.ID as ID,a.PuppyName, b.BreedName, a.Description,a.Price,a.Picture
								from animals a, breeds b
								where a.BreedID = b.Breed");
	$statement->execute();
	
?>
