<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-con mb-30">
                    <h3 class="footer-title">ABOUT CONTOUR</h3>
                    <img src="<?php bloginfo('template_url'); ?>/img/logo/logo.png" class="img-responsive footer-logo" alt="">
                    <p class="footer-text">We Shanghai Exceed Industry Co., Ltd is a high-tech Mining machinery enterprise. 
In the past 20 years, we devote to producing mining equipments, sand making machines and industrial grinding mills. 
Till now, our products are sold to 75 countries, being the popular equipments in global crushing and grinding industry.</p>
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
                    <h3 class="footer-title">CONTOUR PRODUCTS</h3>
                    <ul class="footer-menu">
                        <li><a href="<?php the_permalink(); ?>"><?php wp_list_cats('&optioncount=0&hierarchical=1&hide_empty=0&child_of=1'); ?></li>
                        <!-- <li><a href="services.php">Floor & Roofing</a></li>
                        <li><a href="services.php">Rooms & Halls</a></li>
                        <li><a href="services.php">Basements</a></li>
                        <li><a href="services.php">Architecture</a></li>
                        <li><a href="services.php">Plan Modelling</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="careers.php">Career</a></li>
                        <li><a href="history.php">Company History</a></li>
                        <li><a href="partners.php">Partners</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="news-detail.php">Blog Details</a></li> -->
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
                    <p class="location">Address: &nbsp;No.668 Xinzhuan Road,Shanghai,China</p>
                    <p class="location">Phone: &nbsp;(+86) 021 31751393</p>
                    <p class="location">Email: &nbsp;sales@crushermill.org</p>
                </div>
            </div><!-- /row -->

            <div class="sub-footer">
                <div class="row">
                    <div class="sub-footer-con text-left"> Copyright © 2018. <span class="yellow"><?php bloginfo('name'); ?></span> - Construction and Building</div>

                    <div class="sub-footer-con text-right"> Powered By <a rel="external" title="lanthy" class="link" href="#"><span class="yellow">lanthy</span></a></div>
                </div><!-- /row -->
            </div><!-- /sub-footer -->
        </div><!-- /container -->
    </footer>
	
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <?php wp_footer(); ?>
