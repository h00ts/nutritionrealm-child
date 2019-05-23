<?php
/*  ----------------------------------------------------------------------------
    the blog index template
 */

get_header();

//set the template id, used to get the template specific settings - this was the old home.php template
$template_id = 'home';

//prepare the loop variables
global $loop_module_id, $loop_sidebar_position;
$loop_module_id = td_util::get_option('tds_' . $template_id . '_page_layout', 15); //module 1 is default
?>

<div class="nr_container nr_blog-index">
    <section class="carousel nr_carousel" data-flickity='{"cellAlign": "left", "wrapAround": true, "autoPlay": 9000, "bgLazyLoad": true, "pageDots": false, "fade": true, "imagesLoaded": true}'>
        <?php
            $args = array( 'meta_key' => 'featured_post', 'meta_value' => true, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 3, 'cat' => -387 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <article class="nr_hero-article">
                <div class="nr_hero-article-content">
                    <div class="nr_hero-article-overlay">
                    <?php the_category(); ?>
                    <h1><a href="<?php the_permalink(); ?>"><span style="background:#FFF;"><?php the_title(); ?></span></a></h1>
                    <p><span style="background:#FFF;"><?php the_excerpt(); ?></span></p>
                    <p style="font-size:.9em;font-weight:bold;">By <?php the_author(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="nr_hero-article-more">Read More</a>
                    </div>
                </div>
                <div class="nr_hero-article-image"  style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>
            </article>
        <?php
            endwhile;
        ?>
    </section>
    <section class="nr_module nr_module-blue">
        <div class="nr_module-head">
            <h1 class="nr_heading">trending now</h1>
        </div>
        <div class="nr_articles nr_articles-noflex" data-flickity='{"groupCells": true, "wrapAround": false, "autoPlay": false, "bgLazyLoad": false, "pageDots": false, "imagesLoaded": false}'>
        <?php
            $args = array( 'meta_key' => 'trending_post', 'meta_value' => true, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 5, 'cat' => -387 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <article class="nr_article nr_article-20">
            <a href="<?php the_permalink(); ?>"><div class="nr_article-image"  style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div></a>
                <div class="nr_article-content">
                    <?php the_category(); ?>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </div>
                <div class="nr_article-date"><span><i class="far fa-calendar-alt"></i> <?php the_date();?> </span></div>
            </article>
        <?php
            endwhile;
        ?>
        </div>
    </section>
   <section class="nr_module nr_ad">
        <div class="nr_module-head">
            <h1 class="nr_heading" style="margin-top:0;margin-bottom:0;">
            our partners
            </h1>
        </div>
        <div class="nr_sponsors" style="padding:2em 0;background:#FFF;display:flex;justify-content:space-evenly;">
            <?php
                $term = get_field('partnership');
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
                 <?php
                   while ($the_query->have_posts()) {
                     $the_query->the_post();
                     $terms = get_the_terms( $post->ID , 'partnership' );
                     ?>
                     <div style="width:100%;max-width:250px;min-width:150px;margin:0 2em;height:150px;background-size:cover;background-image:url(<?php the_field('logo', $terms[0]); ?>);"></div>
                     <?php
                   }
             }
        wp_reset_postdata();
    ?>
        </div>
    </section>
    <?php
    /*
    <section class="nr_module">
        <div class="nr_articles">
            <div class="nr_cta nr_cta-30">
                <div class="nr_module-head-icon"><i class="far fa-question-circle fa-5x"></i></div>
                <h1>Ask Our Nutritionists</h1>
                <p>You're not in this alone! Join the Paleo discussion and connect with thousands of other like minded people.</p>
                <a href="#" class="nr_cta-fp-btn">ASK</a>
            </div>
            <div class="nr_cta nr_cta-30">
                <div class="nr_module-head-icon"><i class="fab fa-youtube fa-5x"></i></div>
                <h1>Our Channel</h1>
                <p>Everything from making delicious Paleo desserts to soothing lower back pain &emdash; we've got a video that will show you how to do it.</p>
                <a href="#" class="nr_cta-fp-btn">WATCH</a>
            </div>
            <div class="nr_cta nr_cta-30">
                <div class="nr_module-head-icon"><i class="fas fa-brain-alt fa-5x"></i></div>
                <h1>Our Experts</h1>
                <p>You're not in this alone! Join the Paleo discussion and connect with thousands of other like minded people.</p>
                <a href="#" class="nr_cta-fp-btn">LISTEN</a>
            </div>
        </div>
    </section>
    */
    ?>
    <section class="nr_module nr_module-blue">
        <div class="nr_module-head">
            <h1 class="nr_heading">latest headlines</h1>
        </div>
        <div class="nr_articles nr_articles-noflex" data-flickity='{"groupCells": true, "wrapAround": false, "autoPlay": false, "bgLazyLoad": false, "pageDots": false, "imagesLoaded": false}'>
        <?php
            $args = array( 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 9, 'cat' => -387 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <article class="nr_article nr_article-20">
                <a href="<?php the_permalink(); ?>"><div class="nr_article-image"  style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div></a>
                <div class="nr_article-content">
                    <?php the_category(); ?>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </div>
                <div class="nr_article-date"><span><i class="far fa-calendar-alt"></i> <?php the_date();?></span> </div>
            </article>
        <?php
            endwhile;
        ?>
            <article class="nr_article nr_article-20">
                <div class="nr_article-content">
                    <h2>explore more...</h2>
                    <a href="/category/fitness/" class="nr_latest-category">Fitness</a>
                    <a href="/category/lifestyle/" class="nr_latest-category">Lifestyle</a>
                    <a href="/category/nutrition/" class="nr_latest-category">Nutrition</a>
                </div>
            </article>
        </div>
    </section>
    <section class="nr_module nr_frontpage-spotify">
        <!--<iframe src="https://open.spotify.com/embed/user/spotify/playlist/37i9dQZF1DWWBHeXOYZf74" width="270" height="585" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        -->    </section>
    <section class="nr_module nr_frontpage-instagram">
        <div class="nr_module-head">
            <h1 class="nr_heading" style="margin-top:0;margin-bottom:0;">
            follow us on instagram
            </h1>
        </div>
        <div class="nr_articles nr_articles-noflex">
            <?php echo do_shortcode('[instagram-feed showheader=false showbio=true showfollow=false showbutton=false]'); ?>
        </div>
    </section>
</div>

<?php

get_footer();