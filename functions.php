<?php 
/*
Template Name: Functions file
*/
global $conn;

$fullUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                dirname($_SERVER["REQUEST_URI"].'?').'/';
$explode = explode('/', $fullUrl);
if (($key = array_search('pages', $explode)) !== false) {
    unset($explode[$key]);
}
$siteUrl = implode('/', $explode);

if(isset($_POST['reg_sub'])){
	
	$date        = date("Y-m-d");
	$dateDiff    = strtotime(date("Y-m-d") . " +16 days");
	$trialPeriod = date('Y-m-d', $dateDiff);
	
	$shared_referral_code = $_REQUEST['ref'];
	$user_fname  = $_POST['user_fname'];
	$user_lname  = $_POST['user_lname'];
	$fname_lname = $user_fname.$user_lname;
	$username    = strtolower($fname_lname);
	$email       = $_POST['email'];
	$psw         = $_POST['psw'];
	$user_role   = 'Subscriber';
	
	$sql = "SELECT `user_email` FROM `login_user` WHERE `user_email`='$email'";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
	   $action_msg = "<div class='error_cls'>This email is Already In our Record.</div>";
	}else{
	$sign_query = "INSERT INTO `login_user` (`name`, `sur_name`, `user_name`, `password`, `user_email`, `user_role`, `trial_end_date`) VALUES ('$user_fname', '$user_lname', '$username', '$psw', '$email', '$user_role', '$trialPeriod')";
	
 	if($conn->query($sign_query) === TRUE) {
		$registerId = $conn->insert_id;
	    
		function random_strings($length_of_string) 
		{ 
			$str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'; 
			return substr(str_shuffle($str_result), 0, $length_of_string); 
		} 

		//$referral_code = random_strings(10).'-'.$registerId;	
		$referral_code = random_strings(10);	
		$update_qry = "UPDATE login_user SET user_referral_code='$referral_code' WHERE id=$registerId";
		$userupd = $conn->query($update_qry);	
		
		$user_details = "INSERT INTO `users_detail` (`user_registerd_id`, `shared_referral_code`, `user_name`, `user_email`, `payment_method`, `payment_state`, `plan_description`, `payment_status`, `payer_email`, `first_name`, `last_name`, `payer_id`, `shipping_address`, `plan_type`, `payer_amount`, `payer_cycles`, `billing_cycles`, `start_date`, `next_billing_date`, `last_payment_date`, `last_payment_amount`, `final_payment_date`) VALUES ('$registerId', '$shared_referral_code', '$user_fname', '$email', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null')";
		$userrecord = $conn->query($user_details);	
	
		$action_msg = "<div class='sucess_cls'><h4>Thanks for Registration</h4>
			  <h5>You will be redirect in few <div id='countdown'></div> for Login.</h5></div>";
		echo '<meta http-equiv="refresh" content="6;url="'.$siteUrl.'login" />';
	
	/*****Email_Template*****/
		
	//include 'sendemail.php';
	
	return $action_msg;  
	} else {
	  echo "Error: " . $sign_query . "<br>" . $conn->error;
	}
	}
}

if(isset($_POST['update_profile']))
{
	$user_id    = $_POST['user_id'];
	$name       = $_POST['fname'];
	$lname      = $_POST['lname'];
	//$username   = $_POST['username'];
	$useremail  = $_POST['useremail'];
	$userpass   = $_POST['userpass'];
	$update_qry = "UPDATE `login_user` SET `name`='$name',`sur_name`='$lname',`password`='$userpass',`user_email`='$useremail' WHERE `id`='$user_id'";
	if($conn->query($update_qry) === TRUE) {
		$action_msg = "<div class='sucess_cls'><h4>Your profile is updated!</h4></div>";
		  return $action_msg;
	}		
}

if(isset($_POST['request_template'])){
	
	$tname         = $_POST['tname'];
	$phone_num     = $_POST['phone_num'];
	$template_type = $_POST['template_type'];
	$define_all    = $_POST['define_all'];
	$user_name     = $_SESSION['name'];
	$user_email   = $_SESSION['user_email'];
	
	$templateQry = "INSERT INTO `request_template`(`template_name`, `phone_num`, `user_name`, `user_email`, `template_type`, `template_requirement`) VALUES ('$tname', '$phone_num', '$user_name', '$user_email', '$template_type', '$define_all')";
	if($conn->query($templateQry) === TRUE){
		$action_msg = "<div class='sucess_cls'><h4>Your template request is submitted, We will contact with you shortly!</h4></div>";
	
	/*****Email_Template*****/
		//include 'sendemail.php';
	    return $action_msg;
	}
}

/**********My_Functions*********/

	function referral_code(){
		global $conn;
		$login_id = $_SESSION["id"];
		$query_ref = "SELECT * FROM `login_user` WHERE `id`=$login_id";
		$result_qry = $conn->query($query_ref);
		$referral_res = mysqli_fetch_array($result_qry);
		$referralCode = $referral_res['user_referral_code'];
		return $referralCode;
	}

	function profile_select(){
		global $conn;
		$login_id = $_SESSION["id"];
		$query_ref = "SELECT * FROM `login_user` WHERE `id`=$login_id";
		$result_qry = $conn->query($query_ref);
		$result = mysqli_fetch_array($result_qry);
		return $result;
	}

	function dateDiffInDays($user_created_at, $trial_end_date){ 
		$user_created_at = profile_select()['user_created_at'];
		$trial_end_date  = profile_select()['trial_end_date'];
		$diff = strtotime($user_created_at) - strtotime($trial_end_date); 
		return abs(round($diff / 86400)); 
	} 

