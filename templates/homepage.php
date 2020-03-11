<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

    <div class="home-wrap clearfix">
        <?php global $post; ?>
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
    	<section id="home-hero" style="background-image: url(<?php echo $src[0]; ?> ) !important;">
            <div id="home-hero-content" class="center max1024" >
                <div id="home-hero-content-block">
                    <?php the_field('positioning_statement'); ?>
                </div>
            </div>
        </section><!-- #home-hero -->

        <section id="mailing-list-cta">
            <div class="center">
                <?php the_field('mailing_list_text'); ?>
            </div>
        </section>

        <section id="home-about">
            <div class="section-title">
                <h6><?php the_field('about_heading'); ?></h6>
            </div>
            <div class="center max680">
                <?php the_field('about_text'); ?>
            </div>
        </section>

        <?php $parallax1 = get_field('parallax_image_1'); ?>
        <section id="home-parallax-1" style="background-image:url('<?php echo $parallax1['url']; ?>');">
            &nbsp;
        </section>

        <section id="home-services">
            <div id="home-services-content" class="center max1024">
                <h2 class="textcenter"><?php the_field('services_heading'); ?></h2>

                <!-- <div class="center max680"> -->
                    <div class="video-responsive mb-60">
                        <iframe src="https://player.vimeo.com/video/396947168" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                <!-- </div> -->

                <div id="home-services-content-block">

                    <div id="home-services-top">
                        <?php $topimg = get_field('section_7_top_image'); ?>
                        <div class="home-services-img" style="background-image: url('<?php echo $topimg['url']?>');">
                            &nbsp;
                        </div>

                        <div class="home-services-text">
                            <h4 class="services-title"><?php the_field('section_7_top_title'); ?></h4>
                            <div class="services-description">
                                <h3><?php the_field('section_7_top_content'); ?></h3>
                                <p><a href="<?php the_field('section_7_top_button_link'); ?>"><?php the_field('section_7_top_button_text'); ?></a></p>
                            </div>
                        </div>

                    </div>

                    <div id="home-services-middle">
                        <?php $middleimg = get_field('section_7_middle_image'); ?>

                        <div class="home-services-text">
                        	<h4 class="services-title"><?php the_field('section_7_middle_title'); ?></h4>
                            <div class="services-description">
                                <h3><?php the_field('section_7_middle_content'); ?></h3>
                                <p><a href="<?php the_field('section_7_middle_button_link'); ?>"><?php the_field('section_7_middle_button_text'); ?></a></p>
                            </div>
                        </div>

                        <div class="home-services-img" style="background-image: url('<?php echo $middleimg['url']; ?>');">
                            &nbsp;
                        </div>
                    </div>

                    <div id="home-services-bottom">
                        <?php $bottomimg = get_field('section_7_bottom_image'); ?>
                        <div class="home-services-img" style="background-image: url('<?php echo $bottomimg['url']; ?>');">
                            &nbsp;
                        </div>

                        <div class="home-services-text">
                        	<h4 class="services-title"><?php the_field('section_7_bottom_title'); ?></h4>
                            <div class="services-description">
                                <h3><?php the_field('section_7_bottom_content'); ?></h3>
                                <p><a href="<?php the_field('section_7_bottom_button_link'); ?>"><?php the_field('section_7_bottom_button_text'); ?></a></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section><!-- #home-services -->

        <?php $boxesimg = get_field('boxes_section_image'); ?>
    	<section id="home-boxes" style="background-image: url('<?php echo $boxesimg['url']; ?>');">
            <div class="boxes-content">
                <div class="block-top">
                    <?php the_field('top_right_box'); ?>
                </div>

                <div class="block-bottom" >
                    <?php the_field('bottom_left_box'); ?>
                </div>
            </div>
        </section><!-- #home-boxes -->

        <section id="home-testimonials">
            <div class="center max1024 textcenter">
                <div class="section-title gray">
                    <h6><?php the_field('testimonials_heading'); ?></h6>
                </div>
                <div class="flexslider">
                    <?php if( have_rows('testimonials') ): ?>
                    <ul>
                    <?php while( have_rows('testimonials') ): the_row(); ?>
                        <li>
                        <h3>"<?php the_sub_field('testimonial_content'); ?>"</h3>
                        <h6 class="caps">—<?php the_sub_field('credit'); ?></h6>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="home-portfolio-cta">
			<div id="home-cta-full-width-img" style="background-image: url(<?php the_field('portfolio_cta_image'); ?>);">
			</div>

			<div id="home-portfolio-cta-content" class="">
				<h3 class="home-portfolio-cta"></h3>
				<h2 class="cardo-it"><?php the_field('portfolio_cta_content'); ?></h2>
				<a href="<?php the_field('portfolio_cta_link'); ?>"><?php the_field('portfolio_cta_link_text'); ?></a>
			</div>
        </section><!-- home-portfolio-cta -->

    	<!-- <section id="home-blog">
            <h4>from the conscious home blog:</h4>
            <div id="home-blog-content" class="center">
                <div id="home-blog-content-block" class="center">
                    <?php //echo do_shortcode('[numixslider id="1"]'); ?>
                </div>
            </div>
        </section> -->

    	<!-- <section id="contact-upper">
            <div class="center textcenter max1024">
                <h4 class="tan-text">Contact Joshua</h4>
                <h3 class="tan-text center">Contact me so we can discuss where you are, where you want to be and the blueprint to get you there.</h3>
                <div class="contact-upper-border"></div>
            </div>
        </section> -->

        <!-- <section id="contact-form">
            <div id="contact-form-content" class="clearfix">
                <?php
                //$contactform = get_field('contact_form_shortcode');
                ?>
                <?php //echo do_shortcode($contactform); ?>
                <?php //echo do_shortcode('[gravityform id="9" title="false" description="false"]') ?>
            </div>
        </section> -->

    </div><!-- /home-wrap -->

    <div id="contact-anchor" style="position: absolute; bottom: 150px; display: block;"></div>

    <script type="text/javascript">
        jQuery(window).load(function() {
            jQuery('.flexslider > ul').addClass('slides');
            jQuery('.flexslider').flexslider({
                slideshow: true,
                prevText: "",
                nextText: ""
            });
        });
    </script>
<?php get_footer(); ?>