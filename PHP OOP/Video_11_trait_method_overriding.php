<?php

trait hello{

    public function sayHello(){
        echo "Say hello From Hello Traits <br>";
    }

}

trait hi{

    private function sayHello(){
        echo "Say hello From Hi Traits <br>";
    }

}



class base{

    public function sayHello(){
        echo "Say hello from parent Class <br>";
    }

}

class child extends base{

    use hello , hi {
        hello::sayHello insteadOf hi;
        hi::sayHello as public newHello;
    }

    // public function sayHello(){
    //     echo "Say hello from Child Class";
    // }

}

$test = new child();

$test->sayHello();

$test->newHello();




