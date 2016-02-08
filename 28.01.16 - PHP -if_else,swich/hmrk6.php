<?php 
/*Да се напише програма, която подрежда 5 числа в нарастващ ред*/
$a = rand(1, 20);
$b = rand(1, 20);
$c = rand(1, 20);
$d = rand(1, 20);
$e = rand(1, 20);

$numbers = array('1' => $a ,'2' => $b , '3' => $c , '4' => $d , '5' => $e ,  );

echo "<pre>";
print_r($numbers);
echo "</pre>";

asort($numbers);

echo "<pre>";
print_r($numbers);
echo "</pre>";
 ?>