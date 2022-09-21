<?php
  require('header.php');
  require('sidebar.php');
    ?>
 <!DOCTYPE html>
<html lang="en">
<head>
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
                    <th scope="col"> Username</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col"> Mobile-Number</th>
                    <th scope="col"> Job</th>
                    <th scope="col">Company</th>

                  </tr>
                </thead>
                <tbody>
              <?php
              require('config.php');
                         $query = "SELECT * FROM client";
                         $query_run= mysqli_query($con, $query);
                         if(mysqli_num_rows($query_run) > 0)
                         {
                             foreach($query_run as $modal)
                             {
                                 // echo $modal['id'];

                         ?>
                         <tr>
                             <td><?= $modal['id']?></td>
                             <td><?= $modal['username']?></td>
                             <td><?= $modal['first_name']?></td>
                             <td><?= $modal['last_name']?></td>
                             <td><?= $modal['email']?></td>
                             <td><?= $modal['mobile']?></td>
                             <td><?= $modal['job']?></td>
                             <td><?= $modal['company']?></td>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php
    include_once('footer.php');

    ?>
</body>
</html>