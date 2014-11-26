<?php

// set default timezone
date_default_timezone_set('America/Chicago'); //sets the timezone to central time

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
    case 1:
        echo ucfirst('Monday') . PHP_EOL;
        break;
    case 2:
        echo ucfirst('tuesday') . PHP_EOL;
        break;
    case 3:
        echo ucfirst('wednesday') . PHP_EOL;
        break;
    case 4:
        echo ucfirst('thursday') . PHP_EOL;
        break;
    case 5:
        echo ucfirst('Friday') . PHP_EOL;
        break;
    case 6:
        echo ucfirst('saturday') . PHP_EOL;
        break;
    case 7:
        echo ucfirst('sunday') . PHP_EOL;
        break;
};

/*if($day_of_week == 1) {
        echo ucfirst('Monday') . PHP_EOL;
    }
    elseif ($day_of_week == 2) {
        echo ucfirst('tuesday') . PHP_EOL;
    }
    elseif ($day_of_week == 3) {
        echo ucfirst('wednesday') . PHP_EOL;
    }
    elseif ($day_of_week == 4) {
        echo ucfirst('thursday') . PHP_EOL;
    }
    elseif ($day_of_week == 5) {
        echo ucfirst('Friday') . PHP_EOL;
    }
    elseif ($day_of_week == 6) {
        echo ucfirst('saturday') . PHP_EOL;
    }
    elseif ($day_of_week == 7) {
        echo ucfirst('sunday') . PHP_EOL;
    }
*/