<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM trainer WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: trainer.php");   

?>