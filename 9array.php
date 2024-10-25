<?php


// Arrays are key-value pairs. If keys are not user-defined then normal 0-based indexing is given for the keys in PHP.
/* 

    1. Indexed arrays: Use numeric indexes to access elements.
    2. Associative arrays: Use string keys to access elements.
    3. Multidimensional arrays: Contain one or more arrays as elements.

*/


$programmingLanguage = ['PHP', 'Java', 'Python'];


// Both method prints the array
print_r($programmingLanguage); // Result => Array ( [0] => PHP [1] => Java [2] => Python )
echo '<br>';
var_dump($programmingLanguage); // Result => array(3) { [0]=> string(3) "PHP" [1]=> string(4) "Java" [2]=> string(6) "Python" }



// Enclose print_r with <pre></pre> for better formatting.
echo '<pre>';
    print_r($programmingLanguage);
echo '</pre>';



// isset checks whether an index in an array is set or not
var_dump(isset($programmingLanguage[1])); // bool(true)

var_dump(array_key_exists('C', $programmingLanguage)); // checks that key exists or not




// print the size of array
echo count($programmingLanguage);


# pushing an element in an array.


// A way to push one element at the end of the array
$programmingLanguage[] = 'C++';

echo '<pre>';
    print_r($programmingLanguage);
echo '</pre>';

// push multiple elements at the end of the array
array_push($programmingLanguage, 'Go', 'C', 'Swift');

echo '<pre>';
    print_r($programmingLanguage);
echo '</pre>';



# php allows an integer or an string to be used in key.

$array = [true => 'a', 1 => 'b', 1 => 'c', 1.8 => 'd'];

echo '<pre>';
    print_r($array); // [1] => d since true and 1.8 will be treated as 1. 
echo '</pre>';


# popping elements from an array


echo array_pop($array); // pop out last element from the array

echo array_shift($array); // pop out first element from the array and array is reindexed.

unset($array[1], $array[2], $array[3]); // will destroy the element from the array with the key mentioned. Be careful with unset
