<?php
/*
Template Name: Single-product-details
*/
?>

<?php get_header(); ?>

    <div class="breadcrumb">
        <div class="container">
            <h1 class="white"><?php the_title();?></h1>
            <ul class="breadcrumb-list">
                <li><a href="index.html">Home</a></li>
                <li class="bread-text">PRODUCTS DETAILS</li>
            </ul>
        </div><!-- /container -->
    </div><!-- /slider -->

    <section class="project-area">
        <div class="container">
            <div class="row">
                <div class="right-sidebar">
                    <div class="section-title mb-30">
                        <h5>PRODUCT DETAILS</h5>
                        <h2>PRODUCT OVERVIEW</h2>
                    </div><!-- /section-title -->

                    

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>

                    <img src="<?php bloginfo('template_url'); ?>/img/about/abt.jpg" class="img-responsive mb-30" alt="">

                    <h4 class="mb-20">Project Details</h4>
                    <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                    <div class="row">
                        <div class="career-details-con">
                            <div class="career-box">
                                <i class="fa fa-clock-o"></i>
                                <h4>CLIENT</h4>
                                <small>HimalayanThemes</small>
                            </div><!-- /career-box -->
                        </div>

                        <div class="career-details-con">
                            <div class="career-box">
                                <i class="fa fa-clock-o"></i>
                                <h4>completed</h4>
                                <small>March 15, 2017</small>
                            </div><!-- /career-box -->
                        </div>

                        <div class="career-details-con">
                            <div class="career-box">
                                <i class="fa fa-clock-o"></i>
                                <h4>estimation</h4>
                                <small>$1,000,000</small>
                            </div><!-- /career-box -->
                        </div>

                        <div class="career-details-con">
                            <div class="career-box">
                                <i class="fa fa-clock-o"></i>
                                <h4>surface area</h4>
                                <small>20,000 m<sup>2</sup></small>
                            </div><!-- /career-box -->
                        </div>

                        <div class="career-details-con">
                            <div class="career-box">
                                <i class="fa fa-clock-o"></i>
                                <h4>location</h4>
                                <small>Melbourne, Australia</small>
                            </div><!-- /career-box -->
                        </div>

                        <div class="career-details-con">
                            <div class="career-box">
                                <i class="fa fa-clock-o"></i>
                                <h4>engineer</h4>
                                <small>Frank Mak</small>
                            </div><!-- /career-box -->
                        </div>
                    </div><!-- /row -->

                    <div class="row mt-20" id="project-details-bottom">
                        <div class="project-details-bottom">
                            <h3 class="mb-20">VIDEO PRESENTATION</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="history-img mt-30">
                                <img src="<?php bloginfo('template_url'); ?>/img/project/project1.jpg" class="img-responsive" alt="">
                                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ico/ytube.png" class="img-responsive ytube" alt=""></a>
                            </div>
                        </div>

                        <div class="project-details-bottom">
                            <h3 class="mb-20">SERVICE POINTS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul class="mt-20">
                                <li><i class="fa fa-check"></i> &nbsp;Site Investigations</li>
                                <li><i class="fa fa-check"></i> &nbsp;Quantity/material takeoff</li>
                                <li><i class="fa fa-check"></i> &nbsp;Checking estimates for extension, accuracy &amp; erros</li>
                                <li><i class="fa fa-check"></i> &nbsp;Contracting sub-trades &amp; supplies for quotation</li>
                                <li><i class="fa fa-check"></i> &nbsp;Evaluating sub-trade quotations</li>
                                <li><i class="fa fa-check"></i> &nbsp;Participate in trending and closings</li>
                                <li><i class="fa fa-check"></i> &nbsp;Maintain career propagation plans</li>
                                <li><i class="fa fa-check"></i> &nbsp;Copiling successful &amp; un-successful trenders</li>
                            </ul>
                        </div>
                    </div><!-- /row -->
                </div>

                <?php get_sidebar(); ?>

            </div><!-- /row -->
        </div><!-- /container -->
    </section>


    <?php get_footer(); ?>

    <!-- all js here -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <!-- Slide plugin -->
    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
    <!-- Menu plug-in -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.meanmenu.js"></script>
    <!-- Custom js -->
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    
</body>
</html>