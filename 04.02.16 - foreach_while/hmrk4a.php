<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
	#red {
		color: red;
	}

	#white {
		color: white;
	}
	body {
		color: green;
		background-color: black;
	}


	</style>
</head>
<body>
		
	<?php 
	header('content-type:text/html;charset=utf-8');

	$frase = ' Поражението на византийците и покоряването от страна на прабългарите на завареното население завършва със сключването на мирен договор през лятото на 681г., чрез който Аспарухова България е призната от Византия.';

	$text = explode(' ', $frase);

	foreach ($text as $key => $value) {
		if ($key % 3 == 0) {
			echo "<span id=red > ".$value." </span>";
		} elseif ($key % 3 == 1) {
			echo "<span id=white > ".$value." </span>";
		} 

		else {
			echo " " .$value. " ";
		}
	}




	 ?>


</body>
</html>