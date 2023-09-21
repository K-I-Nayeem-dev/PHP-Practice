<?php

// $test = 'hello';
// $testt = 'hello';

// echo isset($test);

//////////////////////////////////////////////////////////////////////////////////////////////////////


// class set{

//     public $namee;

//     private $first_name , $last_name;

//     private $details = [
//         "name" => "Kamrul",
//         "address" => "dhaka",
//         "age" => 20
//     ];

//     public function full_name($f_name, $l_name){
//         $this->first_name = $f_name;
//         $this->last_name = $l_name;
//     }

    // public function __isset($property)
    // {
    //     if(isset($this->$property)){
    //         echo "This Property is Exist : $property";
    //     }
    //     else{
    //         echo "This is a non exist Property : $property";
    //     }
    // }

//     public function __isset($proper)
//     {
//         echo isset($this->details[$proper]);
//     }

// }

// $test = new set();

// $test->name = "kamrul";

// $test->full_name("kamrul", "islam");

// echo isset($test->name);

// class abc{

//     public $course;

//     private $first_name, $last_name;

//     private $detail = [
//         'name' => 'nayeem',
//         'age' => '20',
//     ];

//     public function full_name($f_name, $l_name){
//         $this->first_name = $f_name;
//         $this->last_name = $l_name;
//     }

//     public function __isset($name)
//     {
//         if(isset($this->detail[$name])){
//             print_r("This Property or Variable is Exist :  $this->detail[$name]");
//         }
//         else{
//             print_r("You are trying to access a non exist or private property : $this->detail[$name]");
//         }
//     }

// }

// $show = new abc();

// // $show->course = "PHP";

// $show->full_name('kamrul', 'islam');

// echo isset($show->name);

