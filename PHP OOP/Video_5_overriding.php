<?php

// class base{
//     public $name;

//     public function show(){
//         echo " My Name : " . $this->name;
//     }

// }

// class derived extends base{
//     public $name = "More Texts";
// }

// class derived extends base{
//     public function get(){
//         echo " Your Name : " . $this->name;
//     }
// }



// $t1 = new base();

// $t1->name = "Nayeem";

// echo $t1->show();


// class base{

//     // public $name;

//     public function calc($a , $b){
//         return " Result Is : " .  $a + $b;
//     }

// }

// class derived extends base{

    // public function calc($a , $b){
    //     return " Result Is : " .  $a * $b;
    // }

// }



// $result = new derived();

// echo $result->calc(5, 10);


class base{

    public function show($a, $b){

        return "Result is : " . $a + $b . "<br>";

    }

}

class derived extends base{

    public function show($c, $d){

        return "Result is : " . $c * $d;

    }

}



// $f1 = new base();

$f1 = new derived();

echo $f1->show(10, 30);

// echo $f2->show(5 , 10);