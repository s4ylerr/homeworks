

<?php 
header('content-type:text/html;charset=utf-8');


$a = rand(1, 100000);

if ($a% 3 == 0) {
	if ($a% 5 == 0) {
		if ($a% 7 == 0 ) {
			echo $a. "  се дели на 3, 5 и 7";
		} else {
			echo $a. "  се дели на 3 и 5";
		}
	} else {
		echo $a. "  се дели на 3";
	}
} elseif ($a% 5 == 0) {
	if ($a% 7 == 0) {
		echo $a. "  се дели на 5 и 7";
	}else {
		echo $a. "  се дели на 5";
	}
} elseif ($a% 7 == 0) {
	if ($a% 3 == 0) {
		echo $a. "  се дели на 3 и 7";
	}else {
		echo $a. "  се дели на 7";
	}
} else {
	echo "Не се дели на 3,5 и 7";
}

?>