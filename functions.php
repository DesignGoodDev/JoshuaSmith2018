<?php
/**
 * Adapt functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Adapt
 * @since Adapt 2.0
 */



/*--------------------------------------*/
/* Define Constants
/*--------------------------------------*/
define( 'WPEX_JS_DIR', get_template_directory_uri().'/js' );
define( 'WPEX_CSS_DIR', get_template_directory_uri().'/css' );



/*--------------------------------------*/
/* Globals
/*--------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 980;
require_once( get_template_directory() .'/functions/theme-setup.php');



/*--------------------------------------*/
/* Admin Panel
/*--------------------------------------*/
require_once ( get_template_directory() .'/admin/index.php' );
require_once( get_template_directory() .'/functions/return-smof-data.php' );



/*--------------------------------------*/
/* Include functions
/*--------------------------------------*/
require_once( get_template_directory() .'/functions/widgets/widget-areas.php' );
require_once ( get_template_directory() .'/functions/helpers.php' );

// if ( wpex_get_data( 'portfolio_post_type' , '1' ) == '1' ) {
// 	require_once( get_template_directory() .'/functions/post-types-taxonomies/register-portfolio.php' );
// 	require_once( get_template_directory() .'/functions/helpers.php' );
// }
// if ( wpex_get_data( 'highlights_post_type' , '1' ) == '1' ) {
// 	require_once( get_template_directory() .'/functions/post-types-taxonomies/register-highlights.php' );
// }
// if ( wpex_get_data( 'slides_post_type' , '1' ) == '1' ) {
// 	require_once( get_template_directory() .'/functions/post-types-taxonomies/register-slides.php' );
// }

require_once( get_template_directory() .'/functions/post-types-taxonomies/taxonomies-labels.php' );
require_once( get_template_directory() .'/functions/post-types-taxonomies/post-type-labels.php' );

if( is_admin() ) {
	require_once ( get_template_directory() .'/functions/meta/usage.php' );
} else {
	require_once( get_template_directory() .'/functions/scripts.php' );
	require_once( get_template_directory() .'/functions/excerpts.php' );
	require_once( get_template_directory() .'/functions/posts-per-page.php' );
	require_once( get_template_directory() .'/functions/external-plugins-support.php' );
	require_once( get_template_directory() .'/functions/comments-callback.php');
	require_once( get_template_directory() .'/functions/image-default-sizes.php');
	require_once( get_template_directory() .'/functions/pagination.php');
	require_once( get_template_directory() .'/functions/aqua-resizer.php');

	if ( wpex_get_data ( 'builtin_retina', '0' ) == '1' ) {
		require_once( get_template_directory() .'/functions/aqua-resizer-ratio-check.php');
	}

}

function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post','page'));
    }

return $query;
}

add_filter('pre_get_posts','searchfilter');

add_filter( 'gform_confirmation_anchor', '__return_true' );


// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
	global $post;
return '...<br/><a class="more-link" href="'. get_permalink($post->ID) . '"> Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Build a login form for password-protected content, used on Coaching pages
function jsi_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$output = '<div class="gate"><form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post" class="post-password-form"><p>
	' . __( "" ) . '
	</p><p><label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="40" maxlength="20" /></p><input type="submit" name="Submit" class="blue-link btn" value="' . esc_attr__( "SUBMIT" ) . '" />
	</form></div>';
	return $output;
}
add_filter( 'the_password_form', 'jsi_password_form' );

// Adds your styles and fonts to the WordPress editor
// add_action( 'init', 'add_editor_styles' );
// function add_editor_styles() {
// 	add_editor_style( 'https://fonts.googleapis.com/css?family=Cardo:400,400italic' );
// 	add_editor_style( 'https://fonts.googleapis.com/css?family=Dosis:400,700' );
// 	add_editor_style( 'https://fonts.googleapis.com/css?family=Fjalla+One' );
// 	add_editor_style( get_template_directory_uri() . '/styles/css/style.css' );
// }

function custom_block_colors() {
	// Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );

	// Add our own Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'	=> 'White',
			'slug'	=> 'white',
			'color'	=> '#ffffff',
		),
		array(
			'name'	=> 'Black',
			'slug'	=> 'black',
			'color'	=> '#000000',
		),
		array(
			'name'	=> 'Lightest Gray',
			'slug'	=> 'lightestgray',
			'color'	=> '#F0F3F3',
		),
		array(
			'name'	=> 'Light Gray',
			'slug'	=> 'lightgray',
			'color'	=> '#a9b6b6',
		),
		array(
			'name'	=> 'Medium Gray',
			'slug'	=> 'medgray',
			'color'	=> '#8a8a8a',
		),
		array(
			'name'	=> 'Blue',
			'slug'	=> 'blue',
			'color'	=> '#5c687a',
		),
		array(
			'name'	=> 'Peach',
			'slug'	=> 'peach',
			'color'	=> '#e5d3c9',
		),
		array(
			'name'	=> 'Robin',
			'slug'	=> 'robin',
			'color'	=> '#cee8e6',
		),
		array(
			'name'	=> 'Cream',
			'slug'	=> 'cream',
			'color'	=> '#f7f7f7',
		),
		array(
			'name'	=> 'Light Tan',
			'slug'	=> 'lighttan',
			'color'	=> '#e6e1dc',
		),
		array(
			'name'	=> 'Tan',
			'slug'	=> 'tan',
			'color'	=> '#eadeca',
		),
		array(
			'name'	=> 'Tan Text',
			'slug'	=> 'tantext',
			'color'	=> '#ddd7d1',
		),
	) );
}
add_action( 'after_setup_theme', 'custom_block_colors' );