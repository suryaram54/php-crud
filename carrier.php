<?php 
   
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Careers_Dizitive IT Solutions</title>
  
  <meta name="description" content="Dizitive IT is a software provider of best in class integrated business, technology, service management and process solutions on a global delivery model">
  <meta name="keywords" content="software development company, software solutions, software technology, information technology services, software updates, software maintenance, application management, inventory management, hospital management, real-estate management, school management, best it company, intime delivery solutions, software company in india, software company in hyderabad, software company in vijayawada, software company in visakhapatnam, software company in vizag, software company in rajahmundry, software company in east godavari district, software company in andhrapradesh, software company in kakinada, software company in norway, software company in urope, software company in usa, best web development company in andhrapradesh, best web development company in rajahmundry, rajahmundry, kakinada, vizag, visakhapatnam, vijayawada, hyderabad, banglore, norway, east godavari">
  
  <link href="assets/img/dis-fav.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="style.css" rel="stylesheet">
  
<style>
		
</style>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <a href="index.html" class="logo mr-auto"><img src="assets/img/dizitiveit-solutions-logo6.png"> </a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="scrollto"><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li class="drop-down"><a href="#">Services</a>
                <ul>
                  <li><a href="mobile-application-development.html">Mobile Application Development</a></li>
                  <li><a href="enterprise-application-development.html">Enterprise Application Development</a></li>
                  <li><a href="enterprise-database-administration.html">Enterprise Data Base Administration</a></li>
                  <li><a href="web-development.html">Web Application Development</a></li>
                  <li><a href="aws-azure.html">AWS & Azure</a></li>
                  <li><a href="it-staff-augmentation.html">IT Staff Augmentation</a></li>
                </ul>
              </li>
              <li class="active"><a href="careers.html">Careers</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
  
  
  <!-- ======= End Hero Section ======= -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container" align="right">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Careers</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us" style="background:url(assets/img/hexbg3.jpg) right;">
      <div class="container" data-aos="fade-up">

        <div class="section-title" data-aos="fade-up">
          <h2>Explore Careers @ Dizitive IT Solutions</strong></h2>
        </div>
        
        <div class="row content">
        <?php 
    $sql="select * from admin";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
      //  print_r($id);
      //  die();
   $job_title=$row['job_title'];
 
   
   echo'
   <ul><li><a href="description.php?updateId='.$id.'">'.$job_title.'</a></p></li></ul>
   ';
       }
      }
     
?>        </div>

      </div>
    </section><!-- End About Us Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Hyderabad<span>.</span></h3>
            <p>DIZITIVE IT SOLUTIONS<br>
              THE PLATINA,
              B 607, Gachibowli,<br>
              HYDERABAD-500032, Telangana, India</p><br>
            
            <h3>Banglore<span>.</span></h3>
            <p>
              DIZITIVE IT SOLUTIONS<br>
              Panacea Golden Nest, Varthur Main Road,
              Vinayaka Nagar, Gunjur,<br>
              BENGALURU-560087, Karnataka, India.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Rajahmundry<span>.</span></h3>
            <p>
              DIZITIVE IT SOLUTIONS<br>
              D.No : 4-408/AIII,<br>
              Balajipeta Road, Bommuru,<br>
              RAJAHMUNDRY-533124,<br>
              East Godavari Dist, <br>
              Andhra Pradesh, India.
            </p><br>

            <h3>Norway<span>.</span></h3>            
            <h3>Indonesia<span>.</span></h3>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="mobile-application-development.html">Mobile Application Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="enterprise-application-development.html">Enterprise Application Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="enterprise-database-administration.html">Enterprise Data Base Administration</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="web-development.html">Web Application Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="aws-azure.html">AWS & Azure</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="it-staff-augmentation.html">IT Staff Augmentation</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          	<h4>Site Map</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="careers.html">Careers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blog.html">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact Us</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; 2022. <strong><span>Dizitive IT Solutions</span></strong>.
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/DIZITIVE/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.linkedin.com/company/dizitiveit-solutions/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
        <a href="https://twitter.com/dizitive" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>