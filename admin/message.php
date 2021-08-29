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
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="client.php" title="Clients"><i class="fas fa-users"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="workout.php"  title="Workout"><i class="fas fa-running"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="message.php" title="Message"><i class="fas fa-sms"></i></a>
        <a class="mr-5 hover:text-red-600 smoothScroll text-2xl" href="logout.php" title="Logout"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
    </div>
</header>


<section class="text-gray-600 body-font    p-20 m-20 rounded-lg  absolute inset-0 ">
    <div class="container   mx-auto rounded-lg overflow-y-auto h-4/5">
    <?php
                  include("config.php");
                  $sql="SELECT * FROM chat ORDER BY id desc";
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
      <div class="flex items-center bg-gray-300  rounded-lg  lg:w-3/5 mx-auto border-b p-5 m-5 border-gray-200 sm:flex-row flex-col">
        
        <div class="sm:w-20 sm:h-20 h-10 w-10 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
          
        </div>
        
        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <a href="deletemessage.php?id=<?php echo $row["id"]; ?>"><p class="leading-relaxed text-base"><?php echo $row['message'] ?></p></i></a>
          <p class="mt-3 text-indigo-600 inline-flex items-center "><?php echo $row['bywhom'] ?>
          </p>
        </div>
      </div>
      <?php 
                  }
                }
        ?>
    </div>
    

</section>
              </div>
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class=" absolute inset-x-0 bottom-0 flex items-center lg:w-3/5 mx-auto border-b p-10 m-10 border-gray-200 sm:flex-row flex-col">
      <input class="flex mx-auto mt-20 text-gray-600  border-0 py-2 px-8 hover:bg-indigo-200 bg-indigo-100 rounded text-lg" type="text" name="message" required>
      <button name="submit" class="flex mx-auto mt-20 text-white bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded text-lg"><i class="fas fa-sms"></i></button>
    </div>
    </form>
</body>
</html>






