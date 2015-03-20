<?php
/*
 * Home Page
 */
add_action( 'cmb2_init', 'bimg_register_home_intro_metabox' );
function bimg_register_home_intro_metabox() {
	$prefix = '_bimg_home_intro_';

	$bimg_home_intro = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => 'Introduction',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 17, ) ), // Specific post IDs to display this metabox
	) );

	$bimg_home_intro->add_field( array(
		'name' => 'Heading',
		'desc' => 'Set the title that appears at the top of the home page.',
		'id'   => $prefix . 'heading',
		'type' => 'text',
	) );

	$bimg_home_intro->add_field( array(
		'name' => 'Subheading',
		'desc' => 'Set the subtitle that appears under the heading.',
		'id'   => $prefix . 'subheading',
		'type' => 'text',
	) );

	$bimg_home_intro->add_field( array(
		'name' => 'Summary',
		'id'   => $prefix . 'summary',
		'type' => 'textarea',
	) );
}

add_action( 'cmb2_init', 'bimg_register_home_service_highlight_metabox' );
function bimg_register_home_service_highlight_metabox() {
	$prefix = '_bimg_home_service_highlight_';

	$bimg_home_service_highlight = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => 'Service Highlight',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 17, ) ), // Specific post IDs to display this metabox
	) );

	$bimg_home_service_highlight->add_field( array(
		'name' => 'Title',
		'desc' => 'Name of the service showcased on the front page.',
		'id'   => $prefix . 'title',
		'type' => 'text',
	) );

	$bimg_home_service_highlight->add_field( array(
		'name' => 'Description',
		'desc' => 'Description of the featured service.',
		'id'   => $prefix . 'description',
		'type' => 'textarea',
	) );

	$bimg_home_service_highlight->add_field( array(
		'name' => 'Image',
		'id'   => $prefix . 'image',
		'type' => 'file',
	) );

	$bimg_home_service_highlight->add_field( array(
		'name' => 'Read More Page',
		'id'   => $prefix . 'link',
		'type' => 'select',
		'options' => array(
			'page-slug-1' => 'Page One',
			'page-slug-2'   => 'Page Two',
			'page-slug-3'     => 'Page Three',
		),
		'default' => 'page-slug-1',
	) );
}

add_action( 'cmb2_init', 'bimg_register_about_description_metabox' );
function bimg_register_about_description_metabox() {
	$prefix = '_bimg_about_description_';

	$bimg_about = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => 'About',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 1786, ) ), // Specific post IDs to display this metabox
	) );

	$bimg_about->add_field( array(
		'name' => 'Title',
		'desc' => 'Section Heading.',
		'id'   => $prefix . 'title',
		'type' => 'text',
	) );

	$bimg_about->add_field( array(
		'name' => 'Summary',
		'id'   => $prefix . 'summary',
		'type' => 'textarea',
	) );

	$bimg_about->add_field( array(
		'name' => 'Quote',
		'id'   => $prefix . 'quote',
		'type' => 'text',
	) );

	$bimg_about->add_field( array(
		'name' => 'Featured Image',
		'id'   => $prefix . 'image',
		'type' => 'file',
	) );

}

add_action( 'cmb2_init', 'bimg_register_about_gallery_metabox' );
function bimg_register_about_gallery_metabox() {
	$prefix = '_bimg_about_gallery_';

	$bimg_about_gallery = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => 'Gallery',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 1786, ) ), // Specific post IDs to display this metabox
	) );

	$bimg_about_gallery_group = $bimg_about_gallery->add_field( array(
		'id'          => $prefix . 'group',
		'type'        => 'group',
		'description' => ( 'Add photos to the bottom of the page.' ),
		'options'     => array(
			'group_title'   => ( 'Entry {#}' ), // {#} gets replaced by row number
			'add_button'    => ( 'Add Another Photo' ),
			'remove_button' => ( 'Remove Entry' ),
			'sortable'      => true, // beta
		),
	) );

			/**
			 * Group fields works the same, except ids only need
			 * to be unique to the group. Prefix is not needed.
			 *
			 * The parent field's id needs to be passed as the first argument.
			 */
			$bimg_about_gallery->add_group_field( $bimg_about_gallery_group, array(
				'name'       => ( 'Image Title' ),
				'id'         => 'title',
				'type'       => 'text',
				// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
			) );

			$bimg_about_gallery->add_group_field( $bimg_about_gallery_group, array(
				'name'       => ( 'Image' ),
				'id'         => 'image',
				'type'       => 'file',
				// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
			) );

}

add_action( 'cmb2_init', 'bimg_register_about_minorities_metabox' );
function bimg_register_about_minorities_metabox() {
	$prefix = '_bimg_about_minorities_';

	$bimg_about_minorities = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => 'Minority Affiliations',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 1904, ) ), // Specific post IDs to display this metabox
	) );

	$bimg_about_minorities->add_field( array(
		'name' => 'Summary',
		'id'   => $prefix . 'summary',
		'type' => 'textarea',
	) );

	$bimg_about_minorities->add_field( array(
		'name' => 'Minorities',
		'id'   => $prefix . 'minorities',
		'type' => 'text',
		'repeatable' => true,
	) );

	$bimg_about_minorities->add_field( array(
		'name' => 'NAICS Codes',
		'id'   => $prefix . 'codes',
		'type' => 'text',
		'repeatable' => true,
	) );

}
