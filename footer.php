<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BIMG Base
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="section group">
			<div class="col span_1_of_3">
				<section>
					<h1>Minority Affiliations &amp; Certifications</h1>
					<img src="<?php echo bimg_get_footer_option('image'); ?>">
					<p><?php echo bimg_get_footer_option('description'); ?></p>
				</section>
				<section>
					<h1>Be Social With Koch</h1>
					<?php
					$social_networks = array( 'facebook', 'instagram', 'linkedin', 'pinterest', 'twitter', );
					foreach ( $social_networks as $social ) {
						if ( bimg_get_option($social) === 'true') {
							echo '<a href="' . bimg_get_option( $social . '_url' ) . '"><i class="fa fa-' . $social . ' fa-2x"></i></a>';
						}
					}
					?>
				</section>
			</div>
			<section class="col span_1_of_3">
				<h1>Contact Us</h1>
				<address>
					<h2><?php echo bimg_get_footer_option( 'location1' ); ?></h2><br>
					<?php echo bimg_get_footer_option( 'address1' ); ?><br>
					<?php echo bimg_get_footer_option( 'city1' ) . ', '; ?>
					<?php echo bimg_get_footer_option( 'state1' ) . ' '; ?>
					<?php echo bimg_get_footer_option( 'zipcode1' ); ?><br>
					<?php echo 'Telephone: + ' . bimg_get_footer_option( 'tel1' ); ?><br>
					<?php echo 'Fax: + ' . bimg_get_footer_option( 'fax1' ); ?><br>
					<?php echo 'Email: ' . '<a href="mailto:' . bimg_get_footer_option( 'address1' ) . '">' . bimg_get_footer_option( 'address1' ) . '</a>'; ?>
				</address>
				<address>
					<h2><?php echo bimg_get_footer_option( 'location2' ); ?></h2>
					<?php echo bimg_get_footer_option( 'address2' ); ?><br>
					<?php echo bimg_get_footer_option( 'city2' ) . ', '; ?>
					<?php echo bimg_get_footer_option( 'state2' ) . ' '; ?>
					<?php echo bimg_get_footer_option( 'zipcode2' ); ?><br>
					<?php echo 'Telephone: + ' . bimg_get_footer_option( 'tel2' ); ?><br>
					<?php echo 'Fax: + ' . bimg_get_footer_option( 'fax2' ); ?><br>
					<?php echo 'Email: ' . '<a href="mailto:' . bimg_get_footer_option( 'address2' ) . '">' . bimg_get_footer_option( 'address2' ) . '</a>'; ?>
				</address>
				<address>
					<h2><?php echo bimg_get_footer_option( 'location3' ); ?></h2>
					<?php echo bimg_get_footer_option( 'address3' ); ?><br>
					<?php echo bimg_get_footer_option( 'city3' ) . ', '; ?>
					<?php echo bimg_get_footer_option( 'state3' ) . ' '; ?>
					<?php echo bimg_get_footer_option( 'zipcode3' ); ?><br>
					<?php echo 'Telephone: + ' . bimg_get_footer_option( 'tel3' ); ?><br>
					<?php echo 'Fax: + ' . bimg_get_footer_option( 'fax3' ); ?><br>
					<?php echo 'Email: ' . '<a href="mailto:' . bimg_get_footer_option( 'address3' ) . '">' . bimg_get_footer_option( 'address3' ) . '</a>'; ?>
				</address>
			</section>
			<section class="col span_1_of_3">
				<h1>Ready to talk about your project?</h1>
				<p>Drop us a line or give us a call.</p>
				<!-- TODO: Contact Form Goes Here -->
				<p><?php echo bimg_get_footer_option( 'tagline' ); ?></p>
			</section>
		</div>
		<div class="site-info">
			<span><?php echo bimg_get_option('company'); ?></span>
			<span><?php echo bimg_get_option('tagline'); ?></span>
			<span>Copyright &copy; <?php echo date('Y'); ?> <?php echo bimg_get_option('attribution'); ?></span>
			<span>All Rights Reserved</span>
			<span>Website by <a href="http://bigideamediagroup.com">Big Idea Media Group</a></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
