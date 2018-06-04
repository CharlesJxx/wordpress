<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CONTOUR - Construction &amp; Building HTML Template</title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header-menu">
		<div class="header-top-area">
            <div class="container">
                <div class="border-bottom">
                    <div class="row">
                        <div class="top-left">
                            <div class="header-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                <a href="#"><i class="fa fa-camera"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>

                        <div class="top-right">
                            <div class="headers-left">
                                <div class="headers-left-text">
                                    <div class="headers-left-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="headers-left-text">
                                        <p>(+38) 6273 663 21</p>
                                    </div>
                                </div>
                                <div class="headers-left-text">
                                    <div class="headers-left-icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="headers-left-text">
                                        <p>Schedule - Mon - Sat / 09:00 - 18:30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-top-area -->

		<div class="main-menu-area">
			<div class="container">
				<div class="row">
					<div class="logo-container">
						<div class="logo">
							<a href="index.html"><img src="img/logo/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="right-nav-list">
						<div class="main-menu floatright">
							<nav>
								<ul>
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
										<ul class="sub-menu">
											<li><a href="about.html">About us</a></li>
											<li><a href="history.html">History</a></li>
											<li><a href="partners.html">Partners</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="careers.html">Career</a></li>
										</ul>
									</li>
									<li><a href="services.html">Services <i class="fa fa-angle-down"></i></a>
										<ul class="sub-menu">
											<li><a href="services.html">Floors & Roofs</a></li>
											<li><a href="services.html">Rooms & Halls</a></li>
											<li><a href="services.html">Basements</a></li>
											<li><a href="services.html">Architecture</a></li>
											<li><a href="services.html">Consulting</a></li>
											<li><a href="services.html">Transport Goods</a></li>
										</ul>
									</li>
									<li><a href="projects.html">Projects <i class="fa fa-angle-down"></i></a>
										<ul class="sub-menu">
											<li><a href="projects.html">Projects</a></li>
											<li><a href="project-details.html">Projects Details</a></li>
										</ul>
									</li>
									<li><a href="news.html">News <i class="fa fa-angle-down"></i></a>
										<ul class="sub-menu">
											<li><a href="news.html">News</a></li>
											<li><a href="news-detail.html">News details</a></li>
										</ul>
									</li>
									<li><a href="contact.html">CONTACT</a></li>
								</ul>
							</nav>
						</div>
						<div class="mobile-menu-con"><div class="mobile-menu"></div></div>
					</div>
				</div>
			</div>
		</div><!-- /main-menu-area -->
	</header>

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
