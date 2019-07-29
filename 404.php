<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
?>
<?php get_header(); ?>

    <header id="page-heading" class="secondary-header">
        <div id="page-heading-content" class="secondary-header">
            <div id="page-heading-inner">
                <h6>THIS PAGE IS NO LONGER HERE</h6>
                <h1>MOVED OR MISSING</h1>
            </div>
        </div><!-- #page-heading-content -->
    </header><!-- /page-heading -->
    <div class="posts-wrapper">
        <article class="post clearfix">
            <p>What you're looking for has moved or is no longer available. Click <a href="<?php echo home_url(); ?>" style="color: inherit; text-decoration: underline;">here</a> to return to the home page or try searching below:</p>
            <div class="search-404"><?php get_search_form(); ?></div>
        </article><!-- /post -->
        <?php get_sidebar(); ?>
     </div>


<?php get_footer(); ?>