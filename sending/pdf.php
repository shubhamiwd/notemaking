<?php 
/*
Template Name: Patient Questions.
*/
include 'templates/header.php';
$someArray = json_encode($_POST, true);
$json_decode = json_decode($someArray, true);
/* echo "<pre>";
print_r($json_decode);
echo "</pre>"; */

//include 'converter.php';
$actual_link = "http://$_SERVER[HTTP_HOST]";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require 'vendor/autoload.php';
require 'phpmailer/vendor/autoload.php';
// Instantiation and passing `true` enables exceptions

/*******Included the PDF directories**********/

require_once __DIR__ . '/pdfconverter/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
$mail = new PHPMailer(true);

if(isset($_POST)){
try {

// Define a page using all default values except "L" for Landscape orientation

$html_msg='<div class="container">
        <div class="tem_title">
            <h2>Dental Report Final</h2>
        </div>
        <div class="main-section">
            <div class="mtnegtive">
                <div class="main-sec">
                  <div class="main-sec-in">
                      <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                          <div class="pdf_table table-responsive">
                             <table class="table table-bordered table-hover">
                              <tbody>
                                <h4>Recall (adult)</h4>';
								
								foreach($json_decode as $allVal){
									$expo = explode(':', $allVal);
									$html_msg.='<tr>
									<td style="width: 20%;">'.$expo[0].': </td>
									<td>'.$expo[1].'</td>
									</tr>';
								}
								
                $html_msg.='</tbody>
                            </table>
                          </div>
                          <!--<div class="pdf_table table-responsive">
                             <table class="table table-bordered table-hover">
                              <tbody>
                                <h4>Social History</h4>
                                <tr>
                                  <td style="width: 20%;">Smoking: </td>
                                  <td>Ex Smoker</td>
                                </tr>
                                <tr>
                                  <td>Alcohol intake: </td>
                                  <td>Rarely</td>
                                </tr>
                                <tr>
                                  <td>Enter notes here </td>
                                  <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
                                </tr>
                              </tbody>
							</table>
                          </div>-->
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>';

    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output 
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.developerspunjab.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'iwddev@developerspunjab.com';          // SMTP username
    $mail->Password   = 'LBt1)Kc=QFFr';                         // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	$body = "Dental Patient Report.";	
    //Recipients
    $mail->setFrom('shubham.iwdtechnologies@gmail.com', 'Note Making App');
    $mail->addAddress('shubham.iwdtechnologies@gmail.com', 'IWD Team Testing');     // Add a recipient
    $mail->addAddress('navroop.singhthiara@pacificsmiles.com.au');               // Name is optional
    $mail->addReplyTo('shubham.iwdtechnologies@gmail.com', 'Information');
	$mail->addCC('navroop.singhthiara@pacificsmiles.com.au');
	
	$mail->MsgHTML($body);
	$mpdf->WriteHTML($html_msg);
    $mpdf->Output('alldocs/medical.pdf');
    $path = 'alldocs/medical.pdf'; 
    $mail->AddAttachment($path, '', $encoding = 'base64', $type = 'application/pdf');
   
    global $message;
	// Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Note Making Patient Report.';
	//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    //return $mail->Send();
	echo 'Message has been sent';
	} catch (Exception $e) {
	   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}

/*************/
include 'templates/footer.php'; 
