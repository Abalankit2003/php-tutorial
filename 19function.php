<?php


    // $i = 3;
    

    # anonymous function. They are expressions so needs to be end with a semicolon;
    # To use global variables in anonymous function, we take advantage of use method.
    // $sum = function (int|float ...$numbers) use ($i) : int|float  { // use ($i) is used for accessing $i from the parent scope.
    //     echo $i . '<br>';
    //     return array_sum($numbers);
    // };

    // echo $sum(1,2,3,4,5,6,7,8,9,10).'<br>';


    # variable function

    // function sum2(int|float ...$numbers) : int|float  { 
    //     return array_sum($numbers);
    // };

    # $x points to sum2 function.
    // $x = 'sum2';

    # when php detects a function call after a varible name it calls the function which the varible points.
    // echo $x(2,3,5);


    # callable function
    // $array = [1, 2, 3, 4];
    // $arr = array_map(function($element){}, $array); // Syntax of a callable function.
    

    # One way
    /*

    $arr = array_map(function($element) {
        return $element * 2;
    }, $array);

    */

    # second way

    /*

        $x = function($element) {
            return $element * 2;
        };

        $arr = array_map($x, $array);

    */

    # third way

    /*
        function foo($element) {
        
            return $element * 2;
        }

        $arr = array_map('foo', $array);

    */



    // echo '<pre>';

    // print_r($array);

    // print_r($arr);

    // echo '</pre>';


    # A complex example of callable function

    // function foo($element) {
    //         return $element * 2;
    //     };

    // $sum = function (callable $callback,  int|float ...$numbers): int|float  { 
    //     return $callback(array_sum($numbers));
    // };



    // echo $sum('foo', 2, 3, 5); // output => 20


    # arrow function
    // fn($parameter) => $parameter * 2; // Syntax
    // arrow function does need 'use' to access parent scope varible. It can directly use that. In PHP, arrow function can have only single line expression. It may have an array within which multiple other things may be present. But It cannot have more than one expressions.


    $arr = [2, 3, 5, 6];

    $arr2 = array_map(fn($element) => $element * $element, $arr);


    echo '<pre>';

    print_r($arr);

    print_r($arr2);

    echo '</pre>';
