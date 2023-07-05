<?php
include_once 'connectDB.php';
// isset() is used to check if a GET parameter called "deleteid" has been set in the URL or not.
if(isset($_GET['deleteid']))
{
    $eid = $_GET['deleteid'];
    $sql = "DELETE FROM users where ID = '$eid'";
    $result = mysqli_query($conn,$sql);


    if ($result) {
        header('location:select.php');
   
  }
  
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }

}

?>