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


<section id="myCarousel" class="carousel-news slide carousel-fade" data-ride="carousel" data-interval="11000" data-pause="false">

<div class="carousel-inner">

<div class="carousel-item active">

		<?php if ( have_posts() ) : ?>
		<?php endif; ?>
		<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>


			<?php $blogbackgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<?php if(!empty($blogbackgroundImg)){ ?>
					<img src="<?php echo $blogbackgroundImg[0]; ?>" alt="<?php the_title(); ?>">
				<?php } else { ?>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo-coming-soon.png" alt="Photo Coming Soon">
				<?php } ?>

		<?php endwhile; ?>

</div>

</div>

</section>


<section class="main-content">
        <div class="container main-content-inner">    


            <div class="row mt-5">


                <div class="col-md-8 col-12 news-detail-left">
				<?php
				while ( have_posts() ) :
					the_post(); ?>

					
					
					
					<h1 class="news-detail-heading"><?php the_title(); ?></h1>
                    <hr>
                    <h4 class="news-detail-subheading"><?php echo get_field('news_excerpt'); ?></h4>
					<hr>
					<span class="text-left"><?php the_content(); ?></span>

					

				<?php endwhile; // End of the loop.?>

  
				</div>
				

                <div class="col-md-4 col-12 news-sidebar text-left">
					<p>Article by</p>
					<?php while ( have_posts() ) : the_post(); ?>
					<h3 class="news-sidebar-heading"><?php echo get_the_author(); ?></h3>
					<?php endwhile; // End of the loop.?>
                    <p>Share</p>
                    <a target="blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=Share"><i class="fa fa-twitter"></i></a>
					<!-- <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->

					
					

					<p>You may also like:</p>
					
					<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>4)); ?>
            
            		<?php if ( $wpb_all_query->have_posts() ) : ?>
            

				
					<!-- the loop -->
					<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
						<?php $blogbackgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						<div class="news-item-sidebar">
							<h4><?php the_title(); ?></h4>
							<p><?php echo get_field('news_excerpt'); ?>...</p>
							<a href="<?php the_permalink(); ?>" class="btn btn-read-more">Read More</a>
						</div>
		
					<?php endwhile; ?>
					<!-- end of the loop -->
				

            
                <?php wp_reset_postdata(); ?>
            
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>



                </div>
            </div>






        </div>        
    </section>



<?php

get_footer();
