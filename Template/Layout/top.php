
    <div class="top">

        <div class="logo">
            <img src="./Assets/Images/Logo.png" alt="">
        </div>
        <div class="search">
            <span class="icon"><i class="fa fa-search"></i></span>
            <input type="search" id="search" placeholder="Tìm Kiếm Sản Phẩm ..." />
            <select name="" id="">
                <option value="Chọn thư mục">Chọn thư mục</option>
            </select>
        </div>

        <div class="heart">
            <span id="circle">15</span>
            <span id="icon"><i class="fa fa-heart"></i></span>
        </div>

        <div class="cart">
            <span id="circle-cart">10</span>

            <div class="info-cart">
                <span id="icon"><i class="fa fa-cart-shopping"></i></span>
                <select name="" id="">
                <option value="Chọn thư mục">390.000.000đ</option>
            </select>

            </div>

        </div>

        <div class="menu">
            <ul>
                <li><a href="">TRANG CHỦ</a></li>
                <li><a href="">VỀ CHÚNG TÔI</a></li>
                <li><a href="">SẢN PHẨM</a></li>
                <li><a href="">DỊCH VỤ</a></li>
                
                <?php
    include '../../Libs/config.php';
    $sql = "SELECT * from tbl_news";
    $result=mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['news_title'];

    }

?>  
<li><a href=""><?php echo $title; ?></a></li>
                <li><a href="">LIÊN HỆ</a></li>

            </ul>
        </div>
    </div>

