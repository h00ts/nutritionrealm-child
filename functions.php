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

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/* Author: @h00ts */
/* Custom post types */

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
    'menu_position' => 4,
);
	register_post_type( 'nr_experts', $args );
}

/* Define: Deals post type */
/* Use Advanced Custom Fields plug-in to add custom fields */
function create_nr_deals_custom_post_type() {
	$labels = array(
		'name'                => __( 'Deals' ),
		'singular_name'       => __( 'Deal'),
		'menu_name'           => __( 'Deals'),
		'parent_item_colon'   => __( 'Parent Deal'),
		'all_items'           => __( 'All Deals'),
		'view_item'           => __( 'View Deal'),
		'add_new_item'        => __( 'Add New Deal'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Deal'),
		'update_item'         => __( 'Update Deal'),
		'search_items'        => __( 'Search Deal'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'deals'),
		'description'         => __( 'Deals, Coupons and Discounts'),
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
    'rewrite' => array('slug' => 'deal'),
    'menu_icon' => 'dashicons-carrot',
    'menu_position' => 5,
);
	register_post_type( 'nr_deals', $args );
}

/* Register Custom Post types & taxonomies */
add_action( 'init', 'create_nr_experts_custom_post_type', 0 );
add_action( 'init', 'create_nr_deals_custom_post_type', 0 );
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


function nr_enqueue_slider_styles() {
  if ( is_page_template( 'page-deals.php' ) || is_tax( 'deal_categories' ) ) {
      wp_enqueue_style( 'page-deals', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
  }
}
add_action( 'wp_enqueue_scripts', 'nr_enqueue_slider_styles' );
