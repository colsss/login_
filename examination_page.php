<?php 

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {

	session_start();

 var_dump($_POST);


$result = mysqli_query($mysqli, "SELECT * FROM questions WHERE id=$id");

// Next button 
$next = mysqli_query($mysqli, "SELECT * FROM `questions` ORDER BY `questions`.`id` ASC");
if($row = mysqli_fetch_array($next))
{

  echo '<a href="examination_page.php?id='.$row['id'].'"><button type="button">Next</button></a>';  
} 


// Previous button 
$previous= mysqli_query($mysqli, "SELECT * FROM `questions` ORDER BY `questions`.`id` DESC");

if($row = mysqli_fetch_array($previous))
{

  echo '<a href="examination_page.php?id='.$row['id'].'"><button type="button">Previous</button></a>';  
} 





//  $department = $_POST['department'];
// 	$course_name = $_POST['courseName'];

//     $sql = "INSERT INTO `course_cat` (`course_name`, `department`) 
//       VALUES ('".$course_name."', '".$department."')";
//     $result = mysqli_query($conn, $sql);

// $sql = "SELECT id, category, question, option1. option2, option3, option4, answer FROM questions";
// $result = $conn->query($sql);

//     if(ISSET($_POST['submit']))
  
        // $category=$_POST['category'];
 
        // switch($category){
        //     case"Abstract":
        //     $query=mysqli_query($conn, "SELECT * FROM `questions` WHERE `value`='$category'") or die(mysqli_error());
        //     while($fetch=mysqli_fetch_array($query)){
        //         echo"<tr><td>".$fetch['category']."</td><td>".$fetch['question']."</td></tr><br><br>";
        //     }
        //     break;
        //     case"Multiple Choice":
        //       $query=mysqli_query($conn, "SELECT * FROM `questions` WHERE `category`='$category'") or die(mysqli_error());
        //       while($fetch=mysqli_fetch_array($query)){
        //         echo"<tr><td>".$fetch['category']."</td><td>".$fetch['question']."</td></tr><br><br>";
        //     }
        //     break;
        //     case"Identification":
        //       $query=mysqli_query($conn, "SELECT * FROM `questions` WHERE `category`='$category'") or die(mysqli_error());
        //       while($fetch=mysqli_fetch_array($query)){
        //         echo"<tr><td>".$fetch['category']."</td><td>".$fetch['question']."</td></tr><br><br>";
        //     }
        //     break;
        //     case"Fill in the blank":
        //       $query=mysqli_query($conn, "SELECT * FROM `questions` WHERE `category`='$category'") or die(mysqli_error());
        //       while($fetch=mysqli_fetch_array($query)){
        //         echo"<tr><td>".$fetch['category']."</td><td>".$fetch['question']."</td></tr><br><br>";
        //          }
        //     break;
        //     case"True or False":
        //       $query=mysqli_query($conn, "SELECT * FROM `questions` WHERE `questions`='$category'") or die(mysqli_error());
        //       while($fetch=mysqli_fetch_array($query)){
        //         echo"<tr><td>".$fetch['category']."</td><td>".$fetch['question']."</td></tr><br><br>";
        //     }
        //     break;
        //     case"Essay":
        //       $query=mysqli_query($conn, "SELECT * FROM `questions` WHERE `questions`='$category'") or die(mysqli_error());
        //       while($fetch=mysqli_fetch_array($query)){
        //         echo"<tr><td>".$fetch['category']."</td><td>".$fetch['question']."</td></tr><br><br>";
        //     }
        //     break;
        //   }
        // }
        // else{
        // $query=mysqli_query($conn, "SELECT * FROM `questions`") or die(mysqli_error());
        // while($fetch=mysqli_fetch_array($query)){
        //   echo"<tr><td>".$fetch['category']."</td>: <td>".$fetch['question']."</td></tr><br><br>";
        // }
}
    
  
  ?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examinaton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/exam.css">

  </head>

  <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
</style>

  <body style="background-color: #edf2f9;  font-family: 'Poppins', sans-serif;">    
  <div class="container-fluid">
        <div class="col-12 offset-12" id="main">
        <header class="p-3 mb-3 border-bottom" >
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <h2>Entrance Examination</h2>
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

  
  <div class="container mt-5">
            <div class="row">
            <section class="vh-100 gradient-custom">
  <div class="container  ">
    <div class="row justify-content-center align-items-center ">
      <div class="">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">     
          <div class="card-body p-4 ">
          <div class="question bg-white p-3 border-bottom">
            <div class="d-flex flex-row justify-content-between align-items-center mcq">
               <h4>MCQ Quiz</h4><span>(5 of 20)</span></div>
             </div>
            <h2 class="mb-2 pb-2 ">   <label>  <?php echo $row['category']; ?></label></h2>
            <form  method="POST" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>">
           
            <form class="form-inline">
              <label class="sr-only" for="courseName">Course name</label>




    <?php
        $sql = "SELECT id, question, option1, option2, option3, option4, answer FROM questions LIMIT 5";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
    ?>    

    <label style="font-weight: bold; ">Q:  <?php echo $row['question']; ?></label></br>
        <input type="radio" name="option1"  value="$row['option1']">   
    <label> A   <?php echo $row['option1']; ?></label>

    <!-- <?php if($row['option1'] = "A") { echo "true"; }?> -->
    
        <input type="radio" name="option2"   value="$row['option2']"> 
    <label> B  <?php echo $row['option2']; ?></label>

        <input type="radio" name="option3"  value="$row['option3']">
    <label> C  <?php echo $row['option3']; ?></label>

        <input type="radio" name="option4"  value="B">
    <label> D  <?php echo $row['option4']; ?></label></br></br>

    <?php

  }
    ?>

      <div class="mt-2S pt-1">
              <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i class="fa fa-angle-right ml-2"></i></button></div>
                </div>
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