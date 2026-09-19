<?php
include ("includes/header.php");


 $link = mysqli_connect("localhost","root","","shop_acessory");

 if (mysqli_connect_errno())
	exit("خطایی با شرح زیر رخ داده است:".mysqli_connect_error());

 $query = "SELECT * FROM product";

 $result = mysqli_query($link,$query);

?>

    
    <div class="hr" id="tpc">
        <hr>
        <b>تخفیف فوق العاده </b>
        <hr>
      </div>
<div class="p">
      <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
    <?php
    $counter = 0;
    while ($row = mysqli_fetch_array($result)  ) {
        if ($row['pro_price'] < 800000) {
        if($counter < 4){
        ?>
		
      <td style="width: 33%; border:0; ">

    <div class="container" >
        <div class="table-price" style="width: 300px;height: 350px">
              <div class="pic-item" >
                   <div   height="150px" id="Layer_1"   width="150px" >
                   <a href="product.php?id=<?php echo($row['pro_code']) ?>">
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
         $counter++;
     }
    }
    }
     while ($counter < 4) {
         echo '<td style="border:0;"></td>';
      $counter++;
    }
    ?>
</table> 

  

</div>


<div class="hr2">
    <hr>
    <b>دسته بندی ها</b>
    <hr>
  </div>

  <div class="s">

  <a href="sort.php">
  <div class="image-container">
    <img src="image/sort1.png" alt="Image">
    <div class="overlay">
        <div class="text"><b>گردنبند</b></div>
    </div>
</div>
</a>

<a href="sort.php">
<div class="image-container">
    <img src="image/s2.jpg" alt="Image">
    <div class="overlay">
        <div class="text"><b>گوشواره</b></div>
    </div>
</div>
</a>

<a href="sort.php">
<div class="image-container">
    <img src="image/s3.png" alt="Image">
    <div class="overlay">
        <div class="text"><b>ساعت</b></div>
    </div>
</div>
</a>

<a href="sort.php">
<div class="image-container">
    <img src="image/s4.jpg" alt="Image">
    <div class="overlay">
        <div class="text"><b>پک انگشتر</b></div>
    </div>
</div>
</a>

<a href="sort.php">
<div class="image-container large">
    <img src="image/s5.jpg" alt="Image">
    <div class="overlay">
        <div class="text"><b>اکسسوری</b></div>
    </div>
</div>
</a>

<a href="sort.php">
<div class="image-container large">
    <img src="image/s6.jpg" alt="Image">
    <div class="overlay">
        <div class="text"><b>پیرسینگ</b></div>
    </div>
</div>
</a>

</div>
<?php
$query2 = "SELECT * FROM product ORDER BY created_at DESC";
$query2 = "SELECT * FROM product ORDER BY pro_code DESC";
$result2 = mysqli_query($link, $query2);
?>

<div class="hr">
    <hr>
    <b>  جدیدترین محصولات </b>
    <hr>
  </div>

<div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row2=mysqli_fetch_array($result2)){
            if($counter < 12){
			$counter++;
		?>
		
		
      <td style="width: 33%; border:0; ">

    <div class="container" >
        <div class="table-price" style="width: 300px;height: 350px">
              <div class="pic-item" >
                   <div   height="150px" id="Layer_1"   width="150px" >
                   <a href="product.php?id=<?php echo($row2['pro_code']) ?>">
                                      <img src="image/<?php echo($row2['pro_image']) ?>" />
                           </a>
                   </div>
               </div>
               <div class="description" >
                      
                      <h1 class="title"><?php echo($row2['pro_name']) ?></h1>
                      <br><br>
                      <h2  class="title2"><?php echo($row2['pro_price']) ?>تومان </h2 >
                      
                      
                        
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
        while ($counter % 4 != 0) {
            echo '<td style="border:0;"></td>';
            $counter++;
        }
		
	?>
</table> 

  

</div>


<?php
 $query3 = "
 SELECT product.*, SUM(orders.quantity) AS purchase_count 
 FROM product
 JOIN orders ON pro_code = orders.pro_code
 GROUP BY pro_code
ORDER BY purchase_count DESC
 ";
$query3 = "SELECT * FROM product ORDER BY pro_code DESC";
$result3 = mysqli_query($link, $query3);
?>


<div class="a">
    <div class="hr">
        <hr>
        <b>  محبوب ترین محصولات  </b>
        <hr>
      </div>
    
      <div class="p">
      <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
    <?php
    $counter = 0;
    while ($row = mysqli_fetch_array($result3)  ) {
      
        if($counter < 4){
        ?>
		
      <td style="width: 33%; border:0; ">

    <div class="container" >
        <div class="table-price" style="width: 300px;height: 350px">
              <div class="pic-item" >
                   <div   height="150px" id="Layer_1"   width="150px" >
                   <a href="product.php?id=<?php echo($row['pro_code']) ?>">
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
         $counter++;
     }
    }
    
     while ($counter < 4) {
         echo '<td style="border:0;"></td>';
      $counter++;
    }
    ?>
</table> 

  

</div>

    
    <?php
    $query4 = "SELECT * FROM product ";
    $result4 = mysqli_query($link, $query4);
?>  

    <div class="a">
        <div class="hr">
            <hr>
            <b>   ساعت ها   </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result4)){
            if($counter < 8){
                if ($row['pro_code'] > 300 && $row['pro_code']<400) {
			$counter++;
		?>
		
		
      <td style="width: 33%; border:0; ">

    <div class="container" >
        <div class="table-price" style="width: 300px;height: 350px">
              <div class="pic-item" >
                   <div   height="150px" id="Layer_1"   width="150px" >
                   <a href="product.php?id=<?php echo($row['pro_code']) ?>">
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
        while ($counter % 4 != 0) {
            echo '<td style="border:0;"></td>';
            $counter++;
        }
		
	?>
</table> 

  

</div>

        
       


        <div class="q">
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
                    <b> کارت کد تخفیف یا گیفت چیه؟ </b>
              </div>
            </a>

            <a href="#">
                <div class="full-width-box">
                    <b>سفارش ها چه زمانی تحویل به پست داده میشن؟</b>
          </div>
        </a>

        <a href="#">
            <div class="full-width-box">
                <b>کد های رهگیری کجا قرار میگیره؟</b>
      </div>
    </a>

    <a href="#">
        <div class="full-width-box">
            <b>چقدر طول میکشه بسته به دستم برسه؟</b>
  </div>
</a>

<a href="#">
    <div class="full-width-box">
        <b>آیا بدون ایمیل هم میتوانیم خرید کنیم ؟</b>
</div>
</a>

            
        </div>







    
        <?php
include ("includes/footer.php");
?>