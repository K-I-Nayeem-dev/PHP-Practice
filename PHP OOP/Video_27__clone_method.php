<?php

// $a = 5;

// $b = & $a;

// $b = 10;

// echo $a;


// class student{

//     public $name, $course;

//     public function __construct($n)
//     {
//         $this->name = $n;
//     }

// }

// $student1 = new student("Yahoo baba");

// $student2 = clone $student1; 

// $student2->name = "kamrul islam ";

// echo $student1->name . "<br>";

// echo $student2->name;


// $a = 5;

// $b = & $a;

// $b = 10;

// echo $b , $a;

// class student{

//     public $name, $course;

//     public function __construct($n)
//     {
//         $this->name = $n;
//     }
    
//     public function SetCourse(course $c){
//         $this->course = $c;
//     }

// }

// class course{

//     public $cname;
    
//     public function __construct($cn)
//     {
//         $this->cname = $cn; 
//     }

// }


// $student1 = new student('yahoo baba');

// $course = new course("PHP");

// $student1->SetCourse($course);

// $student2 = clone $student1;

// $student2->name = "kamrul islam";

// $student2->course->cname = "Python";

// echo $student1->name . "<br>";

// echo $student2->name;

// echo "<pre>"; 
// print_r($student1);
// echo "</pre>";

// echo "<pre>"; 
// print_r($student2);
// echo "</pre>";


// class stu{

//     public $name , $course;

//     public function __construct($n)
//     {
//         $this->name = $n;
//     }

//     public function SetCourse(course $c){
//         $this->course = $c;
//     }

//     public function __clone()
//     {
//         $this->course = clone $this->course;
//     }

// }

// class course{

//     public $cname;
    
//     public function __construct($cn)
//     {
//         $this->cname = $cn;
//     }

// }

// $student1 = new stu('yahoo baba');

// $course = new course("PHP");

// $student1->SetCourse($course);

// $student2 = clone $student1;

// $student2->name = "kamrul islam";

// $student2->course->cname = "Python";

// echo $student1->name . "<br>";

// echo $student2->name;

// echo "<pre>";
// print_r($student1);
// echo "</pre>";

// echo "<pre>";
// print_r($student2);
// echo "</pre>";

// class student{

//     public $name, $course;

//     public function __construct($na)
//     {   
//         $this->name = $na;
//     }

//     public function SetCourse(course $c){
//         $this->course = $c;
//     }

//     public function __clone()
//     {
//         $this->course = clone  $this->course;
//     }

// }

// class course{
//     public $cname;
//     public function __construct($cn)
//     {  
//         $this->cname = $cn;
//     }
// }


// $student1 = new student('yahoo baba');

// $course = new course("PHP");

// $student1->SetCourse($course);

// $student2 = clone $student1;

// $student2->name = "kamrul Islam";

// $student2->course->cname = "Python";

// echo $student1->name . "<br>";

// echo $student2->name ;

// echo "<pre>";
// print_r($student1);
// echo "</pre>";

// echo "<pre>";
// print_r($student2);
// echo "</pre>";



// class all{

//     public $name , $course;

//     public function __construct($n)
//     {
//         $this->name = $n;
//     }

//     public function SetCourse(course $c){
//         $this->course = $c;
//     }

//     public function __clone()
//     {
//         $this->course = clone $this->course;
//     }

// }

// class course{
//     public $cname;

//     public function __construct($cn)
//     {
//         $this->cname = $cn;
//     }
// }

// $stu1 = new all("yahoo Baba");

// $course = new course("PHP");

// $stu1->SetCourse($course);

// $stu2 = clone $stu1;

// $stu2->name = "kamrul islam";

// $stu2->course->cname = "Python";

// echo "<pre>";
// print_r($stu1);
// echo "</pre>";

// echo "<pre>";
// print_r($stu2);
// echo "</pre>";
