<?php

////////////////////////////////////////////////////////////////////////////

// class hello
// {
//     public function hi()
//     {
//         echo "The Class Name is : " . get_class($this) . "<br>";
//     }
// }

// $obj = new hello();

// $obj->hi();

// echo "This Class Name is : " . get_class($obj);

////////////////////////////////////////////////////////////////////////////


// class base{

// }

// class derived extends base{

//     public function hi(){
//         echo "Parent Class is : " . get_parent_class($this);
//     }

// }

// $obj = new derived();

// $obj->hi();

// echo "Parent Class is : " . get_parent_class($obj);


////////////////////////////////////////////////////////////////////////////

// class mt{

//     public function hello(){

//     }
//     public function hi(){

//     }
//     public function __construct()
//     {
        
//     }

// }

// $obj = new mt();

// print_r(get_class_methods($obj));


// $class_methods = get_class_methods('mt');

// // print_r($class_methods);

// foreach ($class_methods as $methods) {
//     echo $methods . "<br>";
// }

// class MyClass{

//     public function __construct()
//     {
        
//     }

//     public function func1(){

//     }

//     public function func2(){

//     }

// }

// $class_methods = get_class_methods('MyClass');

// echo "<pre>";
// print_r($class_methods);
// echo "</pre>";


////////////////////////////////////////////////////////////////////////////

// class va{

//     public $name, $hello, $hi, $address;


// }

// $obj = new va();

// $class_properties = get_class_vars('va');

// // print_r($class_properties);

// foreach ($class_properties as $var) {
//     echo $var . "<br>";
// }

// class va{
//     public $name;
//     public $first_name = "Yahoo ";
//     public $last_name = " Baba";
//     public $number = 100;
//     private $address;

//     public function __construct()
//     {
//         print_r(get_class_vars(__CLASS__));
//     }

// }

// echo "<pre>";
// $obj = new va();
// echo "</pre>";
// print_r($obj);


// $class_properties = get_class_vars('va');

// echo "<pre>";
// print_r($class_properties);
// echo "</pre>";


// class va{

//     public $var1 , $var2 = "hello" , $var3 = 100;

//     private $var4;

//     public function __construct()
//     {
//         $this->var1 = "Wow";
//         $this->var2 = "Yahoo";
//         print_r(get_class_vars('va'));
//     }

// }

// echo "<pre>";
// $obj = new va();
// echo "</pre>";

// $class_variables = get_class_vars(get_class($obj));

// echo "<pre>";
// print_r($class_variables);
// echo "</pre>";



////////////////////////////////////////////////////////////////////////////


// class va{

//     public $var1, $var2 = "hello", $var3 = 100;

//     private $var4;

//     public function __construct()
//     {
//         $this->var1 = "Wow";
//         $this->var2 = "Yahoo";

//         echo "<pre>";
//         print_r(get_object_vars($this));
//         echo "</pre>";

//     }

// }

// $obj = new va();

// $class_methods = get_object_vars($obj);

// echo "<pre>";
// print_r($class_methods);
// echo "</pre>";


////////////////////////////////////////////////////////////////////////////

// class gcc{
//     static public function hello(){
        // echo "this is get called Class : " . get_called_class() . "<br>";
        // var_dump(get_called_class());
        // echo get_called_class();
//     }
// }

// class gcc2 extends gcc{

// }

// gcc::hello();
// gcc2::hello();

// class gcc{

//     public function hello(){
//         var_dump(get_called_class());
//     }

// }

// class gcc2 extends gcc{

// }

// $obj = new gcc();
// $objc = new gcc2();

// $obj->hello(); 
// $objc->hello();


// class lcc{
//     static public function hello(){
//         var_dump(get_called_class());
//     }
// }

// class lcc2 extends lcc{

// }

// lcc::hello();
// lcc2::hello();

////////////////////////////////////////////////////////////////////////////

// class abc{

// }

// class efg extends abc{

// }

// class hig extends efg{

// }

// $all_classes = get_declared_classes();

// foreach ($all_classes as $classes) {
//     echo "<pre>";
//     echo $classes . "<br>";
//     echo"</pre>";
// }

// print_r($all_classes['1']);


////////////////////////////////////////////////////////////////////////////

// interface test{

// }

// interface tt2{

// }

// echo "<pre>";
// print_r(get_declared_interfaces());
// echo"</pre>";


////////////////////////////////////////////////////////////////////////////

// trait test{

// }

// trait test2{

// }

// class abc{

//     use test;

// }

// echo "<pre>";
// print_r(get_declared_traits());
// echo"</pre>";

////////////////////////////////////////////////////////////////////////////

// class Myclass{
//     public $test;
// }

// class_alias('Myclass', 'mc');

// $b = new Myclass();

// echo $b->test = "Hello";



////////////////////////////////////////////////////////////////////////////
