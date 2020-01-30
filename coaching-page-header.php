		<?php global $post; ?>
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
        <header id="page-heading" style="background-image: url(<?php echo $src[0]; ?> ) !important;" class="secondary-header secondary-header--coaching">
            <div id="page-heading-content" class="secondary-header text-center">
                <div id="page-heading-inner">
                    <?php the_field( 'heading_content' ); ?>
                </div>
            </div>
        </header>