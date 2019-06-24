<div id="td-header-menu" role="navigation">
    <div id="td-top-mobile-toggle"><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div>
    <div class="td-main-menu-logo td-logo-in-header">
        <?php
        if (td_util::get_option('tds_logo_menu_upload') == '') {
            locate_template('parts/header/logo.php', true, false);
        } else {
            locate_template('parts/header/logo-mobile.php', true, false);
        }?>
    </div>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu_class'=> 'sf-menu',
        'fallback_cb' => 'td_wp_page_menu',
        'walker' => new td_tagdiv_walker_nav_menu()
    ));


    //if no menu
    function td_wp_page_menu() {
        //this is the default menu
        echo '<ul class="sf-menu">';
        echo '<li class="menu-item-first"><a href="' . esc_url(home_url( '/' )) . 'wp-admin/nav-menus.php?action=locations">Click here - to select or create a menu</a></li>';
        echo '</ul>';
    }
    ?>
</div>

<?php
//check to see if we show the socials from our theme or from wordpress
if(td_util::get_option('td_social_networks_menu_show') == 'show') {
    echo '<div class="td-header-menu-social">';
    //get the socials that are set by user
    $td_get_social_network = td_options::get_array('td_social_networks');

    if (!empty($td_get_social_network)) {
        foreach ($td_get_social_network as $social_id => $social_link) {
            if (!empty($social_link)) {
                echo td_social_icons::get_icon($social_link, $social_id, true);
            }
        }
    }
    echo '</div>';
}
?>
<!--
<div class="header-login-btn">
    <a href="#"><i class="far fa-user"></i></a>
</div>
-->
<?php
//check to see if we show the search form default = '' - main menu
if(td_util::get_option('tds_search_placement') == '') { ?>
    <div class="header-search-wrap" style="display:flex;">
    <div class="header-login-btn">
        <a href="/login" style="display:inline-block;width:36px;line-height:48px;padding: 0 20px 0 0;color:#FFF;"><svg style="vertical-align:middle" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg></a>
    </div>
        <div class="td-search-btns-wrap">
            <a id="td-header-search-button" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
            <a id="td-header-search-button-mob" href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
        </div>

        <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
            <form method="get" class="td-search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
                <div role="search" class="td-head-form-search-wrap">
                    <input id="td-header-search" type="text" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" /><input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="<?php _etd('Search', TD_THEME_NAME)?>" />
                </div>
            </form>
            <div id="td-aj-search"></div>
        </div>
    </div>
<?php } else { ?>
    <div class="td-search-wrapper">
        <div id="td-top-search">
            <!-- Search -->
            <div class="header-search-wrap">
                <div class="dropdown header-search">
                    <a id="td-header-search-button-mob" href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>