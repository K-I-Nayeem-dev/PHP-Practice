<?php

// class base{

//     public static $name = "Yahoo";

//     public function show(){
//         echo self::$name;
//         echo static::$name;
//     }
// }

// class dev extends base{

//     public static $name = " Baba";

// }



// $test = new dev();


// $test->show();

// class A{

//     public static $name = "Yahoo";

//     public function get()
//     {
//         echo static::$name;
//         echo self::$name;
//     }

// }

// class B extends A{

//     public static $name = "Baba";

// }

// $test = new B();

// $test->get();


class A{

    public static $name = "Yahoo";

    public function show(){
        echo self::$name;
        echo static::$name;
    }

}

class B extends A{

    public static $name = "Baba";

}


$test = new B();

$test->show();


