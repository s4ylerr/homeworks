<?php 
$name = "tom";
$password = "123456";

	$user = $_POST['username'];
	$pass = $_POST['password'];

	if ($user == $name ) {
		if ($pass == $password) {
		echo "Hello, " .$name;
		}else {
			echo "Wrong Password";
		}
}else 
	echo "Wrong username";


 ?>