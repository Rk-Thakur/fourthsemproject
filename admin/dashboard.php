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
    <title>Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    body{background:white!important;}
    #image {
            width: 150px;
            height: 150px;
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

    


<header class="text-black-600 body-font-black  bg-black   " id="header">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center text-bold bg-black ">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="dashboard.php">
                <img src="images/logo.JPG" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12 text-white p-2  rounded-full" viewBox="0 0 24 24">
        <span class="ml-3   text-white">A.S.T GYM KHANA </span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center  justify-center  text-white ">
        <a class="mr-5 hover:text-red-600 smoothScroll" href="dashboard.php"> Home</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="trainer.php">Trainer</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="gallery.php">Gallery</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="blog.php">Blogs</a>
        <a class="mr-5 hover:text-red-600 smoothScroll"href="contact.php">Contact</a>
        <a class="mr-5 hover:text-red-600 smoothScroll"href="member.php">Member</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="payment.php">Payment</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="client.php">Client</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="workout.php">Workout</a>
        <a class="mr-5 hover:text-red-600 smoothScroll" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
    </div>
</header>




    
<!-- welcome -->
    <div class="info animate__animated animate__bounceInUp animate_delay-1s" >  
      <p class=" px-10 py-10 text-center font-bold m-5 text-2xl">Welcome, <?php  echo $_SESSION['uname'] ?> </p>
      <section class="w-20 h-20 mx-auto flex">

      <?php
                  include_once("config.php");
                  $sql="SELECT file FROM trainer WHERE name ='{$_SESSION['uname']}'";
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
              <?php echo '<img src="uploads/'. $row["file"].'"height= "150" class="rounded-full" width="150" alt=" ">'; ?>

                    <?php

                  }
                }
                ?> 
        </section>  
    </div>
<!-- contact -->
    <div class="info animate__animated animate__bounceInUp animate_delay-1s " >

            <p class=" text-center font-bold m-5">Contact</p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Name</th>
                <th class="px-4 py-3 text-center">Email</th>
                <th class="px-4 py-3 text-center">Message</th>
              </tr>
            </thead>
            <tbody>
              <tr>
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
    <div class="info animate__animated animate__bounceInUp animate_delay-2s" >
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
                    <tr>
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
    <div class="info " >
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
    <div class="info " >
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
              <tr>
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

    <div class="info " >
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
                    <tr>
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