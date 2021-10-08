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
$name = $_SESSION['name'];
$perspec=$_POST['perspec'];
$link=$_POST['link'];
$que1 = $_POST['que1'];
$que2 = $_POST['que2'];
$que3 = $_POST['que3'];

// age is phone number !! 
// job is email id !!
  $sql = "INSERT INTO swq3(name, perspec, link, que1, que2, que3) VALUES ('$name', '$perspec', '$link', '$que1', '$que2' ,'$que3' )";
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
?>