<?php

# interface
/*
    1. each methods in interface must be implemented.
    2. "implements" keyword is used to implement interface.
    3. if a construct is defined in interface, then it must be implemented in concrete class
    4. if an interface is extending(using "extends" keyword) other interfaces then the concrete classes must implement the methods of both.
    5. access modifier in an interface must be public only.
    6. an interface can have a constant, but a concrete class cannot modify it.
    7. polymorphism can be implemented using interfaces.
*/

interface DebtCollector
{
    public function collect(float $ownedAmount) : float;
}



class CollectionAgency implements DebtCollector
{
    public function collect(float $ownedAmount) : float 
    {
        $guaranteed = $ownedAmount * 0.5;

        return mt_rand($guaranteed, $ownedAmount);
    }
}

class Rocky implements DebtCollector
{
    public function collect(float $ownedAmount) : float
    {
        return $ownedAmount * 0.6;
    }
}


class DebtCollectionService
{
    public function collectDebt(DebtCollector $collector) // An class which implements DebtCollector will be accepted here. This is a classical use-case of interface
    {
        $ownedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($ownedAmount);

        echo 'Collected $' . $collectedAmount . ' out of $' . $ownedAmount . '<br>';
    }
}



$collector = new DebtCollectionService();

echo $collector->collectDebt(new Rocky());
