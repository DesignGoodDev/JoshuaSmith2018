<?php
/**
 * Template Name: Coaching - Relationship Pages
 */
?>

<?php get_header( 'coaching' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <article>

        <div class="post full-width clearfix coaching-page coaching-page--relationship">

            <?php get_template_part( 'coaching-page-header' ); ?>

            <?php the_content(); ?>

        </div>

    </article>

<?php endwhile; ?>

<?php get_footer( 'coaching' ); ?>