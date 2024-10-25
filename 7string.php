<?php

$x = "Ankit Raj";

echo $x[-1]; // print the last character which is 'j'.
echo $x[-3]; // print the third last character which is 'R';

// Heredoc
// A variable will be evaluated and the value will be used.

$text = <<<TEXT
Line 1 $x
Line 2
Line 3
TEXT;



echo nl2br($text); /* Line 1
Line 2
Line 3 */
// 


// Nowdoc
// everything within will be treated as plain text. If a variable is mentioned it will be treated as a plain string.
$text2 = <<<'TEXT'
Line 1 $x
Line 2
Line 3
TEXT;

echo nl2br($text2);
