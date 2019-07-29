 <?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments and the comment
 * form. The actual display of comments is handled by a callback to
 * wpex_comment() which is located at functions/comments-callback.php
 *
 * @package WordPress
 * @subpackage Adapt
 * @since Adapt 2.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return; ?>


<div id="comments" class="comments-area">

	<?php //if ( have_comments() ) : ?>

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation row clr" role="navigation">
			<h4 class="assistive-text section-heading heading"><span><?php _e( 'Comment navigation', 'wpex' ); ?></span></h4>
			<div class="nav-previous span_12 col clr-margin"><?php previous_comments_link( __( '&larr; Older Comments', 'wpex' ) ); ?></div>
			<div class="nav-next span_12 col"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wpex' ) ); ?></div>
		</nav>
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'wpex' ); ?></p>
		<?php endif; ?>

		<?php //endif; // have_comments() ?>

		<div class="share-bar">
			<h4>SHARE</h4>
			<div class="social-links">
				<a href="http://twitter.com/share?url=<?php the_permalink() ?>&amp;amp;amp;amp;amp;amp;amp;amp;title=<?php echo urlencode(the_title('','', false)) ?>" class="cardo-it" target="_blank">Twitter</a>|
				<a href="http://facebook.com/share.php?u=<?php the_permalink() ?>&amp;amp;amp;amp;amp;amp;amp;amp;t=<?php echo urlencode(the_title('','', false)) ?>" class="cardo-it" target="_blank">Facebook</a>|
				<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo wp_get_attachment_url(); ?>&description=<?php the_title(); ?> on <?php bloginfo('url'); ?>" class="pin-it-button cardo-it" count-layout="vertical" target="_blank">Pinterest</a>
			</div>
		</div>
		<?php
		$form_args = array( 'title_reply' => 'Leave a Comment', 'label_submit' => 'Submit' );
		comment_form( $form_args ); ?>
			<div class="comments-count">
				<?php
	                printf( _nx( 'One Comment', '%1$s Comments', '', 'comments title', 'wpex' ),
	                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
	            ?>
			</div>
		<ol class="comment-list">
			<?php wp_list_comments( array( 'callback' => 'wpex_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- .comment-list -->



</div><!-- #comments -->