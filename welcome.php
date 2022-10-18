<?php 
include 'config.php';
session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    $sql = "SELECT * FROM user_infos WHERE status='1' AND info = 'student'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
</style>

  <body style="background-color: #edf2f9;  font-family: 'Poppins', sans-serif;">    
  <div class="container-fluid">
    <div class="row">
        <div class="col-3  position-fixed" id="sticky-sidebar font-color: #f6c23e; font-family: 'Poppins', sans-serif;">
        <div class=" p-3 " style="width: 100%; height: 660px; background: #172a52; ">
    <a href="/" class="d-flex align-items-center pb-1 mb-3 link-dark text-decoration-none ">
    <img src="https://www.spcf.edu.ph/images/spcf-logo.png" alt="Logo" style=" width=100%; height=100%;" >                
      <svg class="bi me-2" width="30" height="20"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="list-unstyled ps-0  mb-3">
    <li class="mb-3">
      <a href="welcome.php" 
       button class="nav-link collapsed"  data-bs-target="" aria-expanded="false" style="color: white;">
       <i class="fa fa-dashboard"></i> Dashboard
        </button>
      </a>

            <li class="nav-item mb-3">
              <a class="nav-link collapsed" style="color: white;" href="#student-collapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
              <i class="fa fa-user"></i> Examinee 
              </a>
              <div class="collapse" id="student-collapse" style=" color: white;">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item"> <a href="add_student.php" class="nav-link active"> Add Examinee </a>
                  </li>
                  <li class="nav-item"><a href="manage_student.php" class="nav-link ">Manage Examinee</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mb-3">
              <a class="nav-link collapsed" style="color: white;" href="#course-collapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
              <i class="fa fa-star"></i> Course
              </a>
              <div class="collapse" id="course-collapse" style=" color: white;">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item"> <a href="add_course.php" class="nav-link active"> Add Course </a>
                  </li>
                  <li class="nav-item"><a href="manage_course.php" class="nav-link ">Manage Course</a>
                  </li>
                  <li class="nav-item"> <a href="add_course.php" class="nav-link active"> Departments </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mb-3">
              <a class="nav-link collapsed" style="color: white;" href="#question-collapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
              <i class="fa fa-file"></i> Questionnaires
              </a>
              <div class="collapse" id="question-collapse" style=" color: white;">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item"> <a href="course_cat.php" class="nav-link active"> Add Questionnaire</a>
                  </li>
                  <li class="nav-item"><a href="add_question.php" class="nav-link ">Manage Questionnaire</a>
                  </li>
                  <li class="nav-item"> <a href="course_cat.php" class="nav-link active"> Course Category </a>
                  </li>
                  <li class="nav-item"> <a href="add_question.php" class="nav-link active"> Question Category </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mb-3">
              <a class="nav-link collapsed" style="color: white;" href="#setting-collapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
              <i class="fa fa-gear"></i> General Setting
              </a>
              <div class="collapse" id="setting-collapse" style=" color: white;">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item"> <a href="add_course.php" class="nav-link active"> Timer Type</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="border-top my-3"></li>
            <li class="nav-item mb-3">
              <a class="nav-link collapsed" style="color: white;" href="#profile-collapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
              <i class="fa fa-user-circle-o"></i> Profile
              </a>
              <div class="collapse" id="profile-collapse" style=" color: white;">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item"> <a href="#" class="nav-link active"> New...</a></li>
                  <li class="nav-item"> <a href="#" class="nav-link active"> Profile</a></li>
                  <li class="nav-item"> <a href="#" class="nav-link active"> Setting</a></li>
                  <li class="nav-item"> <a href="logout.php" class="nav-link active"> Sign out</a></li>
                </ul>
              </div>
            </li>
    </ul>
  </div>
        </div>

        <div class="col-9 offset-3" id="main">
        <header class="p-3 mb-3 border-bottom" >
    <div class="container">
    
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <h2>Dashboard</h2>
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none"> 
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" style="position: relative; left: 45%;" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end" style="position: relative; left: 45%;"> 
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
            <!-- <h1>Dashboard</h1> -->
            <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                              Questionnaires</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Students</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Course
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                   <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                  
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                        <div class="col-lg-6 mb-4">

                            <!-- Student List -->
                            <div class="card shadow mb-4 ">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Student List Status</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>

                                    <!-- php iteration for student list area -->
                                    <?php 
                                        echo $row['info'];
                                        
                                    ?>
                                    </p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw →</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>
        </div>
    </div>
</div>

    <footer class="page-footer font-small blue" style="padding-left: 0px;">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>