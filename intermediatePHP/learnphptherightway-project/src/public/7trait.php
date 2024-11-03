<?php

// self/parent means the same but parent can be used in child classes only.
// multi-inheritance is supported in PHP. For that purpose inheritance and trait are used.
/*
    * Trait does nothing but just copy the code of itself and paste it where it is used.

    * Trait methods can be overriding in the class which is using trats.
    * Even trait can override the methods of base class. In the below scenario, if latteTrait has another method makeCoffee() identical  to base class CoffeeMaker, then in LatteMaker class, latteTrait will replace the base class makeCoffee() with its makeCoffe() method.

    * If a method of trait is private, this can still be access in class where it is used. But you can call the method from the object of that class.

    * A trait can be used within another trait.

    * A property within a trait can be redefined in class untill it is fully compatible.

    * A trait has access to each property and methods of the class where it is used.

    * A trait can have an abstract method and the class has to implement it.

    * Each class calling the trait will have individual separate instance of each static properties of the trait.

    * Mainly trait removes the code duplication. 

    NOTE :-> Do not use Inheritance everywhere untill "is a" relationship can be established.

*/

class CoffeeMaker
{

    public function makeCoffe() 
    {
        echo static :: class . ' is making regular coffee.' . '<br>';
    }
}

trait latteTrait // syntax of trait. 
{
    public function makeLatte()
    {
        echo static :: class . ' is making latte.' . '<br>'; // static will resolve to LatteMaker. if self/parent would have been used, it would resolve to coffeeMaker
    }
}


class LatteMaker extends CoffeeMaker
{
    // public function makeLatte()
    // {
    //     echo static :: class . ' is making latte.' . '<br>'; // static will resolve to LatteMaker. if self/parent would have been used, it would resolve to coffeeMaker
    // }

    use latteTrait;
}

trait cappuccinoTrait
{
    public function makeCappuccino()
    {
        echo static :: class . ' is making Cappuccino.' . '<br.';
    }

    // This will create conflict.

    public function makeLatte()
    {
        echo static :: class . ' is making latte(update).' . '<br>'; 
    }
}


class CappuccinoMaker extends CoffeeMaker
{
    // public function makeCappuccino()
    // {
    //     echo static :: class . ' is making Cappuccino.' . '<br.';
    // }

    use cappuccinoTrait;
}

class AllInOne extends CoffeeMaker
{
    use latteTrait {
        latteTrait :: makeLatte as originalLatte; // This is alias.
    }

    use cappuccinoTrait {
         cappuccinoTrait :: makeLatte insteadOf latteTrait; // This tells PHP to strictly use makeLatte function of cappuccinoTrait instead of latteTrait
    }
    // use cappuccinoTrait;
}


// (new CoffeeMaker())->makeCoffe();
// (new LatteMaker())->makeCoffe();
// (new LatteMaker())->makeLatte();
// (new CappuccinoMaker())->makeCoffe();
// (new CappuccinoMaker())->makeCappuccino();


(new AllInOne())->makeCoffe();
(new AllInOne())->originalLatte();
(new AllInOne())->makeLatte();
(new AllInOne())->makeCappuccino();



/**
 * Anonymous class => ofcourse without any name
 * syntax => new class(...parameters)){};
 * 
 * It does have all property of a regular class.
 * It is mainly used in testing purpose.
 * 
 */
