<?php

# __get() and __set() This is used for properties only. Methods should not be used since it destroys encapsulation. What it does is if a property doesn't exist of an object, then, __get() will come handy to handle this situation. You can operate anything whenever you get such situation. Same goes for __set();

# __isset() and __unset() we have already read about this.

# NOTE :-> These methods do not work on static members or properties

# __call() and __callStatic() are for undefined methods. These are powerful.

class Invoice 
{
    private float $amount;
    private int $id;
    private string $account;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function __get(string $name) : ?float // __get(property1, property2, ...)
    {
        if(property_exists($this, $name))
        {
            return $this->$name;
        }

        return 3.3;
    }

    public function __set(string $name, $value) : void { // __set(property, value)
        if(property_exists($this, $name))
        {
            $this->$name = $value;
        }
    }

    protected function process(float $amount, $description)
    {
        var_dump($amount, $description);
    }

    public function __call(string $name, array $arguments)
    {
        // var_dump($name, $arguments);

    }

    public static function __callStatic(string $name, array $arguments)
    {
        var_dump('static', $name, $arguments);
    }

    public function __toString() : string // when you echo object i.e, echo object;
    {
        return 'Hello World';
    }

    public function __invoke() // when you call object i.e, object();
    {
        echo "<br> invoked";
    }

    public function __debugInfo() : ?array
    {
        return [
            'id' => $this->id,
            'account' => '****' . substr($this->account, -2)
        ];
    }
}

$invoice = new Invoice(15);


echo $invoice->cake . '<br>'; // return 3.3 because __get() return 3.3
$invoice->amount = 20;

echo $invoice->amount . '<br>';

$invoice->process(1, 23, 3);

echo $invoice; // Hello World
$invoice(); // invoked

var_dump($invoice);
