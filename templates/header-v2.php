<?php 
/*
Template Name: App Header-v2
*/
session_start();
ob_start();
error_reporting(1);
include 'database.php';

//$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';

$fullUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                dirname($_SERVER["REQUEST_URI"].'?').'/';
$explode = explode('/', $fullUrl);
if (($key = array_search('pages', $explode)) !== false){
    unset($explode[$key]);
}
$implode = implode('/', $explode);

$siteUrl = rtrim($implode,"/").'/';

?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IWD App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/3d0f2cb560.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo $siteUrl;?>assets/js/app-jquery.js" type="text/javascript"></script>
	<link href="<?php echo $siteUrl;?>assets/css/app-style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-------FaceBook_Share_BTN------>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="Tuvprk4g"></script>	
</head>
<body>
<nav class="navbar navbar-default mainheader">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $siteUrl;?>">Logo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li><a href="http://form-build.com/all-projects/simple-note/new/dashboard">Dashboard</a></li>-->
        <!--<li><a href="index.php">Templates</a></li>-->
		<li><a href="<?php echo $siteUrl;?>">Home</a></li>
		<li><a href="<?php echo $siteUrl;?>about">About</a></li>
		<li><a href="<?php echo $siteUrl;?>contact">Contact</a></li>
        <li><a href="<?php echo $siteUrl;?>ticket/index.php">Support</a></li>
        <!--<li><a href="login.php">Login</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><button class='cp_cl' onclick=""><i class="fas fa-save"></i> Save to drafts</button></li>-->
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <?php //echo $_SESSION["name"]; ?><span class="caret"></span></a><!-- -->
          <ul class="dropdown-menu">
            <!--<li><a href="#"><span><i class="fas fa-user"></i></span> Profile</a></li>
            <!--<li><a href="#"><span><i class="fas fa-user"></i></span> Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><span><i class="fas fa-cogs"></i></span> Setting</a></li>
            <li role="separator" class="divider"></li>-->
            <li><a href="<?php echo $siteUrl;?>login"><span><i class="fas fa-sign-out-alt"></i></span> Login</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>