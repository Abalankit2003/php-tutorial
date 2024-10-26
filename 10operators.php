<?php


# Arithmetic Operators

    $x = +'10';// Convert a string to corresponding integer.
    $y = 0;
    $z = 2;

    var_dump($x); // int(10);
    var_dump($x % $y); // Give error
    var_dump(fdiv($x, $y)); // float(INF);

    var_dum($x ** $y); // $x raised to power $y.
    

    $a = 12.29;
    $b = 5.3;

    var_dump($a % $b); // 2 since $a will be 12 and $b will be 5 before the execution of operation. The sign of the result is taken from the number which is being divided.
    var_dum(fmod($a, $b)); // This will retain the actual float values of the variable.



# comparison Operator

    $a = 5;
    $b = 5;

    // var_dump($a <=> $b); // return {-1, 0, 1} when $a < $b , $a == $b and $a > $b respectively.
    var_dump($a <> $b); // same as $a != $b

    # null coalision

    $u = null;
    $v = $u ?? 'Hello'; // result to $u if $u !== null else 'Hello'

    var_dump($v);

# increment and decrement operator

    $a = null;

    echo ++$a; // 1
    echo --$a; // prints nothing

    $b = 'abc';

    echo ++$b; // abd
    echo --$b; // abc

    $c = true;

    echo ++$c; // 1
    echo --$c; // 1
