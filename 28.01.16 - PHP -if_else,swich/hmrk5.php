<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>task 05</title>
</head>
<body>
	<form action="hmrk5.php" method="get">
		<input type="text" name="data" placeholder="Дата">
		<input type="text" name="month" placeholder="Месец">
		<input type="text" name="year" placeholder="Година">
		<input type="submit" name="submit" value="chek">
	</form>
	<?php 
	if (!empty($_GET['submit'])) {
		$data = $_GET['data'];
		$month = $_GET['month'];
		$year = $_GET['year'];


		
		if ($data <= 31 ) {
			if ($month <= 12) {
				echo " 
				<table border='1'>
				<tr>
					<td>The data is corect</td>
				</tr>
				</table>";
		} else {
			echo " 
			<table border=1>
			<tr>
				<td>The month is wrong</td>
			</tr>
			</table>";
	}
} else {
	echo " 
	 <table border=1>
	<tr>
		<td>The data is wrong</td>
	</tr>
	</table>";
}


}
?>

</table>
</body>
</html>