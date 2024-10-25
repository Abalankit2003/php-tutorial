<?php

declare(strict_types=1);

# You can invoke function before declaration.

echo foo(); // output => 'Hello World!'

function foo() {
    return 'Hello World!<br>';
}

# If function is declared under some block of code, then you can invoke that function only and only after execution of that block of code. Below is an example.

// echo foo2(); // runs into error

if(true) {
    function foo2() {
        return 'How are you?<br>';
    }
}

echo foo2(); // output => How are you?

# If you have nested functions. So you have to go from parent to child in order to invoke a nested function. Below is an example.

function a() {
    echo "a";

    function b() {
        echo "b";
    }
}

a(); // Output => a and will declare function b();
b(); // Output => b

# if a funtion return nothing like all of the above functions. Their default return type is NULL;

# we can also declare the return types of function.

function c() : int { // function is expecting an integer value return. Similarly ?int => null or integer, int|float|bool => intger or float or boolean value. Use this with strict_types.
    return 1;
}


# named parameter 
# piped character is '|'. Example is int|float|bool

function d(int $a, int $b) : int {
    return $a * $b;
}


d(3,5); // 15;
d('3',5); // Error
