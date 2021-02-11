<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package HC_Restorations
 */

get_header();
?>

<!-- Generic Carousel -->
<?php //include(locate_template ('./includes/generic-carousel.php')); ?> 
<!-- End Generic Carousel -->


<section class="main-content">
        <div class="container main-content-inner page-not-found">    

		<!-- News Content-->

		<img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-top.svg">

		<h1 class="heading"><?php esc_html_e( 'That page can&rsquo;t be found!', 'hc-restorations' ); ?></h1>
		<h1 class="fourzerofour">404</h1>

		<div class="row">


		<div class="col-sm-12 text-center">


				
	

	
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below.', 'hc-restorations' ); ?></p>

				<p><a href="<?php echo get_home_url() ?>">Home</a> | <a href="/furniture-restoration/">Furniture Restoration &amp; Repair</a> | <a href="/french-polishing/">French Polishing</a> | <a href="/insurance/">Insurance - Fire &amp; Flood</a></p>

				<!-- <div><?php //get_search_form(); ?></div> -->

				<br>


				<img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-bottom.svg">


		</div>







<!-- End News Content-->




<!-- 4 tabbed section -->        
<?php include(locate_template ('./includes/four-tabbed.php')); ?> 
<!-- End 4 tabbed section -->


</div>        
</section>



<?php
get_footer();
