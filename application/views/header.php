<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/style.css' ?>" />
	<script src="<?php echo BASE_URL . 'assets/js/slider/jquery-1.9.1.min.js' ?>" ></script>
	<script src="<?php echo BASE_URL . 'assets/js/slider/jssor.js' ?>" ></script>
	<script src="<?php echo BASE_URL . 'assets/js/slider/jssor.slider.js' ?>" ></script>
	<script src="<?php echo BASE_URL . 'assets/js/slider/slider.js' ?>" ></script>
</head>
<body>
	<header>
		<div class="container">
			<a href="<?php echo BASE_URL . 'home' ?>"><p id="mainHeading">WORLD OF I.T</p></a>
			<nav>
				<ul>
					<li><a href="<?php echo BASE_URL . 'home' ?>"><p class="hvr-underline-from-left">HOME</p></a></li>
					<li><a href="<?php echo BASE_URL . 'projects' ?>"><p class="hvr-underline-from-left">PROJECTS</p></a></li>
					<li><a href="<?php echo BASE_URL . 'services' ?>"><p class="hvr-underline-from-left">SERVICES</p></a></li>
					<li><a href="<?php echo BASE_URL . 'about' ?>"><p class="hvr-underline-from-left">ABOUT</p></a></li>
				</ul>
			</nav>
			<div id="login-wrapper">
				<a href="<?php echo BASE_URL . 'login' ?>"><p class="boxButton hvr-radial-out-white" id="logIn">LOG IN</p></a>
				<p id="or">OR</p>
				<a href="<?php echo BASE_URL . 'quote/start-now-header/' ?>"><p class="boxButton hvr-radial-out-blue">START NOW</p></a>
			</div>
		</div>
	</header>
	<div style="height: 70px; width: 100%;"></div>