<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foob</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./style.css">

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
        <div class="backG">
            <img src="./imge/anh7.jpg" alt="">
        </div>
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
                <a href="#" class="Ten">HOME</a>
                <a href="./about.html">ABOUT</a>
                <a href="./danhmuc.php">PRODUCT</a>
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
            
            <a href="./index.html"><span class="material-icons-sharp" class="menu_icon"> home </span>  </a>
            <a href="./about.html"><span class="material-icons-sharp" class="menu_icon"> photo library </span> </a>
            <a href="./sanpham.html"><span class="material-icons-sharp" class="menu_icon"> sell </span> </a> 
            <a href="./danhmuc.html"><span class="material-icons-sharp" class="menu_icon"> lists </span> </a>
            <a href="./lienhe.html"><span class="material-icons-sharp" class="menu_icon"> settings </span></a> 
        </div>

        <div class="comnt">
            <p class="comen1">DELIGHTFUL  EXPERIENCE</p>
            <div>
                
                <div>
                    <img style="width: 200px;height: 80px;" src="./imge/food.png" alt="">
                </div>

            </div>
            <h1>Flavors inspired by the Seasons</h1>
            <p>Come with family & feel joi of mouth watering food</p>
            <button> VIEW OUR MENU</button>
        </div>

    </header>   

    <div class="main0"></div>

    <main>

        <div class="min_main1">

            <div class="main_conten">
                <p class="comen1">FLAVORS FOR ROYALTY</p>
                    <div class="square">
                        <div class="square-min"></div>
                        <div class="square-min"></div>
                        <div class="square-min"></div>
                    </div> <br>
                <h1 style="font-size: 45px;">We Offer Top Notch</h1>  <br><br><br>
            </div>

            <div class="tong_sanpham">


                <div class="main1_sanpham">
                        <p class="ovelow"><img src="./imge/banh_cake1.jpg" alt=""> </p><br> 
                    <p style="font-size: 20px;">Breakfast</p> 
                    <p style="font-size: 10px; color: #e5c591; cursor: pointer;">VIEW MENU</p> <br> <br>
                </div>

                <div class="main1_sanpham_edit">
                    <div class="p1">
                        <p>Lorem Ipsum is simply dummy text of the printing and</p> 
                        <p>typesetting industry  lorem Ipsum has been the industrys</p>
                        <p>standard dummy text ever.</p>    <br> <br> <br>
                    </div>
                    <div class="p2">
                        <p>Lorem Ipsum is simply dummy text of the</p> 
                        <p>printing and typesetting industry lorem</p>
                        <p>Ipsum been the industrys standard </p>
                        <p>dummy text ever.</p>    <br> <br> <br>
                    </div>


                    <p class="ovelow"><img src="./imge/anh3.jpg" alt=""></p><br> 
                    <p style="font-size: 20px;">Appetizers</p> 
                    <p style="font-size: 10px; color: #e5c591; cursor: pointer;">VIEW MENU</p> <br> <br>
                </div>

                <div class="main1_sanpham">
                    <p class="ovelow"><img src="./imge/drink.jpg" alt=""></p><br>
                    <p style="font-size: 20px;">Drinks</p> 
                    <p style="font-size: 10px; color: #e5c591; cursor: pointer;">VIEW MENU</p> <br>
                </div>
            </div>

        </div>


        <div class="min_main2">
            <img src="./imge/anh1-2.jpg" alt="">

            <div class="conten">
                <img src="./imge/bookmark.png" alt="">

                <div class="conten2">
                    <p class="comen1">SPECIAL DISH</p>
                    <div class="square" style="padding-top: 10px; justify-content: flex-start;">
                        <div class="square-min"></div>
                        <div class="square-min"></div>
                        <div class="square-min"></div>
                    </div> <br>
                    <h1 style="color: aliceblue; font-size: 40px;">Lobster Tortellini</h1> <br>
                    <p>Lorem Ipsum is simply dummy text of the printingand 
                        typesetting industry  lorem ipsum has been the industrys 
                        standard dummy text ever since the when an unknown printer
                         took a galley of type.</p> <br> <br>

                    <div class="tien">
                        <p style="font-size: 15px;color: rgb(100, 100, 99);">$40.00 &#160 &#160 <b style="font-size: 20px;color: #e5c591;">$20.00</b> </p>  
                    </div>
                    <button style="transform: translate(0px); width: 200px;height: 40px;">VIEW ALL MENU</button>                  
                </div>

            </div>
        </div>


        <div class="min_main3">
            <div class="main_conten">
                <p class="comen1">SPECIAL SELECTION</p>
                    <div class="square">
                        <div class="square-min"></div>
                        <div class="square-min"></div>
                        <div class="square-min"></div>
                    </div> <br>
                <h1>Delicious Menu</h1> <br>
            </div>


            <div class="sanpham">
                <div class="cot1">
                    <div class="sp">
                        <img src="./imge/anh1-1.jpg" >
                        <div class="conten3">
                            <div class="title">
                                <h1 style="color: #e5c591; font-size: 20px; padding-bottom: 10px;">Greek Salad</h1>
                                <p style="font-family: serif; font-size: 20px;color: #e5c591;">$25.50</p>
                            </div>
                            <p style="font-size: 15px;color: #9d9c9c;">Tomatoes, green bell pepper, sliced cucumber onion,
                                olives, and feta cheese.</p>
                        </div>
                    </div>

                    <div class="sp">
                        <img src="./imge/anh1-1.jpg" >
                        <div class="conten3">
                            <div class="title">
                                <h1 style="color: #e5c591; font-size: 20px; padding-bottom: 10px;">Greek Salad</h1>
                                <p style="font-family: serif; font-size: 20px;color: #e5c591;">$25.50</p>
                            </div>
                            <p style="font-size: 15px;color: #9d9c9c;">Tomatoes, green bell pepper, sliced cucumber onion,
                                olives, and feta cheese.</p>
                        </div>
                    </div>

                    <div class="sp">
                        <img src="./imge/anh1-1.jpg" >
                        <div class="conten3">
                            <div class="title">
                                <h1 style="color: #e5c591; font-size: 20px; padding-bottom: 10px;">Greek Salad</h1>
                                <p style="font-family: serif; font-size: 20px;color: #e5c591;">$25.50</p>
                            </div>
                            <p style="font-size: 15px;color: #9d9c9c;">Tomatoes, green bell pepper, sliced cucumber onion,
                                olives, and feta cheese.</p>
                        </div>
                    </div>
                </div>

                <div class="cot2"></div>

                <div class="cot3">
                    <div class="sp">
                        <img src="./imge/anh1-1.jpg" >
                        <div class="conten3">
                            <div class="title">
                                <h1 style="color: #e5c591; font-size: 20px; padding-bottom: 10px;">Greek Salad</h1>
                                <p style="font-family: serif; font-size: 20px;color: #e5c591;">$25.50</p>
                            </div>
                            <p style="font-size: 15px;color: #9d9c9c;">Tomatoes, green bell pepper, sliced cucumber onion,
                                olives, and feta cheese.</p>
                        </div>
                    </div>

                    <div class="sp">
                        <img src="./imge/anh1-1.jpg" >
                        <div class="conten3">
                            <div class="title">
                                <h1 style="color: #e5c591; font-size: 20px; padding-bottom: 10px;">Greek Salad</h1>
                                <p style="font-family: serif; font-size: 20px;color: #e5c591;">$25.50</p>
                            </div>
                            <p style="font-size: 15px;color: #9d9c9c;">Tomatoes, green bell pepper, sliced cucumber onion,
                                olives, and feta cheese.</p>
                        </div>
                    </div>

                    <div class="sp">
                        <img src="./imge/anh1-1.jpg" >
                        <div class="conten3">
                            <div class="title">
                                <h1 style="color: #e5c591; font-size: 20px; padding-bottom: 10px;">Greek Salad</h1>
                                <p style="font-family: serif; font-size: 20px;color: #e5c591;">$25.50</p>
                            </div>
                            <p style="font-size: 15px;color: #9d9c9c;">Tomatoes, green bell pepper, sliced cucumber onion,
                                olives, and feta cheese.</p>
                        </div>
                    </div>

                </div>
            </div>
            <p align="center" style=" color: aliceblue;padding-bottom: 30px;">During winter daily from <b style="color: #e5c591;">7:00</b> to <b style="color: #e5c591;">9:00</b></p>

            <button align="center" style="font-size: 10px; height: 40px;margin-bottom: 20px;">VIEW ALL MENU</button>

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
                <a href="">HOME</a>
                <a href="./about.html">ABOUT</a>
                <a href="./sanpham.html">PRODUCT</a>
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
                        <input type="text" placeholder="Your email">
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



    <script src="./javascritp.js"></script>
</body>
</html>