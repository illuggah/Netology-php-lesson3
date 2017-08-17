<?php 
	$array1 = [
		'Africa' => ['Profelis aurata', 'Hexaprotodon liberiensis', 'Giraffa'],
		'Australia' => ['Macropus rufus', 'Thylacinus cynocephalus', 'Tachyglossus aculeatus', 'Trichosurus vulpecula'],
		'Antarctica' => ['Aptenodytes forsteri', 'Delphinidae', 'Mirounga angustirostris'],
		'South America' => ['Lama glama', 'Puma concolor', 'Panthera onca']
	];
	foreach ($array1['Africa'] as $af_k => $af_v) {
		$af_wrdcnt = str_word_count($af_v);
		if ($af_wrdcnt == 2) {
			$af_double = str_word_count($af_v, 1);
			$array3['Africa first'][] = $af_double[0];
			$array3['second'][] = $af_double[1];
		}
	}
	foreach ($array1['Australia'] as $au_k => $au_v) {
		$au_wrdcnt = str_word_count($au_v);
		if ($au_wrdcnt == 2) {
			$au_double = str_word_count($au_v, 1);
			$array3['Australia first'][] = $au_double[0];
			$array3['second'][] = $au_double[1];
		}
	}	
	foreach ($array1['Antarctica'] as $ant_k => $ant_v) {
		$ant_wrdcnt = str_word_count($ant_v);
		if ($ant_wrdcnt == 2) {
			$ant_double = str_word_count($ant_v, 1);
			$array3['Antarctica first'][] = $ant_double[0];
			$array3['second'][] = $ant_double[1];
		}
	}
	foreach ($array1['South America'] as $soa_k => $soa_v) {
		$soa_wrdcnt = str_word_count($soa_v);
		if ($soa_wrdcnt == 2) {
			$soa_double = str_word_count($soa_v, 1);
			$array3['South America first'][] = $soa_double[0];
			$array3['second'][] = $soa_double[1];
		}
	}
	shuffle($array3['Africa first']);
	shuffle($array3['Australia first']);
	shuffle($array3['Antarctica first']);
	shuffle($array3['South America first']);
	shuffle($array3['second']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php-lesson3</title>
	<style type="text/css">
		.wrapper {width: 90%; margin: 0 auto;}
	</style>
</head>
<body>
	<div class="wrapper">
		<h2>Africa</h2>
			<?=$array3['Africa first'][0] . ' ' . $array3['second'][0] . ', '?>
			<?=$array3['Africa first'][1] . ' ' . $array3['second'][1]?>
		<h2>Australia</h2> 
			<?=$array3['Australia first'][0] . ' ' . $array3['second'][2] . ', '?>
			<?=$array3['Australia first'][1] . ' ' . $array3['second'][3] . ', '?>
			<?=$array3['Australia first'][2] . ' ' . $array3['second'][4] . ', '?>
			<?=$array3['Australia first'][3] . ' ' . $array3['second'][5]?>
		<h2>Antarctica</h2>
			<?=$array3['Antarctica first'][0] . ' ' . $array3['second'][6] . ', '?>
			<?=$array3['Antarctica first'][1] . ' ' . $array3['second'][7]?>
		<h2>South America</h2>
			<?=$array3['South America first'][0] . ' ' . $array3['second'][8] . ', '?>
			<?=$array3['South America first'][1] . ' ' . $array3['second'][9] . ', '?>
			<?=$array3['South America first'][2] . ' ' . $array3['second'][10]?>
	</div>
</body>
</html>
