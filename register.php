<?php 

include 'config.php';

error_reporting(0);

// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

if (isset($_POST['submit'])) {

	session_start();

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);

		if($result->num_rows == '0') {
			$sql1 = "INSERT INTO `users` ( `first_name`, `last_name`, `username`, `email`, `password`) 
				VALUES ( '".$first_name."', '".$last_name."','".$username."', '".$email."', '".$password."')";
			$result1 = mysqli_query($conn, $sql1);

			if($result1) {
				echo 'Registration Complete!';
			} else {
				echo 'User Already Exist!!';
			}

		}
	} else {
		echo 'Password did not match!';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="First name" name="firstname" value="" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Last name" name="lastname" value="" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>

	
</body>
</html>