<?php 
/*
Template Name: Profile Dashboard
*/
include 'templates/header.php';
include 'templates/email-templates.php';
?>

    <div class="container">
        <div class="tem_title">
            <h2>Settings</h2>
        </div>
        <div class="main-section">
            <div class="mtnegtive">
                <div class="main-sec">
                	<div class="main-sec-in">
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                          	<div class="tab">
							  <button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Profile</button>
							  <button class="tablinks" onclick="openCity(event, 'Features')">Features</button>
							  <button class="tablinks" onclick="openCity(event, 'Updates')">Updates</button>
							  <button class="tablinks" onclick="openCity(event, 'request_temp')">Request a Template</button>
							</div>
                          	</div>
                          <div class="col-lg-12 col-md-12">
                          	<div class="alltabcontents">
                          		<div id="Profile" class="tabcontent">
								  <h3>Profile Settings</h3>
								  <?php if($action_msg){ echo $action_msg; } ?>
								   <form action="" method="post">
  									<div class="row">
  									<div class="inputcss col-lg-6 col-md-12">
								    <input type="hidden" name="user_id" value="<?php echo profile_select()['id']; ?>">
									<label for="fname">First Name:</label>
									<input type="text" id="fname" name="fname" value="<?php echo profile_select()['name']; ?>"></div>
  									<div class="inputcss col-lg-6 col-md-12">
									<label for="lname">Last Name:</label>
									<input type="text" id="lname" name="lname" value="<?php echo profile_select()['sur_name']; ?>"></div></div>
  									<div class="row">
  									<div class="inputcss col-lg-4 col-md-12">
									<label for="username">User Name:</label>
									<input type="text" id="username" name="username" value="<?php echo profile_select()['user_name']; ?>" disabled></div>
  									<div class="inputcss col-lg-4 col-md-12">
									<label for="useremail">User Email:</label>
									<input type="text" id="useremail" name="useremail" value="<?php echo profile_select()['user_email']; ?>"></div>
  									<div class="inputcss col-lg-4 col-md-12">
									<label for="userpass">User Password:</label>
									<input type="text" id="userpass" name="userpass" value="<?php echo profile_select()['password']; ?>"></div>
								</div>
  									<div class="row">
  									<div class="col-lg-12 col-md-12 text-center">
									<input class="btnstyle" type="submit" name="request_form" value="Submit">
									</div>
									</div>   
								  </form>
								</div>

								<div id="Features" class="tabcontent">
								  <h3>Features</h3>
								  <p>Coming Soon</p>
								</div>

								<div id="Updates" class="tabcontent">
								  <h3>Updates</h3>
								  <p>Coming Soon</p>
								</div>

								<div id="request_temp" class="tabcontent">
								  <h3>Request a Template</h3>
								  <?php if($action_msg){ echo $action_msg; } ?>
								   <form action="" method="post">
  									<div class="row">
  									<div class="inputcss col-lg-4 col-md-12">
								    <input type="hidden" name="user_id" value="">
									<label for="tname">Template Name:</label>
									<input type="text" id="tname" name="tname" value=""></div>
  									<div class="inputcss col-lg-4 col-md-12">
									<label for="phone_num">Phone Number:</label>
									<input type="number" id="phone_num" name="phone_num" value=""></div>
  									<div class="inputcss col-lg-4 col-md-12">
									<label for="template_type">What type of template do you need?:</label>
									<select name="template_type" id="template_type">
										<option value="Template One">Template One</option>
										<option value="Template Two">Template Two</option>
										<option value="Template Three">Template Three</option>
										<option value="Template Four">Template Four</option>
										<option value="Template Five">Template Five</option>
									</select></div>
								</div>
  									<div class="row">
  									<div class="inputcss col-lg-12 col-md-12">
									<label for="template_type">Define about your Template:</label>
									<textarea name="define_all" rows="10" cols="50" value=""></textarea></div>
								</div>
  									<div class="row">
  									<div class="col-lg-12 col-md-12 text-center">
									<input class="btnstyle" type="submit" name="request_template" value="Submit">  
									</div></div> 
								  </form>
  									<div class="col-lg-12 col-md-12 text-center">
								<span class="contact querytext">For any Query Contact us <a href="">+91-9400055786</a></span>
								</div>  
								</div>
                          	</div>
                          </div>
                        </div>
                	</div>
                </div>
            </div>
        </div>
    </div>

<?php include 'templates/footer.php'; ?>