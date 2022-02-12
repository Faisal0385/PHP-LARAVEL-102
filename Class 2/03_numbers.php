<?php

// 1. Declaring numbers
    // Declare 2 int numbers and one float number
    $a = 5;
    $b = 3;
    $c = 1.2;

// 2. Arithmetic operations (+, -, *, /, %)

    // echo $a + $b .'<br>';
    // echo $a - $b .'<br>';
    // echo $a * $b .'<br>';
    // echo $a / $b .'<br>';
    // echo $a % $b .'<br>';


// 4. Assignment with math operators


// 5. Increment operator

    // $a = $a + 1;
    // echo $a;

    // $b = $b + 1;
    // echo $b;

    // echo $a . '<br>';

    // $a++;
    // echo $a++;

    // echo $a . '<br>';
    // echo $a++ . '<br>';
    // echo ++$a;

// 6. Decrement operator

    // $a = $a - 1;
    // echo $a;
    // $a--;
    // echo $a;

    // echo $a-- . '<br>';
    // echo $a . '<br>';
    // echo --$a;


// 7. Number checking functions

// var_dump(is_float($a));
// var_dump(is_int($b));
// var_dump(is_float($c));

// echo gettype('3.14') . '<br>';
// var_dump(is_numeric('3.14')) . '<br>';
// var_dump(is_numeric('5')). '<br>';
// var_dump(is_numeric('3g.14'));


// 8a. Conversion
    // Take a string number
    // $strNum = '12.34';
    // $strNum = '12.3g4';
    // echo gettype($strNum);
    // $number = (float) $strNum;
    // $number = (int) $strNum;
    // echo $number;
    // echo gettype($number);

// 8b. Use floatval(), (int), intval()
    // echo floatval($strNum) . '<br>';
    // echo intval($strNum);

// 9. Number functions

    $num = -15;

    // echo abs($num) . '<br>';
    // echo abs(-14) . '<br>';
    // echo pow(2,3) . '<br>';
    // echo max(2,7,3,4) . '<br>';
    // echo min(2,3,0) . '<br>';
    // echo floor(4.8) . '<br>';
    // echo ceil(4.4) . '<br>';
    // echo round(4.5) . '<br>';


// 10. Formatting numbers

// $number = 123451123.6789;

// echo number_format($number, 3, '.', ',');



// https://www.php.net/manual/en/ref.math.php