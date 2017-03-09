<?php 

$filename2 = 'c6-counter.txt';

$counter = file_get_contents($filename2);

echo $counter;

$filehandle2 = fopen($filename2, 'w');

// echo $filehandle2;

fwrite($filehandle2, ++$counter);


fclose($filehandle2);



?>