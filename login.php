<?php
include('config.php');

// print_r( $_POST);
//         die();
 if(isset($_POST['email'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    
   
    $sql = "SELECT id,role,status FROM user WHERE email = '$email' and password = '$password'";
    $result = $conn->query($sql);
   
    
    if($result-> num_rows > 0 )
     {  
        $fetch = $result->fetch_object();
        if($fetch->status == '0'){
            $res = [
                'status' => 422,
                'message' => ' Username is temporarily is in inactive state.'
            ];
             echo json_encode($res);
        }

    else{
        
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $fetch->id;
        $_SESSION['role'] = $fetch->role;
        
        $res = [
             'status' => 200,
             //'message' => 'valid Username or password'
         ];
          echo json_encode($res);
        }
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