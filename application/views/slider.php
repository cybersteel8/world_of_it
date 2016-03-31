<?php
/*
 * This is the file you'd load in with codeigniter's view function along with the header etc. or you can put it inline.
 * $uri = The server's uri string aka the part after the www.google.com, so everything after the .com including the /
 * $imgRoot = the image directories root
 * $numSlider = The number of sliders on this page
 * $image[i] = the name of the image inside the assets/img folder
 * */

$uri = $_SERVER['REQUEST_URI'];
$imgRoot = BASE_URL . 'assets/img/slider/';

if(strpos($uri, "world_of_it")) {
	$numSlider = 4;
	$image[1] = "p-cuser.jpg";
	$image[2] = "p-cuser.jpg";
	$image[3] = "p-cuser.jpg";
	$image[4] = "p-cuser.jpg";
} else if (strpos($uri, "other-page")) {
	$numSlider = 4;
	$image[1] = "marine1.png";
	$image[2] = "marine2.png";
	$image[3] = "marine3.png";
	$image[4] = "marine4.png";
} else {
	$numSlider = 6;
	$image[1] = "home1.png";
	$image[2] = "home2.png";
	$image[3] = "home3.png";
	$image[4] = "home4.png";
	$image[5] = "home5.png";
	$image[6] = "home6.png";
}
?>
<div id="slider1_container">
	<!-- Loading Screen
	<div u="loading" style="position: absolute; top: 0px; left: 0px;">
		<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
			top: 0px; left: 0px; width: 100%; height: 100%;">
		</div>
		<div style="position: absolute; display: block; background: url(<?php echo $imgRoot; ?>loading.gif) no-repeat center center;
			top: 0px; left: 0px; width: 100%; height: 100%;">
		</div>
	</div> -->
	<!-- Slides Container -->
	<div u="slides" style="cursor: move; position: relative; left: 0; top: 0; width: 1280px;
		height: 530px; overflow: hidden;">
		<?php

		for($i = 1; $i <= $numSlider; $i++) {
		?>
		<div>
			<div id="slider_content_wrapper"">
				<img src="<?php echo $imgRoot . $image[$i]; ?>" id="slider_image" />
				<div style="display: inline-block;">
				<?php if($i == 1) { ?>
					<p class="slider_header" style="right: 70px;">LOREM IPSUM DOLOR SIT AMET!</p>
					<ul class="slider_list">
						<li><p class="slider_text">Test text</p></li>
					</ul>
				<?php } else if($i == 2) {?>
					<p class="slider_header" style="right: 200px;">Slide Two!</p>
					<ul class="slider_list"><li><p class="slider_text">Test item</p></li></ul>
				<?php } else if($i == 3) {?>
					<p class="slider_header" style="right: 200px;">Slide Three!</p>
				<?php } else if($i == 4) {?>
					<p class="slider_header" style="right: 200px;">Slide Four!</p>
				<?php } ?>
				</div>
			</div>
		</div>
		<?php
		}
		?>

		<span u="arrowleft" class="jssora21l" style="top: 203px; left: 100px;"></span>
		<span u="arrowright" class="jssora21r" style="top: 203px; right: 100px;"></span>

		<!-- Navigator container -->
		<div u="navigator" class="jssorb05" style="bottom:42px; right:16px;">
			<!-- bullet navigator item prototype -->
			<div u="prototype" style="position: absolute; width:63px; height:16px;"></div>
		</div>
	</div>
</div>