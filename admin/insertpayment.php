<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>
<?php
include_once('config.php');
if(isset($_POST['submit']))
{
    
    $name=$_POST['date'];
    $specialist = $_POST['amt'];
    $special = $_POST['due'];

$description=$_POST['id'];
$sql="INSERT into payments(paymentDate,amount,due,id) values('$name','$specialist','$special','$description')";
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo"Data inserted";
    header("Location: trainer.php");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
    Collection of Three months:
    
    Date:
    <input type="date" name="date">
    Amount:
    <input type="number" name="amt">
    Due:
    <input type="number" name="due">
    Id:
    <input type="number" name="id">
    <input type="submit" name="submit" Value="submit">
    </form>
</body>
</html>



