<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Student - Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/dashboard-user.css" rel="stylesheet">

</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
    <img class="position-absolute top-50 start-50 translate-middle" src="../assets/img/icons/icon-1.png" alt="Icon">
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-primary navbar-light py-lg-0 px-lg-5">
    <img class="m-3" src="../assets/img/logo.png" style="height: 50px; width:50px;" alt="Icon">
    <div class="d-flex align-items-center justify-content-center text-center">
      <a href="../index.php" class="navbar-brand ms-4 ms-lg-0 text-center">
        <h1 class="cdsp">Colegio De San Pedro</h1>
        <h1 class="cdsp1" alt="Icon">Student Information and Monitoring System</h1>
      </a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0 ">
      <a href="../index.php" class="nav-item nav-link active" style="color: white; font-size: 14px;">Home</a>
                <a href="about.html" class="nav-item nav-link" style="color: white; font-size: 14px;">About Us</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: white; font-size: 14px;">Academics</a>
                    <div class="dropdown-menu bg-dark border-0 m-0">
                        <a href="auth/login.php" class="dropdown-item" style="color: white; font-size: 14px;">Student Information System</a>
                        <a href="" class="dropdown-item" style="color: white; font-size: 14px;">Kindergarten</a>
                        <a href="" class="dropdown-item" style="color: white; font-size: 14px;">Pre-Elementary</a>
                        <a href="" class="dropdown-item" style="color: white; font-size: 14px;">Elementary</a>
                        <a href="" class="dropdown-item" style="color: white; font-size: 14px;">Highschool</a>
                        <a href="" class="dropdown-item" style="color: white; font-size: 14px;">Senior Highschool</a>
                        <a href="" class="dropdown-item" style="color: white; font-size: 14px;">College</a>
                    </div>
                </div>
                <a href="service.html" class="nav-item nav-link" style="color: white; font-size: 14px;">Admissions</a>
                <a href="contact.html" class="nav-item nav-link" style="color: white; font-size: 14px;">Scholarship and Discounts</a>
                <a href="contact.html" class="nav-item nav-link" style="color: white; font-size: 14px;">Contact Us</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->


  <!-- Blog Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Announcements</h5>
      </div>
      <div class="row g-5">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
          <div class="blog-item bg-light rounded overflow-hidden">
            <div class="p-4">
              <div class="d-flex mb-3">
                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Steven Frilles</small>
                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
              </div>
              <h4 class="mb-3">How to build a website</h4>
              <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
              <a class="text-uppercase" href="../student/announcement.php">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
          <div class="blog-item bg-light rounded overflow-hidden">
            <div class="p-4">
              <div class="d-flex mb-3">
                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
              </div>
              <h4 class="mb-3">How to build a website</h4>
              <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
              <a class="text-uppercase" href="../student/announcement.php">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
          <div class="blog-item bg-light rounded overflow-hidden">
            <div class="p-4">
              <div class="d-flex mb-3">
                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
              </div>
              <h4 class="mb-3">How to build a website</h4>
              <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
              <a class="text-uppercase" href="../student/announcement.php">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog Start -->

  <!-- Reminder Start -->
  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Reminders</h5>
      </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>Filipino</span></div>
                    <div class="gradient-border"><span>Science</span></div>
                    <div class="gradient-border"><span>English</span></div>
                    <div class="gradient-border"><span>English</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>

                        <div class="right-content">
                          <h4>Bring notebook</h4>
                          <p>Did you know that you can visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS website</a> for latest listing of HTML templates and a variety of
                            useful templates.
                            <br><br>You just need to go and visit that website right now. IF you have any suggestion or
                            comment about this template, you can feel free to go to contact page for our email address.
                          </p>
                          <span>36 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">3 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="right-content">
                          <h4>Creative Graphic Design</h4>
                          <p>You are not allowed to redistribute this template ZIP file on any other website without a
                            permission from us.<br><br>There are some unethical people on this world copied and reposted
                            our templates without any permission from us. Their Karma will hit them really hard. Yeah!
                          </p>
                          <span>48 Hours</span>
                          <span>6 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="right-content">
                          <h4>Web Design</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape
                            tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan
                            bicycle rights try-hard green juice probably haven't heard of them cliche la croix af
                            chillwave.</p>
                          <span>28 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="right-content">
                          <h4>WordPress Introduction</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape
                            tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan
                            bicycle rights try-hard green juice probably haven't heard of them cliche la croix af
                            chillwave.</p>
                          <span>48 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">2 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Reminder End -->

  <!-- Dashboard Start -->
  <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">D a s h b o a r d</h5>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 wow zoomIn" data-wow-delay="0.3s">
        <div class="service-name bg-light rounded d-flex flex-column align-items-left justify-content-center text-left">
          <a class="text1" href="">Camille Anne Sabile</a>
          <a class="text2" href="">2019-00188-SP-0</a>
          <a class="text2" href="">BSIT 4-1<br>Muntinlupa City</a>
        </div>
      </div>
      <div class="row g-5">
        <div class="col-lg-3 col-md-12 col-sm-12 wow zoomIn" data-wow-delay="0.3s">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon">
              <i class="fa fa-book text-white"></i>
            </div>
            <a class="mb-3" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #252525; font-size:24px;" href="performance.php">Performances</a>
            <a class="m-0" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #777777; font-size:16px;" href="performance.php">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 wow zoomIn" data-wow-delay="0.6s">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon">
              <i class="fa fa-bell text-white"></i>
            </div>
            <a class="mb-3" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #252525; font-size:24px;" href="../student/reminders.php">Reminders</a>
            <a class="m-0" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #777777; font-size:16px;" href="../student/reminders.php">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 wow zoomIn" data-wow-delay="0.9s">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon">
              <i class="fa fa-edit text-white"></i>
            </div>
            <a class="mb-3" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #252525; font-size:24px;" href="../student/grades.php">Grades</a>
            <a class="m-0" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #777777; font-size:16px;" href="../student/grades.php">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 wow zoomIn" data-wow-delay="0.3s">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon">
              <i class="fa fa-user text-white"></i>
            </div>
            <a class="mb-3" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #252525; font-size:24px;" href="../student/profile.php">Profile</a>
            <a class="m-0" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #777777; font-size:16px;" href="../student/profile.php">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dashboard End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h3 class="text-light mb-4">Address</h3>
          <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Phase 1A, Pacita Complex 1, San Pedro City, Laguna 4023</p>
          <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+63 919 065 6576</p>
          <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>di ko alam email</p>
          <div class="d-flex pt-2">
            <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-square btn-outline-body me-0" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h3 class="text-light mb-4">Quick Links</h3>
          <a class="btn btn-link" href="">Home</a>
          <a class="btn btn-link" href="">About Us</a>
          <a class="btn btn-link" href="">Academics</a>
          <a class="btn btn-link" href="">Admission</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h3 class="text-light mb-4">Useful Links</h3>
          <a class="btn btn-link" href="">DepEd</a>
          <a class="btn btn-link" href="">Pag Asa</a>
          <a class="btn btn-link" href="">City of San Pedro</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h3 class="text-light mb-4">Newsletter</h3>
          <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
          <div class="position-relative mx-auto" style="max-width: 400px;">
            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a href="#">Colegio De San Pedro</a>, All Right Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/lib/wow/wow.min.js"></script>
  <script src="../assets/lib/easing/easing.min.js"></script>
  <script src="../assets/lib/waypoints/waypoints.min.js"></script>
  <script src="../assets/lib/counterup/counterup.min.js"></script>
  <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../assets/lib/tempusdominus/js/moment.min.js"></script>
  <script src="../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="../assets/../assets/js/main.js"></script>

  <!-- Javascript -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/js/eduwell/isotope.min.js"></script>
  <script src="../assets/js/eduwell/owl-carousel.js"></script>
  <script src="../assets/js/eduwell/lightbox.js"></script>
  <script src="../assets/js/eduwell/tabs.js"></script>
  <script src="../assets/js/eduwell/video.js"></script>
  <script src="../assets/js/eduwell/slick-slider.js"></script>
  <script src="../assets/js/eduwell/custom.js"></script>
  <script src="../assets/js/startup/main.js"></script>

</body>

</html>