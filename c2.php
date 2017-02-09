<?php


//od domashnoto

// $prev = 0;
// $next = 1;
// $limit = 1000;

// while($next < $limit){
// 	echo $next.'<br/>';
// 	$p = $prev;
// 	$prev = $next;
// 	$next = $p + $next;
// }



$niza = array();   //prazna niza
$niza2 = [];	   //prazna niza


$niza3 = array('a', 'b', 'c', 'd');		//niza so vrednosti
$niza4 = ['e', 'f', 'g', 'h'];			//niza so vrednosti



$niza[0] = 'i';		//dodavanje na elementi so index
$niza[1] = 'j';
$niza[2] = 'k';
$niza[3] = 'l';



$niza2[] = 'm';		//dodavanje na elementi bez index
$niza2[] = 'n';
$niza2[] = 'o';
$niza2[] = 'p';



// echo $niza; // ova vrakja greshka


// pravilno bilo koe od ovie dve

// print_r($niza);
// echo '<hr/>';
// var_dump($niza2);



$dolzhina = count($niza);
echo $dolzhina;

for($i = 0; $i < $dolzhina; $i++){
	echo $niza[$i].'<br/>';
}



$nizaGradovi = ['Skopje', 'Veles', 'Bitola', 'Shtip', 'Ohrid', 'Negotino', 'Mavrovo', 'Krushevo'];



$q = 0;

while($q < count($nizaGradovi)){
	echo $nizaGradovi[$q].'<br/>';
	$q++;
}



$max = 0;
$grad = '';
$w = 0;



while($w < count($nizaGradovi)){
	if(strlen($nizaGradovi[$w]) > $max){
		$grad = $nizaGradovi[$w];
		$max = strlen($nizaGradovi[$w]);
	}
	// strlen($nizaGradovi[$w]){
	// max strlen($nizaGradovi)
	// echo (max(strlen($nizaGradovi[$w])));

	// echo max((strlen(array($nizaGradovi)));



	$w++;
}

echo 'Grad so najdolgo ime e gradot: '.$grad;
	
echo '<br/>';




$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis vel diam ac vestibulum. Vestibulum erat metus, sagittis sed risus feugiat, vehicula accumsan lacus. Vestibulum lobortis justo mauris, id molestie mi scelerisque ac. Integer imperdiet libero non orci pretium, eget consectetur elit accumsan. Vestibulum at nibh vehicula diam volutpat rutrum. Donec gravida sem velit, vitae pulvinar augue laoreet nec. Nullam quis mauris tortor. Morbi finibus mi sapien, in rhoncus mauris scelerisque non. Sed non est aliquet urna gravida sollicitudin. Cras commodo consectetur scelerisque. Ut accumsan odio nibh, non elementum orci efficitur sit amet. Fusce nec justo sit amet sem pulvinar iaculis. Mauris eget leo pellentesque, dignissim diam non, viverra massa. Sed gravida quam libero, in dapibus justo gravida quis. Morbi non lorem convallis, tincidunt tellus quis, blandit velit.';



$zborovi = explode(' ', $text);
print_r($zborovi);

echo count($zborovi);

$rechenici = explode('. ', $text);
print_r($rechenici);
echo count($rechenici);

?>