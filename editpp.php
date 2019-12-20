<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>editprofile</title>
    <link rel="stylesheet" href="css/profile.css">
  </head>
  <body>
    <h1> Upload Profile Picture </h1>
    <div class="profilediv">
    <form method="post" class="profileform" action="uploadprofile.php" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
    <input name="uploadedfilee" type="file" style="height:35px; margin-left:40%; padding:45px;"  /><br>
    <input type="submit" value="submit" name="submit" style="height:35px;width:130px;margin-left:45%;margin-button:20px;"><br><br>
    </form>

      </div>
  </body>
</html>
