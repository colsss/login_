<?php 

include 'config.php';

// error_reporting(0);

	session_start();

  function generatePassword ($length = 8)
{
  $genpassword = "";
  $possible = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $i = 0;
  while ($i < $length) {
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    if (!strstr($genpassword, $char)) {
      $genpassword .= $char;
      $i++;
    }
  }
  return $genpassword;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Student</title>
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
              <h2>Add New Student</h2>
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" style="position: relative; left: 35%;" role="search">
                  <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end" style="position: relative; left: 35%;"> 
                
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

<!-- <h2>Add New Student</h2> -->
<!-- <?php echo $_SERVER['PHP_SELF']; ?> -->

<div class="row">
  <section class="vh-100 gradient-custom">
    <div class="container  ">
      <div class="row justify-content-center align-items-center h-100">
        <div class="">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 ">Registration Form</h3>
              <form  method="POST" class="" action="send_email.php">
                <div class="row">
                  <div class="col-md-4 mb-4">

                    <div class="form-outline">
                      <input type="text" id="lastName" name="lastName" class="form-control form-control" placeholder="Last Name" />
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>

                  </div>
                  <div class="col-md-4 mb-4">

                    <div class="form-outline">
                      <input type="text" id="firstName" name="firstName" class="form-control form-control" placeholder="First Name" />
                      <label class="form-label" for="firsttName">First Name</label>
                    </div>

                  </div>

                  <div class="col-md-4 mb-4">

                  <div class="form-outline">
                    <input type="text" id="middleName" name="middleName" class="form-control form-control" placeholder="Middle Name" />
                    <label class="form-label" for="middleName">Middle Name</label>
                  </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline datepicker w-100">
                      <input type="text" id="address" name="address" class="form-control form-control" id="address" placeholder="Address"/>
                      <label for="address" class="form-label">Address</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Gender: </h6>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                        value="Female" checked />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="maleGender"
                        value="Male" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="otherGender"
                        value="Other" />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="form-outline">
                      <input type="email" id="emailAddress" name="email" class="form-control form-control" placeholder="Enter email" />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>
                  </div>

                  <div class="col-md-4 mb-4 ">
                    <div class="form-outline">
                      <input type="" id="password" name="password" class="form-control form-control" value="<?php echo generatePassword(); ?>" readonly/>
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>
               
                <div class="col-md-4 mb-4">
                  <div class="form-outline">
                  <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control form-control" placeholder="Phone number"/>
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>
                </div>
              </div>

                <div class="row">
                  <h5>Course Choice</h5>
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="" id="firstChoice" name="firstChoice" class="form-control form-control" placeholder="Enter first choice" />
                      <label class="form-label" for="firstChoice">First Choice</label>
                    </div>
                </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="" id="secondChoice" name="secondChoice" class="form-control form-control" placeholder="Enter second choice" />
                      <label class="form-label" for="secondChoice">Second Choice</label>
                    </div>
                  </div>
                </div>

                <input type="hidden" id="subject" name="subject" class="form-control form-control" />
                <input type="hidden" id="message" name="message" class="form-control form-control" />

                <div class="mt-2S pt-1">
                  <input class="btn btn-primary btn" type="submit" value="Submit" name="submit"/>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<footer class="page-footer font-small blue" style="padding-left: 0px;">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

       <!-- Bootstrap core JavaScript-->
       <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
