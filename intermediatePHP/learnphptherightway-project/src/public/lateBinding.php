<?php

# early-binding => compile-time resolving, and late-binding => run-time resolving

class A 
{
    protected string $name = 'A';
    protected static string $account = '11111';

    public function getName()
    {
        return $this->name;
    }

    public static function getAccount()
    {
        // return $this->account(); // $this is not allowed in static function

        return static :: $account; // It resolves the late binding of static methods. Now it will return the $account value of the calling class.
    }

    public static function make() : static // this will return the calling class. 
    {
        return new static();
    }
}

class B extends A
{
    protected string $name = 'B';
    protected static string $account = '222222';
}

$obj1 = new A();
$obj2 = new B();

echo $obj1->getName() .'<br>'; // 'A'
echo $obj2->getName() . '<br>'; // 'B'


echo $obj1 :: getAccount(). '<br>';
echo $obj2 :: getAccount() . '<br>';

var_dump($obj1 :: make());
echo  '<br>';
var_dump($obj2 :: make()) . '<br>';
