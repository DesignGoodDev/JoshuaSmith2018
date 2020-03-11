<?php
/**
 * Template Name: Coaching
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <article>

        <?php get_template_part( 'secondary-page-header' ); ?>

        <div class="post full-width clearfix">

            <section id="coaching-1">
                <div class="center max680">
                    <div class="video-responsive mb-60">
                        <iframe src="https://player.vimeo.com/video/396947168" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                    <h3 class="cardo-it blue line"><?php the_field('about_heading_1'); ?></h3>
                    <div class="center textcenter about__text--top">
                        <h6><?php the_field('about_text_1'); ?></h6>
                        <?php if( have_rows('about_list') ): ?>
                            <ul>
                            <?php while( have_rows('about_list') ): the_row(); ?>
                            <li>
                                <p><?php the_sub_field('list_item'); ?></p>
                            </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <p><?php the_field('about_text_beneath_list'); ?></p>
                    </div>
                </div>
            </section>

            <?php $parallax1 = get_field('parallax_image_1'); ?>
            <section id="coaching-parallax-1" style="background-image: url('<?php echo $parallax1['url']; ?>');">
                &nbsp;
            </section>

            <section id="coaching-method">
                <div class="center textcenter">
                    <div class="section-title">
                        <h6><?php the_field('method_heading'); ?></h6>
                    </div>

                    <h4 class="circle"><?php the_field('heading_in_circle'); ?></h4>

                    <div class="sub-section method-top-text max680">
                        <p><?php the_field('method_top_text'); ?></p>
                    </div>

                    <div class="sub-section max680">
                        <h3 class="blue center"><?php the_field('method_subheading_1'); ?></h3>
                    </div>

                    <div class="sub-section max1024">
                        <h4 class="borders"><?php the_field('method_subheading_2'); ?></h4>
                        <?php if( have_rows('method_1_list') ): ?>
                            <ul>
                            <?php while( have_rows('method_1_list') ): the_row(); ?>
                            <li>
                                <h5><?php the_sub_field('list_item_heading'); ?></h5>
                                <p><?php the_sub_field('list_item'); ?></p>
                            </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <?php $parallax2 = get_field('parallax_image_2'); ?>
            <section id="coaching-parallax-2" style="background-image: url('<?php echo $parallax2['url']; ?>');">
                &nbsp;
            </section>

            <section id="coaching-packages">
                <div class="center textcenter">
                    <div class="packages max680">
                        <h4><?php the_field('packages_heading'); ?></h4>
                        <?php the_field('packages_description'); ?>
                    </div>
                </div>
            </section>

            <section id="coaching-benefits" class="textcenter">
                <h3><?php the_field('coaching_grid_heading'); ?></h3>

                <?php if(have_rows('coaching_grid') ): ?>
                <?php while(have_rows('coaching_grid') ): the_row(); ?>
                <ul class="coaching-grid">

                    <li class="text"><h6><?php the_sub_field('text_1'); ?></h6></li>

                    <?php $img1 = get_sub_field('image_1') ?>
                    <li class="img" style="background-image:url('<?php echo $img1['url']; ?>');">&nbsp;</li>

                    <li class="text"><h6><?php the_sub_field('text_2'); ?></h6></li>


                    <?php $img2 = get_sub_field('image_2') ?>
                    <li class="img" style="background-image:url('<?php echo $img2['url']; ?>');">&nbsp;</li>

                    <li class="text"><h6><?php the_sub_field('text_3'); ?></h6></li>

                    <?php $img3 = get_sub_field('image_3') ?>
                    <li class="img" style="background-image:url('<?php echo $img3['url']; ?>');">&nbsp;</li>


                    <li class="text"><h6><?php the_sub_field('text_4'); ?></h6></li>

                    <?php $img4 = get_sub_field('image_4') ?>
                    <li class="img" style="background-image:url('<?php echo $img4['url']; ?>');">&nbsp;</li>

                    <li class="text"><h6><?php the_sub_field('text_5'); ?></h6></li>
                </ul>
                <?php endwhile; endif; ?>

            </section>

            <section id="coaching-services">
                <div class="services max680 center textcenter">
                    <h4><?php the_field('services_heading'); ?></h4>
                    <?php if( have_rows('services_list') ): ?>
                        <ul>
                        <?php while( have_rows('services_list') ): the_row(); ?>
                        <li class="service-item">
                            <h6 class="service-title"><?php the_sub_field('title'); ?></h6>
                            <p><?php the_sub_field('description'); ?></p>

                            <?php $title = get_sub_field('list_title'); ?>
                            <?php if($title): ?>
                            <p class="list-title"><?php echo $title; ?></p>
                            <?php endif; ?>

                            <?php if(have_rows('list') ): ?>
                            <ul>
                                <?php while(have_rows('list') ): the_row(); ?>
                                <li><?php the_sub_field('list_item'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <a href="<?php the_field('services_link_url'); ?>" class="blue-link"><?php the_field('services_link_text'); ?></a>
                </div>
            </section>


            <section id="mailing-list-cta">
                <div class="center">
                    <?php the_field('mailing_list_text'); ?>
                </div>
            </section>


        </div>

    </article>

<?php endwhile; ?>


<?php get_footer(); ?>