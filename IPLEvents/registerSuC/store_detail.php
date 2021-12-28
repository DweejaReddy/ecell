<?php

session_start();

require("phpmailer/PHPMailer.php");
require("phpmailer/SMTP.php");
require("phpmailer/Exception.php");

if(isset($_POST['submit_row']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "suc21";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$teamName=$_POST['TeamName'];
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];

  $_SESSION['leader_name'] = $name[0];
$vari=0;
 for($i=0;$i<count($name);$i++)
 {
  if($name[$i]!="" && $phone[$i]!="" && $email[$i]!="")
  {
    // echo $name[$i];
    // echo $age[$i];
    // echo $job[$i];
    $_SESSION['leader_email'] = $email[0];
   $sql = "INSERT INTO responses (teamName, name, phone, email) VALUES ('$teamName' , '$name[$i]', '$phone[$i]', '$email[$i]' )";
   if ($conn->query($sql) === TRUE) {
    if($vari==0){
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        try {
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';         
            $mail->SMTPAuth   = true;                         
            $mail->Username   = 'contact@ecellvnit.org';             
            $mail->Password   = '21Cont@ct22';                             
            $mail->SMTPSecure = 'tls';        
            $mail->Port       = 587;                                  
            $mail->setFrom('contact@ecellvnit.org', 'SuC VNIT');
            $mail->addAddress($email[0]);
            // $mail->addAttachment('images/NEO_studymaterial.pdf'); 
            $mail->isHTML(true);            
            $mail->Subject = 'Registration for Startup Conclave 2022 successful !!!';
            $mail->Body    = 'Dear '.$name[0].',<br>Your <b>registration</b> for Start-Up Conclave 2022 by E-Cell VNIT is <b>completed successfully.</b><br>We hope this mail finds you in the pink of your health.<br>Thank you for registering to our golden initiative of Startup Conclave 2022.<br>This opportunity might be the ultimate booster to your startup and creative ideas.<br>We request you to fill the form attached below; filling the questionnaire is necessary for participation in further rounds:<br><a href="https://forms.gle/udXpAQsqghBB3jQcA">https://forms.gle/udXpAQsqghBB3jQcA<br></a>All the best!!<br><br>Regards<br><span style="color:#ff8606"><b>TEAM SuC</b></span>';
            $mail->send();
            header('LOCATION:thanks.php');
        } catch (Exception $e) {
            echo "Something went wrong!! Try again!!!";
        }
        $vari++;
    }
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
  }
 }

}
?>
