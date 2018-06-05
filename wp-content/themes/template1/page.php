<?php get_header(); ?>

<div class="breadcrumb">
        <div class="container">
            <h1 class="white"><?php strtoupper(the_title()); ?></h1>
            <ul class="breadcrumb-list">
                <li><a href="<?php bloginfo('template_url'); ?>/index.php">Home</a></li>
                <li class="bread-text"><?php the_title(); ?></li>
            </ul>
        </div><!-- /container -->
    </div><!-- /slider -->

    <section>
        <div class="container">
            <div class="row">

                <?php get_sidebar(); ?>

                <div class="right-sidebar">
                    <img src="<?php bloginfo('template_url'); ?>/img/about/abt.jpg" class="img-responsive mb-30" alt="">
                    <div class="section-title mb-30">
                        <h5><?php the_title(); ?></h5>
                        <h2>WELCOME TO THE CONTOUR</h2>
                    </div><!-- /section-title -->

                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>

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