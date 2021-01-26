
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alumni Club | Mediu</title>
  <meta content="Alumni Club Al-madinah International University" name="Alumni Club Al-madinah International University">
  <meta content="Alumni Club Al-madinah International University" name="Alumni Club Al-madinah International University">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.ico.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v2.2.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="student.activities@mediu.edu.my">student.activities@mediu.edu.my</a>
        <i class="icofont-phone"></i> Tel: +603-9055-5200
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/mediumalaysia" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/madina.university/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://twitter.com/mediumalaysia" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.youtube.com/user/mediuvideo" class="youtube"><i class="icofont-youtube"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span>Alumni Club</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#about">About Alumni Club</a></li>

          <li class="nav-item"><a href="#gradution">Graduation Students</a></li>

          <li style="padding-right: 20px;"><a href="#contact">Contact Us</a></li>
            @if(Auth::check())

         
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.index')}}"><button class="btn btn-warning">My Account</button></a>
                     
  

                </li>

                @else

                <li class="nav-item">
                  <a class="nav-link-login" href="/login"><button class="btn btn-warning">Login here</button></a>
                </li>

                   

                @endif

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('{{asset('assets/img/slide/SAM_1172-compressor.jpg')}}');">
            <div class="carousel-container">
            
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('{{asset('assets/img/slide/SAM_1277-compressor.jpg')}}');">
            <div class="carousel-container">
              
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{asset('assets/img/slide/SAM_1283-compressor.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content">
              
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   <!-- ======= About Section ======= -->
    <section class="" class="mb-4">
      <div class="container">

        <div class="row">
          
          
        </div>

      </div>
    </section><!-- End About Section -->


  <!-- ======= About Section ======= -->
    <section id="about" class="about mt-4">
      <div class="container">

        <div class="row mb-4">
          <div class="col-lg-3">
            <img src="{{asset('assets/img/Alumni Logo.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-9 pt-4 pt-lg-0 content">
            <h3>Overview</h3>
          

            <p class="font-italic">Certainly strengthening relationships and ties between community members has a great role in building societies and benefiting countries, specifically if those relationships are based on a solid foundation of knowledge and thought.
          A big number of local and international students have graduated from Al-Madinah International University in Malaysia. These graduates are the pillars of work, construction and development in their countries and communities, and establishing communication links with them is considered to be very important because it involves the exchange of experiences and benefits, and support of the brother to his Muslim brother. This is a manifestation of the Islamic brotherhood grown in the university campus, and a right the graduate student owes to his university, they received knowledge and qualification for the job market. 
          This cultural, social and developmental non-profit club will be so that it involves the university graduates from all faculties. It is under the main management of the club, and includes sub-committees and representatives in each graduate’s country, all under one net-work system. 

        </p>

            
          </div>
        </div>



         <div class="row mb-4">
          <div class="col-lg-3">
            <img src="{{asset('assets/img/Alumni Logo.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-9 pt-4 pt-lg-0 content">
            <h3>Mission</h3>
          

          
                <p>Offering a group of programs and functions for the graduates and their communities, and exchanging benefits among graduates with each other</p>
          
          
          </div>
        </div>


         <div class="row">
          <div class="col-lg-3">
            <img src="{{asset('assets/img/Alumni Logo.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-9 pt-4 pt-lg-0 content">
            <h3>Objactives</h3>
          

            <ul>
              <li><i class="icofont-check-circled"></i> To consolidating the affiliation of graduates with the university.</li>
              <li><i class="icofont-check-circled"></i> To strengthen the  relations and ties among graduates by creating a network of communication among them.</li>
              <li><i class="icofont-check-circled"></i> To benefit from the contribution, expertise and experiences of the university graduates to raise the university performance and efficiency and to execute programs and events.</li>
                <li><i class="icofont-check-circled"></i> To enhance the communal partnership of graduates with their communities.</li>
              <li><i class="icofont-check-circled"></i>  To establish partnerships with the scientific, cultural, and social clubs, entities, institutions, and associations, locally and internationally.</li>
              <li><i class="icofont-check-circled"></i> To develop the professional and scientific skills of the graduates.</li>
               <li><i class="icofont-check-circled"></i> To strengthen the graduate's relationship with the university students, and enhance cooperation among them.</li>
            </ul>
          
          </div>
        </div>




      </div>
    </section><!-- End About Section -->




  <!-- ======= Services Section ======= -->
    <section id="gradution" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Graduation Students</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-graduate"></i></div>
              <h4><a href="">2880</a></h4>
              <h4> Total Alumni </h4>
               <p>Al-madinah Interantional University <br>Your Gateway To Borderless Learning </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6  mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-people"></i></div>
              <h4><a href="">96</a></h4>
               <h4>Nationality</h4>
               <p>Al-madinah Interantional University <br>Your Gateway To Borderless Learning </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6  mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-flag"></i></div>
              <h4><a href="">90</a></h4>
             <h4>Countries</h4>
               <p>Al-madinah Interantional University <br>Your Gateway To Borderless Learning </p>
            </div>
          </div>

       

        </div>

      </div>
    </section><!-- End Services Section -->



  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>
              Pusat Perdagangan Salak II, No. 18, Jalan 2/125e, Taman Desa Petaling, 57100 Kuala Lumpur 
            
           
            </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>student.activities@mediu.edu.my</p><br>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+603-9055-5200</p><br>
            </div>
          </div>

        </div>

        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
           
             <h4>Al-madinah University  Website</h4>
            <p>Click here to visit our</p>
           <a href="https://www.mediu.edu.my" target="_blank"><button class="btn btn-danger">MEDIU WEBSITE</button></a> 
         
          </div>

        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
           <h4 style="color: #b38f00;" >Importatnt Links</h4>
              <ul>
                  <li class="footer-arrow"><a href="https://qalam.mediu.edu.my/?lang=ar">(Qalam) Learning Arabic </a></li>
                  <li class="footer-arrow"><a href="https://news.mediu.edu.my">MEDIU News </a></li>
                  <li class="footer-arrow"><a href="https://www.mediu.edu.my/mediu-libraries/">Mediu Libraries </a></li>
                  <li class="footer-arrow"><a href="https://conference.mediu.edu.my/?lang=ar">Conferences</a></li>
                  <li class="footer-arrow"><a href="http://www.mediu.edu.my/training/?lang=ar">MEDIU Training Center</a></li>
                  <li class="footer-arrow"><a href="http://repository.mediu.edu.my/materials.php">Learning Materials</a></li>
                  
                  <li class="footer-arrow"><a href="http://ojs.mediu.edu.my">MEDIU journals </a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color: #b38f00;">Protals</h4>
           <ul>

              <li class="left-arrow"><a href="http://staffportal.mediu.edu.my ">Staff Portal</a></li>

              <li class="left-arrow"><a href="https://sso.mediu.edu.my/login?service=http%3a%2f%2facademicportal.mediu.edu.my%2f">Academic Portal</a></li>

              <li class="left-arrow"><a href="https://sso.mediu.edu.my/login?service=http%3a%2f%2fstudentportal.mediu.edu.my%2f">Student Portal</a></li>

              <li class="left-arrow"><a href="http://online.mediu.edu.my/applicantportal/Home/Login">prospect Student</a></li>

              <li class="left-arrow"><a href="http://online.mediu.edu.my/sponsor/Home/Login">Partnership</a></li>

              <li class="left-arrow"><a href="http://online.mediu.edu.my/TrainingPortal/Home/Login?lang=en">Trainees</a></li>

              <li class="left-arrow"><a href="https://alumni.mediu.edu.my">
            Alumni </a></li>

              <li class="left-arrow"><a href="http://online.mediu.edu.my/agentportal/Home/Login">Marketing Agents </a></li> 



</ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4 style="color: #b38f00;">Our Address</h4>
            <p>
              Pusat Perdagangan Salak II, No. 18, <br>Jalan 2/125e, Taman Desa Petaling,<br> 57100 Kuala Lumpur <br><br>
            
              <strong>Phone:</strong> +603-9055-5200<br>
              <strong>Email:</strong> enquiry@mediu.edu.my<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3 style="color: #b38f00;">Stastic Visistors</h3>
            <div class="social-links mt-3">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0411645149056!2d101.69825601475718!3d3.083688697754457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5277f25d0a93%3A0x7c281f8eb0016236!2sAl-Madinah+International+University!5e0!3m2!1sen!2smy!4v1542847853417" width="260" height="150" frameborder="3" style="border:3" allowfullscreen></iframe>

<script  type="text/javascript" src="//rf.revolvermaps.com/0/0/4.js?i=5n4xqprbee4&amp;m=0&amp;h=128&amp;c=ff0000&amp;r=0" width="1025" height="150" async="async"></script>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
    <div class="copyright">
        &copy; Copyright <strong></strong>Al-Madinah International University <?php echo date('Y')?>, All Rights Reserved
      </div>
      <div class="credits">
      
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>