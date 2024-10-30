<?php

declare(strict_types = 1);

/*

require_once "../Transaction.php";

$transaction = new Transaction(100, 'shopping'); // $transaction is holds a object data type

$transaction->addTax(8);
$transaction->applyDiscount(10);

var_dump($transaction->getAmount()); // object(Transaction)#1 (0) {["amount"]=> NULL ["description"]=> NULL ["cash"]=> NULL}

echo '<br>';

# object chaining => This helps when we need to call a sequence of methods in a particular way and bother about result the last method call. Below is an example

$amount = (new Transaction(100, 'shopping'))->addTax(8)->applyDiscount(10)->getAmount(); // We want to calulate the tax first, then discount and finally what will the total amount

var_dump($amount);

# variable class

$class = 'Transaction';

$amount2 = (new $class(100, 'shopping'))->addTax(8)->applyDiscount(10)->getAmount();

var_dump($amount2);

*/




# stdClass

$str = '{"a" : 1, "b" : 2, "c" : 3}';

$arr = json_decode($str); // key will become attributes and value will become values of that attributes. Use true as second parameter to get the array instead of object

var_dump($arr); // object(stdClass)#1 (3) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(3) }

echo '<br>';
// custom object using stdClass

$obj = new \stdClass();

$obj->a = 1;
$obj->b = 2;

var_dump($obj);
echo '<br>';


// typecasting into object data type

# 1. Array 
$arr = [10, 20, 30];

var_dump((object) $arr); //object(stdClass)#1 (3) { ["0"]=> int(10) ["1"]=> int(20) ["2"]=> int(30) }
echo '<br>';


$instance = (object) $arr;

var_dump($instance->{0}); // int(10) => wrap attribute with {}
echo '<br>';

# 2. scalar data types
$a = (object) 2;

var_dump($a); // object(stdClass)#3 (1) { ["scalar"]=> int(2) }
echo '<br>';

# 3. null data type

$b = (object) null;

var_dump($b); // object(stdClass)#4 (0) { } => an empty object