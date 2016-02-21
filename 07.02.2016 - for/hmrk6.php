<?php 

$a = 1;
$col = 9;
echo "<table border=1>";
for ($i=1; $i <= 10; $i++) { 
	echo "<tr>";
	for ($j=1; $j <= $i; $j++) {
	    $a = $i*$j; 
		echo "<td >" .$i. '*' .$j.' = '. $a.'</td>';

	}
		if ($col != 0) {
			echo "<td colspan = $col> </td>";
		}

 		$col --;	
		echo "</tr>";

}
echo "</table>";

 ?>