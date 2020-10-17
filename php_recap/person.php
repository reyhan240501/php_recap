<?php

// $argv=[];

class Person{
    public $name;
    protected $age;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function setAge($age)
    {
        if($age<18){
            // throw new Exception("Person is not old enough");
            exit("youre not allowed");
        }
        $this->age=$age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->name;
    }
}

$john = new Person($argv[1]);
$john->setAge($argv[2]);
// var_dump($john->getAge());
echo "Your name ". $john. " and your age ". $john->getAge();

// $john = new Person('John Doe');

// $john->setAge(38);

// var_dump($john->getAge());