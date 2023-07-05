<?php
include_once 'connectDB.php';
// the isset() function is used to check if the "submit" button has been clicked on a form. 
if(isset($_POST['submit']))
{
    $eid = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET Name = '$name', Address = '$address', Email = '$email' where ID = '$eid'";
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