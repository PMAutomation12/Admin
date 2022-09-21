<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    form .error{
      color:red;
    } #errorMessage{
      color: red;
    }
  </style>
</head>
<body>
<?php
    include_once('header.php');
    include_once('sidebar.php');
    $name_error='';
    ?>
<main id="main" class="main" style="height: 85vh;">
<section class="section">
  <div class="row">
<div class="col-lg-12" >
<div class="card">
  <div class="card-body">
  <!-- <div id="errorMessage" class="alert alert-success d-none" ></div> -->
    <h5 class="card-title">Add</h5>
    <!-- Custom Styled Validation -->
    <form class="row g-3" name="contactForm"  id="registerform" method="POST" action="">

      <div class="col-md-4">
      <input type="hidden" name="user_id" id="user_id">
        <label for="validationCustom02" class="form-label" oninput="registerform">Username</label>
        <input type="text" class="form-control" name="username" id="username"   >
        <!-- <div id="errorMessage" class="alert alert-danger d-none" ></div> -->
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" name="last_name" id="last_name" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
        <!-- <div id="errorMessage1" class="alert alert-danger d-none" ></div> -->
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Mobile Number</label>
        <input type="tel" class="form-control" name="mobile" id="mobile"  required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Job</label>
        <input type="text" class="form-control" name="job" id="job">
        </div>
        <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password"  required >
        </div>
        <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="conform_password" id="conform_password" required  >
        </div>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary"  name="submit">Submit form</button>
      </div>
    </form>
  </div>
</div>
</div>
</section>
</main>

  <script src="https://unpkg.com/jquery@3.1.1/dist/jquery.js" ></script>
    <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>



  <script>
  $(function () {
$("#registerform").validate({

// Define validation rules
rules: {


                username: {
                  required: true,
                  remote:"valiation.php"

                },
                first_name: {
                  required: true
                },
                last_name: {
                  required: true
                },
                email: {
                  required: true,
                  email: true,
                  remote:"valiation.php"
                },
                mobile: {
                  required: true,
                  minlength: 10,
                  maxlength: 10,
                  number: true
                },
                password: {
                  required: true,
                  minlength: 6,
                  maxlength: 12
                },
                conform_password:{
                  required: true,
                  equalTo: "#password"
                }
                },
// Specify validation error messages
      messages: {
                username:{
                  required:"Please provide a valid name.",
                  remote:"Username alredy exist"
                },

                first_name:{
                required: "Please enter your first name"
                },
                last_name:{
                  required: "Please enter your last name"
                },
                email: {
                  required: "Please enter your email",
                  remote:"Email alredy exist"
                },
                mobile: {
                  required: "Please provide a phone number",
                  minlength: "Phone number must be min 10 characters long",
                  maxlength: "Phone number must not be more than 10 characters long"
                },
                password:{
                  required: "Please enter your password.",
                  minlength: "Your password must be at least 6 characters long",
                  maxlength:"your password must not exceed 12 characters long"
                },
                conform_password:{
                required: "Please enter your confirm password.",
                equalTo: "Please enter the same password as above"
              }
                },
                // submitHandler: function (form) {
                // form.submit();
                // }
              });
            })
</script>

<script>


          $(document).on('submit', '#registerform', function (e) {

            e.preventDefault();

            var data = $("#registerform").serialize();

            $.ajax({
                method: "POST",
                url: "add_backend.php",
                dataType:"JSON",
                data: data,

                success: function (response) {

                  console.log(response);

                    console.log(response.status);
                    if(response.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(response.message);

                    }else if(response.status == 200){
                        alert("saved successfull");
                        window.location="edit-delte.php";

                    }else if(response.status == 500) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(response.message);
                    }
                    else if(response.status == 501){
                      $('#errorMessage1').removeClass('d-none');
                      $('#errorMessage1').text(response.message);
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
