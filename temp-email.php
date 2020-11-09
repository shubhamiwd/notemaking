<?php
/*
Template Name: Template email function.
*/

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.developerspunjab.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'iwddev@developerspunjab.com';          // SMTP username
    $mail->Password   = 'LBt1)Kc=QFFr';                         // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $mail->setFrom('shubham.iwdtechnologies@gmail.com', 'Note Making App');
    $mail->addAddress('shubham.iwdtechnologies@gmail.com', 'IWD Team Testing');     // Add a recipient
    $mail->addAddress('navroop.singhthiara@pacificsmiles.com.au');               // Name is optional
    $mail->addReplyTo('shubham.iwdtechnologies@gmail.com', 'Information');
    $mail->addCC('navroop.singhthiara@pacificsmiles.com.au');
    //$mail->addBCC('bcc@example.com');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Not Making IWD APP';
    $mail->Body    = $emailTemp;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
	$message = "Your Request is Sucessfully sent, We will contact you Shortly.";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}