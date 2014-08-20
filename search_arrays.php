<?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

 function value_found ($a, $b) {
 	return array_search($a, $b);
 }

$results = value_found("Tina", $names);

var_dump ($results);