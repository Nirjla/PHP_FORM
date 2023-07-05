<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydatabase';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Cannot connect to database".mysqli_connect_error());
}
?>