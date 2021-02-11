<?php

/* Template Name: HCREstorations-CustomRestorationPage */

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

                <?php $restoration_img_one = get_field('restoration_image_1'); ?>
                <?php $restoration_img_two = get_field('restoration_image_2'); ?>
                <?php $restoration_img_three = get_field('restoration_image_3'); ?>

                <div class="row three-images">
                    <div class="col-sm-4">
                        <?php if(!empty(get_field('restoration_image_1'))){ ?>
                            <img alt="<?php echo $restoration_img_one['alt']; ?>" src="<?php echo $restoration_img_one['url']; ?>">
                        <?php } ?>
                    </div>
                    <div class="col-sm-4">
                        <?php if(!empty(get_field('restoration_image_2'))){ ?>
                            <img alt="<?php echo $restoration_img_two['alt']; ?>" src="<?php echo $restoration_img_two['url']; ?>">
                       <?php  } ?>
                    </div>
                    <div class="col-sm-4">
                        <?php if(!empty(get_field('restoration_image_3'))){ ?>
                            <img alt="<?php echo $restoration_img_three['alt']; ?>" src="<?php echo $restoration_img_three['url']; ?>">
                        <?php } ?>
                    </div>
                </div>
                
                
                

            <h3 class='heading some-of-the-work'><?php echo get_field('restoration_subheading') ?></h3>


 

            <ul class="restoration-list">
                <?php if(have_rows('centered_bullet_list')) {  ?>
                    <?php while ( have_rows('centered_bullet_list') ) : the_row(); ?>   
                        <li><?php the_sub_field('bullet_list_item') ?></li>
                    <?php endwhile; // End of the loop.?>
                <?php } ?>
            </ul>

            <hr>

        <img class="floral-symbol" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-bottom.svg">  

        <!-- End Intro Text-->




        <!-- 4 tabbed section -->        
        <?php include(locate_template ('./includes/four-tabbed.php')); ?> 
        <!-- End 4 tabbed section -->


        </div>        
    </section>







<?php

get_footer();
