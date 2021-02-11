<section id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="11000" data-pause="false">

<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>

<div class="carousel-inner">

    <?php $loop = new WP_Query(array('post_type' => 'home-carousel', 'posts_per_page' => 3, 'orderby' => 'post_id', 'order' => 'ASC')); ?>
    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php $HomeBackgroundImg = get_field('home_carousel_image'); ?>

        <!-- <div class="carousel-item" style="background-image:url(<?php //echo $HomeBackgroundImg['url'] ?>); background-repeat:no-repeat; background-size:cover;">
            <div class="container">
            <div class="carousel-caption">
                <a href="#link"><img class="chevron-bottom" src="<?php //bloginfo('stylesheet_directory'); ?>/images/chevron-bottom.svg"></a>
            </div>
            </div>
        </div> -->

        <div class="carousel-item">
            <img class="home-carousel-img w-100" alt="<?php echo $HomeBackgroundImg['alt'] ?>" src="<?php echo $HomeBackgroundImg['url'] ?>">
            <div class="container">
            <div class="carousel-caption">
                <a href="#link"><img class="chevron-bottom" src="<?php bloginfo('stylesheet_directory'); ?>/images/chevron-bottom.svg"></a>
            </div>
            </div>
        </div>

        

    <?php endwhile; ?>

</div>




<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/chevron-prev.svg"></span>
  <span class="sr-only">Previous</span>
</a>

<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/chevron-next.svg"></span>
  <span class="sr-only">Next</span>
</a>



</section>