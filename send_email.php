<?php 

    include 'config.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;


    session_start();

    if(isset($_POST['submit'])){
    
    var_dump($_POST);

        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $last_name = $_POST['lastName'];
        $first_name = $_POST['firstName'];
        $middle_name = $_POST['middleName'];
        $gender = $_POST['gender'];
        $address= $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact_number = $_POST['phoneNumber'];
        $first_choice = $_POST['firstChoice'];
        $second_choice = $_POST['secondChoice'];

        $sql = "INSERT INTO `user_infos` ( `last_name`, `first_name`, `middle_name`, `gender`, `address`, `email`, `password`, `contact_number`, `first_choice`, `second_choice`, `info`, `status`, `id_user_roles`) 
        VALUES ('".$last_name."', '".$first_name."', '".$middle_name."', '".$gender."','".$address."', '".$email."', '".$password."', '".$contact_number."', '".$first_choice."', '".$second_choice."',  'student', '".$status."',  '".$id_user_roles."')";
        $result = mysqli_query($conn, $sql);	
    
    }

?> 

<?php 

    session_start();

    if(isset($_POST['submit'])){
    
    var_dump($_POST);

        //Load composer's autoloader
        require_once __DIR__.'\Exception.php';
        require __DIR__.'\PHPMailer.php';
        require __DIR__.'\SMTP.php';

        $mail = new PHPMailer(true);                            
    
            //Server settings
            $mail->isSMTP();                                     
            $mail->Host = 'smtp.gmail.com';                      
            $mail->SMTPAuth = true;                             
            $mail->Username = 'carizzacoleanescoto@gmail.com';     
            $mail->Password = 'vsjvewdwayhwgmdx'; //   vsjvewdwayhwgmdx  bermzwhiteknight8       
                        
            $mail->SMTPSecure = 'ssl';                           
            $mail->Port = 465;                                   
    
            //Send Email
            $mail->setFrom('carizzacoleanescoto@gmail.com', 'Colean');


        $sql1 = "SELECT * FROM user_infos ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $sql1);	

        if ($result->num_rows > 0) { 
        foreach ( $result as $row){

        //Recipients
            $mail->addAddress($email);              
            $mail->addReplyTo('carizzacoleanescoto@gmail.com');
    
            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = "SPCF ENTRANCE EXAMINATION";

            $mail->Body    = "<h3><b> Good Day! "  . $row['last_name'] . ", " . $row['first_name'] . " " . $row['middle_name'] .
            "</b></h3><br><br> Here are your exam credentials. <br><br> Email: " . $row['email']. "<br>Password: <b>" . $row['password']. "</b>" ;

            $mail->AltBody = 'Body in plain text for non-HTML mail clients'   ;

        if ( $mail->send());{
    
        $_SESSION['result'] = 'Message has been sent';
        $_SESSION['status'] = 'ok';
        } 
        $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
        $_SESSION['status'] = 'error';
        
    
        header("location: add_student.php");
}
    }
    }

?> 
