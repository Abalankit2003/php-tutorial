<?php

declare(strict_types = 1);


namespace App\myNamespace; // Donot use integer just after "\"

class Profile
{
    public $name = "Ankit";

    public const STATUS_PAID = 'paid';
    private const STATUS_PENDING = 'pending';
    private const STATUS_DECLINED = 'declined';
    private string $status;

    public const ALL_STATUS = [
        self :: STATUS_PAID => 'Paid',
        self :: STATUS_PENDING => 'Pending',
        self :: STATUS_DECLINED => 'Declined',

    ];

    public function __construct() 
    {
        // var_dump(new \DateTime()); // error since this is a namespace file that means PHP will function a little differently. PHP will try to find DateAndTime() function declared in this namesapce only. If it is not found it will give "not found" error. If we want to use in-built PHP function then use a backslash i.e, \DateTime(). Similarly if you are creating an object of a class declared in  a completely separate namespace. for example notification\Email then syntax goes like new \notification\Email(). This is fully-qualified namespace whereas if you donot use leftmost backslash then it is called qualified namespace. What it will do, it will append notification\Email to src\namespace. Therefore, the namespace for Email will be src\namespace\notification\Email. For qualified namespace PHP looks for any import statement if not found it appends the same with current namespace. This is true for classes only. But functions and constans are not found in local namespace then PHP falls back to global namespace and resolve the same. Below is an example.
        // echo '<br>';
        // var_dump(explode(',', 'Hello World')); // recommended to use "\";

        // var_dump(self :: STATUS_PENDING); // access private const attributes
        // var_dump(Profile :: STATUS_PENDING);
        // var_dump($this :: STATUS_PENDING);

        $this->setStatus(self :: STATUS_PENDING);
    }

    public function setStatus(string $status) : self 
    {
        if(!isset(self :: ALL_STATUS[$status])) 
        {
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;
        
        return $this;
    }
}
