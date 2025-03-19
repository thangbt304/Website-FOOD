<?php
session_start();
require_once('config.php');

if (isset($_GET['masp'])) {
    $masp = $_GET['masp'];
    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (isset($_SESSION['cart'][$masp])) {
        $_SESSION['cart'][$masp]++;
    } else {
        $_SESSION['cart'][$masp] = 1;
    }
}

header('Location: giohang.php');
exit();
?>
