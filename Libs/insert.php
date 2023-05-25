<?php
include './config.php';


extract($_POST);

//PRODUCT INSERT

if(isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['product_description']) && isset($_POST['product_brand'])){
    $error = array(); 
    if (empty($_POST['product_name']) or empty($_POST['product_price']) or empty($_POST['product_description']) or empty($_POST['product_brand'])) {
        array_push($errors, "Dien vao cho trong");
    }
    if (strlen($_POST['product_name'])  < 1) {
        array_push($errors, "Ten san pham phai dai hon toi thieu 10 ky tu");
    }
    if (strlen($_POST['product_price'])  < 0) {
        array_push($errors, "So tien phai toi thieu hang tram ngan VND");
    }
    if (strlen($_POST['product_description'])  < 10) {
        array_push($errors, "Mo ta san pham phai dai hon toi thieu 10 ky tu");
    }
    if (strlen($_POST['product_brand'])  < 10) {
        array_push($errors, "Hang san pham phai dai hon toi thieu 10 ky tu");
    }
    if (count($errors) > 0) {
        foreach ($errors as $errors) {
            echo "<div class = 'alert alert-danger'>$errors</div>";
            exit();
        }

    }else {
    $sql = "INSERT INTO tbl_product (product_name, product_price, product_description, product_brand) VALUES('$product_name', '$product_price', '$product_description', '$product_brand')";
    $result = mysqli_query($conn, $sql);
    echo "<div class='alert alert-success'>Ban dang ky thanh cong !</div>";
    }
}



//INFO INSERT
if(isset($_POST['info_name']) && isset($_POST['info_email']) && isset($_POST['info_phone']) && isset($_POST['info_address'])){
    $error = array(); 
    if (empty($_POST['info_name']) or empty($_POST['info_email']) or empty($_POST['info_phone']) or empty($_POST['info_address'])) {
        array_push($errors, "Dien vao cho trong");
    }
    if (strlen($_POST['info_name'])  < 1) {
        array_push($errors, "Ten san pham phai dai hon toi thieu 10 ky tu");
    }
    if (strlen($_POST['info_email'])  < 0) {
        array_push($errors, "So tien phai toi thieu hang tram ngan VND");
    }
    if (strlen($_POST['info_phone'])  < 10) {
        array_push($errors, "Mo ta san pham phai dai hon toi thieu 10 ky tu");
    }
    if (strlen($_POST['info_address'])  < 10) {
        array_push($errors, "Hang san pham phai dai hon toi thieu 10 ky tu");
    }
    if (count($errors) > 0) {
        foreach ($errors as $errors) {
            echo "<div class = 'alert alert-danger'>$errors</div>";
            exit();
        }

    }else {
    $sql = "INSERT INTO tbl_info (info_name, info_email, info_phone, info_address) VALUES('$info_name', '$info_email', '$info_phone', '$info_address')";
    $result = mysqli_query($conn, $sql);
    echo "<div class='alert alert-success'>Ban dang ky thanh cong !</div>";
    }
}



//SETTING INSERT
if(isset($_POST['setting_name']) && isset($_POST['setting_language']) && isset($_POST['setting_color']) ){
    $error = array(); 
    if (empty($_POST['setting_name']) or empty($_POST['setting_language']) or empty($_POST['setting_color'])) {
        array_push($errors, "Dien vao cho trong");
    }
    if (strlen($_POST['setting_name'])  < 1) {
        array_push($errors, "Ten san pham phai dai hon toi thieu 10 ky tu");
    }
    if (strlen($_POST['setting_language'])  < 0) {
        array_push($errors, "So tien phai toi thieu hang tram ngan VND");
    }
    if (strlen($_POST['setting_color'])  < 10) {
        array_push($errors, "Mo ta san pham phai dai hon toi thieu 10 ky tu");
    }
    if (count($errors) > 0) {
        foreach ($errors as $errors) {
            echo "<div class = 'alert alert-danger'>$errors</div>";
            exit();
        }

    }else {
    $sql = "INSERT INTO tbl_setting (setting_name, setting_language, setting_color) VALUES('$setting_name', '$setting_language', '$setting_color')";
    $result = mysqli_query($conn, $sql);
    echo "<div class='alert alert-success'>Ban dang ky thanh cong !</div>";
    }
}
?>