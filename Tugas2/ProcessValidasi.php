<!DOCTYPE html>
<html lang = "en">
	<head>
		<title> Form PHP </title>
		<link rel =stylesheet href = "CSSTP2.css" type = "text/css">
	</head>
	<body>
		<fieldset>
			<h2> Register </h2>
			<fieldset class = "colbir">
				<legend> Person Details </legend>
				<?php
					$errors = array();  
					if(isset($_POST['submit'])){       
						require 'ValidateTP2.php';     
						validateName($errors, $_POST, 'surname');  
						validateName($errors, $_POST, 'firstname');
						validateName($errors, $_POST, 'email');
						validateName($errors, $_POST, 'passwd');
						validateName($errors, $_POST, 'confirmpass');
						validateName($errors, $_POST, 'submit');
						if($errors){
							$s = 0;
							foreach($errors as $a){
								if ($a == ' '){
									$s = $s + 1;
								}
							}
							if($s == 5){
								echo 'Form submitted successfully with no errors';
								
							}       
							else{   
								include 'FormTP2.inc'; 
							}
						}
					} 
					
					else if(isset($_POST['reset'])){
						validateName($errors, $_POST, 'reset');
					}
					else{   
						include 'FormTP2.inc';  
					}
				?>  
			</fieldset>
		</fieldset>
	</body>
</html>