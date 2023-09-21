<?php

require_once('../components/db_connect.php');

$id = $_GET['id'];

$dlt = "DELETE FROM users WHERE ID = '$id'";

mysqli_query($db_connect, $dlt);

header('location: users.php');



?>