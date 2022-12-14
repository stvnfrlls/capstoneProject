<?php
require_once("../assets/php/server.php");

$current_url = $_SERVER["REQUEST_URI"];
$_SESSION['F_number'] = "2022-12-00001-F";

if (!isset($_SESSION['F_number'])) {
  header('Location: ../auth/login.php');
} else if (isset($_SESSION['F_number'])) {
  $getWorkSchedule = "SELECT SR_grade, SR_section, S_subject FROM workschedule WHERE F_number = '{$_SESSION['F_number']}'";
  $rungetWorkSchedule = $mysqli->query($getWorkSchedule);
  $array_GradeSection = array();
  array_unshift($array_GradeSection, null);

  while ($dataWorkSchedule = $rungetWorkSchedule->fetch_assoc()) {
    $array_GradeSection[] = $dataWorkSchedule;
  }
} else {
  header('Location: ../auth/login.php');
}

if (isset($_GET['Grade']) && isset($_GET['Section']) && isset($_GET['Subject'])) {
  $getStudentName = "SELECT studentrecord.SR_number, studentrecord.SR_fname, studentrecord.SR_lname, studentrecord.SR_mname,
                    studentrecord.SR_grade, studentrecord.SR_section
                    FROM studentrecord
                    WHERE SR_grade = '{$_GET['Grade']}'
                    AND SR_section = '{$_GET['Section']}'";
  $rungetStudentName = $mysqli->query($getStudentName);
  $arrayStudentName = array();

  while ($dataStudentName = $rungetStudentName->fetch_assoc()) {
    $arrayStudentName[] = $dataStudentName;
  }

  $getClassList = "SELECT studentrecord.SR_number, studentrecord.SR_fname, studentrecord.SR_lname, studentrecord.SR_mname,
                    studentrecord.SR_grade, studentrecord.SR_section, grades.G_learningArea, 
                    grades.G_id, grades.G_gradesQ1, grades.G_gradesQ2, grades.G_gradesQ3, grades.G_gradesQ4
                  FROM studentrecord 
                  INNER JOIN grades
                  ON studentrecord.SR_number = grades.SR_number
                  WHERE studentrecord.SR_grade = '{$_GET['Grade']}'
                  AND studentrecord.SR_section = '{$_GET['Section']}'
                  AND grades.G_learningArea = '{$_GET['Subject']}'";
  $rungetClassList = $mysqli->query($getClassList);
  $arrayClassList = array();

  while ($dataClassList = $rungetClassList->fetch_assoc()) {
    $arrayClassList[] = $dataClassList;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Faculty - Encode Grades</title>
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
  <link href="../assets/css/form-style.css" rel="stylesheet">
  <link href="../assets/css/admin/style.css" rel="stylesheet">
  <link href="../assets/css/admin/materialdesignicons.min.css" rel="stylesheet">

</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-primary navbar-light py-lg-0 px-lg-5">
    <img class="m-3" src="../assets/img/logo.png" style="height: 50px; width:50px;" alt="Icon">
    <div class="d-flex align-items-center justify-content-center text-center">
      <a href="../index.php" class="navbar-brand ms-4 ms-lg-0 text-center">
        <h1 class="cdsp">Colegio De San Pedro</h1>
        <h1 class="cdsp1" alt="Icon">Student Information and Monitoring System</h1>
      </a>
    </div>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </nav>
  <!-- Navbar End -->

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item" style="text-align:center; font-size: 20px; color: #b9b9b9; margin-top:20px;">FACULTY</li>
          <!-- line 1 -->
          <li class="nav-item nav-category">Profile</li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class=""></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faculty/viewProfile.php">
              <i class=""></i>
              <span class="menu-title">View Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faculty/createReminder.php">
              <i class=""></i>
              <span class="menu-title">Create Reminders</span>
            </a>
          </li>
          <!-- line 2 -->
          <li class="nav-item nav-category">Menu</li>
          <li class="nav-item">
            <a class="nav-link" href="../faculty/scanQR.php">
              <i class=""></i>
              <span class="menu-title">Scan QR</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faculty/advisoryPage.php">
              <i class=""></i>
              <span class="menu-title">Advisory</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faculty/classList.php">
              <i class=""></i>
              <span class="menu-title">Class List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faculty/encodegrades.php">
              <i class=""></i>
              <span class="menu-title">Encode Grades</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faculty/viewReminders.php">
              <i class=""></i>
              <span class="menu-title">View Reminders</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <div class="section-title text-center position-relative pb-3 mb-3 mx-auto">
                    <h2 class="fw-bold text-primary text-uppercase">Encode Grades</h2>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="row">
                      <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="btn-group">
                              <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <?php
                                  if (isset($_GET['Grade']) && isset($_GET['Section'])) {
                                    echo "Grade " . $_GET['Grade'] . " - " . $_GET['Section'];
                                  } else {
                                    echo "Grade and Section";
                                  }
                                  ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <?php
                                  $rowCount = 1;
                                  $GradeSectionRowCount = sizeof($array_GradeSection);
                                  while ($rowCount != $GradeSectionRowCount) { ?>
                                    <a class="dropdown-item" href="<?php echo $current_url . "?Grade=" . $array_GradeSection[$rowCount]['SR_grade'] . "&Section=" . $array_GradeSection[$rowCount]['SR_section']; ?>">
                                      <?php echo "Grade " . $array_GradeSection[$rowCount]['SR_grade'] . "-" . $array_GradeSection[$rowCount]['SR_section']; ?>
                                    </a>
                                  <?php $rowCount++;
                                  }
                                  ?>
                                </div>
                              </div>
                            </div>
                            <div class="btn-group">
                              <?php
                              if (isset($_GET['Grade']) && isset($_GET['Section'])) { ?>
                                <div class="dropdown">
                                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <?php
                                    if (isset($_GET['Subject'])) {
                                      echo $_GET['Subject'];
                                    } else {
                                      echo "Learning Areas";
                                    }
                                    ?>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <?php
                                    $rowCount = 1;
                                    $GradeSectionRowCount = sizeof($array_GradeSection);
                                    while ($rowCount != $GradeSectionRowCount) { ?>
                                      <a class="dropdown-item" href="<?php echo $current_url . "&Subject=" . $array_GradeSection[$rowCount]['S_subject']; ?>">
                                        <?php echo $array_GradeSection[$rowCount]['S_subject']; ?>
                                      </a>
                                    <?php $rowCount++;
                                    }
                                    ?>
                                  </div>
                                </div>
                              <?php } ?>

                            </div>

                            <div class="row">
                              <div class="table-responsive">
                                <table class="table text-center">
                                  <thead>
                                    <tr>
                                      <th rowspan="2" class="hatdog">Student Name</th>
                                      <th colspan="4" class="hatdog">Quarter</th>
                                      <th rowspan="2" class="hatdog">Final Grade</th>
                                      <th rowspan="2" class="hatdog">Remarks</th>
                                    </tr>
                                    <tr>
                                      <td class="hatdog" style="border-color: #FFFFFF;">1</td>
                                      <td class="hatdog" style="border-color: #FFFFFF;">2</td>
                                      <td class="hatdog" style="border-color: #FFFFFF;">3</td>
                                      <td class="hatdog" style="border-color: #FFFFFF;">4</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    if (isset($_GET['Grade']) && isset($_GET['Section']) && isset($_GET['Subject'])) {
                                      $rowCount = 0;
                                      $studentRowCount = sizeof($arrayStudentName);
                                      while ($rowCount != $studentRowCount) { ?>
                                        <form action="" method="">
                                          <tr>
                                            <td class="hatdog">
                                              <?php
                                              echo $arrayStudentName[$rowCount]['SR_lname'] . ", " . $arrayStudentName[$rowCount]['SR_fname'] . " " . substr($arrayStudentName[$rowCount]['SR_mname'], 0, 1);
                                              ?>
                                            </td>
                                            <?php
                                            if (!empty($arrayClassList[$rowCount]['G_gradesQ1'])) { ?>
                                              <td class="hatdog"><input type="number" value="<?php echo $arrayClassList[$rowCount]['G_gradesQ1']; ?>" name="G_gradesQ1" style="text-align: center; width: 30px;"></td>
                                            <?php
                                            } else { ?>
                                              <td class="hatdog"><input type="number" placeholder="##" style="text-align: center; width: 30px;"></td>
                                            <?php } ?>

                                            <?php
                                            if (!empty($arrayClassList[$rowCount]['G_gradesQ2'])) { ?>
                                              <td class="hatdog"><input type="number" value="<?php echo $arrayClassList[$rowCount]['G_gradesQ2']; ?>" name="G_gradesQ2" style="text-align: center; width: 30px;"></td>
                                            <?php
                                            } else { ?>
                                              <td class="hatdog"><input type="number" placeholder="##" style="text-align: center; width: 30px;"></td>
                                            <?php } ?>

                                            <?php
                                            if (!empty($arrayClassList[$rowCount]['G_gradesQ3'])) { ?>
                                              <td class="hatdog"><input type="number" value="<?php echo $arrayClassList[$rowCount]['G_gradesQ3']; ?>" name="G_gradesQ3" style="text-align: center; width: 30px;"></td>
                                            <?php
                                            } else { ?>
                                              <td class="hatdog"><input type="number" placeholder="##" style="text-align: center; width: 30px;"></td>
                                            <?php } ?>

                                            <?php
                                            if (!empty($arrayClassList[$rowCount]['G_gradesQ4'])) { ?>
                                              <td class="hatdog"><input type="number" value="<?php echo $arrayClassList[$rowCount]['G_gradesQ4']; ?>" name="G_gradesQ4" style="text-align: center; width: 30px;"></td>
                                            <?php
                                            } else { ?>
                                              <td class="hatdog"><input type="number" placeholder="##" style="text-align: center; width: 30px;"></td>
                                            <?php } ?>

                                            <td class="hatdog">90.5</td>
                                            <td class="hatdog">Passed</td>
                                          </tr>
                                        </form>
                                      <?php $rowCount++;
                                      }
                                    } else { ?>
                                      <tr>
                                        <td colspan="10">NO GRADE AND SECTION SELECTED</td>
                                      </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>
                              </div>

                              <div class="container">
                                <div id="remarkshead" class="row fw-bold" style="margin-top: 20px;">
                                  <div class="col">Descriptors</div>
                                  <div class="col">Grading Scale</div>
                                  <div class="col">Remarks</div>
                                </div>
                                <div id="remarks" class="row fw-light">
                                  <div class="col">Outstanding</div>
                                  <div class="col">90-100</div>
                                  <div class="col">Passed</div>
                                </div>
                                <div id="remarks" class="row fw-light">
                                  <div class="col">Very Satisfactory</div>
                                  <div class="col">85-89</div>
                                  <div class="col">Passed</div>
                                </div>
                                <div id="remarks" class="row fw-light">
                                  <div class="col">Satisfactory</div>
                                  <div class="col">80-84</div>
                                  <div class="col">Passed</div>
                                </div>
                                <div id="remarks" class="row fw-light">
                                  <div class="col">Fairly Satisfactory</div>
                                  <div class="col">75-79</div>
                                  <div class="col">Passed</div>
                                </div>
                                <div id="remarks" class="row fw-light">
                                  <div class="col">Did Not Meet Expectations</div>
                                  <div class="col">Below 75</div>
                                  <div class="col">Failed</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <form style="text-align: center;">
              <button type="submit" class="btn btn-primary me-2">Save</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

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

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->


  <!-- Template Javascript -->
  <script src="../assets/js/main.js"></script>

  <script src="../assets/js/admin/vendor.bundle.base.js"></script>
  <script src="../assets/js/admin/off-canvas.js"></script>
  <script src="../assets/js/admin/file-upload.js"></script>

</body>

</html>