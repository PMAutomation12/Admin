<?php
    include("config.php");
    $user_id = isset($_POST['u_id']) ? $_POST['u_id'] : ''; 
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    //$user_id = $_REQUEST['u_id'];
    //$username = $_POST['username'];
    // $email = $_POST['email'];
    // $mobile = $_POST['mobile'];

    // if($username == NULL || $email == NULL || $mobile == NULL)
    // {
    //     $res = [
    //         'status' => 422,
    //         'message' => 'All fields are mandatory'
    //     ];
    //     echo json_encode($res);
    //     return;
    // }

    $sql = "UPDATE `user` SET email='$email' where id='$user_id'";
    $result = $conn->query($sql);
    $query_run= "UPDATE `profile` SET `username`='$username',`mobile`='$mobile' WHERE user_id='$user_id'";  
   // $result1 = $conn->query($query_run);
   $result1=mysqli_query($conn,$query_run);
    if($result1)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student Not Updated'
        ];
        echo json_encode($res);
        return;
    }
 //}
?>