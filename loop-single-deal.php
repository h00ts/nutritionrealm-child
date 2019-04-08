if (have_posts()) {
    the_post();

    $td_mod_single = new td_module_single($post);

    ?>


    <article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class());?>" <?php echo $td_mod_single->get_item_scope();?>>
        <div class="td-post-header">

            Deals, Coupons & Discounts

            <header class="td-post-title">
                <?php echo $td_mod_single->get_title();?>


                <?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
                    <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle'];?></p>
                <?php } ?>

            </header>


        </div>

        <div class="td-post-content">
            <div class="td-featured-image-rec">

            <?php
            // override the default featured image by the templates (single.php and home.php/index.php - blog loop)
            if (!empty(td_global::$load_featured_img_from_template)) {
                echo $td_mod_single->get_image(td_global::$load_featured_img_from_template);
            } else {
                echo $td_mod_single->get_image('td_696x0');
            }

            $tds_post_style_1_title = td_util::get_option('tds_post_style_1_title');

            // ad spot
            echo td_global_blocks::get_instance('td_block_ad_box')->render(array('spot_id' => 'post_style_1', 'spot_title' => $tds_post_style_1_title)); ?>
            </div>

            <?php echo $td_mod_single->get_content();?>

            <a href="<?php the_field('coupon_url'); ?>" class="btn-deal-redeem">Redeem Now</a>
        </div>


       <!-- <footer>
            <?php // echo $td_mod_single->get_social_sharing_bottom(); ?>
        </footer> /.post -->

    </article>

<?php
} else {
    //no posts
    echo td_page_generator::no_posts();
}