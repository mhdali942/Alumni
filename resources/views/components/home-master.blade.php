<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 <title>Alumni Club | Mediu</title>
  <meta content="Alumni Club Al-madinah International University" name="Alumni Club Al-madinah International University">
  <meta content="Alumni Club Al-madinah International University" name="Alumni Club Al-madinah International University">

  <!-- Favicons -->

  <!-- Favicons -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->


   <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">

      
        
     

      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">student.activities@mediu.edu.my</a>
        <i class="icofont-phone"></i><a href="#">Tel: +603-9055-5200</a> 
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/mediumalaysia" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="URL::to('/')" style="color:#e2e2e2; ">Alumni Club</a></h1>
        
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
           
          <li class="active"><a href="#about">About Alumni Club</a></li>
      
          <li><a href="#assistant">Alumni Assistant</a></li>
          
          
          <li><a href="#contact">Contact Us</a></li>

          @if(Auth::check())

         
                <li class="nav-item" style="font-weight: 800; font-size:20px;  background-color: #84464c; border-radius: 5px 5px 5px 5px;">
                    <a class="nav-link" href="{{route('admin.index')}}">My Account</a>
                      <div class="dropdown">
  

                </li>

                @else

                <li class="nav-item" style="font-weight: 800; font-size:20px;  background-color: #84464c; border-radius: 5px 5px 5px 5px;">
                  <a class="nav-link" href="/login">Login</a>
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




          <!-- Slide 2 -->
          <div class="carousel-item active" style="background-image: url('{{asset('assets/img/slide/SAM_1172-compressor.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
               
              </div>
            </div>
          </div> 

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{asset('assets/img/slide/SAM_1277-compressor.jpg')}}');">

            <div class="carousel-container">
              <div class="carousel-content container">
              
              </div>
            </div>
          </div>
          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image: url('{{asset('assets/img/slide/SAM_1283-compressor.jpg')}}');">

            <div class="carousel-container">
              <div class="carousel-content container">
               
              </div>
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
  </section> <!-- End Hero -->

         @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background: #82000c;">
    <div class="footer-top" style="background: #82000c;">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3 style="color: #b38f00;">Our Address</h3>
            <p>
             <br> Pusat Perdagangan Salak II, No. 18, <br>Jalan 2/125e, Taman Desa Petaling,<br> 57100 Kuala Lumpur <br><br>
            
              <strong>Phone:</strong> +60182935479<br>
              <strong>Email:</strong> enquiry@mediu.edu.my<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h3 style="color: #b38f00;" >Importatnt Links</h3>
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
            <h3 style="color: #b38f00;">Protals</h3>
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

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h3 style="color: #b38f00;">Stastic Visistors</h3>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0411645149056!2d101.69825601475718!3d3.083688697754457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5277f25d0a93%3A0x7c281f8eb0016236!2sAl-Madinah+International+University!5e0!3m2!1sen!2smy!4v1542847853417" width="260" height="150" frameborder="3" style="border:3" allowfullscreen></iframe>

<script  type="text/javascript" src="//rf.revolvermaps.com/0/0/4.js?i=5n4xqprbee4&amp;m=0&amp;h=128&amp;c=ff0000&amp;r=0" width="1025" height="150" async="async"></script>



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

  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('/vendor/jquery.validate.js')}}"></script>

  


</body>

</html>

