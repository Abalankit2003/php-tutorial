<?php

$x = null;

echo $x; // prints nothing as null will be converted to string first which will return an empty string.

var_dump($x); // prints NULL;

# A variable is null in following cases:
    # assigned a constant null
    # not assigned any value
    # unset

unset($x);

var_dump($x);
