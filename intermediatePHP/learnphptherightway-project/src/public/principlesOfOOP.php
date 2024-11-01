<?php

/*

 Followings are the four main principles of OOP:
    1. Inheritance
    2. Abstraction
    3. Polymorphism
    4. Encapsulation

*/


# 1. Encapsulation
    /*
         It involves bundling data (attributes) and methods (functions) that operate on the data into a single unit or "class." The key idea behind encapsulation is to restrict direct access to some of an object’s components, which is why it’s often described as "data hiding."
          By hiding internal details, encapsulation protects the integrity of the data. Other parts of the code can’t directly modify the data in unintended ways
    
    */



class Encapsulation 
{
    private ?string $name = null; // restricted access

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    // Assume there are some crucial data in the program and that should not be touched or modified randomly. It should be handled with great care. Then we bundle the data along with methods that operate on the same into a single unit and define the controlled access. This is termed as encapsulation. That way we can protect the data and its integrity.
};


$ankit = new Encapsulation('Ankit');

var_dump($ankit->getName());


// Trict to access private members via ReflectionProperty api

$reflectionProperty = new ReflectionProperty(Encapsulation :: class, 'name');

$reflectionProperty->setAccessible(true);

var_dump($reflectionProperty->getValue($ankit)); // string(5) "Ankit"


# 2. Abstraction

/*

    Abstraction is one of the core principles of object-oriented programming (OOP) that focuses on simplifying complex systems by modeling only the relevant, essential characteristics of an object, while hiding the complex details. It allows developers to work with a simplified interface and focus on "what" an object does rather than "how" it does it.

    // Assume there are some functions that I want to execute that doesn't bother the user how to do it but it has a significance. Then I will be using abstraction to do the same. That way I will hide the internal details of the execution of the functions and only show what is required. For example, user gives a DOB, he wants the precise age, but he doesn't want to know how you will calculate it. Then the process should be abstracted and the final result should be shown to user only.



    Encapsulation Vs Abstraction

    Encapsulation focuses on bundling data and methods that work on that data within a single unit, typically a class, and restricting access to some of the class’s components. Its primary purpose is data protection and controlled access.
    Abstraction aims to hide the complexity of implementation by exposing only the essential details. It’s about simplifying interactions by providing a cleaner interface that hides unnecessary details.

*/


# 3. Inheritance

/*

    1. Child class constructor overwrites the parent constructor unless it is not invoked in child constructor. 
    2. In child constructor , use "parent::__construct()" to invoke parent constructor
    3. The principle goes for methods as well.
    4. But in methods overwriting(overriding) signature(return type, method name, method parameters) of the methods must match exactly.
    5. Signature matching doesn't apply to constructor and properties.
    6. "final" keyword tell PHP to not extend further. It could be used with class and method. Simply put, it stops the inheritance from that point further.

    7. In a independent function, if it has a parameter of base class type, child class can be passed to that function, but not the vice-versa.
    8. Inheritance is done by keyword "extends".

*/
