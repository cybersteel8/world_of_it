<?php defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = 'http://' . $_SERVER['SERVER_NAME'] . '/world_of_it/';
?>
<main>
	<div id="carousel-section">
		<?php include("slider.php"); ?>
	</div>

	<div id="callToAction">
		<div class="container">
			<p class="cta-text" style="color: #e5e5e5;">START A PROJECT WITH US TODAY.</p>
			<p class="cta-text" style="color: #ec5e46; margin-left: 20px;" >CHOOSE A PACKAGE THAT SUITS YOU BEST.</p>
			<a href="<?php echo $base_url . 'quote/start-now-cta/' ?>"><p class="boxButton hvr-radial-out-blue" id="startNow-CTA">START NOW</p></a>
		</div>
	</div>

	<div id="positives-section">
		<div class="positives-item"></div>
		<div class="positives-item" style="border-left: 1px solid #e5e5e5;	border-right: 1px solid #e5e5e5;"></div>
		<div class="positives-item"></div>
	</div>

	<div id="packages-section">
		<div class="pkg-item">
			<p class="pkg-item-heading">FREE</p>
			<p class="pkg-item-text">
				Basically nothing.<br /><br />
				You might get an email from us.<br /><br />
				Time is money, idiots.
			</p>
			<a href="<?php echo $base_url . 'quote/package-small/' ?>">
				<div class="pkg-item-chooseButton hvr-back-pulse">
					<p>CHOOSE THIS PACKAGE</p>
				</div>
			</a>
		</div>
		<div class="pkg-item">
			<p class="pkg-item-heading">THE OTHER ONE</p>
			<p class="pkg-item-text">
				This is somewhere in the middle.<br /><br />
				No idea what to write here.
			</p>
			<a href="<?php echo $base_url . 'quote/package-medium/' ?>">
				<div class="pkg-item-chooseButton hvr-back-pulse">
					<p>CHOOSE THIS PACKAGE</p>
				</div>
			</a>
		</div>
		<div class="pkg-item" style="margin-right: 0;">
			<p class="pkg-item-heading" style="text-align: right;">PAID</p>
			<p class="pkg-item-text" style="text-align: right;">
				Definitely more than nothing.<br /><br />
				You'll probably get a website out of us.<br /><br />
				We may even meet you if the project is worth the time.<br /><br />
				While stocks last! Our effort is limited!
			</p>
			<a href="<?php echo $base_url . 'quote/package-large/' ?>">
				<div class="pkg-item-chooseButton hvr-back-pulse">
					<p>CHOOSE THIS PACKAGE</p>
				</div>
			</a>
		</div>
	</div>
</main>