<?php
require('config.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['matk'])) {
        $matk = $_SESSION['matk'];
        $masp = $_POST['masp'];
        $noidung = mysqli_real_escape_string($connection, $_POST['noidung']);

        $sql = "INSERT INTO binhluan (masp, matk, noidung) VALUES ('$masp', '$matk', '$noidung')";
        if (mysqli_query($connection, $sql)) {
            header("Location: chitiet.php?masp=$masp");
        } else {
            echo "Lỗi: " . mysqli_error($connection);
        }
    } else {
        header("Location: login.php");
    }
}
?>
