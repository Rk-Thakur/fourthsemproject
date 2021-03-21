<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM blog WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: blog.php");   

?>