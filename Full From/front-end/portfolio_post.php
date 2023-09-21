<?php

require_once('../front-end/db_connect.php');

session_start();

$id = $_SESSION['s_id'];

$portfolio_category = $_POST['portfolio_category'];

$portfolio_title = $_POST['portfolio_title'];

$portfolio_status = $_POST['portfolio_status'];

$portfolio_links = $_POST['portfolio_links'];

$portfolio_images = $_FILES['portfolio_images'];

if ($portfolio_category && $portfolio_title && $portfolio_status) {

    $p_i_names = $portfolio_images['name'];

    $p_i_explode = explode('.', $p_i_names);

    $p_i_extention = end($p_i_explode);

    $p_id = date('d_m_y') . time() . "." . $p_i_extention;

    $p_old_location = $portfolio_images['tmp_name'];

    move_uploaded_file($p_old_location, 'D:\programs\xampp\htdocs\Full From\front-end\img\images/' . $p_id);

    $portfolio_insert = "INSERT INTO protfolios (portfolio_category, portfolio_title, portfolio_images, portfolio_status, portfolios_links) VALUES ('$portfolio_category', '$portfolio_title', '$p_id', '$portfolio_status', '$portfolio_links')";

    mysqli_query($db_connect, $portfolio_insert);

    header('location: portfolio.php');
}
