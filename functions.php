<?php


/*  ----------------------------------------------------------------------------
    WordPress booster framework - this is our theme framework - all the content and settings are there
    It is not necessary to include it in the child theme only if you want to use the API
*/
if (!defined('TD_THEME_WP_BOOSTER')) {
	include TEMPLATEPATH . '/includes/td_wordpres_booster.php';
}

//Gets post cat slug and looks for single-[cat slug].php and applies it
/*
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(STYLESHEETPATH . "/single-{$cat->slug}.php") )
		return STYLESHEETPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);
*/

/* ADD PHP EXECUTE FUNCTIONALITY TO TEXT WIDGET AREA */
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

/* Author: h00ts */
/* Register: Deals post type */
function create_nr_deals() {
     register_post_type( 'nr_deals',
       array(
         'labels' => array(
           'name' => __( 'Deals' ),
           'singular_name' => __( 'Deal' )
         ),
         'public' => true,
         'has_archive' => true,
         'rewrite' => array('slug' => 'deal'),
         'menu_icon' => 'dashicons-carrot',
         'menu_position' => 4,
         'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
         'description' => 'Deals, coupons and discounts'
       )
     );
   }
   add_action( 'init', 'create_nr_deals' );