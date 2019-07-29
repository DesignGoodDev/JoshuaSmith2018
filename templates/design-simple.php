<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 * Template Name: Design Made Simple
 */
?>

<?php get_header(); ?>
<script type='text/javascript' src='http://brightbazaaar.wpengine.netdna-cdn.com/wp-content/plugins/before-after-image-slider-lite/jquery.nouislider.js?ver=7.0.10'></script>
<?php while ( have_posts() ) : the_post(); ?>
    <article>
    	<?php global $post; ?>
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
        <header id="page-heading" style="background-image: url(http://www.joshuasmithinc.com/wp-content/uploads/2017/07/JoshSmith_Coaching_EDesign_Header.png) !important;" class="secondary-header">
            <div id="page-heading-content" class="center secondary-header">
            	<h1 class="fjalla" style="color:<?php the_field('h1_color'); ?>"><span class="cardo"><?php the_field('h1_top_line'); ?></span><br /><?php the_field('h1_bottom_line'); ?></h1>
                <div id="page-header-content-cta" class="cardo">
                	<a href="#newsletter" id="fancy-cta"><span class="fjalla">Be in a joyful place</span><br />get tips and inspiration delivered to your inbox</a>
                	<div id="page-header-content-cta-graphic">
                    <img src="<?php bloginfo('template_directory'); ?>/images/header-cta-bottom.png" width="13" height="14" />
                    </div><!-- #page-header-content-cta-graphic -->
				</div><!-- #page-header-content-cta -->
            </div><!-- #page-heading-content -->
        </header><!-- /page-heading -->
        <div class="post full-width clearfix">
        	<div id="page-top-quote" class="center cardo">
            	<?php the_field('top_quote'); ?>
            </div><!-- #page-top-quote -->
            <section id="simple-1">
                <div id="simple-1-content" class="medium">
                	<h3 class="fjalla"><?php the_field('section_1_heading'); ?></h3>
                </div><!-- #simple-1-content -->
            </section><!-- #simple-1 -->
            <section id="simple-2">
                <div id="simple-2-content" class="medium">
                    <div id="col1">
                        <img src="http://joshuasmithco.com/wp-content/uploads/2016/08/simple-2-1.jpg" />
                        <h3 class="cardo"><?php the_field('section_2_left_column'); ?></h3>
                    </div>
                    <div id="col2">
                        <img src="http://joshuasmithco.com/wp-content/uploads/2016/08/simple-2-2.jpg" />
                        <h3 class="cardo"><?php the_field('section_2_middle_column'); ?></h3>
                    </div>
                    <div id="col3">
                        <img src="http://joshuasmithco.com/wp-content/uploads/2016/08/simple-2-3.jpg" />
                        <h3 class="cardo"><?php the_field('section_2_third_column'); ?></h3>
                    </div>
                </div>
            </section>
            <section id="simple-3">
                <?php echo do_shortcode('[parallax-scroll id="160"]'); ?>
             </section><!-- #home-6 -->
            <section id="simple-4">
                <div id="simple-4-content" class="max1024">
                    <h2 class="cardo-it"><?php the_field('section_3_heading'); ?></h2>
                    <h3 class="cardo-it">1</h3><h3 class="fjalla"><?php the_field('section_3_circle_1_text'); ?></h3>
                    <p><?php the_field('section_3_circle_subtitle'); ?></p>
                    <div id="col1">
                        <h3 class="cardo"><?php the_field('section_3_left_column_heading'); ?></h3>
                        <p><?php the_field('section_3_left_column_text'); ?></p>
                    </div>
                    <div id="col2">
                        <h3 class="cardo"><?php the_field('section_3_middle_column'); ?></h3>
                    </div>
                    <div id="col3">
                        <h3 class="cardo"><?php the_field('section_3_right_column_heading'); ?></h3>
                        <p><?php the_field('section_3_right_column_text'); ?></p>
                    </div>
                    <hr class="separator">
                    <h3 class="fjalla normal" style="padding-top: 40px;"><?php the_field('section_3_column_heading'); ?></h3>
                    <div class="column-wrapper">
                        <div id="col4">
                            <h3 class="cardo"><?php the_field('section_3_left_column_heading_bottom'); ?></h3>
                            <p><?php the_field('section_3_left_column_text_bottom'); ?></p>
                        </div>
                        <div id="col5">
                            <h3 class="cardo"><?php the_field('section_3_right_column_heading_bottom'); ?></h3>
                            <p><?php the_field('section_3_right_column_text_bottom'); ?></p>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <h3 class="cardo-it" style="position: absolute;left: 0;right: 0;margin-top: 30px;font-size: 30px;">2</h3><h3 class="fjalla"><?php the_field('section_3_circle_2_text'); ?></h3>
                </div>
            </section>
            <section id="simple-5">
                <div id="simple-5-content">
                    <h3 class="fjalla left"><?php the_field('section_4_left_column_heading'); ?></h3>
                    <img src="<?php the_field('section_4_right_column_image'); ?>" />
                </div>
            </section>
            <section id="simple-6">
                <div id="simple-6-content" class="medium">
                    <h3 class="cardo-it">3</h3><h3 class="fjalla"><?php the_field('section_5_circle_text'); ?></h3>
                </div>
                <div id="simple-6-content" class="max1024">
                    <div id="col-1-third">
                        <h2 class="fjalla"><?php the_field('section_5_left_column_heading'); ?></h2>
                        <img src="<?php the_field('section_5_left_column_image'); ?>" />
                    </div>
                    <div id="col-2-third">
                        <img src="<?php the_field('section_5_right_column_image'); ?>" />
                    </div>
                </div>
            </section>
            <section id="simple-7">
                <div id="simple-7-content" class="max1024">
                    <div id="col-1-half">
                        <img src="<?php the_field('section_6_left_column_image'); ?>" />
                    </div>
                    <div id="col-1-half-last">
                        <h3 class="cardo"><?php the_field('section_6_right_column_top_heading'); ?></h3>
                        <div id="simple-7-bottom"></div>
                        <h3 class="cardo"><?php the_field('section_6_right_column_bottom_heading'); ?></h3>
                        <img src="http://joshuasmithco.com/wp-content/uploads/2016/08/design-delivery.jpg" />
                    </div>
                </div>
            </section>
            <section id="simple-8">
                <div id="simple-8-content" class="medium">
                    <h3 class="cardo"><?php the_field('section_7_top_text'); ?></h3>
                </div>
                <div id="simple-8-content">
                    <div class="image-comparator overlay hover" style="width: 100%;" data-ic-slider-value="100.00">
                        <div class="images">
                            <div class="left" style="width: 939px;">
                                <img src="http://joshuasmithco.com/wp-content/uploads/2016/08/before-after.jpg" alt="" style="width: 939px; height: auto;" data-jpibfi-indexer="0" class="">
                            </div>
                            <div class="right">
                                <img src="http://joshuasmithco.com/wp-content/uploads/2016/08/before-after-after.jpg" alt="" style="width: 939px; height: auto;" data-jpibfi-indexer="1" class="">
                            </div>
                            <div class="ic-clear">
                                <!-- Empty -->
                            </div>
                        </div>
                        <div class="slider">
                        </div>
                    </div>
                    <!--<img src="http://joshuasmithco.com/wp-content/uploads/2016/08/before-after.jpg" />
                    <hr class="separator" style="max-width: 939px"><!--Need to create scrolling effect check psd for reference-->
                </div>
            </section>
            <section id="simple-9">
                <div id="simple-9-content">
                    <h2 class="cardo-it"><?php the_field('section_7_heading'); ?></h2>
                    <ul>
                        <li><h2 class="cardo-it">1.</h2><p><?php the_field('section_7_box_1_text'); ?></p></li>
                        <li><h2 class="cardo-it">2</h2><p><?php the_field('section_7_box_2_text'); ?></p></li>
                        <li><h2 class="cardo-it">3.</h2><p><?php the_field('section_7_box_3_text'); ?></p></li>
                        <li><h2 class="cardo-it">4.</h2><p><?php the_field('section_7_box_4_text'); ?></p></li>
                        <li><h2 class="cardo-it">5</h2><p><?php the_field('section_7_box_5_text'); ?></p></li>
                        <li><h2 class="cardo-it">6.</h2><p><?php the_field('section_7_box_6_text'); ?></p></li>
                        <li><h2 class="cardo-it">7.</h2><p><?php the_field('section_7_box_7_text'); ?></p></li>
                        <li><h2 class="cardo-it">8.</h2><p><?php the_field('section_7_box_8_text'); ?></p></li>
                        <li><h2 class="cardo-it">9.</h2><p><?php the_field('section_7_box_9_text'); ?></p></li>
                    </ul>
                </div>
            </section>
            <section id="simple-10">
                <div id="simple-10-content" class="medium">
                    <h3 class="fjalla"><?php the_field('section_8_top_heading'); ?></h3>
                    <div id="tell-us-anchor"></div>
                    <h3 class="cardo"><?php the_field('section_8_bottom_text'); ?></h3>
                </div>
            </section>
            <section id="interior-3">
                <div id="interior-3-content" class="medium">
                    <h3 class="interior-3"><?php the_field('section_9_top_heading'); ?></h2>
                </div>
                 <div id="interior-3-content">
                    <h2 class="cardo-it"><?php the_field('section_9_bottom_text'); ?></h2>
                    <div id="interior-3-bottom"></div>
                 </div>
            </section>
        </div><!-- /post -->
    </article>
<?php endwhile; ?>

<?php get_footer(); ?>