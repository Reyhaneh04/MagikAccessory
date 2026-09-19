<?php 
include ("includes/header.php");
?>
 <div dir="rtl" style='text-align: center;margin-top: 100pt;' >
 <?php

if (
	isset($_POST['username'])&& !empty($_POST['username'])&&
	isset($_POST['password'])&& !empty($_POST['password'])&&
	isset($_POST['email'])&& !empty($_POST['email']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
}
else
	exit("برخی از فیلدها مقدار دهی نشده");



if (filter_var($email,FILTER_VALIDATE_EMAIL) === false)
	exit("پست الکنرونیک وارد شده صحیح نیست");
?>
</div>
<?php
$link = mysqli_connect("localhost","root","","shop_acessory");

if (mysqli_connect_errno())
	exit("خطایی با شرح زیر رخ داده است:".mysqli_connect_error());

$query = "INSERT INTO users(username,password,email,type)VALUES('$username','$password','$email','0')";

if (mysqli_query($link,$query) === true)
	echo("<p style='color:green;text-align: center;margin-top: 100pt;'><b>". $username ."در فروشگاه با موفقیت انجام شد"."</b></p>");
else 
	echo("<p style='color:red;text-align: center;margin-top: 100pt;'><b>عضویت شما در فروشگاه انجام نشد</b></p>");

mysqli_close($link);

 ?> 
 <div dir="rtl" style='text-align: center;margin-top: 100pt;' >
	<?php
	echo("کاربر گرامی ثبت نام شما با موفقیت صورت گرفت <br>");
    echo("نام کاربری:".$username."</br>");
    echo("رمز عبور:".$password."</br>");
    echo("ایمیل:".$email."</br>");
	?>
 </div>

 <?php
include ("includes/footer.php")
?>
