<?php
// Template 1 - post-final-1.psd - featured image float left
//get the global sidebar position from td_single_template_vars.php

locate_template('includes/wp_booster/td_single_template_vars.php', true);

get_header();

global $loop_sidebar_position, $td_sidebar_position, $post;

$td_mod_single = new td_module_single($post);
$quality = get_field('quality_group');
$price = get_field('price_group');
$customer_service = get_field('customer_service_group');
$flavor = get_field('flavor_group');
$video = get_field('video_group');
$collections = get_field('collections');
$coupons = get_field('coupons');
$brand = get_field('brand');
$footer = get_field('footer');
?>
<div class="td-main-content-wrap td-container-wrap" id="swup">
        <?php
        locate_template('loop-single-review.php', true);
        ?>
    <div class="nr_review_stripe nr_review_video_wrap" style="background-image:url('<?php echo $video['background']; ?>');">
        <div class="nr_review_content nr_review_image" style="height:360px;">
            <a href="<?php echo $footer['cta'] ?>" target="_blank" class="nr_review_cta" style="margin-top:4em;font-weight:bold">SHOP <?php the_title(); ?> NOW </a>
        </div>
    </div>

<div class="nr_review_stripe">
    <div class="nr_review_wrap">
    <div class="nr_review_column-50">
        <div class="nr_review_content" data-aos="fade-right">
        <h2>Quality (and transparency)</h2>
        <?php echo $quality['quality']; ?>
        <a href="<?php echo $quality['quality_cta']; ?>" class="nr_review_cta" style="padding: .675em;margin: 1.5em 0 .2em 0;width: 55%;">Learn More</a>
        </div>
    </div>
    <div class="nr_review_column-50 nr_review_image" target="_blank" data-aos="fade-up" style="background-image:url('<?php echo $quality['quality_image']; ?>');">
    </div>
    </div>
</div>

<div class="nr_review_stripe">
    <div class="nr_review_wrap">
    <div class="nr_review_column-50 nr_review_image" data-aos="fade-up" style="background-image:url('<?php echo $price['price_image']; ?>');">
    </div>
    <div class="nr_review_column-50">
        <div class="nr_review_content" data-aos="fade-left">
        <h2>Price</h2>
        <?php echo $price['price']; ?>
        <a href="<?php echo $quality['quality_cta']; ?>" target="_blank" data-aos="fade-up" class="nr_review_cta" style="padding: .675em;margin: 1.5em 0 .2em 0;width: 55%;">Explore Now</a>
    </div>
        </div>
    </div>
</div>

<div class="nr_review_stripe">
    <div class="nr_review_wrap">
    <div class="nr_review_column-50">
        <div class="nr_review_content" data-aos="fade-right">
        <h2>Flavor</h2>
        <?php echo $flavor['flavor']; ?>
        <a href="<?php echo $quality['quality_cta']; ?>" target="_blank" class="nr_review_cta" style="padding: .675em;margin: 1.5em 0 .2em 0;width: 55%;">Explore Now</a>
        </div>
    </div>
    <div class="nr_review_column-50 nr_review_image" data-aos="fade-up" style="background-image:url('<?php echo $flavor['flavor_image']; ?>');">
    </div>
    </div>
</div>

<div class="nr_review_stripe">
    <div class="nr_review_wrap">
    <div class="nr_review_column-50 nr_review_image" data-aos="fade-up" style="background-image:url('<?php echo $customer_service['customer_service_image']; ?>');">
    </div>
    <div class="nr_review_column-50" data-aos="fade-left">
        <div class="nr_review_content">
        <h2>Customer Service</h2>
        <?php echo $customer_service['customer_service']; ?>
        <a href="<?php echo $quality['quality_cta']; ?>" target="_blank" class="nr_review_cta" style="padding: .675em;margin: 1.5em 0 .2em 0;width: 55%;">Learn More</a>
        </div>
     </div>
    </div>
</div>

<div class="nr_review_stripe nr_review_review" style="background:rgb(228,234,241);">
    <div class="nr_review_content" style="padding:2em 2em 1em 2em;">
        <h2 style="text-align:center;">Our <strong><?php the_title(); ?></strong> Rating</h2>
    </div>
    <div class="nr_review_wrap nr_review_wrap_responsive" style="max-width: 1024px;">
        <div class="nr_review_column-70 nr_review_review-column">
            <div class="nr_review_content" style="background:#FFF;margin-bottom: 3em;">
                <div class="nr_review_wrap">
                    <div class="nr_review_column-70" style="margin:0 auto;width:55%;padding:0;display: flex;flex-direction: column;justify-content: center;">
<img style="width:100%;text-align:center;margin:1em auto;" src="<?php foreach( $brand as $brnd ): echo get_field('logo', $brnd->ID); endforeach; ?>" alt="<?php the_title(); ?>">
                        <div style="text-align:center;width:100%">
                        <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.29"><defs><style>.cls-1{fill:#10cfc9;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M762.39,258.19l-219.5-20.76a38,38,0,0,1-31.45-23.27L432.82,23.59c-12.58-31.45-57.24-31.45-69.82,0L285,214.16c-5,13.21-17.61,22-31.45,23.27L34.06,258.19c-32.71,3.14-45.92,44-21.39,66L178.09,469.52A37.61,37.61,0,0,1,190,506.62L140.35,710.4c-7.55,32.08,27.05,58.49,56,41.52l183-107.56a38.05,38.05,0,0,1,38.37,0l183,107.56c28.93,17,63.53-8.81,56-41.52L607.66,506.62a37.61,37.61,0,0,1,12-37.1L785,324.23C808.93,302.21,795.09,261.33,762.39,258.19Z"/></g></g></svg>
                        <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.29"><defs><style>.cls-1{fill:#10cfc9;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M762.39,258.19l-219.5-20.76a38,38,0,0,1-31.45-23.27L432.82,23.59c-12.58-31.45-57.24-31.45-69.82,0L285,214.16c-5,13.21-17.61,22-31.45,23.27L34.06,258.19c-32.71,3.14-45.92,44-21.39,66L178.09,469.52A37.61,37.61,0,0,1,190,506.62L140.35,710.4c-7.55,32.08,27.05,58.49,56,41.52l183-107.56a38.05,38.05,0,0,1,38.37,0l183,107.56c28.93,17,63.53-8.81,56-41.52L607.66,506.62a37.61,37.61,0,0,1,12-37.1L785,324.23C808.93,302.21,795.09,261.33,762.39,258.19Z"/></g></g></svg>
                        <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.29"><defs><style>.cls-1{fill:#10cfc9;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M762.39,258.19l-219.5-20.76a38,38,0,0,1-31.45-23.27L432.82,23.59c-12.58-31.45-57.24-31.45-69.82,0L285,214.16c-5,13.21-17.61,22-31.45,23.27L34.06,258.19c-32.71,3.14-45.92,44-21.39,66L178.09,469.52A37.61,37.61,0,0,1,190,506.62L140.35,710.4c-7.55,32.08,27.05,58.49,56,41.52l183-107.56a38.05,38.05,0,0,1,38.37,0l183,107.56c28.93,17,63.53-8.81,56-41.52L607.66,506.62a37.61,37.61,0,0,1,12-37.1L785,324.23C808.93,302.21,795.09,261.33,762.39,258.19Z"/></g></g></svg>
                        <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.29"><defs><style>.cls-1{fill:#10cfc9;}</style></defs><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M762.39,258.19l-219.5-20.76a38,38,0,0,1-31.45-23.27L432.82,23.59c-12.58-31.45-57.24-31.45-69.82,0L285,214.16c-5,13.21-17.61,22-31.45,23.27L34.06,258.19c-32.71,3.14-45.92,44-21.39,66L178.09,469.52A37.61,37.61,0,0,1,190,506.62L140.35,710.4c-7.55,32.08,27.05,58.49,56,41.52l183-107.56a38.05,38.05,0,0,1,38.37,0l183,107.56c28.93,17,63.53-8.81,56-41.52L607.66,506.62a37.61,37.61,0,0,1,12-37.1L785,324.23C808.93,302.21,795.09,261.33,762.39,258.19Z"/></g></g></svg>
                        <svg style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 797.07 757.21"><defs><style>.cls-1{fill:#10cfc9;}.cls-2{fill:#eaeaea;}</style></defs><title>Asset 5</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M398.53,0A37,37,0,0,0,363,23.57L285,214.14c-5,13.21-17.61,22-31.45,23.27L34.06,258.17c-32.71,3.14-45.92,44-21.39,66L178.09,469.5A37.62,37.62,0,0,1,190,506.61L140.35,710.38c-7.55,32.09,27.05,58.5,56,41.52l183-107.56a38.23,38.23,0,0,1,19.18-5.19Z"/><path class="cls-2" d="M398.53,0a37.05,37.05,0,0,1,35.54,23.57l78,190.57c5,13.21,17.61,22,31.44,23.27L763,258.17c32.71,3.14,45.91,44,21.38,66L619,469.5a37.6,37.6,0,0,0-12,37.11l49.69,203.77c7.54,32.09-27.05,58.5-56,41.52l-183-107.56a38.18,38.18,0,0,0-19.18-5.19Z"/></g></g></svg>
                        </div>
                    </div>
                    <div class="nr_review_column-30" style="width:30%;margin:0 auto;">
                        <div class="nr_review_overall-rating" style="margin:0 auto;background-position:center;width:100%;height:100%;background-image:url(/wp-content/uploads/2019/05/TFC19-NR-Rating-Icons-01.png);background-size:cover;background-repeat:no-repeat">
                            <h1><?php echo get_field('overall_rating'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nr_review_content" style="padding:1em 2.5em 3em 2.5em;background:#FFF;margin-bottom: 3em;">
                <h2 style="font-size:2.6em"><strong><?php the_title(); ?></strong> Detailed Rating</h2>
                <h4>Quality <span style="float:right;"><?php echo $quality['quality_rating']; ?> / 5</span></h4>
                <div class="nr_review_bar_wrap">
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" style="width:<?php if($quality['quality_rating']>=1): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="100" style="width:<?php if($quality['quality_rating']>=2): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="200" style="width:<?php if($quality['quality_rating']>=3): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="300" style="width:<?php if($quality['quality_rating']>=4): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="400" style="width:<?php if($quality['quality_rating']==5): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                </div>
                <h4>Price <span style="float:right;"><?php echo $price['price_rating']; ?> / 5</span></h4>
                <div class="nr_review_bar_wrap" style="justify-content:space-between;">
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" style="width:<?php if($price['price_rating']>=1): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="100" style="width:<?php if($price['price_rating']>=2): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="200" style="width:<?php if($price['price_rating']>=3): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="300" style="width:<?php if($price['price_rating']>=4): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="400" style="width:<?php if($price['price_rating']==5): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                </div>
                <h4>Flavor <span style="float:right;"><?php echo $flavor['flavor_rating']; ?> / 5</span></h4>
                <div class="nr_review_bar_wrap" style="justify-content:space-between;">
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" style="width:<?php if($flavor['flavor_rating']>=1): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="100" style="width:<?php if($flavor['flavor_rating']>=2): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="200" style="width:<?php if($flavor['flavor_rating']>=3): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="300" style="width:<?php if($flavor['flavor_rating']>=4): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos="slide-right" data-aos-once="true" data-aos-delay="400" style="width:<?php if($flavor['flavor_rating']==5): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                </div>
                <h4>Customer Service <span style="float:right;"><?php echo $customer_service['customer_service_rating']; ?> / 5</span></h4>
                <div class="nr_review_bar_wrap" style="justify-content:space-between;">
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos-once="true" data-aos="slide-right" style="width:<?php if($customer_service['customer_service_rating']>=1): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos-once="true" data-aos="slide-right" data-aos-delay="100" style="width:<?php if($customer_service['customer_service_rating']>=2): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos-once="true" data-aos="slide-right" data-aos-delay="200" style="width:<?php if($customer_service['customer_service_rating']>=3): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos-once="true" data-aos="slide-right" data-aos-delay="300" style="width:<?php if($customer_service['customer_service_rating']>=4): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                    <div class="rating_bar" style="width:18%;background:#EEE;">
                        <div class="rating_bar_fill" data-aos-once="true" data-aos="slide-right" data-aos-delay="400" style="width:<?php if($customer_service['customer_service_rating']==5): echo '100%'; else: echo '0%'; endif; ?>;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nr_review_column-30">
            <div class="nr_review_content" style="background:#FFF;padding:1em 2em;">
            <h3 style="font-weight: bold"><strong><?php the_title() ?></strong> Pros</h3>
            <div class="nr_review_pro">
            <?php echo get_field('review_pros') ?>
            </div>
            <h3 style="font-weight: bold"><strong><?php the_title() ?></strong> Cons</h3>
            <div class="nr_review_con">
                <?php echo get_field('review_cons') ?>
            </div>
            </div>
            </div>
    </div>
</div>

<div class="nr_review_stripe">
    <div class="nr_review_content" style="padding-bottom:.5em;padding-top:2em;">
        <h2 style="text-align:center;"><strong><?php the_title() ?></strong> Customer Ratings</h2>
    </div>
    <div class="nr_review_slider" data-flickity='{"cellAlign": "left", "wrapAround": true, "autoPlay": 7000, "pageDots": false,  "imagesLoaded": true}'>
            <div class="nr_review_content" style="width:100%;text-align:center">
            <p>Amazing benefits for anxiety and muscle aches. The best hemp salve I’ve tried so far. </p>
            <h4>Nicholas G.</h4><h5 style="margin:0;color:#3FC1BF"><strong>★★★★★</strong></h5>
            </div>

            <div class="nr_review_content" style="width:100%;text-align:center">
            <p>I use twice the dosage for the gummies, but they definitely have helped me sleep better at night. </p>
            <h4>Vicky F.</h4><h5 style="margin:0;color:#3FC1BF"><strong>★★★★</strong></h5>
            </div>

            <div class="nr_review_content" style="width:100%;text-align:center">
            <p>After suffering from RA since 2008 with injections, pain meds, infusion's hemp products from Pure Relief has enabled me to stop the pain meds and have a better life.</p>
            <h4>James T.</h4><h5 style="margin:0;color:#3FC1BF"><strong>★★★★★</strong></h5>
            </div>

            <div class="nr_review_content"style="width:100%;text-align:center">
            <p>I'm very pleased with Pure Relief. I recommend their products to everyone. I couldn't afford to pay the $175 my local hemp store is charging for 1,000 mg hemp oil. Pure Relief has a better product and it is priced around $80! Pure Relief's hemp oil has literally saved my life.</p>
            <h4>Timothy U.</h4><h5 style="margin:0;color:#3FC1BF"><strong>★★★★★</strong></h5>
            </div>
    </div>
</div>

<div class="nr_review_stripe" style="background:rgb(228,234,241);">
<div class="nr_review_content" style="padding-bottom:.5em;padding-top:2em;">
    <h2 style="text-align:center;"><strong><?php the_title() ?></strong> Collections</h2>
</div>
    <div class="nr_review_slider" data-flickity='{"cellAlign": "left", "wrapAround": true, "autoPlay": 10000, "pageDots": false, "imagesLoaded": true, "groupCells": "80%"}'>
    <?php foreach( $collections as $collection ): ?>
        <div class="nr_review_collection" style="border:16px solid transparent;">
            <div class="nr_review_collection-wrap" style="background:#FFF;">
                <div class="nr_review_collection-image" style="background-image:url(<?php echo get_the_post_thumbnail_url( $collection->ID ); ?>);"></div>
                <div class="nr_review_collection-content">
                <h3><?php echo get_the_title( $collection->ID ); ?></h3>
                <p class="nr_review_collection-list">
                <?php

                $content_post = get_post($collection->ID);
                $content = $content_post->post_content;

                echo $content;

                ?>
                </p>
                <a href="<?php $collection_url = get_field('url', $collection->ID); echo $collection_url; ?>" target="_blank" class="nr_review_cta" style="padding: .675em;margin: .5em auto 0 auto;width: 100%;">Shop Now</a>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<div id="discount-coupons" class="nr_review_stripe" style="background-size:cover;background-image:url('/wp-content/uploads/2019/05/Rectangle-Copy-12.jpg');padding-bottom:6em;">
    <div class="nr_review_content">
        <h2 style="text-align:center;"><strong><?php the_title() ?></strong> COUPONS</h2>
        </div>
        <div class="nr_review_wrap">
        <?php foreach( $coupons as $coupon ): ?>
        <div class="nr_review_coupon-wrap">
        <div class="nr_review_coupon"  data-aos="fade-up" data-aos-once="true">
       <img src="<?php echo get_field('image', $coupon->ID); ?>" alt="Pure Relief">
            <div class="nr_review_coupon-value">
                <?php
                if(get_field('value', $coupon->ID) == ''){
                ?>
                <?php echo get_field('partnership_deal', $coupon->ID); ?>
                <?php
                } else {
                ?>
                <span><?php echo get_field('value', $coupon->ID); ?></span> COUPON
                <?php
                }
                ?>
            </div>
        </div>
        <p style="margin: 1em auto 0 auto;text-align: center;font-size: 1.5em;">USE CODE <strong style="font-weight: bold;"><?php echo get_field('coupon_code', $coupon->ID); ?></strong>
    </p>
        <a href="<?php echo get_field('coupon_url', $coupon->ID); ?>" target="_blank" class="nr_review_cta" style="margin-top:1em;">Get Coupon</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="nr_review_stripe" style="background-size:cover;background-image:url('<?php echo $footer['background'] ?>');padding-top:90px;padding-bottom:200px;">
    <div class="nr_review_content">
        <h2 style="margin:0 auto;max-width:500px; text-align:center;">CLICK BELOW TO SHOP
<strong><?php the_title() ?></strong> NOW</h2>
        <a href="<?php echo $footer['cta'] ?>" class="nr_review_cta" target="_blank">SHOP NOW <i class="fas fa-shopping-cart"></i></a>
    </div>
</div>

</div>
<?php

get_footer();
