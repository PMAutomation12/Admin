<?php

include_once('config.php');
  $modal = $_REQUEST['modal'];
//   echo ($modal);
  $password  = isset($_POST['password']) ? $_POST['password'] : '';
// echo ($password);
  if($password ==null ){

   $res= [
    'status'=> 422,
    'message'=>'All fields are mandatory'
   ];
//    echo json_encode($response);
   return false;
}
    $sql = "UPDATE `user` SET `password`='$password' where id='$modal'";
    $result = $con->query($sql);
    // $query_run = mysqli_query($con, $result);

                if($result==TRUE)
                {
                    $response= [
                        'status'=> 200,
                        'message'=>'update data successefully',

                    ];
                    echo json_encode($response);
                return false;
                }
                else{
                    $response= [
                        'status'=> 500,
                        'message'=>'update data not successefully'
                    ];
                    echo json_encode($response);
                return false;
                }

?>