<?php
include_once 'connectDB.php';
// isset() is used to check if a GET parameter called "editid" has been set in the URL or not.
if (isset($_GET['editid'])) {
    $eid = $_GET['editid'];
    $sql = "SELECT * FROM users where id='$eid'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Cannot execute query: " . mysqli_error($conn));
    }
    // mysqli_fetch_array : used to fetch a row from a MySQLi query result set and return it as an associative array.
    while ($row = mysqli_fetch_array($result)) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>

        <body>
            <!-- Update your Info -->
            <div class=container justify-content-center align-items-center>
                <div class="container mt-5 p-5">
                    <div class="h1">Update your information</div>
                    <form action="update.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $row['Name'] ?>">
                            <!-- It retrieves the data stored in the database -->
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp" value="<?php echo $row['Address'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $row['Email'] ?>">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </form>
                </div>

            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <?php
    }
} else {
    // Display an error message
    echo "The editid parameter is missing.";
}
    ?>

        </body>

        </html>