<?php

for ($num = 1; $num <= 100; $num++) {
	echo $num;
	if ($num % 2 !== 0) {
		echo PHP_EOL;
		continue;
	}
	echo " - Even\n";
}

for ($i = 1; $i <= 100; $i++) {
	echo $i . PHP_EOL;
	if ($i == 10) {
		break;
	}
}

?>