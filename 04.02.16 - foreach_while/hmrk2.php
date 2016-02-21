<?php 

$users = array( 'Sofia'    => 31, 
				'Jacob'   => 41,
				'William' => 39,
				'Ramesh'  => 40,);

// a)
echo "<p>A</p>";
asort($users);
echo "<pre>";
print_r($users);
echo "</pre>";

// b)
echo "<p>B</p>";
ksort($users);
echo "<pre>";
print_r($users);
echo "</pre>";

// c)
echo "<p>C</p>";
arsort($users);
echo "<pre>";
print_r($users);
echo "</pre>";

// d)
echo "<p>D</p>";
krsort($users);
echo "<pre>";
print_r($users);
echo "</pre>";

 ?>