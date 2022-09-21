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