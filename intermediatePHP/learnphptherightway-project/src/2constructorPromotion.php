<?php

namespace src\promotion; // Always declared at top

# constructor promotion property is the shorthand for declaring properties and initializing them altogether. This process is executed with paramaters of constructor.

class Transaction 
{
    public function __construct( 
        private float $amount, // This is constructor property promotion. $amount will be declared and value passed via constructor to it will be assigned
        private string $description
    ) {}
}


# nullsafe operator

// Assume getCustomer() returns null, then getPaymentProfile() is trying to access null which will give fatal error. 
// To avoid this we use ?-> "nullsafe" operator. It works by short-circuiting. Nullsafe operator return null at any point which returns null and all things right of the point will be discarded
// echo $transaction->getCustomer()?->getPaymentProfile()?->id;



class Profile
{
    public $name = "Raj";
}
