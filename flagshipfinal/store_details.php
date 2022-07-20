<?php
if(isset($_POST['submit_form']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123"; //change it for localhost as: ecell123
 $dbname = "flagship22";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $college = $_POST['college'];
  $checkUser = "SELECT * FROM flagship_data where contact = '$contact'";
  $result = mysqli_query($conn, $checkUser);
  $count = mysqli_num_rows($result);
  if($count>0){
    header('LOCATION:success.php?name='.$name);
  }
  else{
  $sql = "INSERT INTO flagship_data (name, email, contact, college) VALUES ('$name', '$email', '$contact', '$college')";
    
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php?name='.$name);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
}
?>