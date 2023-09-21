<?php
namespace first\v1\project;

// class product{
//     public function __construct()
//     {
//         echo "Hello from Product Class <br>";
//     } 
// }

class project{

    public function __construct()
    {
        // echo "this is Product Function <br>";

        $obj = new \second\project;

    }

}

function wow(){
    echo "this is product function <br>";
}


