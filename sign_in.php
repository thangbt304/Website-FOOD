<?php
require_once('config.php');
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $tentk = $_POST['tentk'];
    $matkhau = $_POST['matkhau'];

    $sql = "SELECT * FROM taikhoan WHERE tentk = '$tentk' AND matkhau = '$matkhau'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['matk'] = $row['matk'];
        $_SESSION['tentk'] = $row['tentk'];
        $_SESSION['vaitro'] = $row['vaitro'];

        if ($row['vaitro'] == 'admin') {
            header("Location: admin.php");
            exit();
        } else {
            header("Location: index.php");
            exit();
        }
    } else {
        $error = "Tài khoản hoặc mật khẩu không đúng!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Sign in</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right,rgb(68, 67, 67),#151516);
        }
        a{
            text-decoration: none;
        }
        header{
            background-color: rgba(0, 7, 12, 0);
            margin-top: 120px;
            width: 450px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .error{
            color: #e5c591;
        }
        input{
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
        h1{
            font-family: 'Poppins',sans-serif ;
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
        p a{
            color: #f0f8ff;
        }
        p a:hover{
            color: #e5c591;
        }
        .signup a{
            color: black;
            padding: 20px;
            margin: 15px;
            border: 0.5px solid rgba(255, 255, 255, 0.211);
            transition: all 0.7s ease;
        }
        .signup a:hover{
            border-radius: 10px;
            background-color: #f0f8ff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sign In</h1>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

    <form action="sign_in.php" method="POST">
        <input type="text" placeholder="Tên" id="tentk" name="tentk" required>

        <input type="password" placeholder="Password" id="matkhau" name="matkhau" required>

        <div class="signin">
            <input class="si" type="submit" value="SIGN UP" name="login"></input>
        </div>

        <p style="color: rgb(149, 153, 153);" >Do you want <a href="./sign_out.php">Sign up!</a></p>
    </form>

        <hr width="100%" style="border: 0.5px solid rgba(255, 255, 255, 0.211); margin-bottom: 50px;">
        <div class="signup">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-google"></i></a>
            <a href="#"><i class="fa-brands fa-apple"></i></a>
        
        </div>
    </header>
    <script src="javascritp.js"></script>
</body>
</html>