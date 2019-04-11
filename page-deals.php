<?php
/* Template Name: Deals */

get_header();


//set the template id, used to get the template specific settings
$template_id = 'deals';


$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)

//get theme panel variable for page comments side wide
$td_enable_or_disable_page_comments = td_util::get_option('tds_disable_comments_pages');


//read the custom single post settings - this setting overids all of them
$td_page = td_util::get_post_meta_array($post->ID, 'td_page');
if (!empty($td_page['td_sidebar_position'])) {
    $loop_sidebar_position = $td_page['td_sidebar_position'];
}

    // the page is rendered using the page builder template (no sidebars)
    if (have_posts()) {
        while ( have_posts() ) : the_post();
?>
<h3 style="color:#777;text-align:center;">Deals, Coupons & Discounts</h3>
<div class="premium-slider">

</div>
<div class="deal-categories">
    <a href="/deals" style="border-bottom: 5px solid rgb(71,193,191);color:#333;">All Deals</a>
<?php
$terms = get_terms(
    array(
        'taxonomy'   => 'deal_categories',
        'hide_empty' => false,
    )
);

if ( ! empty( $terms ) && is_array( $terms ) ) {
    // Run a loop and print them all
    foreach ( $terms as $term ) { ?>
        <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
            <?php echo $term->name; ?>
        </a><?php
    }
}
?>
</div>
            <div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
                <div class="<?php if (!td_util::tdc_is_installed()) { echo 'td-container '; } ?>tdc-content-wrap">
                    <?php
                        the_content();
                    ?>
                    <div class="deals-wrap">
                        <?php
                        $args = array( 'post_type' => 'nr_deals', 'posts_per_page' => 30 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                            <div class="single-deal">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_field('partnership_deal'); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <p>Use code <strong><?php the_field('coupon_code') ?></strong> at checkout.</p>
                            </div>
                            <div>
                            <a href="<?php the_field('coupon_url'); ?>" class="btn-deal-redeem" target="_blank">Redeem Now</a>
                            <p style="margin-top:4px;margin-bottom:0;font-size:10px;overflow:hidden;"><?php echo get_the_term_list( $post->ID, 'partnership', 'More by <a href="'.$term_link.'">', ', ', '</a>' ) ?></p>
                            </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>

<?php
        endwhile;
    }
?>
        </div>
    </div>
</div>

    <?php

get_footer();
