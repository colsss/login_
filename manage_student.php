<?php 
include 'config.php';
session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    $sql = "SELECT * FROM user_infos WHERE info = 'student'";
    $result = mysqli_query($conn, $sql);	
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Students</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/tables.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

  <body style="background-color: #edf2f9;">       
  <div class="container-fluid">
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
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" style="position: relative; left: 65%;" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end" style="position: relative; left: 65%;"> 
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>

<h2>Manage Students</h2>
            <div class="row">
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Students</b> List</h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New Student</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Name</th>
						<th>Address</th>
						<th>Email</th>
						<th>Password</th>
						<th>Phone Number</th>
						<th>First Choice</th>
						<th>Second Choice</th>
						<th>Actions</th>
					</tr>
				</thead>
	<?php 
	
	foreach ($result as $r){
		echo '<tbody>
		<tr>
			<td>
				<span class="custom-checkbox">
					<input type="checkbox" id="checkbox1" name="options[]" value="1">
					<label for="checkbox1"></label>
				</span>
			</td>
			<td>' . $r['last_name'] . ' , ' . $r['first_name'] . ' ' . $r['middle_name'] . '</td>
			<td>' . $r['address'] . '</td>
			<td>' . $r['email'] . '</td>
			<td>' . $r['password'] . '</td>
			<td>' . $r['contact_number'] . '</td>
			<td>' . $r['first_choice'] . '</td>
			<td>' . $r['second_choice'] . '</td>
			<td>
				<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
				<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
			</td>
		</tr>
	</tbody>';
	}

	?>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>1</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item "><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required=""></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required="">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required=""></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required="">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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