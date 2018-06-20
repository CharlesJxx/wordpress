<?php get_header(); ?>


    <div class="breadcrumb">
        <div class="container">
            <h1 class="white">OUR PRODUCTS</h1>
            <ul class="breadcrumb-list">
                <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
                <li class="bread-text">PRODUCTS</li>
            </ul>
        </div><!-- /container -->
    </div><!-- /slider -->

    <section>
        <div class="container">
            <div class="mb-50 text-center">
                <button class="filter-button" id="btn-one" data-filter="all">All</button>
                <button class="filter-button" data-filter="boring-machine">Boring Machine</button>
                <button class="filter-button" data-filter="coal-roadheader">Coal Roadheader</button>
                <button class="filter-button" data-filter="crushing-plant">Crushing Plant</button>
                <button class="filter-button" data-filter="mill-machine">Mill Machine</button>
                <button class="filter-button" data-filter="mining-equipment">Mining Equipment</button>
                <button class="filter-button" data-filter="mobile-crusher">Mobile Crusher</button>
                <button class="filter-button" data-filter="other-equipment">Other Equipment</button>
                <button class="filter-button" data-filter="sand-making-machine">Sand Making Machine</button>
                <hr>
            </div>

            <div class="row">
                <?php query_posts(array('category_name' => 'Products')); while(have_posts()): the_post(); ?>
                <div class="project-con filter <?php $categories = get_the_category();foreach ($categories as $category ) {echo $category->slug;}?>">
                    <div class="project-grid">
                        <div class="project-wrapper">
                            <div class="project-img">
                                <a href="#">
                                <?php the_post_thumbnail();?>
                                </a>
                                <div class="project-caption">
                                    <a class="protfolio-icon image-link test-popup-link" href="<?php bloginfo('template_url'); ?>/img/works/1.jpg">
                                        <i class="fa fa-arrows-alt" ></i>
                                    </a>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>   
                                    <span>Product</span>                                   
                                </div>
                            </div>
                        </div><!-- /project-wrapper -->
                    </div><!-- /project-grid -->
                </div>

                <?php endwhile; wp_reset_query(); ?>

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
    <!-- responsive lightbox & dialog script -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.js"></script>
    <!-- Custom js -->
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

    <script>
        // MagnificPopup
        $('.test-popup-link').magnificPopup({
            type: 'image',
              gallery:{
                enabled:true
              }
        });
    </script>
</body>
</html>