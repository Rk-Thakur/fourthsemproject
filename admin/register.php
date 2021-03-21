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
    <br>
    <br>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>