<?php 
header('content-type:text/html;charset=utf-8');

$n = $_GET['numb'];
$a = 1;
$f = 1;

while ($f <= $n) {
	$a = $a*$f;
	$f = $f + 1;
}
echo "Факториела на " .$n. " e ".$a. ".";




 ?>