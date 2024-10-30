<?php

# php is a dynamically typed language which means variable data type checking happens at runtime. Whereas Cpp is a statically typed language which means data type checking happens at compile time.

# 4 Scalar types

    # bool - true/false
    # int - 1, 2, 0, 5 (no decimal)
    # float - 1.2, 2.9, 3.33
    # string - 'Ankit', 'Raj', 'reach'


    $completed = true;
    $intValue = 3;
    $floatValue = 3.3;
    $name = "Ankit";


    echo gettype($completed); // print => boolean similarly integer, double and string;
    var_dump($completed); // print => Boolean(true) similary integer(3), double(3.3) and string(5)(Ankit);
    var_dump($name);



# 4 Compount types

    # array
    # object
    # callable
    # iterable


    $companies = [3, 5, 5.3, 'a', 'raj'];
    print_r($companies); // print => Array ( [0] => 3 [1] => 5 [2] => 5.3 [3] => a [4] => raj )


# 2 Special types

    # resource
    # null
