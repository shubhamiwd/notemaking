<?php 
/*
Template Name: Index Page
*/
include 'templates/header-v2.php';
?>
    

<div class="banner">
  <div class="container-fluid">
      <div class="row align-items-center">
          <div class="col-md-3 col-md-offset-2">
            <div class="banner_text">
              <h4>Welcome to Note making</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            <div class="banner-btn">
                <a href="#" class="btnstyle">Read more</a>
            </div>
            </div>
          </div>  
          <div class="col-md-7">
            <div class="banner_img">
              <img src="assets/images/mv.png" class="" alt="">
              </div>
          </div>      
      </div>
    </div>
</div>

<section class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <p class="sub-title">Providing Best Services</p>
                        <h2 class="title">Our Features List</h2>
                    </div>
                </div>
            </div>
            <div class="features-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features features-1">
                            <span class="features-number">01</span>
                            <div class="features-icon">
                                <img src="<?php echo $siteUrl; ?>assets/images/click.svg" alt="">
                            </div>
                            <div class="features-content">
                                <h4 class="features-title">Easy to used</h4>
                                <p>There are many variations of passages of lore ipsum but majority have suffered.</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features features-2">
                            <span class="features-number">02</span>
                            <div class="features-icon">
                                <img src="<?php echo $siteUrl; ?>assets/images/computer.svg" alt="">
                            </div>
                            <div class="features-content">
                                <h4 class="features-title">Awesome design</h4>
                                <p>There are many variations of passages of lore ipsum but majority have suffered.</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features features-3">
                            <span class="features-number">03</span>
                            <div class="features-icon">
                                <img src="<?php echo $siteUrl; ?>assets/images/sketch.svg" alt="">
                            </div>
                            <div class="features-content">
                                <h4 class="features-title">Easy to customize</h4>
                                <p>There are many variations of passages of lore ipsum but majority have suffered.</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="PlansSec">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="section-title text-center mb70">
                <p class="sub-title">Choose Our Pricing</p>
                <h2 class="title">Our Pricing Plans</h2>
            </div>
        </div>
    </div>
      <div class="row">
          <div class="col-lg-4">
                            <div class="price-table">
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
          </div>
          <div class="col-lg-4">
                            <div class="price-table active">
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
          </div>
          <div class="col-lg-4">
                            <div class="price-table">
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
          </div>
      </div>
    </div>
</section>

<?php include 'templates/footer.php'; ?>
