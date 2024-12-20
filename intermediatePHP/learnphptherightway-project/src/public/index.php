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

// $json = '{"a" : 4, "b" : 5, "c" : 6}';

// $obj = json_decode($json);

// class T
// {
//     public int $a = 4, $b = 5, $c = 7;

//     // public function __construct(){}

//     public function getValue() : int
//     {
//         return $this->a;
//     }

// }

// $t = new T();



// // $str = json_encode($obj); // converts an object properties into corresponding key-value pair in json format; 
// $str = json_encode($t); // converts 

// print_r($obj);
// echo PHP_EOL;
// echo $str;


// class T
// {
//     public string $name = 'ankit';
// }

// $obj = new T();
// $obj->b = 3; // This assigns a property on $obj.
// echo $obj->b;
// var_dump($obj);
/*


# stdClass

$str = '{"a" : 1, "b" : 2, "c" : 3}';

$arr = json_decode($str); // key will become public attributes and value will become values of that attributes. Use true as second parameter to get the array instead of object

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

*/

/*

# namespace

// namespace is used when in global scope there are multiple same name variables, functions or classes exist altogther
require_once '../2constructorPromotion.php';
require_once "../3namespace.php";

var_dump(new src\namespace\Profile()); // src\namespace is a namespace which is user-defined, this points to the file namespace. Go to 3namespace.php to verify


use src\promotion\Profile; // This is alternate way to import other namespace in global namespace. This imports Profile class from the namespace defined by src\promotion. If you want to use const or function then use "const" or "function" after use.

var_dump(new Profile());

*/

/*

# alias

require_once '../App/2constructorPromotion.php';
require_once "../App/3namespace.php";

// spl_autoload_register(function($class) { // It removes the overhead of require multiple fully-qualified class file. This requires the file using the namespace naming and a little twiking.
//     $path = __DIR__ . '../' . lcfirst(str_replace('\\', '/', $class)). '.php';

//     require $path;
// });

use src\namespace\Profile; // src\namespace\{class1, class2, class3} => to use multiple classes from a single namespace
use src\promotion\Profile as promotionProfile; // promotionProfile is alias


$namespaceProfile = new Profile();

$promotionProfile = new promotionProfile();

var_dump($namespaceProfile);
echo '<br>';
var_dump($promotionProfile);

*/

// Before we continue to autoloader, let's discuss about composer. It is a dependency manager for PHP just like npm(package manger) for node.
// Package Manager - is used to configure system, ie to setup your development environment and with these settings you can build many projects.

// Dependency Manager - Is specific to project. You manage all dependencies for a single project and those dependencies are going to be saved on your project. When you start another project you should manage your dependencies again.

# autoloader => This comes from uuid dependecy

// require __DIR__ . '/../vendor/autoload.php';

/*

require __DIR__ . '/../vendor/autoload.php';

// use check\Profile; 

use check\{validator, checking,Profile};
// // use check\validator;

$obj1 = new checking();
$hello = new validator();

$namespaceProfile = new Profile();

// var_dump(Profile :: STATUS_PAID); // Access const attributes via class name only if it is public
// var_dump($namespaceProfile :: STATUS_PAID); // Access const attributes via object
// var_dump(Profile :: class); // "App\myNamespace\Profile"


$namespaceProfile->setStatus('paid');

var_dump($namespaceProfile);

// $id = new \Ramsey\Uuid\UuidFactory();

// echo $id->uuid4();

*/


/*

# routing in PHP

require __DIR__ . '/../vendor/autoload.php';

// session_start(); // you have to start it to access $_SESSION superglobal. This should be at the top of the code i.e, before sending any header

require '../app/router.php';
require '../app/Controllers/HomeController.php';
require '../app/Controllers/InvoiceController.php';

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');


$router = new App\Router();


try{
    $router
        ->get('/', [App\Controllers\HomeController :: class, 'index'])
        ->get('/download', [App\Controllers\HomeController :: class, 'download'])
        ->get('/invoice', [App\Controllers\InvoiceController :: class, 'index'])
        ->get('/invoice/create', [App\Controllers\InvoiceController :: class, 'create'])
        ->post('/invoice/store', [App\Controllers\InvoiceController :: class, 'store'])
        ->post('/upload', [App\Controllers\HomeController :: class, 'upload']);

    echo $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

} catch(App\Exceptions\RouteNotFoundException $e) {

    // header('HTTP/1.1 404 Not Found');

    http_response_code(404); 
    echo View :: make('error/404');
}

*/

// require __DIR__ . '/../vendor/autoload.php';

// use check\{checking,validator};
// // use check\validator;

// $obj1 = new checking();
// $obj2 = new validator();

// echo $obj1->name . PHP_EOL;
// echo $obj2->name . PHP_EOL;

// spl_autoload_register(function($class) { // It removes the overhead of require multiple fully-qualified class file. This requires the file using the namespace naming and a little twiking.
//     $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)). '.php';

//     require $path;
// });

// use check\{checking,validator};
// // use check\validator;

// $obj1 = new checking();
// $obj2 = new validator();

// echo $obj1->name . PHP_EOL;
// echo $obj2->name . PHP_EOL;




// echo '<pre>';
// print_r($router->routes());
// echo '</pre>';


// var_dump($_SESSION);
