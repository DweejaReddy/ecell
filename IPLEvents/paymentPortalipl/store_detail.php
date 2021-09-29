<?php
session_start();
if(isset($_POST['submit_form']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "ipl";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
$name=$_POST['name'];
$age=$_POST['age'];
$job=$_POST['job'];
$startdesc = $_POST['startdesc'];
$referral = $_POST['referral'];
//  $checkBox=$_POST['name'];

$_SESSION['leader_name'] = $name[0];
$_SESSION['leader_email'] = $job[0];
// age is phone number !! 
// job is email id !!


 if(sizeof($name)==1){
    $name1= $name[0];
    $email1=$job[0];
  $sql = "INSERT INTO employee_table (name, age, job,startdesc, referral) VALUES ('$name1', '$age[0]', '$email1','$startdesc', '$referral' )";
 }
 elseif(sizeof($name)==2){
    $name1= $name[0];
    $m2name= $name[1];
    $email1=$job[0];
    $m2email=$job[1];
  $sql = "INSERT INTO employee_table (name, age, job, startdesc, referral, m2name, m2email) VALUES ('$name1', '$age[0]', '$email1','$startdesc', '$referral', '$m2name', '$m2email' )";
 }
 elseif(sizeof($name)==3){
    $name1= $name[0];
    $m2name= $name[1];
    $m3name= $name[2];
    $email1=$job[0];
    $m2email=$job[1];
    $m3email = $job[2];
  $sql = "INSERT INTO employee_table (name, age, job, startdesc, referral, m2name, m2email, m3name, m3email) VALUES ('$name1', '$age[0]', '$email1','$startdesc','$referral','$m2name', '$m2email', '$m3name' ,'$m3email' )";
 }
 else{
    $name1= $name[0];
    $m2name= $name[1];
    $m3name= $name[2];
    $m4name= $name[3];
    $email1=$job[0];
    $m2email=$job[1];
    $m3email = $job[2];
    $m4email = $job[3];
  $sql = "INSERT INTO employee_table (name, age, job, startdesc, referral, m2name, m2email, m3name, m3email, m4name, m4email) VALUES ('$name1', '$age[0]', '$email1','$startdesc','$referral','$m2name', '$m2email', '$m3name' ,'$m3email' ,'$m4name' ,'$m4email')";
 }
 
    
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
?>