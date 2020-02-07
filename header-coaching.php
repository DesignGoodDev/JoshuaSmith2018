<?php
/**
 * A simplified header for Coaching pages
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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="p:domain_verify" content="37e6696366e2eddb5d1ba28f15f834e3"/>
    <title><?php wp_title(''); ?><?php if( wp_title('', false) ) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( wpex_get_data('custom_favicon') ) : ?>
    <link rel="shortcut icon" href="<?php echo wpex_get_data('custom_favicon'); ?>" />
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<!-- Begin Body -->
<body <?php body_class(); ?>>

<div id="wrap" class="clearfix overlay-equalizer">

    <div class="nav--coaching">
        <div id="logo">
            <a href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/Joshua-Smith-Wordmark-MBSH.png" width="253" alt="<?php bloginfo( 'name' ); ?>" />
            </a>
        </div><!--  /logo -->
    </div>

    <div id="main" class="clearfix">