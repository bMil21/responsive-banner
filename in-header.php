<?
// IN HEADER FILE
?>
<html>
<head>
	<?php 
	// Header Image (desktop, tablet, mobile)
	if (isset($header_image)) {
		echo '
			<!-- Header Image -->
			<style>
				@media screen and (min-width : 961px) {
					#hero {background-image: url("images/header-'. $header_image .'-lg.jpg");}
				}
				@media screen and (max-width : 960px) and (min-width : 601px) {
					#hero {background-image: url("images/header-'. $header_image .'-md.jpg");}
				}
				@media screen and (max-width: 600px) {
					#hero {background-image: url("images/header-'. $header_image .'-sm.jpg");}
				}
			</style>
			<!--[if lte IE 8]>
				<style>
					#hero {background-image: url("images/header-'. $header_image .'-lg.jpg");}
				</style>
			<![endif]-->
		';
	}
	// Add Hero Slider Images (desktop, tablet, mobile)
	if (isset($hero_slider_images)) {
		$hslider_lg = '';
		$hslider_md = '';
		$hslider_sm = '';
		foreach ($hero_slider_images as $num => $img) { 
			$num = $num + 1; // start at "1" now
			$hslider_lg .= "\n" . '#hero-slider .slide'. $num .'{background-image: url("images/hero-'. $img .'-lg.jpg");}';
			$hslider_md .= "\n" . '#hero-slider .slide'. $num .'{background-image: url("images/hero-'. $img .'-md.jpg");}';
			$hslider_sm .= "\n" . '#hero-slider .slide'. $num .'{background-image: url("images/hero-'. $img .'-sm.jpg");}';
		}
		echo '
			<!-- Hero Slider Images -->
			<style>
				@media screen and (min-width : 961px) { '
					. $hslider_lg .
				'}
				@media screen and (max-width : 960px) and (min-width : 601px) { '
					. $hslider_md .
				'}
				@media screen and (max-width: 600px) { '
					. $hslider_sm .
				'}
			</style>
			<!--[if lte IE 8]>
				<style>'
					. $hslider_lg .
				'</style>
			<![endif]-->
		';
	} ?>
</head>
<body>
	<?php if (isset($header_image)) { ?>
	<!-- Hero Image -->
	<section id="hero">
		<h1>Title</h1>
	</section>
	<?php } ?>


	<?php if (isset($hero_slider_images)) { ?>
	<!-- Hero Slider -->
	<section id="hero-slider" class="reslider-wrap">
		<ul class="reslider">
			<?php 
			foreach ($hero_slider_images as $num => $img) { 
				$num = $num + 1; // start at "1" now
				echo '<li class="slide'. $num .'"></li>';
			} ?>
		</ul>
	</section><!-- END reSlider -->
	<?php } ?>
</body>
</html>