<?php
/**
 * Template Name: Results
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <article>

        <?php get_template_part( 'secondary-page-header' ); ?>

        <div class="post full-width clearfix">
            <section id="results-graphic">
                <div class="center textcenter max1024">
                    <div class="section-title">
                        <h6><?php the_field('results_heading'); ?></h6>
                    </div>

                    <?php if( have_rows('results_list') ): ?>
                        <ul>
                        <?php while( have_rows('results_list') ): the_row(); ?>
                            <li>
                            <h5><?php the_sub_field('list_item_heading'); ?></h5>
                            <p><?php the_sub_field('list_item'); ?></p>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>

                </div>
            </section>

            <section id="results-testimonials">
                <div class="center max1024 textcenter">
                    <div class="section-title gray">
                        <?php if(get_field('testimonials_heading') ): ?>
                        <h6><?php the_field('testimonials_heading'); ?></h6>
                        <?php else: ?>
                        <h6><?php the_field('testimonials_heading', 5); ?></h6>
                        <?php endif; ?>
                    </div>

                    <?php if( have_rows('testimonials', 5) ): ?>
                    <ul class="testimonials">
                    <?php while( have_rows('testimonials', 5) ): the_row(); ?>
                        <?php $headshot = get_sub_field('headshot'); ?>
                        <li class="testimonial">
                            <div class="headshot" style="background-image: url('<?php echo $headshot['url']; ?>');">
                                &nbsp;
                            </div>
                        <h3>"<?php the_sub_field('testimonial_content'); ?>"</h3>
                        <h6 class="caps">—<?php the_sub_field('credit'); ?></h6>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    <a href="<?php the_field('services_link_url'); ?>" class="blue-link"><?php the_field('services_link_text', 18); ?></a>
                </div>
            </section>
        </div>
    </article>
<?php endwhile; ?>

<?php get_footer(); ?>