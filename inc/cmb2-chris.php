<?php
/**************************************************************
* SERVICES PAGE
***************************************************************/
add_action( 'cmb2_init', 'services_repeating_group_field' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function services_repeating_group_field() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_services_group_';

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => 'Services',
		'object_types' => array( 'page', ),
		'show_on'      => array( 'id' => array( 14, ) ), // Specific post IDs to display this metabox
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'demo',
		'type'        => 'group',
		'description' => 'Generates reusable form entries', 
		'options'     => array(
			'group_title'   => 'Service {#}',  // {#} gets replaced by row number
			'add_button'    =>  'Add Another Service', 
			'remove_button' =>  'Remove Service', 
			'sortable'      => true, // beta
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => 'Service Title', 
		'id'         => 'title',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => 'Service Description', 
		'description' => 'Write a short description for this service', 
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Service Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );
}

/**************************************************************
* g Page (Press, Comunity Service
***************************************************************/

add_action( 'cmb2_init', 'generic' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function generic() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_generic_group_';

	/**
	 * Repeatable Field Groups
	 */
	$bimg_generic = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => 'Body',
		'object_types' => array( 'page', ),
		'show_on'      => array( 'id' => array( 28, ) ), // Specific post IDs to display this metabox
	) );
	
	$bimg_generic->add_field( array(
		'name' => 'Header Image',
		'desc' => 'Upload an image or enter a URL.', 
		'id'   => $prefix . 'image',
		'type' => 'file',
	) );	
	$bimg_generic->add_field( array(
		'name'    =>  'Content', 
		'desc'    =>  'Press release content box.', 
		'id'      => $prefix . 'wysiwyg',
		'type'    => 'wysiwyg',
		'options' => array( 'textarea_rows' => 20, ),
	) );
	
}

/**************************************************************
* GALLARY  (Press, Comunity Service)
***************************************************************/
add_action( 'cmb2_init', 'services_repeating_gallery' );
function services_repeating_gallery() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_services_gallery_group_';

	$bimg_generic_gallery = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => 'Gallery',
		'object_types' => array( 'page', ),
		'show_on'      => array( 'id' => array( 28, ) ), // Specific post IDs to display this metabox
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$bimg_generic_gallery_group = $bimg_generic_gallery->add_field( array(
		'id'          => $prefix . 'group',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => 'Gallery {#}',  // {#} gets replaced by row number
			'add_button'    => 'Add Another Gallery', 
			'remove_button' => 'Remove Entire Gallery',
			'sortable'      => true, // beta
		),
	) );

	$bimg_generic_gallery->add_group_field( $bimg_generic_gallery_group, array(
		'name'       => 'Gallery Title', 
		'id'         => 'title',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$bimg_generic_gallery->add_group_field( $bimg_generic_gallery_group, array(
		'name'        => 'Gallery Description', 
		'description' => 'Write a short description for this gallery.',
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

	$bimg_generic_gallery->add_group_field( $bimg_generic_gallery_group, array(
		'name' => __( 'Service Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file_list',
		'repeatable' => true,
	) );
}



/**************************************************************
* Testimonials
***************************************************************/

add_action( 'cmb2_init', 'testimonials' );
function testimonials() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_testimonials_';

	/**
	 * Repeatable Field Groups
	 */
	$bimg_testimonials = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => 'Testimonial',
		'object_types' => array( 'page', ),
		'show_on'      => array( 'id' => array( 28, ) ), // Specific post IDs to display this metabox
	) );
	
	$bimg_testimonials->add_field( array(
		'name'       => 'Endorser',
		'desc'    =>  'Example: "John Doe"',
		'id'         => 'endorser',
		'type'       => 'text',
	) );	
	
	$bimg_testimonials->add_field( array(
		'name'       => 'Endorser Position',
		'desc'       => 'Example: "Graphic Designer at New York Graphic Design"',
		'id'         => 'endorser_position',
		'type'       => 'text',
	) );
	
	
	$bimg_testimonials->add_field( array(
		'name'    => 'Testimonial Content', 
		'id'      => $prefix . 'textarea',
		'type'    => 'textarea',
		'options' => array( 'textarea_rows' => 10, ),
	) );
	
}