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
    <title>Payment</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    



<div class="flex items-center h-screen w-full bg-gray-300">

  <div class="w-full bg-white rounded  p-8 m-4 md:max-w-sm ">

    <h1 class=" w-full text-center text-2xl font-bold  text-grey-darkest mb-6">Collection For  Month: 💵</h1>

    <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase  font-bold text-lg text-grey-darkest" >Member_Id:</label>
        <input class="border py-2 px-3 text-grey-darkest md:mr-2" type="number" name="id" required>
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest md:ml-2" >Date:</label>
        <input class="border py-2 px-3 text-grey-darkest md:ml-2" type="date" name="date" required >
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest">Total</label>
        <input class="border py-2 px-3 text-grey-darkest" type="number" name="amt"
        required>
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest">Due</label>
        <input class="border py-2 px-3 text-grey-darkest" type="number" name="due"
        required
        >
      </div>

      <button class="block   text-white bg-gray-900   uppercase  mx-auto p-4 rounded" type="submit" name="submit">
      Upload
      </button>
      
    </form>
    
  </div>
  <div class="info " >
    <p class=" text-5xl text-center font-bold m-5">Payment Details</p>
  <table class="rounded-lg m-5 w-5/6 mx-auto bg-white text-gray-800">
<thead>
<tr class="text-left border-b-4 border-gray-900">
    <th class="px-4 py-3 text-center">Id</th>
    <th class="px-4 py-3 text-center">Member_Id</th>
    <th class="px-4 py-3 text-center">Name</th>
</tr>
</thead>
<tbody>
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
                <td class="px-4 py-3 text-center"><?php echo $count; ?></td>
                <td class="px-4 py-3 text-center"><?php echo $row['id']; ?></td>
                <td class="px-4 py-3 text-center"><?php echo $row["name"]; ?></td>
                    
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
</tr>
</table>
  </div>



  
</body>
</html>



