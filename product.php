<?php
    $link = mysqli_connect("localhost","root","","shop_acessory");
    if (mysqli_connect_errno())
	    exit("خطایی با شرح زیر رخ داده است:".mysqli_connect_error());

        $pro_code = 0;
        if (isset($_GET["id"]))
	        $pro_code = $_GET["id"];
        $query ="SELECT * FROM product WHERE pro_code='$pro_code'";
        $result = mysqli_query($link,$query);
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
                <a href="login.php" style="text-decoration: none;">
                <button class="log"> عضویت</button>
                </a>
                <a href="basket.php" style="text-decoration: none;"><button class="button-with-icon" >
                    سبد خرید <i class="fas fa-shopping-cart"></i> 
                </button>
            </a>

                <form class="f" action=""  method="post" id="search">
                    <button class="search-button">
                        <i class="fas fa-search"></i> 
                    </button>
                    <input name="search" type="text" size="10" placeholder="جستجوی محصول..." />
                    
                </form>


            </div>
           
           
        </div>
        </div>
    </header>

    <main>
        <div class="pdetail">
        <?php
		if($row=mysqli_fetch_array($result)){
		?>

        <div class="b1">
            
            <div class=" ps">
                <a href="#" class="ab">
                 <div class="mySlides fade">
                        <div class="numbertext">1 / 4</div>
                        <img src="image/<?php echo($row['pro_image']) ?>" style="width:100%;">
                   </div>
                </a>
                <a href="#" class="ab">
                   <div class="mySlides fade">
                       <div class="numbertext">2 / 4</div>
                       <img src="image/<?php echo($row['pro_image']) ?>" style="width:100%" >
                    </div>
                </a>
                    <a href="#" class="ab">
                  <div class="mySlides fade">
                    <div class="numbertext">3 / 4</div>
                        <img src="image/<?php echo($row['pro_image']) ?>" style="width:100%">
                   </div>
                </a>

              
                 

         </div>

         <div class="image-containerb">
            <img src="image/<?php echo($row['pro_image']) ?>" alt="تصویر 1">
            <img src="image/<?php echo($row['pro_image']) ?>" alt="تصویر 2">
            <img src="image/<?php echo($row['pro_image']) ?>" alt="تصویر 3">
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

             <div class="tdetail">
                <h1><?php echo($row['pro_name']) ?></h1>
               <p class="mo"><?php echo($row['pro_price']) ?> تومان<p>

                <ul class="social-buttons">
                    <li class="sbi"><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.telegram.org" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
                </ul>
                <p style="width:500pt"><?php echo($row['pro_detail']) ?></p>
                
            
            
            </div>
            <form method="POST" action="action_basket.php">
                   <input type="hidden" name="pro_code" value="<?php echo($row['pro_code']) ?>">
                   <input type="hidden" name="pro_name" value="<?php echo($row['pro_name']) ?>">
                  <input type="hidden" name="pro_price" value="<?php echo($row['pro_price']) ?>">
                  <input type="hidden" name="pro_image" value="<?php echo($row['pro_image']) ?>">
                  <button type="submit" class="sb">افزودن به سبد خرید</button>
                  </form>
         <?php
        }
        ?>
        </div>
           
        

            <div class="q pb">
                <div class="hr">
            
                    <hr>
                    <b>    سوالات پرتکرار   </b>
                    <hr>
                  </div>
                  <br>
                  <br>
                  <br>
    
                  
                    <a href="#">
                        <div class="full-width-box">
                            <b>آیا بدون ایمیل هم می توانیم خرید کنیم؟</b>
                  </div>
                </a>
    
            
    
                
            </div>
            <?php
    $query4 = "SELECT * FROM product ";
    $result4 = mysqli_query($link, $query4);
?>  
            <div class="a">
                <div class="hr">
                    <hr>
                    <b>محصولات مرتبط</b>
                    <hr>
                  </div>
                
                  <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result4)){
            if($counter < 8){
                if ($row['pro_code'] > 100 && $row['pro_code']<200) {
                    if($counter<4){
			$counter++;
		?>
		
		
      <td style="width: 33%; border:0; ">

    <div class="container" >
        <div class="table-price" style="width: 300px;height: 350px">
              <div class="pic-item" >
                   <div   height="150px" id="Layer_1"   width="150px" >
                   <a href="product_detail.php?id=<?php echo($row['pro_code']) ?>">
                                      <img src="image/<?php echo($row['pro_image']) ?>" />
                           </a>
                   </div>
               </div>
               <div class="description" >
                      
                      <h1 class="title"><?php echo($row['pro_name']) ?></h1>
                      <br><br>
                      <h2  class="title2"><?php echo($row['pro_price']) ?>تومان </h2 >
                      
                      
                        
                </div>
        </div>
  </div>

 
  </td>
  <?php
	if ($counter % 4 == 0) {
                echo "</tr><tr>";
            }
        }
    }
    }
        }
        while ($counter % 4 != 0) {
            echo '<td style="border:0;"></td>';
            $counter++;
        }
		
	?>
</table> 

  

</div>

                
              
                                  
            
       




    </main>

  
                
    
</body>
</html>