<?php 

$email = $_POST['delete_email'];

$db_connet = mysqli_connect('localhost', 'root', '', 'kamrul');

$delete_row = "DELETE FROM users WHERE Email = '$email'";

$delete_query = mysqli_query($db_connet, $delete_row);

header('location: user.php');

?>