
<?php 
  $conn = new mysqli('localhost', 'root', '', 'project-test');

  if(!$conn){
    die(mysqli_error($conn));
  }

?>

