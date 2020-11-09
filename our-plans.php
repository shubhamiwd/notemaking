<?php 
include 'sucess.php';
//include 'templates/header.php';
require 'paypal/vendor/autoload.php';

if (! empty($_POST["subscribe"])){
	if($_SESSION['id'] ==""){
		header('location:login');
	}else{
	require_once "paypal/Service/createPHPTutorialSubscriptionPlan.php";
	}
}
?>
    <div class="container">
        <div class="tem_title">
            <h2>Our plans</h2>
        </div>
        <div class="main-section">
            <div class="mtnegtive">
                <div class="main-sec">
                        <div class="row align-items-center">
                          <div class="col-lg-4 col-md-12">
						<form action="" method="post">
                            <div class="price-table">
                              <div class="price-inside">BasicPlan</div>
                              <div class="price-header">
                                <img src="<?php echo $siteUrl; ?>assets/images/Startup.svg" class="price-header_img" alt="Startup">
                                <div class="price-value">
                                  <h2><span>$</span>10.00</h2>
                                  <span>Monthly Package</span>
                                </div>
                                <h3 class="price-title">Basic Plan</h3> 
                              </div>
                              <div class="price-list">
                                <ul class="list-unstyled">
                                  <li>What's Included?</li>
                                  <li>Note Making Notes</li>
                                  <li>AI Assistant & Linking</li>
                                  <li>Template conversion</li>
                                  <li>24/7 Customer Support</li>
                                </ul>
                              </div>
						<input type="hidden" name="amount" value="10">	  
						<input type="hidden" name="plan_name" value="PHP jQuery Tutorials" /> 
						<input type="hidden" name="plan_description" value="Tutorials access to learn PHP with simple examples." />
                            <!--<a class="btnstyle" href="#">Purchase now</a>-->
						<input type="submit" name="subscribe" value="Purchase Now" class="btnstyle" />
						   </div>
							</form>
                          </div>
                          <div class="col-lg-4 col-md-12 md-mt-5">
						  
						<form action="" method="post">
                            <div class="price-table active">
                              <div class="price-inside">PROPlan</div>
                              <div class="price-header">
                                <img src="<?php echo $siteUrl; ?>assets/images/Standard.svg" class="price-header_img" alt="Standard">
                                <div class="price-value">
                                  <h2><span>$</span>55</h2>
                                  <span>Monthly Package</span>
                                </div>
                                <h3 class="price-title">Pro Plan</h3> 
                              </div>
                              <div class="price-list">
                                <ul class="list-unstyled">
                                  <li>What's Included?</li>
                                  <li>Note Making Notes</li>
                                  <li>AI Assistant & Linking</li>
                                  <li>Template conversion</li>
                                  <li>24/7 Customer Support</li>
                                  <li>Patient Reports</li>
                                  <li>Notes Auditing</li>
                                  <li>Private community</li>
                                  <li>Automated Referral Letters</li>
                                </ul>
                              </div>
							  <input type="hidden" name="amount" value="55">	  
                        <input type="hidden" name="plan_name" value="PHP jQuery Tutorials" /> 
						<input type="hidden" name="plan_description" value="Tutorials access to learn PHP with simple examples." />
                            <!--<a class="btnstyle" href="#">Purchase now</a>-->
						<input type="submit" name="subscribe" value="Purchase Now" class="btnstyle" />
						
                            </div>
							</form>
                          </div> 
                          <div class="col-lg-4 col-md-12 md-mt-5">
						  
					<form action="" method="post">
                            <div class="price-table">
                              <div class="price-inside">Premium</div>
                              <div class="price-header">
                                <img src="<?php echo $siteUrl; ?>assets/images/Premium.svg" class="price-header_img" alt="Premium">
                                <div class="price-value">
                                  <h2><span>$</span>99</h2>
                                  <span>Monthly Package</span>
                                </div>
                                <h3 class="price-title">Premium</h3> 
                              </div>
                              <div class="price-list">
                                <ul class="list-unstyled">
                                  <li>15 Analytics Compaign</li>
                                  <li>Unlimited Site licenses</li>
                                  <li>1 Database</li>
                                  <li>10 Free Optimization</li>
                                  <li>Html5 + Css3</li>
                                  <li>24/7 Customer Support</li>
                                </ul>
                              </div>
						<input type="hidden" name="amount" value="50" /> 
						<input type="hidden" name="plan_description" value="Tutorials access to learn PHP with simple examples." />
                              <!--<a class="btnstyle" href="#">Purchase now</a>-->
						<input type="submit" name="subscribe" value="Purchase Now" class="btnstyle" />	
						</div>
							</form> 
                          </div> 
                        </div>
                </div>
            </div>
        </div>
    </div>

<!--div id="subscription-plan">
    <div class="plan-info">IWD Tech</div>
    <div class="plan-desc">Continue your MemberShip.</div>
    <div class="price">$49 / month</div>

    <div>
    
		<form action="" method="post">

            <input type="hidden" name="plan_name" value="PHP jQuery Tutorials" /> 
				<input type="hidden" name="plan_description" value="Tutorials access to learn PHP with simple examples." />
            <input type="submit" name="subscribe" value="Subscribe" class="btn-subscribe" />
        </form>
	
	</div>
</div-->

<?php include 'templates/footer.php'; ?>
