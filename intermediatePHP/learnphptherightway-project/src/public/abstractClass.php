<?php

# Abstract class

/*

    1. can't instantiate abstract classes
    2. can contain abstract methods in addition to regular mehtods and properties
    3. "what" is there in abstract class, but not "how"
    4. child classes must implement abstract methods i.e, "how"

*/


abstract class Field 
{
    public function __construct(protected string $name){}

    abstract protected function render() : string; // This must be implemented by child classes
}


class Text extends Field
{
    public function render() : string // implementing abstract method
    {
        return <<<HTML
            <input type="text" name="{$this->name}" />
        HTML;
    }
}

abstract class Boolean extends Field  // doesn't implement the abstract methods. That's why this class has to marked abstract to work
{

}

class Checkbox extends Boolean
{
    public function render() : string
    {
        return <<<HTML
            <input type="checkbox" name="{$this->name}" />
        HTML;
    }
}

class Radio extends Boolean
{
    public function render() : string
    {
        return <<<HTML
            <input type="radio" name="{$this->name}" />
        HTML;
    }
}


$inputs = [
    new Text('text'),
    new Checkbox('checkBox'),
    new Radio('radio')
];

foreach($inputs as $type)
{
   echo $type->render().'<br>';
}
