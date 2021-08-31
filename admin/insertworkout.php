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
    <title>Workout</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    



    <div class="flex items-center h-screen w-full bg-gray-400">
  <div class="w-full bg-white rounded  p-8 m-4 md:max-w-sm md:mx-auto">
    <h1 class=" w-full text-center text-2xl font-bold text-grey-darkest mb-6">Workout 📹 </h1>

    <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase  font-bold text-lg text-grey-darkest" >Select Video to Upload</label>
        <input class="border py-2 px-3 text-grey-darkest md:mr-2" type="file" name="file"  required>
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" for="Workout">For which workout?</label>
        <input class="border py-2 px-3 text-grey-darkest md:ml-2" type="text" name="workout" required >
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" >Workout Name:</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" required>
      </div>
      <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" >Description</label>

      <textarea class="border py-2 px-3 text-grey-darkest" name="howtodo"  type="text" id="description" cols="30" rows="5" required>
      </textarea>
      
      <button class="block   text-white bg-gray-900   uppercase  mx-auto p-4 rounded" type="submit" name="submit">
      Upload
      </button>
      
    </form>
    
  </div>
</div>
</body>
</html>