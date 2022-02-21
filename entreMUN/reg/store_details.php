<?php
session_start();
if(isset($_POST['submit']))
{
//  $servername = "localhost";
//  $username = "ias2020";
//  $password = "ecell123";
//  $dbname = "eco21";
 

// $conn = new mysqli($servername, $username, $password, $dbname);
$con = mysqli_connect("localhost","ias2020","ecell123","conso22");
if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}	 

$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$phone=mysqli_real_escape_string($con, $_POST['phone']);
$college = mysqli_real_escape_string($con, $_POST['college']);
$country = mysqli_real_escape_string($con, $_POST['country']);
$exp = mysqli_real_escape_string($con, $_POST['exp']);
$preference1 = mysqli_real_escape_string($con, $_POST['preference1']);
$preference2 = mysqli_real_escape_string($con, $_POST['preference2']);
$preference3 = mysqli_real_escape_string($con, $_POST['preference3']);
$_SESSION['name'] = $name;

$_SESSION['email'] = $email;
  $sql = "INSERT INTO entremun (name, email, phone, college, country, exp, preference1, preference2, preference3) VALUES ('$name', '$email', '$phone','$college', '$country', '$exp', '$preference1', '$preference2', '$preference3')";
  if ($con->query($sql) === TRUE) {
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  } 
}
?>