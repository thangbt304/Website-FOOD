<?php
    require_once('config.php');
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : ''; 
    $user = isset($_SESSION['tentk']) ? $_SESSION['tentk'] : '';
    $sql = 'select * from danhmuc';
    $tatcadanhmuc= mysqli_query($connection,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foob</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./style2.css">

    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 7px;
            background: #17171900;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 0px rgba(128, 128, 128, 0); 
  
        }
 
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #e5c591; 
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: rgb(255, 213, 2); 
        }
        a.Ten{
            color: #e5c591;
        }
        a.Ten::after{
            content: "";
            position: absolute;
            width: 110%;
            height: 1.5px;
            bottom: -8px;  
            right: -5%;
            background-color: #e5c591;
            visibility: visible;
        }
        a.Ten:before{
            content: "";
            position: absolute;
            width: 110%;
            height: 1.5px;
            bottom: -12px;  
            right: -5%;
            background-color: #e5c591;
            visibility: visible;
        }
        h4{
            font-size: 30px;
            font-weight: 400;
            color: aliceblue;
        }
        
        .detail{
            width: 100%;
            display: flex;

        }
        
        .detail-1{
            margin-left: 50px;
            width: 75%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }


        .detail-1_2{
            margin-bottom: 10px;
            display: flex;
            flex-direction: row;
        }
        .detail-2{
            margin-left: 20px;
            width: 25%;
        }
        .detail-1_3{
            margin-bottom: 40px;
            cursor: pointer;
            overflow: hidden;
            background-color: #302e2e;
            width: 300px;
            height: 650px ;
            border: 2px solid #8a8a88;
        }        
        .detail-1_3:hover{
            box-shadow: 1px 0px 10px white;
        }
        .detail-1_3 img:hover{
            transform: scale(1.1);
        }
        .square-detail{ width: 100%;height: 20px;
            margin-top: 25px;
            cursor: pointer;
            display: flex;
            align-items: center;
            flex-direction: row;
        }       
        .square-detail p {
            font-size: 20px;
            color: #9d9c9c;
            transition: 0.7s;
        }
        .square-detail p:hover {
            transform: translateX(20px);
            color: #f4ef8d;
        }

        .square-min{
            width: 10px;
            height: 10px;
            margin-right: 2px;
            border: 2px solid #e5c591;
            animation: square 3s linear infinite;
        }
        @keyframes square{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }  
}
        button{
            margin-top: 20px;
            width: 200px;
            height: 50px;
            transform: translateX(0px);
        }
    </style>
</head>
<body>
    <header>
        <div class="len" >
            <a href="#dau">
                <span class="material-symbols-outlined">
                arrow_upward_alt
                </span>
            </a>
        </div>

        <div class="colo-black"></div>

        <div class="thongTinLienHe" id="dau"> 
            <div class="thongTinLienHe-right">
                <p>PHONE: +07 557 911 231</p>
                <p>EMAIL: TTHANG@GMAIL.COM</p>
            </div>

            <div class="thongTinLienHe-left">
                <p>GIFT CARD</p>
                <p>TRACK ORDER</p>
                <p>LANGUAGE</p>
            </div>

        </div>  


        <nav>
            <div class="logo">

                <img src="./imge/Logo.jpg" alt="">
            </div>
            <div class="bangDieuKhien">
                <a href="./index.php">HOME</a>
                <a href="./about.html">ABOUT</a>
                <a href="#" class="Ten">PRODUCT</a>
                <a href="#">CART</a>
                <a href="./lienhe.php">CONTACT</a>
            </div>

            <div class="thanhIcon">
                <a href="#" class="close" id="click_menu">
                    <span class="material-icons-sharp" id="menu_btn">
                        menu
                    </span>                     
                </a>
               
                <a href="./dangnhap.html">
                    <span class="material-icons-sharp" >
                        login
                    </span>                    
                </a>
            </div>

        </nav>


        <div class="menudoc" id="menu">
            <div>
                <span class="material-icons-sharp" id="xoa"> highlight_off</span>
            </div>
            
            <a href="./index.html"><span class="material-icons-sharp" class="menu_icon"> home </span> </a>
            <a href="./about.html"><span class="material-icons-sharp" class="menu_icon"> photo library </span></a>
            <a href="./sanpham.html"><span class="material-icons-sharp" class="menu_icon"> sell </span></a> 
            <a href="./danhmuc.html"><span class="material-icons-sharp" class="menu_icon"> lists </span> </a>
            <a href="./lienhe.html"><span class="material-icons-sharp" class="menu_icon"> settings </span></a> 
        </div>


    </header>   

    <div class="main0"></div>

    <main>
        <div class="main_conten">
            <p class="comen1">PLEASE CONTACT US</p>
                <div class="square">
                    <div class="square-min"></div>
                    <div class="square-min"></div>
                    <div class="square-min"></div>
                </div> <br>
            <h1>Product</h1>  <br><br><br>
        </div>

        <div class="detail"> 
            <div class="detail-2">
                <h4>Categories</h4>
                <div>                 
                    <div class="square-detail"><div class="square-min" style="margin-right:20px ;"></div><p> Sushi (9)</p>  </div>                
                    <div class="square-detail"><div class="square-min" style="margin-right:20px ;"></div><p> Drinks (4)</p></div>
                    <div class="square-detail"><div class="square-min" style="margin-right:20px ;"></div><p> Sea food (7)</p></div>                  
                    <div class="square-detail"><div class="square-min" style="margin-right:20px ;"></div><p> Combo chicken (2)</p></div>
    
                </div>
    
                <br> <br>
                <h4>Featured products</h4> <br>
                    <div class="detail-1_2">
                        <img src="./imge/anh1-2.jpg"style="width: 120px; height: 120px;object-fit: cover; border: 3px solid white; border-radius: 15px;" alt="">
                        <div class="conten3" style="margin-left: 20px;">
                            <div class="title"> 
                                <h1 style="color: #e5c591; font-size: 30px; padding-bottom: 10px;">Sushi</h1>
                                <p style="font-family: serif; font-size: 25px;color: #e5c591;">$25.50 <s style="font-size: 15px; color: #9d9c9c;">$40.0</s></p>
                                <img src="./imge/rating.png" width="150px">
                            </div>
                        </div>
                    </div>
                    <div class="detail-1_2">
                        <img src="./imge/anh3.jpg"style="width: 120px; height: 120px;object-fit: cover; border: 3px solid white; border-radius: 15px;" alt="">
                        <div class="conten3" style="margin-left: 20px;">
                            <div class="title"> 
                                <h1 style="color: #e5c591; font-size: 30px; padding-bottom: 10px;">Beefsteak</h1>
                                <p style="font-family: serif; font-size: 25px;color: #e5c591;">$10.50 <s style="font-size: 15px; color: #9d9c9c;">$20.0</s></p>
                                <img src="./imge/rating.png" width="150px">
                            </div>
                        </div>
                    </div>
                    <div class="detail-1_2">
                        <img src="./imge/drink2.jpg"style="width: 120px; height: 120px;object-fit: cover; border: 3px solid white; border-radius: 15px;" alt="">
                        <div class="conten3" style="margin-left: 20px;">
                            <div class="title"> 
                                <h1 style="color: #e5c591; font-size: 30px; padding-bottom: 10px;">Macha</h1>
                                <p style="font-family: serif; font-size: 25px;color: #e5c591;">$30.50 <s style="font-size: 15px; color: #9d9c9c;">$50.0</s></p>
                                <img src="./imge/rating.png" width="150px">
                            </div>
                        </div>
                    </div>
                    <div class="detail-1_2">
                        <img src="./imge/anh4.jpg"style="width: 120px; height: 120px;object-fit: cover; border: 3px solid white; border-radius: 15px;" alt="">
                        <div class="conten3" style="margin-left: 20px;">
                            <div class="title"> 
                                <h1 style="color: #e5c591; font-size: 30px; padding-bottom: 10px;">Cooked rice</h1>
                                <p style="font-family: serif; font-size: 25px;color: #e5c591;">$15.50 <s style="font-size: 15px; color: #9d9c9c;">$25.0</s></p>
                                <img src="./imge/rating.png" width="150px">
                            </div>
                        </div>
                    </div>
                    <div class="detail-1_2">
                        <img src="./imge/drink4.jpg"style="width: 120px; height: 120px;object-fit: cover; border: 3px solid white; border-radius: 15px;" alt="">
                        <div class="conten3" style="margin-left: 20px;">
                            <div class="title"> 
                                <h1 style="color: #e5c591; font-size: 30px; padding-bottom: 10px;">Strawberry smoothie</h1>
                                <p style="font-family: serif; font-size: 25px;color: #e5c591;">$20.0 <s style="font-size: 15px; color: #9d9c9c;">$30.0</s></p>
                                <img src="./imge/rating.png" width="150px">
                            </div>
                        </div>
                    </div>
            </div>

                <div class="detail-1">
                <?php while ($danhmuc = mysqli_fetch_assoc($tatcadanhmuc)) { ?>
                         <?php
                        // Truy vấn SQL để lấy sản phẩm theo danh mục
                        $danhmucid = $danhmuc['madm'];
                        $sql = "SELECT * FROM sanpham WHERE madm = $danhmucid";
                        $tatcasanpham = mysqli_query($connection, $sql);
                        while ($sanpham = mysqli_fetch_assoc($tatcasanpham)) {
                            ?>           
                    <div class="detail-1_3">
    
                        <a href="chitiet.php?masp=<?php echo $sanpham['masp']; ?>">
                        <img src="<?php echo $sanpham['hinhanh']; ?>" style="width: 400px; height: 300px;object-fit: cover;transition: 1s;" alt="<?php echo $sanpham['tensp']; ?>">
                    
                        <div class="conten3" style="margin-left: 20px;">
                            <div class="title"> 
                                <h1 style="color: #e5c591; font-size: 25px; padding-bottom: 10px;"><?php echo $sanpham['tensp']; ?></h1>
                                <p style="font-size: 15px;color: #9d9c9c;">Category: Food</p><br>
                                <p style="font-size: 15px;color: #cecaca;">Information: <p style="font-size: 15px;color: #9d9c9c;"><?php echo $sanpham['mota']; ?></p></p> <br>
                                <p style="font-family: serif; font-size: 25px;color: #e5c591;">$<?php echo $sanpham['dongia']; ?></p>

                                <a href="add_to_cart.php?masp=<?php echo $sanpham['masp']; ?>">Add to cart</a>
                            </div>

                        </div> 
                        </a>
                        
                    </div>                        
                   <?php } ?>
                <?php } ?>



        </div> 

    </main>






    <footer>
        <div class="foot-black">

        </div>
        <div class="footer-img">
            <img src="./imge/background_footer.jpg" alt="">
        </div>

        <div class="foot-conten">
            <div class="box1">
                <a href="./index.html">HOME</a>
                <a href="">ABOUT</a>
                <a href="">PRODUCT</a>
                <a href="">BLOG</a>
                <a href="">CONTACT</a>
            </div>
            <div class="box2">
                <img class="foot-menu" src="./imge/menu_food.jpg" alt="">
                <div class="box2-1"> 
                    <img class="foot-logo" src="./imge/Logo.jpg" alt="logo">
                    <p><span class="material-symbols-outlined"> location_on </span>
                        K6?/5? ,Nguyễn Phan Vinh, Sơn Trà, Đà Nẵng, VietNam, ASEA</p>

                    <p><span class="material-symbols-outlined"> account_circle</span>
                        buithethang@gmail.com</p>

                    <p><span class="material-symbols-outlined">call</span>
                        Booking Request: +77-432-654321 </p>

                    <p><span class="material-symbols-outlined"> schedule</span>
                        Open : 07:00 am - 01:00 pm </p>

                    <div class="square">
                        <div class="square-min"></div>
                        <div class="square-min"></div>
                        <div class="square-min"></div>
                    </div>

                    <h1> Get News & Offers</h1>
                    <p>Subscribe ASEA & Get <b style="color: aliceblue;">34% Off!</b> </p>

                    <div class="subscribe">
                        <span class="material-symbols-outlined" style="color: aliceblue;">
                            mail
                        </span>
                        <input class="sub-input" type="text" placeholder="Your email">
                        <p class="sup">SUBSCRIBE</p>
                    </div>
                    <p style="margin-top: 30px;">Nếu như chưa có tài khoảng hãy nhấp vào <a href="#">register?</a> </p>
                </div>
                
            </div>
            <div class="box3">
                <a href="">facebook</a>
                <a href="">TikTok</a>
                <a href="">Twitter</a>
                <a href="">Instagram</a>
                <a href="">Facebook</a>
            </div>
        </div>
    </footer>



    <script src="javascritp.js"></script>
</body>
</html>