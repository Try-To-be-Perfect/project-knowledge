
<?php
  include('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
     <div class="content">
       <div class="div1">
         <center><img src="img/logo.jpg" alt=""width="500" height="150"></center>
       </div>
       <div class="navber">
         <ul>
           <li><a href="home.php">Home</a></li>
           <li><a href="profile.php">Profile</a></li>
           <li><a href="profile.php">Notificatios</a></li>
           <li><a href="profile.php">Reading Tools</a></li>
           <li><a href="profile.php">Setting</a></li>
           <li class="lo"><a href="logout.php">Log Out</a></li>
         </ul>

       </div>
       <div class="body123">
         <div class="manu">
           <div class="mm">
             <label>Home</label><br><br>
             <label>Profile</label><br><br>
             <label>Notificatios</label><br><br>
             <label>Reading Tools</label><br><br>
             <label>Setting</label><br><br>
           </div>
         </div>
         <div class="odypost">
       <div class="post">
         <div class="create">
            Create Post
         </div>
         <form class="form1" action="post.php" method="post">

         <div class="post12">
            <textarea rows="4" cols="94" class:"arr" name="pos"></textarea>
         </div>
         <div class="image">
           <input type="file" name="upload" class="f">
           <input type="submit"class="su" name="send" value="Post"/>
         </div>

       </form>
       </div>
       <div class="newsfeed">
         <div class="nme">

         </div>
         <div class="post_txt">
           <?php
           $sql1 = "SELECT path FROM pro_pic,user Where user.id_u=pro_pic.id_u ORDER BY pro_pic.id_u";

           $result1 = $conn->query($sql1);

           if ($result1->num_rows > 0) {

           // output data of each row

           while($row = $result1->fetch_assoc()) {

           $path=$row["path"];

           echo "<img src='$path' height='300' width='600' />";

           }

           }
            ?>
         </div>
         </div>
       </div>
       <div class="chat">
          <center><p class="chatp"> Active </p></center>
       </div>
     </div>
     </div>
  </body>
</html>
