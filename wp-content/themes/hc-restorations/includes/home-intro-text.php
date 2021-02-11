<img class="symbol-top" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-top.svg">

<?php
while ( have_posts() ) :
    the_post();
?>    

<h1 class="home-heading-large"><?php the_title(); ?></h1> 
<?php the_content(); ?> 

<?php        
endwhile; // End of the loop.
?>

<img class="floral-symbol" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-bottom.svg">  