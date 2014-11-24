<?php
// prints number 1 to 100
// multiples of 3 print "fizz"
// multiples of 5 print "buzz"
// mulitples of three and five print "fizzbuzz"


for ($i = 0; $i <= 100; $i++) {

    if ($i % 5 == 0 && $i % 3 == 0) {
        echo "fizzbuzz" . PHP_EOL;

    } elseif ($i % 5 == 0) {
        echo "buzz" . PHP_EOL;

    } elseif ($i % 3 == 0) {
        echo "fizz" . PHP_EOL;

    } else {
        echo $i . PHP_EOL;
    }
}

?>