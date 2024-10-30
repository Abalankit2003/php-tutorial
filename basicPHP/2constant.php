<?php

// Constants are defiend using define('VARIABLE_NAME', 'value');
// runtime
define('PI', '7.14');


// constants don't have '$' symbol before it.
echo PI;

// check a constant is defined or not.
echo defined('PI'); // return {1, 0}

// // compile time
const FIRST_PRIME = 2;

echo FIRST_PRIME;

// // magic constants. There are 9 in php.
// echo __LINE__; // Line no at which this line was written.


// variable variables


$foo = "Ankit";


// $foo will be replace by $foo value i.e, 'Ankit' so new variable will be $Ankit which will have value 'Raj'.
$$foo = 'Raj';

echo "$foo "."$Ankit<br>"; // result => Ankit Raj
echo "$foo $Ankit"; // result => Ankit Raj
echo "$foo $$foo"; // result => Ankit Raj


/* '?>' this is omitted in case whole code is php only. */
