<?php
session_start();
if(isset($_POST['submit_form']))
{
//  $servername = "localhost";
//  $username = "ias2020";
//  $password = "ecell123";
//  $dbname = "eco21";

 $con = mysqli_connect("localhost","root","","coc");
// $conn = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}	 

$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$college=mysqli_real_escape_string($con, $_POST['college']);
$year = mysqli_real_escape_string($con, $_POST['year']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$emergencyphone = mysqli_real_escape_string($con, $_POST['emergencyphone']);
$size = mysqli_real_escape_string($con, $_POST['size']);
$name2 = mysqli_real_escape_string($con, $_POST['name2']);
$name3 = mysqli_real_escape_string($con, $_POST['name3']);
$name4 = mysqli_real_escape_string($con, $_POST['name4']);
$_SESSION['name'] = $name;
$checkUser = "SELECT * FROM cocentries where email = '$email'";
$result = mysqli_query($con, $checkUser);
$count = mysqli_num_rows($result);
if($count>0){
    header('LOCATION:thanksmsg.php');   
}
else{
  $sql = "INSERT INTO cocentries (name, email, college, year, phone, emergencyphone, size, name2, name3, name4) VALUES ('$name', '$email', '$college', '$year', '$phone', '$emergencyphone','$size','$name2','$name3', '$name4')";
  if ($con->query($sql) === TRUE) {
   header('LOCATION:thanksmsg.php');
 } else {
   echo "Error: " . $sql . "<br>" . $con->error;
 } 
}
  
}
?>
