<?php

$x = 5;

function foo() {
    global $x; // Access the global variable
    $GLOBALS['x']; // PHP stores global variables and their values in associative arrays.

    echo $x; // 5

    $GLOBALS['x'] = 10; // change value of $x to 10 from 5;
}

foo();

echo '<br>' . $x . '<br>'; // 10



# global variables Vs static variables

# global => They are destroyed beyound their scopes.
# static => They retain their value even after their scopes.
# Below is an example showing both types of variables.


function getValue() {
    // $value = someVeryExpensiveFunction(); // global variable. For each function call $value will be evaluated and once function call completes its value will be destroyed.

    static $value = null; // Static variable. Its value will not be destroyed after function return its result. That's why in the output 'Processing' is printed once since someVeryExpensiveFunction() is called once and the value is cached by $value.

    if($value === null) {
        $value = someVeryExpensiveFunction();
    }

    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);

    echo 'Processing';

    return 10;
}

echo getValue(). '<br>';
echo getValue(). '<br>';
echo getValue(). '<br>';


/* 

Output of above three functions when $value is globally declared.
After waiting for 6 seconds in total.
Processing10
Processing10
Processing10


Output of above three functions when $value is static variable
After waiting for 2 second only.
Processing10
10
10

*/
