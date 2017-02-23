<?php 


$email = 'irina.dobrohotova@gmail.com';
// $email = $_POST['email'];
// $email = $GET['email'];

$vres = filter_var($email, FILTER_VALIDATE_EMAIL);
//vres ni e staveno kako ime random za validate result



if($vres == true){
	echo 'Email is valid';
} else {
	echo 'Not a real email address!';
}





?>