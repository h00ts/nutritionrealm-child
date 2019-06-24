<?php
/* Template Name: Deals */

get_header();

$template_id = 'deals';

$td_enable_or_disable_page_comments = td_util::get_option('tds_disable_comments_pages');

if (have_posts()) {
    while ( have_posts() ) : the_post();

    $args = array(
        'post_type' => 'nr_deals',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC',
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
          <div class="carousel deals-slider" data-flickity='{"cellAlign": "left", "wrapAround": true, "autoPlay": true, "bgLazyLoad": true, "pageDots": false, "draggable": false}'>
            <?php
              while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <div class="carousel-cell" data-flickity-bg-lazyload="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url();}  ?>">
                    <a href="<?php the_field('coupon_url'); ?>" target="_blank"><div class="slider-content">
                      <img src="<?php the_field('image') ?>" alt="<?php the_title() ?>" style="max-width:280px;max-height:180px;display:block;text-align:center;margin:0 auto;">
                     <h4 class="slider-title"><span><?php the_field('partnership_deal') ?></span></h4>
                     <div>
                     <p class="slider-coupon"><span>Use code <strong><?php the_field('coupon_code') ?> </strong> at checkout.</span></p>
                     </div>
                    </div>
                    </a>
                </div>
                <?php
              }

    wp_reset_postdata();
}
            ?>
          </div>
        <?php
            $args = array(
                'post_type' => 'nr_deals',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC',
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
               <div class="carousel deals-slider-nav" data-flickity='{ "asNavFor": ".deals-slider", "contain": true, "pageDots": false, "prevNextButtons": false, "adaptiveHeight": true, "draggable": false, "imagesLoaded": true }'>
                 <?php
                   while ($the_query->have_posts()) {
                     $the_query->the_post();
                     $terms = get_the_terms( $post->ID , 'partnership' );
                     ?>
                     <div class="carousel-cell" style="background-image:url(<?php the_field('white_logo', $terms[0]); ?>)"></div>
                     <?php
                   }
                 ?>
               </div>
             <?php
           }

        wp_reset_postdata();


    ?>



<div class="deal-cat-wrap">
<div class="deal-categories">
    <a href="#" class="deal-cat-active" id="deals_show_all">All Deals</a>
<?php
$terms = get_terms(
    array(
        'taxonomy'   => 'deal_categories',
        'hide_empty' => true,
        'exclude' => array( 642 ),
    )
);

if ( ! empty( $terms ) && is_array( $terms ) ) {
    foreach ( $terms as $term ) {
      ?>
        <a href="#" class="deal_cat_btn" id="deal_<?php echo $term->slug; ?>">
            <?php echo $term->name; ?>
        </a>
        <?php
  }
}
?>
</div>
</div>
            <div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
                <div class="<?php if (!td_util::tdc_is_installed()) { echo 'td-container '; } ?>tdc-content-wrap">
                    <?php
                        the_content();
                    ?>
                    <div class="deals-wrap">
                        <?php
                        $args = array( 'post_type' => 'nr_deals', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1,
                        'tax_query'      => array(
                          array(
                              'taxonomy' => 'deal_categories',
                              'terms' => 'unlisted',
                              'field' => 'slug',
                              'operator' => 'NOT IN',
                              )
                            )
                       );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                            <div class="single-deal<?php $turms = get_the_terms($post->ID, 'deal_categories'); foreach($turms as $turm): echo ' deal_' . $turm->slug; endforeach; ?>">
                                <div>
                                <a href="<?php the_field('coupon_url'); ?>" target="_blank"><img src="<?php the_field('image') ?>" alt="<?php the_title(); ?>"></a>
                                <h3><?php the_field('partnership_deal'); ?></h3>

                                <?php
                                $premium = get_field('premium');
                                $premium_tier = get_field('premium_tier');
                                if(!$premium){
                                ?>
                                <p><?php the_excerpt(); ?></p>
                                <p>Use code <strong><?php the_field('coupon_code') ?></strong> at checkout.</p>
                                <?php
                                }else{
                                  if($premium_tier == 'premium' || $premium_tier == ''){
                                    ?>
                                <?php echo do_shortcode('[mepr-membership-registration-form id="2241"]'); ?>
                                    <?php
                                  } elseif($premium_tier == 'gold') {
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
                                <?php
                                if(!$premium){
                                ?>
                                <div>
                                <a href="<?php the_field('coupon_url'); ?>" class="btn-deal-redeem" target="_blank">Redeem Now</a>
                               <!-- <p style="margin-top:4px;margin-bottom:0;font-size:10px;overflow:hidden;"><?php echo get_the_term_list( $post->ID, 'partnership', 'More by <a href="'.$term_link.'">', ', ', '</a>' ) ?></p>-->
                                </div>
                                <?php
                                }
                                ?>
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
