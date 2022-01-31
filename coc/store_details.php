<?php
session_start();
if(isset($_POST['submit_form']))
{
//  $servername = "localhost";
//  $username = "ias2020";
//  $password = "ecell123";
//  $dbname = "eco21";

 $con = mysqli_connect("localhost","ias2020","ecell123","coc");
// $conn = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}	 

$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$college=mysqli_real_escape_string($con, $_POST['college']);
$year = mysqli_real_escape_string($con, $_POST['year']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$_SESSION['name'] = $name;
 
  $sql = "INSERT INTO cocentries (name, email, college, year, phone) VALUES ('$name', '$email', '$college', '$year', '$phone')";
   if ($con->query($sql) === TRUE) {
    // header('LOCATION:thanks.php');
    echo "Done";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  } 
}
?>
