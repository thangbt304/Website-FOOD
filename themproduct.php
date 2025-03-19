<?php

if (isset($_POST['tensp']) && isset($_POST['mota']) && isset($_POST['dongia']) && isset($_POST['masp']) && isset($_POST['madm'])) {
    if (isset($_FILES['ava'])) {
        $picture = $_FILES['ava'];
        $path = __DIR__ . '/uploadFiles';
        if (!is_dir($path))
            mkdir($path, 0777, true); // Tạo thư mục nếu chưa tồn tại

        // Hàm di chuyển file
        if (move_uploaded_file($picture['tmp_name'], $path . '/' . $picture['name'])) {
            // Xử lý thêm mới
            $duongdan = 'uploadFiles/' . $picture['name'];

            // Kết nối cơ sở dữ liệu
            require('config.php');

            // Kiểm tra nếu `madm` tồn tại trong bảng `danhmuc`
            $madm = $_POST['madm'];
            $madm_check_query = "SELECT * FROM danhmuc WHERE madm = ?";
            $stmt = $connection->prepare($madm_check_query);
            $stmt->bind_param("s", $madm);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Nếu `madm` tồn tại, tiến hành chèn vào bảng `sanpham`
                $sql = "INSERT INTO sanpham (masp, tensp, mota, dongia, hinhanh, madm) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $connection->prepare($sql);
                $stmt->bind_param("ssssss", $_POST['masp'], $_POST['tensp'], $_POST['mota'], $_POST['dongia'], $duongdan, $madm);
                if ($stmt->execute()) {
                    echo 'Thêm mới sản phẩm thành công!';
                    header('Location: admin.php');
                } else {
                    echo 'Lỗi khi chèn dữ liệu: ' . $stmt->error;
                }
            } else {
                echo 'Lỗi: Mã danh mục không tồn tại.';
            }
        } else {
            echo 'Upload file không thành công!';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
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
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: white;
            color: black;
            box-shadow: inset 0px 0px 5px 5px rgba(0, 0, 0, 0.5);
        }
        img {
            display: block;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data" class="them-right">
    <label for="masp">Mã Sản Phẩm</label>
    <input type="text" name="masp" id="masp"> <br>
    <label for="tensp">Tên Sản Phẩm</label>
    <input type="text" name="tensp" id="tensp"> <br>
    <label for="ava">Hình Ảnh</label>
    <input type="file" name="ava" id="ava"><br>
    <label for="mota">Mô Tả</label>
    <input type="text" name="mota" id="mota"> <br>
    <label for="dongia">Giá</label>
    <input type="text" name="dongia" id="dongia"> <br>
    <label for="madm">Mã danh mục</label>
    <input type="text" name="madm" id="madm"> <br>
    <input type="submit" value="Thêm mới sản phẩm">
</form>

</body>
</html>
