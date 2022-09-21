<?php
// include('config.php');
// $email = $_GET['email'];
// // $username = $_GET['username'];
// // $sql_u = "SELECT username FROM profile WHERE username='$username'limit=1";

// $sql_e = "SELECT email FROM `user` WHERE email='$email' limit=1";

// //    $res_u = mysqli_query($con, $sql_u);

//    $res_e = mysqli_query($con, $sql_e);
//    if($res_u->num_rows > 0)
//    {
//     echo 'false';
//    }
// //    elseif($res_e->num_rows > 0){
// //     echo 'true';
// //    }
//    else{
//     echo 'true';
//    }$sql = "SELECT username FROM `profile` WHERE username ='$username' LIMIT 1";

include("config.php");

   //  $email = $_GET['email'];
    $username  = isset($_GET['username']) ? $_GET['username'] : '';
    $email  = isset($_GET['email']) ? $_GET['email'] : '';
   //  $username =$_GET['username'];
    $sql_e = "SELECT email FROM user WHERE email ='$email' LIMIT 1";
   //  $sql_u = "SELECT username FROM `profile` WHERE username ='$username' LIMIT 1";
   // $sql_e="SELECT user.email,profile.username from user inner join `profile` on user.id = profile.user_id
   //  where email='$email'and username='$username' limit 1";
   //  $sql_e= "SELECT   user.email,profile.username from user inner join  profile where email='$email'and username='$username' limit 1";
    $result = $con->query($sql_e);
    if($result->num_rows > 0){
        echo 'false';
     }
     else{
        echo 'true';
     }



  ?>