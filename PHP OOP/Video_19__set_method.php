<?php

class set{

    private $name , $age;

    // public function __get($property){

    //     echo "You are trying to access non exiting ($property) or private property";

    // }

    public function __set($property, $value)
    {
        if(property_exists($this , $property)){
            return $this->$property = $value;
        }
        else{
            echo "You are trying to access non exiting or private property : ($property)";
        }
    }

    // public function hello(){
    //     echo $this->name;
    // }

}

$test = new set();

// $test->age = 20;

echo $test->name = "kamrul islam nayeem";

// $test->hello();