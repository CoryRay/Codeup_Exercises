<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
    if (is_integer($thing)) {
        echo "$thing is an integer" . PHP_EOL;

    } elseif (is_float($thing)) {
        echo "$thing is a float" . PHP_EOL;

    } elseif (is_float($thing)) {
        echo "$thing is a float" . PHP_EOL;

    } elseif (is_bool($thing)) {
        echo "$thing is a boolean" . PHP_EOL;

    } elseif (is_array($thing)) {
        echo "$thing is an array" . PHP_EOL;
        foreach ($thing as $detail) {
            echo "$detail is" . $detail . PHP_EOL;
        }

    } elseif (is_null($thing)) {
        echo "$thing is null" . PHP_EOL;

    } elseif (is_string($thing)) {
        echo "$thing is a string" . PHP_EOL;

    } elseif (is_scalar($thing)) {
        echo "$thing is a scalar" . PHP_EOL;
    }
}

switch ("$things") {
    case 'value':
        # code...
        break;

    default:
        # code...
        break;
}


?>