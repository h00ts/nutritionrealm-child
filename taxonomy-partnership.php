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
        <div class="premium-link"><a href="#" class="premium-link-btn">Visit <strong><?php echo $current_term_obj->name ?></strong> Site <i class="fa fa-external-link"></i></a></div>
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
                    <a href="<?php the_field('coupon_url'); ?>" target="_blank">
                    <img src="<?php if( $product_image ){
                                        echo $product_image;
                                    }else{
                                        echo $partnership_logo['url'];
                                    } ?>" alt="<?php the_title(); ?>" style="width:100%;">
                    </a>
                    </div>
                    <div class="coupon-content">
                        <h3><?php the_field('partnership_deal'); ?></h3>
                        <p style="padding:0 1em;font-size:"><?php the_excerpt(); ?></p>
                        <a href="<?php the_field('coupon_url'); ?>" class="btn-deal-redeem" target="_blank"><i class="td-shopping-cart"></i> Redeem Now</a>
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
