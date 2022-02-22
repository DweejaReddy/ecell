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
        $dbname = "conso22";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT sno, name, email, phone, college, country, exp, preference1, preference2, preference3 FROM entremun";
        $result = mysqli_query($conn, $sql);
        
    ?>

   <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Index</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Details</th>
                <th scope="col">College</th>
                <th scope="col">Country</th>
                <th scope="col">Experience</th>
                <th scope="col">Preferece 1</th>
                <th scope="col">Preferece 2</th>
                <th scope="col">Preferece 3</th>
            </tr>
        </thead>
        <?php
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <tbody>
            <tr>
                <td><?php echo $row["sno"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["college"]; ?></td>
                <td><?php echo $row["country"]; ?></td>
                <td><?php echo $row["exp"]; ?></td>
                <td><?php echo $row["preference1"]; ?></td>
                <td><?php echo $row["preference2"]; ?></td>
                <td><?php echo $row["preference3"]; ?></td>
            </tr>
        </tbody>
        <?php endwhile; ?>
   </table>
   
   <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
   </body>
   
</html>