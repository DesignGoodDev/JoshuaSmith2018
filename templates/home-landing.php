<?php

/**
 * Template Name: Home - Landing Page
 */
?>

<?php get_header('landing'); ?>

<?php while (have_posts()) : the_post(); ?>

  <?php
  global $post;
  $featured_img = wp_get_attachment_image(get_post_thumbnail_id($post->ID), 'large', false, array("class" => "featured-image")); ?>

  <section class="landing__header">
    <div class="header__logo">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo-jsi-landing--brown.svg" alt="<?php bloginfo('name'); ?>" />
    </div>
    <ul class="landing__socials">
      <li><a href="https://www.instagram.com/joshuasmithinc/" taret="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/images/icon-instagram.svg" alt="Instagram Icon" /></a></li>
      <li><a href="https://www.facebook.com/joshuasmithinc/" taret="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.svg" alt="Facebook Icon" /></a></li>
      <li><a href="#sign-up"><img src="<?php bloginfo('template_directory'); ?>/images/icon-email_sign_up.svg" alt="Newsletter Signup Icon" /></a></li>
    </ul>
    <div class="header__featured-image">
      <?php echo $featured_img; ?>
    </div>

  </section>

  <section class="landing__main">

    <div class="main__inner">

      <?php the_content(); ?>

    </div>

  </section>

  <aside class="landing__aside">
    <ul class="landing__socials">
      <li><a href="https://www.instagram.com/joshuasmithinc/" taret="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/images/icon-instagram.svg" alt="Instagram Icon" /></a></li>
      <li><a href="https://www.facebook.com/joshuasmithinc/" taret="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.svg" alt="Facebook Icon" /></a></li>
      <li><a href="#sign-up"><img src="<?php bloginfo('template_directory'); ?>/images/icon-email_sign_up.svg" alt="Newsletter Signup Icon" /></a></li>
    </ul>
  </aside>

<?php endwhile; ?>

<?php get_footer('landing'); ?>