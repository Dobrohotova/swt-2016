<?php 


// print_r($_FILES);





if ($_FILES['f']['type'] == 'image/jpeg' || $_FILES['f']['type'] == 'image/pjpeg' && $_FILES['f']['size'] < 2097152) {
	move_uploaded_file($_FILES['f']['tmp_name'], 'uploads/'.$_FILES['f']['name']);
} else {
	echo 'Upload failed';
}









?>