<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

		<!-- News Content-->

		<img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-top.svg">

		<h1 class='heading'>Company News</h1>


		<div class="row fourtabbed">


		<?php if ( have_posts() ) : ?>
					<?php endif; ?>
					<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>

						<?php $blogbackgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

						<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3 text-left">
							<div class="fourtabbedbox gallery-image">
								<span class="post-date"><?php echo get_the_date(); ?></span>
								<a href="<?php echo the_permalink(); ?>">
									<?php if(!empty($blogbackgroundImg)){ ?>
										<img src="<?php echo $blogbackgroundImg[0]; ?>" alt="<?php the_title(); ?>">
									<?php } else { ?>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo-coming-soon.png" alt="Photo Coming Soon">
									<?php } ?>
								</a>
							</div>
							<h5 class="news-heading"><?php the_title(); ?></h5>
							<span class="news-excerpt"><?php the_excerpt(); ?></span>
							<a href="<?php echo the_permalink(); ?>" class="btn btn-read-more">Read More</a>
						</div>
								

		<?php endwhile; ?>


		</div>



		<img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-bottom.svg">

		<br>  

		<!-- End News Content-->




        <!-- 4 tabbed section -->        
        <?php include(locate_template ('./includes/four-tabbed.php')); ?> 
        <!-- End 4 tabbed section -->


        </div>        
</section>

		<?php
		// if ( have_posts() ) :

		// 	if ( is_home() && ! is_front_page() ) :
				?>
		
					<?php //single_post_title(); ?>
		
				<?php
		// 	endif;

	
		// 	while ( have_posts() ) :
		// 		the_post();

	
		// 		get_template_part( 'template-parts/content', get_post_type() );

		// 	endwhile;

		// 	the_posts_navigation();

		// else :

		// 	get_template_part( 'template-parts/content', 'none' );

		// endif;
		?>



<?php
//get_sidebar();
get_footer();
