<?php

session_start();

require_once('../components/db_connect.php');

$service_header = $_POST['service_header'];

$service_description = $_POST['service_description'];

$service_icon = $_POST['service_icon'];

$status = $_POST['status'];

$flag = false;

if(!$service_header){
    $_SESSION['service_header_err'] = 'Plz Enter Service Header';
    $flag = true;
}

if(!$service_description){
    $_SESSION['service_description_err'] = 'Plz Enter Service Description';
    $flag = true;
}

if(!$service_icon){
    $_SESSION['service_icon_err'] = 'Plz Enter Service Icon';
    $flag = true;
}

if($flag == 1){
    header('location: ../Website Update/add_services.php');
}
else{

    $services_inset = "INSERT INTO services (service_header, service_description, service_icon, status) VALUES ('$service_header' , '$service_description' , '$service_icon', '$status');";

    mysqli_query($db_connect, $services_inset);

    header('location: ../Website Update/add_services.php');

}


?>
