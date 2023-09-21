<?php

require 'product.php';
require 'test.php';

// $obj = new first\project;

// $obj = new second\project;

// function wow(){
//     echo "this is index function <br>";
// }

// wow();
// first\wow();

use first\v1\project as f1;

$obj = new f1\project;