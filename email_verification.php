<?php 

include 'config.php';

session_start();

// error_reporting(0);

 
    if (isset($_POST["submit"]))
    {
        $email = $_POST["email"];
        $otp = $_POST["otp"];
 
        // connect with database
        // $conn = mysqli_connect("localhost:8889", "root", "root", "test");
 
        // mark email as verified
        $sql = "UPDATE users SET verified_date = NOW() WHERE email = '" . $email . "' AND otp = '" . $otp . "'";
        $result  = mysqli_query($conn, $sql);
 
        if (mysqli_affected_rows($conn) == 0)
        {
            die("Verification code failed.");
        }
 
        echo "<p>You can login now.</p>";
        exit();
    }
 


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Verification</title>
</head>
<body>
	<div class="container">
	<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/bg-1.jpg);">
			      </div>
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Verification</p>
			<div class="input-group">
                 <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Enter OTP code" name="otp" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Verify</button>
			</div>
			<!-- <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p> -->
		</form>
	</div>

</body>
</html>