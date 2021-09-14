<?php

session_start();
// include('mailing.php');


// $name = $_POST["name"];
// $name = $_SESSION['leader_name'];
// $name = $_SESSION['name1'];
$to_email = $_SESSION['leader_email'];
// $sub = "Welcome To C-Suites";
// $teamname = "";
// $event = "";

//htmlMail($to_email, $sub, $name, $teamname, $event );
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Instructions</title>

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
        <h4 style="color:white;" class="text-center pt-4">Complete Your Payment to proceed further.</h4>
        
      

        <div class="container d-flex align-items-center justify-content-center min-vh-100 p-3 pt-2 rounded">
          <div class ="row">
            <form action="pay.php" method="POST">
              <div class="form-group">
                <label style="color:white;" for="CUSTOMER_NAME">Name</label>
                <input placeholder="Enter Name" type="text" id="CUSTOMER_NAME" name="CUSTOMER_NAME" class="form-control rounded-pill" required>
              </div>
              <div class="form-group">
                <label style="color:white;" for="CUSTOMER_EMAIL">Registered E-mail</label>
                <input placeholder="Enter Email" type="email" id="CUSTOMER_EMAIL" name="CUSTOMER_EMAIL" class="form-control rounded-pill" required>
              </div>
              <div class="form-group">
                <label style="color:white;" for="CUSTOMER_MOBILE">Contact Number</label>
                <input placeholder="Enter Contact Number" type="number" id="CUSTOMER_MOBILE" name="CUSTOMER_MOBILE" class="form-control rounded-pill" required>
              </div>
              <!-- <?php echo $_SESSION['leader_email'] ?> -->
              <div class="form-group">
                <label style="color:white;" for="CUSTOMER_PAYMENT">To proceed further kindly pay Rs.149 </label>
              </div>
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-danger btn-block rounded-pill"> Pay Now </button>
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
