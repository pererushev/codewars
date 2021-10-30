<?php
/*
    Create a function that takes a Roman numeral as its argument and 
    returns its value as a numeric decimal integer. You don't need to validate 
    the form of the Roman numeral.

Modern Roman numerals are written by expressing each decimal digit of the number to be
 encoded separately, starting with the leftmost digit and skipping any 0s. So 1990 is 
 rendered "MCMXC" (1000 = M, 900 = CM, 90 = XC) and 2008 is rendered "MMVIII" (2000 = MM, 8 = VIII). 
 The Roman numeral for 1666, "MDCLXVI", uses each letter in descending order.

Example:

solution('XXI'); // should return 21
Help:

Symbol    Value
I          1
V          5
X          10
L          50
C          100
D          500
M          1,000

*/

function solution ($roman) {
    
    $arab = 0;
    $roman = str_split($roman);
    
    for ($i = 0; $i <= count($roman); $i++) {

        switch ($roman[$i]) {
            
            case 'I':
                if ($roman[$i + 1] == 'V') {
                    $arab += 4;
                    $i++;
                } elseif ($roman[$i + 1] == 'X') {
                    $arab += 9;
                    $i++;
                } else {
                    $arab += 1;
                }
                break;

            case 'V':
                $arab += 5;
                break;

            case 'X':
                if ($roman[$i + 1] == 'L') {
                    $arab += 40;
                    $i++;
                } elseif ($roman[$i + 1] == 'C') {
                    $arab += 90;
                    $i++;
                } else {
                    $arab += 10;
                }
                break;

            case 'L':
                $arab += 50;
                break;

            case 'C':
                if ($roman[$i + 1] == 'D') {
                    $arab += 400;
                    $i++;
                } elseif ($roman[$i + 1] == 'M') {
                    $arab += 900;
                    $i++;
                } else {
                    $arab += 100;
                }
                break;

            case 'D':
                $arab += 500;
                break;

            case 'M':
                $arab += 1000;
                break;
        }
       
    }

    return $arab;
}

echo solution('MMXVII');