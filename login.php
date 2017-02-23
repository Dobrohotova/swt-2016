<?php



$u = 'Irina';
$p = 'b';


$post_name = trim(strip_tags($_POST['name']));
$post_password = trim(strip_tags($_POST['password']));


if(strlen($post_name) > 0 && strlen($post_password) > 0){

	if($post_name == $u && $post_password == $p){
		echo 'Successful login';
	} else {
		echo 'Please try again '.strip_tags($post_name);
	}
} else {
	echo 'No username or password was entered!';
}

?>