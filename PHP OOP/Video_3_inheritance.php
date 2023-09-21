<?php

// class emplyoee{

//     public $name, $age, $salary;

//     function __construct($n, $a, $s)
//     {
//         $this->name = $n;
//         $this->age = $a;
//         $this->salary = $s;
//     }  

//     function info(){

//         echo "<h1>Employe Details</h1>";

//         echo "Name : " . $this->name . "<br>";

//         echo "Age : " . $this->age . "<br>";

//         echo "Salary : " . $this->salary;

//     }

// }

// class manager extends emplyoee{

//     public $ta = 1000, $phone = 300, $totalSalary;

//     function info(){

//         $this->totalSalary = $this->salary + $this->ta + $this->phone;

//         echo "<h1>Manager Details</h1>";

//         echo "Name : " . $this->name . "<br>";

//         echo "Age : " . $this->age . "<br>";

//         echo "Salary : " . $this->totalSalary;

//     }

// }



// $e1 = new emplyoee('kamrul', 24, 5000);
// $e2 = new manager('nayeem', 32, 20000);

// $e1->info();
// $e2->info();

class employee
{

    public $name, $age, $phone_no, $salary , $position;

    function __construct($name = "NO Name", $age = "null", $phone = "null", $salary = "null" , $position = "null")
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone_no = $phone;
        $this->salary = $salary;
        $this->position = $position;
    }

    function info()

    {

        echo "<h2>Emplyee Details</h2>";

        echo "Name : " . $this->name . "<br>";
        echo "Age : " . $this->age . "<br>";
        echo "Phone No : " . $this->phone_no . "<br>";
        echo "Salary : " . $this->salary . "<br>" ;
        echo "Position : " . $this->position ;

    }

}

// $e1 = new employee();

// $e1->info();

$e2 = new employee('Nayeem', 25 , 1845858274 , 8000 , "Machine Worker");

$e2->info();

// $e2 = new employee('kamrul');

// $e2->info();

class manager extends employee{

}

$m1 = new manager('sunny', 43, 1936185959, 20000 , "Manager");

$m1->info();

class boss extends manager {

    public $taransport = 1000, $phone = 400 , $total_salary;

    function info(){

        $this->total_salary = $this->salary + $this->taransport + $this->phone;

        echo "<h2>Boss Details</h2>";

        echo "Name : " . $this->name . "<br>";
        
        echo "Age : " . $this->age . "<br>";
        
        echo "Phone No : " . $this->phone_no . "<br>";
        
        echo "Salary : " . $this->total_salary . "<br>" ;
        
        echo "Position : " . $this->position ;


    }

}

$B1 = new boss("arafat nayeem", 53, 1818033022, 35000, "Boss");

$B1->info();

