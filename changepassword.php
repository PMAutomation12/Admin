<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require('config.php');
    if (isset($_GET['id'])) {
      $modal= $_GET['id'];
    //   $query ="SELECT  `user`.`id`,`profile`.username,`profile`.first_name,`profile`.last_name,user.email,`profile`.mobile,`profile`.job
    //                         FROM `profile`
    //                         LEFT JOIN user ON `profile`.user_id = user.id
    //                         where `user`.`id`=$modal";
         $query = "SELECT * FROM `user` where id='$modal'";
         $result= mysqli_query($con, $query);
         if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

    ?>
</head>
<body>
<?php
    include_once('header.php');
    include_once('sidebar.php');
    ?>
<main id="main" class="main" style="height: 85vh;">



<section class="section">
  <div class="row">

<div class="col-lg-12" >

<div class="card">
  <div class="card-body">
    <h5 class="card-title">change password</h5>


    <!-- Custom Styled Validation -->
    <form class="row g-3 needs-validation" novalidate method="post" action="" id="updateStudent">
    <div class="row-md-4">
    <input type="hidden" name="modal" id="" value="<?php echo $modal ?>">
        <input type="text" class="form-control" name="password" id="validationCustom02" value="<?php echo $row['password']; ?>" >
      </div>
      <div class="row-md-8">
        <label for="validationCustom02" class="form-label">New Password</label>
        <input type="password" class="form-control" name="password" id="validationCustom02" required>
        <div class="invalid-feedback">
            Please enter a Username.
          </div>
      </div>
      <div class="row-md-4">
        <label for="validationCustom02" class="form-label">Confirm New Password</label>
        <input type="password" class="form-control" name="password" id="validationCustom02" required>
        <div class="invalid-feedback">
            Please enter a Username.
          </div>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary" id="modal" >Update</button>
      </div>
    </form>
    <?php
          }
      }
  }

?>
  </div>
</div>
</div>
  </div>
</section>
</main>

 <script src="js/jquery-3.6.1.min.js" ></script>

 <script>

// update part
$(document).on('submit', '#updateStudent', function(e) {
  console.log('submited');
        e.preventDefault();
        var formData = new FormData(this);
        // formData.append("update_student",true)0
        formData = $('#updateStudent').serialize();
        $.ajax({
            type:"POST",
            url:"updatepassword.php",
            // url:"code.php",
            dataType:"json",
            data:formData,
            processData:false,
            // contentType:false,

            success:function(response){

                // var res =jQuery.parseJSON(response);
                if(response.status == 500)
                {

                  $('#errorMessageUpdate').removeClass('d-none');
                    $('#errorMessageUpdate').text(response.message);


                }else if(response.status ==200){
                  alert("updated successfull");
                  window.location="edit-delte.php";

                }

            }
        });
    });
</script>



<?php
    include_once('footer.php');

    ?>
</body>
</html>