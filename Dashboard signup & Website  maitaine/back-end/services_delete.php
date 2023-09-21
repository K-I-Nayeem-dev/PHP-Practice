<?php

session_start();

require_once('../components/db_connect.php');

$id = $_GET['id'];

$dlt = "DELETE FROM services WHERE ID = '$id'";

mysqli_query($db_connect, $dlt);

$_SESSION['services_dlt'] = 'ID : '. $id . ' is Deleted';

header('location: ../Website Update/view_services.php');

?>