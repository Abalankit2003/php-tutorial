<?php

declare(strict_types = 1);


# static methods or attributes are the part of class not the objects of the class. Think of it as a sharing component of all objects of the same class. 

class Vehicle 
{
    public static string $name = 'ankit';
    private static int $count = 0;
    public const OWNER = 'Rohit';
    public string $wheel = '4';

    public function __construct(string $name)
    {
        self :: $name = $name;
        self :: $count++;
    }

    public static function getCount()
    {
        var_dump(self :: $count);
    }

}

$car = new Vehicle('Sadan');
$bike = new Vehicle('Enfield');



var_dump(Vehicle :: $name); // This is how static attribute or method is accessed. 
var_dump($bike :: OWNER); // constant attributes can also be accessed like this


// You have already read about static variable and its behaviour. It behaves the same here i.e, cached the value or later use.
class DB
{
    public static ?DB $instance = null;

    private function __construct(public array $config)
    {
        echo 'Instance Created' . '<br>';
    }

    public static function getInstance(array $config) : DB
    {
        if(self :: $instance === null)
        {
            self :: $instance = new DB($config);
        }

        return self :: $instance;
    }

    public function process()
    {
        array_map(static function() {
           // When a callback is static, it no longer has access to $this. The main reason it is used is to prevent the developer from accessing $this inside a function.
        }, [1]);
    }
}

DB :: getInstance([]);
DB :: getInstance([]);
DB :: getInstance([]);
DB :: getInstance([]);
DB :: getInstance([]);


var_dump(DB :: $instance);
