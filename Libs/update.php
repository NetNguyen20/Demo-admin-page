<?php
include './config.php';

//UPDATE PRODUCT
if(isset($_POST['updateid'])){
    $productid = $_POST['updateid'];

    $sql= "SELECT * from tbl_product  WHERE product_id=$productid";

    $result =mysqli_query($conn, $sql);
    $response=array();

    while($row=mysqli_fetch_assoc($result)){
        $response = $row;

    }

    echo json_encode($response);
}else{
    $response['status'] = 200;
    $response['message']= "Khong tim thay du lieu !!!";
} 

if(isset($_POST['hiddendata'])){
    $hidden = $_POST['hiddendata'];
    $name = $_POST['update_name'];
    $price = $_POST['update_price'];
    $description = $_POST['update_description'];
    $brand = $_POST['update_brand'];

    $sql= "UPDATE tbl_product SET product_name='$name', product_price='$price', product_description='$description', product_brand='$brand' WHERE product_id=$hidden";

    $result =mysqli_query($conn, $sql);



}



//UPDATE NEWS
if(isset($_POST['updateidnews'])){
    $newsid = $_POST['updateidnews'];

    $sql= "SELECT * from tbl_news  WHERE news_id=$newsid";

    $result =mysqli_query($conn, $sql);
    $response=array();

    while($row=mysqli_fetch_assoc($result)){
        $response = $row;

    }

    echo json_encode($response);
}else{
    $response['status'] = 200;
    $response['message']= "Khong tim thay du lieu !!!";
} 

if(isset($_POST['hiddendatanews'])){
    $hidden = $_POST['hiddendatanews'];
    $title = $_POST['update_title'];
    $descriptionnews = $_POST['update_description'];
    $content = $_POST['update_content'];

    $sql= "UPDATE tbl_news SET news_title='$title', news_description='$descriptionnews', news_content='$content' WHERE news_id=$hidden";

    $result=mysqli_query($conn, $sql);

}



//UPDATE INFO
if(isset($_POST['updateidinfo'])){
    $infoid = $_POST['updateidinfo'];

    $sql= "SELECT * from tbl_info  WHERE info_id=$infoid";

    $result =mysqli_query($conn, $sql);
    $response=array();

    while($row=mysqli_fetch_assoc($result)){
        $response = $row;

    }

    echo json_encode($response);
}else{
    $response['status'] = 200;
    $response['message']= "Khong tim thay du lieu !!!";
} 

if(isset($_POST['hiddendatainfo'])){
    $hidden = $_POST['hiddendatainfo'];
    $name = $_POST['update_name'];
    $email = $_POST['update_email'];
    $phone = $_POST['update_phone'];
    $address = $_POST['update_address'];


    $sql= "UPDATE tbl_info SET info_name='$name', info_email='$email', info_phone='$phone', info_address = '$address' WHERE info_id=$hidden";

    $result=mysqli_query($conn, $sql);

}



//UPDATE SETTING
if(isset($_POST['updateidsetting'])){
    $settingid = $_POST['updateidsetting'];

    $sql= "SELECT * from tbl_setting WHERE setting_id=$settingid";

    $result =mysqli_query($conn, $sql);
    $response=array();

    while($row=mysqli_fetch_assoc($result)){
        $response = $row;

    }

    echo json_encode($response);
}else{
    $response['status'] = 200;
    $response['message']= "Khong tim thay du lieu !!!";
} 

if(isset($_POST['hiddendatasetting'])){
    $hidden = $_POST['hiddendatasetting'];
    $name = $_POST['update_name'];
    $language = $_POST['update_language'];
    $color = $_POST['update_color'];


    $sql= "UPDATE tbl_setting SET setting_name='$name', setting_language='$language', setting_color='$color' WHERE setting_id=$hidden";

    $result=mysqli_query($conn, $sql);

}

?>