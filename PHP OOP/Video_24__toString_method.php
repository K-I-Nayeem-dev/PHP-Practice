<?php

// class abc{

//     public function __toString()
//     {
//         return "This object Can't be prited as string Class : " . get_class($this);
//     }

// }

// $test = new abc();

// echo $test;


class efg{

    public function __toString()
    {
        return "can't print object as a string of class : " . get_class($this);
    }

}

$show = new efg();

echo $show;