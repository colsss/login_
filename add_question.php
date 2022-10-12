<?php 

include 'config.php';

// error_reporting(0);

$_Files = '';
$target_dir = "uploads/";


if(isset($_FILES["option1"]["name"])){

  $target_file = $target_dir . basename($_FILES["option1"]["name"]);
  $target_file1 = $target_dir . basename($_FILES["option2"]["name"]);
  $target_file2 = $target_dir . basename($_FILES["option3"]["name"]);
  $target_file3 = $target_dir . basename($_FILES["option4"]["name"]);
  $target_file4 = $target_dir . basename($_FILES["answer"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

}
 
if (isset($_POST['submit'])) {

	session_start();
  var_dump($_POST);
 


  if(isset($_FILES["option1"]["name"])){
 // create for other options e.g .  $_FILES["option2"]["tmp_name"]
   $path1 = $_FILES["option1"]["tmp_name"];
   $path2 = $_FILES["option2"]["tmp_name"];
   $path3 = $_FILES["option3"]["tmp_name"];
   $path4 = $_FILES["option4"]["tmp_name"];
   $path5 = $_FILES["answer"]["tmp_name"];
    // $imageData = file_get_contents($path);
    move_uploaded_file($path1,  $target_file);
    move_uploaded_file($path2,  $target_file1);
    move_uploaded_file($path3,  $target_file2);
    move_uploaded_file($path4,  $target_file3);
    move_uploaded_file($path5,  $target_file4);
  }

  // if($check !== false) {
  //   echo "File is an image - " . $check["mime"] . ".";
  //   $uploadOk = 1;
  // } else {
  //   echo "File is not an image.";
  //   $uploadOk = 0;
  // }

 
  $question = (empty($_FILES)) ? $_POST['question']: $target_file;
  $option1 = (empty($_FILES)) ? $_POST['option1']: $target_file;
  $option2 = (empty($_FILES)) ? $_POST['option2']: $target_file1;
  $option3= (empty($_FILES)) ? $_POST['option3']: $target_file2;
	$option4 = (empty($_FILES)) ? $_POST['option4']: $target_file3;
  $answer =  (empty($_FILES)) ?$_POST['answer']: $target_file4;

    $sql = "INSERT INTO `questions` (  `question`, `option1`, `option2`, `option3`, `option4`, `answer`) 
      VALUES ('".$question."','".$option1."', '".$option2."', '".$option3."', '".$option4."', '".$answer."')";
    $result = mysqli_query($conn, $sql);

    var_dump($result);
  } 


  // INSERT INTO `user_infos` (`id`, `first_name`, `last_name`, `address`, `email`, `contact_number`, `info`, `status`, `id_user_roles`) 
  // VALUES (NULL, 'asdf', 'asdf', '', 'asdf', 'asdf', 'asdf', '11', '1');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Questionnaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body style="background-color: #edf2f9;">  
  <div class="container-fluid">
    <div class="row">
    <div class="row">
        <div class="col-3  position-fixed" id="sticky-sidebar font-color: #f6c23e">
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
          <h2>Add Questionnaire</h2>
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" style="position: relative; left: 40%;" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end" style="position: relative; left: 40%;"> 
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
        <div class="container  ">
          
          <div class="card" style="margin-right: 2%; margin-top: 1%; width: 18rem;  float: left;">
            <div class="card-body">
              <h5 class="card-title">Abstract</h5>
              <p class="card-text"></p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#abstract">
          Add Question
          </button>

          <!-- Modal -->
          <div class="modal fade" id="abstract" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Abstract Question</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
              <form  method="POST" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <div class="row">

                  <div class="col-md-12 mb-12>
                    <div class="form-outline">
                  <!-- todo: change to input textfield -->
                  <input type="file" class="form-control" id="customFile1" name="question"/>
                  <label class="form-label" for="customFile">Question</label>
                    </div>
                  </div>

                  <div class="col-md-12 mb-12">
                <div class="form-outline">
                <input type="file" class="form-control" id="customFile2" name="option1"/>
                  <label class="form-label" for="customFile">Choice 1</label>
                </div>
                </div>
                
                <div class="col-md-12 mb-12">
                <div class="form-outline">
                <input type="file" class="form-control" id="customFile3" name="option2"/>
                  <label class="form-label" for="customFile">Choice 2</label>
                </div>
                </div>

                <div class="col-md-12 mb-12">
                <div class="form-outline">
                <input type="file" class="form-control" id="customFile4"name="option3" />
                  <label class="form-label" for="customFile">Choice 3</label>
                </div>
                </div>

                <div class="col-md-12 mb-12">
                  <div class="form-outline">
                  <input type="file" class="form-control" id="customFile5" name="option4" />
                  <label class="form-label" for="customFile">Choice 4</label>
                </div>

                <input type="file" class="form-control" id="customFile6" name="answer" />
                  <label class="form-label" for="customFile">Answer</label>

                <div class="mt-2S pt-1">
                  <input class="btn btn-primary btn" type="submit" value="Submit" name="submit"/>
                </div>
              </form>
            </div>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
        </div>
      </div>
        </div>
      </div>


        <div class="card" style="margin-right: 2%; margin-top: 1%; width: 18rem;  float: left;">
          <div class="card-body">
            <h5 class="card-title">Multiple Choices</h5>
            <p class="card-text"></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MultipleChoice">
         Add Question
        </button>

<!-- Modal -->
          <div class="modal fade" id="MultipleChoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Multiple Choice</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <div class="modal-body">
              <form  method="POST" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row">
                  <div class="col-md-12 mb-12>

                    <div class="form-outline">
                      <input type="text" id="question" name="question" class="form-control form-control" />
                      <label class="form-label" for="question">Question</label>
                    </div>
                  </div>

                  <div class="col-md-12 mb-12">
                    <div class="form-outline">
                      <input type="text" id="option1" name="option1" class="form-control form-control" />
                      <label class="form-label" for="option1">Option 1</label>
                    </div>
                  </div>

                  <div class="col-md-12 mb-12">
                  <div class="form-outline">
                    <input type="text" id="option2" name="option2" class="form-control form-control" />
                    <label class="form-label" for="option2">Option 2</label>
                  </div>
                </div>

                <div class="col-md-12 mb-12">
                  <div class="form-outline">
                    <input type="text" id="option3" name="option3" class="form-control form-control" />
                    <label class="form-label" for="option3">Option 3</label>
                  </div>
                </div>

                <div class="col-md-12 mb-12">
                  <div class="form-outline">
                    <input type="text" id="option4" name="option4" class="form-control form-control" />
                    <label class="form-label" for="option4">Option 4</label>
                  </div>
                </div>

                <div class="col-md-12 mb-12">
                <div class="form-outline">
                  <input type="text" id="answer" name="answer" class="form-control form-control" />
                  <label class="form-label" for="answer">Answer</label>
                </div>

                <div class="mt-2S pt-1">
                  <input class="btn btn-primary btn" type="submit" value="Submit" name="submit"/>
                </div>
              </form>
            </div>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
        </div>
      </div>
        </div>
      </div>



        <div class="card" style="margin-right: 2%; margin-top: 1%; width: 18rem;  float: left;">
          <div class="card-body">
            <h5 class="card-title">Identification</h5>
            <p class="card-text"></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
          Add Question
        </button>

<!-- Modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Identification Question</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
              
              <h5 class="mb-4 pb-2 pb-md-0 mb-md-5 ">Add Question</h5>
              <form  method="POST" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row">
                  <div class="col-md-12 mb-12>

                    <div class="form-outline">
                      <input type="text" id="question" name="question" class="form-control form-control" />
                      <label class="form-label" for="question">Question</label>
                    </div>
                  </div>

                  <div class="col-md-12 mb-12">
                    <div class="form-outline">
                      <input type="text" id="option1" name="option1" class="form-control form-control" />
                      <label class="form-label" for="option1">Option 1</label>
                    </div>
                  </div>

                  <!-- <div class="col-md-12 mb-12">
                    <div class="form-outline">
                      <input type="text" id="option2" name="option2" class="form-control form-control" />
                      <label class="form-label" for="option2"></label>
                    </div>Option 2
                </div>


                <div class="col-md-12 mb-12">
                  <div class="form-outline">
                    <input type="text" id="option3" name="option3" class="form-control form-control" />
                    <label class="form-label" for="option3">Option 3</label>
                  </div>
                </div>

                <div class="col-md-12 mb-12">
                  <div class="form-outline">
                    <input type="text" id="option4" name="option4" class="form-control form-control" />
                    <label class="form-label" for="option4">Option 4</label>
                  </div>
                </div> -->

                <div class="col-md-12 mb-12">
                <div class="form-outline">
                  <input type="text" id="answer" name="answer" class="form-control form-control" />
                  <label class="form-label" for="answer">Answer</label>
                </div>
                <div class="mt-2S pt-1">
                  <input class="btn btn-primary btn" type="submit" value="Submit" name="submit"/>
                </div>
              </form>
            </div>
    

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
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