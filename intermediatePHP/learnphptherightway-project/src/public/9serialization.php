<?php

# serialization means changing an object into string equivalent. syntax => serialize(object);
# unserialization means changing a serialized string into an object. This process creates a shallow copy. syntax => unserialize(string)


class Invoice
{

    private string $id;

    public function __construct(
        public float $amount,
        public string $description,
        public string $creditCardNumber
    ) {
        $this->id = uniqid('invoice_');
    }

    public function __serialize() : array // This will let you hook into pre-serialization process
    {
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description' => $this->description,
            'creditCardNumber' => base64_encode($this->creditCardNumber),
            'foo' => 'bar',
        ];
    }

    public function __unserialize(array $data) : void // This will hook into deserialization process.
    {

    }
}

$obj1 = new Invoice(10, 'My Invoice 1', '111111');

// var_dump($obj1);

$str = serialize($obj1); // O:7:"Invoice":5:{s:2:"id";s:21:"invoice_6727631698543";s:6:"amount";d:10;s:11:"description";s:12:"My Invoice 1";s:16:"creditCardNumber";s:8:"MTExMTEx";s:3:"foo";s:3:"bar";}

echo $str;
