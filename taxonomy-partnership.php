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
/*********** REGULAR TIER */
if ( $tier == 'mid' ):
    if( $header_image ): ?>
    <div class="partnership-hero" style="background-color: rgb(62,193,191); background-color: linear-gradient(90deg, rgba(62,193,191,1) 0%, rgba(0,169,80,1) 100%); background-image:url('<?php echo $header_image['url']; ?>'">
    </div>
<?php
    endif; ?>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="partnership-description">
        <?php if( $partnership_logo ): ?>
                            <img src="<?php echo $partnership_logo['url']; ?>" alt="<?php echo $current_term_obj->name ?>" style="float:left;">
        <?php endif; ?>
                            <h2 class="title-left">
                                <span>About <?php echo $current_term_obj->name ?></span>
                            </h2>
                            <p><?php echo $current_term_obj->description ?></p>
                            <div style="clear:both"></div>
                </div>

                <h5 style="text-align:center;">Looking for more?</h5>
                <a href="/deals" class="btn-alldeals">View All Deals</a>
    </div>
<?php

endif;
/*********** PREMIUM TIER */
if ( $tier == 'high' ):
?>
    <div class="exclusive-partner" style="background-image:url('<?php echo $header_image['url']; ?>');background-size:cover;background-repeat:no-repeat;background-position:center bottom;padding-top:200px;">
        <div class="exclusive-logo">
            <img src="<?php echo $partnership_logo['url']; ?>" alt="<?php echo $current_term_obj->name ?>" style="height:80px;padding:8px;margin:0 auto;">
        </div>
        <div class="partner-badge">
            <h4 class="badge"><i class="td-icon-star"></i> Exclusive Partner <i class="td-icon-star"></i></h4>
        </div>
        <div class="deals-wrap deals-wrap-premium">
                        <?php
                        $args = array(
                            'post_type' => 'nr_deals',
                            'order' => 'DESC',
                            'partnership' => $current_term_obj->slug
                        );
                        $deals = new WP_Query( $args );
                        while ( $deals->have_posts() ) : $deals->the_post();
                        ?>

                            <div class="single-deal single-premium">
                                <div style="width:35%;margin-right:8px;">
                                <a href="<?php the_field('coupon_url'); ?>" target="_blank"><img src="<?php the_field('product_image') ?>" alt="<?php the_title(); ?>"></a>
                                </div>
                                <div class="coupon-content">
                                    <div>
                                    <h3><?php the_field('partnership_deal'); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <p>Use code <strong><?php the_field('coupon_code') ?></strong> at checkout.</p>
                                    </div>
                                    <a href="<?php the_field('coupon_url'); ?>" class="btn-deal-redeem" target="_blank"><i class="td-shopping-cart"></i> Redeem Now</a>
                                </div>
                            </div>

                        <?php
                        endwhile;
                        ?>
                </div>
    </div>
    <div class="premium-link"><a href="#" class="premium-link-btn">Visit <strong><?php echo $current_term_obj->name ?></strong> Site <i class="faa fa-external-link"></i></a></div>
    <?php
    if( $header_image ): ?>
    <div class="partnership-hero">
    </div>
    <?php
    endif;
    ?>
    <div class="td-main-content-wrap td-container-wrap">
    <div class="premium-partner-content">
                <div class="partner-description">
                <h3 class="premium-title">
                        About <?php echo $current_term_obj->name ?>
                </h3>
                    <p><?php echo $current_term_obj->description ?></p>
                </div>
                <div class="partner-description">
                    <h3 class="premium-title">Hint & Tips</h3>
                    <p><?php
                        if( $hints ):
                            echo $hints;
                        endif;
                        ?></p>
                </div>
            </div>
            <h5 style="text-align:center;">Looking for more?</h5>
            <a href="/deals" class="btn-alldeals">View Deals by All Partners</a>
    </div>

<?php
endif;
if ( $tier == 'low' ):
?>
<div class="text-align:center;margin:3em auto;">
    <h1>Nothing Found</h1>
    <a href="/">Return to Nature Realm</a>
</div>
<?php
endif;

get_footer();
