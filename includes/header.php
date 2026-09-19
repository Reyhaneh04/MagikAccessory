<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
       
    <header  class="site-navbar mt-3">
    <div class="container-fluid" >
        <div class="row align-items-center" >
    <div class="logo">
        <img  src="image/logo.png" alt="" height="100px"/>
    </div>
    <nav class="main-menu">
        <ul class="menu-4">
           
<li class="li"><a class="a set_style_link"   data-hover="صفحه اصلی" href="index.php" style="transform: translateY(100%);" >صفحه اصلی</a></li>
<li class="li"><a class="a set_style_link"  data-hover="تخفیف فوق العاده" href="#tpc">تخفیف فوق العاده</a></li>
<li class="li has-children"><a class="a set_style_link"  data-hover="دسته بندی بدلیجات" href="sort.php">دسته بندی بدجیلات</a>
    <ul class="dropdown" >
        <li ><a class="  set_style_link"  href="sort.php"> ساعت</a></li>
        <li><a class=" set_style_link" href="sort.php">انگشتر</a></li>
        <li ><a class="  set_style_link"  href="sort.php"> گردنبند</a></li>
        <li ><a class="  set_style_link"  href="sort.php"> دستبند</a></li>
        <li ><a class="  set_style_link"  href="sort.php"> گوشواره</a></li>
        <li ><a class="  set_style_link"  href="sort.php"> پابند</a></li>
        <li ><a class="  set_style_link"  href="sort.php"> پیرسینگ</a></li>
        <li ><a class="  set_style_link"  href="sort.php"> نیم ست</a></li>
        <li ><a class="  set_style_link"  href="sort.php">  ست کامل</a></li>


      </ul>
</li>
<li class="li  has-children"><a class="a set_style_link"   data-hover="دسته ندی اکسسوری " href="sort.php">دسته بندی اکسسوری</a>
    <ul class="dropdown" >
        <li ><a class="  set_style_link"  href="sort.php"> کیف پول و جاکارتی</a></li>
        <li ><a class="  set_style_link"  href="sort.php"> باکس و جعبه اکسسوری</a></li>


        
      </ul>
</li>
<li class="li"><a class="a set_style_link"  data-hover="اینستاگرام ما" href="https://instagram.com"> اینستاگرام ما </a></li>
                </ul>
            </nav>
            <div class="contain2"> 
                <a href="login.php" style="text-decoration: none;">
                <button class="log">وارد شوید</button>
                </a>
            <style class="t" >|</style>
            <a href="login.php" style="text-decoration: none;">
                <a href="signup.php" style="text-decoration: none;">
                <button class="log"> عضویت</button>
                </a>
                <?php
					      if(isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")
						  {
                            ?>
                <style class="t" >|</style>
                <a href="admin_products.php" style="text-decoration: none;">
                <button class="log"> محصولات</button>
                </a>
                <style class="t" >|</style>
                <a href="admin_orders_manage.php" style="text-decoration: none;">
                <button class="log"> سفارشات</button>
                </a>
                <?php
									}
										?>
                <a href="basket.php" style="text-decoration: none;"><button class="button-with-icon" >
                    سبد خرید <i class="fas fa-shopping-cart"></i> 
                </button>
            </a>

                <form class="f" action="action_search.php"  method="post" id="search">
                    <button class="search-button" type="submit">
                        <i class="fas fa-search"></i> 
                    </button>
                    <input name="search" type="text" size="10" placeholder="جستجوی محصول..." />
                    
                </form>


            </div>
           
           
        </div>
        </div>
         <div class="b">
            
							<div class="slideshow-container">
                                <a href="sort.php" class="ab">
                                 <div class="mySlides fade">
                                        <div class="numbertext">1 / 4</div>
                                        <img src="image/b1.jpg" style="width:100%;">
                                   </div>
                                </a>
                                <a href="sort.php" class="ab">
                                   <div class="mySlides fade">
                                       <div class="numbertext">2 / 4</div>
                                       <img src="image/b2.jpg" style="width:100%" >
                                    </div>
                                </a>
                                    <a href="sort.php" class="ab">
                                  <div class="mySlides fade">
                                    <div class="numbertext">3 / 4</div>
                                        <img src="image/b3.jpg" style="width:100%">
                                   </div>
                                </a>
                                   <a href="sort.php" class="ab">
                                   <div class="mySlides fade">
                                   <div class="numbertext">4 / 4</div>
                                        <img src="image/b4.jpg" style="width:100%">
                                   </div>
                                </a>
                                 

                         </div>
                         <br>
                         <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span> 
                            <span class="dot" onclick="currentSlide(2)"></span> 
                            <span class="dot" onclick="currentSlide(3)"></span> 
                            <span class="dot" onclick="currentSlide(4)"></span> 
                        </div>
                        <script>
                           var slideIndex = 0;
                           showSlides();

                          function showSlides() {
                           var i;
                           var slides = document.getElementsByClassName("mySlides");
                           for (i = 0; i < slides.length; i++) {
                           slides[i].style.display = "none"; 
                           }
                           slideIndex++;
                           if (slideIndex > slides.length) {slideIndex = 1} 
                           slides[slideIndex-1].style.display = "block"; 
                           setTimeout(showSlides, 4000); 
                           }
                        </script>
                        

                             </div>
                        
                         
                        
                        
                       
    </header>
    <main>