<?php get_header(); ?>

    <div class="breadcrumb">
        <div class="container">
            <h1 class="white"><?php foreach((get_the_category()) as $category){echo $category->cat_name;}?></h1>
            <ul class="breadcrumb-list">
                <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
                <li class="bread-text">Products</li>
            </ul>
        </div><!-- /container -->
    </div><!-- /slider -->

    <section class="project-area">
        <div class="container">
            <div class="row">
                <div class="right-sidebar">
                    <div class="section-title mb-30">
                        <h5>PRODUCT DETAILS</h5>
                        <h2><?php the_title();?></h2>
                    </div><!-- /section-title -->
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full',['class' => ' img-responsive mb-30']);}?>
                    <p><?php echo $post->post_content; ?></p>

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