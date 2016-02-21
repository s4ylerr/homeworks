<?php 
header('content-type:text/html;charset=utf-8');

$a = "a";
$x = 1;
$y = 1;

while ( $x<= 30) {
	
	while ( $y<= $x) {
		echo $a;
		$y++;
	}
	echo "<br>";
	$y = 1 ;
	$x++;
}


 ?>