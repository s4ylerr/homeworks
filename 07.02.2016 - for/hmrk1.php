<?php 
header('content-type:text/html;charset=utf-8');
$temp = array();
$sum = 0;

for ($i=0; $i <90; $i++) { 
$temp[$i]=rand (-10, 40);
	$sum += $temp[$i];
	

}
$sr = $sum/90;

echo "Средната температура е " .$sr;
sort($temp);

/*echo "<pre>"; //за проверка 
sort($temp);
print_r($temp);
echo "</pre>";*/
$j=0;

	echo '<p>5-те най-ниски температури: </p> ';
while ( $j < 5) {
	echo ' / ' .$temp[$j];
	$j++;
	
}
$t=85;
echo "<p>";

	echo '<p> 5-те най-високи температури: </p>';

while ($t<= 89) {
	echo ' / ' .$temp[$t];
	$t++;
}
echo "</p>";
 ?>