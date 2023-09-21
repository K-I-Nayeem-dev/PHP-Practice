<?php

// class call
// {
//     private $first_name, $second_name;

//     private function setName($f_name, $l_name)
//     {
//         $this->first_name = $f_name;
//         $this->second_name = $l_name;
//     }

//     public function __call($method, $arguments)
//     {
//         if (method_exists($this, $method)) {
//              call_user_func_array([$this, $method], $arguments);
//         } else {
//             echo "<pre>";
//             echo "This Method is Private or Non Existing Method ($method) <br>";
//             print_r($arguments);
//             echo "</pre>";
//         }
//     }
// }

// $test = new call();

// $full_name = $test->setName("kamrul islam" , "nayeem");

// $test->hello("Arafat", "Hossain");



// echo "<pre>";
// print_r($test);
// echo "</pre>";

class calll{

    private $first_name, $last_name;

    private function full_name($f_name, $l_name){
        $this->first_name = $f_name;
        $this->last_name = $l_name;
    }

    public function __call($method, $arguments)
    {
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method] , $arguments);
        }else{
            echo "<pre>";
            echo "This Method is Non Existing or private Method : ($method) <br>";
            print_r($arguments);
            echo "</pre>";
        }
    }

}

$show = new calll();

$show->full_name("kamrul islam" , "nayeem");

echo "<pre>";
print_r($show);
echo "</pre>";

