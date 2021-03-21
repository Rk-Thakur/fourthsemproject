<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bim4";
$conn = mysqli_connect('localhost','root','','fourthproject');

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
// sql to create table
$sql = "CREATE TABLE login(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
    
    )";
    $result= mysqli_query($conn,$sql);
    if($result){
        echo "Table login created Sucessfully";
    }else{
        echo "Error creating table:". mysqli_error($conn);
    }
mysqli_close($conn);
?>