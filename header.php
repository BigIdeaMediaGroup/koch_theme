<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BIMG Base
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bimg-base' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding site-width">
			<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_site_url(); ?>/wp-content/themes/koch_theme/img/logo.png"></a>
		</div><!-- .site-branding -->
		<div class="top-half">
		<div class="contact-top site-width"
			<div itemscope itemtype="http://schema.org/Organization" class="site-contact">
			<span itemprop="name" class="display-none"><?php echo bimg_get_option( 'company' ); ?></span>
			<span itemprop="email"><a href="mailto:<?php echo bimg_get_option( 'email' ); ?>"><?php echo bimg_get_option( 'email' ); ?></a></span>
			<span itemprop="telephone"><?php echo bimg_get_option( 'phone' ); ?></span>
			</div><!-- .site-contact -->
			<div class="social-icons site-width">
			<?php
			$social_media = array( 'facebook', 'instagram', 'linkedin', 'pinterest', 'twitter', );
			foreach ( $social_media as $social ) {
				if ( bimg_get_option( $social ) === 'true' ) {
					echo '<a href="' . bimg_get_option( $social . '_url' ) . '"><i class="fa fa-' . $social . ' fa-2x"></i></a>';
				}
			}
			?>
			
			
    		</div><!-- .social-icons -->
		</div>
	
		</div>
		
		<div class="bottom-half">
			<nav id="site-navigation" class="main-navigation site-width" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'bimg-base' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
