<?php
/*
Template Name: Page-culture
*/
?>

<?php get_header(); ?>

    <div class="breadcrumb">
        <div class="container">
            <h1 class="white"><?php the_title();?></h1>
            <ul class="breadcrumb-list">
                <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
                <li class="bread-text"><?php the_title();?></li>
            </ul>
        </div><!-- /container -->
    </div><!-- /slider -->

    <section>
        <div class="container">
            <div class="row mb-30">
            
            <?php get_sidebar(); ?>

                <div class="right-sidebar">
                <img src="<?php bloginfo('template_url'); ?>/img/about/abt.jpg" class="img-responsive mb-30" alt="">
                    <div class="section-title mb-30">
                        <h5>ABOUT US</h5>
                        <h2><?php the_title();?></h2>
                    </div><!-- /section-title -->

                    <p>Shanghai Exceed Industry has formed a unique and rich content enterprise culture during the recent years’ developing process. Being a power source for enterprise sustainable development, the development of enterprise culture has become a core-point of cohesion and solidarity.
                        《EMCC Declaration》is the essence of EMCC enterprise culture and mainly formed by EMCC Concept including Brand Concept, Service Concept, EMCC Aim and Spirit the three parts.
                        EMCC–Technology is source, perseverance makes success.
                        EMCC Aim: Eligible quality is the obligation for society, and good quality is the contribution for society.
                        EMCC Concept：To be your satisfied partner.
                        EMCC Spirit: Efficiency, communication, service, study.
                        EMCC Vision: Everyone works enthusiastically and happily in EMCC.
                        EMCC Mission: Provide customers with high added value products and services.
                        EMCC Magazine:《the Voice of EMCC》
                        EMCC has the latest, highest and best goals all the time, and it puts forward–“new forms, new ideas, new initiatives, new heights, new image and new world” during the financial crisis.
                        Undergoing rigorous training, EMCC staff combines unique management and manufacturing technology, verification of qualified processes, extensive manufacturing experience and customer foremost service spirit to produce the advanced level products.</p>

                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p><br>

                    <h3 class="mb-20">25 YEARS OF EXPERIENCE</h3>
                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>

                    <div class="row mt-30">
                        <div class="about-introduction">
                            <h4 class="mb-30">OUR VISION</h4>
                            <img src="<?php bloginfo('template_url'); ?>/img/about/abt3.jpg" class="img-responsive mb-20" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul class="vision">
                                <li><i class="fa fa-check"></i> &nbsp;Labore et dolore magna aliqua.</li>
                                <li><i class="fa fa-check"></i> &nbsp;Demonstraverunt lectores legere me.</li>
                                <li><i class="fa fa-check"></i> &nbsp;Velit esse molestie consequat</li>
                                <li><i class="fa fa-check"></i> &nbsp;Saepius autem vel eum iriure dolor.</li>
                                <li><i class="fa fa-check"></i> &nbsp;Quod ii legunt saepius autem vel eum.</li>
                            </ul><!-- /vision -->
                        </div>

                        <div class="about-introduction">
                            <h4 class="mb-30">OUR MISSION</h4>
                            <img src="<?php bloginfo('template_url'); ?>/img/about/abt2.jpg" class="img-responsive mb-20" alt="">
                            <p>Doloru ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul class="vision">
                                <li><i class="fa fa-check"></i> &nbsp;Velit esse molestie consequat</li>
                                <li><i class="fa fa-check"></i> &nbsp;Labore et dolore magna aliqua.</li>
                                <li><i class="fa fa-check"></i> &nbsp;Saepius autem vel eum iriure dolor.</li>
                                <li><i class="fa fa-check"></i> &nbsp;Quod ii legunt saepius autem vel eum.</li>
                                <li><i class="fa fa-check"></i> &nbsp;Demonstraverunt lectores legere me.</li>
                            </ul><!-- /vision -->
                        </div>
                    </div><!-- /row -->
            
                </div>
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