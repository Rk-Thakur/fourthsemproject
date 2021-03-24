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
    
    <div class="p-2 w-1/2">
        <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Username</label>
            <input type="text" id="name" name="uname" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
    </div>
    <div class="p-2 w-1/2">
        <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Password</label>
            <input type="password"  name="password" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
    </div>


    <input type="submit"  value="Register"name="submit" class=" mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"> 
    
    </form>
</body>
</html>