<?php
	function validateName(&$errors, $field_list, $field_name)
	{   
		$pattern = "/^[a-zA-Z'-]+$/";
		$numerik = "/^[0-9]+$/";
		$panjang = "/^[0-9]{6}/";
		$mail = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/";
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))    
			$errors[$field_name] = 'Field is required'; 
		else if (!preg_match($pattern, $field_list[$field_name]))
			if ($field_name == 'surname' || $field_name == 'firstname')
				$errors[$field_name] = 'Field must contain alphabets only';
		if (preg_match($pattern, $field_list[$field_name]))
			if ($field_name == 'surname' || $field_name == 'firstname')
				$errors[$field_name] = ' ';
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))    
			$errors[$field_name] = 'Field is required'; 
		else if (!preg_match($mail, $field_list[$field_name]))
			if ($field_name == 'email')
				$errors[$field_name] = 'Invalid email address';
		if (preg_match($mail, $field_list[$field_name]))
			if ($field_name == 'email')
				$errors[$field_name] = ' ';
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))    
			$errors[$field_name] = 'Field is required'; 
		else if (!preg_match($numerik, $field_list[$field_name]))
			if ($field_name == 'passwd')
				$errors[$field_name] = 'Field must contain numeric only';
		if (preg_match($numerik, $field_list[$field_name]))
			if (!preg_match($panjang, $field_list[$field_name]))
				if ($field_name == 'passwd')
					$errors[$field_name] = 'Password entered was not 6 digits long';
			if (preg_match($panjang, $field_list[$field_name]))
				if ($field_name == 'passwd')
					$errors[$field_name] = ' '; 
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))    
			$errors[$field_name] = 'Field is required'; 
		else if ($field_list['passwd'] == $field_list['confirmpass'])
			if ($field_name == 'confirmpass')
				$errors[$field_name] = ' ';
		if ($field_list['passwd'] != $field_list['confirmpass'])
			if ($field_name == 'confirmpass')
				$errors[$field_name] = 'Passwords do not match';
	}
?>
