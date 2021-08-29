<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM payments WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: payment.php");   

?>