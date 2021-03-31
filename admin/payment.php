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

  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="wrapper">
    <div class="sidebar">
    
        <h2 class="text-2xl text-bold">A.S.T GYM KHANA</h2>
        <ul>
        <li><a href="dashboard.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="trainer.php"><i class="fas fa-user"></i>Trainer</a></li>
            <li><a href="gallery.php"><i class="fas fa-project-diagram"></i>Gallery</a></li>
            <li><a href="blog.php"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="contact.php"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="member.php"><i class="fas fa-user"></i>Member</a></li>
            <li><a href="payment.php"><i class="fas fa-flag"></i>Payment</a></li>
            <br><br><br><br><br><br><br><br><br><br>
            <li><a href="logout.php"><i class="fal fa-sign-out"></i>Logout</a></li>
          </ul>  
        
    </div>
    <div class="main_content">
        <div class="header">Payment Details <a href="insertpayment.php"><i class="fas fa-flag"></i></a> </div> 
        <div class="info " >
          <table class="border-separate border border-green-800 container  text-2xl text-center ">
            <thead>
              <tr>
                <th class="border border-green-600 ">S.N.</th>
                <th class="border border-green-600 ">Member_Id</th>
                <th class="border border-green-600 ">Date</th>
                <th class="border border-green-600 ">Total</th>
                <th class="border border-green-600 ">Due</th>
                <th  class="border border-green-600 ">Action</th>

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
                  <tr>
                <td class="border border-green-600 "><?php echo $count; ?></td>
                <td class="border border-green-600 ">
                <a href="member.php"><?php echo $row['id']; echo " (Click)"; ?></a>
                </td>
                <td class="border border-green-600 "><?php echo $row["paymentDate"]; ?></td>
                <td class="border border-green-600 "><?php echo $row["amount"]; ?></td>
                <td class="border border-green-600 "><?php echo $row["due"]; ?></td>
                
                <td  class="border border-green-600 text-center"><a href="deletepayment.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a></td>
                    
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