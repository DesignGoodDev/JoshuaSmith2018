<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <article>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php $thumb = get_the_post_thumbnail_url(); ?>
            <header id="page-heading" style="background-image: url('<?php echo $thumb; ?>');" class="secondary-header">
        <?php else: ?>
            <header id="page-heading" class="secondary-header">
        <?php endif; ?>

            <div id="page-heading-content" class="secondary-header">
                <?php if(get_field('h1_top_line') ): ?>
                <div id="page-heading-inner">
                    <h6 style="color:<?php the_field('h1_color'); ?>">
                        <?php the_field('h1_top_line'); ?>
                    </h6>
                    <h1 style="color:<?php the_field('h1_color'); ?>">
                        <?php the_field('h1_bottom_line'); ?>
                    </h1>
                </div>
                <?php else: ?>
                <div id="page-heading-inner">
                    <h1><?php the_title(); ?></h1>
                </div>
                <?php endif; ?>
            </div><!-- #page-heading-content -->

        </header><!-- /page-heading -->

        <div class="post clearfix">
            <section>
                <?php the_content(); ?>
            </section>

        </div><!-- /entry -->
    </article><!-- /post -->

<?php endwhile; ?>

<?php get_footer(); ?>