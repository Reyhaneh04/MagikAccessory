<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $postalCode = $_POST['postalCode'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];

   

    
    unset($_SESSION['cart']);
    unset($_SESSION['total_price']);


    header('Location: pay.php');
    exit();
}
?>