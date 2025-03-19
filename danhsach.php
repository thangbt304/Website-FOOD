    <?php
    require_once('config.php');
    $sql = "SELECT * FROM danhmuc";
    $tatcadanhmuc = mysqli_query($connection, $sql);
    session_start();
    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (isset($_SESSION['matk'])) {
        $matk = $_SESSION['matk'];
        // Sử dụng $matk để thực hiện các thao tác liên quan đến tài khoản
    } else {
        // Người dùng chưa đăng nhập, thực hiện các hành động phù hợp
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
        <style>
            .category {
                margin-bottom: 40px;
                border-bottom: 1px solid #ddd;
                padding-bottom: 20px;
            }

            .category h2 {
                margin-bottom: 10px;
                font-size: 1.5em;
                color: #333;
            }

            .category ul {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                flex-wrap: wrap;
            }

            .category ul li {
                /* width: calc(33.33% - 20px); Hiển thị 3 sản phẩm mỗi hàng */
                margin-bottom: 20px;
                margin-right: 20px;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Thêm hiệu ứng bóng đổ */
                transition: transform 0.3s ease;
            }

            .category ul li:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Hiển thị bóng đổ lớn hơn khi hover */
            }

            .category ul li a {
                text-decoration: none;
                color: #333;
                display: block;
            }

            .category ul li img {
                width: 200px; /* Đặt kích thước tối đa của ảnh */
                height: 200px; /* Giữ tỉ lệ khung hình của ảnh */
                border-radius: 5px 5px 0 0; /* Bo tròn góc trên của ảnh */
            }

            .category ul li .info {
                padding: 10px;
                background-color: #f9f9f9;
                border-radius: 0 0 5px 5px; /* Bo tròn góc dưới của phần thông tin */
            }

            .category ul li .info p {
                margin: 0;
                font-size: 0.9em;
                color: #777; /* Màu chữ nhạt hơn */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php while ($danhmuc = mysqli_fetch_assoc($tatcadanhmuc)) { ?>
                <div class="category">
                    <h2><?php echo $danhmuc['tendm']; ?></h2>
                    <ul>
                        <?php
                        // Truy vấn SQL để lấy sản phẩm theo danh mục
                        $danhmucid = $danhmuc['madm'];
                        $sql = "SELECT * FROM sanpham WHERE madm = $danhmucid";
                        $tatcasanpham = mysqli_query($connection, $sql);
                        while ($sanpham = mysqli_fetch_assoc($tatcasanpham)) {
                            ?>
                            <li>
                    <a href="chitiet.php?masp=<?php echo $sanpham['masp']; ?>">
                        <img src="<?php echo $sanpham['hinhanh']; ?>" alt="<?php echo $sanpham['tensp']; ?>" width="100">
                        <p><?php echo $sanpham['tensp']; ?></p>
                        <p><?php echo $sanpham['dongia']; ?> VND</p>
                    </a>
                    <a href="add_to_cart.php?masp=<?php echo $sanpham['masp']; ?>">Thêm vào giỏ hàng</a>

                </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </body>
    </html>
