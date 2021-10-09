<?php
   include('session.php');
   $var= $_SESSION['password'];
?>
<?php if($var=="info") : ?>
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
            $dbname = "sw21";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT name, email, phone, linkedin, college, grad FROM swtable";
            $result = mysqli_query($conn, $sql);
            
        ?>

    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Details</th>
                    <th scope="col">LinkedIn</th>
                    <th scope="col">College</th>
                    <th scope="col">Grad</th>
                </tr>
            </thead>
            <?php
                while($row = mysqli_fetch_assoc($result)):
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["linkedin"]; ?></td>
                    <td><?php echo $row["college"]; ?></td>
                    <td><?php echo $row["grad"]; ?></td>
                </tr>
            </tbody>
            <?php endwhile; ?>
    </table>
    
    <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
    </body>
    
    </html>
<?php elseif($var=="first") : ?>
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
            $dbname = "sw21";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT name, story, link, size, que1, que2, que3 FROM swq1";
            $result = mysqli_query($conn, $sql);
            
        ?>

    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Story</th>
                    <th scope="col">Link</th>
                    <th scope="col">Size</th>
                    <th scope="col">que1</th>
                    <th scope="col">que2</th>
                    <th scope="col">que3</th>
                </tr>
            </thead>
            <?php
                while($row = mysqli_fetch_assoc($result)):
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["story"]; ?></td>
                    <td><?php echo $row["link"]; ?></td>
                    <td><?php echo $row["size"]; ?></td>
                    <td><?php echo $row["que1"]; ?></td>
                    <td><?php echo $row["que2"]; ?></td>
                    <td><?php echo $row["que3"]; ?></td>
                </tr>
            </tbody>
            <?php endwhile; ?>
    </table>
    
    <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
    </body>
    
    </html>
<?php elseif($var=="second") : ?>
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
            $dbname = "sw21";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT name, story, domain, link, que1, que2, que3 FROM swq2";
            $result = mysqli_query($conn, $sql);
            
        ?>

    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">story</th>
                    <th scope="col">domain</th>
                    <th scope="col">Link</th>
                    <th scope="col">que1</th>
                    <th scope="col">que2</th>
                    <th scope="col">que3</th>
                </tr>
            </thead>
            <?php
                while($row = mysqli_fetch_assoc($result)):
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["story"]; ?></td>
                    <td><?php echo $row["domain"]; ?></td>
                    <td><?php echo $row["link"]; ?></td>
                    <td><?php echo $row["que1"]; ?></td>
                    <td><?php echo $row["que2"]; ?></td>
                    <td><?php echo $row["que3"]; ?></td>
                </tr>
            </tbody>
            <?php endwhile; ?>
    </table>
    
    <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
    </body>
    
    </html>
<?php else : ?>
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
            $dbname = "sw21";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT name, perspec, link, que1, que2, que3 FROM swq3";
            $result = mysqli_query($conn, $sql);
            
        ?>

    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">perspective</th>
                    <th scope="col">link</th>
                    <th scope="col">que1</th>
                    <th scope="col">que2</th>
                    <th scope="col">que3</th>
                </tr>
            </thead>
            <?php
                while($row = mysqli_fetch_assoc($result)):
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["perspec"]; ?></td>
                    <td><?php echo $row["link"]; ?></td>
                    <td><?php echo $row["que1"]; ?></td>
                    <td><?php echo $row["que2"]; ?></td>
                    <td><?php echo $row["que3"]; ?></td>
                    
                </tr>
            </tbody>
            <?php endwhile; ?>
    </table>
    
    <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
    </body>
    
    </html>
<?php endif; ?>
