<?php
header('Content-Type:text/html;charset=utf-8');
$arr = array();
for ($i=0; $i<20; $i++){
	$arr[$i]=rand(0, 50);
	echo $arr[$i]." / ";
	}
$low=$arr[0];

for ($i=0; $i<20; $i++){
	if ($arr[$i]<$low && $arr[$i]!=0) {
		$low=$arr[$i];
		
	}


}
echo "<br>";
echo "<p>Минималният елемент на масива различен от 0 е: ".$low."</p>";