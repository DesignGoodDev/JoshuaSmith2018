<?php
/**
 * This file loads custom css and js for our theme
 *
 * @package WordPress
 * @subpackage Adapt
 * @since Adapt 2.0
*/

add_action('wp_enqueue_scripts','wpex_load_scripts');
function wpex_load_scripts() {

	/*******
	*** CSS
	*******************/
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/styles/css/style.css', array(), filemtime( get_stylesheet_directory() . '/styles/css/style.css' ) );
	wp_enqueue_style( 'google-font-droid-serif', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' );

	wp_enqueue_style( 'google-font-cardo', 'https://fonts.googleapis.com/css?family=Cardo:400,400italic' );
	wp_enqueue_style( 'google-font-dosis', 'https://fonts.googleapis.com/css?family=Dosis:400,700' );
	wp_enqueue_style( 'google-font-fjalla-one', 'https://fonts.googleapis.com/css?family=Fjalla+One' );
	wp_enqueue_style( 'google-font-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap');

	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/styles/css/prettyphoto.css', 'style' );
	wp_enqueue_style( 'ImageComparisonSlider', get_template_directory_uri() . '/styles/css/ImageComparisonSlider.css', 'style' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/styles/css/font-awesome.min.css', 'style' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css', 'style' );

	if ( wpex_get_data( 'responsive', '1' ) == '1' ) {
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/styles/css/responsive.css', array(), filemtime( get_template_directory() . '/styles/css/responsive.css' ) );
	}


	/*******
	*** jQuery
	*******************/
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'fitvids', WPEX_JS_DIR. '/fitvids.js', array( 'jquery' ), true );
	wp_enqueue_script( 'hoverintent', WPEX_JS_DIR. '/hoverintent.js', array( 'jquery' ), true );
	wp_enqueue_script( 'superfish', WPEX_JS_DIR . '/superfish.js', array( 'jquery', 'hoverintent' ), true );
	wp_enqueue_script( 'flexslider', WPEX_JS_DIR . '/flexslider.js', array( 'jquery' ), true );
	wp_enqueue_script( 'prettyphoto', WPEX_JS_DIR . '/prettyphoto.js', array( 'jquery' ), true );
	wp_enqueue_script( 'cookies', WPEX_JS_DIR . '/jquery.cookie.js', array( 'jquery' ), true );
	wp_enqueue_script( 'fancyboxjs', WPEX_JS_DIR . '/fancybox/jquery.fancybox.js', array( 'jquery' ), true );
	wp_enqueue_script( 'wpex-global', WPEX_JS_DIR . '/global.js', array( 'jquery', 'superfish', 'hoverintent', 'prettyphoto', 'fitvids' ), true );
	wp_localize_script( 'wpex-global', 'wpexLocalize', array( 'responsiveMenuText' => wpex_get_data( 'responsive_menu_text', __('Menu','wpex') ) ) );

	if ( wpex_get_data( 'responsive', '1' ) == '1' ) {
		wp_enqueue_script( 'uniform', WPEX_JS_DIR . '/uniform.js', array( 'jquery' ), true );
		wp_enqueue_script( 'wpex-responsive', WPEX_JS_DIR . '/responsive.js', array( 'jquery', 'uniform' ), true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script('comment-reply');
	}

}



/**
* Browser Specific CSS
* @Since 1.0
*/
add_action('wp_head', 'wpex_browser_dependencies');
if ( !function_exists('wpex_browser_dependencies') ) {
	function wpex_browser_dependencies() {

		echo '<!--[if lt IE 9]>';
			echo '<link rel="stylesheet" type="text/css" href="'. WPEX_CSS_DIR .'/ancient-ie.css" />';
			echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
		echo '<![endif]-->';

		echo '<!--[if IE 7]>';
			echo '<link rel="stylesheet" type="text/css" href="'. WPEX_CSS_DIR .'/font-awesome-ie7.min.css" media="screen" />';
		echo '<![endif]-->';

	}
}


/**
* Retina Logo Support
* @Since 1.0
*/
add_action('wp_head', 'wpex_retina_logo');

if ( !function_exists( 'wpex_retina_logo' ) ) {

	function wpex_retina_logo() {

		if( wpex_get_data('custom_retina_logo') && wpex_get_data('logo_height') && wpex_get_data('logo_width') ) {

		// Get retina options from theme panel and set vars
		$logo_url = wpex_get_data( 'custom_retina_logo' );
		$logo_width = wpex_get_data( 'logo_width' );
		$logo_height = wpex_get_data( 'logo_height' );

		$wpex_retina_logo_js = '<!-- Retina Logo -->
		<script type="text/javascript">
		jQuery(function($){
			if (window.devicePixelRatio == 2) {
				$("#masterhead #logo img").attr("src", "'. $logo_url .'");
				$("#masterhead #logo img").attr("width", "'. $logo_width .'");
				$("#masterhead #logo img").attr("height", "'. $logo_height .'");
			 }
		});
		</script>';

		// Remove spacing from js for speed
		$wpex_retina_logo_js =  preg_replace( '/\s+/', ' ', $wpex_retina_logo_js );

		// Output the custom retina logo js
		echo $wpex_retina_logo_js;

		} else {
			return;
		}

	}

}



/**
* Site Tracking
* @Since 1.0
*/
add_action( 'wp_head', 'wpex_site_tracking' );
if ( !function_exists( 'wpex_site_tracking' ) ) {
	function wpex_site_tracking() {
		if ( wpex_get_data( 'google_analytics' ) ) {
			echo wpex_get_data( 'google_analytics' );
		}
	}
}



/* Custom Shortcodes */
function featured_posts_shortcode() { ?>
<div class="sidebar-box widget_text clearfix">
	<h4 class="heading widget-title"><span>Featured Posts</span></h4>
  <?php query_posts(
		array(
			'post_type'	=> 'post',
			'category_name' => 'featured'
    ) );

		if ( have_posts() ) :
			while (have_posts()) : the_post(); ?>
          	<a class="cardo-it" href="<?php the_permalink(''); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    <?php endwhile; endif;
  wp_reset_query(); ?>
</div>
<?php }
add_shortcode('featured', 'featured_posts_shortcode');

/* Replace Read More Text Link */
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/* Newsletter Confirmation */
function custom_confirmation( $confirmation, $form, $entry, $ajax ) {
    if( $form['id'] == '6' ) {
    		$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]?thank-you";
        $confirmation = array( 'redirect' => $current_url );
				$value = "registered";
				setcookie("newsletter", $value, time() + (5 * 365 * 24 * 60 * 60) );
    }
    return $confirmation;
}
add_filter( 'gform_confirmation', 'custom_confirmation', 10, 4 );


