<?php 
/*
Template Name: Dental App Dashboard
*/
include 'templates/header.php';
$dateDiff = dateDiffInDays($user_created_at, $trial_end_date);	
?>
	<div class="container" id="checkbox-container">
		<div class="tem_title">
			<h2>Dashboard</h2>
		</div>
			<div class="main-section Dashboard_page">
				<div class="mtnegtive">
					<div class="col-md-7">
						<div class="main-sec-in">
							<div class="Dashicon"><i class="far fa-file-alt"></i></div>
							<h3 class="mb20">My Templates</h3>
							<!------Search_Field----->
							<input type="text" id="myInput" onkeyup="templateSearch()" placeholder="Search for template.." title="Type template name">
							<!---------->
							 <ul class="templete_list" id="myUL">
								<li>
									<a href="<?php echo $siteUrl; ?>pages/recall-adult">Recall Adult</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/crown-prep">Crown Prep</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/emergency">Emergency</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/filling">Filling</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/invisalign-fit-appointment">Invisalign Fit Appointment</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/crown-cementation">Crown Cementation</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/extraction-maxillary">Extraction Maxillary</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/invisalign-assessment">Invisalign Assessment</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/invisalign-review">Invisalign Review</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/kids-exam">Kids Exam</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/new-patient-exam">New Patient Exam</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/orthodontist-exam">Orthodontist Exam</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/periodontal-assessment">Periodontal Assessment</a>
								</li>
								<li>
									<a href="<?php echo $siteUrl; ?>pages/rct-first-visit">Rct First Visit</a>
								</li>
							  </ul>
						</div>
						<div class="main-sec-in">
							<div class="Dashicon"><i class="far fa-thumbs-up"></i></div>
							<h3 class="mb20">Help Dentist</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting dummy printing industry.</p>
							<a href="<?php echo $siteUrl; ?>sign-up?ref=<?php echo referral_code(); ?>" class="btnstyle"> Refer a Friend </a><!---->
							
							<!-----------Copy to clipboard------------>
							<input type="text" target="_blank" value="<?php echo $siteUrl; ?>sign-up?ref=<?php echo referral_code(); ?>" id="referralcode">
							<div class="tooltipreferal">
							<button class="btnstyle" onclick="copiedReferral()" onmouseout="outFunc()">
							  <span class="tooltiptext" id="referralTooltip">Copy to Clipboard</span>Copy Referral Code</button>
							</div>
							<!----------FaceBook_Share_Buttons-------->
							
							<div class="fb-share-button" data-href="<?php echo $siteUrl; ?>dashboard" data-layout="button_count" data-size="small">
							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fform-build.com%2Fall-projects%2Fsimple-note%2Fnew%2Fdashboard&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="main-sec-in">
							<div class="Dashicon"><i class="far fa-play-circle"></i></div>
							<h3 class="mb20">Guided Tutorials</h3>
							<p>Lorem Ipsum is simply dummy industry.</p>
							<a href="" class="btnstyle"> View Tutorials </a>
						</div>
						
						<div class="main-sec-in">
							<div class="Dashicon"><i class="far fa-clock"></i></div>
							<?php if(profile_select()['plan_status']){ ?>
							<h3 class="mb20">Your Plan is Upgrade.</h3>
							<?php }else{ ?> 
                            <h3 class="mb20">You have <?php echo $dateDiff; ?> days left on your free trial</h3>
							<?php } ?>
							<p>Lorem Ipsum is simply dummy industry.</p>
							<a href="<?php echo $siteUrl; ?>our-plans" class="btnstyle"> Upgrade Now </a>
							</div>
					</div>
				</div>
			</div>
		</div>

<?php include 'templates/footer.php'; ?>
