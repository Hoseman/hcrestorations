<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HC_Restorations
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="googlebot" content="noindex">

	<?php
		if ( is_user_logged_in() ) {
			echo "<style>";
			echo ".main-nav-toggle { top: 30px !important; }";
            echo "</style>";
         }
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<header>
        <!-- Header -->
        <div class="top-header">
            <div class="top-header-links">

				<?php if( get_theme_mod( 'ah_telephone_handle' ) ){ ?>
					<?php $tel_link = str_replace(' ', '', get_theme_mod( 'ah_telephone_handle' )); ?>
					<a class="tel" href="tel:<?php echo $tel_link; ?>">TEL: <?php echo get_theme_mod( 'ah_telephone_handle' ) ?></a>
				<?php } ?>

				<?php if( get_theme_mod( 'ah_mobile_handle' ) ){ ?>
					<?php $mob_link = str_replace(' ', '', get_theme_mod( 'ah_mobile_handle' )); ?>
					<a class="tel" href="tel:<?php echo $mob_link; ?>">MOBILE: <?php echo get_theme_mod( 'ah_mobile_handle' ) ?></a>
        <?php } ?>
        
        <?php if( get_theme_mod( 'ah_instagram_handle' ) ){ ?>
					<a target="_blank" href="<?php echo get_theme_mod( 'ah_instagram_handle' ) ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<?php } ?>
				
				<?php if( get_theme_mod( 'ah_twitter_handle' ) ){ ?>
                <a target="_blank" href="<?php echo get_theme_mod( 'ah_twitter_handle' ) ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<?php } ?>




			

            </div>
      <div class="logo"><?php echo the_custom_logo(); ?></div>
      
      <p class="established"> – Est. 1996 – </p>

			<?php if( get_theme_mod( 'ah_strapline_handle' ) ){ ?>
					<p class="strapline text-center"><?php echo get_theme_mod( 'ah_strapline_handle' ) ?></p>
				<?php } ?>
			
            
        </div>
        <!-- End Header -->
        <!-- Main Menu -->
        <nav class="navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <a class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
		  <?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'navbar-nav text-center',
						'container' => false,
						'walker' => new wp_bootstrap_navwalker()
					)
				);
			?>

		  </div>

        </nav>
        <!-- End Main Menu -->
    </header>

