<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Task 02</title>
</head>
<body>
		<form action="hmrk2.php" method="get">
			Day of the week
			<input type="text" name="day" >

			<input type="submit" name="submit" value="Go!">

		</form>

<?php 

$day = $_GET['day'];

if ($day == 'monday') {
	echo "Laugh on Monday, laugh for danger";
}elseif ($_GET['day'] == 'tuesday') {
	echo "Laugh on Tuesday, kiss a stranger";
}elseif ($_GET['day'] == 'wednesday') {
	echo "Laugh on Wednesday, laugh for a letter";
}elseif ($_GET['day'] == 'thursday') {
	echo "Laugh on Thursday, something better";
}elseif ($_GET['day'] == 'friday') {
	echo "Laugh on Friday, laugh for sorrow.";
}elseif ($_GET['day'] == 'saturday') {
	echo "Laugh on Saturday, joy tomorrow";
}elseif ($_GET['day'] == 'sunday') {
	echo "Bad news tomorow is monday :(";
}else {
	echo "This is not day of the week !";
}






 ?>

</body>
</html>