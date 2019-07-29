<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Adapt
 * @since Adapt 2.0
 */ ?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
	<title><?php wp_title(''); ?><?php if( wp_title('', false) ) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( wpex_get_data('custom_favicon') ) : ?>
    	<link rel="shortcut icon" href="<?php echo wpex_get_data('custom_favicon'); ?>" />
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?php wp_head(); ?>
    <link href='https://fonts.googleapis.com/css?family=Cardo:400,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
</head>

<!-- Begin Body -->
<body <?php body_class(); ?>>

<script>
$(window).scroll(function(){
    if($(window).scrollTop()>130){
        $("#parallax-menu-block").fadeIn();
    }else{
        $("#parallax-menu-block").fadeOut();
    }

});

$(document).ready(function(){
    //$(".slidingDiv").hide();
    $(".show_hide").show();

    $('.show_hide').click(function(){
        $(".slidingDiv").slideToggle();
    });

    $('#menu-overlay-top-menu > li').click(function(){
        $(".slidingDiv").slideToggle();
    });
});
</script>

<div id="wrap" class="clearfix overlay-equalizer">

    <div class="slidingDiv overlay-equalizer">
        <a href="#" class="show_hide"><img src="<?php bloginfo('template_directory'); ?>/images/overlay-close.png" width="22" height="22"></a>
        <div id="overlay-menu" class="cardo">
            <div id="overlay-menu-top">
                <?php wp_nav_menu( array(
                    'theme_location'	=> 'overlay-menu-top',
                    'sort_column' 		=> 'menu_order',
                    'menu_class' 		=> 'overlay-menu',
                )); ?>
            </div><!-- #overlay-menu-top -->
            <div id="overlay-menu-bottom">
                <?php wp_nav_menu( array(
                    'theme_location'	=> 'overlay-menu-bottom',
                    'sort_column' 		=> 'menu_order',
                    'menu_class' 		=> 'overlay-menu',
                )); ?>
            </div><!-- #overlay-menu-bottom -->
        </div><!-- #overlay-menu -->
    </div>
    <div id="parallax-menu-block">
    	<div id="parallax-menu-content">
            <?php get_template_part( 'masterhead' ); ?>
        </div><!-- #parallax-menu-content -->
    </div><!-- #parallax-menu-block -->

    <?php get_template_part( 'masterhead' ); ?>

<div id="main" class="clearfix">