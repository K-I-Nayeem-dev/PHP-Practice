<?php
session_start();
session_unset();
header('location: ../front-end/signin.php');

$_SESSION['log_in_message'] = 'Enter Email & Password to login';