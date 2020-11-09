<?php 
/*
Template Name: Send Email.
*/

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
try {

// Define a page using all default values except "L" for Landscape orientation
//$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/custom/temp/dir/path']);

$html_msg = '<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="'.$actual_link.'/bootstrap/note-making/assets/css/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="'.$actual_link.'/bootstrap/note-making/assets/images/logo.png">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span> August 17, 2015</div>
        <div><span>DUE DATE</span> September 17, 2015</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Design</td>
            <td class="desc">Creating a recognizable design solution based on the companys existing visual identity</td>
            <td class="unit">$40.00</td>
            <td class="qty">26</td>
            <td class="total">$1,040.00</td>
          </tr>
          <tr>
            <td class="service">Development</td>
            <td class="desc">Developing a Content Management System-based Website</td>
            <td class="unit">$40.00</td>
            <td class="qty">80</td>
            <td class="total">$3,200.00</td>
          </tr>
          <tr>
            <td class="service">SEO</td>
            <td class="desc">Optimize the site for search engines (SEO)</td>
            <td class="unit">$40.00</td>
            <td class="qty">20</td>
            <td class="total">$800.00</td>
          </tr>
          <tr>
            <td class="service">Training</td>
            <td class="desc">Initial training sessions for staff responsible for uploading web content</td>
            <td class="unit">$40.00</td>
            <td class="qty">4</td>
            <td class="total">$160.00</td>
          </tr>
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">$5,200.00</td>
          </tr>
          <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total">$1,300.00</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">$6,500.00</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Shubham Rana ---- Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>';
	
	/*************************/
	/*************************/
	
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output 
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.developerspunjab.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'iwddev@developerspunjab.com';          // SMTP username
    $mail->Password   = 'LBt1)Kc=QFFr';                         // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	$body = "This is test mail by monirul";	
    //Recipients
    $mail->setFrom('shubham.iwdtechnologies@gmail.com', 'Mailer');
    $mail->addAddress('shubham.iwdtechnologies@gmail.com', 'Joe User');     // Add a recipient
    //$mail->addAddress('shubham.iwdtechnologies@gmail.com');               // Name is optional
    $mail->addReplyTo('shubham.iwdtechnologies@gmail.com', 'Information');
	
	$mail->MsgHTML($body);
	//$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';
	//$mpdf->WriteHTML($html_msg);
	//$mpdf->Output('alldocs/'.rand().'_'.'medical.pdf');	
	
	//$mail->AddAttachment($mpdf->Output('medical.pdf'));

	//documentation for Output method here: http://www.fpdf.org/en/doc/output.htm       
    $mpdf->Output('alldocs/medical.pdf');
    $path = 'alldocs/medical.pdf'; 
    $mail->AddAttachment($path, '', $encoding = 'base64', $type = 'application/pdf');
   
    global $message;
	// Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $html_msg;
	//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //return $mail->Send();
	echo 'Message has been sent';
	} catch (Exception $e) {
	   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
