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
//         summary varchar(100) NOT NULL,
//         description longtext NOT NULL,
//         bywhom varchar(100) NOT NULL
//     )";
    //gallery table
// $sql = "CREATE table gallery(
//     id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
//     file varchar(1000) NOT NULL,
//     topic varchar(30) NOT NULL,
//     name varchar(30) NOT NULL,
//     description varchar(100) NOT NULL,
//     bywhom varchar(100) NOT NULL
// )";
//trainer table
// $sql = "CREATE table trainer(
//     id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
//     file varchar(1000) NOT NULL,
//     name varchar(30) NOT NULL,
//     specialist varchar(30) NOT NULL,
//     description varchar(100) NOT NULL,
//     bywhom varchar(100) NOT NULL
// )";
// $sql = "CREATE table registration(
//     id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
//     file varchar(200) NOT NULL,
//     name varchar(100) NOT NULL,
//     address varchar(100) NOT NULL,
//     contact int(10) NOT NULL,
//     email varchar(100) NOT NULL,
//     trainer varchar(20) NOT NULL,
//     package varchar(20) NOT NULL,
//     payment varchar(20) NOT NULL
// )";





//OPTIONAL FOR THE PAYMENTS
// $sql = "CREATE TABLE payment(
//         payment_id int NOT NULL PRIMARY KEY,
//         member_name varchar(100) NOT NULL,
//         total int (20) NOT NULL,
//         Due int (20) NOT NULL,
//         FOREIGN KEY (member_name) REFERENCES registration(name)
// )";
// $sql = " CREATE TABLE `payments` (
//     `payment_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     `paymentDate` date,
//     `amount` int NOT NULL,
//     `due` int NOT NULL,
//     `id` int,
//     FOREIGN KEY (id) REFERENCES registration(id)
// )";

$sql = "CREATE table workout(
    id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    file varchar(1000) NOT NULL,
    workout varchar(30) NOT NULL,
    name varchar(30) NOT NULL,
    howtodo varchar(100) NOT NULL,
    bywhom varchar(100) NOT NULL
)";





$result =mysqli_query($conn,$sql);
if($result){
    echo "Table created";
}else{
    echo"Table not connected".mysqli_error($conn);
}



?>