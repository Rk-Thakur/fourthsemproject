<?php
$errUsername = $errPassword =  " ";
if(isset($_POST['submit'])){
    $username= $_POST['uname'];
    $password = $_POST['password'];
    

    if(empty($username) && empty($password)){
        $errUsername ="Enter Your Name";
        $errPassword = " Enter  Your password";
    }else{
        include_once("config.php");
        $sql = "INSERT INTO login(username,password)
        Values('$username','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            // echo"New Record is uploaded";
            header("Location: login.php");
            // header("Location: displayclasswork.php");
        }else{
            "Record not uploaded".mysqli_error($conn);
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
    <title>Register YOUR ID!!</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="post">
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" placeholder="Username" name="uname">
    </div>
    
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="******************" name="password">
    </div>
    
    <div class="flex items-center justify-between">
      
      <input type="submit" name="submit" class="bg-black hover:bg-red-dark text-white font-bold py-2 px-4 rounded" value="Register">
      <a href="login.php" class="bg-black hover:bg-red-dark text-white font-bold py-2 px-4 rounded"> Login</a>
    </div>
</div>
</form>
</body>
</html>


