<?php

 $a = 5;
 $b = 10;
 $c = '10';

 if ($a < $b) {
     // output the appropriate result
     echo "$a is less $b\n";
 }

 if ($b > $a) {
     // output the appropriate result
     echo "$b is is greater than $a\n";
 }

 if ($b >= $c) {
     // output the appropriate result
     echo "$b is is greater than or equal to $c\n";
 }

 if ($b <= $c) {
     // output the appropriate result
     echo "$b is less than or equal to $c\n";
 }

 if ($b == $c) {
     // output the appropriate result
     echo "$b is equal to $c\n";
 }

 if ($b === $c) {
     // output the appropriate result
     echo "$b is identical $c\n";
 }

 // output the appropriate result
 if ($b != $c) {
     echo "$b is not equal to $c\n";
 }

 // output the appropriate result
 if ($b !== $c) {
     echo "$b is not identical to $c\n";
 }

 ?>