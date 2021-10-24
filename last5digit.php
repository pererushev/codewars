<?php
/*
    In the following 6 digit number:

        283910
        91 is the greatest sequence of 2 consecutive digits.

        In the following 10 digit number:

        1234567890
        67890 is the greatest sequence of 5 consecutive digits.

        Complete the solution so that it returns the greatest sequence of 
        five consecutive digits found within the number given. 
        The number will be passed in as a string of only digits. 
        It should return a five digit integer. 
        The number passed may be as large as 1000 digits.
*/

function solution(string $s): int {
    $arr = str_split($s);
    $d5 = [];
    $digits = count($arr);
    echo $digits;
    echo "<br/>";
    for($i = 0; $i < $digits; $i++){
        echo $i;
       
        for($j = $i; $j < $digits; $j++){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            echo $j;
            $d5[$i] .= $arr[$j];
        }

        echo "<br/>";
    }
    var_dump($d5);
    return max($d5);
  }

  solution('1234567898765');