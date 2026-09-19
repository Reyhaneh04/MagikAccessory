<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $mobile = $_SESSION['mobile'];
    $email = $_SESSION['email'];
    $province = $_SESSION['province'];
    $city = $_SESSION['city'];
    $postalCode = $_SESSION['postalCode'];
    $address = $_SESSION['address'];
    $phone = $_SESSION['phone'];
    $comments = $_SESSION['comments'];
    $_SESSION['discountCode'] = $_POST['discountCode'];
    $_SESSION['shipping_cost'] = 35000;
    $_SESSION['total_price'] = isset($_SESSION['total_price']) ? $_SESSION['total_price'] : 0;
    $_SESSION['payable_amount'] = $_SESSION['total_price'] + $_SESSION['shipping_cost'];

    

    header("Location: pay.php");
    exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اطلاعات ارسال</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
    <div class="basket">
        <div class="icon-container">
            <div class="icon-item">
                <div class="dis">
                    <i class="fas fa-shopping-basket"></i> 
                    <p> بررسی سبد خرید</p>
                </div>
            </div>
            <hr>
            <div class="color">
                <div class="dis">
                    <i class="fas fa-shipping-fast"></i>  
                    <p>اطلاعات ارسال</p>
                </div>
            </div>
            <hr>
            <div class="icon-item">
                <i class="fas fa-wallet"></i>  
                <p>نحوه پرداخت</p>         
            </div>
            <hr>
            <div class="icon-item">
                <i class="fas fa-check-circle"></i>
                <p>پایان خرید</p>
            </div>
        </div>
    </div>
    <div class="form-container">
        <form action="" method="post">
            <div calss="form_c1">
                <div class="f">
                    <div class="fn">
                        <label for="firstName">نام:</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="lf">
                        <label for="lastName">نام‌خانوادگی:</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>
                <div class="f">
                    <div class="fn">
                        <label for="mobile">شماره موبایل:</label>
                        <input type="tel" id="mobile" name="mobile" required >
                    </div>
                    <div class="lf">
                        <label for="email">ایمیل:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                <div class="f1">
                    <div class="fn">
                        <label for="province">استان:</label>
                        <input type="text" id="province" name="province" required>
                    </div>
                    <div class="lf">
                        <label for="city">شهر:</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div class="lf">
                        <label for="postalCode">کدپستی (اختیاری):</label>
                        <input type="text" id="postalCode" name="postalCode">
                    </div>
                </div>
                <div class="f2">
                    <label for="address">آدرس پستی:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="f">
                    <div class="ff">
                        <label for="phone">تلفن ثابت (اختیاری):</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="fc">
                        <label for="comments">توضیحات (اختیاری):</label>
                        <input type="text" id="comments" name="comments">
                    </div>
                </div>
            </div>
            <div class="box" style="width:85%;">
                <div class="ct">
                    <div class="ct1">
                        <input type="text" id="discountCode" name="discountCode" placeholder="کد تخفیف">
                    </div>
                    <div class="lb">
                        <input type="button" id="applyDiscount" name="applyDiscount" value="اعمال تخفیف">
                    </div>
                </div>
                <br>
                <div class="ph">
                    <p>مبلغ کل سبد خرید: <b><?php echo isset($_SESSION['total_price']) ? number_format($_SESSION['total_price']) : 0; ?> تومان</b></p>
                    <p>هزینه ارسال: <b class="b2">35000 تومان</b></p>
                </div>
                <div class="ct2">
                    <div class="icon-text">
                        <p>مرسوله «پست پیشتاز»: <b>13500 تومان</b></p>
                    </div>
                </div>
                <div class="ph">
                    <p>مبلغ قابل پرداخت: <b><?php echo isset($_SESSION['total_price']) ? number_format($_SESSION['total_price'] + 35000) : 0; ?> تومان</b></p>
                </div>
                <div class="sub">
                    <input type="submit" name="submit" value="نهایی سازی سفارش">
                </div>
            </div>
        </form>
    </div>
    <div class="btn">
        <a href="basket.php" style="text-decoration: none;">
            <button class="b">بررسی سبد خرید</button>
        </a>
    </div>
</body>
</html>