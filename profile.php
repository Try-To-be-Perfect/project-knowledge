<?php
  include('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/propic.css" type="text/css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="profile">
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
    <div class="cover">


      <div class="propic">
        <?php
        $sql1 = "SELECT path FROM pro_pic,user Where user.id_u=pro_pic.id_u ORDER BY pro_pic.id_u";

        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {

        // output data of each row

        while($row = $result1->fetch_assoc()) {

        $path=$row["path"];

        echo "<img src='$path' height='200' width='200' />";

        }

        }
         ?>

      </div>
      <div class="proname">
          <?php
          $show = mysqli_query($conn,"SELECT `f_name_u`, `l_name_u` FROM `user` WHERE user.email_u='aislamspondon@gmail.com'");
            $row= mysqli_fetch_array($show){
            ?>
              <tr>
                  <td><?php echo $row['f_name_u']; ?></td>
                  <td><?php echo $row['l_name_u']; ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                  </tr>
                  <?php
            }
          ?>
      </div>
      <div class="covedit">
        <a href="editpp.php">Edit</a>
      </div>
    </div>
    <div class="pronav">
      <button type="button" name="about" id="btn"onclick="window.location.href = 'about.php';">About</button>
      <button type="button" name="timelines" id="btn"onclick="window.location.href = 'profile.php';">Timelines</button>
      <button type="button" name="photos" id="btn" onclick="window.location.href = 'photoes.php';">Photos</button>
      <button type="button" name="followers" id="btn"onclick="window.location.href = 'followers.php';">Followers</button>
    </div>
    <div class="timelines">
      <div class="chatpro">
         <center><p class="chatprop"> Active </p></center>
      </div>
      <div class="timelipost">
      <div class="post">
        <div class="create">
           Create Post
        </div>
        <form class="" action="post.php" method="post">

        <div class="post12">
           <textarea rows="4" cols="94" class:"arr" name="pos"></textarea>
        </div>
        <div class="image">
          <input type="file" name="upload" class="f">
          <input type="submit"class="su" name="send" value="Post"/>
        </div>

      </form>
      </div>

      </div>
    </div>
  </div>
  </body>
</html>
