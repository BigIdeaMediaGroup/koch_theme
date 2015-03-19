<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * Be sure to replace all instances of 'bimg_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

// array containing all pages
$page_list = array(
        'standard' => 'Option One',
        'custom'   => 'Option Two',
        'none'     => 'Option Three',
);

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
		'show_on'      => array( 'id' => array( 1890, ) ), // Specific post IDs to display this metabox
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
function bimg_register_home_service_highlight_metabox( $page_list ) {
    $prefix = '_bimg_home_service_highlight_';

    $bimg_home_service_highlight = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => 'Service Highlight',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 1890, ) ), // Specific post IDs to display this metabox
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

