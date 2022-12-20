
	
	
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\analysed\infits\PHPMailer\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\analysed\infits\PHPMailer\PHPMailer-master\src\SMTP.php';
require 'C:\xampp\htdocs\analysed\infits\PHPMailer\PHPMailer-master\src\Exception.php';





/* Exception class. */
//require 'C:\PHPMailer\PHPMailer-master\src\Exception.php';

/* The main PHPMailer class. */



/* SMTP class, needed if you want to use SMTP. */





                                       //Send using SMTP
                     //Set the SMTP server to send through
   



//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
//$mail = new PHPMailer(true);

      $otp = rand(100000,999999);
      echo $otp;
                          //$_SESSION['otp'] = $otp;
                    //$_SESSION['mail'] = $email;
                    //require "Mail/phpmailer/PHPMailerAutoload.php";
                         // require 'class/class-PHPMailer.php';
                    //$mail = new PHPMailer;
                         
            

   // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 

   $mail = new PHPMailer();
                     //Enable verbose debug output
       $mail->CharSet = "utf-8";

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sender email_id';
                     //SMTP username
   $mail->Password   = 'App password ';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;   
    $mail->SMTPDebug = 0;
                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sender email_id','Name');
   
    $mail->addAddress('email_id');     //Add a recipient
              

  
  

    //Attachments
   // $mail->addAttachment('/file');         //Add attachments
    //$mail->addAttachment('/image.jpg', 'new.jpg');    //Optional name

    //Content
                                    //Set email format to HTML
    $mail->Subject = 'Verify your code';
   //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
     $mail->Body=urlencode("otp number.".$otp);
    //$mail->AltBody = 'This is the body in plain text for
    $mail->isHTML(true);  

     if(!$mail -> send())
     {
     	echo " mail not send";
          
  
                //$mail->setFrom('email account', 'OTP Verification');
     }
     else
     {
     	echo "mail send";
     }
                   
 
                                             
                                                                   
                     

?>


<html>
<title>
	Forgot Password
</title>
<head>
	<style>

		
		.wrapper{
			  position: absolute;
    top: 40%;
    left: 50%;
    height:  300px;
    width:  400px;
    transform: translate(-50%, -50%);
    justify-content: space-evenly;
    border: 1px solid;
    text-align: center;
    background-color:whitesmoke ;

		}
		.wrapper .form{
    background: #fff;
    padding: 50px 35px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .container .form form .form-control{
    height: 40px;
    font-size: 15px;
    width:  60px;
}
.container .form form .button{
    background: #6665ee;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.3s ease;
}



		
	</style>
   
	</head>
	<body>
		
			
			
		
	</body>
</html>