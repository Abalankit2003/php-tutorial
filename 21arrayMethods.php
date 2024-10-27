<?php

// 1. array_chunk(array $array, int $length, bool $preserveKey = false) : array

$item = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

echo '<pre>';

print_r(array_chunk($item, 1, false)); 
/*

Do not preserve the indexes
Output =>


Array
(
    [0] => Array
        (
            [0] => 1
        )

    [1] => Array
        (
            [0] => 2
        )

    [2] => Array
        (
            [0] => 3
        )

    [3] => Array
        (
            [0] => 4
        )

    [4] => Array
        (
            [0] => 5
        )

)

*/


print_r(array_chunk($item, 1, true));

/*

Preserve the indexes
Output =>

Array
(
    [0] => Array
        (
            [a] => 1
        )

    [1] => Array
        (
            [b] => 2
        )

    [2] => Array
        (
            [c] => 3
        )

    [3] => Array
        (
            [d] => 4
        )

    [4] => Array
        (
            [e] => 5
        )

)




*/

echo '</pre>';





# 2. array_combine(array $keys, array $values) : array 
# length of keys and values arrays must be same. Otherwise program will throw error.


$array1 = ['a', 'b', 'c', 'd'];
$array2 = [5, 10, 15, 20];

echo '<pre>';

print_r(array_combine($array1, $array2));

echo '</pre>';


# 3. array_filter(array $array, callable|null $callback = null, int $mode = 0) : array

// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $even = array_filter($array, fn($element) => $element % 2 === 0);
// $even = array_values($even); // This will reinitialise the indexes.
// echo '<pre>';

// print_r($even);

// echo '</pre>';

function dum($array) {
    echo '<pre>';
        print_r($array);
    echo '</pre>';
}

# 4. array_keys(array $keys, mixed $search_value, bool $strict = false) : array


$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

$keys = array_keys($array);
$value4 = array_keys($array, 4); // Returns the key of value 4

dum($keys);
dum($value4);


# 5. array_map(callable|num $callback, array &array, array ...$arrays) : array

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

// Takes two arrays and callback function takes the element of both arrays parallelly and do operation.
$arr = array_map(fn($element1, $element2) => $element1 * $element2, $array1, $array2); // prints {1*4 = 4, 2*5 = 10, 3*6 = 18}

$brr = array_map(fn($element) => $element * 2, $array1); // prints {2, 4, 6}

dum($brr);


# 6. array_merge(array ...$arrays) : array
// numberic keys will be appended and will be reindexed. while character keys will not be reindexed which means the array will be appended but the keys will not change.
$merge1 = [1, 2, 3];
$merge2 = ['a' => 4, 'b' => 5, 'c' => 6];
$merge3 = [7, 8, 9];

$mergedArray = array_merge($merge1, $merge2, $merge3); // $merge2 will be appended after merge1 and merge3 will be after merge2

dum($mergedArray);



# 7. array_reduce(array $array, callable $callback, mixed $initialValue = null) : mixed


$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],
];


dum($initialValue);
