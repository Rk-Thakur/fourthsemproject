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
    
    $name=$_POST['date'];
    $specialist = $_POST['amt'];
    $special = $_POST['due'];

$description=$_POST['id'];
$sql="INSERT into payments(paymentDate,amount,due,id) values('$name','$specialist','$special','$description')";
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo"Data inserted";
    header("Location: payment.php");
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
    <title>BLOG</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
    Collection of Three months: <br> <br>
    <br>
    Member_Id:
    <input type="number" name="id"> <br> <br>
    Date:
    <input type="date" name="date"> <br> <br>
    Total:
    <input type="number" name="amt"> <br> <br>
    Due:
    <input type="number" name="due"> <br> <br>
    
    <input type="submit" name="submit" Value="submit">
    </form> <br> <br>
</body>
</html>

<table>
<tr>
    <th>Id</th>
    <th>Member_Id</th>
    <th>Name</th>
</tr>
<tr>
<?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT id , name FROM registration ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr>
                <td class="border border-green-600 "><?php echo $count; ?></td>
                <td class="border border-green-600 "><?php echo $row['id']; ?></td>
                <td class="border border-green-600 "><?php echo $row["name"]; ?></td>
                    
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
</tr>
</table>





