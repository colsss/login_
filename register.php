<?php 

include 'config.php';

// error_reporting(0);

// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {

	session_start();

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	

			$sql1 = "INSERT INTO `users` ( `first_name`, `last_name`, `username`, `email`, `password`, `otp`, `verified_date` ) 
				VALUES ( '".$first_name."', '".$last_name."','".$username."', '".$email."', '".$password."', '".$otp."', NULL)";
			$result1 = mysqli_query($conn, $sql1);

}
?>

<?php 

include 'config.php';

// error_reporting(0);	



if (isset($_POST['submit'])) {

	session_start();
	var_dump($_POST);

	//Load Composer's autoloader
	require_once __DIR__.'\Exception.php';
	require __DIR__.'\PHPMailer.php';
	require __DIR__.'\SMTP.php';

	$mail = new PHPMailer(true);
 
	        try {
	            //Enable verbose debug output
	            $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
	 
	            //Send using SMTP
	            $mail->isSMTP();
	 
	            //Set the SMTP server to send through
	            $mail->Host = 'smtp.gmail.com';
	 
	            //Enable SMTP authentication
	            $mail->SMTPAuth = true;
	 
	            //SMTP username
	            $mail->Username = 'carizzacoleanescoto@gmail.com';
	 
	            //SMTP password
	            $mail->Password = 'vsjvewdwayhwgmdx';
	 
	            //Enable TLS encryption;
	            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	 
	            //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	            $mail->Port = 587;
	 
	            //Recipients
	            $mail->setFrom('carizzacoleanescoto@gmail.com', 'Colean');
	 
	            //Add a recipient
	            $mail->addAddress($email, $name);
	 
	            //Set email format to HTML
	            $mail->isHTML(true);
	 
	            $otp = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
	 
	            $mail->Subject = 'Email verification';
	            $mail->Body    = '<p>Good day, ' . $first_name . ' your verification code is: <b style="font-size: 30px;">' . $otp . '</b></p>';
	 
	            $mail->send();
	             echo 'Message has been sent';



header("Location: email_verification.php?email=" . $email);
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
            <!-- <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div> -->
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>

	
</body>
</html>