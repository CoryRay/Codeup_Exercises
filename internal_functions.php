<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
// TEST: If var $nothing is set, display '$nothing is SET'
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
// TEST: If var $something is set, display '$something is SET'
function set_or_empty($a)
{
	if (isset($a)) {
		echo "Variable is set" . PHP_EOL;
	} else {
		echo "Variable is empty" . PHP_EOL;
	}
	return;
}

// Serialize the array $array, and output the results
// Unserialize the array $array, and output the results

function serial($b)
{
	var_dump($b) . PHP_EOL;
	serialize($b);
	var_dump($b) . PHP_EOL;
}

// echo set_or_empty($nothing);
// echo set_or_empty($something);

echo serial($array) . PHP_EOL;
?>