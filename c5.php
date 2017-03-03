<?php 


function validate_registration($name, $email, $age, $website, $password1, $password2){

	// print_r($_POST);
	$errors = [];
	// validating the name
	if(!isset($name) || !strlen(trim($name))){
		$errors[] = 'You must set a name';
	}
	// validating the email
	if(!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors[] = 'The email you entered is invalid';
	}
	// validating the age
	if(!isset($age) || $age < 21){
		$errors[] = 'You are too young to register';
	}
	// validating the website
	if(!isset($website) || !filter_var($website, FILTER_VALIDATE_URL)){
		$errors[] = 'The website you entered has an invalid url';
	}
	// validating the password
	if(!isset($password1) || !isset($password2) || strlen(trim($password1)) < 6 || strlen(trim($password2)) < 6 || $password1 !== $password2){
		$errors[] = 'Passwords don\'t match';
	}
	// checking for errors
	if(count($errors) == 0){
		return true;
	} else {
		return false;
	}
}

// @$res = validate_registration($_POST['name'], $_POST['email'], $_POST['age'], $_POST['website'], $_POST['password1'], $_POST['password2']);

// 	if($res === true){
// 		echo 'Your registration has been successfull';
// 	} else {
// 		echo 'Registration unsuccessfull: <br/>'.implode($res, '<br/>');
// 	}

function _test_validate_registration($data){
	foreach ($data as $d){
		$res = validate_registration($d['name'], $d['email'], $d['age'], $d['website'], $d['password1'], $d['password2']) === $d['expected'];
		if($res !== $d['expected'] ){
			echo '<span style="color: red;">Fail!</span><br/>';
		} else {
			echo '<span style="color: green;">Success!</span><br/>';
		}
	}
}

$data = [
	[
	'name' => 'Irina Dobrohotova', 
	'email' => 'irina.dobrohotova@gmail.com', 
	'age' => '24', 
	'website' => 'http://www.google.com', 
	'password1' => 'aaaaaa', 
	'password2' => 'aaaaaa',
	'expected' => true
	],
	[
	'name' => '', 
	'email' => 'irina.dobrohotova@gmail.com', 
	'age' => '24', 
	'website' => 'http://www.google.com', 
	'password1' => 'aaaaaa', 
	'password2' => 'aaaaaa',
	'expected' => false
	],
	[
	'name' => 'Irina Dobrohotova', 
	'email' => 'irina.dobrohotova@gmail', 
	'age' => '24', 
	'website' => 'http://www.google.com', 
	'password1' => 'aaaaaa', 
	'password2' => 'aaaaaa',
	'expected' => false
	],
	[
	'name' => 'Irina Dobrohotova', 
	'email' => 'irina.dobrohotova@gmail.com', 
	'age' => '30', 
	'website' => 'http://google.com', 
	'password1' => 'aaaaaa', 
	'password2' => 'aaaaaa',
	'expected' => true
	],
	[
	'name' => 'Irina Dobrohotova', 
	'email' => 'irina.dobrohotova@gmail.com', 
	'age' => '24', 
	'website' => 'www.google.com', 
	'password1' => 'aaaaaa', 
	'password2' => 'aaaaaa',
	'expected' => false
	],
	[
	'name' => 'Irina Dobrohotova', 
	'email' => 'irina.dobrohotova@gmail.com', 
	'age' => '24', 
	'website' => 'http://google.com', 
	'password1' => 'aaaaa', 
	'password2' => 'aaaaaa',
	'expected' => false
	]
];

_test_validate_registration($data);


?>