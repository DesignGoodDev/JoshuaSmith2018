<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <header id="page-heading" class="secondary-header">
        <div id="page-heading-content" class="secondary-header">
            <div id="page-heading-inner">
                <h6 style="color:<?php the_field('h1_color', 10); ?>">
                    <?php the_field('h1_top_line', 10); ?>
                </h6>
                <h1 style="color:<?php the_field('h1_color', 10); ?>">
                    <?php the_field('h1_bottom_line', 10); ?>
                </h1>
            </div>
        </div>
    </header>

    <div class="posts-wrapper">
        <article class="post clearfix">
            <header>
                <h1 class="single-title cardo-it"><?php the_title(); ?></h1>
                <img class="post-spacer" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog-post-title-spacer.png">
            </header>
            <div class="entry clearfix">
                <?php the_content(); ?>
                <div class="clear"></div>
                <?php wp_link_pages(' '); ?>
                <?php if ( wpex_get_data( 'blog_tags', '1' ) == '1' ) { ?>
                    <footer class="post-bottom">
                        <?php the_tags('<div class="post-tags"><span class="icon-tags"></span>',' , ','</div>'); ?>
                    </footer><!-- /post-bottom -->
                <?php } ?>
            </div><!-- /entry -->
            <?php comments_template(); ?>
        </article><!-- /post -->
        <div class="related-posts mobile textcenter">
            <h4>Related Posts</h4>
            <ul>
            <?php
                $currentID = get_the_ID();
                $cat = $category->cat_ID;
                $recent = new WP_Query( array('cat' => $cat, 'orderby' => 'rand', 'showposts' => '3', 'post__not_in' => array($currentID)));
                while ($recent->have_posts()) : $recent->the_post();
            ?>
                <li>
                    <?php $thumb = get_the_post_thumbnail_url($post->ID, 'full'); ?>
                    <a href="<?php the_permalink(); ?>" class="post-thumb" style="background-image: url('<?php echo $thumb; ?>');">
                        &nbsp;
                    </a>
                    <?php /*<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>*/ ?>
                </li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php get_sidebar(); ?>
    </div>

    <div class="related-posts desktop textcenter">
        <h4>Related Posts</h4>
        <ul>
        <?php
            $currentID = get_the_ID();
            $category = get_query_var('cat');
            // $cat = $category->cat_ID;
            $recent = new WP_Query( array('cat' => $category, 'orderby' => 'rand', 'showposts' => '3', 'post__not_in' => array($currentID)));
            while ($recent->have_posts()) : $recent->the_post();
        ?>
            <li>
                <?php $thumb = get_the_post_thumbnail_url($post->ID, 'full'); ?>
                <a href="<?php the_permalink(); ?>" class="post-thumb" style="background-image: url('<?php echo $thumb; ?>');">
                    &nbsp;
                </a>
                <?php /*<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>*/ ?>
            </li>
        <?php endwhile; ?>




        </ul>
    </div>
<?php endwhile; ?>


<?php get_footer(); ?>