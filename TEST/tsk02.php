<?php 
header('content-type:text/html;charset=utf-8');
/* Budget = B
   Profit = P
   Tickets sale = TS */

$movie = array( array('Name' => 'Man of steel',          'Country' => 'USA',    'IMBD' => '8', 'b' => '225 000 000' , 'p' => '292 000 000', 'ts' => '2 000 000' ),
			   array('Name' => 'Deadpool',              'Country' => 'Canada', 'IMBD' => '9', 'b' => '58 000 000' ,  'p' => '316 000 000', 'ts' => '3 000 000' ),
			   array('Name' => 'Avengers:AOU',          'Country' => 'USA',    'IMBD' => '7', 'b' => '250 000 000' , 'p' => '459 000 000', 'ts' => '4 000 000' ),
			   array('Name' => 'The Dark Knight Rises', 'Country' => 'USA',    'IMBD' => '9', 'b' => '250 000 000' , 'p' => '448 000 000', 'ts' => '5 000 000' ),
			   array('Name' => 'Star Wars: Episode 7 ', 'Country' => 'USA',    'IMBD' => '10', 'b' => '200 000 000' , 'p' => '929 000 000', 'ts' => '10 000 000' ));


//var_dump($movie);

$count = count($movie);
$sum=0;

for ($i=0; $i < $count ; $i++) { 
	$movie[$i]['ir'] = ( $movie[$i]['p'] - $movie[$i]['b']) / ( $movie[$i]['IMBD'] * $movie[$i]['IMBD']);
	$sum += $movie[$i]['ir'];

}

echo "<table border=1>";
echo "<tr>";
echo "<td>Name</td>
	  <td>Country</td>
	  <td>IMBD</td>
	  <td>Budget</td>
	  <td>Profit</td>
	  <td>Tickets sale</td>
	  <td>IR</td>";


echo "</tr>";

for ($j=0; $j < $count ; $j++) {
	echo "<tr>"; 
	foreach ($movie[$j] as $value) {
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
}
echo "</table>";

$sum_avg = $sum/$count;
echo "Средния индекс на реализация е :  ".$sum_avg;


$min = $movie[0]['ir'];
$index_min = 0;
for ($k=1; $k < $count ; $k++) { 
	if ($min > $movie[$k]['ir']) {
		$min = $movie[$k]['ir'];
		$index_min = $k;
	}
}
echo "<p>Най-нисък индекс на реализация : ".$movie[$index_min]['Name'].";</p>";






/*Запазете в масив информация за 5тте топ-филма, по ваша преценка. Информацията да съдържа -
-	Заглавие на филма
-	Държава на произход
-	IMBD индекс/IMBD/
-	Разходи за продуцирането на филма/Р/
-	Приходи от продажба на билети/П/
-	Брой продадени билети/Б/
Изчислете за всеки от филмите индекс на реализация/ИР/ и го добавете към масива, по формулата 
-	ИР = (П-Р)/IMBD2
Изчислете средната стойност на ИР за всички филми и го отпечатйте в браузъра.
Намерете филма с най-нисък ИР и отпечатайте заглавието му в браузъра
Отпечатайте информацията, която имате в масива, в браузъра под формата на таблица.
/Забележка - информацията за филмите и самите филми може да е съвсем произволна, не е нужно да отговаря на действителността/ 50 т.*/


 ?>