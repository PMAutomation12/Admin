<?php

// Destroy 
session_destroy(); 
unset($_SESSION['email']);
header('Location: sign_in.php');
?>