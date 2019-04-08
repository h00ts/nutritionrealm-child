<!--
Header style 13
-->
<?php
$header_bg_img_class = '';
if ( !td_util::get_option('tds_header_background_image') == '' ) {
    $header_bg_img_class = 'td-header-background-image';
}

// read if we have a mobile logo loaded - to hide the main logo on mobile
$td_logo_mobile = '';
if (td_util::get_option('tds_logo_menu_upload') != '') {
    $td_logo_mobile = 'td-logo-mobile-loaded';
}
?>

<div class="td-header-wrap td-header-style-13 <?php echo $header_bg_img_class ?>">
    <?php if(!td_util::get_option('tds_header_background_image') == '') { ?>
        <div class="td-header-bg td-container-wrap <?php echo td_util::get_option('td_full_header_background'); ?>"></div>
    <?php } ?>

    <?php if(td_util::get_option('tds_top_bar') == '') { ?>
        <div class="td-header-top-menu-full td-container-wrap <?php echo td_util::get_option('td_full_top_bar'); ?>">
            <div class="td-container td-header-row td-header-top-menu">
                <?php td_api_top_bar_template::_helper_show_top_bar() ?>
            </div>
        </div>
    <?php } ?>

    <div class="td-banner-wrap-full td-logo-wrap-full new-hup-top <?php echo $td_logo_mobile?> td-container-wrap <?php echo td_util::get_option('td_full_header'); ?>">
        <div class="top-bar-style-1 td-container-wrap">
            <div class="td-header-sp-logo">
                <?php locate_template('parts/header/logo-text_style-13.php', true);?>
            </div>
        </div>
    </div>

    <div class="hub_new_sub" style="background-color: black;">
        <div class="_form_1" style="display: none;" id="hup_Subnew"></div>
    </div>
    
	<div class="td-header-menu-wrap-full td-container-wrap new-hup-header <?php echo td_util::get_option('td_full_menu'); ?>">
        <?php
            $menuSearchClass = '';
            if(!td_util::get_option('tds_search_placement') == '')
                $menuSearchClass = 'td-header-menu-no-search';
        ?>

        <div class="td-header-menu-wrap td-header-gradient td-container-wrap <?php echo $menuSearchClass ?>">
			<div class="td-container td-header-row td-header-main-menu">
				<?php locate_template('parts/header/header-menu.php', true);?>
			</div>
		</div>

	</div>

    <?php if (td_util::is_ad_spot_enabled('header')) { ?>
        <div class="td-banner-wrap-full td-banner-bg td-container-wrap <?php echo td_util::get_option('td_full_header'); ?>">
            <div class="td-container-header td-header-row td-header-header">
                <div class="td-header-sp-recs">
                    <?php locate_template('parts/header/ads.php', true); ?>
                </div>
            </div>
        </div>
    <?php } ?>

</div>