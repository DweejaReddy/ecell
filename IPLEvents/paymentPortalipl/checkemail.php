<?php
// include("config/db.php");
// include("funs.php");
$servername = "localhost";
$username = "ias2020";
$password = "ecell123";
$dbname = "ipl";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
   die("Connection failed: " . $conn->connect_error);
}	 
$error = '';
if (isset($_POST['loginButton'])) {
  session_start();
  $_SESSION['leader_email'] = $_POST['leader_email'];
//   $_SESSION['mem_pass'] = $_POST['mem_pass'];
  $email= $_SESSION['leader_email'];
//   $password = sha1(mysqli_real_escape_string($conn,$_SESSION['mem_pass']));

  $query_select = mysqli_query($conn, "SELECT * from employee_table where job = '$email' ");

	$checkpoint = mysqli_num_rows($query_select);

	echo $checkpoint;

    if ($checkpoint>0) { // condition for wrong passwordneeds to be added.
      $query_select1 = mysqli_query($conn, "SELECT * from employee_table where job = '$email' AND payment_status = '0' ");
      $checkpoint1 = mysqli_num_rows($query_select1);
        if($checkpoint1>0){
            header("location:rules.php");
          
        }else{
            $error = "You've already completed the payment.";
		
        }
    }else{

        $error = "Email doesn't exist, kindly enter the registered leader email or Register!";

    }
}

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Payment | IPL</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
  <link rel="stylesheet" href="css/forgetCSS.css">
  <!-- favicon  -->
  <link rel="shortcut icon" href="public/img/2.png" type="image/x-icon">

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;800&display=swap" rel="stylesheet">

  

</head>
    <body style="background-image: url('images/signup.jpg');">
        <h4 style="color:white;" class="text-center pt-4">Enter your registered Leader email.</h4>
        
      

        <div class="container d-flex align-items-center justify-content-center min-vh-100 p-3 pt-2 rounded" >
          <div class ="row">
            <form action="checkemail.php" method="POST">
              <div class="form-group">
                <label style="color:white;" for="leader_email">Registered Leader E-mail</label>
                <input placeholder="Registered Leader Email" type="email" id="leader_email" name="leader_email" class="form-control rounded-pill" required>
              </div>
              <!-- <?php echo $_SESSION['leader_email'] ?> -->
              <div class="text-danger"><?php echo $error; ?></div>
              <div class="form-group">
                <button type="submit" name="loginButton" class="btn btn-danger btn-block rounded-pill"> Verify </button>
              </div>
            </form>
          </div>
        </div>

        <div class="text-center pb-5">
          <img src="images/Untitled-2-02.jpg" alt="payment graphic" width="500px" />
        </div>

    </body>


  <!-- Bootstrap javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>
