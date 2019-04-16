<?php
/**
 * Partnership taxonomy template
 */

get_header();

global $loop_module_id, $loop_sidebar_position;

$current_term_obj = get_queried_object();

$loop_module_id = td_util::get_taxonomy_option($current_term_obj->taxonomy, 'tds_taxonomy_page_layout');
$loop_sidebar_position = td_util::get_taxonomy_option($current_term_obj->taxonomy, 'tds_taxonomy_sidebar_pos');

if (empty($loop_module_id)) {
    $loop_module_id = 1; // module_1 is the default
}

        $args = array(
            'post_type' => 'nr_deals',
            'posts_per_page' => -1,
            'meta_query' => array(
            array(
                'key' => 'premium',
                'value' => true
            )
            )
        );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) {
       ?>
          <div class="deals-slider">
            <?php
              while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <div class="gallery-cell" id="slide-1" style="background-image:url('<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url();}  ?>');">
                    <a href="<?php the_field('coupon_url'); ?>" target="_blank"><div class="slider-content">
                     <h4 class="slider-title"><span><?php the_field('partnership_deal') ?></span></h4>
                     </div><div style="text-align:center;">
                     <p class="slider-coupon"><span>Use code <strong><?php the_field('coupon_code') ?> </strong> at checkout.</span></p>
                    </div></a>
                </div>
                <?php
              }
            ?>
          </div>
        <?php
        wp_reset_postdata();
      }

    ?>

                                <div class="deal-categories">
                                    <a href="/deals">All Deals</a>
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
                                        <a href="<?php echo esc_url( get_term_link( $term ) ) ?>" <?php if($term->slug == $current_term_obj->slug){echo('style="border-bottom: 3px solid rgb(71,193,191);color:#333;"');} ?>>
                                            <?php echo $term->name; ?>
                                        </a><?php
                                    }
                                }
                                ?>
                                </div>



    <div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
        <div class="<?php if (!td_util::tdc_is_installed()) { echo 'td-container '; } ?>tdc-content-wrap">

                                <div class="deals-wrap">
                                <?php
                                $args = array(
                                    'post_type' => 'nr_deals',
                                    'deal_categories' => $current_term_obj->slug
                                );
                                $deals = new WP_Query( $args );
                                while ( $deals->have_posts() ) : $deals->the_post();
                                ?>
                                    <div class="single-deal">
                                        <a href="<?php the_field('coupon_url'); ?>" target="_blank"><img src="<?php the_field('image') ?>" alt="<?php the_title(); ?>"></a>
                                        <div>
                                        <h3><?php the_field('partnership_deal'); ?></h3>
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
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
    var flkty = new Flickity( '.deals-slider', {
        cellAlign: 'left',
        contain: true,
        wrapAround: true,
        autoPlay: true

    });
</script>

<?php

get_footer();
