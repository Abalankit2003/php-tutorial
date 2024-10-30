<?php

// Error handling is bounded dynamically.

// error_reporting(); // Takes values {0, E_ALL, ....}. 0 => no reporting of error of any sort && E_ALL => report errors of any kind

// error_reporting(E_ALL & ~E_WARNING); // Reports all errors except warnings


// To give manual error use trigger_error();

// trigger_error('Example Error', E_USER_ERROR); // Fatal error: Example Error in C:\xampp\htdocs\CompletePHP\23errorhandling.php on line 10 and stops the execution of program

// echo 1; // This will not be printed. If at place of E_USER_ERROR, E_USER_WARNING is used then this line will be printed.

# NOTE :-> If you are using trigger_error(), then you must use any error or warning constant otherwise it will throw fatal error which is not manual but system error


# display_error() => This exposes the internal error to the user. That's why it's a good practise to use this
# error_log() => This will give a log of the error which will not be exposed to user.


# a custome error handler

function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null) {
    echo "$type : $msg in $file on $line";
}


set_error_handler('errorHandler', E_ALL); // 2 : Undefined variable $x in C:\xampp\htdocs\CompletePHP\23errorhandling.php on 32. This will overwrite any of the above error configuration

echo $x;
