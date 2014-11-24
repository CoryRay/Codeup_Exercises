<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {
    if (is_int($value)) {
        echo "$value is an integer!" . PHP_EOL;
    } elseif (is_string($value)) {
        echo "$value is a string!" . PHP_EOL;
    } elseif (is_bool($value)) {
        echo "\$value is a boolean!" . PHP_EOL;
    } elseif (is_float($value)) {
        echo "$value is a float!" . PHP_EOL;
    } elseif (is_array($value)) {
        echo "\$value is an array:" . PHP_EOL;

        foreach ($value as $arr) {
            echo $arr . PHP_EOL;
        }
    }
    elseif (is_null($value)) {
        echo "\$value is NULL" . PHP_EOL;
    }
}

foreach ($things as $value) {
    if (is_scalar($value))
        echo "$value is a scalar" . PHP_EOL;
}

foreach ($things as $key => $value) {
    echo "\$things has a key of $key and a value of $value" . PHP_EOL;
}

?>