<?php

/* Template Name: HCREstorations-CustomInsurancePage */

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

    <!-- Generic Carousel -->
    <?php include(locate_template ('./includes/generic-carousel.php')); ?> 
    <!-- End Generic Carousel -->



    <section class="main-content">
        <div class="container main-content-inner">    

        <!-- Intro Text-->

        <img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-top.svg">

        <?php
        while ( have_posts() ) :
            the_post();
        ?>    

        <h1 class="heading"><?php the_title(); ?></h1> 
        <?php the_content(); ?> 

        <?php        
        endwhile; // End of the loop.
        ?>
        
        <img class="floral-symbol" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-bottom.svg">  

        <!-- End Intro Text-->




        <!-- 4 tabbed section -->        
        <?php include(locate_template ('./includes/four-tabbed.php')); ?> 
        <!-- End 4 tabbed section -->


        </div>        
    </section>







<?php

get_footer();
