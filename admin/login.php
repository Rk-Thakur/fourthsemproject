
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
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="post">
    <Label name="Username">
    Username:    
    </Label>
    <input type="text" name="uname" class="unmame">
    <?php
    if(isset($errUsername)){
        echo $errUsername;
    }
    ?><br>
    <label name="Pwd"> Password </label>
    <input type="password" name="password" class="password">
    <?php
    if(isset($errPassword)){
        echo $errPassword;
    }
    ?> <br> <br>
    <input type="checkbox" name="remember" value="remember">remember
    <br>
    <br>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>