<?php
add_action( 'cmb2_init', 'services_repeating_group_field' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function services_repeating_group_field() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_yourprefix_group_';

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Repeating Field Group', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on'      => array( 'id' => array( 14, ) ), // Specific post IDs to display this metabox
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'demo',
		'type'        => 'group',
		'description' => __( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Service {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Service', 'cmb2' ),
			'remove_button' => __( 'Remove Service', 'cmb2' ),
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
		'name'       => __( 'Service Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Service Description', 'cmb2' ),
		'description' => __( 'Write a short description for this service', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Service Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );
}