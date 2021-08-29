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
        <p class=" text-5xl text-center font-bold m-5">Payment Details<a href="insertpayment.php"><i class="far fa-flag bg-red hover:bg-indigo-200"></i>(Add  Details)</a></p>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N.</th>
                <th class="px-4 py-3 text-center">Member_Id</th>
                <th class="px-4 py-3 text-center">Date</th>
                <th class="px-4 py-3 text-center">Total</th>
                <th class="px-4 py-3 text-center">Due</th>
                <th  class="px-4 py-3 text-center">Action</th>
              </tr>
            </thead>  
            <tbody>
              <tr>
            <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM payments ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr class=" hover:bg-gray-300 ">
                <td class="px-4 py-3 text-center"><?php echo $count; ?></td>
                <td class="px-4 py-3 text-center">
                <a href="member.php"><?php echo $row['id']; echo " (Click)"; ?></a>
                </td>
                <td class="px-4 py-3 text-center"><?php echo $row["paymentDate"]; ?></td>
                <td class="px-4 py-3 text-center"><?php echo $row["amount"]; ?></td>
                <td class="px-4 py-3 text-center"><?php echo $row["due"]; ?></td>
                
                <td  class="px-4 py-3 text-center"><a href="deletepayment.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a></td>
                    
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
                  </tr>
                  <tr>
            <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT amount,due FROM payments ";
                  $price = 0;
                  $price_due = 0;
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){
                    $price += $row['amount'];
                    $price_due += $row['due'];
                  }
                }
                    ?>
                  <tr>
                <td class="px-4 py-3 text-center" colspan="3">
                Total
                </td>
                <td class="px-4 py-3 text-center"><?php echo"$price"  ?></td>
                <td class="px-4 py-3 text-center"><?php  echo "$price_due" ?></td>
                
                    
                </tr>
                    
                  </tr>
                  
            </tbody>
          </table>
          
        </div>
        
    </div>
    
</div>


<!-- Member details -->

<div class="info " >
          <p class="text-5xl text-center font-bold m-5">Members</p>
          <table class="rounded-lg  w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
            <th class="px-4 py-3 text-center">S.N</th>
            <th class="px-4 py-3 text-center">Member_Id</th>
            <th class="px-4 py-3 text-center">Image</th>
            <th class="px-4 py-3 text-center">Name</th>
            <th class="px-4 py-3 text-center">Contact</th>
            

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
                  <td  class=" text-center"><?php echo $count; ?></td>
                  <td  class=" text-center"><?php echo $row['id']; ?></td>
                    <td  class=" text-center" id="image"><?php echo '<img src="uploads/'. $row["file"].'"height= "200" width="200" alt=" ">'; ?></td>
                    <td  class=" text-center"><?php echo $row["name"]; ?></td>
                    <td  class="px-4 py-3 text-center"><?php echo $row["contact"]; ?></td>

                    
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