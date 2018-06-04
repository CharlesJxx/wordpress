<?php get_header(); ?>

    <div class="breadcrumb">
        <div class="container">
            <h1 class="white"><?php the_title(); ?></h1>
            <ul class="breadcrumb-list">
                <li><a href="<?php bloginfo('template_url'); ?>/index.php">Home</a></li>
                <li class="bread-text">About us</li>
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
                        <h5>ABOUT US</h5>
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
    

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-con mb-30">
                    <h3 class="footer-title">ABOUT CONTOUR</h3>
                    <img src="<?php bloginfo('template_url'); ?>/img/logo/logo.png" class="img-responsive footer-logo" alt="">
                    <p class="footer-text">Our construction management professio nals organize, lead and manage the people, materials and processes of truction utilizing construction management professionals</p>
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-youtube-play"></i></a></li>
                    </ul>
                </div>

                <div class="footer-con mb-30">
                    <h3 class="footer-title">CONTOUR SERVICES</h3>
                    <ul class="footer-menu">
                        <li><a href="<?php bloginfo('template_url'); ?>/services.php">Floor & Roofing</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/services.php">Rooms & Halls</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/services.php">Basements</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/services.php">Architecture</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/services.php">Plan Modelling</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/about.php">About Us</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/careers.php">Career</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/history.php">Company History</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/partners.php">Partners</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/contact.php">Contact</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/news-detail.php">Blog Details</a></li>
                    </ul>
                </div>

                <div class="footer-con mb-30">
                    <h3 class="footer-title">NEWSLETTER</h3>
                    <p>Sign up for new Recover Construction Company content, updates, surveys & offers.</p>
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" id="enter-email-filed" placeholder="Enter Your Email" aria-describedby="basic-addon1">
                            <span class="input-group-addon" id="basic-addon1">SUBSCRIBE</span>
                        </div>
                    </form>
                    <p class="location">Address: &nbsp;45, South Ave, Australia - 600 876</p>
                    <p class="location">Phone: &nbsp;(+61) 6273 663 21</p>
                    <p class="location">Email: &nbsp;enquiry@contour.com</p>
                </div>
            </div><!-- /row -->

            <div class="sub-footer">
                <div class="row">
                    <div class="sub-footer-con text-left"> Copyright © 2018. <span class="yellow">CONTOUR</span> - Construction and Building</div>

                    <div class="sub-footer-con text-right"> Developed By <a href="https://themeforest.net/user/himalayanthemes/portfolio"><span class="yellow">HimalayanThemes</span></a></div>
                </div><!-- /row -->
            </div><!-- /sub-footer -->
        </div><!-- /container -->
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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