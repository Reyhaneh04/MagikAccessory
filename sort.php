
<?php
include ("includes/header.php");


 $link = mysqli_connect("localhost","root","","shop_acessory");

 if (mysqli_connect_errno())
	exit("خطایی با شرح زیر رخ داده است:".mysqli_connect_error());

 $query = "SELECT * FROM product";

 $result = mysqli_query($link,$query);

?>
       
  
 <div class="a">
        <div class="hr">
            <hr>
            <b>  انگشتر  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result)){
            if($counter < 8){
                if ($row['pro_code'] > 0 && $row['pro_code']<100) {
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
<?php
$query1 = "SELECT * FROM product";

 $result1 = mysqli_query($link,$query);

?>
<div class="a">
        <div class="hr">
            <hr>
            <b>  گردبنبد  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result1)){
            if($counter < 8){
                if ($row['pro_code'] > 200 && $row['pro_code']<300) {
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

<?php
$query2 = "SELECT * FROM product";

 $result2 = mysqli_query($link,$query);

?>

</div>

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
		while($row=mysqli_fetch_array($result2)){
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
<?php
$query3 = "SELECT * FROM product";

 $result3 = mysqli_query($link,$query);

?>
<div class="a">
        <div class="hr">
            <hr>
            <b>   دستبند  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result3)){
            if($counter < 8){
                if ($row['pro_code'] > 400 && $row['pro_code']<500) {
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
<?php
$query4 = "SELECT * FROM product";

 $result4 = mysqli_query($link,$query);

?>
<div class="a">
        <div class="hr">
            <hr>
            <b>  گوشواره  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result4)){
            if($counter < 8){
                if ($row['pro_code'] > 500 && $row['pro_code']<600) {
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
<?php
$query5 = "SELECT * FROM product";

 $result5 = mysqli_query($link,$query);

?>
<div class="a">
        <div class="hr">
            <hr>
            <b>   پابند  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result5)){
            if($counter < 8){
                if ($row['pro_code'] > 600 && $row['pro_code']<700) {
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
<?php
$query6 = "SELECT * FROM product";

 $result6 = mysqli_query($link,$query);

?>
<div class="a">
        <div class="hr">
            <hr>
            <b>  پیرسینگ  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result6)){
            if($counter < 8){
                if ($row['pro_code'] > 700 && $row['pro_code']<800) {
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
<?php
$query7 = "SELECT * FROM product";

 $result7 = mysqli_query($link,$query);

?>
<div class="a">
        <div class="hr">
            <hr>
            <b>  نیم ست  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result7)){
            if($counter < 8){
                if ($row['pro_code'] > 800 && $row['pro_code']<900) {
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
<?php
$query8 = "SELECT * FROM product";

 $result8 = mysqli_query($link,$query);

?>
<div class="a">
        <div class="hr">
            <hr>
            <b>  ست کامل  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result8)){
            if($counter < 8){
                if ($row['pro_code'] > 900 && $row['pro_code']<1000) {
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
<?php
$query9 = "SELECT * FROM product";

 $result9 = mysqli_query($link,$query);

?>

<div class="a">
        <div class="hr">
            <hr>
            <b>   کیف پول و جاکارتی  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result9)){
            if($counter < 8){
                if ($row['pro_code'] > 1000 && $row['pro_code']<1100) {
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
<?php
$query10 = "SELECT * FROM product";

 $result10 = mysqli_query($link,$query);

?>

<div class="a">
        <div class="hr">
            <hr>
            <b> باکس و جعبه اکسسوری  </b>
            <hr>
          </div>
        
          <div class="p">
 <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
		<?php
		$counter=0;
		while($row=mysqli_fetch_array($result10)){
            if($counter < 8){
                if ($row['pro_code'] > 100 && $row['pro_code']<200) {
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
<br><br>
<?php
include ("includes/footer.php");
?>