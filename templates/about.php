<?php
/**
 * Template Name: About
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <article>

        <?php get_template_part( 'secondary-page-header' ); ?>

        <div class="post full-width clearfix">
            <section id="about-bio">
                <div id="about-bio-content" class="center max680">
                	<div class="section-title">
                    	<h6><?php the_field('bio_heading'); ?></h6>
                    </div>

                    <div id="about-3-content-1" class="center textcenter">
                        <?php if( get_field('heading_2') ): ?>
                            <h3 class="blue line"><?php the_field('heading_2'); ?></h3>
                        <?php endif ?>
                        <?php the_field('text_2'); ?>
                    </div>

                	<!-- <div id="about-bio-content-block" class="center">
                        <?php //the_field('bio_text'); ?>
                    </div> -->

                </div>
            </section>

            <?php $parallax = get_field('parallax_image_1'); ?>
            <section id="about-parallax" style="background-image:url('<?php echo $parallax['url']; ?>');">
                &nbsp;
            </section>

            <section id="about-3">
                <div id="about-3-content-2" class="center textcenter">
                    <h3 class="blue line"><?php the_field('heading_3'); ?></h3>
                    <?php the_field('text_3'); ?>
                </div>
            </section>

            <section id="about-press">
                <h3 class="blue line"><?php the_field('press_heading'); ?></h3>
                <?php if( have_rows('press_items') ): ?>
                    <ul class="press-items">
                    <?php	//$PressCount = 1; ?>
                    <?php while( have_rows('press_items') ): the_row();
                        // vars
                        $image = get_sub_field('press_item_image');
                        //$title = get_sub_field('press_item_title');
                        //$linkint = get_sub_field('press_item_file');
                        //$link = get_sub_field('press_item_link');
                        ?>
                        <li class="press-item">
                            <div class="press-item-top">
                                <img src="<?php echo $image; ?>" />
                            </div>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </section>

            <section id="about-4">
                <div id="about-4-content-1" class="center textcenter">
                    <h3 class="blue line"><?php the_field('heading_4'); ?></h3>
                    <?php the_field('text_4'); ?>
                </div>
            </section>

        </div>
    </article>
<?php endwhile; ?>

<?php get_footer(); ?>