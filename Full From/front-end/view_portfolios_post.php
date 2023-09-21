<?php 

session_start();

require_once('../front-end/db_connect.php');

$id = $_GET["id"];

$icon_select = "SELECT icons FROM icons WHERE ID = '$id'" ;

$icon_query = mysqli_query($db_connect, $icon_select);

$icon_assoc = mysqli_fetch_assoc($icon_query)['icons'];

$_SESSION['icons_name'] = $icon_assoc;

header('location: fact.php');





?>