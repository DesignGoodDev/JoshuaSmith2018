<?php
/**
 * Template Name: Experiences
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <article>

        <?php //get_template_part( 'secondary-page-header' ); ?>

        <?php global $post; ?>
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
        <header id="page-heading" style="background-image: url(<?php echo $src[0]; ?> ) !important;" class="secondary-header">
            <div id="page-heading-content" class="secondary-header">
                <div id="page-heading-inner">
                    <h1 style="color:<?php the_field('h1_color'); ?>">
                        <?php the_field('h1_bottom_line'); ?>
                    </h1>
                    <h6 style="color:<?php the_field('h1_color'); ?>">
                        <?php the_field('h1_top_line'); ?>
                    </h6>
                </div>
            </div>
        </header>

        <div class="post full-width clearfix">

            <section id="exp-individuals">
                <div id="exp-individuals-content" class="center max680">
                	<div class="section-title">
                    	<h6><?php the_field('individuals_heading'); ?></h6>
                    </div>
                    <?php if(have_rows('options') ): ?>
                	<div id="exp-options" class="center">
                        <?php while(have_rows('options') ): the_row(); ?>
                        <div class="exp-option">
                            <h4><?php the_sub_field('title'); ?></h4>
                            <?php the_sub_field('description'); ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </section>

            <section id="exp-orgs">
                <div id="exp-orgs-content" class="center max680">
                	<div class="section-title gray">
                    	<h6><?php the_field('experiences_heading'); ?></h6>
                    </div>

                	<div id="exp-orgs-content-block" class="center">
                        <h3><?php the_field('experiences_subheading') ?></h3>
                        <h4><?php the_field('experiences_highlighted_text'); ?></h4>
                        <p><?php the_field('experiences_text'); ?></p>
                    </div>

                </div>
            </section>

            <?php $boxesimg = get_field('parallax_image_1'); ?>
            <section id="exp-boxes" style="background-image: url('<?php echo $boxesimg['url']; ?>');">
                <div class="boxes-content">

                    <div class="block-top">
                        <div class="circle-title">
                            <?php the_field('parallax_heading'); ?>
                        </div>
                        <?php the_field('top_left_box'); ?>
                    </div>
                    <div class="block-bottom" >
                        <?php the_field('bottom_right_box'); ?>
                    </div>
                </div>
            </section>

        </div>

    </article>

<?php endwhile; ?>


<?php get_footer(); ?>