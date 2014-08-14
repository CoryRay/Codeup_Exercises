<?php
// prints number 1 to 100
// multiples of 3 print "fizz"
// multiples of 5 print "buzz"
// mulitples of three and five print "fizzbuzz"


for ($number = 0; $number <= 100; $number++) {
	if ($number % 5 == 0 && $number % 3 == 0) {
	echo "fizzbuzz\n";
}
	elseif ($number % 5 == 0) {
		echo "buzz\n";
	}
	elseif ($number % 3 == 0) {
		echo "fizz\n";
	}
	else {
		echo "$number\n";
	}
}





?>