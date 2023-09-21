<?php

// class abc{

//     public $data = [ "name" => "nayeem","age" => 20,"phn" => "null" ];

//     public function __get($key)
//     {

//         if(array_key_exists($key, $this->data)){
//             return $this->data[$key];
//         }
//         else{
//             return "this key is ($key) not defined";
//         }

//     }

// }

// $obj = new abc();

// echo $obj->name;

class efg
{

    // private $name = "nayeem";

    private $data = [
        'name' => 'kamrul islam',
        'age' => '20',
        'phone' => '018'
    ];

    // public function __get($properties){
    //     echo "you are trying to access non existing or ($properties) private properties";
    // }

    public function __get($key)
    {
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        }else{
            return "<br> This key ($key) is not defined";
        }
    }


}

$test = new efg();

echo $test->name;
echo $test->address;
