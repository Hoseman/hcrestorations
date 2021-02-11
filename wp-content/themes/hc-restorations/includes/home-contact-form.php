<div class="row contact-form">
        <img class="floral-symbol" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-top.svg">
        <div class="col-sm-12">
            <h2 class="home-heading-medium"><?php echo get_field('form_title') ?></h2>
            <h4 class="home-heading-small"><?php echo get_field('form_subtitle') ?></h4>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]'); ?>

        <img class="floral-symbol" src="<?php bloginfo('stylesheet_directory'); ?>/images/symbol-bottom.svg">
</div>