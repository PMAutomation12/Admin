<!DOCTYPE html>
<html lang="en">
<head>
 <?php
    require('config.php');
    if (isset($_GET['id'])) {
      $modal= $_GET['id'];

         //  $query = "SELECT * FROM `user` where id='$modal'";
         //  $result= mysqli_query($con, $query);
        //  $query1 ="SELECT * FROM user u inner JOIN profile p ON u.id = p.user_id WHERE  u.id ='$modal'";
         $query1 ="SELECT  user.id,profile.username,profile.first_name,profile.last_name,user.email,profile.mobile,profile.job
         FROM user
         inner JOIN profile ON profile.user_id = user.id where user_id='$modal'";

         $result1= mysqli_query($con, $query1);


         if ($result1->num_rows > 0) {
          while ($row = $result1->fetch_assoc()) {


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
    <h5 class="card-title">Add</h5>


    <!-- Custom Styled Validation -->
    <form class="row g-3 needs-validation" novalidate method="post" action="" id="updateStudent">
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Username</label>
        <input type="hidden" name="modal" id="" value="<?php echo $modal ?>">
        <input type="text" class="form-control" name="username" id="validationCustom02" value="<?php echo $row['username']; ?>" required>
        <div class="invalid-feedback">
            Please enter a Username.
          </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First Name</label>
        <input type="text" class="form-control" name="first_name" id="validationCustom01"value="<?php echo $row['first_name']; ?>" required>
        <div class="invalid-feedback">
            Please enter a First Name.
          </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" name="last_name" id="validationCustom02"value="<?php echo $row['last_name']; ?>" required>
        <div class="invalid-feedback">
            Please enter a Last Name.
          </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="validationCustom01"value="<?php echo $row['email']; ?>" required>
        <div class="invalid-feedback">
            Please choose a Job.
          </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Mobile Number</label>
        <input type="number" class="form-control" name="mobile" id="validationCustom01"value="<?php echo $row['mobile']; ?>"  required>
        <div class="invalid-feedback">
            Please choose a Mobile Number.
          </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Job</label>
        <input type="text" class="form-control" name="job" id="validationCustom01"value="<?php echo $row['job']; ?>" required>
        <div class="invalid-feedback">
            Please choose a Job.
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

                  e.preventDefault();

                  var formData = new FormData(this);

                  formData = $('#updateStudent').serialize();
                  $.ajax({
                      type:"POST",
                      url:"update.php",
                      data:formData,
                      processData:false,

                      success:function(response){

                          var res =jQuery.parseJSON(response);
                          if(res.status == 422)
                          {
                              $('#errorMessageUpdate').removeClass('d-none');
                              $('#errorMessageUpdate').text(res.message);
                          }
                          else if(res.status ==200)
                          {
                              alert("updated successfull");
                              window.location="edit-delte.php";
                          }

                      }
                  });
              });
        </script>

<?php
    include_once('footer.php')
?>
</body>
</html>
