<?php 
/*
Template Name: All Email Templates.
*/

if(isset($_POST["reg_sub"])){
	$user_fname  = $_POST['user_fname'];
	$user_lname  = $_POST['user_lname'];
	$fname_lname = $user_fname.$user_lname;
	$username    = strtolower($fname_lname);
	$email       = $_POST['email'];
	$psw         = $_POST['psw'];

/*******Registration_Template*******/

$emailTemp = '<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="x-apple-disable-message-reformatting">  
    <title>Email notifications</title> 
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #fff;
	font-family: "Lato", sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0,0,0,.5);
}
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}
img {
    -ms-interpolation-mode:bicubic;
}
a {
    text-decoration: none;
}
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}
</style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly;">
	<center style="width: 100%;font-family: "Montserrat", sans-serif;">
    <div style="max-width: 600px; margin: 0 auto;background: #f1f1f1;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td style="padding: 0em 2.5em 0 2.5em;background:linear-gradient(135deg, rgb(20, 162, 177) 0%, rgb(4, 106, 180) 100%) repeat scroll 0% 0%;" valign="top">
          	<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
          		<tbody><tr>
          			<td class="logo" style="text-align: center;">
			            <h1><a href="#" style="color: #ffffff"> LOGO </a></h1>
			          </td>
          		</tr>
          	</tbody>
			</table>
          </td>
	      </tr><!-- end tr -->
			<tr>
          <td valign="middle" style="padding: 2em 0 4em 0;">
            <table style="margin:0px !important;">
            	<tr>
            		<td>
            			<div class="text" style="padding: 0 2.5em; text-align: left;">
                    <p style="color: #353535;font-size: 24px;text-align: left;font-weight: 400;margin: 0;"> Hi </p>
            				<h3 style="margin: 15px 0 0;font-style: italic;font-size: 27px;color: #243b68;">Thanks for Registration.</h3>
            				<p style="font-size: 18px;">Here is Your Login Details.</p>
            				<p style="font-size: 18px;"><strong>User name:</strong> '.$username.'</p>
            				<p style="font-size: 18px;"><strong>User email:</strong> '.$email.'</p>
            				<p style="font-size: 18px;"><strong>User password:</strong> '.$psw.' </p>
                    <div style="text-align: left;"> <a href="'.$siteUrl.'" style="margin: 30px 0 0;background-color: #ff8a0c;background-image: linear-gradient(to right, #ff8a0c , #ff6f29);color: #fff;font-size: 18px;font-weight: 600;padding: 8px 30px;display: inline-block;border-radius: 6px;" target="_blank">Continue to website</a> </div>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr><!-- end tr -->
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="middle" style="float: left;width: 100%;background:#333;">
            <table>
            	<tr style="text-align: left;">
                <td valign="middle" width="100%" style="padding: 20px 0px; text-align: right;">
                	<div style="color: #e0e0e0;text-align: center;font-size: 16px;margin: 0px 0 0;">Copyright © 2020 | All rights Reserved. </div>
                </td>
              </tr>
            </table>
          </td>
        </tr><!-- end: tr -->
      </table>
    </div>
  </center>
</body>
</html>';
}

/***********Request_Template*************/

if(isset($_POST['request_template'])){
	
	$tname         = $_POST['tname'];
	$phone_num     = $_POST['phone_num'];
	$template_type = $_POST['template_type'];
	$define_all    = $_POST['define_all'];
	$user_name     = $_SESSION['name'];
	$user_email   = $_SESSION['user_email'];
	
	$emailTemp = '<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="x-apple-disable-message-reformatting">  
    <title>Email notifications</title> 
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #fff;
	font-family: "Lato", sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0,0,0,.5);
}
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}
img {
    -ms-interpolation-mode:bicubic;
}
a {
    text-decoration: none;
}
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}
</style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly;">
	<center style="width: 100%;font-family: "Montserrat", sans-serif;">
    <div style="max-width: 600px; margin: 0 auto;background: #f1f1f1;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td style="padding: 0em 2.5em 0 2.5em;background:linear-gradient(135deg, rgb(20, 162, 177) 0%, rgb(4, 106, 180) 100%) repeat scroll 0% 0%;" valign="top">
          	<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
          		<tbody><tr>
          			<td class="logo" style="text-align: center;">
			            <h1><a href="#" style="color: #ffffff"> LOGO </a></h1>
			          </td>
          		</tr>
          	</tbody>
			</table>
          </td>
	      </tr><!-- end tr -->
			<tr>
          <td valign="middle" style="padding: 2em 0 4em 0;">
            <table style="margin:0px !important;">
            	<tr>
            		<td>
            			<div class="text" style="padding: 0 2.5em; text-align: left;">
                    <p style="color: #353535;font-size: 24px;text-align: left;font-weight: 400;margin: 0;"> Hi </p>
            				<h3 style="margin: 15px 0 0;font-style: italic;font-size: 27px;color: #243b68;">Template Request for new User.</h3>
            				<p style="font-size: 18px;"></p>
            				<p style="font-size: 18px;"><strong>User Name:</strong> '.$user_name.'</p>
            				<p style="font-size: 18px;"><strong>User email:</strong> '.$user_email.'</p>
							<p style="font-size: 18px;"><strong>Template Name:</strong> '.$tname.'</p>
            				<p style="font-size: 18px;"><strong>Phone Number:</strong> '.$phone_num.'</p>
            				<p style="font-size: 18px;"><strong>Template Type:</strong> '.$template_type.'</p>
            				<p style="font-size: 18px;"><strong>User Request:</strong> '.$define_all.' </p>
                    <div style="text-align: left;"> <a href="'.$siteUrl.'" style="margin: 30px 0 0;background-color: #ff8a0c;background-image: linear-gradient(to right, #ff8a0c , #ff6f29);color: #fff;font-size: 18px;font-weight: 600;padding: 8px 30px;display: inline-block;border-radius: 6px;" target="_blank">Continue to website</a> </div>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr><!-- end tr -->
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="middle" style="float: left;width: 100%;background:#333;">
            <table>
            	<tr style="text-align: left;">
                <td valign="middle" width="100%" style="padding: 20px 0px; text-align: right;">
                	<div style="color: #e0e0e0;text-align: center;font-size: 16px;margin: 0px 0 0;">Copyright © 2020 | All rights Reserved. </div>
                </td>
              </tr>
            </table>
          </td>
        </tr><!-- end: tr -->
      </table>
    </div>
  </center>
</body>
</html>';
}
/*************Contact_Page_Email_Template*************/

if(isset($_POST['contact_us'])){
	
	$user_name   = $_POST['user_name'];
	$user_email  = $_POST['user_email'];
	$user_msg    = $_POST['user_msg'];
	
	$emailTemp = '<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="x-apple-disable-message-reformatting">  
    <title>Email notifications</title> 
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #fff;
	font-family: "Lato", sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0,0,0,.5);
}
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}
img {
    -ms-interpolation-mode:bicubic;
}
a {
    text-decoration: none;
}
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}
</style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly;">
	<center style="width: 100%;font-family: "Montserrat", sans-serif;">
    <div style="max-width: 600px; margin: 0 auto;background: #f1f1f1;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td style="padding: 0em 2.5em 0 2.5em;background:linear-gradient(135deg, rgb(20, 162, 177) 0%, rgb(4, 106, 180) 100%) repeat scroll 0% 0%;" valign="top">
          	<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
          		<tbody><tr>
          			<td class="logo" style="text-align: center;">
			            <h1><a href="#" style="color: #ffffff"> LOGO </a></h1>
			          </td>
          		</tr>
          	</tbody>
			</table>
          </td>
	      </tr><!-- end tr -->
			<tr>
          <td valign="middle" style="padding: 2em 0 4em 0;">
            <table style="margin:0px !important;">
            	<tr>
            		<td>
            			<div class="text" style="padding: 0 2.5em; text-align: left;">
                    <p style="color: #353535;font-size: 24px;text-align: left;font-weight: 400;margin: 0;"> Hi </p>
            				<h3 style="margin: 15px 0 0;font-style: italic;font-size: 27px;color: #243b68;">User Contact Request.</h3>
            				<p style="font-size: 18px;"></p>
            				<p style="font-size: 18px;"><strong>User Name:</strong> '.$user_name.'</p>
            				<p style="font-size: 18px;"><strong>User email:</strong> '.$user_email.'</p>
            				<p style="font-size: 18px;"><strong>User Message:</strong> '.$user_msg.' </p>
                    <div style="text-align: left;"> <a href="'.$siteUrl.'" style="margin: 30px 0 0;background-color: #ff8a0c;background-image: linear-gradient(to right, #ff8a0c , #ff6f29);color: #fff;font-size: 18px;font-weight: 600;padding: 8px 30px;display: inline-block;border-radius: 6px;" target="_blank">Continue to website</a> </div>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr><!-- end tr -->
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="middle" style="float: left;width: 100%;background:#333;">
            <table>
            	<tr style="text-align: left;">
                <td valign="middle" width="100%" style="padding: 20px 0px; text-align: right;">
                	<div style="color: #e0e0e0;text-align: center;font-size: 16px;margin: 0px 0 0;">Copyright © 2020 | All rights Reserved. </div>
                </td>
              </tr>
            </table>
          </td>
        </tr><!-- end: tr -->
      </table>
    </div>
  </center>
</body>
</html>';
}


/*********Email_Function_Included********/
if($emailTemp){
	include "temp-email.php";
}

?>