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

/*
 * Home Page (EXAMPLE)
 */
add_action( 'cmb2_init', 'bimg_register_home_feature_metabox' );
function bimg_register_home_feature_metabox() {
    $prefix = '_bimg_home_feature_';

    $bimg_home_feature = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => 'Feature',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 701, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_home_feature->add_field( array(
		'name' => 'Feature Title',
		'desc' => 'Set a title to appear in the feature box.',
		'id'   => $prefix . 'title',
		'type' => 'text',
    ) );

	$bimg_home_feature->add_field( array(
		'name' => 'Feature Text',
		'desc' => 'Provide additional text for the feature box.',
		'id'   => $prefix . 'text',
		'type' => 'textarea',
	) );
}

