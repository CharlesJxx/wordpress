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
                    <?php $cat=get_the_category();$cat_id=$cat[0]->cat_ID;query_posts('order=asc&cat='.$cat_id);?>
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full',['class' => ' img-responsive mb-30']);}?>
                    <div class="section-title mb-30">
                        <h5>ABOUT US</h5>
                        <h2>WELCOME TO THE CONTOUR</h2>
                    </div><!-- /section-title -->

                    <p><?php echo $post->post_content; ?></p>
            
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