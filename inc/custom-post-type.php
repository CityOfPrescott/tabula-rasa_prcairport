<?php
/*************************************************************
CUSTOM POST TYPES
**************************************************************/

/** Construction Post Type
**************************************************************/
function construction_post_type() {

	$labels = array(
		'name'                => _x( 'Construction Projects', 'Post Type General Name', 'tabula_rasa' ),
		'singular_name'       => _x( 'Construction Project', 'Post Type Singular Name', 'tabula_rasa' ),
		'menu_name'           => __( 'Construction Projects', 'tabula_rasa' ),
		'parent_item_colon'   => __( 'Parent Construction Project:', 'tabula_rasa' ),
		'all_items'           => __( 'All Construction Projects', 'tabula_rasa' ),
		'view_item'           => __( 'View Construction Project', 'tabula_rasa' ),
		'add_new_item'        => __( 'Add New Construction Project', 'tabula_rasa' ),
		'add_new'             => __( 'Add New Construction Project', 'tabula_rasa' ),
		'edit_item'           => __( 'Edit Construction Project', 'tabula_rasa' ),
		'update_item'         => __( 'Update Construction Project', 'tabula_rasa' ),
		'search_items'        => __( 'Search Construction Projects', 'tabula_rasa' ),
		'not_found'           => __( 'No Construction Projects found', 'tabula_rasa' ),
		'not_found_in_trash'  => __( 'No Construction Projects found in Trash', 'tabula_rasa' ),
	);
	$args = array(
		'label'               => __( 'Construction', 'tabula_rasa' ),
		'description'         => __( 'Construction Projects', 'tabula_rasa' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'construction', $args );

}
add_action( 'init', 'construction_post_type', 0 );

/** Status Taxonomy for Construction Type
-------------------------------------------------------------- */
function status_custom_taxonomy()  {

	$labels = array(
		'name'                       => _x( 'Project Status', 'Taxonomy General Name', 'tabula_rasa' ),
		'singular_name'              => _x( 'Project Status', 'Taxonomy Singular Name', 'tabula_rasa' ),
		'menu_name'                  => __( 'Status', 'tabula_rasa' ),
		'all_items'                  => __( 'All Statuses', 'tabula_rasa' ),
		'parent_item'                => __( 'Parent Status', 'tabula_rasa' ),
		'parent_item_colon'          => __( 'Parent Status:', 'tabula_rasa' ),
		'new_item_name'              => __( 'New Status Name', 'tabula_rasa' ),
		'add_new_item'               => __( 'Add New Status', 'tabula_rasa' ),
		'edit_item'                  => __( 'Edit Status', 'tabula_rasa' ),
		'update_item'                => __( 'Update Status', 'tabula_rasa' ),
		'separate_items_with_commas' => __( 'Separate statuses with commas', 'tabula_rasa' ),
		'search_items'               => __( 'Search Statuses', 'tabula_rasa' ),
		'add_or_remove_items'        => __( 'Add or remove statuses', 'tabula_rasa' ),
		'choose_from_most_used'      => __( 'Choose from the most used statuses', 'tabula_rasa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => false,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'status', 'construction', $args );

}
add_action( 'init', 'status_custom_taxonomy', 0 );

/** Documents Taxonomy
-------------------------------------------------------------- */
function documents_custom_taxonomy()  {

	$labels = array(
		'name'                       => _x( 'Documents', 'Taxonomy General Name', 'tabula_rasa' ),
		'singular_name'              => _x( 'Document', 'Taxonomy Singular Name', 'tabula_rasa' ),
		'menu_name'                  => __( 'Document', 'tabula_rasa' ),
		'all_items'                  => __( 'All Documents', 'tabula_rasa' ),
		'parent_item'                => __( 'Parent Document', 'tabula_rasa' ),
		'parent_item_colon'          => __( 'Parent Document:', 'tabula_rasa' ),
		'new_item_name'              => __( 'New Document Name', 'tabula_rasa' ),
		'add_new_item'               => __( 'Add New Document', 'tabula_rasa' ),
		'edit_item'                  => __( 'Edit Document', 'tabula_rasa' ),
		'update_item'                => __( 'Update Document', 'tabula_rasa' ),
		'separate_items_with_commas' => __( 'Separate documents with commas', 'tabula_rasa' ),
		'search_items'               => __( 'Search documents', 'tabula_rasa' ),
		'add_or_remove_items'        => __( 'Add or remove documents', 'tabula_rasa' ),
		'choose_from_most_used'      => __( 'Choose from the most used documents', 'tabula_rasa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'					 =>	true,
	);
	register_taxonomy( 'documents', 'attachment', $args );

}
add_action( 'init', 'documents_custom_taxonomy', 0 );

/** Status Metabox
-------------------------------------------------------------- */
function status_metaboxes( $meta_boxes ) {
	$prefix = 'pma_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'status_metabox',
		'title' => 'Project Status',
		'pages' => array('construction'), // post type
		'context' => 'side',
		'priority' => 'default',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Choose status',
				'desc' => '',
				'id'   => $prefix . 'status',
				'type'     => 'taxonomy_radio',
				'taxonomy' => 'status', // Taxonomy Slug
			),				
		),
	);
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'status_metaboxes' );

/** Documents Shortcode
-------------------------------------------------------------- */
function document_list( $atts ) {
	extract( shortcode_atts( array(
		'cat_name' => ''
	), $atts ) );
	//$my_cats = get_term_by( 'slug', 'forms-and-applications', 'documents' );
	//print_r( $my_cats );
	//$cat_id = $my_cats->term_id;
	$doc_list = '<ul class="documents">';
	$args = array( 
		'numberposts' 	=> -1,
		'order'			=> 'ASC',
		'orderby'		=> 'title',
		'post_type' 	=> 'attachment',
		'documents'		=> $cat_name,

	);
	$attachments = get_posts( $args );
	if ( $attachments ) {
		foreach ( $attachments as $attachment ) {
			$doc_list .= '<li>';
			$doc_list .=  wp_get_attachment_link( $attachment->ID, true );
			$doc_list .= '</li>';
		  }
	} 
	$doc_list .= '</ul>';
	return $doc_list;
}
function register_shortcodes(){
   add_shortcode('doc_list', 'document_list');
}
add_action( 'init', 'register_shortcodes');

/*********************************************************
Posts 2 Posts
********************************************************/
function my_connection_types() {
/** Associates construction posts to construction post types **/
	p2p_register_connection_type( array(
		'name' => 'related_construction_posts',
		'from' => 'post',
		'to' => 'construction'
	) );
}
add_action( 'p2p_init', 'my_connection_types' );
?>