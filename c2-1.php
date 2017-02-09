<?php 



//asocijativni nizi, mesto da ime index, ima kluch koj asocira na vrednosta

$student = array(
	'ime' => 'Irina',
	'prezime' => 'Dobrohotova',
	'prosek' => 9,
);


echo $student['ime'];
echo '<br/>';
echo $student['prezime'];
echo '<br/>';
echo $student['prosek'];
echo '<br/>';


//foreach raboti samo so nizi

foreach($student as $detail_key => $detail_value){
	echo $detail_key.' -> '.$detail_value;
	echo '<br/>';
}

echo '<hr/>';

$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis vel diam ac vestibulum. Vestibulum erat metus, sagittis sed risus feugiat, vehicula accumsan lacus. Vestibulum lobortis justo mauris, id molestie mi scelerisque ac. Integer imperdiet libero non orci pretium, eget consectetur elit accumsan. Vestibulum at nibh vehicula diam volutpat rutrum. Donec gravida sem velit, vitae pulvinar augue laoreet nec. Nullam quis mauris tortor. Morbi finibus mi sapien, in rhoncus mauris scelerisque non. Sed non est aliquet urna gravida sollicitudin. Cras commodo consectetur scelerisque. Ut accumsan odio nibh, non elementum orci efficitur sit amet. Fusce nec justo sit amet sem pulvinar iaculis. Mauris eget leo pellentesque, dignissim diam non, viverra massa. Sed gravida quam libero, in dapibus justo gravida quis. Morbi non lorem convallis, tincidghaegeahntghjdfjsghuilunt tellus quis, blandit velit.';



$zborovi = explode(' ', $text);
// print_r($zborovi);



// najgolemiot zbor

$max = 0;
$zbor = '';

foreach($zborovi as $value){
	if(strlen($value) > $max){
		$zbor = $value;
		$max = strlen($value);
	}

	// $dolzhina = strlen($value);
	// echo $dolzhina;
	// $max = strlen($zborovi);
}

echo 'Najdolgiot zbor vo tekstot e zborot: '.$zbor;


// najmaliot zbor

$max = 100;
$zbor = '';

foreach($zborovi as $value){
	if(strlen($value) < $max){
		$zbor = $value;
		$max = strlen($value);
	}

	// $dolzhina = strlen($value);
	// echo $dolzhina;
	// $max = strlen($zborovi);
}

echo $zbor;




?>