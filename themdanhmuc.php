<?php
    require('config.php');
    if(isset($_POST['tendm']) && isset($_POST['mota'])) {
        $tendm = $_POST['tendm'];
        $mota = $_POST['mota'];
    
        $sql = "INSERT INTO danhmuc (tendm, mota) VALUES ('$tendm', '$mota')";
    
        if(mysqli_query($connection, $sql)) {
            header('location: danhmuc.php');
        } else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($connection);
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

</div>

<form action="" method="post" enctype="multipart/form-data" class="them-right">
    <label for="">Tên danh mục</label>
    <input type="text" name="tendm" id=""> <br>
    <label for="">Mô Tả</label>
    <input type="text" name="mota" id=""> <br>
    <!-- <label for=""></label>
    <input type="text" name="diem" id=""> <br> -->
    <input type="submit" name="" value="Thêm mới danh mục">
</form>



</div>

</body>
</html>