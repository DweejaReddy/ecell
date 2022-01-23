<?php
session_start();
if(isset($_POST['submit_name']))
{
//  $servername = "localhost";
//  $username = "ias2020";
//  $password = "ecell123";
//  $dbname = "eco21";
 

// $conn = new mysqli($servername, $username, $password, $dbname);
$con = mysqli_connect("localhost","ias2020","ecell123","merch");
if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}	 
 
$enteredName = mysqli_real_escape_string($con, $_POST['enteredName']);
$email = $_SESSION['email'];
$sql = "UPDATE merchentries SET  enteredName = '$enteredName' WHERE email ='$email'";
   if ($con->query($sql) === TRUE) {
    header('LOCATION:https://pmny.in/brXtQUw3o8Qy');    
}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;
  } 
}
?>