
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
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" placeholder="Username" name="uname">
    </div>
    <?php
    if(isset($errUsername)){
        echo $errUsername;
    }
    ?>
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="******************" name="password">
            <p class="text-red text-xs italic">Please choose a password.</p>

    </div>
    <?php
    if(isset($errPassword)){
        echo $errPassword;
    }
    ?>
    <div class="flex items-center justify-between">
      
      <input type="submit" name="submit" class="bg-black hover:bg-red-dark text-white font-bold py-2 px-4 rounded" value="Sign In ">
      <a href="registerid.php" class="bg-black hover:bg-red-dark text-white font-bold py-2 px-4 rounded"> Register</a>
    </div>
</div>
</form>
</body>
</html>

