<?php if(!empty(get_field('top_banner_image'))){ ?>
        <section id="myCarousel" class="carousel-generic slide carousel-fade" data-ride="carousel" data-interval="11000" data-pause="false">

            <div class="carousel-inner">

            <div class="carousel-item active">
                <?php $restoration_top_banner = get_field('top_banner_image'); ?>
                <img alt="<?php echo $restoration_top_banner['alt']; ?>" src="<?php echo $restoration_top_banner['url']; ?>">
            </div>

            </div>

        </section>
    <?php } ?>