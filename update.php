<?php

include_once('config.php');
  $modal = $_REQUEST['modal'];
  $username = $_POST['username'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $job = $_POST['job'];

  if($username ==null || $first_name ==null || $last_name==null || $mobile ==null || $job ==null  ){

   $res= [
    'status'=> 422,
    'message'=>'All fields are mandatory'
   ];
   echo json_encode($res);
   return false;
}
    $sql = "UPDATE `user` SET email='$email' where id='$modal'";
    $result = $con->query($sql);
    $query= "UPDATE `profile` SET `username`='$username',`first_name`='$first_name',
                    `last_name`='$last_name',`mobile`='$mobile',`job`='$job' WHERE user_id='$modal'";
    $query_run = mysqli_query($con, $query);

                if($query_run)
                {
                    $res= [
                        'status'=> 200,
                        'message'=>'update data successefully',

                    ];
                    echo json_encode($res);
                return false;
                }
                else{
                    $res= [
                        'status'=> 500,
                        'message'=>'update data not successefully'
                    ];
                    echo json_encode($res);
                return false;
                }

?>