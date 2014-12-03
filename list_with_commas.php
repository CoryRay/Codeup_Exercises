<?php

/*
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

$tony = array_pop($physicists_array);

$tony = "and " . $tony;

array_push($physicists_array, $tony);

$famous_fake_physicists = (implode(', ', $physicists_array));

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";
*/

// Converts array into list n1, n2, ..., and n3
function humanized_list($string)
{
    $array = explode(', ', $string);

    $last_element = "and " . end($array);

    array_pop($array);

    array_push($array, $last_element);

    $famous_fake_physicists = (implode(', ', $array));

    return $famous_fake_physicists;

}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

?>