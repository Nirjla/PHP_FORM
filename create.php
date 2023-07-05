<?php
include_once 'connectDB.php';
// SQL syntax
$sql = "CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    Address VARCHAR(40) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
  )";
  // mysqli_query : send a query or command to a MySQL database 
$result = mysqli_query($conn,$sql);
if(!$result){
    die("Cannot create table".mysqli_error($conn));
}

?>