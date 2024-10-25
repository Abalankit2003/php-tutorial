<?php


declare(strict_types=1);

# spread opeator works same as it does in javascript.
function sum(int|float $x, int|float $y, int|float ...$numbers) : int|float {
    return $x + $y + array_sum($numbers);
}

$a = 6.0;
$b = 7;

echo sum($a, $b, 100, 25.3, 78, 9, 3, 9). '<br>';


# named argument

function difference(int|float $x, int|float $y) : int|float {
    return $x - $y;
}


difference(x : $a, y : $b); // parameters x will get $a value and y will get $b value.

difference($a, y : $b); // It is same as above

