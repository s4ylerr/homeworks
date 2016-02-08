<?php
header('content-type:text/html;charset=utf-8');


$date1 = date ('d/M/Y');
$date2 = date ('d/m/y');
$date3 = date ('Y-m-d');

echo "Вариант 1";
echo "<p> $date1 </p>";

echo "Вариант 2";

echo "<p> $date2 </p>";

echo "Вариант 3";

echo "<p> $date3 </p>";