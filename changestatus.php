<?php
    require('config.php');

    if($_POST['status'] == 1){
        $status = 0;
    }
    else{
        $status = 1;
    }

    $userId =  $_POST['user_id'];

    $update_status_sql="UPDATE `user`set status='$status' where id='$userId'";

    $query_run222= mysqli_query($con, $update_status_sql);

    if($query_run222)
{
    $res= [
        'status'=> 200,
        'message'=>'Are you confirm to change the status'
       ];
       echo json_encode($res);
//    return false;
}
else{
    $res= [
        'status'=> 500,
        'message'=>' data status not change'
       ];
       echo json_encode($res);
//    return false;
}




    ?>