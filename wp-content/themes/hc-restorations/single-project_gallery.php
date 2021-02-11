<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HC_Restorations
 */

get_header();
?>






    







    <section class="main-content">
        <div class="container main-content-inner">    
        <!-- Intro Text-->
        <img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-top.svg">



        <?php
		while ( have_posts() ) :
			the_post();

        ?>

        <?php $BeforeImg = get_field('before_picture'); ?>
        <?php $AfterImg = get_field('after_picture'); ?>
        <?php $SingleImg = get_field('single_picture'); ?>

        <h1 class='heading'><?php the_title(); ?></h1>

        <?php //the_content(); ?>
        <p><?php if(!empty(get_field('gallery_description'))){ ?>
            <?php echo get_field('gallery_description') ?>
        <?php } ?></p>


        <div class="row fourtabbed">

            <?php if(get_field('image_style')=="before_after"){ ?>

                        <!-- if the user has selected before/after pictures -->
                        <?php if(empty(get_field('before_picture'))){ ?>

                        <div class="col-lg-6 col-sm-6 col-12 mb-3">
                            <div class="before-div" style="overflow:hidden;">
                                
                            <span class="before-after-flash"><div class="before-after-text">Before</div></span>
                            <img id="before" class="before-after-pic" class="w-100" alt="Missing Image" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo-coming-soon.png">
                            
                            </div>
                        </div>    

                        <?php } else { ?>

                        <div class="col-lg-6 col-sm-6 col-12 mb-3">
                                <div class="before-div" style="overflow:hidden;">
                                    
                                <span class="before-after-flash"><div class="before-after-text">Before</div></span>
                                <img id="before" class="before-after-pic" class="w-100" alt="<?php echo $BeforeImg['alt'] ?>" src="<?php echo $BeforeImg['url'] ?>">
                                
                                </div>
                        </div>

                        <?php } ?>

                        <?php if(empty(get_field('after_picture'))){  ?>

                        <div class="col-lg-6 col-sm-6 col-12 mb-3">
                            <div class="before-div" style="overflow:hidden;">
                                
                            <span class="before-after-flash"><div class="before-after-text">Before</div></span>
                            <img id="before" class="before-after-pic" class="w-100" alt="Missing Image" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo-coming-soon.png">
                            
                            </div>
                        </div>
                        
                        <?php } else { ?>  

                        <div class="col-lg-6 col-sm-6 col-12 mb-3">
                            <div style="overflow:hidden;">
                                
                                <span class="before-after-flash"><div class="before-after-text">After</div></span>
                                <img id="after" class="before-after-pic" class="w-100" alt="<?php echo $AfterImg['alt'] ?>" src="<?php echo $AfterImg['url'] ?>">
                            </div>
                        </div>

                        <?php } ?>  
                        <!-- if the user has selected before/after pictures -->

            <?php } else { ?>
                        <!-- if the user has selected a single picture -->
                        <?php if(empty(get_field('single_picture'))){ ?>

                        <div class="col-lg-8 col-sm-8 col-12 mb-3">
                            <div class="single-div" style="overflow:hidden;">
                                
                            <!-- <span class="before-after-flash"><div class="before-after-text">After</div></span> -->
                            <img id="single" class="before-after-pic" class="w-100" alt="Missing Image" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo-coming-soon.png">
                            
                            </div>
                        </div>    

                        <?php } else { ?>

                        <div class="col-lg-8 col-sm-8 col-12 mb-3">
                                <div class="before-div" style="overflow:hidden;">
                                    
                                <!-- <span class="before-after-flash"><div class="before-after-text">Before</div></span> -->
                                <img id="single" class="before-after-pic" class="w-100" alt="<?php echo $SingleImg['alt'] ?>" src="<?php echo $SingleImg['url'] ?>">
                                
                                </div>
                        </div>

                        <?php } ?>
                        <!-- if the user has selected a single picture -->
            <?php } ?>

  



        </div>
            
            
        <?php    
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Prev', 'hc-restorations' ) . '</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'hc-restorations' ) . '</span>',
				)
			);
        ?>    

        <?php    
		endwhile; // End of the loop.
		?>




            


        <img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-top.svg">
            
            <br>

        <!-- End Intro Text-->


            <a href="/gallery/" class="btn btn-return">Return To Product Gallery</a>



        </div>        
    </section>






<?php

get_footer();
