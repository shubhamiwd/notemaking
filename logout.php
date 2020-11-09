<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
$siteurl = '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
header("Location:login");
?>