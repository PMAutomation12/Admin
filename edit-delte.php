<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include_once('header.php');
    include_once('sidebar.php');
    require('config.php');

//     $type='';
// if(isset($_GET['type']) && $_GET['type']!=''){

//     $type=isset($_GET['type']) ? $_GET['type'] : '';
//     if($type == 'status'){

//          $operation=isset($_GET['operation']) ? $_GET['operation'] : '';

//          $id=isset($_GET['id']) ? $_GET['id'] : '';
//         if($operation =='active'){

//               $status='1';
//         }else{
//                $status='0';
//         }
//      echo  $update_status_sql="UPDATE `user`set status='$status' where id='$id'";

//        $query_run222= mysqli_query($con, $update_status_sql);
//     }
// }
//     ?>

</head>
<body>
<main id="main" class="main" style="height: 85vh;">
<div class="card">
            <div class="card-body">
              <h5 class="card-title">View</h5>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>

                    <th scope="col">S.L</th>
                    <th scope="col">username</th>
                    <th scope="col">first_name</th>
                    <th scope="col">last_name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">job</th>
                   <th scope="col">Action</th>

                  </tr>
                </thead>
             <tbody>
              <?php

                         $status=1;
                            // $query ="SELECT  `user`.`id`,`profile`.username,`profile`.first_name,`profile`.last_name,user.email,`profile`.mobile,`profile`.job
                            // FROM `profile`
                            // LEFT JOIN user ON `profile`.user_id = user.id
                            // where `profile`.status=$status";
                               $query ="SELECT  `user`.`id`,`profile`.username,`profile`.first_name,`profile`.last_name,user.email,`profile`.mobile,`profile`.job,user.status
                               FROM `user`
                               inner JOIN profile ON `profile`.user_id = user.id
                                   where profile.status=$status ";


                         $query_run= mysqli_query($con, $query);
                         if(mysqli_num_rows($query_run) > 0)
                         {
                             foreach($query_run as $modal)
                             {


                         ?>
                         <tr>
                             <td><?= $modal['id']?></td>
                             <td><?= $modal['username']?></td>
                             <td><?= $modal['first_name']?></td>
                             <td><?= $modal['last_name']?></td>
                             <td><?= $modal['email']?></td>
                             <td><?= $modal['mobile']?></td>
                             <td><?= $modal['job']?></td>
                             <td>
                             <?php

                            if($modal['status']==1){
                                echo "<button onclick='statusUpdate(".$modal['id'].",".$modal['status'].")' class='btn btn-success'>Active</button>";
                            }else{
                                echo "<button onclick='statusUpdate(".$modal['id'].",".$modal['status'].")' class='btn btn-danger'>Deactive</button>";
                            }
                            ?>


                            <a href="edit.php?id=<?= trim($modal['id']); ?>"><button type="button" id="<?=$modal['id'];?>" class="editStudentBtn btn btn-info">Edit</button></a>
                            <button type="button" id="<?=$modal['id'];?>" class="deletclientBtn btn btn-danger">Delete</button>
                            <a href="changepassword.php?id=<?= trim($modal['id']); ?>"><button type="button" id="<?=$modal['id'];?>" class="cpassclientBtn btn btn-warning">Change password</button></a>
                             </td>
                           </tr>
                         <?php
                             }
                         }
                         ?>
               </tbody>
          </table>
         </div>
</div>
</main>

<script src="js/jquery-3.6.1.min.js" ></script>



  <?php
    include_once('footer.php');

    ?>

    <script>

      //delete part
    $(document).on('click', '.deletclientBtn', function(e) {
    e.preventDefault();
    if(confirm('Are you sure'))
    {
       var modal= $(this).attr('id');
       $.ajax({

          type: "POST",
          url : "delete.php",
          data: {
              
                'modal' : modal
          },
          success: function(response){

            var res =jQuery.parseJSON(response);
                if(res.status == 500)
                {
                    alert(res.message);
                }else{
                    alert(res.message);
                    // $().load(location.href + " #myTable")
                }
                location.reload();
          }
       });
    }
});


//Active to Deactive
 function statusUpdate(user_id,status){

       $.ajax({
          type: "POST",
          url : "changestatus.php",
          data: {
                'user_id': user_id,
                'status' : status
          },
          success: function(response){
            var res =jQuery.parseJSON(response);

                if(res.status==200)
                {
                    alert(res.message);

                }
                elseif(res.status==500)
                {
                  alert(res.message);
                }

          }

       });
       location.reload();

 }

    </script>
</body>
</html>