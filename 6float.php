<?php

// echo PHP_FLOAT_MAX;

// echo '<br>';

// echo PHP_FLOAT_MIN;

$x = ((0.1 + 0.2) * 10);

// echo $x; 

# if you use ceil and floor with float value. Stay cautious since last digit precision is not up to standard in php.


$a = 0.23;
$b = 1 - 0.77;

echo $a .' '. $b; // 0.23 0.23
echo '<br>';


// output => no. That's why do not use float value in comparison.
if($a == $b) {
    echo "yes";
} 

else {
    echo "no";
}


echo PHP_FLOAT_MAX * 2; // output - INF => infinity which means can't be represented.

echo is_infinite(PHP_FLOAT_MAX * 2); // check a number is infinite or not.

// similarly
echo is_finite($x);

echo is_nan($x); // nan => Not a Number.


$z = 'ankitraj';

var_dump((float)$z); // $z = 0 since ankitraj can not be changed into any legal float value. if $z = '2.33' then $z = 2.33 if type casted into float value. Even if $z = '2.33bcd' then $z = 2.33.
