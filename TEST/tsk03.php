<?php 

function matrix($x,$m,$n){
	
	$arr = array(array());

for ($i=0; $i <$m ; $i++) { 
	for ($j=0; $j < $n; $j++) { 
		$arr[$i][$j] = $x;
		$x ++;
	}
}
	echo "<table border = 1>";
for ($q=0; $q < $m; $q++) { 
	echo "<tr>";
	for ($p=0; $p <$n ; $p++) { 
		echo "<td>".$arr[$q][$p]."</td>";
	}
	echo "</tr>";
}

echo "</table>";
}

$x = rand(1,10);
$m = 4;
$n = 4;

matrix ($x, $m, $n);



/*Декларирайте функция, която отпечатва таблица с m реда и  n колони. 
В таблицата се отпечатва и числото х, което нараства с 1, на всяка клетка от таблицата по редове. 20 т.*/

