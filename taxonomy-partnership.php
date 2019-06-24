<?php
/**
 * Partnership taxonomy template
*/

get_header();

global $loop_module_id, $loop_sidebar_position;

$current_term_obj = get_queried_object();
$tier = get_field('tier', $current_term_obj);
$partnership_logo = get_field('logo', $current_term_obj);
$header_image = get_field('header_image', $current_term_obj);
$website = get_field('website', $current_term_obj);
$hints = get_field('hints', $current_term_obj, false);

$loop_module_id = td_util::get_taxonomy_option($current_term_obj->taxonomy, 'tds_taxonomy_page_layout');
$loop_sidebar_position = td_util::get_taxonomy_option($current_term_obj->taxonomy, 'tds_taxonomy_sidebar_pos');

if (empty($loop_module_id)) {
    $loop_module_id = 1;
}

?>
<div class="td-main-content-wrap td-container-wrap">
<?php
    if( $header_image ): ?>
<div class="partnership-hero" style="background-image:url('<?php echo $header_image['url']; ?>'">
<div class="partner-mobile">
    <div class="exclusive-logo">
    <img src="<?php echo $partnership_logo['url']; ?>" alt="<?php echo $current_term_obj->name ?>">
    </div>
    <?php
    if($tier == 'high'):
        ?>
    <div class="partner-badge">
            <h4 class="badge"><i class="td-icon-star"></i> Premium <img src="https://nutritionrealm.com/wp-content/uploads/2019/01/NR-LOGO-81X70.png" alt=""> Partner <i class="td-icon-star"></i></h4>
    </div>
    <?php
    endif;
    ?>
</div>
</div>
<?php
    endif;
?>
<div class="flex-wrap">
    <div class="partner-sidebar" <?php if( !$header_image ): ?> style="margin:1em 0 0 0;" <?php endif; ?>>
        <div class="exclusive-logo">
                <img src="<?php echo $partnership_logo['url']; ?>" alt="<?php echo $current_term_obj->name ?>">
        </div>
        <?php
        if($tier == 'high'):
            ?>
        <div class="partner-badge">
                <h4 class="badge"><i class="td-icon-star"></i> Premium <img src="https://nutritionrealm.com/wp-content/uploads/2019/01/NR-LOGO-81X70.png" alt=""> Partner <i class="td-icon-star"></i></h4>
        </div>
        <?php
        endif;
        ?>
        <div class="partner-description">
        <div class="premium-link"><a href="<?php echo $website ?>" class="premium-link-btn">Visit <strong><?php echo $current_term_obj->name ?></strong> Site <i class="fa fa-external-link"></i></a></div>
                <p><?php echo $current_term_obj->description ?></p>
                <?php
                if($tier == 'high'):
                    ?>
            <h3 class="premium-title">Hints & Tips</h3>
            <p><?php
                    if( $hints ):
                        echo $hints;
                    endif;
                endif;
                ?>
            </p>
        </div>
    </div>
    <div class="partner-wrap">
    <?php
        $args = array(
            'post_type' => 'nr_deals',
            'order' => 'DESC',
            'partnership' => $current_term_obj->slug
        );
        $deals = new WP_Query( $args );
        while ( $deals->have_posts() ) : $deals->the_post();
        $product_image = get_field('product_image');
        ?>
            <div class="single-deal single-premium">
                <div class="single-deal-wrap">
                    <div class="single-deal-img">
                    <?php
                                $premium = get_field('premium');
                                $premium_tier = get_field('premium_tier');
                                if($premium){
                                ?>
                        <a href="<?php the_field('coupon_url'); ?>" target="_blank">
                    <img src="<?php if( $product_image ){
                                        echo $product_image;
                                    }else{
                                        echo $partnership_logo['url'];
                                    } ?>" alt="<?php the_title(); ?>" style="width:100%;">
                    </a>
                        <?php
                                }else{
                                    ?>
                                    <a href="<?php the_field('coupon_url'); ?>" target="_blank">
                    <img src="<?php if( $product_image ){
                                        echo $product_image;
                                    }else{
                                        echo $partnership_logo['url'];
                                    } ?>" alt="<?php the_title(); ?>" style="width:100%;">
                    </a>
                                    <?php
                                }
                                ?>

                    </div>
                    <div class="coupon-content">
                        <h3><?php the_field('partnership_deal'); ?></h3>
                        <?php
                            $premium = get_field('premium');
                            $premium_tier = get_field('premium_tier');
                            if(is_user_logged_in() || !$premium){
                        ?>
                        <p>Use code <strong><?php the_field('coupon_code') ?></strong> at checkout.</p>
                        <p style="padding:0 1em;font-size:" class="coupon-content-description"><?php the_excerpt(); ?></p>
                        <a href="<?php the_field('coupon_url'); ?>" class="btn-deal-redeem" target="_blank"><i class="td-shopping-cart"></i> Redeem Now</a>
                        <?php
                            }else{
                                if($premium_tier == 'gold'){
                                ?>
                                <?php
                                    echo do_shortcode('[mepr-membership-registration-form id="2241"]');
                                ?>
                                <?php
                                    } elseif($premium_tier == 'premium') {
                                ?>
                                <div class="premium-tier-subscription">
                                <svg style="width:5%;position:absolute;bottom:32px;right:32px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.29"><defs><style>.cls-1{fill:rgba(255,255,255,.5);}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M762.39,258.19l-219.5-20.76a38,38,0,0,1-31.45-23.27L432.82,23.59c-12.58-31.45-57.24-31.45-69.82,0L285,214.16c-5,13.21-17.61,22-31.45,23.27L34.06,258.19c-32.71,3.14-45.92,44-21.39,66L178.09,469.52A37.61,37.61,0,0,1,190,506.62L140.35,710.4c-7.55,32.08,27.05,58.49,56,41.52l183-107.56a38.05,38.05,0,0,1,38.37,0l183,107.56c28.93,17,63.53-8.81,56-41.52L607.66,506.62a37.61,37.61,0,0,1,12-37.1L785,324.23C808.93,302.21,795.09,261.33,762.39,258.19Z"/></g></g></svg>
                                    <p>Premium Partner Subscription</p>
                                    <a href="/register/premium" class="premium-tier-cta">Learn More</a>
                                </div>
                                <?php
                                    }
                                }
                        ?>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</div>
        <h5 style="text-align:center;">Looking for more?</h5>
        <a href="/deals" class="btn-alldeals">View Deals by All Partners</a>
</div>

<?php

get_footer();
