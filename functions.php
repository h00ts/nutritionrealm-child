<?php
/*  ----------------------------------------------------------------------------
    WordPress booster framework - this is our theme framework - all the content and settings are there
    It is not necessary to include it in the child theme only if you want to use the API

if (!defined('TD_THEME_WP_BOOSTER')) {
	include TEMPLATEPATH . '/includes/td_wordpress_booster.php';
}*/

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

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter ('acf_the_content', 'wpautop');

/* Author: @h00ts */

// Async load
function nr_async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async";
    }
add_filter( 'clean_url', 'nr_async_scripts', 11, 1 );



/* Custom post types */

/* Define Brands */
function create_nr_brands_custom_post_type() {
	$labels = array(
		'name'                => __( 'Brands' ),
		'singular_name'       => __( 'Brand'),
		'menu_name'           => __( 'Brands'),
		'parent_item_colon'   => __( 'Parent Brand'),
		'all_items'           => __( 'All Brand'),
		'view_item'           => __( 'View Brand'),
		'add_new_item'        => __( 'Add New Brand'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Brand'),
		'update_item'         => __( 'Update Brand'),
		'search_items'        => __( 'Search Brand'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'brands'),
		'description'         => __( 'Brands'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => false,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => true,
	  'yarpp_support'       => true,
		'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'rewrite' => array('slug' => 'brand'), /* change to discounts at some point */
    'menu_icon' => 'dashicons-megaphone',
    'menu_position' => 6,
  );
	register_post_type( 'nr_brands', $args );
}

/* Define Reviews */
function create_nr_reviews_custom_post_type() {
	$labels = array(
		'name'                => __( 'Reviews' ),
		'singular_name'       => __( 'Review'),
		'menu_name'           => __( 'Reviews'),
		'parent_item_colon'   => __( 'Parent Reviews'),
		'all_items'           => __( 'All Reviews'),
		'view_item'           => __( 'View Reviews'),
		'add_new_item'        => __( 'Add New Review'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Review'),
		'update_item'         => __( 'Update Review'),
		'search_items'        => __( 'Search Reviews'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'reviews'),
		'description'         => __( 'Reviews'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	  'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite' => array('slug' => 'review'),
    'menu_icon' => 'dashicons-clipboard',
    'menu_position' => 6,
  );
	register_post_type( 'nr_reviews', $args );
}

/* Define: Experts post type */
function create_nr_experts_custom_post_type() {
	$labels = array(
		'name'                => __( 'Experts' ),
		'singular_name'       => __( 'Expert'),
		'menu_name'           => __( 'Experts'),
		'parent_item_colon'   => __( 'Parent Expert'),
		'all_items'           => __( 'All Experts'),
		'view_item'           => __( 'View Expert'),
		'add_new_item'        => __( 'Add New Expert'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Expert'),
		'update_item'         => __( 'Update Expert'),
		'search_items'        => __( 'Search Expert'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'expert'),
		'description'         => __( 'Experts'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	  'yarpp_support'       => true,
		'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'rewrite' => array('slug' => 'expert'),
    'menu_icon' => 'dashicons-id',
    'menu_position' => 6,
);
	register_post_type( 'nr_experts', $args );
}

/* Define: Deals post type */
/* Use Advanced Custom Fields plug-in to add custom fields */
function create_nr_deals_custom_post_type() {
	$labels = array(
		'name'                => __( 'Discounts' ),
		'singular_name'       => __( 'Discount'),
		'menu_name'           => __( 'Discounts'),
		'parent_item_colon'   => __( 'Parent Coupon'),
		'all_items'           => __( 'All Coupons'),
		'view_item'           => __( 'View Coupon'),
		'add_new_item'        => __( 'Add New Coupon'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Coupon'),
		'update_item'         => __( 'Update Coupon'),
		'search_items'        => __( 'Search Coupon'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'deals'),
		'description'         => __( 'Deals, Coupons and Discounts'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => false,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => true,
	  'yarpp_support'       => true,
		'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'rewrite' => array('slug' => 'deal'), /* change to discounts at some point */
    'menu_icon' => 'dashicons-tickets',
    'menu_position' => 6,
  );
	register_post_type( 'nr_deals', $args );
}

function create_nr_brand_collections_custom_post_type() {
	$labels = array(
		'name'                => __( 'Brand Collections' ),
		'singular_name'       => __( 'Brand Collection'),
		'menu_name'           => __( 'Brand Collections'),
		'parent_item_colon'   => __( 'Parent Brand Collection'),
		'all_items'           => __( 'All Brand Collections'),
		'view_item'           => __( 'View Brand Collection'),
		'add_new_item'        => __( 'Add New Brand Collection'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Brand Collection'),
		'update_item'         => __( 'Update Brand Collection'),
		'search_items'        => __( 'Search Brand Collections'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'brand_collections'),
		'description'         => __( 'Brand Collections'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => false,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => true,
	  'yarpp_support'       => true,
		'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'rewrite' => array('slug' => 'brand-collection'), /* change to discounts at some point */
    'menu_icon' => 'dashicons-carrot',
    'menu_position' => 6,
  );
	register_post_type( 'nr_brand_collections', $args );
}

/* Define Customer Reviews */
function create_nr_customer_reviews_custom_post_type() {
	$labels = array(
		'name'                => __( 'Customer Reviews' ),
		'singular_name'       => __( 'Cusomter Review'),
		'menu_name'           => __( 'Customer Reviews'),
		'parent_item_colon'   => __( 'Parent Brand'),
		'all_items'           => __( 'All Customer Reviews'),
		'view_item'           => __( 'View Customer Review'),
		'add_new_item'        => __( 'Add New Customer Review'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Brand'),
		'update_item'         => __( 'Update Customer Review'),
		'search_items'        => __( 'Search Customer Review'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'customer-review'),
		'description'         => __( 'Customer Reviews'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => false,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => true,
	  'yarpp_support'       => true,
		'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'rewrite' => array('slug' => 'customer-review'), /* change to discounts at some point */
    'menu_icon' => 'dashicons-groups',
    'menu_position' => 6,
  );
	register_post_type( 'nr_customer_reviews', $args );
}


/* Register Custom Post types & taxonomies */
add_action( 'init', 'create_nr_brands_custom_post_type', 0 );
add_action( 'init', 'create_nr_reviews_custom_post_type', 0 );
add_action( 'init', 'create_nr_deals_custom_post_type', 0 );
add_action( 'init', 'create_nr_brand_collections_custom_post_type', 0 );
add_action( 'init', 'create_nr_experts_custom_post_type', 0 );
add_action( 'init', 'create_nr_customer_reviews_custom_post_type', 0 );

add_action( 'init', 'create_nr_deals_custom_taxonomy', 0 );
add_action( 'init', 'create_nr_deals_categories_taxonomy', 0 );




/* Define: Custom Taxonomies */


function create_nr_deals_custom_taxonomy() {

  $labels = array(
    'name' => _x( 'Partnership', 'taxonomy general name' ),
    'singular_name' => _x( 'Partnership', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Partnership' ),
    'all_items' => __( 'All Partnerships' ),
    'parent_item' => __( 'Parent Partnership' ),
    'parent_item_colon' => __( 'Parent Partnership:' ),
    'edit_item' => __( 'Edit Partnership' ),
    'update_item' => __( 'Update Partnership' ),
    'add_new_item' => __( 'Add New Partnership' ),
    'new_item_name' => __( 'New Partnership Name' ),
    'menu_name' => __( 'Partnerships' ),
  );

  register_taxonomy('partnership',array('nr_deals'), array(
		'hierarchical' => false,
		'parent_item'  => null,
		'parent_item_colon' => null,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'deals' ),
  ));
}

function create_nr_deals_categories_taxonomy() {

  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ),
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );

  register_taxonomy('deal_categories',array('nr_deals'), array(
		'hierarchical' => false,
		'parent_item'  => null,
		'parent_item_colon' => null,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'deals/category' ),
  ));
}

function nr_enqueue_klavyio() {
	wp_enqueue_script( 'klavyio', 'https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=Lpi5jL#asyncload', [], false, true );
}
add_action( 'wp_enqueue_scripts', 'nr_enqueue_klavyio' );
function nr_enqueue_styles_scripts() {
  if ( is_singular( 'nr_reviews' ) || is_page_template( 'page-deals.php' ) || is_tax( 'deal_categories' ) ) {
		 wp_enqueue_style( 'fontawesome', '/wp-content/themes/Newspaper-child/css/fontawesome.css' );
 		  wp_enqueue_style( 'aoscss', '/wp-content/themes/Newspaper-child/css/aos.css' );
			wp_enqueue_style( 'flickitycss', '/wp-content/themes/Newspaper-child/css/flickity.css' );
			wp_enqueue_script( 'flickityjs', '/wp-content/themes/Newspaper-child/js/flickity.js', [], false, true);
			wp_enqueue_script( 'flickity-lazyload', '/wp-content/themes/Newspaper-child/js/flickity-bg-lazyload.js', [], false, true);
			wp_enqueue_script( 'aosjs', '/wp-content/themes/Newspaper-child/js/aos.js', [], false, true);
			wp_enqueue_script( 'rellax', '/wp-content/themes/Newspaper-child/js/rellax.js', [], false, true);
  }

  if ( is_front_page() ) {
			wp_enqueue_style( 'fontawesome', '/wp-content/themes/Newspaper-child/css/fontawesome.css' );
			wp_enqueue_style( 'flickitycss', '/wp-content/themes/Newspaper-child/css/flickity.css' );
			wp_enqueue_style( 'flickity-fade', '/wp-content/themes/Newspaper-child/css/flickity-fade.css' );
			wp_enqueue_script( 'flickityjs', '/wp-content/themes/Newspaper-child/js/flickity.js', [], false, true);
			wp_enqueue_script( 'flickity-fade', '/wp-content/themes/Newspaper-child/js/flickity-fade.js', [], false, true);
			wp_enqueue_script( 'flickity-lazyload', '/wp-content/themes/Newspaper-child/js/flickity-bg-lazyload.js', [], false, true);
  }

  if ( has_tag( ['premium', 'free', 'gold'] ) ){
	wp_enqueue_script( 'jqmodal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js', [], false, true);
	wp_enqueue_style( 'jqmodal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css');
  }
}
add_action( 'wp_enqueue_scripts', 'nr_enqueue_styles_scripts' );
add_action( 'wp_enqueue_scripts', 'nr_deregister_styles_scripts', 20 );

function nr_deregister_styles_scripts() {
	wp_deregister_style('sb-font-awesome');
	wp_dequeue_style('sb-font-awesome');
}

function mepr_disable_auto_login($auto_login, $membership_id, $mepr_user) {
	return false;
  }
  add_filter('mepr-auto-login', 'mepr_disable_auto_login', 3, 3);


  add_filter('woocommerce_billing_fields','wpb_custom_billing_fields');
  // remove some fields from billing form
  // ref - https://docs.woothemes.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/
  function wpb_custom_billing_fields( $fields = array() ) {
	  unset($fields['billing_company']);
	  unset($fields['billing_address_1']);
	  unset($fields['billing_address_2']);
	  unset($fields['billing_state']);
	  unset($fields['billing_city']);
	  unset($fields['billing_phone']);
	  unset($fields['billing_postcode']);
	  unset($fields['billing_country']);
	  return $fields;
  }
// Removes Order Notes Title - Additional Information & Notes Field
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );



// Remove Order Notes Field
add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );

function remove_order_notes( $fields ) {
	 unset($fields['order']['order_comments']);
	 unset($fields['order']['account_username']);
	 unset($fields['order']['account_password']);
     return $fields;
}
