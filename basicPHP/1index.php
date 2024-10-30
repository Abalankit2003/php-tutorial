<?php
    
    echo print "Hello world". '<br>'; // output => "Hello World1"  print returns a value so it can be used in expression whereas echo prints a string;

    $firstName = 'Ankit';

    echo 'Hello $firstName'.'<br>'; // output => "Hello $firstName" because whole string is covered in single quote. Therefore whole string will be treated as plain string.

    echo "Hello $firstName"; // output => "Hello Ankit". A variable inside a double quote will be evaluated and then will be inserted into string.


?>
