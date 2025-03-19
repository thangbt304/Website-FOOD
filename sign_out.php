<?php
require_once('config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $tentk = $_POST['tentk'];
    $matkhau = $_POST['matkhau']; // Mật khẩu không được băm
    $vaitro = $_POST['vaitro'];

    $sql = "INSERT INTO taikhoan (tentk, matkhau, vaitro) VALUES ('$tentk', '$matkhau', '$vaitro')";

    if ($connection->query($sql) === TRUE) {
        echo "Đăng ký thành công!";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $connection->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Sign up</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, rgb(68, 67, 67), #151516);
            height: 100vh;
            margin: 0;
        }
        a {
            text-decoration: none;
        }
        header {
            background-color: rgba(0, 7, 12, 0);
            margin-top: 120px;
            width: 450px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .Sign{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .error {
            color: #e5c591;
        }
        select{
            letter-spacing: 3px;
            width: 250px;
            height: 40px;
            padding: 0px 20px;
            margin-top: 20px;
            background-color: rgba(0, 7, 12, 0);
            color: #f0f8ff;
            outline: none;
            background-color: #37363600;
            border: 0.5px solid rgba(255, 255, 255, 0.211);
        }
        input {
            letter-spacing: 3px;
            width: 300px;
            height: 40px;
            padding: 0px 20px;
            margin-top: 20px;
            background-color: rgba(0, 7, 12, 0);
            color: #f0f8ff;
            outline: none;
            background-color: #37363600;
            border: 0.5px solid rgba(255, 255, 255, 0.211);
        }
        h1 {
            font-family: 'Poppins', sans-serif;
            color: #f0f8ff;
        }
        .signin {
            width: 40%;
        }
        .signin .si {
            font-weight: 600;
            color: #e5c591;
            letter-spacing: 3px;
            width: 100%;
            height: 40px;
            background-color: rgba(0, 7, 12, 0);
            border: 2px solid #e5c591;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .signin .si:hover {
            transition: 1s;
            color: black;
            background-color: #e5c591;
        }
        p a {
            color: #f0f8ff;
        }
        p a:hover {
            color: #e5c591;
        }
        .signup a {
            color: #f0f8ff;
            padding: 20px;
            margin: 15px;
            border: 0.5px solid rgba(255, 255, 255, 0.211);
            transition: all 0.7s ease;
        }
        .signup a:hover {
            border-radius: 10px;
            background-color: #f0f8ff;
            color: black;
        }
    </style>
</head>
<body>
    <header>
    <form class="Sign" action="sign_out.php" method="POST">
        <h1>Sign up</h1>
        
        <input type="text" placeholder="Tên" id="tentk" name="tentk" required>

        <input type="password" placeholder="Mật khẩu" id="matkhau" name="matkhau" required>

        <select name="vaitro" id="vaitro">
            <option value="user">Người dùng</option>
        </select> <br>
                
        <div class="signin">
            <input class="si" type="submit" value="SIGN UP" name="register"></input>
        </div>
        <p style="color: rgb(149, 153, 153);">Do you want<a href="sign_in.php"> Sign in!</a></p>
        <hr width="100%" style="border: 0.5px solid rgba(255, 255, 255, 0.211); margin-bottom: 50px;">
    </form>

        <div class="signup">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-google"></i></a>
            <a href="#"><i class="fa-brands fa-apple"></i></a>
        </div>
    </header>
</body>
</html>
