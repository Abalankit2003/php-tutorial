<?php

$isComplete = false;

# integers 0 -0 = false
# floats 0.0 -0.0 = false
# '' = false 
# '0' = false
# [] = false
# null = false


echo $isComplete; // return '' when value is false. return 1 when value is true. This happens because echo prints a string so true is equivalent to '1' and false is ''.


// is_bool gives whether a variable holds boolean value or not. Return '1' or '';
echo is_bool($isComplete);

var_dump(is_bool($isComplete));
