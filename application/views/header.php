<?php defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = 'http://' . $_SERVER['SERVER_NAME'] . '/world_of_it/';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . '/world_of_it/assets/css/style.css' ?>" />
	<script src="<?php echo $base_url . 'assets/js/slider/jquery-1.9.1.min.js' ?>" ></script>
	<script src="<?php echo $base_url . 'assets/js/slider/jssor.js' ?>" ></script>
	<script src="<?php echo $base_url . 'assets/js/slider/jssor.slider.js' ?>" ></script>
	<script src="<?php echo $base_url . 'assets/js/slider/slider.js' ?>" ></script>
</head>
<body>
	<header>
		<div class="container">
			<p id="mainHeading">WORLD OF I.T</p>
			<nav>
				<ul>
					<li><a href="<?php echo $base_url . 'home' ?>"><p class="hvr-underline-from-left">HOME</p></a></li>
					<li><a href="<?php echo $base_url . 'projects' ?>"><p class="hvr-underline-from-left">PROJECTS</p></a></li>
					<li><a href="<?php echo $base_url . 'services' ?>"><p class="hvr-underline-from-left">SERVICES</p></a></li>
					<li><a href="<?php echo $base_url . 'about' ?>"><p class="hvr-underline-from-left">ABOUT</p></a></li>
				</ul>
			</nav>
			<div id="login-wrapper">
				<a href="<?php echo $base_url . 'login' ?>"><p class="boxButton hvr-radial-out-white" id="logIn">LOG IN</p></a>
				<p id="or">OR</p>
				<a href="<?php echo $base_url . 'quote/start-now-header/' ?>"><p class="boxButton hvr-radial-out-blue">START NOW</p></a>
			</div>
		</div>
	</header>