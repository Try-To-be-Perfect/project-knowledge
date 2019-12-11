<?php
  include('db_connection.php');
  if(isset($_POST['submit'])) {
    if (empty($_POST['email'])|| empty($_POST['pwd'])) {
      header("location:sign_up.php");
    } else {
      $user_email = $_POST['email'];
      $user_password = $_POST['pwd'];
      $sql = "SELECT * FROM `user` WHERE email_u ='$user_email' and pwd_u='$user_password'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      if($count == 1){
        header("location:home.php") ;
      }else {
        echo "failed";
      }
    }
  }
?>
