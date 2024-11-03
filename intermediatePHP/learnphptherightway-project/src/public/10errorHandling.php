<?php

/*

    Heirarchy of error handling class/interface
    - Throwable
        - Error
            - Sub-error 
        - Exception
            - sub-exception


    try{} catch{} finally{} => finally is optional. But if finally is used then it has return value and either try or catch also has return value, then whole try catch will return the return value of "finally".

    syntax of custom exception throwing => throw new exceptionName();
*/


// Global exception handling. This is essential because if some exception handling has logical problem, then this will catch the error. 
set_exception_handler(function(\Throwable $e) {
    var_dump($e->getMessage());
});


echo array_rand([], 1); // string(50) "array_rand(): Argument #1 ($array) cannot be empty"
