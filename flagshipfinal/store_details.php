<?php
if(isset($_POST['submit_form']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell@123@"; //change it for localhost as: ecell123
 $dbname = "flagship21";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
 $college = $_POST['college'];
//  $checkBox = implode(',', $_POST['speakers']);
 $checkBox=$_POST['speakers'];
 if(sizeof($checkBox)==0){
  $sql = "INSERT INTO flagship_data (name, email, contact, college) VALUES ('$name', '$email', '$contact', '$college')";
 }
 elseif(sizeof($checkBox)==1){
  $speaker1=$checkBox[0];
  $sql = "INSERT INTO flagship_data (name, email, contact, college, speaker1) VALUES ('$name', '$email', '$contact', '$college','$speaker1' )";
 }
 elseif(sizeof($checkBox)==2){
  $speaker1=$checkBox[0];
 $speaker2=$checkBox[1];
 $sql = "INSERT INTO flagship_data (name, email, contact, college, speaker1,speaker2) VALUES ('$name', '$email', '$contact', '$college','$speaker1','$speaker2' )";
 }
 else{
  $speaker1=$checkBox[0];
  $speaker2=$checkBox[1];
  $speaker3=$checkBox[2];
  $sql = "INSERT INTO flagship_data (name, email, contact, college, speaker1,speaker2,speaker3) VALUES ('$name', '$email', '$contact', '$college','$speaker1','$speaker2','$speaker3' )";
 }
 
    
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php?name='.$name);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
?>