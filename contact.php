<?php 
/*
Template Name: Contact Page.
*/
include 'templates/header-v2.php';
include 'templates/email-templates.php';
?>
 
  <div class="Short_banner">
    <div class="container">
      <div class="row">
        <div class="col-sm text-center">
          <div class="Short_banner_heading">
            <h1>Contact us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="Simpletext pt-80">
    <div class="container">
      <div class="row">
        <div class="col-sm text-center">
          <div class="innerpage_heading">
            <h1>Get in touch India</h1>
            <p>Please contact us using the form and we’ll get back to you as soon as possible.</p>
          </div>
        </div>
      </div>
      <div class="getintouch pt-80">
        <div class="row">
          <div class="col-md-6">
            <div class="phnmail">
              <p><span class="contacticon"><img src="<?php echo $siteUrl; ?>assets/images/contacticon1.png" alt=""/></span><a href="tel:9888884949">+91-9888884949</a></p>
              <p><span class="contacticon"><img src="<?php echo $siteUrl; ?>assets/images/contacticon2.png" alt=""/></span><a href="mailto:info@iwdtechnologies.com">info@iwdtechnologies.com</a></p>
              <p><span class="contacticon"><img src="<?php echo $siteUrl; ?>assets/images/contacticon3.png" alt=""/></span><a href="#">E 110 First Floor, Phase 7, Industrial Area, <br> Sahibzada Ajit Singh Nagar, <br> Punjab 160055</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="phnmail_form">
              <form action="" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="user_name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="user_email" placeholder="Email">
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="user_msg" placeholder="Message"></textarea>
                </div>
                <button type="submit" name="contact_us" class="btn btn-primary btnstyle">Submit</button>
              </form>
			  <?php if($message){ echo $message; } ?>		  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'templates/footer.php'; ?>
