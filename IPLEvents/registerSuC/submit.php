<?php include "conn.php" ?>


<?php 
    $responses=array();
    array_push($responses,$_POST['name'],$_POST['email'],$_POST['t1a'],$_POST['t1b'],$_POST['t1c'],$_POST['t1d'],$_POST['t1e'],$_POST['t2a'],$_POST['t2b'],$_POST['t2c'],$_POST['t2d'],$_POST['t2e'],$_POST['t3a'],$_POST['t3b'],$_POST['t3c'],$_POST['t4a'],$_POST['t4b'],$_POST['t5a'],$_POST['t5b'],$_POST['t5c'],$_POST['t5d'],$_POST['t5e'],$_POST['t5f'],$_POST['t6a'],$_POST['t6b'],$_POST['t6c'],$_POST['t7a'],$_POST['t7b'],$_POST['t7c'],$_POST['t7d'],$_POST['t8a'],$_POST['t9a'],$_POST['t9b'],$_POST['t9c'],$_POST['t9d'],$_POST['t9e'],$_POST['t10a'],$_POST['t10b']);

    $sql="INSERT INTO responses (name ,email ,t1a ,t1b ,t1c ,t1d ,t1e ,t2a ,t2b ,t2c ,t2d ,t2e ,t3a ,t3b ,t3c ,t4a ,t4b ,t5a ,t5b ,t5c ,t5d ,t5e ,t5f ,t6a ,t6b ,t6c ,t7a ,t7b ,t7c ,t7d ,t8a ,t9a ,t9b ,t9c ,t9d ,t9e ,t10a,t10b)
    VALUES ('$responses[0]','$responses[1]','$responses[2]','$responses[3]','$responses[4]','$responses[5]','$responses[6]','$responses[7]','$responses[8]','$responses[9]','$responses[10]','$responses[11]','$responses[12]','$responses[13]','$responses[14]','$responses[15]','$responses[16]','$responses[17]','$responses[18]','$responses[19]','$responses[20]','$responses[21]','$responses[22]','$responses[23]','$responses[24]','$responses[25]','$responses[26]','$responses[27]','$responses[28]','$responses[29]','$responses[30]','$responses[31]','$responses[32]','$responses[33]','$responses[34]','$responses[35]','$responses[36]','$responses[37]')";

    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:index.php?message=1");
    }else{
        header("location:index.php?message=0");
    }
?>