<?php

// require '../Video_17___autoload_method().php/first.php';
// require '../Video_17___autoload_method().php/second.php';
// require '../Video_17___autoload_method().php/third.php';

spl_autoload_register(function($class){
    require "../Video_17___autoload_method.php/" . $class . ".php";
});

$test = new first();
$test = new second();
$test = new third();