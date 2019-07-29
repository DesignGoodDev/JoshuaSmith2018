<?php
/**
 * Template Name: Contact
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <article>

        <?php get_template_part( 'secondary-page-header' ); ?>

        <div class="post full-width clearfix">
            <section id="contact-upper">
                <div class="center textcenter max1024">
                    <h4 class="tan-text"><?php the_field('contact_upper_heading'); ?></h4>
                    <h2 class="cardo-it center"><?php the_field('contact_upper_text'); ?></h2>
                    <div class="contact-upper-border"></div>
                </div>
            </section>
            <section id="contact-form" class="center textcenter max1024">
                <div id="contact-form-content">
                    <?php echo do_shortcode('[gravityform id="9" title="false" description="false"]'); ?>
                </div>

            </section>

        </div>

    </article>

<?php endwhile; ?>

<?php get_footer(); ?>