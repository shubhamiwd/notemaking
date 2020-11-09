<?php 
/*
Template Name: App Footer
*/
?>

<div class="footer">
    <div class="container">
      <div class="row">
		<div class="col-md-12 text-center">
      		<a class="navbar-brand" href="<?php echo $siteUrl; ?>">Logo</a>
      	</div>
		<div class="col-md-12 text-center">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo $siteUrl; ?>dashboard">Dashboard</a></li>
				<li><a href="<?php echo $siteUrl; ?>home">Home</a></li>
				<li><a href="<?php echo $siteUrl; ?>about">About</a></li>
				<li><a href="<?php echo $siteUrl; ?>ticket/index.php">Support</a></li>
				<li><a href="<?php echo $siteUrl; ?>contact">Contact</a></li>
		      </ul>	
		      <p class="CopyrightP">© Copyright 2020. All rights Reserved.</p>					
      	</div>
      </div>
    </div>
</div>


 <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	
<script>
function openCity(evt, cityName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " active";
	}

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>	
	
</body>
</html>