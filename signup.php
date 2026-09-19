<?php 

	if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true){
?>
<script type="text/javascript">
	<!--
	location.replace("index.php");
	-->
</script>
<?php
} 
	?>

<script type="text/javascript">
	function check_empty(){
		var username = "";
		username = document.getElementById("username").value;
		if (username == "")
			{
			window.alert("وارد کردن نام کاربری الزامی است");
			}
		else
			{
				var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
				if (r == true)
					{
						document.register.submit();
					}
			}
	}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body class="email">
<form  name="login" method="post" action="action_signup.php">
  <div class="boxe">
   <h2>ورود یا ثبت نام</h2>
   <p>نام کاربری</p>
   <input  type="text"   name="username" id="username">
   <p>کلمه عبور</p>
   <input  type="password"   name="password" id="password">
   <p> پست الکرونیکی</p>
   <input type="text"  name="email" id="email">
   <input  type="button" value="ثبت نام" onClick="check_empty();" class="b">
   

  </div>
  <a href="index.html"><button class="c"><b>بازگشت</b></button></a>

    
    
</body>
</html>