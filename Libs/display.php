<?php
include  './config.php';
if(isset($_POST['displaySend'])){
    $table= '<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>

        <th scope="col">ID</th>
        <th scope="col">Product&nbsp name</th>
        <th scope="col">Product&nbsp price</th>
        <th scope="col">Product&nbsp description</th>
        <th scope="col">Product&nbsp brand</th>
        <th scope="col">Edit/Delete</th>
      </tr>
    </thead>';
    $sql = "SELECT * from tbl_product";
    $result=mysqli_query($conn, $sql);
    $num = 1;
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['product_id'];
        $name = $row['product_name'];
        $price = $row['product_price'];
        $desc = $row['product_description'];
        $brand = $row['product_brand'];

        $table.='<tr>
        <td scope="row"><input type="checkbox"></td>
        <td scope="row">'.$num.'</td>
        <td>'.$name.'</td>
        <td>'.$price.'&nbspVNĐ</td>
        <td>'.$desc.',</td>
        <td>'.$brand.'</td>
        <td>
            <button class="btn btn-primary" onclick=getDetail('.$id.')>Edit</button>
            <button class="btn btn-danger" onclick=deleteProduct('.$id.')>Delete</button>
        </td>

      </tr>';
      
      $num ++;
    }

    $table.='</table>';
    echo $table;
    
}

if(isset($_POST['displaySendNews'])){
  $table= '<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>

      <th scope="col">ID</th>
      <th scope="col">Title&nbsp news</th>
      <th scope="col">Description</th>
      <th scope="col">Content</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>';
  $sql = "SELECT * from tbl_news";
  $result=mysqli_query($conn, $sql);
  $num = 1;
  while($row = mysqli_fetch_assoc($result)){
      $id = $row['news_id'];
      $title = $row['news_title'];
      $descnews = $row['news_description'];
      $content = $row['news_content'];

      $table.='<tr>
      <td scope="row"><input type="checkbox"></td>
      <td scope="row">'.$num.'</td>
      <td>'.$title.'</td>
      <td>'.$descnews.'</td>
      <td>'.$content.'</td>
      <td>
          <button class="btn btn-primary" onclick=getDetailNews('.$id.')>Edit</button>
          <button class="btn btn-danger" onclick=deleteNews('.$id.')>Delete</button>
      </td>

    </tr>';
    
    $num ++;
  }

  $table.='</table>';
  echo $table;
  
}


if(isset($_POST['displaySendInfo'])){
  $table= '<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>

      <th scope="col">ID</th>
      <th scope="col">Name&nbsp info</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>';
  $sql = "SELECT * from tbl_info";
  $result=mysqli_query($conn, $sql);
  $num = 1;
  while($row = mysqli_fetch_assoc($result)){
      $id = $row['info_id'];
      $name = $row['info_name'];
      $email = $row['info_email'];
      $phone = $row['info_phone'];
      $address = $row['info_address'];
      $table.='<tr>
      <td scope="row"><input type="checkbox" id= "'.$id.'"></td>
      <td scope="row">'.$num.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$address.'</td>
      <td>
          <button class="btn btn-primary" onclick=getDetailInfo('.$id.')>Edit</button>
          <button class="btn btn-danger" onclick=deleteInfo('.$id.')>Delete</button>
      </td>

    </tr>';
    
    $num ++;
  }

  $table.='</table>';
  echo $table;
  
}


if(isset($_POST['displaySendSetting'])){
  $table= '<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>

      <th scope="col">ID</th>
      <th scope="col">Setting&nbsp name</th>
      <th scope="col">Language</th>
      <th scope="col">Color</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>';
  $sql = "SELECT * from tbl_setting";
  $result=mysqli_query($conn, $sql);
  $num = 1;
  while($row = mysqli_fetch_assoc($result)){
      $id = $row['setting_id'];
      $name = $row['setting_name'];
      $language = $row['setting_language'];
      $color = $row['setting_color'];

      $table.='<tr>
      <td scope="row"><input type="checkbox" id= "'.$id.'"></td>
      <td scope="row">'.$num.'</td>
      <td>'.$name.'</td>
      <td>'.$language.'</td>
      <td>'.$color.'</td>
      <td>
          <button class="btn btn-primary" onclick=getDetailSetting('.$id.')>Edit</button>
          <button class="btn btn-danger" onclick=deleteSetting('.$id.')>Delete</button>
      </td>

    </tr>';
    
    $num ++;
  }

  $table.='</table>';
  echo $table;
  
}

?>