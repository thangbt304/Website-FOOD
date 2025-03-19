<?php
    if(isset($_GET['macanxoa'])){
        if (isset($_GET['xacnhan']) && $_GET['xacnhan'] == 'xoa'){
            require('config.php');
            $sql = "delete from sanpham where masp = '" .$_GET['macanxoa'] ."'";
            mysqli_query($connection,$sql);
            header('location: admin.php');
        }
        if (isset($_GET['xacnhan']) && $_GET['xacnhan'] == 'huy'){
            header('location: admin.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .confirmation-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        button {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 0 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>
    <center>
        <h1>Bạn có chắc chắn xóa sản phẩm<?php echo $_GET['ma'];?></h1>
        <form action="">
            <!-- Lưu mã xóa -->
            <input type="hidden" name="macanxoa" value="<?php echo $_GET['ma'];?>">
            <button name="xacnhan" value="xoa">Xóa</button>
            <button name="xacnhan" value="huy">Hủy</button>
        </form>
    </center>
</body>
</html>