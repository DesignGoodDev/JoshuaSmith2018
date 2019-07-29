<?php
/**
 * Template Name: Blog
 */
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
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
    </header>

    <div class="posts-wrapper">
        <div class="post clearfix">
    		<?php
            query_posts(
    			array(
    				'post_type'	=> 'post',
    				'paged'		=>$paged,
                    'posts_per_page' => 4
            ) );
            ?>
            <?php if ( have_posts() ) : ?>
            	<?php while (have_posts()) : the_post(); ?>
                	<?php /*get_template_part( 'content', get_post_format() ) */?>
                    <article class="loop-entry clearfix">
                        <?php if( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink('') ?>" title="<?php the_title(); ?>" class="loop-entry-thumbnail">
                                <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover; background-position: center center; width: 300px; height: 300px;"></div>
                            </a>
                        <?php } ?>
                        <h4><a href="<?php the_permalink('') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                        <img class="post-spacer" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog-post-title-spacer.png">
                        <?php
                            //$content = get_the_content();
                            //$content = preg_replace("/<img[^>]+\>/i", " ", //$content);
                            //$content = apply_filters('the_content', $content);
                            //$content = str_replace(']]>', ']]>', $content);
                            //echo $content;
                        ?>
                        <?php echo the_excerpt(); ?>
                    </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <div class="paging-wrapper">
            <?php wpex_pagination(); ?>
            </div>
            <?php wp_reset_query(); ?>
        </div>
<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php /*<a class="older-posts" href="#">Older Posts</a>*/ ?>
</div>
<?php get_footer(); ?>