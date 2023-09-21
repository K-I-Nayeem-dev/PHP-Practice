<?php

session_start();

require_once('../components/db_connect.php');

$id = $_SESSION['get_id'];

$service_header = $_POST['service_header'];

$service_description = $_POST['service_description'];

$service_icon = $_POST['service_icon'];

$services_update = "UPDATE services SET service_header = '$service_header', service_description = '$service_description', service_icon = '$service_icon' WHERE ID = $id";

mysqli_query($db_connect, $services_update);

$_SESSION['update_successfull_msg'] = 'ID : '.  $id . ' Succesfully Update';

header('location: ../Website Update/view_services.php')



?>