<?php
/*
 * This is the file you'd load in with codeigniter's view function along with the header etc. or you can put it inline.
 * $uri = The server's uri string aka the part after the www.google.com, so everything after the .com including the /
 * $imgRoot = the image directories root
 * $numSlider = The number of sliders on this page
 * $image[i] = the name of the image inside the assets/img folder
 * */

$uri = $_SERVER['REQUEST_URI'];
$imgRoot = "http://" . $_SERVER['SERVER_NAME'] . "/world_of_it/assets/img/slider/";

if(strpos($uri, "world_of_it")) {
	$numSlider = 1;
	$image[1] = "p-cuser.jpg";
	$image[2] = "p-cuser.jpg";
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
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?php echo $imgRoot; ?>loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0; top: 0; width: 1280px;
            height: 530px; overflow: hidden;">
			<?php 
			
			for($i = 1; $i <= $numSlider; $i++) {
			?>
            <div>
	            <img u="caption" src="<?php echo $imgRoot . $image[$i]; ?>" id="slider_image" />
	            <div style="max-width: 400px; position: absolute; right: 200px; top: 100px;">
				<?php if($i == 1) { ?>
	                <p class="slider_text" style="font-size: 24px;">LOREM IPSUM DOLOR SIT AMET!</p>
					<ul id="slider_list">
						<li><p class="slider_text" style="font-size: 16px; margin-top: 10px;">Test text</p></li>
					</ul>
				<?php } else if($i == 2) {?>
					<p class="slider_text" style="">Slide Two!</p>
	            <?php } ?>
	            </div>
            </div>
            <?php 
			}
			?>
        </div>
		
        <style>
            .jssora21l, .jssora21r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(<?php echo $imgRoot; ?>a21.png) center center no-repeat;
                overflow: hidden;
            }
            .jssora21l { background-position: -3px -33px; }
            .jssora21r { background-position: -63px -33px; }
            .jssora21l:hover { background-position: -123px -33px; }
            .jssora21r:hover { background-position: -183px -33px; }
            .jssora21l.jssora21ldn { background-position: -243px -33px; }
            .jssora21r.jssora21rdn { background-position: -303px -33px; }
        </style>
		
        <span u="arrowleft" class="jssora21l" style="top: 203px; left: 8px;">
        </span>
        <span u="arrowright" class="jssora21r" style="top: 203px; right: 8px;">
        </span>
    </div>