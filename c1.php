<?php

echo 'Zdravo Svetu!<br/>';

$ime = "Irina";
echo $ime;


$a = 10;
$b = 13; 

echo '<br/>';
echo $a + $b;
echo '<br/>';
echo $a - $b;
echo '<br/>';
echo $a / $b;
echo '<br/>';
echo $a * $b;
echo '<br/>';
echo $a % $b;
echo '<br/>';

echo $a * ($a + $b);
echo '<br/>';
echo $a * $a + $b;
echo '<br/>';

$integer = 123;
$float = 3.14;
$string = "TEST TEST";
$boolean = true;

echo $integer;
echo '<br/>';
echo $float;
echo '<br/>';
echo $string;
echo '<br/>';
echo $boolean;
echo '<br/>';


$vistina = true;

if($vistina){
	echo 'Vistina';
} else {
	echo 'Nevistina';
}

echo '<br/>';

$c = true;
$d = false;

if($c && $d){
	echo 'Vistina';
} else {
	echo 'Nevistina';
}

echo '<br/>';

if($c || $d){
	echo 'Vistina';
} else {
	echo 'Nevistina';
}

echo '<br/>';

//strlen('Bojan');
// $prezime = 'prezime';
// strlen($prezime);


echo '<br/>';


if(strlen($ime) % 2 == 0){
	echo 'Paren';
} else {
	echo 'Neparen';
}


echo '<br/>';



$ime = 'Pero';
$br = strlen($ime);
// echo $br;

if($br % 2 == 0){
	echo 'Paren';
} else {
	echo 'Neparen';
}

echo '<br/>';



$ime = 'Pero';
$br = strlen($ime);
$rez = $br % 2;

if($rez == 0){
	echo 'Paren';
} else {
	echo 'Neparen';
}

echo '<br/>';



// 1 = true;
// 0 = false;

$ime = 'Stanko';
$br = strlen($ime);
$rez = $br % 2;

if($rez){
	echo 'Neparen';
} else {
	echo 'Paren';
}

echo '<br/>';



// <. >, <=, >=, ==, ===, !=, !==   operatori za sporedba


$g = '4';
$h = 4;

if($g == $h){    //sporedba samo na vrednosti
	echo 'Vistina';
} else {
	echo 'Nevistina';
}

echo '<br/>';



if($g === $h){    //sporedba i na vrednostite i na tipovite
	echo 'Vistina';
} else {
	echo 'Nevistina';
}

echo '<br/>';



$t = 'A';

if($t == 'A'){
	echo 'A';
} else if($t == 'B'){
	echo 'B';
} else {
	echo 'Nepoznata bukva!';
}


echo '<br/>';

$godini = 94;

if($godini < 15){
	echo 'Mal/a';
} else if($godini >= 15 && $godini < 25){
	echo 'Mlad/a';
} else if($godini >=25 && $godini < 45){
	echo 'Vozrasen/na si';
} else {
	echo 'Star/a si';
}


echo '<br/>';






$den = 'chet';


switch($den){
	case 'pon':
		echo 'Ponedelnik';
	break;
	case 'vto':
		echo 'Vtornik';
	break;
	case 'sre':
		echo 'Sreda';
	break;
	case 'chet':
		echo 'Chetvrtok';
	break;
	case 'pet':
		echo 'Petok';
	break;
	case 'sab':
		echo 'Sabota';
	break;
	case 'ned':
		echo 'Nedela';
	break;
}


echo '<br/>';




for($i = 0; $i < 10; $i++){
	echo $i;
	echo '<br/>';
}





for($i = 0; $i < 12; $i++){
	switch($i){
		case 0:
			echo 'Januari';
		break;
		case 1:
			echo 'Fevruari';
		break;
		case 2:
			echo 'Mart';
		break;
		case 3:
			echo 'April';
		break;
		case 4:
			echo 'Maj';
		break;
		case 5:
			echo 'Juni';
		break;
		case 6:
			echo 'Juli';
		break;
		case 7:
			echo 'Avgust';
		break;
		case 8:
			echo 'Septemvri';
		break;
		case 9:
			echo 'Oktomvri';
		break;
		case 10:
			echo 'Noemvri';
		break;
		case 11:
			echo 'Dekemvri';
		break;
	}
	echo '<br/>';
}

echo '<br/>';





$j = 0;

while($j < 5){
	echo "$j<br/>";
	$j++;
}

echo '<br/>';





$k = 0;
$res = 0;

while($k < 10){
	$res = $k + $res;
	$k++;
}

echo "<br/>Kraen rezultat: $res";




?>