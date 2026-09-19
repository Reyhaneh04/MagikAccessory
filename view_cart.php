<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سبد خرید</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .Basket {
            padding: 20px;
        }
        .icon-container, .tp, .full-width-box {
            margin-bottom: 20px;
        }
        .full-width-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }
        .full-width-box img {
            width: 100px;
            height: auto;
        }
        .title, .price, .number, .total_price, .trash {
            margin: 0 10px;
        }
        .increment, .decrement {
            cursor: pointer;
            background-color: #f1f1f1;
            border: none;
            padding: 5px 10px;
        }
        .trash-icon {
            cursor: pointer;
            color: red;
        }
    </style>
</head>
<body class="Basket">
    <div class="icon-container">
        <div class="color">
            <div class="dis">
                <i class="fas fa-shopping-basket"></i> 
                <p>بررسی سبد خرید</p>
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
                    <button class="increment" data-procode="<?php echo $pro_code; ?>">+</button>
                    <b class="n"><?php echo $product['quantity']; ?></b>
                    <button class="decrement" data-procode="<?php echo $pro_code; ?>">-</button>
                    <br><br>
                </div>
                <div class="total_price">
                    <b class="n"><?php echo number_format($product_total); ?> تومان</b>
                </div>
                <div class="trash">
                    <button class="fas fa-trash-alt trash-icon" data-procode="<?php echo $pro_code; ?>"></button>
                </div>
            </div>
        <?php
            }
        } else {
            echo "<p>سبد خرید شما خالی است.</p>";
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
            <a href="information.html" style="text-decoration: none;">
                <button class="s">ثبت سفارش</button>
            </a>
            <a href="product.html" style="text-decoration: none;">
                <button class="b">بازگشت</button>
            </a>
        </div>
    </div>

    <script>
        document.querySelectorAll('.increment').forEach(button => {
            button.addEventListener('click', () => {
                const proCode = button.getAttribute('data-procode');
                updateQuantity(proCode, 'increment');
            });
        });

        document.querySelectorAll('.decrement').forEach(button => {
            button.addEventListener('click', () => {
                const proCode = button.getAttribute('data-procode');
                updateQuantity(proCode, 'decrement');
            });
        });

        document.querySelectorAll('.trash-icon').forEach(button => {
            button.addEventListener('click', () => {
                const proCode = button.getAttribute('data-procode');
                updateQuantity(proCode, 'remove');
            });
        });

        function updateQuantity(proCode, action) {
            fetch('update_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `pro_code=${proCode}&action=${action}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    location.reload();
                } else {
                    alert('خطایی رخ داده است.');
                }
            });
        }
    </script>
</body>
</html>