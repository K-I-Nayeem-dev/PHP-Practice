<?php

// interface parent1{
//     function calc($a, $b);
// }

// interface parent2{
//     function sub($c, $d);
// }


// class childClass implements parent1, parent2{

//     public function calc($e, $f){
//         echo $e + $f;
//     }

//     public function sub($g, $h){
//         echo $g + $h;
//     }
// }

// $test = new childClass();

// $test->calc(20, 20);
// echo "<br>";
// $test->sub(30, 20);

interface parent1{

    function sum($a, $b);

}

interface parent2{

    function sub($c, $d);

}


class childClass implements parent1, parent2{

    public function sum($e, $f){
        return "Sum is : " . $e + $f . "<br>";
    }

    public function sub($g, $h){
        return "Sub is : " . $g - $h;
    }

}

$test = new childClass();

echo $test->sum(10, 5);

echo $test->sub(20, 10);