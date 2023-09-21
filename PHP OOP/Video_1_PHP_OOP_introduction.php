<?php

// PHP OOP

class calclulator
{

    // this is php oop properties //

    public $a, $b, $c;



    // PHP OOP Method //

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

// add a Object in a Class //

$c1 = new calclulator();

$c1->a = 20;
$c1->b = 10;

$c2 = new calclulator();

$c2->a = 50;
$c2->b = 30;



// echo 'Sum Of the Value : ' . $c1->sum() . "<br>";

// echo 'Subtraction Of the Value : ' . $c1->sub() . "<br>";

// echo 'Subtraction Of the Value : ' . $c2->sub();

class math{
    public $one, $two, $three, $result;

    function jogfol(){
        $this->result = $this->one + $this->two + $this->three;
        return $this->result;
    }

    function biyog(){
        $this->result = ($this->one - $this->two) + $this->three;
        return $this->result;
    }

}

$cal_1 = new math();

$cal_1->one = 20;
$cal_1->two = 20;
$cal_1->three = 20;

// echo "Total Jogfol Holo : " . $cal_1->jogfol(). "<br>";
// echo "Total Biyog Holo : " . $cal_1->biyog();


class calculator
{

    // this is Classes Properties //

    public $a, $b, $c;


    // this is methods //


    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }

    function multi()
    {
        $this->c = $this->a * $this->b;
        return $this->c;
    }

    function div()
    {
        $this->c = $this->a / $this->b;
        return $this->c;
    }
}

// $c1 = new calculator();

// $c1->a = 20;

// $c1->b = 10;

// $c2 = new calculator();

// $c2->a = 50;

// $c2->b = 20;

// echo "Value of Sum : " . $c1->sum() . "<br>";

// echo "Value of Sub : " . $c2->sub() . "<br>";

// echo "Value of Multi : " . $c1->multi() . "<br>";

// echo "Value of Div : " . $c2->div();


class cal{

    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }

    function multi(){
        $this->c = $this->a * $this->b;
        return $this->c;
    }

    function divi(){
        $this->c = $this->a / $this->b;
        return $this->c;
    }

    function modu(){
        $this->c = $this->a % $this->b;
        return $this->c;
    }

    function logic(){
        if($this->a > $this->b){
            return 'a is bigger';
        }
        else{
            return 'b is bigger';
        }
    }

    
    


}

// $ca = new cal();

// $ca->a = 20;
// $ca->b = 10;

// echo "Value of Sum " . $ca->sum() . "<br>";
// echo "Value of Sub " . $ca->sub() . "<br>";
// echo "Value of Multi " . $ca->multi() . "<br>";
// echo "Value of Divi " . $ca->divi() . "<br>";
// echo "Value of Modu " . $ca->modu() . "<br>"; 
// echo "Who is bigger ?? :  " . $ca->logic();

class new_calculator{
    
    public $name = 'nayeem';
    public $age = 20;
    public $address = 'dhaka';

    function bioData(){
        if($this->name == 'nayeem' && $this->age == 20 && $this->address == 'dhaka' ){
            return 'This is Perfect Match';
        }
        else{
            return ' At first you have to be perfect and come to me !!! ';
        }
    }

}

// $new_add = new new_calculator();

// echo $new_add->bioData();
