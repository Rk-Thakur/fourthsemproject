<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM todo WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: dashboard.php");   

?>