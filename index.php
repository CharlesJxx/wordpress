<?php get_header(); ?>
	
	<div class="slider-area">
		<div class="slider-active owl-carousel">
			<div class="slider-wrapper vh d-flex" style="background-image:url(<?php bloginfo('template_url'); ?>/img/slider/slider1.jpg)">
				<div class="container">
					<div class="slider-content text-center slider-text-animation">
						<span>modern building company</span>
						<h2>WELCOME TO EMCC GROUP</h2>
						<div class="inner-content">
							<p>Your Devoted Business Partner.</p>
						</div>
						<a href="#">Read More</a>
					</div>	
				</div>
			</div><!-- /slider-wrapper -->

			<div class="slider-wrapper vh d-flex" style="background-image:url(<?php bloginfo('template_url'); ?>/img/slider/slider2.jpg)">
				<div class="container">
					<div class="slider-content text-center slider-text-animation">
						<span>Welcome To BuildUp</span>
						<h2>1145 SAND MAKING MACHINES SITE</h2>
						<div class="inner-content">
							<p>Big capacity &amp; Smooth Operation Greatly wins the Custone's Praise.</p>
						</div>
						<a href="#">Read More</a>									
					</div>				
				</div>
			</div><!-- /slider-wrapper -->

			<div class="slider-wrapper vh d-flex" style="background-image:url(<?php bloginfo('template_url'); ?>/img/slider/slider3.jpg)">
				<div class="container">
					<div class="slider-content text-center slider-text-animation">
						<span>Welcome To BuildUp</span>
						<h2>MOBILE CRUSHING PLANT SITE IN SAUDI ARABIA</h2>
						<div class="inner-content">
							<p>Multi-Functional &amp; Fliexible Machine,Frist-Class Design &amp; Complete Solutions.</p>
						</div>
						<a href="#">Read More</a>									
					</div>				
				</div>
			</div><!-- /slider-wrapper -->
		</div>
	</div><!-- /slider-area -->
	
	<section class="nopad-bt abt-worker">
        <div class="container">
            <div class="row">
                <div class="abt-worker-con">
                    <img src="<?php bloginfo('template_url'); ?>/img/about/worker.jpg" class="img-responsive worker" alt="">
                </div>

                <div class="abt-worker-con">
                    <div class="section-title mb-30">
                        <h5>ABOUT US</h5>
                        <h2>CREATE YOUR HOME</h2>
                    </div><!-- /section-title -->
                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="#" class="btn btn-default">View More</a>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <section class="bg-grey">
        <div class="container">
            <div class="section-title mb-50 text-center">
                <h5>SERVICES</h5>
                <h2>OUR CORE SERVICES</h2>
            </div><!-- /section-title -->

            <div class="row">
                <div class="services-con mb-30">
                    <div class="service-widget">
                        <img src="<?php bloginfo('template_url'); ?>/img/ico/repair.png" class="img-responsive" alt="">
                        <h3>FLOORS & ROOFS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua Ut enim ad veniam.</p>
                        <a href="#">Read More</a>
                    </div><!-- /service-widget -->
                </div>

                <div class="services-con mb-30">
                    <div class="service-widget">
                        <img src="<?php bloginfo('template_url'); ?>/img/ico/construction.png" class="img-responsive" alt="">
                        <h3>ROOMS & HALLS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua Ut enim ad veniam.</p>
                        <a href="#">Read More</a>
                    </div><!-- /service-widget -->
                </div>

                <div class="services-con mb-30">
                    <div class="service-widget">
                        <img src="<?php bloginfo('template_url'); ?>/img/ico/engineer.png" class="img-responsive" alt="">
                        <h3>BASEMENTS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua Ut enim ad veniam.</p>
                        <a href="#">Read More</a>
                    </div><!-- /service-widget -->
                </div>

                <div class="services-con mb-30">
                    <div class="service-widget">
                        <img src="<?php bloginfo('template_url'); ?>/img/ico/engineer.png" class="img-responsive" alt="">
                        <h3>ARCHITECTURE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua Ut enim ad veniam.</p>
                        <a href="#">Read More</a>
                    </div><!-- /service-widget -->
                </div>

                <div class="services-con mb-30">
                    <div class="service-widget">
                        <img src="<?php bloginfo('template_url'); ?>/img/ico/sketch.png" class="img-responsive" alt="">
                        <h3>CONSULTING</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua Ut enim ad veniam.</p>
                        <a href="#">Read More</a>
                    </div><!-- /service-widget -->
                </div>

                <div class="services-con mb-30">
                    <div class="service-widget">
                        <img src="<?php bloginfo('template_url'); ?>/img/ico/construction.png" class="img-responsive" alt="">
                        <h3>TRANSPORT GOODS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua Ut enim ad veniam.</p>
                        <a href="#">Read More</a>
                    </div><!-- /service-widget -->
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <section class="works">
        <div class="container">
            <div class="section-title mb-50 text-center">
                <h5>WORKS</h5>
                <h2>OUR LATEST PROJECTS</h2>
            </div>

            <div class="row mb-30">
                <?php query_posts('showposts=6',array('category_name' => 'Products')); while(have_posts()): the_post(); ?>
                <div class="works-con-pic nopad">
                    <div class="project-grid project-grid-home">
                        <div class="project-wrapper">
                            <div class="project-img">
                                <a href="#">
                                    <img src="<?php bloginfo('template_url'); ?>/img/works/1.jpg" alt="">
                                </a>
                                <div class="project-caption">
                                    <a class="protfolio-icon test-popup-link" href="<?php bloginfo('template_url'); ?>/img/works/1.jpg">
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
        </div>
    </section>

    <section class="testimonial">
        <div class="container mb-30">
            <div class="section-title mb-30">
                <h5>TESTIMONIAL</h5>
                <h2>MEET OUR CLIENTS</h2>
            </div><!-- /section-title -->

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonial-box">
                        <h4>Thomas bradley</h4>
                        <p class="author-text">Manager at Envato</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore.</p>
                        <img src="<?php bloginfo('template_url'); ?>/img/client/client1.jpg" class="img-responsive testi img-circle" alt="">
                    </div><!-- /testimonial-box -->
                </div><!-- /item -->

                <div class="item">
                    <div class="testimonial-box">
                        <h4>Makinson</h4>
                        <p class="author-text">Manager at Envato</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore.</p>
                        <img src="<?php bloginfo('template_url'); ?>/img/client/client2.jpg" class="img-responsive testi img-circle" alt="">
                    </div><!-- /testimonial-box -->
                </div><!-- /item -->

                <div class="item">
                    <div class="testimonial-box">
                        <h4>Thanos Mark</h4>
                        <p class="author-text">Manager at Envato</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore.</p>
                        <img src="<?php bloginfo('template_url'); ?>/img/client/client3.jpg" class="img-responsive testi img-circle" alt="">
                    </div><!-- /testimonial-box -->
                </div><!-- /item -->

                <div class="item">
                    <div class="testimonial-box">
                        <h4>Moto Namkamura</h4>
                        <p class="author-text">Manager at Envato</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore.</p>
                        <img src="<?php bloginfo('template_url'); ?>/img/client/client4.jpg" class="img-responsive testi img-circle" alt="">
                    </div><!-- /testimonial-box -->
                </div><!-- /item -->

                <div class="item">
                    <div class="testimonial-box">
                        <h4>Hong Lee</h4>
                        <p class="author-text">Manager at Envato</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore.</p>
                        <img src="<?php bloginfo('template_url'); ?>/img/client/client5.jpg" class="img-responsive testi img-circle" alt="">
                    </div><!-- /testimonial-box -->
                </div><!-- /item -->

                <div class="item">
                    <div class="testimonial-box">
                        <h4>Mark Curin</h4>
                        <p class="author-text">Manager at Envato</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore.</p>
                        <img src="<?php bloginfo('template_url'); ?>/img/client/client6.jpg" class="img-responsive testi img-circle" alt="">
                    </div><!-- /testimonial-box -->
                </div><!-- /item -->
            </div>
        </div><!-- /container -->
    </section>

    <section class="nopad-tp">
        <div class="container">
            <div class="section-title text-center mb-30">
                <h5>CLIENTS</h5>
                <h2>OUR HAPPY CLIENTS</h2>
            </div><!-- /section-title -->

            <div class="row">
                <div class="clients-con">
                    <img src="<?php bloginfo('template_url'); ?>/img/client/logo-01.png" class="img-responsive" alt="">
                </div>
                <div class="clients-con">
                    <img src="<?php bloginfo('template_url'); ?>/img/client/logo-02.png" class="img-responsive" alt="">
                </div>
                <div class="clients-con">
                    <img src="<?php bloginfo('template_url'); ?>/img/client/logo-03.png" class="img-responsive" alt="">
                </div>
                <div class="clients-con">
                    <img src="<?php bloginfo('template_url'); ?>/img/client/logo-04.png" class="img-responsive" alt="">
                </div>
                <div class="clients-con">
                    <img src="<?php bloginfo('template_url'); ?>/img/client/logo-05.png" class="img-responsive" alt="">
                </div>
                <div class="clients-con">
                    <img src="<?php bloginfo('template_url'); ?>/img/client/logo-06.png" class="img-responsive" alt="">
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
    <!-- responsive lightbox & dialog script -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.js"></script>
    <!-- Custom js -->
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

    <script>
    	$('.owl-carousel').owlCarousel({
    		loop:true,
    		margin:10,
    		nav:true,
   			items:3,
   			slideSpeed : 500,
            smartSpeed: 600,
        	paginationSpeed : 600,
   			autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
		})

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