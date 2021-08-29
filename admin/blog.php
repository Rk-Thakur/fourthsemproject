
<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
    body{background:white!important;}

    #image {
            width: 200px;
            height: 200px;
            overflow: hidden;
            margin: 0 auto;
        }
      
        #image img {
            width: 100%;
            transition: 0.5s all ease-in-out;
        }
      
        #image:hover img {
            transform: scale(1.5);
        }
</style>
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

        <div class="info " >
          <p class="text-5xl text-center font-bold m-5">Blog <a href="insertblog.php"><i class="fas fa-book-medical hover:bg-indigo-300"></i></a></p>
          <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center ">S.N.</th>
                <th class="px-4 py-3 text-center ">Image</th>
                <th class="px-4 py-3 text-center ">Topics</th>
                <th class="px-4 py-3 text-center ">Summary</th>
                <th class="px-4 py-3 text-center ">Description</th>
                <th class="px-4 py-3 text-center ">By WHOM?</th>
                <th colspan="2"  class="px-4 py-3 text-center ">ACTION</th>

              </tr>
            </thead>
            <tbody>
              <tr>
            <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM blog ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr class=" hover:bg-gray-300">
                <td class="px-4 py-3 text-center "><?php echo $count; ?></td>
                <td class="px-4 py-3 text-center " id="image"><?php echo '<img src="uploads/'. $row["file"].'">'; ?></td>
                <td class="px-4 py-3 text-center "><?php echo $row["topic"]; ?></td>
                <td class="px-4 py-3 text-center "><?php echo $row["summary"]; ?></td>
                <td class="px-4 py-3 text-center  "><?php echo $row["description"]; ?></td>
                <td class="px-4 py-3 text-center "><?php   echo $row["bywhom"]; ?></td>
                <td  class="px-4 py-3 text-center "><a href="editblog.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-edit"></i></a></td>
                <td  class="px-4 py-3 text-center "><a href="deleteblog.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a></td>
                    
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
                  </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>
</body>
</html>