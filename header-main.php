<!--
http://new-in-you.com/wp-content/uploads/2015/03/big_banner2.jpg
-->

<!doctype html >
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php td_util::author_meta(); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php

    //facebook sharing fix for videos, we add the custom meta data
    if (is_single()) {
        global $post;
        if (has_post_thumbnail($post->ID)) {
            $td_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            if (!empty($td_image[0])) {
                echo '<meta property="og:image" content="' .  $td_image[0] . '" />';
            }
        }
    }


    $tds_favicon_upload = td_util::get_option('tds_favicon_upload');
    if (!empty($tds_favicon_upload)) {
        echo '<link rel="icon" type="image/png" href="' . $tds_favicon_upload . '">';
    }

    $tds_ios_76 = td_util::get_option('tds_ios_icon_76');
    $tds_ios_120 = td_util::get_option('tds_ios_icon_120');
    $tds_ios_152 = td_util::get_option('tds_ios_icon_152');
    $tds_ios_114 = td_util::get_option('tds_ios_icon_114');
    $tds_ios_144 = td_util::get_option('tds_ios_icon_144');

    if(!empty($tds_ios_76)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="76x76" href="' . $tds_ios_76 . '"/>';
    }

    if(!empty($tds_ios_120)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="120x120" href="' . $tds_ios_120 . '"/>';
    }

    if(!empty($tds_ios_152)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="152x152" href="' . $tds_ios_152 . '"/>';
    }


    if(!empty($tds_ios_114)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="' . $tds_ios_114 . '"/>';
    }


    if(!empty($tds_ios_144)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="' . $tds_ios_144 . '"/>';
    }


    wp_head();
    ?>
</head>

<body <?php body_class() ?>>



<div id="outer-wrap">
    <?php locate_template('parts/menu-mobile.php', true);// load the mobile menu?>
    <div id="inner-wrap" class="td-transition-content-and-menu">
<?php


// show the black top menu if it's enabled
if (td_util::get_option('tds_' . 'top_menu') != 'hide') {
    locate_template('parts/menu-top.php', true);
}

        // full width logo + menu
        //locate_template('parts/header-style-3-logo.php', true);


?>     
<!-- full width logo -->
<div class="td-header-bg">
    <div class="container header-style-3">
        <div class="row">
            <div class="span12 td-full-logo" role="banner" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/Organization">
                <div class="td-grid-wrap">
                    <div class="container-fluid">
                        <?php
                        //read the logo + retina logo
                        /*$td_customLogo = td_util::get_option('tds_logo_upload');*/
                        /* CUSTOM MAIN PAGE LOGO SET HERE */
                        $td_customLogo = "http://new-in-you.com/wp-content/uploads/2015/03/big_banner2.jpg";
                        $td_customLogoR = td_util::get_option('tds_logo_upload_r');

                        $td_logo_alt = td_util::get_option('tds_logo_alt');
                        $td_logo_title = td_util::get_option('tds_logo_title');

                        if (!empty($td_logo_title)) {
                            $td_logo_title = ' title="' . $td_logo_title . '"';
                        }

                        if (!empty($td_customLogoR)) {
                            //if retina
                            ?>
                            <a itemprop="url" href="<?php echo home_url(); ?>">
                                <img class="td-retina-data td-logo"  data-retina="<?php echo htmlentities($td_customLogoR) ?>" src="<?php echo $td_customLogo?>" alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title ?>/>
                            </a>
                            <meta itemprop="name" content="<?php bloginfo('name')?>">
                        <?php
                        } else {
                            //not retina
                            if (!empty($td_customLogo)) {
                                ?>
                                <a class="td-logo" itemprop="url" href="<?php echo home_url(); ?>"><img src="<?php echo $td_customLogo?>" alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title ?>/></a>
                                <meta itemprop="name" content="<?php bloginfo('name')?>">
                            <?php
                            }
                        }




                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php       
        locate_template('parts/menu-header.php', true);
        locate_template('parts/header-style-3-ad.php', true);


do_action('td_wp_booster_after_header'); //used by unique articles



