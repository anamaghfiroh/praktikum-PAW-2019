<?php
	include("Koneksi.php");
	$ID='';
	$PuppyName='';
	$Description='';
	$Price='';
	$BreedID='';
	$Picture='';
	if(isset($_GET['Edit'])){
		$id = $_GET['Edit'];
		$statement = $dbc->prepare("SELECT a.ID ,a.PuppyName, b.BreedName, a.Description,a.Price,a.Picture
								from animals a, breeds b
								where a.BreedID = b.Breed and ID = $id");
		$statement->execute();
		$statement = $statement->fetch();
		$ID = $statement['ID'];
		$PuppyName = $statement['PuppyName'];
		$Description = $statement['Description'];
		$Price = $statement['Price'];
		$BreedID= $statement['BreedName'];
		$Picture= $statement['Picture'];
	}
?>