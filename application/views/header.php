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
	<script>

	</script>
</head>
<body>
	<header>
		<div class="container" style="padding:0;">
			<a href="<?php echo BASE_URL ?>"><p id="mainHeading">WORLD OF I.T</p></a>
			<nav>
				<ul style="margin-left: 20px;">
					<li><a href="<?php echo BASE_URL ?>"><p class="hvr-underline-from-left">HOME</p></a></li>
					<li><a href="<?php echo BASE_URL . 'projects' ?>"><p class="hvr-underline-from-left">PROJECTS</p></a></li>
					<li id="services_link"><a href="<?php echo BASE_URL . 'services' ?>"><p class="hvr-underline-from-left">SERVICES</p></a>
						<div id="services_menu">
							<ul>
								<li><a href="#" class="services_item"><p class="hvr-underline-from-left">Item 1</p></a></li>
								<li><a href="#" class="services_item"><p class="hvr-underline-from-left">Item 2</p></a></li>
								<li><a href="#" class="services_item"><p class="hvr-underline-from-left">Item 3</p></a></li>
								<li><a href="#" class="services_item"><p class="hvr-underline-from-left">Item 4</p></a></li>
							</ul>
						</div>
					</li>
					<li><a href="<?php echo BASE_URL . 'about' ?>"><p class="hvr-underline-from-left">ABOUT</p></a></li>
				</ul>
			</nav>
			<div id="login-wrapper">
				<p class="boxButton hvr-radial-out-white" id="logIn">LOG IN</p>
				<p id="or">OR</p>
				<a href="<?php echo BASE_URL . 'quote/start-now-header/' ?>"><p class="boxButton hvr-radial-out-blue">START NOW</p></a>
			</div>
		</div>
	</header>
	<div style="height: 66px; width: 100%;"></div>