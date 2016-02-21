<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">

	span {
		color: red;
	}
	body {
		color: green;
	}


	</style>
</head>
<body>
		
	<?php 
	header('content-type:text/html;charset=utf-8');

	$frase = ' Поражението на византийците и покоряването от страна на прабългарите на завареното население завършва със сключването на мирен договор през лятото на 681г., чрез който Аспарухова България е призната от Византия.';

	$text = explode(' ', $frase);

	foreach ($text as $key => $value) {
		if ($key % 2 == 0) {
			echo "<span>".$value."</span>";
		} else {
			echo " " .$value. " ";
		}
	}




	 ?>


</body>
</html>