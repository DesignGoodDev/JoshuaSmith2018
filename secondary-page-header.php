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