<?php 


// http://127.0.0.1/swt-2016/include.php?page=c1.php


// include('c1.php')

$file = $_GET['page'].'.php';
// $file = c2.'.php';
// $file = c2.php';

$exists = file_exists($file);

if($exists == true){
	// echo 'File exists';
	include($file);
} else {
	echo 'File does not exist';
}



?>