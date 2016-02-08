<?php 
header('content-type:text/html;charset=utf-8');


$time1 = date('h:m');
$time2 = date('h:m a');
$time3 = date('h:m:s');

echo "Вариант 1";
echo "<p> $time1 </p>";
echo "<p> Вариант 2 </p>";
echo "<p> $time2 </p>";
echo "<p>Вариант 3</p>";
echo "<p> $time3 </p>";