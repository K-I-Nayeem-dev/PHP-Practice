<?php

// class you{

//     public $course = "PHP";

//     private $first_name, $last_name;

//     public function  full_name($f_name, $l_name){
//         $this->first_name = $f_name;
//         $this->last_name = $l_name;
//     }

//     public function __unset($property)
//     {
//         unset($this->$property);
//     }


// }

// $test = new you();

// $test->full_name('kamrul', 'islam');

// unset($test->first_name);

// echo "<pre>";
// print_r($test);
// echo "</pre>";


// $hello = "How are you";

// echo isset($hello);

// unset($hello);

// echo $hello;


// class abc{

//     public $course = "PHP";

//     private $first_name, $last_name;

//     private $detail = [
//         "name" => "Nayeem",
//         "age" => "20"
//     ];

//     public function full_name($f_name, $l_name){
//         $this->first_name = $f_name;
//         $this->last_name = $l_name;
//     }

//     public function __unset($proper)
//     {
//         unset($this->detail[$proper]);
//         unset($this->$proper);
//     }

// }

// $show = new abc();

// $show->full_name('kamrul', 'islam');

// unset($show->name);

// echo "<pre>";
// print_r($show);
// echo "</pre>";