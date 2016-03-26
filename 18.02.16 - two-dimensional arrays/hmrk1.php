<?php 

$arr = array(array('name' => 'Tihomir Stefanov Ivanov', 'math' => 6, 'bel'=> 5, 'geo' => 6, 'phi' => 5),
			 array('name' => 'Stefan Ivanov Tihomirov', 'math' => 4, 'bel'=> 3, 'geo' => 4, 'phi' => 6),
			 array('name' => 'Ivan Tihomirov Stefanov ', 'math' => 5, 'bel'=> 6, 'geo' => 3, 'phi' => 4),
			 array('name' => 'Aleksanar Stoianov Petrov ', 'math' => 3, 'bel'=> 4, 'geo' => 5, 'phi' => 3),
			 array('name' => 'Petar Petrov Petrov', 'math' => 6, 'bel'=> 5, 'geo' => 6, 'phi' => 5), );

$count = count($arr);

$sum = 0;
for ($j=0; $j < $count ; $j++) { 
	$arr[$j]['gpa']=($arr[$j]['math']+$arr[$j]['bel']+$arr[$j]['geo']+$arr[$j]['phi'])/4;
	$sum += $arr[$j]['gpa'];
}



echo "<table border=1>";
echo "<tr>";
echo "  
		<td>Names</td>
		<td>Mathematic</td>
		<td>Bel</td>
		<td>Geography</td>
		<td>Physic</td>
		<td>GPA</td>";
echo "</tr>";

for ($i=0 ; $i < $count; $i++) { 
	echo "<tr>";
	foreach ($arr[$i] as $value) {
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
}
echo "</table>";

 ?>