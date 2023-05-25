<?php
include './config.php';

if(isset($_POST['deleteSend'])){
    $del = $_POST['deleteSend'];
    
    $sql = "DELETE from tbl_product WHERE product_id=$del";
    $result = mysqli_query($conn, $sql);
}


if(isset($_POST['deleteSendNews'])){
    $del = $_POST['deleteSendNews'];
    
    $sql = "DELETE from tbl_news WHERE news_id=$del";
    $result = mysqli_query($conn, $sql);
}

if(isset($_POST['deleteSendInfo'])){
    $del = $_POST['deleteSendInfo'];
    
    $sql = "DELETE from tbl_info WHERE info_id=$del";
    $result = mysqli_query($conn, $sql);
}


if(isset($_POST['deleteSendSetting'])){
    $del = $_POST['deleteSendSetting'];
    
    $sql = "DELETE from tbl_setting WHERE setting_id=$del";
    $result = mysqli_query($conn, $sql);
}

?>