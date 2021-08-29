<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM workout WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: workout.php");   

?>