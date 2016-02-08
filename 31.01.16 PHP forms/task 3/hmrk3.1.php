<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>task 02</title>
</head>
<body>
		
	<form action="hmrk2.php" method="get">
		
		A
		<input type="text" name="a">
		<br>
		B
		<input type="text" name="b">
		<br>
		C
		<input type="text" name="c">
		<br>

		<input type="submit" name="submit" value="chek">

	</form>	

	<?php 

		if (!empty($_GET['submit'])) {
			$a = $_GET['a'];
			$b = $_GET['b'];
			$c = $_GET['c'];

			if (($c<$a+$b) || ($b<$a+$c) || ($a<$b+$c)) {
				echo 
				"<table border=1>
					<tr>
						<td> You can make triangle !!! :) </td>
					</tr>
				</table>
				";
			} else {
				echo 
				"<table border=1>
					<tr>
						<td> You can't make triangle !!! :) </td>
					</tr>
				</table>";
			}
		}





	 ?>

</body>
</html>