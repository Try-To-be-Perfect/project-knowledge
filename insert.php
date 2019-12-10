<?php
  include('db_connection.php');
  $f_name=$_POST['first_name'];
  $l_name=$_POST['last_name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $num=$_POST['num'];
  $bday=$_POST['bday'];
  $gender=$_POST['gender'];
  $country=$_POST['country'];
  $interest=$_POST['in'];
  $interests=implode(',',$interest);
  $sql="INSERT INTO `user`(`id_u`, `f_name_u`, `l_name_u`, `email_u`, `pwd_u`, `mobile_u`, `b_day_u`, `gender_u`, `country_u`, `interest_u`)
   VALUES (null,'$f_name','$l_name','$email','$pass','$num','$bday','$gender','$country','$interests')";
   if (mysqli_query($conn,$sql)) {
     echo "Create Successfully";
   }else {
     echo "Error" .mysqli_error($conn);
   }
 ?>
