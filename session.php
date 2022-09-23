<?php
session_start();

 $session_email = $_SESSION['email'];
 $session_id = $_SESSION['id'];
 $session_role = $_SESSION['role'];

 if(!isset($session_email)){
    header('Location:sign_in.php');
  }
?>