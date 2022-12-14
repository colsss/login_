<?php 

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {

	session_start();

 var_dump($_POST);

//  $department = $_POST['department'];
// 	$course_name = $_POST['courseName'];

//     $sql = "INSERT INTO `course_cat` (`course_name`, `department`) 
//       VALUES ('".$course_name."', '".$department."')";
//     $result = mysqli_query($conn, $sql);

    
    $id = $_GET['id'];
    $sql = mysqli_query($db, "SELECT * FROM course_cat WHERE id=$id ");
    $result =  mysqli_fetch_array($result);    		


  }
  ?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Course</title>
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
      <h2>Add Course</h2>
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



           
            <div class="row">
            <section class="vh-100 gradient-custom">
  <div class="container  ">
    <div class="row justify-content-center align-items-center ">
      <div class="">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 ">
            <h2 class="mb-2 pb-2 ">Course</h2>
            <form  method="POST" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>">
           
            
            <form class="form-inline">
              <label class="sr-only" for="courseName">Course name</label>
              
              <select class="form-select" value="<?php echo $row['department'] ?>" name="department" id="department" aria-label="Default select example">
                <option >Select Department</option>
                <option value="College of Arts and Social Sciences and Education">College of Arts and Social Sciences and Education</option>
                <option value="College of Business">College of Business</option>
                <option value="College of Computing and Information Sciences">College of Computing and Information Sciences</option>
                <option value="College of Criminology">College of Criminology</option>
                <option value="College of Education">College of Education</option>
                <option value="College of Engineering">College of Engineering</option>
                <option value="College of Hospitality Management">College of Hospitality Management</option>
                <option value="College of Nursing">College of Nursing</option>        
              </select>

              <div class="mt-2S pt-1">
              <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $row['course_name'] ?>" id="courseName" name="courseName" placeholder="">
              </div>

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



    <footer class="page-footer font-small blue" style="padding-left: 0px;">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">?? 2020 Copyright:
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