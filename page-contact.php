<?php
/*
Template Name: Page-contact
*/
?>

<?php get_header(); ?>

    <div class="breadcrumb">
        <div class="container">
            <h1 class="white"><?php the_title();?></h1>
            <ul class="breadcrumb-list">
                <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
                <li class="bread-text">C<?php the_title();?></li>
            </ul>
        </div><!-- /container -->
    </div><!-- /slider -->

    <section class="contact-section">
        <div class="container">
            <div class="section-title mb-50">
                <h5>CONTACT</h5>
                <h2>FEEL FREE TO CONTACT US</h2>
            </div><!-- /section-title -->

            <div class="row mb-50" id="three-icons">
                <div class="three-icons">
                    <img src="<?php bloginfo('template_url'); ?>/img/ico/map.png" class="img-responsive mb-20" alt="">
                    <h3 class="mb-20">HEAD OFFICE</h3><hr>
                    <p>No.668 Xinzhuan Road,Shanghai,China</p>
                </div>

                <div class="three-icons">
                    <img src="<?php bloginfo('template_url'); ?>/img/ico/phone.png" class="img-responsive mb-20" alt="">
                    <h3 class="mb-20">PHONE</h3><hr>
                    <p>(+86) 021 31751393</p>
                </div>

                <div class="three-icons">
                    <img src="<?php bloginfo('template_url'); ?>/img/ico/mail.png" class="img-responsive mb-20" alt="">
                    <h3 class="mb-20">HEAD OFFICE</h3><hr>
                    <p>sales@crushermill.org</p>
                </div>
            </div><!-- /row -->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3416.635534041647!2d121.31045401556699!3d31.0920635752757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35b261d538c09c81%3A0xef203273966191ed!2z5Lit5Zu95LiK5rW35biC5p2-5rGf5Yy66I6Y56CW5YWs6LevNjY45Y-3!5e0!3m2!1szh-CN!2sus!4v1528875042139" allowfullscreen></iframe>

            <div class="comment-box mb-30">
                <h3 class="mb-30">LEAVE YOUR COMMENT</h3>
                <form class="contact-form">
                    <div class="row">
                        <div class="comment-fields">
                            <input type="text" class="form-control" id="firstname" placeholder="First Name*">
                        </div>
                        <div class="comment-fields">
                            <input type="text" class="form-control" id="lastname" placeholder="Last Name*">
                        </div>
                    </div><!-- /row -->
                    <div class="row">
                        <div class="comment-fields">
                            <input type="text" class="form-control" id="phone" placeholder="Phone">
                        </div>
                        <div class="comment-fields">
                            <input type="email" class="form-control" id="subject" placeholder="Subject">
                        </div>
                    </div><!-- /row -->
                    <textarea class="form-control mb-30" rows="6" placeholder="Message*"></textarea>
                    <button class="btn btn-default" type="button">SUBMIT</button>
                </form>
            </div><!-- /comment-box -->
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