<?php
include ("includes/header.php");

if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] == "admin")) {
    echo '<script type="text/javascript">
        location.replace("index.php");
    </script>';
    exit();
}

$link = mysqli_connect("localhost", "root", "", "shop_acessory");

if (mysqli_connect_errno()) {
    exit("خطایی با شرح زیر رخ داده است: " . mysqli_connect_error());
}

$query = "SELECT * FROM orders";
$result = mysqli_query($link, $query);

if (!$result) {
    echo "خطا در اجرای کوئری: " . mysqli_error($link);
    exit();
}

if (mysqli_num_rows($result) == 0) {
    echo "هیچ رکوردی یافت نشد.";
    exit();
}
?>

<table border="1px" style="width: 100%;font-family:b nazanin;font-size: 15pt;text-align: center;direction:rtl;border-color: #9C1251">
    <tr>
        <td>کد سفارش</td>
        <td>نام خریدار</td>
        <td>تاریخ سفارش</td>
        <td>مبلغ کل</td>
        <td>هزینه ارسال</td>
        <td>مبلغ قابل پرداخت</td>
        <td>وضعیت سفارش</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo($row['id']); ?></td>
            <td><?php echo($row['first_name'] . ' ' . $row['last_Name']); ?></td>
            <td><?php echo($row['order_date']); ?></td>
            <td><?php echo(number_format($row['total_price'])); ?> تومان</td>
            <td><?php echo(number_format($row['shipping_cost'])); ?> تومان</td>
            <td><?php echo(number_format($row['payable_amount'])); ?> تومان</td>
            <td>
                <?php
                switch ($row['state']) {
                    case 0:
                        echo "تحت بررسی";
                        break;
                    case 1:
                        echo "آماده برای ارسال";
                        break;
                    case 2:
                        echo "ارسال شده";
                        break;
                    case 3:
                        echo "سفارش لغو شده است";
                        break;
                }
                ?>
            </td>
        </tr>
        <tr style="height: 10px;">
            <td colspan="7"></td>
        </tr>
        <?php
    }
    ?>
</table>
<br/><br/>

<?php
include ("includes/footer.php");
?>