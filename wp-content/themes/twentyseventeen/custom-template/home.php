<?php
/*
 * Template Name: homepage
 */

get_header(); ?>

<div class="home-banner">
	<img src="<?php bloginfo('template_directory'); ?>/assets/images/banner.png" />
	<div class="container">
		<div class="row">
			<div class="banner-content">
				<div class="logo-sec">
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" /></a>
				</div>
				<div class="banner-heading wow zoomIn" data-wow-delay="0.30s" data-wow-duration="0.30s">
					<h2> 2nd june 2018</h2>
					<a href="#" class="hvr-bounce-to-right">enter</a>
				</div>
				<div class="buy-ticket-sec slideInLeft">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/buy-ticket.png"  class="animated bounce"/>
					<a href="#">Buy<br /> ticket </a>
				</div>
			</div>
		</div>
	</div>
	<div class="header-social">
		<div class="container">
			<div class="row">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div><!-- home-banner -->

<div class="video-section">
	<img src="<?php bloginfo('template_directory'); ?>/assets/images/video-bg.png" class="wow swing"  data-wow-delay="1.90s" data-wow-duration="1.90s" />
	<div class="video">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/video.jpg" />
	</div>
</div>

<div class="main-section">
            <div class="line-up-txt">
                <div class="container">
                    <div class="row">
                        <div class="line-title"><h2>Line Up</h2></div>
                        <div class="main-sec-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
</div>

<?php get_footer();
