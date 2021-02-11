<?php

/* Template Name: HCREstorations-CustomSitemapPage */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HC_Restorations
 */

get_header();
?>


    <section class="main-content">
        <div class="container main-content-inner contact-form">    

        <!-- Intro Text-->

        <img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-top.svg">

        <?php
        while ( have_posts() ) :
            the_post();
        ?>    

        <h1 class="heading"><?php the_title(); ?></h1> 
            
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

        <?php        
        endwhile; // End of the loop.
        ?>

        <!-- End Intro Text-->

        <hr>

        <img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-bottom.svg">

        </div>        
    </section>




<?php

get_footer();
