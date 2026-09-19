<?php
session_start();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Icons Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body  class="Basket">
    <div class="icon-container">
        <div class="color">
            <div class="dis">
        <i class="fas fa-shopping-basket"> </i> 
        <p> بررسی سبد خرید</p>
    </div>
</div>
        <hr>
    
        <div class="icon-item">
        <i class="fas fa-shipping-fast"></i>  
        <p>اطلاعات ارسال</p>
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
    <div class="q pb">
        <div class="b">
            <b class="b1">محصول</b>
            <b class="b2">قیمت</b>
            <b class="b3">تعداد</b>
            <b class="b4">جمع قیمت</b>
        </div>

        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $total_price = 0;

            foreach ($_SESSION['cart'] as $pro_code => $product) {
                $product_total = $product['pro_price'] * $product['quantity'];
                $total_price += $product_total;
        ?>
            <div class="full-width-box">
                <img src="image/products/<?php echo $product['pro_image']; ?>" alt="<?php echo $product['pro_name']; ?>">
                <div class="title">
                    <b class="n"><?php echo $product['pro_name']; ?></b>
                    <br><br>
                </div>
                <div class="price">
                    <b class="n"><?php echo number_format($product['pro_price']); ?> تومان</b>
                    <br><br><br>
                </div>
                <div class="number">
                    <form method="post" action="update_basket.php" style="display:inline;">
                        <input type="hidden" name="action" value="decrement">
                        <input type="hidden" name="pro_code" value="<?php echo $pro_code; ?>">
                        <button type="submit" class="decrement">-</button>
                    </form>
                    <b class="n"><?php echo $product['quantity']; ?></b>
                    <form method="post" action="update_basket.php" style="display:inline;">
                        <input type="hidden" name="action" value="increment">
                        <input type="hidden" name="pro_code" value="<?php echo $pro_code; ?>">
                        <button type="submit" class="increment">+</button>
                    </form>
                    <br><br>
                </div>
                <div class="total_price">
                    <b class="n"><?php echo number_format($product_total); ?> تومان</b>
                </div>
                <div class="trash">
                    <form method="post" action="update_basket.php" style="display:inline;">
                        <input type="hidden" name="action" value="remove">
                        <input type="hidden" name="pro_code" value="<?php echo $pro_code; ?>">
                        <button type="submit" class="fas fa-trash-alt trash-icon"></button>
                    </form>
                </div>
            </div>
        <?php
            }
           
            $_SESSION['total_price'] = $total_price;
        } else {
        ?>
            <div class="full-width-box">
                <p>سبد خرید شما خالی است.</p>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="tp">
        <hr>
        <div class="ph">
            <p>مبلغ کل سبد خرید:</p>
            <b class="n"><?php echo isset($total_price) ? number_format($total_price) : 0; ?> تومان</b>
        </div>
        <hr>
        <div class="btn">
            <a href="information.php" style="text-decoration: none;">
                <button class="s">ثبت سفارش</button>
            </a>
            <a href="product.php" style="text-decoration: none;">
                <button class="b">بازگشت</button>
            </a>
        </div>
    </div>
</body>
</html>