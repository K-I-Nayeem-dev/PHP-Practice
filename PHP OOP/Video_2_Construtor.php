<?php

// Making Constructor //

// this is old way to make Object

// class Person{

//     public $name = "No Name" , $age = 0;

//     function show(){
//         echo "Hello & Welcome : " . $this->name . ". <br>  And Your age : " . $this->age;
//     }

// }

// $p1 = new Person();

// $p1->name = 'Kamrul islam' ;

// $p1->age = 24 ;

// $p1->show();

// class person{
    
//     public $name , $age;

//     function __construct($name = "No Name", $age = 20)
//     {   
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function show(){
//         echo "Hello My Name is : " . $this->name . " -  Age is : " . $this->age;
//     }

// }

// $p1 = new person();

// $p1->show();

// use calculator as GlobalCalculator;

// class calculator{

//     public $a, $b, $c;

//     function __construct($a, $b,)
//     {
//         $this->a = $a;
//         $this->b = $b;
//     }

//     function sum(){

//         $this->c = $this->a + $this->b;
        
//         echo "value of Sum " . $this->c . "<br>";

//     }

// }

// $c1 = new GlobalCalculator(20, 30);

// $c2 = new GlobalCalculator(60, 40);

// $c1->sum();
// $c2->sum();

// class person{
//     public $name, $age;

//     function __construct($nam, $ag)
//     {
//         $this->name = $nam;
//         $this->age = $ag;
//     }

//     function show(){
//         echo $this->name ." - " . $this->age;
//     }
// }

// $p1 = new person('kamrul', 20);

// $p1->show();


// class new_constructor{

//     public $name, $age;

//     function __construct($n, $a){
//         $this->name = $n;
//         $this->age = $a;
//     }

//     function show_name(){
//         echo $this->name . " ". $this->age;
//     }

// }


// $p1 = new new_constructor('kamrul' , 22);

// echo $p1->show_name();


// class people{

//     public $name, $age;

//     function show(){
//         echo $this->name . " " . $this->age;
//     }

// }

// $p1 = new people();

// $p1->name = "Nayeem";
// $p1->age = 20;

// $p1->show();

// class people{
    
//     public $name, $age;

//     function __construct($n, $a)
//     {
//         $this->name = $n;
//         $this->age = $a;
//     }

//     function show(){
//         echo $this->name . "  " . $this->age . " <br> ";
//     }

// }

// $p1 = new people('nayeem', 20);

// $p2 = new people('kamrul', 23);

// $p1->show();

// $p2->show();

// class project{
    
//     public $name, $age;

//     function show(){
//         return $this->name . " " . $this->age . "<br> <br>";
//     }

// }

// $p1 = new project();

// $p1->name = "Nayeem";

// $p1->age = 20 ;

// echo $p1->show();

// $p2 = new project();

// $p2->name = "Kamrul";

// $p2->age = 25 ;

// echo $p2->show();

class pro_K{

    public $name  , $age  ;

    function __construct($nam = "No name " , $boyosh = "null")
    {
        $this->name = $nam;
        $this->age = $boyosh;
    }

    function show(){

        return " Name = " . $this->name . " <br> Age = " . $this->age . "<br> <br>";
        
    }

}

$p1 = new pro_K("Arafat Nayeem", 20);

echo $p1->show();

$p2 = new pro_K("Kamrul Islam", 24);

echo $p2->show();


$p3 = new pro_K("anbul", 25);

echo $p3->show();

$p4 = new pro_K();

echo $p4->show();




