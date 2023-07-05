<?php
// Database connection
include_once 'connectDB.php';
// SQL syntax
$sql = "SELECT * FROM  users";
// mysqli_query : send command or query to a MySQL database
$result = mysqli_query($conn, $sql);
if (!$result) {
  die("Cannot display data" . mysqli_error($conn));
}

?>

<html>
<head>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<body>
  <!-- Personal Credentials -->
  <div class="container m-5">
    <div class="h1 text-center">Personal Credentials
      <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
       
        <?php
        // mysqli_fetch_array : used to fetch a row from a MySQLi query result set and return it as an associative array.
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["Name"] . "</td>";
          echo "<td>" . $row["Address"] . "</td>";
          echo "<td>" . $row["Email"] . "</td>";
          
        ?>
        <!-- htmlentities: is used to encode the value of the id column in the current row of a database query result set.-->
          <td><a href="edit.php?editid=<?php echo htmlentities($row['id']); ?>"> edit</a></td>
          <td><a href="delete.php?deleteid=<?php echo htmlentities($row['id']); ?>"> delete</a></td>
        <?php
          echo "</tr>";
        }
        ?>

      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>