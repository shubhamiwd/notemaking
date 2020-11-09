<?php 
/*
Template Name: About Page.
*/
include 'templates/header-v2.php';
?>
    



  <div class="Short_banner">
    <div class="container">
      <div class="row">
        <div class="col-sm text-center">
          <div class="Short_banner_heading">
            <h1><span class="twodots">A</span>bout us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>


<section class="PlansSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <p class="sub-title">About us</p>
                        <h2 class="title">About us</h2>
                    </div>
                    <p class="pText">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>
            </div>
        </div>
</section>
<section class="features-area pdb120">
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



<?php include 'templates/footer.php'; ?>
