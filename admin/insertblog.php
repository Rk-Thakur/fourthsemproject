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

$topic=$_POST['topic'];
$description=$_POST['description'];
$summary=$_POST['summary'];
$whom = $_SESSION['uname'];
$sql="INSERT into blog(file,topic,summary,description,bywhom) values('$file','$topic','$summary','$description','$whom')";
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo"Data inserted";
    header("Location: blog.php");
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
    Select image to upload:
        <input type="file" name="file"  >
    Topic:
    <input type="text" name="topic">
    Summary:
    <input type="text" name="summary">
    Descrption:
    <textarea name="description" type="text" id="" cols="10" rows="10"></textarea>
    
    <input type="submit" name="submit" Value="submit">
    </form>
</body>
</html>



