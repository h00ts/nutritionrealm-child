<?php
// Template 7 -post-final-7.psd - full image background
//get the global sidebar position from td_single_template_vars.php

locate_template('includes/wp_booster/td_single_template_vars.php', true);

get_header();

global $loop_sidebar_position, $td_sidebar_position, $post;

$experts = get_field('expert');
$sponsor = get_field('sponsor');
$cta = get_field('cta');
$hide = get_field('hide');

$td_mod_single = new td_module_single($post);

$td_post_featured_image = td_util::get_featured_image_src($post->ID, 'full');

if (!empty($td_post_featured_image)) {

	td_js_buffer::add_to_footer(
		'jQuery(window).ready(function() {' . "\r\n" .
            '(function(){' . "\r\n" .
				'var td_backstr_item = new tdBackstr.item();' . "\r\n" .

		        'td_backstr_item.wrapper_image_jquery_obj = jQuery( "#td-full-screen-header-image" );' . "\r\n" .
		        'td_backstr_item.image_jquery_obj = td_backstr_item.wrapper_image_jquery_obj.find( \'img:first\' );' . "\r\n" .

		        'tdBackstr.add_item( td_backstr_item );' . "\r\n" .

		        "jQuery('.td-read-down a').click(function(event){" . "\r\n" .
			        "event.preventDefault();" . "\r\n" .
			        "var header_wrap = jQuery( '.td-full-screen-header-image-wrap:first' )" . "\r\n" .
			        "if ( 1 === header_wrap.length ) {" . "\r\n" .
			            "tdUtil.scrollToPosition(header_wrap.height() + header_wrap.offset().top, 1200);" . "\r\n" .
			        "}" . "\r\n" .
		        "});" . "\r\n" .
            '})();' . "\r\n" .
        '});'
    );
}

echo $td_mod_single->get_social_sharing_top();
?>

<article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class('td-post-template-7'));?> td-container-wrap" <?php echo $td_mod_single->get_item_scope();?>>

    <div class="td-full-screen-header-image-wrap">

        <div class="td-container td-post-header">
            <div class="td-crumb-container"><?php echo td_page_generator::get_single_breadcrumbs($td_mod_single->title); ?></div>

	        <div class="td-post-header-holder">

            <?php
            if($sponsor):
            ?>
                <div class="sponsored-post">Sponsored by <img src="<?php echo $sponsor ?>" alt="Sponsored post"></div>
            <?php
            endif;
            ?>
		        <div class="td-parallax-header">
		        </div>
            </div>
        </div>
        <div id="td-full-screen-header-image" class="td-image-gradient-style7">
            <img class="td-backstretch" src="<?php echo $td_post_featured_image; ?>">
        </div>
    </div>

    <div class="td-container">
        <div class="td-pb-row">
            <?php
            //the default template
            switch ($loop_sidebar_position) {
                default:
                    ?>
                        <div class="td-pb-span8 td-main-content" role="main">
                            <div class="td-ss-main-content">
                            <header class="td-post-title">

<?php echo $td_mod_single->get_category(); ?>
<?php echo $td_mod_single->get_title();?>


<?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
    <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle']; ?></p>
<?php } ?>
<div class="td-module-meta-info">
    <?php echo $td_mod_single->get_author();?>
    <?php echo $td_mod_single->get_date(false);?>
    <?php echo $td_mod_single->get_views();?>
    <?php echo $td_mod_single->get_comments();?>
</div>

</header>
                                <?php
                                if($sponsor):
                                ?>
                                    <a class="sponsor-mobile sponsor-cta" href="/review/<?php echo $cta->slug ?>">CLICK FOR <img src="<?php echo $sponsor ?>" alt="Exclusive Nutrition Realm Deals"> REVIEW</a>
                                <?php
                                endif;
                                ?>
                                <?php
                                locate_template('loop-single-7.php', true);

                                if($sponsor):
                                ?>
                                    <a class="sponsor-cta" href="/review/<?php echo $cta->slug ?>">CLICK FOR <img src="<?php echo $sponsor ?>" alt="Exclusive Nutrition Realm Deals"> REVIEW</a>
                                <?php
                                elseif(!$hide):
                                    ?>
                                    <a class="sponsor-cta" href="/deals">CLICK HERE FOR EXCLUSIVE <img src="https://nutritionrealm.com/wp-content/uploads/2019/01/NR-LOGO-81X70.png" alt="Exclusive Nutrition Realm Deals"> DEALS</a>
                                <?php
                                endif;

                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                        <div class="td-pb-span4 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">
                                <h3 style="margin: 0;color: #333;">Achieving your health goals awaits you below. <br> <strong style="color:#3FC1BF">Subscription is free!</strong></h3>
                            <div class="klaviyo-form-KvPEK5"></div>
                                <div style="width:100%;padding-bottom:24px;"></div>
                            <?php
                                 if( $experts ):
                                 ?>
                                    <p>Our expert collaborator <a href="/expert/<?php echo $experts->post_name; ?>"><?php echo $experts->post_title; ?></a> has reviewed this article.</p>
                                <?php endif; ?>
                                <?php get_sidebar(); ?>
                                <?php
                                if($sponsor):
                                ?>
                                    <a class="sponsor-cta" href="/review/<?php echo $cta->slug ?>">CLICK FOR <img src="<?php echo $sponsor ?>" alt="Exclusive Nutrition Realm Deals"> REVIEW</a>
                                <?php
                                elseif(!$hide):
                                    ?>
                                    <a class="sponsor-cta" href="/deals">CLICK FOR EXCLUSIVE <img src="https://nutritionrealm.com/wp-content/uploads/2019/01/NR-LOGO-81X70.png" alt="Exclusive Nutrition Realm Deals"> DEALS</a>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>
                    <?php
                    break;

                case 'sidebar_left':
                    ?>
                    <div class="td-pb-span8 td-main-content <?php echo $td_sidebar_position; ?>-content" role="main">
                        <div class="td-ss-main-content">
                            <?php
                            locate_template('loop-single-7.php', true);
                            comments_template('', true);
                            ?>
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
                        <div class="td-ss-main-content">
                            <?php
                            locate_template('loop-single-7.php', true);
                            comments_template('', true);
                            ?>
                        </div>
                    </div>
                    <?php
                    break;

            }
            ?>
        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</article> <!-- /.post -->

<?php

get_footer();