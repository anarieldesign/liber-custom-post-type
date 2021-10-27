<?php
/**
 * Plugin Name: Liber Custom Post Type Plugin
 * Description: Custom Post Type Plugin
 * Version: 1.0.2
 * Author: Anariel Design
 * Author URI: http://www.anarieldesign.com
 */
// Register Custom Post Type
function custom_post_type_testimonials() {
	$labels = array(
		'name'                  => esc_html_x( 'Testimonials', 'Post Type General Name', 'liber' ),
		'singular_name'         => esc_html_x( 'Testimonial', 'Post Type Singular Name', 'liber' ),
		'menu_name'             => esc_html__( 'Testimonials', 'liber' ),
		'name_admin_bar'        => esc_html__( 'Testimonials', 'liber' ),
		'archives'              => esc_html__( 'Item Archives', 'liber' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'liber' ),
		'all_items'             => esc_html__( 'All Items', 'liber' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'liber' ),
		'add_new'               => esc_html__( 'Add New', 'liber' ),
		'new_item'              => esc_html__( 'New Item', 'liber' ),
		'edit_item'             => esc_html__( 'Edit Item', 'liber' ),
		'update_item'           => esc_html__( 'Update Item', 'liber' ),
		'view_item'             => esc_html__( 'View Item', 'liber' ),
		'search_items'          => esc_html__( 'Search Item', 'liber' ),
		'not_found'             => esc_html__( 'Not found', 'liber' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'liber' ),
		'featured_image'        => esc_html__( 'Featured Image', 'liber' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'liber' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'liber' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'liber' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'liber' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'liber' ),
		'items_list'            => esc_html__( 'Items list', 'liber' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'liber' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'liber' ),
	);
	
	$args = array(
		'label'                 => esc_html__( 'Testimonials', 'liber' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'custom_post_type_testimonials' );

function custom_post_type_menu() {
	$labels = array(
		'name'                  => esc_html_x( 'Food Menus', 'Post Type General Name', 'liber' ),
		'singular_name'         => esc_html_x( 'Menu Item', 'Post Type Singular Name', 'liber' ),
		'menu_name'             => esc_html__( 'Food Menus', 'liber' ),
		'name_admin_bar'        => esc_html__( 'Food Menus', 'liber' ),
		'archives'              => esc_html__( 'Item Archives', 'liber' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'liber' ),
		'all_items'             => esc_html__( 'All Items', 'liber' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'liber' ),
		'add_new'               => esc_html__( 'Add New', 'liber' ),
		'new_item'              => esc_html__( 'New Item', 'liber' ),
		'edit_item'             => esc_html__( 'Edit Item', 'liber' ),
		'update_item'           => esc_html__( 'Update Item', 'liber' ),
		'view_item'             => esc_html__( 'View Item', 'liber' ),
		'search_items'          => esc_html__( 'Search Item', 'liber' ),
		'not_found'             => esc_html__( 'Not found', 'liber' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'liber' ),
		'featured_image'        => esc_html__( 'Featured Image', 'liber' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'liber' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'liber' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'liber' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'liber' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'liber' ),
		'items_list'            => esc_html__( 'Items list', 'liber' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'liber' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'liber' ),
	);
	
	$args = array(
		'label'                 => esc_html__( 'Food Menus', 'liber' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	
	register_post_type( 'menu', $args );

}
add_action( 'init', 'custom_post_type_menu' );

// Register Custom Taxonomy
function custom_taxonomy_menu_category() {

	$labels = array(
		'name'                       => esc_html__( 'Menu Category', 'liber' ),
		'singular_name'              => esc_html__( 'Menu Category', 'liber' ),
		'menu_name'                  => esc_html__( 'Menu Categories', 'liber' ),
		'all_items'                  => esc_html__( 'All Items', 'liber' ),
		'parent_item'                => esc_html__( 'Parent Item', 'liber' ),
		'parent_item_colon'          => esc_html__( 'Parent Item:', 'liber' ),
		'new_item_name'              => esc_html__( 'New Item Name', 'liber' ),
		'add_new_item'               => esc_html__( 'Add New Item', 'liber' ),
		'edit_item'                  => esc_html__( 'Edit Item', 'liber' ),
		'update_item'                => esc_html__( 'Update Item', 'liber' ),
		'view_item'                  => esc_html__( 'View Item', 'liber' ),
		'separate_items_with_commas' => esc_html__( 'Separate items with commas', 'liber' ),
		'add_or_remove_items'        => esc_html__( 'Add or remove items', 'liber' ),
		'choose_from_most_used'      => esc_html__( 'Choose from the most used', 'liber' ),
		'popular_items'              => esc_html__( 'Popular Items', 'liber' ),
		'search_items'               => esc_html__( 'Search Items', 'liber' ),
		'not_found'                  => esc_html__( 'Not Found', 'liber' ),
		'no_terms'                   => esc_html__( 'No items', 'liber' ),
		'items_list'                 => esc_html__( 'Items list', 'liber' ),
		'items_list_navigation'      => esc_html__( 'Items list navigation', 'liber' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);

	register_taxonomy( 'menu_category', array( 'menu' ), $args );

}
add_action( 'init', 'custom_taxonomy_menu_category', 0 );

/**
 * Add meta box
 *
 * @param post $post The post object
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/add_meta_boxes
 */
function menu_add_meta_boxes( $post ){
	add_meta_box( 'menu_meta_box', esc_html__( 'Menu Item Price', 'liber' ), 'menu_build_meta_box', 'menu', 'normal', 'low' );
}
add_action( 'add_meta_boxes_menu', 'menu_add_meta_boxes' );

/**
 * Build custom field meta box
 *
 * @param post $post The post object
 */
function menu_build_meta_box( $post ){
	// make sure the form request comes from WordPress
	wp_nonce_field( basename( __FILE__ ), 'menu_meta_box_nonce' );

	// retrieve the _menu_price current value
	$current_price = get_post_meta( $post->ID, '_menu_price', true );

	?>
	<div class='inside'>

		<p>
			<input type="text" name="price" value="<?php echo $current_price; ?>" /> 
		</p>

	</div>
	<?php
}

/**
 * Store custom field meta box data
 *
 * @param int $post_id The post ID.
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/save_post
 */
function menu_save_meta_box_data( $post_id ){
	// verify meta box nonce
	if ( !isset( $_POST['menu_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['menu_meta_box_nonce'], basename( __FILE__ ) ) ){
		return;
	}

	// return if autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
		return;
	}

  // Check the user's permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ){
		return;
	}

	// store custom fields values
	// price string
	if ( isset( $_REQUEST['price'] ) ) {
		update_post_meta( $post_id, '_menu_price', sanitize_text_field( $_POST['price'] ) );
	}
}
add_action( 'save_post_menu', 'menu_save_meta_box_data' );

add_action('plugins_loaded', 'liber_load_textdomain');
function liber_load_textdomain() {
	load_plugin_textdomain( 'liber-custom-post-type-master', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
}
