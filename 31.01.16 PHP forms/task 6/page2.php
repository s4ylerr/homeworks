<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ниво 1</title>
</head>
<body>	
	<?php 
	header('content-type:text/html;charset=utf-8');
	$numb1 = rand(1,100);
	$numb2 = rand(1,100); 
	echo $numb1.' +  ' .$numb2. '=';


	

	echo '<form action="page2.php" method="get">
		Отговор
		<input type="text" name="suggest" placeholder="?">

		<input type="submit" name="submit" value="chek">
		

		</form>';

	



	

	$cnumb = $numb1 + $numb2;
	$pnumb = $_GET['suggest'];
	


		if ($cnumb = $pnumb) {
			echo 'Правилен Отговор + 1т.';
		}else {
			echo "Грешен отговор.";
		}
	


	?>






	
</body>
</html>


