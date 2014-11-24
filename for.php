<?php

fwrite(STDOUT, 'Give me a number to start counting from.' . PHP_EOL);
$start = trim(fgets(STDIN));

fwrite(STDOUT, 'Give me a number to stop at.' . PHP_EOL);
$end = trim(fgets(STDIN));

fwrite(STDOUT, 'Give me something to increment by.' . PHP_EOL);
$increment = trim(fgets(STDIN));

if (!$increment) {
    $increment = 1;
}

if (!is_numeric($start) || !is_numeric($end) || !is_numeric($increment)) {
    echo "You didn't follow directions!" . PHP_EOL;
    sleep(1);
    echo "BYE";
    exit(0);
}

for ($i=$start; $i < $end; $i+= $increment) {
    echo $i . PHP_EOL;
}