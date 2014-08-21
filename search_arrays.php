<?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

 function value_found ($a, $b) {
return array_search($a, $b) === FALSE ? FALSE : TRUE;
/* 	if (array_search($a, $b) === FALSE) {
 		return FALSE;
 	} else {
 		return true;
 	}
*/}

 function comparison($array1, $array2) {
 	foreach ($array1 as $) {
 		# code...
 	}
}

$results = value_found("Dana", $names);

$compare_results = comparison($names, $compare);

var_dump ($compare_results);