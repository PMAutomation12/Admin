<<<<<<< HEAD
<?php 

$localhost = "localhost";
$username = "root";
$password = "";
$db = "sample";

$conn = new mysqli($localhost,$username,$password,$db);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>
=======
<?php
  
   $severname = "localhost";
   $username = "iad_api";
   $password = "iad_api";
   $dbname = "iad_api";

   $con = new mysqli($severname,$username,$password,$dbname);
   if($con->connect_error){
   die("Connection failed:" .$con->connect_error );

   };
   ?>
>>>>>>> 0e1e2fe4cc4b6babe481665f342c6a872d4ab739
