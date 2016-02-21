<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>task 4 </title>
</head>
<body>
		<form action="hmrk4.php" method="post">
			<textarea name="message"  cols="30" rows="10"></textarea>
			<input type="submit" name="submit" value="code">
		</form>

		
<?php 

if (!empty($_POST['submit'])) {
	$text = $_POST["message"];
	$words = strlen($text);

	for ($i=0; $i < $words ; $i++) { 
		$arr = str_split($text);
		//echo $arr[$i];
	}

	for ($i=0; $i < $words; $i++) { 
		if ($arr[$i] == "a") {
			$arr[$i] = "@";
		}
		if ($arr[$i] == "e") {
			$arr[$i] = "3";
		}
	}
	for ($i=0; $i < $words ; $i++) { 
		echo $arr[$i];
	}
}


 ?>


</body>
</html>

