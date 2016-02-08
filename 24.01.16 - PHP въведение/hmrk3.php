<?php
header('content-type:text/html;charset=utf-8');
echo "Задача 3: <p>Опишете с PHP програма за изчисляване на периметъра и лицето на
различни геометрични форми.</p>";

echo "<p>Вариан 1:</p>";

$a = 18;
$b = 9;
$c = 6;
$h = 5;
$P = $a + $b + ($c*$c);
$S = (($a + $b)/2)*$h;

echo "<p>a = 18</p> <p>b = 9 </p> <p>c = 6</p> <p>h = 5</p> <p>P = a + b + c2 </p> <p>S = (a + b /2 ) . h</p>";
echo "Решение: <p>P = a + b + (c . c) = $a + $b + ($c . $c ) = $P</p>";
echo " <p>S = (a + b /2 ) . h = ($a +$b / 2) . $h =  $S</p> "	;

echo " <p>Вариан 2</p> ";

$a = rand(19, 26);
$b = rand(15, 25);
$c = rand(10, 13);
$h = rand(6, 10);
$P = $a + $b + ($c*$c);
$S = (($a + $b)/2)*$h;

echo  '<p>a = '.$a.  '</p><p>b = '.$b. '</><p>c = '.$c.'</><p>h = '.$h.'</><p>P = a + b +c2 </> <p>S = (a + b / 2) . h</> ' 	;
echo "<p>Решение:</> <p>P = a + b + (c . c) = $a + $b + ($c . $c ) = $P</p>";
echo " <p>S = (a + b /2 ) . h = ($a +$b / 2) . $h =  $S</p> "	;

echo "<p>Вариант 3</p>";

$a = rand(19, 26);
$b = rand(15, 25);
$c = rand(10, 13);
$h = rand(6, 10);
$P = $a + $b + ($c*$c);
$S = (($a + $b)/2)*$h;

echo  '<p>a = '.$a.  '</p><p>b = '.$b. '</><p>c = '.$c.'</><p>h = '.$h.'</><p>P = a + b +c2 </> <p>S = (a + b / 2) . h</> ' 	;
echo "<p>Решение:</> <p>P = a + b + (c . c) = $a + $b + ($c . $c ) = $P</p>";
echo " <p>S = (a + b /2 ) . h = ($a +$b / 2) . $h =  $S</p> "	;