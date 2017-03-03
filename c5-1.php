<?php 

function sobiranje($a, $b){
	return $a + $b;
}

// echo sobiranje(4, 5);

function test($data){
	foreach ($data as $d) {
		$sob = sobiranje($d['a'], $d['b']);
		// echo $sob;
		if ($sob !== $d['expected']) {
			echo '<span style="color: red;">Fail!</span><br/>';
		} else {
			echo '<span style="color: green;">Success!</span><br/>';
		}
		// echo $d['expected'];
	}
}

$data = [
	[
		'a' => 5,
		'b' => 3,
		'expected' => 8
	],
	[
		'a' => 3,
		'b' => 3,
		'expected' => 6
	],
		[
		'a' => 6,
		'b' => 3,
		'expected' => 19
	],
	[
		'a' => 9,
		'b' => 3,
		'expected' => 12
	],
		[
		'a' => 5,
		'b' => 5,
		'expected' => 10
	],
	[
		'a' => 5,
		'b' => 2,
		'expected' => 7
	],
		[
		'a' => 5,
		'b' => 7,
		'expected' => 12
	],
	[
		'a' => 4,
		'b' => 8,
		'expected' => 12
	],
];


test($data);

?>