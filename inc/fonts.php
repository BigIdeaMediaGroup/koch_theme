<?php
function theme_slug_scripts_styles() {
    wp_enqueue_style( 'theme-slug-fonts', theme_slug_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'theme_slug_scripts_styles' );

function theme_slug_editor_styles() {
    add_editor_style( array( 'editor-style.css', theme_slug_fonts_url() ) );
}
add_action( 'after_setup_theme', 'theme_slug_editor_styles' );

function theme_slug_custom_header_fonts() {
        wp_enqueue_style( 'theme-slug-fonts', theme_slug_fonts_url(), array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'theme_slug_scripts_styles' );

function theme_slug_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
     * supported by Lustria, translate this to 'off'. Do not translate into
     * your own language.
     */
    $oswald = _x( 'on', 'Oswald font: on or off', 'theme-slug' );

    /* Translators: If there are characters in your language that are not
     * supported by Lato, translate this to 'off'. Do not translate into your
     * own language.
     */
    $roboto = _x( 'on', 'Roboto font: on or off', 'theme-slug' );

    if ( 'off' !== $oswald || 'off' !== $lato ) {
        $font_families = array();

        if ( 'off' !== $oswald ) {
            $font_families[] = 'Oswald:300';
        }

        if ( 'off' !== $roboto ) {
            $font_families[] = 'Roboto Slab:400,700,300,100';
        }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }
    
    

    return $fonts_url;
}
