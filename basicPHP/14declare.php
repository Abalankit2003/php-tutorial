<?php
declare(strict_types=1); // enables what 'use strict' does in js. It starts to following statically types language. An example is the sum function.

// declare - ticks

// function onTick() {
//     echo 'Tick<br>';
// }

// register_tick_function('onTick');

// declare(ticks = 3);

// $i = 0;
// $length = 10;

// while($i < $length) {
//     echo $i++ . '<br>';
// }

/*

Output =>

Tick
0
1
2
Tick
3
4
5
Tick
6
7
8
Tick
9

*/

// declare - encoding

# ticks and encoding has no such use case in general programming.

// declare = strict_types


function sum(int $fistOperand, int $secondOperand) {
    return $fistOperand + $secondOperand;
}

echo sum('3',5); // Error since first argument expects an integer value.

# NOTE : -> If sum is being called from other file, then declare(strict_types=1) should be used in that file at the start so that strict checking can be done. Otherwise PHP will do the typecasting for us.
