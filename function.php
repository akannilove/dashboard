<?php

// declare(strict_types = 1);
// function foo(int|float $x, int|float|string $y) : mixed {
//      return $x * $y;
// }

// echo foo(5.0,'10');

// declare(strict_types=1);

// function sum(int|float $x, int|float $y, int|float ...$numbers) : int|float {
//      return $x + $y + array_sum($numbers);
// }

// $a = 6.0;
// $b = 7;
// $numbers = [50, 100, 25.98, 8, 9];

// echo sum($a, $b, ...$numbers). '<br />';


// function getValue () {
//      static $value = null;

//      if ($value === null) {
//           $value = someVeryExpensiveFunction();
//      }

//      return $value;
// }
 
// function someVeryExpensiveFunction () {
//      sleep(2);
//      echo 'Processing';
//      return 10;
// }

// echo getValue() . '<br />';
// echo getValue() . '<br />';
// echo getValue() . '<br />';

// function sum(int|float ...$numbers) : int|float {
//      return array_sum($numbers);
// }

// $x = 'sum';

// if (is_callable($x)){
//      echo sum(4.89,16,52,89,57);
// }else echo 'not callable';

require 'file.php';

/** array combine */

// $items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

// prettyPrintArray(array_chunk($items, 7, true));
/** array combine */
// $array1 = ['a', 'b', 'c', 'd', 'e'];
// $array2 = [7, 9, 10, 12, 42];

// prettyPrintArray(array_combine($array1, $array2));

/** array filter */
// $array = [1,2,3,4,5,6,7,8,9,10];

// $even = array_filter($array, fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);

// $even = array_values($even);

// prettyPrintArray($even);

/** array keys */

// $array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 20, 'e' => 25];

// $keys = array_keys($array, '25', true);

// prettyPrintArray($keys);

/** array map */
// singular array
// $array = [1,2,3,4,5,6,7,8,9,10];

// $array = array_map(fn($number) => $number*3, $array);

// prettyPrintArray($array);

// more than one array

// $array1 = ['a' => 5, 'b' => 10, 'c' => 15];
// $array2 = ['d' => 5, 'e' => 10, 'f' => 15];

// $array = array_map(fn($number1,$number2) => $number1 * $number2, $array1, $array2);

// prettyPrintArray($array);

/** array merge */

// $array2 = ['d' => 5, 'e' => 10, 'f' => 15];
// $array1 = ['a' => 5, 'b' => 10, 'c' => 15];
// $array = [1,2,3,4,5,6,7,8,9,10];

// $merged = array_merge($array2, $array1, $array);

// prettyPrintArray($merged);