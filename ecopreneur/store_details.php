<?php
session_start();
if(isset($_POST['submit_form']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "eco21";
 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
$name=mysqli_real_escape_string($conn, $_POST['name']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$phone=mysqli_real_escape_string($conn, $_POST['phone']);
$branch = mysqli_real_escape_string($conn, $_POST['branch']);
$college = mysqli_real_escape_string($conn, $_POST['college']);
$year = mysqli_real_escape_string($conn, $_POST['year']);
$q1 = mysqli_real_escape_string($conn, $_POST['q1']);
$q2 = mysqli_real_escape_string($conn, $_POST['q2']);
$q3 = mysqli_real_escape_string($conn, $_POST['q3']);
$_SESSION['name'] = $name;
// age is phone number !! 
// job is email id !!
  $sql = "INSERT INTO ecoentries (name, email, phone, college, branch, year, q1, q2, q3) VALUES ('$name', '$email', '$phone','$college', '$branch', '$year', '$q1', '$q2', '$q3' )";
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
?>