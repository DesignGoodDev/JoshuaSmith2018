    <header id="masterhead" class="">
        <div id="logo">
            <a href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/JS_Logo.svg" width="256" alt="<?php bloginfo( 'name' ); ?>" />
            </a>
        </div><!--  /logo -->
        <nav id="masternav" class="fjalla">
            <?php wp_nav_menu( array(
                'theme_location'	=> 'menu',
                'sort_column' 		=> 'menu_order',
                'menu_class' 		=> 'sf-menu',
                'fallback_cb' 		=> 'default_menu'
            )); ?>
        </nav><!-- /masternav -->
        <div id="right-nav" class="cardo-it">
            + More Here:
            <div id="right-nav-hamburger">
            <a href="#" class="show_hide"><img src="<?php bloginfo('template_directory'); ?>/images/header-hamburger.png" width="30" height="15" /></a>
            </div><!-- #right-nav-hamburger -->
        </div><!-- #right-nav -->
    </header><!-- /masterhead -->