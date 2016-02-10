
		<?php 

$numb1 = rand(1,100);
$numb2 = rand(1,100);
$cnumb = $numb1 + $numb2;

if (!empty($_GET['submit'])) {
		$pnumb = $_GET['suggest'];
		$cnumb = $numb1 + $numb2;

		if ($cnumb == $pnumb) {
		echo 'Правилен Отговор + 1т.'
	}

}

echo $numb1. '+' .$numb2. '='.;

 ?>





