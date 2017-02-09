<?php 

$blogPosts = [
	[
		'naslov' => 'Title 1',
		'sodrzhina' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis vel diam ac vestibulum. Vestibulum erat metus, sagittis sed risus feugiat, vehicula accumsan lacus. Vestibulum lobortis justo mauris, id molestie mi scelerisque ac.'
	],
	[
		'naslov' => 'Title 2',
		'sodrzhina' => 'Integer imperdiet libero non orci pretium, eget consectetur elit accumsan. Vestibulum at nibh vehicula diam volutpat rutrum. Donec gravida sem velit, vitae pulvinar augue laoreet nec. Nullam quis mauris tortor. Morbi finibus mi sapien, in rhoncus mauris scelerisque non.'
	],
	[
		'naslov' => 'Title 3',
		'sodrzhina' => 'Sed non est aliquet urna gravida sollicitudin. Cras commodo consectetur scelerisque. Ut accumsan odio nibh, non elementum orci efficitur sit amet. Fusce nec justo sit amet sem pulvinar iaculis. Mauris eget leo pellentesque, dignissim diam non, viverra massa. Sed gravida quam libero, in dapibus justo gravida quis. Morbi non lorem convallis, tincidunt tellus quis, blandit velit.'
	]
];


// bidejkji e niza vo niza, so $value vleguvame vo podnizata na $blogPosts, i radi toa treba da vlezeme vo naslovot


foreach ($blogPosts as $value) {
	echo '<h1>'.$value['naslov'].'</h2>';
	echo '<p>'.$value['sodrzhina'].'</p>';
}





// dole: <?= ?> ni e zamena za echo vo php

?>





<?php foreach($blogPosts as $value){ ?>
	<h2><?=$value['naslov']?></h2>
	<p><?=$value['sodrzhina']?></p>
<?php } ?>