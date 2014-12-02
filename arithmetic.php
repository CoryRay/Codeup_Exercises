<?php

$a = $argv[1];
$b = $argv[2];

function error_numeric()
{
    echo "Error! Arguments must be a numeric value!" . PHP_EOL;
}

function add($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        error_numeric();
    } else {
        return $a + $b . PHP_EOL;
    }
}

function subtract($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        error_numeric();
    } else {
        return $a - $b . PHP_EOL;
    }
}

function multiply($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        error_numeric();
    } else {
        return $a * $b . PHP_EOL;
    }
}

function divide($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        error_numeric();
    } elseif ($b == 0) {
        return FALSE;
    } else {
        return $a / $b . PHP_EOL;
    }
}

function modulus($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        error_numeric();
    } elseif ($b == 0) {
        return FALSE;
    } else {
        return $a % $b . PHP_EOL;
    }
}

echo add($a, $b);

echo subtract($a, $b);

echo multiply($a, $b);

echo divide($a, $b);

echo modulus($a, $b);