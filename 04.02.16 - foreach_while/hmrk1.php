<?php 

$arr = array('Nitherland' => 'Amterdam' ,
				'Bulgaria' => 'Sofia', 
				'Italy' => 'Rome',
				'Spain' => 'Madrid',
				'Russia' => 'Moscow');
echo "<table border=1><tr>";
foreach ($arr as $key => $value) {
	echo "<td> ".$key. "</td><td>" .$value. "</td></tr>";
}


sort($arr);

// a) City sort alpha betic order
echo "<table border=1><tr>";
foreach ($arr as $key ) {
	echo "<td> ".$key. "</td></tr>";
}
echo "</table>";

// b) Country sort alpha betic ordert 

ksort($arr);
echo "<table border=1><tr>";
foreach ($arr as $key ) {
	echo "<td> ".$key. "</td></tr>";
}



 ?>