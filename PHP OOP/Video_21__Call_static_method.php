<?php

// class call_static
// {
//     private static function hello()
//     {
//         echo "Hello this is Call Static Function <br>";
//     }

//     public static function __callStatic($method, $arguments)
//     {
//         if (method_exists(__CLASS__, $method)) {
//             call_user_func_array([__CLASS__, $method], $arguments) . "<br>";
//         } else {
//             echo "This is not public method : ($method)";
//         }
//     }
// }

// call_static::hello();
// call_static::func();

//////////////////////////////////////////////////////////////////////////////////////////


class hello{

    private static function call($hello){
        echo "this is another Call_static function : $hello";
    }

    public static function __callStatic($method, $arguments)
    {
        if(method_exists(__CLASS__, $method)){
            call_user_func_array([__CLASS__, $method] , $arguments);
        }
        else{
            echo "this is a private method : ($method)";
        }
    }

}

hello::call('Kmn acho tumi bondhu');
