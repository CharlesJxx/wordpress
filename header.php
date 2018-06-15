<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if ( is_home() ) {
		bloginfo('name'); echo " - "; bloginfo('description');
	} elseif ( is_category() ) {
		single_cat_title(); echo " - "; bloginfo('name');
	} elseif (is_single() || is_page() ) {
		single_post_title();
	} elseif (is_search() ) {
		echo "搜索结果"; echo " - "; bloginfo('name');
	} elseif (is_404() ) {
		echo '页面未找到!';
	} else {
		wp_title('',true);
	} ?></title>
    <!-- all css here -->
    <!-- Slide plugin -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <!-- fonts -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <!-- Page animation plugin -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css">
    <!-- Menu plug-in -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/meanmenu.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Responsive layout -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
    <!-- responsive lightbox & dialog script -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

</head>
<body>
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
                                        <p>(+86) 021 31751393</p>
                                    </div>
                                </div>
                                <div class="headers-left-text">
                                    <div class="headers-left-icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="headers-left-text">
                                        <p>Call our support in 24/7</p>
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
							<a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="right-nav-list">
						<div class="main-menu floatright">
							<?php wp_nav_menu(array('container' => 'nav')); ?>
						</div>
						<div class="mobile-menu-con"><div class="mobile-menu"></div></div>
					</div>
				</div>
			</div>
		</div><!-- /main-menu-area -->
	</header>