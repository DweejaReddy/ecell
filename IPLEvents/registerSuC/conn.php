<?php 
    $servername='localhost';
    $username="ias2020";
    $password="ecell123";
    $database="SC_Questionaire";

    $conn=mysqli_connect($servername,$username,$password,$database);

    $sql="CREATE TABLE responses (id INTEGER PRIMARY KEY AUTO_INCREMENT,name TEXT,email TEXT, t1a TEXT,t1b TEXT,t1c TEXT,t1d TEXT,t1e TEXT,t2a TEXT,t2b TEXT,t2c TEXT,t2d TEXT,t2e TEXT,t3a TEXT,t3b TEXT,t3c TEXT,t4a TEXT,t4b TEXT,t5a TEXT,t5b TEXT,t5c TEXT,t5d TEXT,t5e TEXT,t5f TEXT,t6a TEXT,t6b TEXT,t6c TEXT,t7a TEXT,t7b TEXT,t7c TEXT,t7d TEXT,t8a TEXT,t9a TEXT,t9b TEXT,t9c TEXT,t9d TEXT,t9e TEXT,t10a TEXT,t10b TEXT)";

    mysqli_query($conn,$sql);
    


?>