<?php
if (isset($_GET['ma'])) {
    require('config.php');
    $sql = "SELECT * FROM sanpham WHERE masp = '" . $_GET['ma'] . "'";
    $data = mysqli_query($connection, $sql);
    $sanpham = mysqli_fetch_array($data);
}

// Chức năng sửa
if (isset($_POST['masp']) && isset($_POST['tensp']) && isset($_POST['mota']) && isset($_POST['dongia'])) {
    require('config.php');
    $duongdan = $sanpham['hinhanh']; // Mặc định là hình ảnh hiện tại
    if (isset($_FILES['ava']) && $_FILES['ava']['error'] == 0) {
        $picture = $_FILES['ava'];
        $duongdan = 'uploadFiles/' . basename($picture['name']);
        if (!move_uploaded_file($picture['tmp_name'], __DIR__ . '/' . $duongdan)) {
            echo 'Upload file không thành công!';
            exit;
        }
    }

    $sql = "UPDATE sanpham SET tensp = '" . $_POST['tensp'] . "', mota = '" . $_POST['mota'] . "', dongia = '" . $_POST['dongia'] . "', hinhanh ='" . $duongdan . "' WHERE masp = '" . $_POST['masp'] . "'";
    mysqli_query($connection, $sql);

    header('Location: product.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        img {
            display: block;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Mã Sản Phẩm</label>
        <input type="text" name="masp" value="<?php echo $sanpham['masp']; ?>" readonly><br>
        <label for="">Tên Sản Phẩm</label>
        <input type="text" name="tensp" value="<?php echo $sanpham['tensp']; ?>"><br>
        <label for="">Mô Tả</label>
        <input type="text" name="mota" value="<?php echo $sanpham['mota']; ?>"><br>
        <label for="">Giá</label>
        <input type="number" name="dongia" value="<?php echo $sanpham['dongia']; ?>"><br>
        <label for="">Hình ảnh</label>
        <img src="<?php echo $sanpham['hinhanh']; ?>" width="100px" height="150px;"><br>
        <input type="file" name="ava"><br>
        
        <input type="submit" value="Chỉnh sửa danh mục">
    </form>
</body>

</html>
