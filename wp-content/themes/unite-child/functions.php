<?php
//Flims Post Type
if ( ! function_exists('films_post_type') ) {
	function films_post_type() {

		$labels = array(
			'name'                  => _x( 'Films', 'Post Type Genreal Name', 'wordpress' ),
			'singular_name'         => _x( 'Film', 'Post Type Singular Name', 'wordpress' ),
			'menu_name'             => __( 'Films', 'wordpress' ),
			'name_admin_bar'        => __( 'Films', 'wordpress' ),
			'archives'              => __( 'Films Archives', 'wordpress' ),
			'attributes'            => __( 'Films Attributes', 'wordpress' ),
			'parent_item_colon'     => __( 'Parent Film:', 'wordpress' ),
			'all_items'             => __( 'All Films', 'wordpress' ),
			'add_new_item'          => __( 'Add New Film', 'wordpress' ),
			'add_new'               => __( 'Add New', 'wordpress' ),
			'new_item'              => __( 'New Film', 'wordpress' ),
			'edit_item'             => __( 'Edit Film', 'wordpress' ),
			'update_item'           => __( 'Update Film', 'wordpress' ),
			'view_item'             => __( 'View Film', 'wordpress' ),
			'view_items'            => __( 'View Films', 'wordpress' ),
			'search_items'          => __( 'Search Films', 'wordpress' ),
			'not_found'             => __( 'Not found', 'wordpress' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'wordpress' ),
			'featured_image'        => __( 'Featured Image', 'wordpress' ),
			'set_featured_image'    => __( 'Set featured image', 'wordpress' ),
			'remove_featured_image' => __( 'Remove featured image', 'wordpress' ),
			'use_featured_image'    => __( 'Use as featured image', 'wordpress' ),
			'insert_into_item'      => __( 'Insert into Film', 'wordpress' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Film', 'wordpress' ),
			'items_list'            => __( 'Films list', 'wordpress' ),
			'items_list_navigation' => __( 'Films list navigation', 'wordpress' ),
			'filter_items_list'     => __( 'Filter Films list', 'wordpress' ),
		);
		$args = array(
			'label'                 => __( 'Film', 'wordpress' ),
			'description'           => __( 'Film Description', 'wordpress' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor' ),
			'taxonomies'            => array(''),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-format-video',
			'show_in_admin_bar'     => false,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'films', $args );
	}
	add_action( 'init', 'films_post_type', 0 );
}

//Genre Taxonomy    
function create_genre_taxonomies() {
	$labels = array(
		'name'              => _x( 'Genre', 'taxonomy Genreal name', 'wordpress' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'wordpress' ),
		'search_items'      => __( 'Search Genre', 'wordpress' ),
		'all_items'         => __( 'All Genre', 'wordpress' ),
		'parent_item'       => __( 'Parent Genre', 'wordpress' ),
		'parent_item_colon' => __( 'Parent Genre:', 'wordpress' ),
		'edit_item'         => __( 'Edit Genre', 'wordpress' ),
		'update_item'       => __( 'Update Genre', 'wordpress' ),
		'add_new_item'      => __( 'Add New Genre', 'wordpress' ),
		'new_item_name'     => __( 'New Genre Name', 'wordpress' ),
		'menu_name'         => __( 'Genre', 'wordpress' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre', 'with_front' => FALSE ),
	);

	register_taxonomy( 'genre', array( 'films' ), $args );
}
add_action( 'init', 'create_genre_taxonomies', 0 );

//Added country
function create_country_taxonomies() {
	$labels = array(
		'name'              => _x( 'Country', 'taxonomy Genreal name', 'wordpress' ),
		'singular_name'     => _x( 'Country', 'taxonomy singular name', 'wordpress' ),
		'search_items'      => __( 'Search Country', 'wordpress' ),
		'all_items'         => __( 'All Country', 'wordpress' ),
		'parent_item'       => __( 'Parent Country', 'wordpress' ),
		'parent_item_colon' => __( 'Parent Country:', 'wordpress' ),
		'edit_item'         => __( 'Edit Country', 'wordpress' ),
		'update_item'       => __( 'Update Country', 'wordpress' ),
		'add_new_item'      => __( 'Add New Country', 'wordpress' ),
		'new_item_name'     => __( 'New Country Name', 'wordpress' ),
		'menu_name'         => __( 'Country', 'wordpress' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'country', 'with_front' => FALSE ),
	);

	register_taxonomy( 'country', array( 'films' ), $args );
}
add_action( 'init', 'create_country_taxonomies', 0 );


//Added year


function create_year_taxonomies() {
	$labels = array(
		'name'              => _x( 'Year', 'taxonomy Genreal name', 'wordpress' ),
		'singular_name'     => _x( 'Year', 'taxonomy singular name', 'wordpress' ),
		'search_items'      => __( 'Search Year', 'wordpress' ),
		'all_items'         => __( 'All Year', 'wordpress' ),
		'parent_item'       => __( 'Parent Year', 'wordpress' ),
		'parent_item_colon' => __( 'Parent Year:', 'wordpress' ),
		'edit_item'         => __( 'Edit Year', 'wordpress' ),
		'update_item'       => __( 'Update Year', 'wordpress' ),
		'add_new_item'      => __( 'Add New Year', 'wordpress' ),
		'new_item_name'     => __( 'New Year Name', 'wordpress' ),
		'menu_name'         => __( 'Year', 'wordpress' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'year', 'with_front' => FALSE ),
	);

	register_taxonomy( 'year', array( 'films' ), $args );
}
add_action( 'init', 'create_year_taxonomies', 0 );

//Actors Taxonomy  

function create_actor_taxonomies() {
	$labels = array(
		'name'              => _x( 'Actors', 'taxonomy Genreal name', 'wordpress' ),
		'singular_name'     => _x( 'Actor', 'taxonomy singular name', 'wordpress' ),
		'search_items'      => __( 'Search Actor', 'wordpress' ),
		'all_items'         => __( 'All Actors', 'wordpress' ),
		'parent_item'       => __( 'Parent Actor', 'wordpress' ),
		'parent_item_colon' => __( 'Parent Actor:', 'wordpress' ),
		'edit_item'         => __( 'Edit Actor', 'wordpress' ),
		'update_item'       => __( 'Update Actor', 'wordpress' ),
		'add_new_item'      => __( 'Add New Actor', 'wordpress' ),
		'new_item_name'     => __( 'New Actor Name', 'wordpress' ),
		'menu_name'         => __( 'Actors', 'wordpress' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'actor', 'with_front' => FALSE ),
	);

	register_taxonomy( 'actor', array( 'films' ), $args );
}
add_action( 'init', 'create_actor_taxonomies', 0 );


//Shortcode

function display_films(){
	$args = array(
		'post_type' => 'films',
		'post_status' => 'publish',
		'order' => 'DESC',
		'posts_per_page' => 5,
	);

	$string = '';
	$query = new WP_Query( $args );
	if( $query->have_posts() ){
		$string .= '<ul class="recent-films">';
		while( $query->have_posts() ){
			$query->the_post();
			$string .= '<li><h5><a href="'.get_permalink().'">' . get_the_title() . '</a></h5><p>'. wp_trim_words( get_the_content(), 10, '...' ).'</p></li>';
		}
		$string .= '</ul>';
	}
	wp_reset_postdata();
	return $string;
}

function register_shortcodes() {
	add_shortcode( 'films', 'display_films' );
}
add_action( 'init', 'register_shortcodes' );

?>
