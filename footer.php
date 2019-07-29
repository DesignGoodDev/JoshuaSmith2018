<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
?>

</div><!-- /main -->

    <div id="footer" class="clearfix">

        <!-- <?php //if (is_page( array(18, 16, 14) ) ) { ?>
            <section id="home-9">
                <div id="home-9-content" class="center max1024">
                    <h2 class="fjalla" style="color: #000;"><?php //the_field('section_2_text', 5); ?></h2>
                    <?php //dynamic_sidebar('home-mail-signup'); ?>
                </div> -->
            <!-- </section> -->
            <!-- <section id="home-10">
                <div id="home-10-content">
                    <h2 class="fjalla">Instafeed</h2>
                    <?php //echo do_shortcode('[instagram-feed]'); ?>
                </div>
            </section>
        <?php //} ?> -->

        <section id="instafeed">
            <div id="instafeed-content">
                <h4 class="black caps textcenter">Follow My Journey on Instagram</h4>
                <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </section>

    	<?php if( wpex_get_data( 'widgetized_footer', '1' ) == '1' ) { ?>
        	<div id="footer-widget-wrap" class="cardo clearfix">
            	<div id="footer-one" class="footer-widget-col clearfix">
					<?php dynamic_sidebar('footer-one'); ?>
                </div><!-- /footer-one -->
            </div><!-- /footer-widget-wrap -->
        <?php } ?>
		<div id="footer-bottom" class="cardo-it clearfix">
            <div id="copyright">
            	<?php if ( wpex_get_data( 'footer_text' ) !== '' ) { ?>
                	© <?php echo date('Y'); ?>
, <?php echo wpex_get_data( 'footer_text' ); ?>
                <?php } else { ?>
                	Joshua Smith Inc.
<?php } ?>
            </div><!-- /copyright -->
            <div id="dgs">
                <a href="http://designgood.com" target="_blank">Website Created by DesignGood</a>
            </div><!-- /dgs -->
        </div><!-- /footer-bottom -->
	</div><!-- /footer -->
</div><!-- wrap -->

<?php wp_footer(); ?>
</body>
</html>