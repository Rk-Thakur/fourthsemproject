<?php
include_once("config.php");
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $sql = "INSERT INTO practise(name) values($name)";
  $result= mysqli_query($conn,$sql);
  if($result){
    echo "data inserted";
  }else{
    echo "data not inserted".mysqli_error($conn);
  }
}

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<input type="text" name="name">
<input type="submit" name="submit">
</form>