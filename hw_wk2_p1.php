<?php

function days_of_month($month) {
	// date_date_set (date_create(), 2014, $month, 1);
	$stamp = strtotime($month);
	$days = date('t', $stamp);
	// $month = date('F' [ $timestamp = time()]);
	echo "$month has $days days in it.";
}

days_of_month($argv[1]);