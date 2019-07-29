<?php
/**
 * Template Name: Sacred Spaces
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <article>

        <?php global $post; ?>
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
        <header id="page-heading" style="background-image: url(<?php echo $src[0]; ?> ) !important;" class="secondary-header">
            <div id="page-heading-content" class="secondary-header">
                <div id="page-heading-inner">
                    <h6 style="color:<?php the_field('h1_color'); ?>">
                        <?php the_field('h1_top_line'); ?>
                    </h6>
                    <h1 style="color:<?php the_field('h1_color'); ?>">
                        <?php the_field('h1_bottom_line'); ?>
                    </h1>
                </div>
            </div>
            <div class="blog-white-header textcenter">
                <?php if(get_field('x_small_text') ): ?>
                <h6><?php the_field('x_small_text'); ?></h6>
                <?php endif; ?>
                <h1><?php the_field('x_heading'); ?></h1>
                <div class="x-bg center cardo">
                    <div class="x-block-top">
                        <h6><?php the_field('top_quadrant'); ?></h6>
                    </div>
                    <div class="x-block-middle">
                        <h6><?php the_field('left_quadrant'); ?></h6>
                        <h6><?php the_field('right_quadrant'); ?></h6>
                    </div>
                    <div class="x-block-bottom">
                        <h6><?php the_field('bottom_quadrant'); ?></h6>
                    </div>
                </div>
            </div>
        </header>

        <div class="post full-width clearfix">

            <section id="spaces-description">
                <div class="spaces-content max1024">
                    <div class="section-title gray">
                        <h6><?php the_field('description_heading'); ?></h6>
                    </div>
                    <div class="spaces-desc-content max680">
                        <?php the_field('description'); ?>
                    </div>
                </div>
            </section>

            <?php $parallax = get_field('parallax_image_1'); ?>
            <section id="spaces-parallax" style="background-image: url('<?php echo $parallax['url']; ?>');">
                <div class="boxes-content">
                    <div class="block-top">
                        <?php the_field('top_right_box'); ?>
                    </div>
                    <div class="block-bottom">
                        <?php the_field('bottom_left_box'); ?>
                    </div>
                </div>
            </section>

        </div>
    </article>
<?php endwhile; ?>

<?php get_footer(); ?>