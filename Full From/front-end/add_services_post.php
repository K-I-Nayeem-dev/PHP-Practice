<?php

$db_connent = mysqli_connect('localhost', 'root', '', 'kamrul');

$service_name = $_POST['service_name'];

$services_description = $_POST['services_description'];

$service_icon = $_POST['service_icon'];

$service_status = $_POST['service_status'];

$service_insert = "INSERT into services ( service_name , services_description , service_icon ,service_status) VALUES ('$service_name', '$services_description' , '$service_icon' , '$service_status')";

mysqli_query($db_connent, $service_insert);


?>