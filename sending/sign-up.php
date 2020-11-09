<?php
/*
Template Name: Sign Up Form
*/

include 'templates/header-v2.php';
include 'functions.php';
?>
<div class="container">
<div class="row">
<div class="col-md-12">
<form action="" method="post" name="SignUp">
  <div class="container">
<div class="tem_title">
    <h3>Register</h3>
    <p>Please fill in this form to create an account.</p>
</div>
<div class="main-section">
<div class="mtnegtive">
<div class="col-md-8 col-md-offset-2">
<div class="main-sec-in">
<?php if($action_msg){ echo $action_msg; } ?>
  <div class="inputcss">
    <input type="text" placeholder="Enter First Name" name="user_fname" id="name" required>
	</div>
  <div class="inputcss">
    <input type="text" placeholder="Enter Last Name" name="user_lname" id="lastname" required>
	</div>
  <div class="inputcss">
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
  </div>
  <div class="inputcss">
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
  </div>
  <div class="inputcss">
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
  </div>
  <!--<input type="hidden" name="shared_refferal" value="<?php //echo $_REQUEST['ref']; ?>">-->
  <div class="dontAccount text-center">
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  </div>
  <div class="loginbutns">
    <input type="submit" name="reg_sub" class="registerbtn" value="REGISTER">
  </div>
  </div>
  <div class="dontAccount text-center">
    <p>Already have an account? <a href="login">Sign in</a>.</p>
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