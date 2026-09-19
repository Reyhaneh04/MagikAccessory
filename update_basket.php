<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && isset($_POST['pro_code'])) {
    $action = $_POST['action'];
    $pro_code = $_POST['pro_code'];

    if (isset($_SESSION['cart'][$pro_code])) {
        switch ($action) {
            case 'increment':
                $_SESSION['cart'][$pro_code]['quantity'] += 1;
                break;
            case 'decrement':
                if ($_SESSION['cart'][$pro_code]['quantity'] > 1) {
                    $_SESSION['cart'][$pro_code]['quantity'] -= 1;
                }
                break;
            case 'remove':
                unset($_SESSION['cart'][$pro_code]);
                break;
        }
    }
}


header('Location: basket.php');
exit();
?>