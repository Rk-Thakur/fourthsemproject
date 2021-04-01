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
    $name=$_POST['name'];
$description=$_POST['description'];
$whom = $_SESSION['uname'];
$sql="INSERT into gallery(file,topic,name,description,bywhom) values('$file','$topic','$name','$description','$whom')";
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo"Data inserted";
    header("Location: gallery.php");
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
    topic
    <input type="text" name="topic">
    name:
    <input type="text" name="name">
    Descrption:
    <textarea name="description" type="text" ></textarea>
    <input type="submit" name="submit" Value="submit">
    </form>
</body>
</html>



