<?php

/* Template Name: HCREstorations-CustomGalleryPage */

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

        <!-- End Intro Text-->




        <div class="row fourtabbed">

    <?php $loop = new WP_Query(array('post_type' => 'project_gallery', 'posts_per_page' => -1, 'orderby' => 'post_id', 'order' => 'ASC')); ?>
    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php $ProjectGalleryImg = get_field('gallery_thumbnail_image'); ?>

        

        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
            <div class="fourtabbedbox gallery-image">
                <span class="gallery-image-hover">
                    <p><?php the_title(); ?></p>
                    <a href="<?php the_permalink(); ?>">Find Out More</a>
                </span>
                <img class="w-100" alt="<?php echo $ProjectGalleryImg['alt'] ?>" src="<?php echo $ProjectGalleryImg['url'] ?>">
            </div>
        </div>
    

    <?php endwhile; ?>


</div>

<img class="floral-symbol" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-bottom.svg">  


        <!-- 4 tabbed section -->        
        <?php include(locate_template ('./includes/four-tabbed.php')); ?> 
        <!-- End 4 tabbed section -->





        </div>        
    </section>







<?php

get_footer();
