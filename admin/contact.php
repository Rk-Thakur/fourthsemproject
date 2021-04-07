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

    <style>
        body{background:white!important;}
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
        <a class="mr-5 hover:text-red-600 smoothScroll" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
    </div>
</header>
        <div class="info " >
        <p class="text-5xl text-center font-bold m-5">Contact</p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Contact_Id</th>
                <th class="px-4 py-3 text-center">Name</th>
                <th class="px-4 py-3 text-center">Email</th>
                <th class="px-4 py-3 text-center">Message</th>
                <th class="px-4 py-3 text-center">Action</th>

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
                    <tr>
                    <td class="px-4 py-3 text-center" align="center" ><?php echo $count; ?></td>
                    <td class="px-4 py-3 text-center" align="center" ><?php echo $row['id']; ?></td>
                    <td class="px-4 py-3 text-center" align="center" ><?php echo $row["name"]; ?></td>
                    
                    <td class="px-4 py-3 text-center" align="center" >
                    <a href="sendmail.php?id=<?php echo $row['id'];?>">
                    <?php echo $row["email"]; ?></td>
                    </a>
                    <td class="px-4 py-3 text-center" align="center" ><?php echo $row["message"]; ?></td>
                    <td class="px-4 py-3 text-center"><a href="deletecontact.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a></td>
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