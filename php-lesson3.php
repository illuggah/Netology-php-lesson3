<?php 
	$array1 = [
		'Africa' => ['Profelis aurata', 'Hexaprotodon liberiensis', 'Giraffa'],
		'Australia' => ['Macropus rufus', 'Thylacinus cynocephalus', 'Tachyglossus aculeatus', 'Trichosurus vulpecula'],
		'Antarctica' => ['Aptenodytes forsteri', 'Delphinidae', 'Mirounga angustirostris'],
		'South America' => ['Lama glama', 'Puma concolor', 'Panthera onca']
	];

// перепаковываем array1:

	foreach($array1 as $k => $v) {
		foreach($v as $lvl2) {
			$swarm[] = $lvl2;
		}
	}

 // разбиваем названия на первые и вторые слова:

	foreach ($swarm as $ks => $vs) {
		$wrdcnt = str_word_count($vs);
		if ($wrdcnt == 2) {
			$double = str_word_count($vs, 1);
			$array2[first][] = $double[0];
			$array2[second][] = $double[1];
		}
	}

	shuffle($array2[first]);
	shuffle($array2[second]);
	
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>php-lesson3</title>

</head>
<body>
	<?php

		echo $array2[first][0] . ' ' . $array2[second][0] . ',<br>';
		echo $array2[first][1] . ' ' . $array2[second][1] . ',<br>';
		echo $array2[first][2] . ' ' . $array2[second][2] . ',<br>';
		echo $array2[first][3] . ' ' . $array2[second][3] . ',<br>';
		echo $array2[first][4] . ' ' . $array2[second][4] . ',<br>';
		echo $array2[first][5] . ' ' . $array2[second][5] . ',<br>';
		echo $array2[first][6] . ' ' . $array2[second][6] . ',<br>';
		echo $array2[first][7] . ' ' . $array2[second][7] . ',<br>';
		echo $array2[first][8] . ' ' . $array2[second][8] . ',<br>';
		echo $array2[first][9] . ' ' . $array2[second][9] . ',<br>';
		echo $array2[first][10] . ' ' . $array2[second][10] . '<br>';

	?>
</body>
</html>
