<?php get_header(); ?>

<div class="breadcrumb">
    <div class="container">
        <h1 class="white"><?php single_cat_title(); ?></h1>
        <ul class="breadcrumb-list">
            <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
            <li class="bread-text">Products</li>
        </ul>
    </div><!-- /container -->
</div><!-- /slider -->


<section class="news-area">
    <div class="container">
        <div class="row">
        <?php $cat=get_the_category();$cat_id=$cat[0]->cat_ID;query_posts('order=asc&cat='.$cat_id);while (have_posts()):the_post();?>
            <div class="news-con">
                <div class="blog-wrapper mb-30">
                    <div class="blog-img">
                    <?php the_post_thumbnail();?>
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