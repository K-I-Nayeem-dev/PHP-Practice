<?php

// function num(int $value){
    
//     echo $value + 10;

// }

// num(20);

/////////////////////////////////////////////////////////////////////


// function wow(int $value){
//     echo $value + 10;
// }

// wow("kamrul");


// class hello{
//     public function sayhello(){
//         echo "hello everyone";
//     }
// }

// class hi{
//     public function sayhi(){
//         echo "hi everyone";
//     }
// }

// function wow($te){
//     $te->sayhello();
// }

// $test = new hello();

// wow($test);

// 


// function friut(array $names){
//     echo "<ul>"; 
//     foreach ($names as $name) {
//         echo "<li>" . $name . "</li>";; 
//     }
//     echo "</ul>";
// }

// $test = ["Apple" , "Banana", "Lichi", "jack-fruit"];

// friut($test);


// class hello{
//     public function sayhello(){
//         echo "Hello Everyone";
//     }
// }

// class hi{
//     public function sayhi(){
//         echo "hi everyone";
//     }
// }

// function wow(hello $e){
//     $e->sayhello();
// }

// $test = new hello();

// wow($test);




/////////////////////////////////////////////////////////////////////

// function names(array $names){
    //     foreach ($names as $name) {
        //         echo $name . "<br>";
        //     }
        // }
        
        // $hello = ["kamurl"];
        
        // names($hello);
        
        
        
/////////////////////////////////////////////////////////////////////


// class hello{

//     public function hello(){
//         echo "hello everyone";
//     }

// }

// class bye{

//     public function bye(){
//         echo "Bye everyone";
//     }

// }

// function wow(hello $c){

//     $c->hello();

// }

// $test = new hello();

// wow($test);




/////////////////////////////////////////////////////////////////////


// class school{

//     public function getNames(student $names){

//         echo "<ul>";
        
//         foreach ($names->Names() as $name) {
//             echo  "<li>" . $name . "</li>";
//         }
//         echo "</ul>";
//     }

// }

// class student{

//     public function Names(){
//         return ["kamrul", "nayeem", "Islam"];
//     }

// }


// $sch = new school();

// $std = new student();

// $sch->getNames($std);


//////////////////////////////////////////////////////////////////////


class school{

    public function getNames(student $names){
        foreach ($names->Names() as $name) {
            echo $name . "<br>";
        }
    }

}

class student{
    public function Names(){
        return ["Kamrul" , "islam" , "nayeem"];
    }
}

$std = new student();
$sch = new school();

$sch->getNames($std);



//////////////////////////////////////////////////////////////////////