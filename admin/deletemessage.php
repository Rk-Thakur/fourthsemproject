<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM chat WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: message.php");   

?>