<?php
/*
Create a function named divisors/Divisors that takes an integer n > 1 and 
returns an array with all of the integer's 
divisors(except for 1 and the number itself), 
from smallest to largest. If the number is prime 
return the string '(integer) is prime' (null in C#) 
(use Either String a in Haskell and Result<Vec<u32>, String> in Rust).

Example:
divisors(12); // => [2, 3, 4, 6]
divisors(25); // => [5]
divisors(13); // => '13 is prime'


*/
function divisors($integer) {
    $a = [];
    for ($i=2; $i < $integer; $i++) {
      if(($integer % $i) == 0) $a[] = $i;
    }
    if ($a) {
      return $a;
    } else {
      return $integer . ' is prime';
    }
  }