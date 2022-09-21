
<?php
include('config.php');
  $username  = isset($_POST['username']) ? $_POST['username'] : '';
  $first_name  = isset($_POST['first_name']) ? $_POST['first_name'] : '';
  $last_name  = isset($_POST['last_name']) ? $_POST['last_name'] : '';
  $email  = isset($_POST['email']) ? $_POST['email'] : '';
  $mobile  = isset($_POST['mobile']) ? $_POST['mobile'] : '';
  $job  = isset($_POST['job']) ? $_POST['job'] : '';
  $password  = isset($_POST['password']) ? $_POST['password'] : '';


if($username ==null || $first_name ==null || $last_name==null || $email ==null|| $mobile ==null || $job ==null || $password == null  ){

    $res= [
     'status'=> 422,
     'message'=>'All fields are mandatory'
    ];
     echo json_encode($res);
    return false;

 }
  //   $sql_u = "SELECT * FROM profile WHERE username='$username'";

  //  $sql_e = "SELECT * FROM user WHERE email='$email' limit=1";

  // 	$res_u = mysqli_query($con, $sql_u);

  // 	$res_e = mysqli_query($con, $sql_e);


  //     if(mysqli_num_rows($res_u) > 0){

  //     $res = [
  //       'status' => 500,
  //       'message' => 'Sorry... username already taken'
  //   ];
  //      echo json_encode($res);
  //      return false;
  //  }
  //    elseif(mysqli_num_rows($res_e) > 0)
  //    {
  //     $res = [
  //       'status' => 501,
  //       'message' => 'Sorry... email already taken'
  //   ];
  //      echo json_encode($res);
  //      return false;
  //    }

    // else {

        $sql = "INSERT INTO `user`(email,password) VALUES ('$email','$password')";

        $result = $con->query($sql);

        $last_id = $con->insert_id;

        $sql1 ="INSERT INTO `profile`( user_id,username,first_name,last_name,mobile,job)
                VALUES ('$last_id','$username','$first_name','$last_name','$mobile','$job')";

       $result = $con->query($sql1);


  if($result)
    {
        $res = [
            'status' => 200,
            'message' => 'Client Created Successfully'
        ];

         echo json_encode($res);
        return false;
    }
  else
    {
        $res = [
            'status' => 500,
            'message' => 'Client Not Created'
        ];
         echo json_encode($res);
        return false;
    }

  // }
?>