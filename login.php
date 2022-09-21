<?php
include('config.php');

// print_r( $_POST);
//         die();
 if(isset($_POST['email'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $result = $conn->query($sql);
   
     if($result-> num_rows > 0)
     {   
        session_start();
        $_SESSION['email'] = $email;
         $res = [
             'status' => 200,
             //'message' => 'valid Username or password'
         ];
          echo json_encode($res);
        }
         else
     {
         $res = [
             'status' => 201,
             'message' => 'Invalid Username or password'
         ];
          echo json_encode($res);
        // return $res;
     }
   
 }
?>