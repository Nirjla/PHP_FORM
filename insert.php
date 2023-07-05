<?php
// Database connection
include_once 'connectDB.php';
if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (Name, Address, Email) VALUES ('$name','$address','$email')";
    // mysqli_query : send a query or command to a MySQL database 
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Cannot insert data" . mysqli_error($conn));
    }
    else
    {
    echo "<script>alert('Data inserted successfully');</script>";
}
}
