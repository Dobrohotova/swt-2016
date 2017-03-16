<?php 



print_r($_FILES);


for ($i=0; $i < count($_FILES['m']['type']); $i++) { 
	$prefix = rand(1000000000, 9999999999);
	move_uploaded_file($_FILES['m']['tmp_name'][$i], 'uploads/'.$prefix.'_'.$_FILES['m']['name'][$i]);
}






?>