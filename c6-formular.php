<?php 


$filename = 'c6-formular.txt';

$filehandle = fopen($filename, 'a+');


$ime = $_POST['ime'];
$email = $_POST['email'];

fwrite($filehandle, $ime.' '.$email.'; ');

rewind($filehandle);

$read = fread($filehandle, filesize($filename));
echo $read;

$zbor = explode(';', $read);

fclose($filehandle);   

$counter = 1;



?>

<ul>
	<?php foreach ($zbor as $val) { ?>
	<li><?=$counter++.'. '.$val ?></li>
	<?php } ?>
</ul>