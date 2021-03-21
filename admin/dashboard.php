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
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <li><a href="logout.php"><i class="fal fa-sign-out"></i>Logout</a></li>
            

          </ul> 
        
    </div>
    
    <div class="main_content text-red">
    <div class="header text-3xl text-black bg-grey-200">Welcome, <?php  echo $_SESSION['uname'] ?></div> 

        <div class="header text-5xl text-black text-center">CONTACT</div> 
        <div class="info " >
          <table class="border-separate border border-green-800 container  text-2xl text-center ">
            <thead>
              <tr>
                <th class="border border-green-600 ">ID</th>
                <th class="border border-green-600 ">Name</th>
                <th class="border border-green-600 ">Email</th>
                <th class="border border-green-600">Message</th>
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
                    <td class="border border-green-600 " align="center" ><?php echo $count; ?></td>
                  <td class="border border-green-600" align="center" ><?php echo $row["name"]; ?></td>
                  <td class="border border-green-600" align="center" ><?php echo $row["email"]; ?></td>
                  <td class="border border-green-600" align="center" ><?php echo $row["message"]; ?></td>
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
        <div class="header text-5xl text-black text-center">BLOG</div> 
        <div class="info " >
          <table class="border-separate border border-green-800 container  text-2xl text-center ">
            <thead>
              <tr>
                <th class="border border-green-600 ">ID</th>
                <th class="border border-green-600 ">Image</th>
                <th class="border border-green-600 ">Topic </th>
                <th class="border border-green-600">Description</th>
                <th class="border border-green-600">By WHOM?</th>
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
                    <td class="border border-green-600 item-center " align="center" ><?php echo $count; ?></td>
                    <td class="border border-green-600 "><?php echo '<img src="uploads/'. $row["file"].'"height= "100" width="100" alt=" ">'; ?></td>
                    <td class="border border-green-600 "><?php echo $row["topic"]; ?></td>
                    <td class="border border-green-600 "><?php echo $row["description"]; ?></td>

                <td class="border border-green-600 "><?php  echo $_SESSION['uname'] ?></td>
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



        <div class="header text-5xl text-black text-center">GALLERY</div> 
        <div class="info " >
          <table class="border-separate border border-green-800 container  text-2xl text-center ">
            <thead>
              <tr>
                <th class="border border-green-600 ">ID</th>
                <th class="border border-green-600 ">Image</th>
                <th class="border border-green-600 ">Title </th>
                <th class="border border-green-600">Name</th>
                <th class="border border-green-600">Description</th>
                <th class="border border-green-600">By WHOM?</th>
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
                    <td class="border border-green-600 " align="center" ><?php echo $count; ?></td>
                    <td class="border border-green-600 "><?php echo '<img src="uploads/'. $row["file"].'"height= "100" width="100" alt=" ">'; ?></td>
                    <td class="border border-green-600 "><?php echo $row["topic"]; ?></td>
                    <td class="border border-green-600 "><?php echo $row["name"]; ?></td>
                    <td class="border border-green-600 "><?php echo $row["description"]; ?></td>

                <td class="border border-green-600 "><?php  echo $_SESSION['uname'] ?></td>
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



        <div class="header text-5xl text-black text-center">TRAINER</div> 
        <div class="info " >
          <table class="border-separate border border-green-800 container  text-2xl text-center ">
            <thead>
              <tr>
                <th class="border border-green-600 ">ID</th>
                <th class="border border-green-600 ">Image</th>
                <th class="border border-green-600">Name</th>
                <th class="border border-green-600">Specialist</th>
                <th class="border border-green-600">Description</th>
                <th class="border border-green-600">By WHOM?</th>
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
                    <td class="border border-green-600 " align="center" ><?php echo $count; ?></td>
                    <td class="border border-green-600 "><?php echo '<img src="uploads/'. $row["file"].'"height= "100" width="100" alt=" ">'; ?></td>
                    <td class="border border-green-600 "><?php echo $row["name"]; ?></td>
                    <td class="border border-green-600 "><?php echo $row["specialist"]; ?></td>
                    <td class="border border-green-600 "><?php echo $row["description"]; ?></td>

                <td class="border border-green-600 "><?php  echo $_SESSION['uname'] ?></td>
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