<?php
/**
 * Partnership taxonomy template
 */

get_header();

global $loop_module_id, $loop_sidebar_position;

// get the current taxonomy object - note that it's note complete
$current_term_obj = get_queried_object();

//read the loop variables for this specific taxonomy
$loop_module_id = td_util::get_taxonomy_option($current_term_obj->taxonomy, 'tds_taxonomy_page_layout');
$loop_sidebar_position = td_util::get_taxonomy_option($current_term_obj->taxonomy, 'tds_taxonomy_sidebar_pos');

if (empty($loop_module_id)) {
    $loop_module_id = 1; // module_1 is the default
}

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
    $td_sidebar_position = 'td-sidebar-left';
}

?>

    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container <?php echo $td_sidebar_position; ?>">
            <!-- content -->
            <div class="td-pb-row">

                        <div class="td-pb-span12 td-main-content">
                            <div class="td-ss-main-content">
                                <div class="td-page-header">
                                <h3 style="text-align:center; color:#777">Deals, Coupons & Discounts</h3>
                                    <h1 style="text-align:center; font-size:2.3em; font-weight:bold; text-transform: uppercase; margin-top:10px;">
                                        <?php echo $current_term_obj->name ?>
                                    </h1>
                                    <p><?php echo $current_term_obj->description ?></p>
                                </div>
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
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_field('partnership_deal'); ?></a></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <p>Use code <strong><?php the_field('coupon_code') ?></strong> at checkout.</p>
                                    <a href="<?php the_field('coupon_url'); ?>" class="btn-deal-redeem" target="_blank">Redeem Now</a>
                                    </div>
                                <?php

                                endwhile;
                                ?>
                            </div>
                            <h4 style="text-align:center;">Looking for more?</h4>
                            <a href="/deals" class="btn-alldeals">View All Deals</a>
                            </div>
                        </div>

            </div> <!-- /.td-pb-row -->
        </div> <!-- /.td-container -->
    </div> <!-- /.td-main-content-wrap -->

<?php

get_footer();