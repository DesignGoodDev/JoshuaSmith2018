<?php

/**

 * @package WordPress

 * @subpackage Adapt Theme

 * Template Name: Interior Design

 */

?>



<?php get_header(); ?>



<?php while ( have_posts() ) : the_post(); ?>

    <article>

    	<?php get_template_part( 'secondary-page-header' ); ?>

        <div class="post full-width clearfix">

        	<div id="page-top-quote" class="center cardo">

            	<?php the_field('top_quote'); ?>

            </div><!-- #page-top-quote -->

            <section id="interior-1">
                <div id="interior-1-content" class="center">
                	<h2 class="cardo-it"><?php the_field('interior-1-heading-top'); ?></h2>
                </div>

                <div id="interior-1-content" class="max600">
                	<h4><?php the_field('interior-1-heading-bottom'); ?></h4>
                </div>

                <div id="interior-1-content" class="center" style="position: relative;">
                    <ul class="services">
                        <li class="box-text"><p><?php the_field('interior-1-2-box-text1'); ?></p></li>

                        <li><img src="<?php the_field('interior-1-2-box-img1'); ?>" alt="Fabric Swatches Interior Design" title="Fabric Swatches Interior Design" /></li>

                        <li class="box-text"><p><?php the_field('interior-1-2-box-text2'); ?></p></li>

                        <li><img src="<?php the_field('interior-1-2-box-img2'); ?>" alt="Architectural drawings for Interior Design" title="architectural drawings for interior design" /></li>

                        <li class="box-text"><p><?php the_field('interior-1-2-box-text3'); ?></p></li>

                        <li><img src="<?php the_field('interior-1-2-box-img3'); ?>" alt="Pattern matching for Interior Design" title="Pattern matching for Interior Design" /></li>

                        <li class="box-text"><p><?php the_field('interior-1-2-box-text4'); ?></p></li>

                        <li><img src="<?php the_field('interior-1-2-box-img4'); ?>" alt="Interior Design Consultation" title="Interior Design Consultation" /></li>

                        <li class="box-text"><p><?php the_field('interior-1-2-box-text5'); ?></p></li>
                    </ul>
                    <div id="recent-anchor" style="display: block; clear: both; position: absolute; bottom: 40px;"></div>
                </div>


                <div id="interior-1">
                    <div id="interior-1-content" class="center">
                        <p class="heading cardo"><a href="#interior-3-content" style="color: inherit;"><em><?php the_field('interior-1-2-bottom-italic-text'); ?></em></a> <?php the_field('interior-1-2-bottom-text'); ?></p>
                    </div>
                </div>

                <hr class="separator">
            </section>

            <section id="interior-2">

                <div id="interior-2-content" class="center">
                    <h2 class="cardo-it less-margin"><?php the_field('recent-projects-heading'); ?></h2>
                </div>

                <div id="interior-2-content" class="center">
                    <p class="cardo heading" style="letter-spacing: 2px;"><?php the_field('recent-projects-heading-subtitle'); ?></h2>
                </div>

                <div id="interior-2-content" class="center">

                    <ul class="services">

                        <li><a href="<?php the_field('recent-projects-img1'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img1'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>

                        <li><a href="<?php the_field('recent-projects-img2'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img2'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>

                        <li><a href="<?php the_field('recent-projects-img3'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img3'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>
                        <li><a href="<?php the_field('recent-projects-img4'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img4'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>

                        <li><a href="<?php the_field('recent-projects-img5'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img5'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>

                        <li><a href="<?php the_field('recent-projects-img6'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img6'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>
                        <li><a href="<?php the_field('recent-projects-img7'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img7'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>

                        <li><a href="<?php the_field('recent-projects-img8'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img8'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>

                        <li><a href="<?php the_field('recent-projects-img9'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img9'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>
                        <li><a href="<?php the_field('recent-projects-img10'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img10'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>

                        <li><a href="<?php the_field('recent-projects-img11'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img11'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>

                        <li><a href="<?php the_field('recent-projects-img12'); ?>" rel="prettyPhoto[gal-1]">
                        	<div class="recent-project" style="background-image: url(<?php the_field('recent-projects-img12'); ?>); background-size: cover; width: auto; height: 100%;" ></div>
                        </a></li>

                    </ul>
                </div>
            </section>

            <section id="interior-2" class="more-margin">
                <div id="interior-2-content" class="center press">
                    <h2 class="cardo-it"><?php the_field('interior_press_heading'); ?></h2>
                    <?php if( have_rows('press_items') ): ?>
                        <ul class="press-items">
                        <?php while( have_rows('press_items') ): the_row();
                            // vars
                            $image = get_sub_field('press_item_image');
                            $size = get_sub_field('press_item_size');
                            ?>

                            <li class="press-item <?php echo $size; ?>">
                                <div id="press-item-top">
                                    <img src="<?php echo $image; ?>" />
                                </div><!-- #press-item-top -->
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </section>


            <section id="interior-3">
                <div id="interior-full-width-img">
                </div>
                <div id="interior-3-content-top" class="max600">
                    <h4 class="white"><?php the_field('interior-3-heading-top'); ?></h4>
                </div>

                 <div id="interior-3-content">
                    <h2 class="cardo-it"><?php the_field('interior-3-heading-bottom'); ?></h2>
                    <div id="interior-3-bottom"></div>
                 </div>
            </section>

        </div>

    </article>

<?php endwhile; ?>

<div id="footer" class="clearfix">
    <div id="footer-contact">
        <div id="footer-contact-content" class="clearfix">
            <div id="interior-design-contact-form">
                <?php echo do_shortcode('[gravityform id="7" title="false" description="false"]'); ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>