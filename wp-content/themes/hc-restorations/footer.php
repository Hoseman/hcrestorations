<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HC_Restorations
 */
?>


<?php //printf( esc_html__( 'Proudly powered by %s', 'hc-restorations' ), 'WordPress' ); ?>
<?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'hc-restorations' ), 'hc-restorations', '<a href="http://achcreative.info">Andrew Hosegood</a>' ); ?>


    <!-- Footer -->
    <footer class="footer">
        <div class="container main-content-inner">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 text-left"><img class="footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-small.svg" alt="H C Restorations" width="350px"> </div>
                <div class="col-lg-9 col-md-8 col-12 footer-icons-right">
					<?php if( get_theme_mod( 'ah_twitter_handle' ) ){ ?>
						<a target="_blank" href="<?php echo get_theme_mod( 'ah_twitter_handle' ) ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<?php } ?>
					<?php if( get_theme_mod( 'ah_instagram_handle' ) ){ ?>
						<a target="_blank" href="<?php echo get_theme_mod( 'ah_instagram_handle' ) ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<?php } ?>
                </div>
                <div class="col-lg-3 col-md-4 text-left">
                    <p>
						<!-- H.C Restorations, 59 Elstow Road<br>
						Kempston, Beds, MK42 8HH -->
						<?php if( get_theme_mod( 'ah_address_handle' ) ){ ?>
							<?php echo get_theme_mod( 'ah_address_handle' ) ?>
						<?php } ?>
					</p>	
                    <p>
					<?php if( get_theme_mod( 'ah_telephone_handle' ) ){ ?>
						<?php $tel_link = str_replace(' ', '', get_theme_mod( 'ah_telephone_handle' )); ?>
						Telephone: <a href="tel:<?php echo $tel_link; ?>"><?php echo get_theme_mod( 'ah_telephone_handle' ) ?></a><br>
					<?php } ?>

					<?php if( get_theme_mod( 'ah_mobile_handle' ) ){ ?>
						<?php $mob_link = str_replace(' ', '', get_theme_mod( 'ah_mobile_handle' )); ?>
						Mobile: <a href="tel:<?php echo $mob_link; ?>"><?php echo get_theme_mod( 'ah_mobile_handle' ) ?></a><br>
					<?php } ?>

					<?php if( get_theme_mod( 'ah_email_handle' ) ){ ?>
						Email us: <a href="mailto:<?php echo get_theme_mod( 'ah_email_handle' ) ?>"><?php echo get_theme_mod( 'ah_email_handle' ) ?></a>
					<?php } ?>

					</p>    
                    
                </div>
                <div class="col-lg-9 col-md-8 text-right">
					
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container' => false
							)
						);
					?>	

                </div>
                <div class="col-sm-12"><hr></div>
                
                <div class="col-lg-8 col-md-12 col-12 text-left">
                    <p class="footer-copyright">© Copyright <?php echo date("Y"); ?> H C Restorations. All rights reserved. All images © <?php echo date("Y"); ?> H C Restorations</p>
                        
                        <p class="footer-privacy-policy">
                            <?php if(!empty(get_theme_mod( 'ah_privacy' ))){?><a href="<?php echo get_theme_mod( 'ah_privacy_link' ) ?>"><?php echo get_theme_mod( 'ah_privacy' ) ?></a> | <?php } ?>
                            <?php if(!empty(get_theme_mod( 'ah_cookie' ))){?><a href="<?php echo get_theme_mod( 'ah_cookie_link' ) ?>"><?php echo get_theme_mod( 'ah_cookie' ) ?></a><?php } ?> 
                            | <a href="/sitemap/">Sitemap</a>
                        </p>
                </div>
                <div class="col-lg-4 col-md-12 col-12 text-right"><p class="web-design">Website design by <a href="https://achcreative.info">Andrew Hosegood</a></p></div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Mobile Navigation -->
    <div class="mobile-header-links">
        
        
    <?php if( get_theme_mod( 'ah_telephone_handle' ) ){ ?><a class="tel" href="tel:<?php echo str_replace(' ', '', get_theme_mod( 'ah_telephone_handle' )); ?>"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>TELEPHONE</a><?php } ?>
    <?php if( get_theme_mod( 'ah_mobile_handle' ) ){ ?><a class="tel" href="tel:<?php echo str_replace(' ', '', get_theme_mod( 'ah_mobile_handle' )); ?>"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> MOBILE</a><?php } ?>

    </div>
    <!-- End Mobile Navigation -->




<?php wp_footer(); ?>

</body>
</html>
