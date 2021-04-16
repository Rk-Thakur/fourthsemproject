<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM registration WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: member.php");   

?>