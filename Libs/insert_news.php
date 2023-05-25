<?php
include './config.php';


extract($_POST);
//NEWS
if(isset($_POST['news_title']) && isset($_POST['news_description']) && isset($_POST['news_content'])){
    $error = array(); 
    if (empty($_POST['news_title']) or empty($_POST['news_description']) or empty($_POST['news_content'])) {
        array_push($errors, "Dien vao cho trong");
    }
    if (strlen($_POST['news_title'])  < 1) {
        array_push($errors, "Ten san pham phai dai hon toi thieu 10 ky tu");
    }
    if (strlen($_POST['news_description'])  < 0) {
        array_push($errors, "So tien phai toi thieu hang tram ngan VND");
    }
    if (strlen($_POST['news_content'])  < 10) {
        array_push($errors, "Mo ta san pham phai dai hon toi thieu 10 ky tu");
    }

    if (count($errors) > 0) {
        foreach ($errors as $errors) {
            echo "<div class = 'alert alert-danger'>$errors</div>";
            exit();
        }

    }else {
    $sql = "INSERT INTO tbl_news (news_title, news_description, news_content) VALUES('$news_title', '$news_description', '$news_content')";
    $result = mysqli_query($conn, $sql);
    echo "<div class='alert alert-success'>Ban dang ky thanh cong !</div>";
    }
}

?>