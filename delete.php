<?php

require 'config.php';

    $modal = $_REQUEST['modal'];

    $status  = isset($_POST['status']) ? $_POST['status'] : '0';

    //  $query = "DELETE FROM `profile` where id='$modal'";
     $query = "UPDATE `profile` SET `status`='$status' WHERE id='$modal'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
{
    $res= [
        'status'=> 200,
        'message'=>'Delete data successefully'
       ];
       echo json_encode($res);
   return false;
}
else{
    $res= [
        'status'=> 500,
        'message'=>'Delete data not successefully'
       ];
       echo json_encode($res);
   return false;
}



?>