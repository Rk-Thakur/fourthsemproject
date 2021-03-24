
<?php
include_once("config.php");
if(isset($_POST['submit'])){

    $username= $_POST['uname'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM login
            where username='$username' AND password= '$password' ";
    $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['uname'] = $username;
        if(isset($_POST['remember'])){
            setcookie('username' ,$username,time()+24*60*60);
        }
        header("Location: dashboard.php");
        
    }else{
        echo "login failed";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="post">
    
    <div class="p-2 w-1/2">
        <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Username</label>
            <input type="text"  name="uname" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
    </div> 
    <?php
    if(isset($errUsername)){
        echo $errUsername;
    }
    ?>
    

    
    <div class="p-2 w-1/2">
        <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Password</label>
            <input type="password"  name="password" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
    </div> 
    
    <?php
    if(isset($errPassword)){
        echo $errPassword;
    }
    ?>
    <br> <br>
    <input type="checkbox" name="remember" > Remember
    <br>
    <br>
    <input type="submit"  value="Login" name="submit" class=" flex-wrap mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"> 

    </form>
</body>
</html>