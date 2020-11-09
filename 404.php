<?php 
/*
Template Name: Dental App 404 Error
*/

include 'templates/header.php';
?>

    <div class="container">
        <div class="tem_title">
            <h2>Something is wrong</h2>
        </div>
        <div class="main-section">
            <div class="mtnegtive">
                <div class="main-sec">
                  <div class="main-sec-in">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 text-center">
                            <img src="assets/images/404.png" class="fourzerofourimg" alt="404">
                            <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                            <a href="<?php echo $siteUrl; ?>" class="btnstyle">Go to home</a>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'templates/footer.php'; ?>
