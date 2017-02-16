<style type="text/css">
	* {
		font-family: sans-serif;
	}

	table {
		border: 1px solid black;
		background-color: silver;
	}
</style>
<?php
	$title = 'My Home Page';
	$denovi = ['pon', 'vto', 'sre', 'chet', 'pet', 'sab', 'ned'];
	$meseci = ['Januari', 'Fevruari', 'Mart', 'April', 'Maj', 'Juni', 'Juli', 'Avgust', 'Septemvri', 'Oktomvri', 'Noemvri', 'Dekemvri'];
	$studenti = [
		['ime' => 'Irina Dobrohotova', 'ocena' => 5],
		['ime' => 'Martin Danev', 'ocena' => 4],
		['ime' => 'Martin Postolovski', 'ocena' => 3],
		['ime' => 'Stefan Blazhevski', 'ocena' => 2],
		['ime' => 'Stefan Stojkovski', 'ocena' => 1],
	];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
</head>
<body>
	<h1><?=$title?></h1>
	<ul>
		<?php foreach ($denovi as $den){ ?>
			<li><?=$den?></li>
		<?php } ?>
	</ul>
	<?php foreach ($meseci as $mesec) { ?>
		<h3><?=$mesec?></h3>
	<?php } ?>
	<table>
		<tr>
			<th>Student</th>
			<th>Ocena</th>
		</tr>
		<?php foreach ($studenti as $student) { ?>
			<tr>
				<td><?=$student['ime']?></td>
<!-- 				<td style="color: <?=$student['ocena'] > 2 ? 'green' : 'red'?>"> -->
				<?php
					$color = 'green';
					if($student['ocena'] > 2){
						$color = 'red';
					}
				?>
				<td style="background-color: <?=$color?>">
				<?=$student['ocena']?>
				</td>
			</tr>
		<?php } ?>
		<!-- <tr>
			<td>Irina</td>
			<td>10</td>
		</tr>
		<tr>
			<td>Martin</td>
			<td>10</td>
		</tr>
		<tr>
			<td>Martin</td>
			<td>10</td>
		</tr>
		<tr>
			<td>Stefan</td>
			<td>10</td>
		</tr>
		<tr>
			<td>Stefan</td>
			<td>10</td>
		</tr> -->
	</table>

</body>
</html>