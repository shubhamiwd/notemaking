<?php
/*
Template Name: Login Form.
*/

include 'templates/header-v2.php';
global $conn;
//session_start();
$message="";
if(count($_POST)>0) {
//$con = mysqli_connect('localhost','root','','note_making') or die('Unable To connect');
$result = mysqli_query($conn,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
$_SESSION["user_email"] = $row['user_email'];
} else {
$message = "<div class='error_cls'>Invalid Username or Password!</div>";
}
}
if(isset($_SESSION["id"])) {
header("Location:dashboard");
}
?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form name="frmUser" method="post" action="" align="center">
				<div class="tem_title">
			<h2 align="center">Enter Login Details</h2>
		</div>
		<div class="main-section">
		<div class="mtnegtive">
		<div class="col-md-8 col-md-offset-2">
		<div class="main-sec-in">
			<span><?php if($message!="") { echo $message; } ?></span>
			<div class="inputcss">
				<input type="text" name="user_name" placeholder="Username" required>
			</div>
			<div class="inputcss">
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<div class="loginbutns">
				<input type="submit" name="submit" value="Submit">
				<input type="reset">
			<div class="dontAccount">
				<span>Don't have an account?</span><a href="sign-up">Sign up</a>
			</div>
			</div>
		</div>
		</div>
		</div>
		</div>
		</form>
		</div>
		</div>
		</div>

<?php include 'templates/footer.php'; ?>