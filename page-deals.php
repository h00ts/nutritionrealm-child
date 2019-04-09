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

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}

// check if buddypress is active
$is_buddypress_template = function_exists( 'is_buddypress' ) ? is_buddypress() : false;


/**
 * detect the page builder
 */
$td_use_page_builder = td_global::is_page_builder_content();



if ($td_use_page_builder) {

    // the page is rendered using the page builder template (no sidebars)
    if (have_posts()) { ?>
        <?php while ( have_posts() ) : the_post(); ?>

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
                            <h3><a href="<?php the_permalink(); ?>"><?php the_field('partnership_deal'); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <p>Use code <strong><?php the_field('coupon_code') ?></strong> at checkout.</p>
                            <a href="<?php the_field('coupon_url'); ?>" class="btn-deal-redeem" target="_blank">Redeem Now</a>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </div> <!-- /.td-main-content-wrap -->


        <?php endwhile; ?>
    <?php }
} else {

    //no page builder detected, we load a default page template with sidebar / no sidebar
    ?>


<div class="td-main-content-wrap td-container-wrap">
    <div class="td-container tdc-content-wrap <?php echo $td_sidebar_position; ?>">
        <div class="td-crumb-container">
            <?php echo td_page_generator::get_page_breadcrumbs(get_the_title()); ?>
        </div>
        <div class="td-pb-row">
            <?php
            switch ($loop_sidebar_position) {
                default:
                    ?>
                        <div class="td-pb-span8 td-main-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                if (have_posts()) {
                                    while ( have_posts() ) : the_post();
                                        ?>
                                        <div class="td-page-header">
                                            <h1 class="entry-title td-page-title">
                                                <span><?php the_title() ?></span>
                                            </h1>
                                        </div>
                                        <div class="td-page-content">
                                        <?php
                                            the_content();
                                    endwhile;//end loop

                                }
                                ?>
                                </div>
                                <?php
                                //Display comments when we are not on buddypress template; when buddypress is true do nothing
                                if ($is_buddypress_template === false) {
                                    if($td_enable_or_disable_page_comments == 'show_comments') {
                                        comments_template('', true);
                                    }
                                } ?>
                            </div>
                        </div>
                        <div class="td-pb-span4 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                    <?php
                    break;

                case 'sidebar_left':
                    ?>
                    <div class="td-pb-span8 td-main-content <?php echo $td_sidebar_position; ?>-content" role="main">
                        <div class="td-ss-main-content">
                            <?php

                            if (have_posts()) {
                                while ( have_posts() ) : the_post();
                                    ?>
                                    <div class="td-page-header">
                                        <h1 class="entry-title td-page-title">
                                            <span><?php the_title() ?></span>
                                        </h1>
                                    </div>
                                    <div class="td-page-content">
                                    <?php
                                    the_content();
                                endwhile; //end loop
                            }
                            ?>
                            </div>
                            <?php
                            //Display comments when we are not on buddypress template; when buddypress is true do nothing
                            if ($is_buddypress_template === false) {
                                if($td_enable_or_disable_page_comments == 'show_comments') {
                                    comments_template('', true);
                                }
                            } ?>
                        </div>
                    </div>
	                <div class="td-pb-span4 td-main-sidebar" role="complementary">
		                <div class="td-ss-main-sidebar">
			                <?php get_sidebar(); ?>
		                </div>
	                </div>
                    <?php
                    break;

                case 'no_sidebar':
                    ?>
                    <div class="td-pb-span12 td-main-content" role="main">

                        <?php
                        if (have_posts()) {
                            while ( have_posts() ) : the_post();
                                ?>
                                <div class="td-page-header">
                                    <h1 class="entry-title td-page-title">
                                        <span><?php the_title() ?></span>
                                    </h1>
                                </div>
                                <div class="td-page-content">
                                <?php
                                the_content();
                            endwhile; //end loop
                        }
                        ?>
                        </div>
                        <?php
                        //Display comments when we are not on buddypress template; when buddypress is true do nothing
                        if ($is_buddypress_template === false) {
                            if($td_enable_or_disable_page_comments == 'show_comments') {
                                comments_template('', true);
                            }
                        } ?>
                    </div>
                    <?php
                    break;
            }
            ?>
        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

    <?php
}




get_footer();
