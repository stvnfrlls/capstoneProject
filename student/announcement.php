<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Student - Announcements</title>
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
	<link href="../assets/css/admin/style.css" rel="stylesheet">

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

	<div class="row" style="margin:auto;">
		<div class="col-sm-12">
			<div class="home-tab">
				<div class="tab-content tab-content-basic">
					<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
						<div class="row">
							<div class="col-lg-6 col-sm-12 grid-margin">
								<div class="card">
									<div class="card-body">
										<form class="form-sample">
											<div class="row">
												<div class="col-12">
													<!-- Search Form Start -->
													<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
														<div class="input-group">
															<input type="text" class="form-control p-3" placeholder="Keyword">
															<button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
														</div>
													</div>
													<!-- Search Form End -->

													<!-- Recent Post Start -->
													<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
														<div class="section-title section-title-sm position-relative pb-3 mb-4">
															<h3 class="mb-0">Other Reminders</h3>
														</div>
														<div class="d-flex rounded overflow-hidden mb-3">
															<img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
															<a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit</a>
														</div>
														<div class="d-flex rounded overflow-hidden mb-3">
															<img class="img-fluid" src="img/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
															<a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit</a>
														</div>
														<div class="d-flex rounded overflow-hidden mb-3">
															<img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
															<a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit</a>
														</div>
														<div class="d-flex rounded overflow-hidden mb-3">
															<img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
															<a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit</a>
														</div>
														<div class="d-flex rounded overflow-hidden mb-3">
															<img class="img-fluid" src="img/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
															<a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit</a>
														</div>
													</div>
													<!-- Recent Post End -->
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-12 grid-margin">
								<div class="card" style="margin-bottom: 25px;">
									<div class="card-body">
										<form class="form-sample">
											<div class="row">
												<div class="col-12">
													<a class="justify-content-between d-flex" href="#">
														<p>Trainer's Name</p>
														<span class="or">George Mathews</span>
													</a>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="card" style="margin-bottom: 25px;">
									<div class="card-body">
										<form class="form-sample">
											<div class="row">
												<div class="col-12">
													<a class="justify-content-between d-flex" href="#">
														<p>Trainer's Name</p>
														<span class="or">George Mathews</span>
													</a>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="card" style="margin-bottom: 25px;">
									<div class="card-body">
										<form class="form-sample">
											<div class="row">
												<div class="col-12">
													<a class="justify-content-between d-flex" href="#">
														<p>Trainer's Name</p>
														<span class="or">George Mathews</span>
													</a>
												</div>
											</div>
										</form>
									</div>
								</div>
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
						<a class="btn btn-square btn-outline-body me-1" href="" style="border-radius: 5px;"><i class="fab fa-twitter"></i></a>
						<a class="btn btn-square btn-outline-body me-1" href="" style="border-radius: 5px;"><i class="fab fa-facebook-f"></i></a>
						<a class="btn btn-square btn-outline-body me-1" href="" style="border-radius: 5px;"><i class="fab fa-youtube"></i></a>
						<a class="btn btn-square btn-outline-body me-0" href="" style="border-radius: 5px;"><i class="fab fa-linkedin-in"></i></a>
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


	<script src="../assets/js/educ/vendor/jquery-2.2.4.min.js"></script>
	<script src="../assets/js/educ/vendor/bootstrap.min.js"></script>
	<script src="../assets/js/educ/easing.min.js"></script>
	<script src="../assets/js/educ/hoverIntent.js"></script>
	<script src="../assets/js/educ/superfish.min.js"></script>
	<script src="../assets/js/educ/jquery.ajaxchimp.min.js"></script>
	<script src="../assets/js/educ/jquery.magnific-popup.min.js"></script>
	<script src="../assets/js/educ/jquery.tabs.min.js"></script>
	<script src="../assets/js/educ/jquery.nice-select.min.js"></script>
	<script src="../assets/js/educ/owl.carousel.min.js"></script>
	<script src="../assets/js/educ/mail-script.js"></script>
	<script src="../assets/js/educ/main.js"></script>

</body>

</html>