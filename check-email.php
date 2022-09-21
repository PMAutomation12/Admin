<?php
include("config.php");

    $email = $_GET['email'];
    $sql = "SELECT email FROM user WHERE email ='$email' LIMIT 1";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo 'false';
     }
     else{
        echo 'true';
     }

?>