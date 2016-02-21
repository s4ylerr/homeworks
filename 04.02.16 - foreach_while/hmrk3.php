<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>task 6</title>
</head>
<body>
		<form action="hmrk3.php" method="get">

		<select name="city">
			<option value="sofia">София</option>
			<option value="madrid">Мадрид</option>
			<option value="paris">Париж</option>
		</select>

		<input type="submit" name="submit" value="Избери">
			

		</form>

		<?php 
		header('content-type:text/html;charset=utf-8');

		if (!empty ($_GET['submit'])) {
			$city = $_GET['city'];
		}
		$citycount = array( 'Bulgaria' => 'Sofia' , 
							'Spain' => 'Madrid' ,
							'France' => 'Paris' ,);
		foreach ($citycount as $key => $value) {
			if ($city == $value	) {
				echo "<p>".$value."се намира в ".$key."</p";
			}
			
		}
		 ?>

</body>
</html>