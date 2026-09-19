<?php
include ("includes/header.php");

if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] == "admin")) {
?>
<script type="text/javascript">
    <!--
    location.replace("index.php");
    -->
</script>
<?php
}

if (!(isset($_GET['action']) && $_GET['action'] == 'DELETE')) {
    if (isset($_POST['pro_code']) && !empty($_POST['pro_code']) &&
        isset($_POST['pro_name']) && !empty($_POST['pro_name']) &&
        isset($_POST['pro_qty']) && !empty($_POST['pro_qty']) &&
        isset($_POST['pro_price']) && !empty($_POST['pro_price']) &&
        isset($_POST['pro_detail']) && !empty($_POST['pro_detail']) &&
        isset($_POST['pro_created']) && !empty($_POST['pro_created'])) {
        
        $pro_code = $_POST['pro_code'];
        $pro_name = $_POST['pro_name'];
        $pro_qty = $_POST['pro_qty'];
        $pro_price = $_POST['pro_price'];
        $pro_image = $_FILES["pro_image"]["name"];
        $pro_detail = $_POST['pro_detail'];
        $pro_created = $_POST['pro_created'];
    } else {
        exit("برخی از فیلدها مقداردهی نشده است");
    }
}

$link = mysqli_connect("localhost", "root", "", "shop_acessory");

if (mysqli_connect_errno())
    exit("خطایی با شرح زیر رخ داده است:".mysqli_connect_error());

if (isset($_GET['action'])) {
    $id = $_GET['id'];

    switch ($_GET['action']) {
        case 'EDIT':
            $query = "UPDATE product SET
                pro_code='$pro_code',
                pro_name='$pro_name',
                pro_qty='$pro_qty',
                pro_price='$pro_price',
                pro_detail='$pro_detail',
                pro_created='$pro_created'
            WHERE pro_code = '$id'";

            if (mysqli_query($link, $query) === true) {
                echo ("<p style='color:green;'><b>کالا با موفقیت ویرایش شد</b></p>");
            } else {
                echo ("<p style='color:red;'><b>خطا در ویرایش کالا: " . mysqli_error($link) . "</b></p>");
            }

            if (!empty($pro_image)) {
                $target_dir = "image/products/";
                $target_file = $target_dir . basename($_FILES["pro_image"]["name"]);
                $uploadok = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                if (getimagesize($_FILES["pro_image"]["tmp_name"]) !== false) {
                    $uploadok = 1;
                } else {
                    echo ("<p style='color:red;'><b>فایل انتخابی یک عکس نیست</b></p>");
                    $uploadok = 0;
                }

                if ($uploadok == 1) {
                    if (move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file)) {
                        $query = "UPDATE product SET pro_image='$pro_image' WHERE pro_code='$pro_code'";
                        if (mysqli_query($link, $query) === true)
                            echo ("<p style='color:green;'><b>تصویر کالا با موفقیت ویرایش شد</b></p>");
                        else
                            echo ("<p style='color:red;'><b>خطا در ویرایش تصویر کالا: " . mysqli_error($link) . "</b></p>");
                    } else {
                        echo ("<p style='color:red;'><b>خطا در آپلود تصویر</b></p>");
                    }
                }
            }
            break;

        case 'DELETE':
            $query = "DELETE FROM product WHERE pro_code = '$id'";

            if (mysqli_query($link, $query) === true) {
                echo ("<p style='color:green;'><b>کالا با موفقیت حذف شد</b></p>");
            } else {
                echo ("<p style='color:red;'><b>خطا در حذف کالا: " . mysqli_error($link) . "</b></p>");
            }
            break;
    }
} else {
    $target_dir = "image/products/";
    $target_file = $target_dir . basename($_FILES["pro_image"]["name"]);
    $uploadok = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (getimagesize($_FILES["pro_image"]["tmp_name"]) !== false) {
        $uploadok = 1;
    } else {
        echo ("<p style='color:red;'><b>فایل انتخابی یک عکس نیست</b></p>");
        $uploadok = 0;
    }

    if ($uploadok == 1) {
        if (move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file)) {
            $query = "INSERT INTO product (pro_code, pro_name, pro_qty, pro_price, pro_image, pro_detail, pro_created) VALUES ('$pro_code', '$pro_name', '$pro_qty', '$pro_price', '$pro_image', '$pro_detail', '$pro_created')";

            if (mysqli_query($link, $query) === true) {
                echo ("<p style='color:green;'><b>کالا با موفقیت به انبار اضافه شد</b></p>");
            } else {
                echo ("<p style='color:red;'><b>خطا در ثبت مشخصات کالا در انبار: " . mysqli_error($link) . "</b></p>");
            }
        } else {
            echo ("<p style='color:red;'><b>خطا در آپلود تصویر</b></p>");
        }
    } else {
        echo ("<p style='color:red;'><b>خطا در ثبت مشخصات کالا در انبار</b></p>");
    }
}
?>
<br/><br/><br/>
<?php
include ("includes/footer.php");
?>
</body>