<?php

class destruct{

    // public function __construct()
    // {
    //     echo "this is construct Method <br>";
    // }

    public function hell(){
        echo "Hello Everyone <br>";
    }

    public function hellp(){
        echo "Hello Everyone Hi <br>";
    }

    

    public function __destruct()
    {
        echo "this is destruct method <br>";
    }

}

$test = new destruct();

$test->hell();