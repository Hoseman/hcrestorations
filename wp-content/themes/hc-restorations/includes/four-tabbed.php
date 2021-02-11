<div class="row fourtabbed">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12" >
        <div class="fourtabbedbox">
            <?php $fourtabbed_one_img = get_field('box_1_image'); ?>
                <?php if(!empty(get_field('box_1_image'))){ ?>
                    <a href="<?php echo get_field('box_1_url') ?>">
                        <img alt="<?php echo $fourtabbed_one_img['alt']; ?>" src="<?php echo $fourtabbed_one_img['url']; ?>">
                        <h5 class="fourtabbed-heading"><?php echo get_field('box_1_title') ?></h5>
                    </a>
                <?php } ?>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12" >
        <div class="fourtabbedbox">
            <?php $fourtabbed_two_img = get_field('box_2_image'); ?>
                <?php if(!empty(get_field('box_2_image'))){ ?>
                    <a href="<?php echo get_field('box_2_url') ?>">
                        <img alt="<?php echo $fourtabbed_two_img['alt']; ?>" src="<?php echo $fourtabbed_two_img['url']; ?>">
                        <h5 class="fourtabbed-heading"><?php echo get_field('box_2_title') ?></h5>
                    </a>
                <?php } ?>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12" >
        <div class="fourtabbedbox">
            <?php $fourtabbed_three_img = get_field('box_3_image'); ?>
                <?php if(!empty(get_field('box_3_image'))){ ?>
                    <a href="<?php echo get_field('box_3_url') ?>">
                        <img alt="<?php echo $fourtabbed_three_img['alt']; ?>" src="<?php echo $fourtabbed_three_img['url']; ?>">
                        <h5 class="fourtabbed-heading"><?php echo get_field('box_3_title') ?></h5>
                    </a>
                <?php } ?>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12" >
        <div class="fourtabbedbox">
            <?php $fourtabbed_four_img = get_field('box_4_image'); ?>
                <?php if(!empty(get_field('box_4_image'))){ ?>
                    <a href="<?php echo get_field('box_4_url') ?>">
                        <img alt="<?php echo $fourtabbed_four_img['alt']; ?>" src="<?php echo $fourtabbed_four_img['url']; ?>">
                        <h5 class="fourtabbed-heading"><?php echo get_field('box_4_title') ?></h5>
                    </a>
                <?php } ?>
        </div>
    </div>
</div>     