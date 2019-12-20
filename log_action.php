<?php
session_start();
error_reporting(0);
  include('db_connection.php');
  if(isset($_POST['submit'])) {
    if (empty($_POST['email'])|| empty($_POST['pwd'])) {
      header("location:log.html");
    } else {
      $user_email = $_POST['email'];
      $user_password = md5($_POST['pwd']);
      $sql = "SELECT * FROM `user` WHERE email_u ='$user_email' and pwd_u='$user_password'";
      $results = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($results);
      if($count == 1){
        foreach ($results as $result) {
        $_SESSION['knowledgeaid']=$result->ID;
        }
        $_SESSION['submit']=$_POST['email'];
        header("location:home.php") ;
      }else {
        echo "failed";
      }
    }
  }
?>
