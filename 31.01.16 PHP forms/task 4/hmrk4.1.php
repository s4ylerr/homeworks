<?php 
header('content-type:text/html;charset=utf-8');

$cnumb = 6;
$numb = $_GET['number'];

if ($numb == $cnumb) {
	echo "Correct you win :)";
	echo "<img src='price.png'  alt='img'>"	;
}elseif ($numb > $cnumb) {
	echo "My number is less then yours";
}elseif ($numb < $cnumb) {
	echo "My number is larger then yours";
}


 ?>
 <p>
 <a href="hmrk4.php">&lt&lt Назад </a>
 </p>