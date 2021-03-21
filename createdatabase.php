<?php
$conn =  mysqli_connect("localhost","root","","fourthproject");
//contact table
// $sql = "CREATE table contact(
//     id int NOT NULL PRIMARY KEY NOT NULL AUTO_INCREMENT,
//     name varchar(50) NOT NULL,
//     email varchar(50) NOT NULL,
//     message varchar(1000) NOT NULL
//     )";

//blog table
// $sql = "CREATE table blog(
//         id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
//         file varchar(1000) NOT NULL,
//         topic varchar(100) NOT NULL,
//         description varchar(10000) NOT NULL
//     )";
    //gallery table
// $sql = "CREATE table gallery(
//     id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
//     file varchar(1000) NOT NULL,
//     topic varchar(30) NOT NULL,
//     name varchar(30) NOT NULL,
//     description varchar(100) NOT NULL
// )";
//trainer table
$sql = "CREATE table trainer(
    id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    file varchar(1000) NOT NULL,
    name varchar(30) NOT NULL,
    specialist varchar(30) NOT NULL,
    description varchar(100) NOT NULL
)";






$result =mysqli_query($conn,$sql);
if($result){
    echo "Table created";
}else{
    echo"Table not connected".mysqli_error($conn);
}



?>