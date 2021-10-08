<?php
session_start();
if(isset($_POST['submit_form']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "sw21";
 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$linkedin = $_POST['linkedin'];
$college = $_POST['college'];
$grad = $_POST['grad'];
$check1 = $_POST['check1'];
$check2 = $_POST['check2'];
$check3 = $_POST['check3'];
$_SESSION['name'] = $name;
// age is phone number !! 
// job is email id !!
  $sql = "INSERT INTO swtable (name, email, phone, linkedin, college, grad) VALUES ('$name', '$email', '$phone','$linkedin', '$college', '$grad' )";
   if ($conn->query($sql) === TRUE) {
       if($_POST['check1'] == '1'){
        header('LOCATION:q1.php');
       }
       else if($_POST['check1'] == '2'){
        header('LOCATION:q2.php');
       }
       else{
        header('LOCATION:q3.php');       
       }
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
?>