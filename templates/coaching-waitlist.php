<?php
/**
 * Template Name: Coaching - Waitlist
 */
?>

<?php get_header( 'coaching' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <article>

        <div class="post full-width clearfix coaching-page">

            <?php get_template_part( 'coaching-page-header' ); ?>

            <section id="coaching-1">

                <div class="center text-center max840">

                    <?php the_content(); ?>

                </div>

            </section>

        </div>

    </article>

<?php endwhile; ?>

<?php get_footer( 'coaching' ); ?>