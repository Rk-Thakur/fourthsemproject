<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM gallery WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: gallery.php");   

?>