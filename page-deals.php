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
          <div class="carousel deals-slider" data-flickity='{"cellAlign": "left", "wrapAround": true, "autoPlay": false, "bgLazyLoad": true, "pageDots": false, "draggable": false}'>
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
    <a href="/deals" class="deal-cat-active">All Deals</a>
<?php
$terms = get_terms(
    array(
        'taxonomy'   => 'deal_categories',
        'hide_empty' => false,
    )
);

if ( ! empty( $terms ) && is_array( $terms ) ) {
    foreach ( $terms as $term ) { ?>
        <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
            <?php echo $term->name; ?>
        </a><?php
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
                        $args = array( 'post_type' => 'nr_deals', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                            <div class="single-deal">
                                <div>
                                <a href="<?php the_field('coupon_url'); ?>" target="_blank"><img src="<?php the_field('image') ?>" alt="<?php the_title(); ?>"></a>
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

<?php
        endwhile;
    }
?>
        </div>
    </div>
</div>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-bg-lazyload@1/bg-lazyload.js"></script>

<?php
get_footer();
