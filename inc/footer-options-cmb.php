<?php
/**
 * BIMG CMB2 Theme Options
 * @version 0.1.0
 */
class bimg_Footer {

    /**
     * Option key, and option page slug
     * @var string
     */
    private $key = 'bimg_footer_options';

    /**
     * Options page metabox id
     * @var string
     */
    private $metabox_id = 'bimg_footer_options_metabox';

    /**
     * Options Page title
     * @var string
     */
    protected $title = 'Footer Options';

    /**
     * Options Page hook
     * @var string
     */
    protected $options_page = '';

    /**
     * Constructor
     * @since 0.1.0
     */
    public function __construct() {
        // Set our title
        $this->title = 'Footer Options';
    }

    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) );
        add_action( 'cmb2_init', array( $this, 'add_options_page_metabox' ) );
    }


    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init() {
        register_setting( $this->key, $this->key );
    }

    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        $this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ), 'dashicons-admin-generic', '99.1' );
    }

    /**
     * Admin page markup. Mostly handled by CMB2
     * @since  0.1.0
     */
    public function admin_page_display() {
?>
        <div class="wrap cmb2_options_page <?php echo $this->key; ?>">
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
            <?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
        </div>
<?php
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_metabox() {

        $siteOptions = new_cmb2_box( array(
            'id'      => $this->metabox_id,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );

        // Set our CMB2 fields (EXAMPLE)
        $siteOptions->add_field( array(
            'name'    => '<h3>Column One</h3>',
            'id'      => 'column1',
            'type'    => 'title',
        ) );

        $siteOptions->add_field( array(
      		'name' => 'Image',
      		'desc' => 'Upload an image or enter a URL.<br>The image must be exactly 00 x 00 pixels.',
      		'id'   => 'image',
      		'type' => 'file',
      	) );

        $siteOptions->add_field( array(
            'name'    => 'Description',
            'desc'    => 'Keep your description close to the length of the default to preserve formatting.',
            'id'      => 'description',
            'type'    => 'textarea',
        ) );

        $siteOptions->add_field( array(
            'name'    => '<h3>Column Two</h3>',
            'id'      => 'column2',
            'type'    => 'title',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Location 1',
            'id'      => 'location1',
            'type'    => 'text',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Address',
            'id'      => 'address1',
            'type'    => 'text',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'City',
            'id'      => 'city1',
            'type'    => 'text_medium',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'State',
            'id'      => 'state1',
            'type'    => 'text_small',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'ZIP Code',
            'id'      => 'zipcode1',
            'type'    => 'text_small',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Telephone',
            'id'      => 'tel1',
            'type'    => 'text_medium',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Fax',
            'id'      => 'fax1',
            'type'    => 'text_medium',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Email',
            'id'      => 'email1',
            'type'    => 'text_email',
        ) );

        $siteOptions->add_field( array(
            'name'    => '<hr>',
            'id'      => 'split1',
            'type'    => 'title',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Location 2',
            'id'      => 'location2',
            'type'    => 'text',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Address',
            'id'      => 'address2',
            'type'    => 'text',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'City',
            'id'      => 'city2',
            'type'    => 'text_medium',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'State',
            'id'      => 'state2',
            'type'    => 'text_small',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'ZIP Code',
            'id'      => 'zipcode2',
            'type'    => 'text_small',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Telephone',
            'id'      => 'tel2',
            'type'    => 'text_medium',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Fax',
            'id'      => 'fax2',
            'type'    => 'text_medium',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Email',
            'id'      => 'email2',
            'type'    => 'text_email',
        ) );

        $siteOptions->add_field( array(
            'name'    => '<hr>',
            'id'      => 'split2',
            'type'    => 'title',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Location 3',
            'id'      => 'location3',
            'type'    => 'text',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Address',
            'id'      => 'address3',
            'type'    => 'text',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'City',
            'id'      => 'city3',
            'type'    => 'text_medium',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'State',
            'id'      => 'state3',
            'type'    => 'text_small',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'ZIP Code',
            'id'      => 'zipcode3',
            'type'    => 'text_small',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Telephone',
            'id'      => 'tel3',
            'type'    => 'text_medium',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Fax',
            'id'      => 'fax3',
            'type'    => 'text_medium',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Email',
            'id'      => 'email3',
            'type'    => 'text_email',
        ) );

        $siteOptions->add_field( array(
            'name'    => '<h3>Column 3</h3>',
            'id'      => 'column3',
            'type'    => 'title',
        ) );

        $siteOptions->add_field( array(
            'name'    => 'Tagline',
            'id'      => 'tagline',
            'type'    => 'text',
            'default' => 'In God Alone We Trust'
        ) );
    }

    /**
     * Public getter method for retrieving protected/private variables
     * @since  0.1.0
     * @param  string  $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     */
    public function __get( $field ) {
        // Allowed fields to retrieve
        if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
            return $this->{$field};
        }

        throw new Exception( 'Invalid property: ' . $field );
    }

}

// Get it started
$GLOBALS['bimg_Footer'] = new bimg_Footer();
$GLOBALS['bimg_Footer']->hooks();

/**
 * Helper function to get/return the bimg_Footer object
 * @since  0.1.0
 * @return bimg_Footer object
 */
function bimg_Footer() {
    global $bimg_Footer;
    return $bimg_Footer;
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function bimg_get_footer_option( $key = '' ) {
    global $bimg_Footer;
    return cmb2_get_option( $bimg_Footer->key, $key );
}
