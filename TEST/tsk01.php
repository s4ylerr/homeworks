<?php 
header('content-type:text/html;charset=utf-8');


if (!isset($_POST['submit'])) {
	echo "<form action='tsk01.php' method='post'> ";
	echo "<p>Bill : ";
	echo "<input type = 'text' name='bill' ></p>  ";
	echo "<p>Mood ?";
	echo "<select name ='mood'>";
	echo "<option value='drunk'>Drunk :) </option>";
	echo "<option value='forgetful'>Forgetful </option>";
	echo "<option value= 'mad'>Mad </option></p>";
	echo "</select>";
	echo "  <input type='submit' name='submit' value='submit'>";
	echo "</form>";
}else{

	$bill = $_POST['bill'];
	$mood = $_POST['mood'];
	if ($mood == 'drunk') {
		$tip = $bill ;
		$final = $tip + $bill;
		echo "Сметка = ".$bill."лв. <br>" ;
		echo "Пешо остави бакшиш = ".$tip."лв. <br>";
		echo "Общо = " .$final;
	}elseif ($mood == 'forgetful') {
		$tip = $bill * 0.05;
		$final = $bill + $tip;
		echo "Сметка = ".$bill."лв. <br>" ;
		echo "Пешо остави бакшиш = ".$tip."лв. <br>";
		echo "Общо = " .$final."лв." ;

	}elseif ($mood == 'mad') {
		$tip = $bill * 0.001;
		$final = $bill + $tip;
		echo "Сметка = ".$bill."лв. <br>" ;
		echo "Пешо остави бакшиш = ".$tip."лв. <br>";
		echo "Общо = " .$final."лв." ;

	}


}


/*Пешо, като съвестен гражданин, винаги остава бакшиш. Проблемът е, че размерът на бакшиша зависи от настроението му. 
Когато е подпийнал, оставя бакшиш толкова, колкото е сметката му. 
Когато е притеснен и разсеян - бакшишът е 5% от сметката му.
когато е ядосан /най-вече от обслужването/, с нежелание оставя - 0,1% сметката. 
Във всички останали случаи - оставя толкова бакшиш 15% от сметката. 
Направете форма, с която да изчислявате по състоянието на Пешо, какъв ще бъде бакшишът.
Формата и php-кодът, който обработва информацията да бъдат в един файл. 
След натискане на submit-бутона, на мястото на формата да се появява съобщение -
“Пешо остави бакшиш … лева”/на мястото на точките да бъде размера на бакшиша/. 30 т.*/

 ?>