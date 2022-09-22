<?php
include ("config.php");
// echo "i am here";
// exit();
if(isset($_POST['email']))
{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
    
    $sql = "SELECT * FROM user WHERE email = '$email' ";
    $result = $conn->query($sql);
    if($firstname == NULL || $lastname == NULL || $email == NULL || $password == NULL || $cpassword == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    elseif ($result->num_rows > 0) {
        $res =[
            'status' =>404,
            'message'=>'Email Id already exists'
        ];
        echo json_encode($res);
    }

    else{
        $sql3 = "SELECT id FROM roles WHERE role_key = 'admin' AND status = '1'";
        $excute3 = $conn->query($sql3);
        $result3 = $excute3->fetch_object();
        $role = $result3->id;

        $sql1 = "INSERT INTO user(email,password,role) VALUES ('$email','$password','$role')";
        $result1 = $conn->query($sql1);
        $last_id = $conn->insert_id;
      
        $sql2 = "INSERT INTO profile (user_id,first_name,last_name) VALUES ('$last_id','$firstname','$lastname')";
        $result2 = $conn->query($sql2);
                  if($result1)
                      {
                          // move_uploaded_file($tmpfile,$path);
      
                          $res = [
                              'status' => 200,
                              'message' => 'Student Created Successfully'
                          ];
                      
                          echo json_encode($res);
                    
                      }
                      else
                      {
                          $res = [
                              'status' => 500,
                              'message' => 'Student Not Created'
                          ];
                          echo json_encode($res);
                      // return $res;
                      }
                  }
              
  
   
}

?>