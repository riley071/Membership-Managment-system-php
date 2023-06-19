<?php
session_start();
error_reporting(E_ALL);

// display errors on screen
ini_set('display_errors', 1);
// database connection required
require ("dbcon.php");
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

  
$gender = $_GET['gender'];

//Query to retrieve email based on gender
$query = "SELECT gender FROM members WHERE gender = '$gender'";
$result = mysqli_query($con, $query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $gender = $row['gender'];
  
  // rest of your code here
} else {
  echo "Query failed: " . mysqli_error($con);
}


//Code/Query for email
$mail = new PHPMailer(true);
try {
    //Server settings
    // SMTP - Simple Mail Transfer Protocol - A feature used to send and receive emails.
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;   
    $mail->Username   = 'msconsultancy265@gmail.com';            //SMTP username
    $mail->Password   = 'shmhaczrknxgbezq';                                     //Enable SMTP authentication
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('Congoma@gmail.com', 'Congoma');
    $mail->addAddress($gender);  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'no reply';
    $mail->Body    = '<p><span style="font-weight: bold; font-size: 27px;">Congoma </span><br> 
        <p style="font-size: 16px;">Your payment is due please <span style="font-weight: bold;"></span>check to confirm payment <span style="font-weight: bold;"></span></p>';
    $mail->send();
    echo "<script>window.alert('Email sent successfully ')</script>";
    echo "<script>window.location.href='payment.php';</script>";
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "<script>window.alert('Failed to activate. Please try again!')</script>";
}
?>```
