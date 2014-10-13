<?php

function area_of_circle($radius)
{
	return pi() * pow($radius, 2);
}

function area_of_donut($outer, $inner)
{
	return area_of_circle($outer) - area_of_circle($inner);
}

echo area_of_donut(15, 5);