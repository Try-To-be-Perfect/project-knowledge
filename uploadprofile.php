<?php
include('db_connection.php');

$target_path = "img/propic/";

$target_path = $target_path . basename( $_FILES['uploadedfilee']['name']);

if(move_uploaded_file($_FILES['uploadedfilee']['tmp_name'], $target_path))

{


$sql = "INSERT INTO pro_pic(`path`) VALUES ('$target_path')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Upload Successfully")</script>';
echo "<script>window.location.href ='profile.php'</script>";

} else {

echo "Error: " . $sql . "<br>" . $conn->error;

}


$conn->close();

}

?>
