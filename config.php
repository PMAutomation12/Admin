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