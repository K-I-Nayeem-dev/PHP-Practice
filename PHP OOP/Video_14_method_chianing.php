<?php

class methods{
    public function first(){
        echo "First Methods <br>";
        return $this;
    }

    public function second(){
        echo "Second Methods <br>";
        return $this;
    }

    public function third(){
        echo "Thrid Methods <br>";
    }

}

$test = new methods();

$test->first()->second()->third();
