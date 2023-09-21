<?php

trait test{

    public function sayHello(){
        echo "Hello Everyone <br>";
    }

    public function sayBye(){
        echo "Bye Bye Everyone <br>";
    }

    
}

trait hi{
    public function sayhi(){
        echo "Hi Everyone <br>";
    }
}


class A{

    use test, hi;

}

class B{

    use test, hi;

}



$obj = new A();
$obj2 = new B();

$obj->sayHello();
$obj->sayBye();
$obj->sayhi();