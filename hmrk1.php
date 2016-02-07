<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>task 01</title>
</head>
<body>
		<form action="hmrk1.php" method="post">
			
			Username
			<input type="text" name="username" placeholder="username....">
			Password
			<input type="password" name="password" placeholder="password...">

			<input type="submit" name="submit" value="submit">

		</form>

<?php 

$user = $_POST['username'];

if (!empty($_POST['submite'])) {
	echo $_POST['username'];
}

if ($_POST['username'] == 'tom') {
	if ($username == '123456') {
		echo "Welcome Tom !";
	}else {
		echo "Wrong Password !!!";
	}
}else {
	echo "Wrong Username !!!!";
}



 ?>
</body>
</html>