<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>
<?php
include('config.php');
if(isset($_POST['submit']))
{
$message=$_POST['message'];
$whom = $_SESSION['uname'];
$sql="INSERT INTO chat(message,bywhom) values('$message','$whom')";
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo"Data inserted";
    header("Location: message.php");
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
    <title>Chat BOX</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>
    
<header class="text-black-600  " id="header">
    <div class=" rounded-lg  bg-gray-900  container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center text-bold bg-black ">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="dashboard.php">
                <img src="images/logo.JPG" fill="none" title="AST GYM KHANA"   class="w-12 h-12    rounded-full" >
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center  justify-center  text-white ">
        <a class="mr-5 hover:text-red-600  smoothScroll text-2xl" href="dashboard.php" title="Home"> <i class="fas fa-house-user"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="trainer.php" title="Trainer"><i class="fas fa-child"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="gallery.php" title="Gallery"><i class="far fa-images"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="blog.php" title="Blogs"><i class="fas fa-blog"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="contact.php" title ="Contact"><i class="fas fa-address-book"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="member.php" title="Member"><i class="fas fa-user-plus"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="payment.php" title="Payments"><i class="fas fa-rupee-sign"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="client.php" title="Users"><i class="fas fa-users"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="workout.php"  title="Workout"><i class="fas fa-running"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="message.php" title="Message"><i class="fas fa-sms"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="logout.php" title="Logout"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
    </div>
</header>


<div class="container h-full  m-10 p-3  mx-auto  rounded-lg max-height-screen ">
    <div class="flex flex-col text-center w-full  p-2 ">
      <h1 class="sm:text-3xl text-2xl font-medium title-font ">Chat Box </h1>
    </div>
<section class="text-gray-600   mb-5   ">
  <div class="container px-5 py-10   h-full mx-auto  rounded-lg  overflow-auto  max-h-full">
  <?php
                  include_once("config.php");
                  $sql="SELECT * FROM chat";
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
    <div class="flex items-center lg:w-3/5 mx-auto  bg-gray-100 rounded-lg border-b p-4 m-10  sm:flex-row flex-col">
    
      <div class=" sm:mr-5 inline-flex items-center justify-center rounded-full  p-4  flex-shrink-0">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        
        <p class=" text-black leading-relaxed text-base"><?php echo $row['bywhom'] ?></p>
        <p class=" text-black leading-relaxed text-base"><?php echo $row['message'] ?></p>
        <p class=" text-black mt-3   inline-flex items-center"><?php echo $row['date'] ?>
        </p>

      </div>
    </div>
    
    
    
  </div>

  <?php 
                  }
                }
        ?>
  
</section>
</div>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <label  class="leading-7 text-sm text-gray-600">Name</label>
  <input  required type="text"  name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

  <button  name= "submit" class="flex mx-auto mt-10   mb-10 text-white bg-gray-900 border-0 py-2 px-4  rounded text-lg"><i class="fas fa-sms"></i></button>
</form>





</body>
</html>






