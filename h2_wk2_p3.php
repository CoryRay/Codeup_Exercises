<?php

$cars = array(
    'Toyota Solara' => array(
        'year' => 2001,
        'doors' => 2,
        'color' => 'gray',
        'mileage' => 100000,
        'sunroof' => true,
        'convertable' =>false,
        'license' => 'JSRULZ',
    ),

    'Honda Odyssey' => array(
        'year' => 2004, 
        'doors' => 4,
        'color' => 'maroon',
        'mileage' => 60000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'ILUVPHP',
    ),

    'Cadillac Escalade' => array(
        'year' => 2014,
        'doors' => 4,
        'color' => 'white',
        'mileage' => 5000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'HTML5',
    ),

);

function list_cars($car_array) {
	foreach ($car_array as $model => $car_details) {
		echo "I own a $car_details[year] $model. Details below:" . PHP_EOL;
		echo "------------------------------------------------" . PHP_EOL;
		echo "Color: $car_details[color]" . PHP_EOL;
		echo "Mileage: $car_details[mileage]" . PHP_EOL;
		if ($car_details['sunroof']) {
			echo "Sunroof: Yes" . PHP_EOL;
		} else {
			echo "Sunroof:N/A" . PHP_EOL;
		  }
		if ($car_details['convertable']) {
			echo "Convertable: Yes" . PHP_EOL;
		} else {
			echo "Convertable: N/A" . PHP_EOL;
		  }
		echo "License: $car_details[license]" . PHP_EOL . PHP_EOL;
	}
}

function add_car($car_array, $model, $year, $doors, $color, $mileage, $sunroof, $convertable, $license) {
	// Should add a car to the array
	
}


list_cars($cars);

// list_cars Should output the following:
// I own a 2014 Cadillac Escalade. Details below:
// ------------------------------------------------
// 4 Door 2014 Cadillac Escalade
// Color: white
// Milelage: 5000
// Sunroof: N/A
// Convertable: N/A
// Lincense NO: HTML5
