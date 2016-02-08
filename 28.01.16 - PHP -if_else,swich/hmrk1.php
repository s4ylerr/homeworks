<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>task 01</title>
</head>
<body>

	<form action="hmrk1.php" method="get">
		
		Angel A 
		<input type="text" name="angelA">
		<br>
		Angel B
		<input type="text" name="angelB">
		<br>
		Angel C
		<input type="text" name="angelC">
		<br>

		<input type="submit" name="submit" value="Chek">

	</form>

	<?php 

	if (!empty($_GET['submit'])) {
		$angelA = $_GET['angelA'];
		$angelB = $_GET['angelB'];
		$angelC = $_GET['angelC'];

		$sum = $angelA + $angelB + $angelC;
		if ($sum == 180) {
			echo 
			"<table border='1'>
				<tr>
					<td> Triangle is valid !!! </td>
				</tr>
			</table>";
		} else {
			echo 
			"<table border='1'>
			<tr>
				<td> Triangle is not valid !!! </td>
			</tr>
		</table>";
		}
	}

	?>

</body>
</html>