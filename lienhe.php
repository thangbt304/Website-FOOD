<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foob</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style2.css">

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
        .hotro{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        input{
            letter-spacing: 3px;
            width: 50%;
            min-width: 300px;
            height: 40px;
            padding: 0px 20px;
            margin-top: 20px;
            background-color: rgba(0, 7, 12, 0);    
            color: #f0f8ff;
            outline: none;
            background-color: #37363600;
            border: 0.5px solid rgba(255, 255, 255, 0.211);
        }
        textarea{
            color: #f0f8ff;
            letter-spacing: 3px;
            width: 50%;
            min-width: 300px;
            height: 70px;
            padding: 7px 20px;
            margin-top: 20px;
            background-color: rgba(0, 7, 12, 0);
            border: 0.5px solid rgba(255, 255, 255, 0.211);
        }
        .error{
            color: #e5c591;
        }
        .map{
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
                <a href="./danhmuc.php">PRODUCT</a>
                <a href="./danhmuc.html">CART</a>
                <a href="./lienhe.php" class="Ten">CONTACT</a>
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
            
            <a href="./index.php"><span class="material-icons-sharp" class="menu_icon"> home </span> </a>
            <a href="./about.html"><span class="material-icons-sharp" class="menu_icon"> photo library </span></a>
            <a href="./sanpham.html"><span class="material-icons-sharp" class="menu_icon"> sell </span></a> 
            <a href="./danhmuc.html"><span class="material-icons-sharp" class="menu_icon"> lists </span> </a>
            <a href="./lienhe.php"><span class="material-icons-sharp" class="menu_icon"> settings </span></a> 
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
            <h1>Support Services</h1>  <br><br><br>
        </div>
        <div>
            <div class="hotro">

                    <input type="text" placeholder="Your Name" id="name">
                    <span id="errorname" class="error"></span>

                    <input type="text" placeholder="Phone Number" id="phone">
                    <span id="errorphone" class="error"></span>

                    <input type="date" placeholder="Phone Number">

                    <textarea name="Message" placeholder="Message" id="chat"></textarea>
                    <span id="errorchat" class="error"></span>
                
            </div>
            <button style="height: 40px; margin-top: 20px;" onclick="lienhe()">CONNECTION</button>
        </div>
        <div class="map">
            <span class="material-symbols-outlined" style="color: #c7c2b9; font-size: 50px;"> location_on </span>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d958.3857785548274!2d108.24497547578414!3d16.089181699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217f3cf64e153%3A0xd77d7c7fa9eacfc3!2zMTAyIFRyxrDGoW5nIMSQ4buLbmgsIE3Dom4gVGjDoWksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1712441720078!5m2!1svi!2s" 
            width="80%"  height="400px"   style="margin-bottom: 50px ;border-radius: 10px; border: 4px solid #e5c591;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade " ></iframe>    
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