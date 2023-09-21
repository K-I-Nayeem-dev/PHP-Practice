<?php

include('database.php');

$obj = new Database();

// $obj->insert('studens_details', ['Name'=> 'Nayeem', 'Gender' => 'male', 'Age'=> '25']);

// echo "Insert Result is : " ;
// print_r($obj->getResult());

// $obj->update('studens_details', ['Name'=> 'Elon Mk',], 'age="20" || gender="female"');

// echo "<pre>";
// echo "Update Result is : " ;
// print_r($obj->getResult());
// echo "</pre>";

// $obj->delete('studens_details', 'age = "20"');

// echo "<pre>";
// echo "Delete Result is : " ;
// print_r($obj->getResult());
// echo "</pre>";

// $obj->sql('SELECT * FROM studens_details');

// echo "<pre>";
// echo "SQL Result is : " ;
// print_r($obj->getResult());
// echo "</pre>";

$obj->select('users', "*", null , 'id="71"', null, null);

echo "<pre>";
echo "SQL Result is : " ;
print_r($obj->getResult());
echo "</pre>";