<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    form .error{
      color: #ff0001;
    }
  </style>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">PM Automation</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
               

                  <div class="pt-4 pb-2">
                  <div id="errorMessage" class="alert alert-success d-none"></div>
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3" id="registerform" name="registerform" >
                    <div class="col-12">
                      <label for="yourName" class="form-label">First Name</label>
                      <input type="text" name="firstname" class="form-control" id="yourFirstName" required>
                      <!-- <div class="invalid-feedback">Please, enter your name!</div> -->
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Last Name</label>
                      <input type="text" name="lastname" class="form-control" id="yourLastName" required>
                      <!-- <div class="invalid-feedback">Please, enter your name!</div> -->
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <!-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> -->
                    </div>

                    <!-- <div class="col-12">
                      <label for="yourName" class="form-label">Mobile</label>
                      <input type="text" name="mobile" class="form-control" id="yourMobile" required>
                      <div class="invalid-feedback">Please, enter your Mobile number!</div>
                    </div> -->

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label> 
                      <input type="password" name="cpassword" class="form-control" id="cpassword" required>
                      <div class="invalid-feedback">Please enter your Confirm password!</div>
                    </div>

                    <!-- <div class="col-12">
                      <label for="yourImage" class="form-label">Upload Image</label> 
                      <input class="form-control"  type="file" name="imagefile" id="file">
                      <div class="invalid-feedback">Please enter your Confirm password!</div>
                    </div> -->

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" >
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <!-- <div class="invalid-feedback">You must agree before submitting.</div> -->
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" id="btn_create_account" name="create" >Create Account</button>
                      <!-- <input type="submit" value="Create Account"> -->
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="sign_in.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/validation.min.js"></script>
  <script src="assets/js/additionalmethods.min.js"></script>
 <script>
  $(function()
{
    $("#registerform").validate(
      {
        rules: 
        {
           firstname: 
          {
           required: true
           },
          lastname: 
           {
            required: true
         },
          email: 
          {
            required: true,
            email: true,
            remote:"check-email.php",
          },
          password: 
          {
            required: true,
            minlength: 6,
            maxlength: 12
          },
          cpassword: 
          {
            required: true,
            equalTo: "#password"
          }
        },
        messages: 
        {
           firstname: 
           {
             required: "Please enter your first name"
           },
           lastname: 
           {
             required: "Please enter your last name"
           },
          email: 
          {
            required: "Please enter your email address.",
            remote: "Email-Id already exists."
          },
          password: 
          {
            required: "Please enter your password.",
            minlength: "Your password must be at least 6 characters long",
            maxlength:"your password must not exceed 12 characters long"
          },
          cpassword: 
          {
            required: "Please enter your confirm password.",
            equalTo: "Please enter the same password as above"
          }
        }
      });	
});
  </script>
  <script>
           $(document).on('submit', '#registerform', function (e) {
            e.preventDefault();
            
            var data = $("#registerform").serialize();
          

            $.ajax({
                type: "POST",
                url: "register.php",
                data: data,
                dataType:"json",
               
                success: function (response) {
                    
                   // var res = jQuery.parseJSON(response);
                    if(response.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(response.message);

                    }
                    else if(response.status == 404) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(response.message);

                    }
                    else if(response.status == 200){

                        $('#errorMessage').removeClass('d-none');
                        $('#registerform')[0].reset();
                        //window.location('sign_up.php');
                        $('#errorMessage').text(response.message);
                      }
                      else if(response.status == 500) {
                         $('#errorMessage').removeclass('d-none');
                        $('#errorMessage').text(response.message);
                    }
                }
            });

        });
  </script>

</body>

</html>
