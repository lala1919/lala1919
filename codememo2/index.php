<!DOCTYPE html>
<html lang="en">

<head>
<?php require ('_conn.php'); ?> 

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v2.5.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">

      <h1><a href="index.html">Code Memo</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>Python <span>Java</span> Javascript</h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Code Home</a></li>
          <li><a href="#codeHistory">Code History</a></li>
          <li><a href="#codeWrite">Code Write</a></li>
        </ul>
      </nav><!-- .nav-menu -->
<!-- 
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Resume Section ======= -->
  <section id="codeHistory" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>codeHistory</h2>
        <p>code History</p>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <?php
          $sqlload = "SELECT * FROM `codeMemo`";
          $result = mysqli_query($conn, $sqlload);
          foreach($result as $v) {
          ?>

          <h3 class="resume-title">
            <?=$v['title'];?>
          </h3>
        
          <div class="resume-item pb-0">
            <h4>Code Type : <?=$v['type'];?></h4>
            <p><em><pre id="<?=$v['no'];?>"><?=$v['content'];?></pre></em></p>
          </div>
          <?php
           }
          ?>
        </div>
      </div>


    </div>
  </section>
  <!-- End Resume Section -->

  <!-- ======= Contact Section ======= -->
  <section id="codeWrite" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>CodeWrite</h2>
        <p>Code Write</p>
      </div>

      <form action="_write.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="title" class="form-control" id="name" placeholder="Title"/>
          </div>
          <div class="col-md-6 form-group">
            <select type="text" class="form-control" name="type" id="subject" style="background-color:rgb(42, 43, 44)">
              <option value="" class="start">Select Code</option>
              <option value="Python">Python</option>
              <option value="Java">Java</option>
              <option value="Javascript">Javascript</option>
              <option value="ETC">ETC</option>
            </select>  
          </div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="content" rows="5" placeholder="Contents"></textarea>
        </div>
        <div class="text-center"><button type="submit">Send</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>