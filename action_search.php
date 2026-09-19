<?php
include "includes/header.php";
if(isset($_POST["search"]) && !empty($_POST["search"]))
{
$search=$_POST["search"];
}

$link=mysqli_connect("localhost","root","","shop_acessory");
        if(mysqli_connect_errno())
         exit("خطایی با شرح زیر رخ داده است".mysqli_connect_error());
		 
		 
		 $query="SELECT * FROM product WHERE pro_name LIKE '%$search%' ";
		 $result=mysqli_query($link,$query);
		 
		 ?>
		
<div class="p">
      <table width="80%" style="border:0px;margin-left: 65pt;">
    <tr>
	<?php
		$counter=0;
		while($row=mysqli_fetch_array($result)){
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
         $counter++;
     }
   
   
     while ($counter < 4) {
         echo '<td style="border:0;"></td>';
      $counter++;
    }
    ?>
</table> 

  

</div>
<br><br><br>

<?php
include "includes/footer.php";
?>	 