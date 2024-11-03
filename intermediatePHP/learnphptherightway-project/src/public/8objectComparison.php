<?php

/*
 * "==" will compare two objects of same instance with same property and methods and their value.
 * "===" will compare two objects of same instance but they point to same location in storage. This operator is called identity operator.
 * varible names are stored in symbol table whereas their values are stored in zend value(zval) table. But in case of objects zval stores the object identifier and it points to some complex data structure that actually stores the object.
 */


class Invoice
{
    public function __construct(private float $amount, private string $description){}

    public function __clone() : void // when clone is called __construct() is not called. This magic method allow to hook into when you clone an object.
    {
        $this->amount = 200; // cloned object will have $amount = 200, else everything same.
    }
}


$obj1 = new Invoice(10, 'Invoice 1');
$obj2 = new Invoice(10, 'Invoice 1');

$obj3 = $obj1; // $obj3 doesn't copy the $obj1, but points to the same location where actual object is stored.

var_dump($obj1 == $obj2); // bool(true)

echo '<br>';

var_dump($obj1 === $obj2); // bool(false)

echo '<br>';

var_dump($obj1 === $obj3); // bool(true) 

echo '<br>';

# cloning => when cloning an object constructor is not called 

$obj4 = clone $obj1; // this creates a shallow copy of $obj1. 

var_dump($obj1);
echo '<br>';
var_dump($obj4);
