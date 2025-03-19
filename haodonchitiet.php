<?php
session_start();
require('config.php');

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['matk'])) {
    header('Location: login.php'); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}

if (!isset($_GET['mahd'])) {
    header('Location: admin_invoice.php');
    exit();
}

$mahd = $_GET['mahd'];

// Lấy thông tin hóa đơn
$sql = "SELECT * FROM hoadon WHERE mahd = '$mahd'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "Hóa đơn không tồn tại.";
    exit();
}

$hoadon = mysqli_fetch_assoc($result);

// Lấy chi tiết hóa đơn
$sql = "SELECT chitiethoadon.*, sanpham.tensp 
        FROM chitiethoadon 
        JOIN sanpham ON chitiethoadon.masp = sanpham.masp 
        WHERE chitiethoadon.mahd = '$mahd'";
$chitiethoadon = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Hóa Đơn</title>
    <link rel="stylesheet" href="./styles.css">
    <style>
        .container {
            padding: 20px;
        }

        .invoice-detail {
            margin-top: 20px;
        }

        .invoice-detail h3 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chi Tiết Hóa Đơn</h1>
        <div class="invoice-detail">
            <h3>Thông Tin Khách Hàng</h3>
            <p><strong>Tên KH:</strong> <?php echo ($hoadon['tenkh']); ?></p>
            <p><strong>SĐT:</strong> <?php echo ($hoadon['sdt']); ?></p>
            <p><strong>Email:</strong> <?php echo ($hoadon['email']); ?></p>
            <p><strong>Địa Chỉ:</strong> <?php echo ($hoadon['diachi']); ?></p>
            <p><strong>Tổng Tiền:</strong> <?php echo ($hoadon['tongtien']); ?>0 VND</p>
            <p><strong>Ngày Tạo:</strong> <?php echo ($hoadon['ngaytao']); ?></p>
        </div>

        <div class="invoice-detail">
            <h3>Chi Tiết Sản Phẩm</h3>
            <table>
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Thành Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($chitiet = mysqli_fetch_assoc($chitiethoadon)) { ?>
                    <tr>
                        <td><?php echo ($chitiet['tensp']); ?></td>
                        <td><?php echo ($chitiet['soluong']); ?></td>
                        <td><?php echo ($chitiet['dongia']); ?>0 VND</td>
                        <td><?php echo ($chitiet['soluong'] * $chitiet['dongia']); ?>,000 VND</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
