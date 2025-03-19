<?php
if(isset($_GET['ma'])) {
    require('config.php');
    $sql = "select * from danhmuc where madm = '" . $_GET['ma'] . "'";
    $data = mysqli_query($connection, $sql);
    $danhmuc = mysqli_fetch_array($data);
}
// Chức năng sửa
if(isset($_POST['tendm']) && isset($_POST['mota'])){
    require('config.php');
    $sql="update danhmuc set tendm = '".$_POST['tendm']."', mota = '".$_POST['mota']."'  where madm = '".$_GET['ma']."'" ;
    mysqli_query($connection, $sql);

    header('location: danhmuc.php');
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
        <label for="">Mã Danh Mục</label>
        <input type="text" disabled name="madm" value="<?php echo $danhmuc['madm']; ?>"><br>
        <label for="">Tên Danh Mục</label>
        <input type="text" name="tendm" value="<?php echo $danhmuc['tendm']; ?>"><br>
        <label for="">Mô Tả</label>
        <input type="text" name="mota" value="<?php echo $danhmuc['mota']; ?>"><br>
        <input type="submit" value="Chỉnh sửa danh mục">
    </form>
</body>
</html>