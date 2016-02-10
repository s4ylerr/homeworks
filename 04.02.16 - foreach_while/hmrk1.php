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







 ?>