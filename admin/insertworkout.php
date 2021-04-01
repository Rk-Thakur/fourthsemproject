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
    $file=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $path="uploads/".$file;

    move_uploaded_file($temp_name,$path);
    
    $workout=$_POST['workout'];
    $name=$_POST['name'];
$howtodo=$_POST['howtodo'];
$whom = $_SESSION['uname'];
$sql="INSERT into workout(file,workout,name,howtodo,bywhom) values('$file','$workout','$name','$howtodo','$whom')";
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo"Data inserted";
    header("Location: workout.php");
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
    Select Video to upload:
        <input type="file" name="file"  >
    For Which Workout:
    <input type="text" name="workout">
    Workout Name:
    <input type="text" name="name">
    HOWTODO Describe:
    <textarea name="howtodo" type="text" ></textarea>
    <input type="submit" name="submit" Value="submit">
    </form>
</body>
</html>



