<?php 

session_start();

if (isset($_SESSION['logged in']) && $_SESSION['logged in'] == true) {
	echo 'User email: '.$_SESSION['user_email'];
	echo '</br>';
	echo 'User ID: '.$_SESSION['user_id'];
} else {
	echo 'This user is not logged in!';
}





?>