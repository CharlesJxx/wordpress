<?php get_header(); ?>

<div class="breadcrumb">
    <div class="container">
        <h1 class="white">Products</h1>
        <ul class="breadcrumb-list">
            <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
            <li class="bread-text">Products</li>
        </ul>
    </div><!-- /container -->
</div><!-- /slider -->


<section class="news-area">
    <div class="container">
        <div class="row">
            <?php query_posts('showposts=9'); while(have_posts()): the_post(); ?>
            <div class="news-con">
                <div class="blog-wrapper mb-30">
                    <div class="blog-img">
                        <img src="<?php bloginfo('template_url'); ?>/img/blog/news1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="blog-text">
                        <div class="blog-info">
                            <h4><?php echo wp_trim_words( get_the_title(), 20 ); ?></h4>
                            <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 50,"……"); ?></p>
                            <a href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                        <div class="date">
                            <h2><?php the_time('d') ?></h2>
                            <small><?php the_time('m') ?></small>
                        </div>
                    </div>
                </div><!-- /blog-wrapper -->
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
<!-- Custom js -->
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>
</html>