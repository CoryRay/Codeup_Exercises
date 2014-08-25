<?php

function days_of_month($month) {
	date_date_set (date_create(), 2014, $month, 1);
	$days = date('t' /*[ $timestamp = time()]*/);
	$month = date('F' /*[ $timestamp = time()]*/);
	echo "$month has $days days in it.";
}

days_of_month(3);