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
				</section>
				<section>
					<h1>Be Social With Koch</h1>
				</section>
			</div>
			<section class="col span_1_of_3">
				<h1>Contact Us</h1>
				<address>
					<h2><?php echo bimg_get_footer_option( 'location1' ); ?></h2>
					<?php echo bimg_get_footer_option( 'address1' ); ?><br>
					<?php echo bimg_get_footer_option( 'city1' ); . ', ' ?>
					<?php echo bimg_get_footer_option( 'state1' ); . ' '?>
					<?php echo bimg_get_footer_option( 'areacode' ); ?><br>
					<?php echo 'Telephone: + ' . bimg_get_footer_option( 'tel1' ); ?><br>
					<?php echo 'Fax: + ' . bimg_get_footer_option( 'fax1' ); ?><br>
					<?php echo 'Email: ' . '<a href="mailto:' . bimg_get_footer_option( 'address1' ) . '">' . bimg_get_footer_option( 'address1' ) . '</a>'; ?>
				</address>
				<address></address>
				<address></address>
			</section>
			<section class="col span_1_of_3">
				<h1>Ready to talk about your project?</h1>
				<p>Drop us a line or give us a call.</p>
				<!-- Contact Form 7 -->
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
