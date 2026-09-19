<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "shop_acessory");


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پرداخت</title>
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
            <div class="icon-item">
                <div class="dis">
                    <i class="fas fa-shipping-fast"></i>  
                    <p>اطلاعات ارسال</p>
                </div>
            </div>
            <hr>
            <div class="color">
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
    <div>
        <div class="pay1">
            <img src="image/pay.png">
        </div>
        <div class="box pay">
            <?php
            if (!$link) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $total_price = isset($_SESSION['total_price']) ? $_SESSION['total_price'] : 0;
            $shipping_cost = isset($_SESSION['shipping_cost']) ? $_SESSION['shipping_cost'] : 0;
            $payable_amount = $total_price + $shipping_cost;
            
            if (!isset($_SESSION['cart']) || empty($_SESSION['cart']) || !isset($_SESSION['firstName'])) {
                header("Location: basket.php");
                exit();
            }
            
            $firstName = isset($_SESSION['firstName']) ? $_SESSION['firstName'] : '';
            $lastName = isset($_SESSION['lastName']) ? $_SESSION['lastName'] : '';
            $mobile = isset($_SESSION['mobile']) ? $_SESSION['mobile'] : '';
            $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
            $province = isset($_SESSION['province']) ? $_SESSION['province'] : '';
            $city = isset($_SESSION['city']) ? $_SESSION['city'] : '';
            $postalCode = isset($_SESSION['postalCode']) ? $_SESSION['postalCode'] : '';
            $address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
            $phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
            $comments = isset($_SESSION['comments']) ? $_SESSION['comments'] : '';
            
            $query = "INSERT INTO orders (first_name, last_name, mobile, email, province, city, postal_code, address, phone, comments, total_price, shipping_cost, payable_amount, order_date) VALUES ('$firstName', '$lastName', '$mobile', '$email', '$province', '$city', '$postalCode', '$address', '$phone', '$comments', '$total_price', '$shipping_cost', '$payable_amount', NOW())";
            
            if (mysqli_query($link, $query)) {
                $order_id = mysqli_insert_id($link);   
            
                foreach ($_SESSION['cart'] as $pro_code => $product) {
                    $pro_name = $product['pro_name'];
                    $quantity = $product['quantity'];
                    $pro_price = $product['pro_price'];
                    $product_total = $pro_price * $quantity;
            
                    $query = "INSERT INTO order_items (order_id, pro_code, pro_name, quantity, pro_price, product_total) VALUES ('$order_id', '$pro_code', '$pro_name', '$quantity', '$pro_price', '$product_total')";
                    mysqli_query($link, $query);
            
                    $query = "UPDATE products SET pro_qty = pro_qty - $quantity WHERE pro_code = '$pro_code'";
                    mysqli_query($link, $query);
                }
            
                unset($_SESSION['cart']);
            
                echo "<p>سفارش شما با موفقیت ثبت شد. شماره سفارش شما: $order_id</p>";
            } else {
                echo "<p>خطا در ثبت سفارش: " . mysqli_error($link) . "</p>";
            }
            ?>
            <div class="ph">
                <p>مبلغ کل سبد خرید: <b><?php echo number_format($total_price); ?> تومان</b></p>
                <p>هزینه ارسال: <b class="b2"><?php echo number_format($shipping_cost); ?> تومان</b></p>
            </div>
            <hr>
            <div class="ph">
                <p>مبلغ قابل پرداخت: <b><?php echo number_format($payable_amount); ?> تومان</b></p>
            </div>
            <div class="sub">
                <a href="https://pep.shaparak.ir" style="text-decoration: none;">
                    <input type="submit" name="submit" value="پرداخت">
                </a>
            </div>
        </div>
        <div class="btn">
            <a href="information.php" style="text-decoration: none;">
                <button class="b">اطلاعات ارسال</button>
            </a>
        </div>
    </div>
</body>
</html>.