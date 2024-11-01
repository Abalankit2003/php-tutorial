<?php

declare(strict_types = 1);

/*

class Transaction 
{
    # typehinting(type definition of a variable) is recommended
    public float $amount; // value of $amount is "uninitialized"
    public string $description; // value of $description is "uninitialized"

    public $cash; // Here $cash has no data types, therefore its value is NULL
}

*/


class Transaction
{
    private float $amount;
    private string $description; // typehinting doesn't allow callable in type

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount; // to operate on a attribute, do not use $ before the attribute names
        $this->description = $description;
    }

    public function addTax(float $rate) : Transaction
    {
        $this->amount += $this->amount * $rate/100;

        return $this;
    }

    public function applyDiscount(float $discount) : Transaction
    {
        $this->amount -= $this->amount * $discount/100;

        return $this;
    }

    public function getAmount() : float
    {
        return $this->amount;
    }

    public function __destruct() 
    {
        echo "Object destroyed";
    }
}
