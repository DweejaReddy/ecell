<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
   
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Welcome </title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

   </head>
   
   <body>

   <?php
        $servername = "localhost";
        $username = "ias2020";
        $password = "ecell123";
        $dbname = "merch";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // if($conn) echo "yes";
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM merchentries";
        // echo $sql;
        $result = mysqli_query($conn, $sql);
        $sno=1;
    ?>

   <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Index</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Details</th>
                <th scope="col">Address</th>
                <th scope="col">Pin</th>
                <th scope="col">Size</th>
                <th scope="col">Type</th>
                <th scope="col">Name Needed</th>
                <th scope="col">Entered Name</th>
            </tr>
        </thead>
        <?php
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <tbody>
            <tr>
                <td><?php echo $sno; $sno=$sno+1; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["pin"]; ?></td>
                <td><?php echo $row["size"]; ?></td>
                <td><?php echo $row["type"]; ?></td>
                <td><?php echo $row["printName"]; ?></td>
                <td><?php echo $row["enteredName"]; ?></td>
            </tr>
        </tbody>
        <?php endwhile; ?>
   </table>
   
   <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
   </body>
   
</html>