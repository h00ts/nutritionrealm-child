<?php
/**
 * Partnership taxonomy template
*/

get_header();

global $loop_module_id, $loop_sidebar_position;

$current_term_obj = get_queried_object();
$partnership_logo = get_field('logo', $current_term_obj);
$header_image = get_field('header_image', $current_term_obj);

$loop_module_id = td_util::get_taxonomy_option($current_term_obj->taxonomy, 'tds_taxonomy_page_layout');
$loop_sidebar_position = td_util::get_taxonomy_option($current_term_obj->taxonomy, 'tds_taxonomy_sidebar_pos');

if (empty($loop_module_id)) {
    $loop_module_id = 1;
}

?>
<?php if( $header_image ): ?>
    <div class="partnership-hero" style="background-color: rgb(62,193,191); background-color: linear-gradient(90deg, rgba(62,193,191,1) 0%, rgba(0,169,80,1) 100%); background-image:url('<?php echo $header_image['url']; ?>'">
        <!--<img src="" alt="">-->
    </div>
<?php endif; ?>
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
                <h2 class="title-center">Exclusive Deals</h2>
                        <div class="deals-wrap">
                        <?php
                        $args = array(
                            'post_type' => 'nr_deals',
                            'partnership' => $current_term_obj->slug
                        );
                        $deals = new WP_Query( $args );
                        while ( $deals->have_posts() ) : $deals->the_post();
                        ?>

                            <div class="single-deal">
                            <a href="<?php the_permalink(); ?>" target="_blank"><img src="<?php the_field('image') ?>" alt="<?php the_title(); ?>"></a>
                            <div>
                            <h3><?php the_field('partnership_deal'); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <p>Use code <strong><?php the_field('coupon_code') ?></strong> at checkout.</p>
                            </div>
                            <div>
                            <a href="<?php the_field('coupon_url'); ?>" class="btn-deal-redeem" target="_blank">Redeem Now</a>
                             </div>
                            </div>

                        <?php
                        endwhile;
                        ?>
                </div>
                <h4 style="text-align:center;">Looking for more?</h4>
                <a href="/deals" class="btn-alldeals">View All Deals</a>
    </div>

<?php

get_footer();