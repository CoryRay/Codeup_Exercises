<?php

// array of people
// each should have 'name', 'phone number' and 'address'.
// 'name' should be an associative array with keys 'first' and 'last'

$counter = 1;
$people = [
	[
		'first' => 'John',
		'last' => 'Doe',
		'phoneNumber' => 2105551234,
		'address' => '123 Sesame Street'
	],
	[
		'first' => 'Cory',
		'last' => 'Rodriguez',
		'phoneNumber' => 2106931234,
		'address' => 'Trumbo Rd.'
	],
	[
		'first' => 'Keyser',
		'last' => 'Soze',
		'phoneNumber' => 9952102345,
		'address' => 'New York'
	]
];

foreach ($people as $person) {
	echo "$counter. $person[first] $person[last]" . PHP_EOL;
	echo "\tPhone: $person[phoneNumber]" . PHP_EOL;
	echo "\tAddress: $person[address]" . PHP_EOL . PHP_EOL;
	$counter++;
}