<?php require_once("../assets/php/server.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Faculty - Dashboard</title>
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
        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="dashboard.php" class="nav-item nav-link" style="color: red">Home</a>
                <a href="scanQR.php" class="nav-item nav-link" style="color: white">Scan QR</a>
                <a href="classList.php" class="nav-item nav-link" style="color: white">Grades</a>
                <a href="reminders.php" class="nav-item nav-link" style="color: white">Reminders/Assignments</a>
                <a href="editProfile.php" class="nav-item nav-link" style="color: white">Profile</a>
                <a href="../auth/logout.php" class="nav-item nav-link" style="color: white">Logout</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container py-5">
        <div class="row g-3">
            <div class="section-title text-center position-relative pb-3 mb-5">
                <h2 class="fw-bold text-primary text-uppercase">Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 service-name bg-light rounded text-center">
                    <h5 class="text1 my-3">Camille Anne Sabile</h5>
                    <p class="text2 mb-1">Faculty</p>
                    <p class="text2 mb-3">Muntinlupa City</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                    <div class="text-center">
                        <h3 class="fw-bold text-uppercase">Announcement</h3>
                    </div>
                    <div class="blog-item bg-light rounded overflow-hidden mb-3">
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Edit<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item bg-light rounded overflow-hidden mb-3">
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Edit<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item bg-light rounded overflow-hidden mb-3">
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Edit<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                    <div class="row g-3">
                        <div class="text-center">
                            <h3 class="fw-bold text-uppercase">Tools</h3>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex flex-column align-items-center justify-content-center text-center" style="margin-top: 0px;">
                            <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                    <i class="fa fa-shield-alt text-white"></i>
                                </div>
                                <a class="mb-3" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #252525; font-size:24px;" href="scanQR.php">Scan QR Code</a>
                                <a class="m-0" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #777777; font-size:16px;" href="">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex flex-column align-items-center justify-content-center text-center" style="margin-top: 0px;">
                            <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                    <i class="fa fa-chart-pie text-white"></i>
                                </div>
                                <a class="mb-3" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #252525; font-size:24px;" href="reminders.php">Reminders</a>
                                <a class="m-0" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #777777; font-size:16px;" href="">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</a>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex flex-column align-items-center justify-content-center text-center" style="margin-top: 10px;">
                            <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                    <i class="fa fa-code text-white"></i>
                                </div>
                                <a class="mb-3" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #252525; font-size:24px;" href="classList.php">Grades</a>
                                <a class="m-0" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #777777; font-size:16px;" href="">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex flex-column align-items-center justify-content-center text-center" style="margin-top: 10px;">
                            <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                    <i class="fab fa-android text-white"></i>
                                </div>
                                <!-- EDIT PROFILE -->
                                <a class="mb-3" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #252525; font-size:24px;" href="editProfile.php">Edit Profile</a>
                                <a class="m-0" style="font-family: 'Lato', sans-serif; font-weight: 500; color: #777777; font-size:16px;" href="">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script src="../assets/js/main.js"></script>

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