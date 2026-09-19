<?php
session_start();


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pro_code'])) {
    $pro_code = $_POST['pro_code'];
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $pro_image = $_POST['pro_image'];

    
    if (!isset($_SESSION['cart'][$pro_code])) {
        
        $_SESSION['cart'][$pro_code] = array(
            'pro_name' => $pro_name,
            'pro_price' => $pro_price,
            'pro_image' => $pro_image,
            'quantity' => 1
        );
    } else {
       
        $_SESSION['cart'][$pro_code]['quantity'] += 1;
    }
}


header("Location: basket.php");
exit();
?>