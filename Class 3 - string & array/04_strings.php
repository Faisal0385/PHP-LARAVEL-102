<?php

// 1. Create simple string
$string = "Hello Simco IT"; // 2. Extract TheCodeholic into variable
$string2 = 'Solutions'; // 3. Replace TheCodeholic with variable
// echo $string . '<br>';
// echo $string2 . '<br>';

// String concatenation
// echo "Hello " . " World"; // Multiple concatenation . " and PHP";
// echo $string .' '. $string2;


// 4. String functions
// $string = "    Hello World Faisal     ";
// $string = "Hello World Faisal";
// echo $string .'<br>';

// echo strlen($string) . '<br>';
// echo "B - " . trim($string) . '<br>';
// echo "C - " . ltrim($string) . '<br>';
// echo "D - " . rtrim($string) . '<br>';
// echo "E - " . str_word_count($string) . '<br>';
// echo "F - " . strrev($string) . '<br>';
// echo "G - " . strtoupper($string) . '<br>';
// echo "H - " . strtolower($string) . '<br>';
// echo "I - " . ucfirst('hello everyone!!') . '<br>';
// echo "10 - " . lcfirst('HELLO') . '<br>';
// echo "11 - " . ucwords('hello world faisal') . '<br>';
// echo "12 - " . strpos($string, 'world') . '<br>'; // 5. Change into world
// echo "13 - " . stripos($string, 'world') . '<br>';
// echo "14 - " . substr("my name is faisal", 9) . '<br>';
// echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';
// echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>';

// $invoiceNumber = 100;
// $invoiceNumber2 = 123456;
// echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>';
// echo str_pad($invoiceNumber2, 9, '0', STR_PAD_LEFT) . '<br>';
// echo str_repeat('Hello ', 8) . '<br>';

// 6. Multiline text and line breaks
$longText = "
  Hello, my name is Zura
  I am 27,
  I love my daughter
";
// echo $longText . '<br>';
// echo nl2br($longText) . '<br>';

// 7. Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";

// $longText = "
//   Hello, my name is <b>Zura</b>
//   I am <b>27</b>,
//   I love my daughter

//   <script>
//   alert('Hello');
//   </script>
// ";


// echo "1 - " . $longText . '<br>';
// echo "2 - " . nl2br($longText) . '<br>';
// echo "3 - " . htmlentities($longText) . '<br>';
// echo "4 - " . nl2br(htmlentities($longText)) . '<br>';
// echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>';
// echo "6 - " . htmlspecialchars($longText) . '<br>';

// https://www.php.net/manual/en/ref.strings.php
