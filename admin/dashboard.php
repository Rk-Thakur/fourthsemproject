<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>
<!-- to do  list -->
<?php
  include_once('config.php');
  if(isset($_POST['submit']))
  {
  
  if(empty($_POST['list']) ||  empty($_SESSION['uname']) ){ 
    header("Location: dashboard.php");
    }else{
      $list=$_POST['list'];
      $whom = $_SESSION['uname'];
    
  $sql="INSERT into todo(list,bywhom) values('$list','$whom')";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    // echo"Data inserted";
    header("Location: dashboard.php");
  }
  else{
    echo"Data not inserted".mysqli_error($conn);
  }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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



<!-- pop up -->


    
<!-- welcome -->
<div class="p-5 m-10 ">
<section class="text-gray-600  body-font animate__animated animate__bounceInUp animate_delay-1s bg-gray-300 rounded-lg ">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-3/4 mb-10 px-4">
        <div class=" rounded-lg   p-10 h-64 overflow-hidden  ">
        <?php
                  include_once("config.php");
                  $sql="SELECT file FROM trainer WHERE name ='{$_SESSION['uname']}'";
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                    <?php echo '<img src="uploads/'. $row["file"].'" class="mx-auto rounded-full "  width="110" height="110" alt=" ">'; ?>

                    <?php

                  }
                }
                ?> 
                <h2 class=" text-3xl font-medium   mt-5">Welcome, <?php  echo $_SESSION['uname'] ?></h2>

        </div>

      </div>
      <div class="sm:w-1/4 mb-5 px-4 border border-gray-600 bg-gray-100 rounded-lg" >
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
          <h2 class="text-white text-2xl font-medium hover:bg-red-600 mt-6 mb-3  bg-gray-500 rounded-lg" >Todo List</h2>
          <div class="relative mb-4">
            <input type="text"  name="list" required class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>        
          <button class="flex mx-auto  text-white bg-gray-500 border-0 py-2 px-3  hover:bg-red-600 rounded" name="submit">Add</button>

          <?php
                  include_once("config.php");
                  $sql="SELECT * FROM todo  WHERE bywhom ='{$_SESSION['uname']}' ORDER BY id desc ";
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <h4 class="  font-medium text-gray-900 mt-6 mb-3  p-2 bg-white rounded "><?php echo $row['list']?> 
                  <a href="deletetodo.php?id=<?php echo $row["id"]; ?>" class="mx-right"><i class="fas fa-trash"></i></a></h4>
                  <?php
                  }
                }
                ?>
            </form>
      </div>
    </div>
  </div>
</section>
</div>

<!-- contact -->
    <div class=" info animate__animated animate__bounceInUp animate_delay-1s   " >

            <p class="  text-center font-bold m-5">Contact</p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800  ">
            <thead>
            <tr class="text-left border-b-4 border-gray-900 position-sticky">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Name</th>
                <th class="px-4 py-3 text-center">Email</th>
                <th class="px-4 py-3 text-center">Message</th>
              </tr>
            </thead>
            <tbody>
              
                <tr class=" hover:bg-gray-300 ">
              <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM contact ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                    <tr >
                    <td class="px-4 py-3 text-center"><?php echo $count; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["name"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["email"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["message"]; ?></td>

                    
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

        <!-- member -->
    <div class="info animate__animated animate__bounceInUp animate_delay-2s  " >
            <p class=" text-center font-bold m-5">Members</p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
            <th class="px-4 py-3 text-center">S.N</th>
            <th class="px-4 py-3 text-center">Image</th>
            <th class="px-4 py-3 text-center">Name</th>
            <th class="px-4 py-3 text-center">Address</th>
            <th class="px-4 py-3 text-center">Contact</th>
            <th class="px-4 py-3 text-center">Email</th>
            <th class="px-4 py-3 text-center">Trainer</th>
            <th class="px-4 py-3 text-center">Package</th>
            <th class="px-4 py-3 text-center">Payment</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM registration ORDER BY id desc";
                  //execute query
                    $result=mysqli_query($conn,$sql);
                    $count=1;
                if($result){                 
                while($row=mysqli_fetch_assoc($result)){?>
                    <tr class=" hover:bg-gray-300 ">
                    <td  class="px-4 py-3 text-center"><?php echo $count; ?></td>
                    <td  class="px-4 py-3 text-center" id="image"><?php echo '<img src="uploads/'. $row["file"].'"height= "150" width="150" alt=" ">'; ?></td>
                    <td  class="px-4 py-3 text-center"><?php echo $row["name"]; ?></td>
                    <td  class="px-4 py-3 text-center"><?php echo $row["address"]; ?></td>
                    <td  class="px-4 py-3 text-center"><?php echo $row["contact"]; ?></td>
                    <td  class="px-4 py-3 text-center"><?php echo $row["email"]; ?></td>
                    <td  class="px-4 py-3 text-center"><?php echo $row["trainer"]; ?></td>
                    <td  class="px-4 py-3 text-center"><?php echo $row["package"]; ?></td>
                    <td  class="px-4 py-3 text-center"><?php echo $row["payment"]; ?></td>

                    
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


        <!-- blog -->
    <div class="info   " >
        <p class=" text-center font-bold m-5">Blog <a href="insertblog.php"><i class="fas fa-book-medical hover:bg-indigo-300"></i></a></p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
              <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center ">S.N</th>
                <th class="px-4 py-3 text-center ">Image</th>
                <th class="px-4 py-3 text-center ">Topic</th>
                <th class="px-4 py-3 text-center ">Description</th>
                <th class="px-4 py-3 text-center ">By WHOM?</th>
                
              </tr>
            </thead>
            <tbody>
              <tr class=" hover:bg-gray-300 ">
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
                    <tr>
                    <td  class="px-4 py-3 text-center " ><?php echo $count; ?></td>
                    <td class="px-4 py-3 text-center " id="image"><?php echo '<img src="uploads/'. $row["file"].'"height= "150" width="150" alt=" ">'; ?></td>
                    <td class="px-4 py-3 text-center "><?php echo $row["topic"]; ?></td>
                    <td class="px-4 py-3 text-center "><?php echo $row["description"]; ?></td>
                    <td class="px-4 py-3 text-center "><?php  echo $row['bywhom'] ?></td>
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


        <!-- Gallery -->
    <div class="info   " >
        <p class=" text-center font-bold m-5">Gallery<a href="insertgallery.php"><i class="far fa-images bg-red hover:bg-indigo-200"></i></a></p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Image</th>
                <th class="px-4 py-3 text-center">Title </th>
                <th class="px-4 py-3 text-center">Name</th>
                <th class="px-4 py-3 text-center">Description</th>
                <th class="px-4 py-3 text-center">By WHOM?</th>
              </tr>
            </thead>
            <tbody>
              <tr class=" hover:bg-gray-300 ">
              <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM gallery ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                    <tr>
                    <td  class="px-4 py-3 text-center" ><?php echo $count; ?></td>
                    <td class="px-4 py-3 text-center" id="image"><?php echo '<img src="uploads/'. $row["file"].'"height= "150" width="150" alt=" ">'; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["topic"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["name"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["description"]; ?></td>
                    <td class="px-4 py-3 text-center" ><?php  echo $row["bywhom"] ?></td>
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

                  <!-- Trainer -->

    <div class="info  " >
        <p class=" text-center font-bold m-5">Trainer <a href="insertrainer.php"><i class="fas fa-user-plus hover:bg-indigo-300"></i></a></p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Image</th>
                <th class="px-4 py-3 text-center">Name</th>
                <th class="px-4 py-3 text-center">Specialist</th>
                <th class="px-4 py-3 text-center">Description</th>
                <th class="px-4 py-3 text-center">By WHOM?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM trainer ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                    <tr class=" hover:bg-gray-300 ">
                    <td  class="px-4 py-3 text-center" ><?php echo $count; ?></td>
                    <td class="px-4 py-3 text-center" id="image"><?php echo '<img src="uploads/'. $row["file"].'"height= "150" width="150" alt=" ">'; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["name"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["specialist"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["description"]; ?></td>
                    <td class="px-4 py-3 text-center" ><?php  echo $row["bywhom"] ?></td>
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


    
</body>
</html>